<?php
/**
	CakePHP FusionCharts Plugin

	Copyright (C) 2009-3827 dr. Hannibal Lecter / lecterror
	<http://lecterror.com/>

	Multi-licensed under:
		MPL <http://www.mozilla.org/MPL/MPL-1.1.html>
		LGPL <http://www.gnu.org/licenses/lgpl.html>
		GPL <http://www.gnu.org/licenses/gpl.html>
*/

/**
 * @property FusionCharts $name
 */
class FusionChartsComponent extends Component
{
	public $components = array('Session');

	public $controller;
	public $defaultSettings = array('swfUrl' => 'fusion_charts/swf/');
	public $settings = array();
	public $charts = array();
	
	/**
	 * Constructor
	 * 
	 * @param ComponentCollection $collection A ComponentCollection this component can use to lazy load its components
	 * @param array $settings Array of configuration settings
	 */
	public function __construct(ComponentCollection $collection, $settings = array())
	{
		parent::__construct($collection, $settings);

		$this->controller = $collection->getController();
		$this->settings = $settings;
	}

	public function initialize($controller)
	{
		$_settings = $this->defaultSettings;

		if (is_array($this->settings))
		{
			$_settings = array_merge($_settings, $this->settings);
		}

		$this->settings = $_settings;

		App::import('Vendor', 'FusionCharts.FusionCharts', true, array(), 'FusionCharts_Gen.php');
	}

	public function beforeRender($controller)
	{
		$this->Session->write('FusionChartsPlugin.Charts', $this->charts);
	}

	/**
	 * Creates a graph and associates it with a key "$name".
	 *
	 * Required options for $options param are:
	 *
	 * * type - A type of chart to be displayed.
	 * * width - Chart width.
	 * * height - Chart height.
	 *
	 * Optional params are:
	 *
	 * * id - An id.
	 *
	 * @param string $name
	 * @param array $options An array of options.
	 * @return bool True on success, false on failure.
	 */
	public function create($name, $options)
	{
		if (!is_array($options))
		{
			$this->log(sprintf(__('Please provide a set of options for chart %s!', true), $name));
			return false;
		}

		$type = $width = $height = $id = '';
		extract($options, EXTR_OVERWRITE);

		if (strtolower($type) == 'candlestick')
		{
			trigger_error(__('Candlestick chart type not supported in FusionCharts PHP class', true), E_USER_ERROR);
			return false;
		}

		$this->$name = new FusionCharts($type, $width, $height, $id);
		$this->setSwfUrl($name);

		$this->charts[$name] =& $this->$name;
		return true;
	}

	/**
	 * Sets a root URL for the chart's SWF.
	 *
	 * Normally, you don't need to call this as it called automatically
	 * after chart creation.
	 *
	 * @param string $name Chart name.
	 * @param string $url Root url.
	 */
	public function setSwfUrl($name, $url = null)
	{
		if (is_null($url))
		{	// @todo: modify to use plugin URLs if Cake dispacher changes..
			$url = sprintf('%s/%s', $this->controller->base, $this->settings['swfUrl']);
		}

		$this->$name->setSWFPath($url);
	}

	/**
	 * Sets chart parameters.
	 *
	 * @param string $name Chart name.
	 * @param array $params An array of chart options.
	 */
	public function setChartParams($name, $params = array())
	{
		if (empty($params))
		{
			return;
		}

		$this->$name->setChartParams($this->_restructureParams($params));
	}

	/**
	 * Sets params for categories.
	 *
	 * @param string $name Chart name.
	 * @param array $params An array of parameters.
	 */
	public function setCategoriesParams($name, $params = array())
	{
		if (empty($params))
		{
			return;
		}

		$this->$name->setCategoriesParams($this->_restructureParams($params));
	}

	/**
	 * Adds a category for a chart.
	 *
	 * @param string $name Chart name.
	 * @param array $categories An array of category names and options.
	 */
	public function addCategories($name, $categories = array())
	{
		foreach ($categories as $category => $options)
		{
			if (is_array($options))
			{
				$this->$name->addCategory($category, $this->_restructureParams($options));
			}
			else
			{
				$this->$name->addCategory($options);
			}
		}
	}

	/**
	 * Adds a dataset to a chart.
	 *
	 * Adds a dataset to a chart, along with dataset params and the actual data.
	 *
	 * A typical dataset would look like this:
	 *
	 * array
	 * {
	 * 	'datasetName' => array
	 * 	{
	 * 		'params' => array('of', 'params'),
	 * 		'data' => array(1, 2, 3, ..etc..)
	 * 	}
	 * }
	 *
	 * @param string $name Chart name.
	 * @param array $dataset An array of datasets.
	 */
	public function addDatasets($name, $datasets)
	{
		foreach ($datasets as $key => $value)
		{
			$params = '';

			if (isset($value['params']))
			{
				$params = $this->_restructureParams($value['params']);
			}

			$this->$name->addDataset($key, $params);

			if (isset($value['data']))
			{
				$this->addChartData($name, $value['data']);
			}
		}
	}

	/**
	 * Add chart data.
	 *
	 * @param string $name Chart name.
	 * @param array $data An array of values, and optionally params.
	 */
	public function addChartData($name, $data)
	{
		foreach ($data as $item)
		{
			if (isset($item['params']))
			{
				$this->$name->addChartData($item['value'], $this->_restructureParams($item['params']));
			}
			else
			{
				$this->$name->addChartData($item['value']);
			}
		}
	}

	/**
	 * Adds a trend line to a chart.
	 *
	 * @param string $name Chart name.
	 * @param array $data An array of trend line options.
	 */
	public function addTrendLine($name, $data = array())
	{
		$this->$name->addTrendLine($this->_restructureParams($data));
	}

	/**
	 * Add a category set, with an option to add the categories immediately.
	 *
	 * @param string $name Chart name.
	 * @param array $params An array of category set params.
	 * @param array $categories An array of categories with params.
	 */
	public function addGanttCategorySet($name, $params = array(), $categories = array())
	{
		$this->$name->addGanttCategorySet($this->_restructureParams($params));

		if (!empty($categories))
		{
			$this->addGanttCategories($name, $categories);
		}
	}

	/**
	 * Add a category to a gantt chart.
	 *
	 * @param string $name Chart name.
	 * @param array $categories An array of categories.
	 */
	public function addGanttCategories($name, $categories = array())
	{
		foreach ($categories as $categoryName => $categoryParams)
		{
			$this->$name->addGanttCategory($categoryName, $this->_restructureParams($categoryParams));
		}
	}

	/**
	 * Sets gantt processes parameters.
	 *
	 * @param string $name Chart name
	 * @param array $params An array of parameters for processes.
	 */
	public function setGanttProcessesParams($name, $params)
	{
		$this->$name->setGanttProcessesParams($this->_restructureParams($params));
	}

	/**
	 * Add gantt processes to a gantt chart.
	 *
	 * @param string $name Chart name.
	 * @param array $processes An array of gantt processes.
	 */
	public function addGanttProcesses($name, $processes)
	{
		foreach ($processes as $processName => $processParams)
		{
			$this->$name->addGanttProcess($processName, $this->_restructureParams($processParams));
		}
	}

	/**
	 * Sets params for all gantt tasks.
	 *
	 * @param string $name Chart name.
	 * @param array $params An array of params.
	 */
	public function setGanttTasksParams($name, $params)
	{
		$this->$name->setGanttTasksParams($this->_restructureParams($params));
	}

	/**
	 * Add gantt tasks.
	 *
	 * @param string $name Chart name.
	 * @param array $tasks An array of tasks.
	 */
	public function addGanttTasks($name, $tasks)
	{
		foreach ($tasks as $task)
		{
			$taskName = $task['name'];
			unset($task['name']);

			$this->$name->addGanttTask($taskName, $this->_restructureParams($task));
		}
	}

	/**
	 * Sets gantt connectors params.
	 *
	 * @param string $name Chart name.
	 * @param array $params An array of params.
	 */
	public function setGanttConnectorsParams($name, $params)
	{
		$this->$name->setGanttConnectorsParams($this->_restructureParams($params));
	}

	/**
	 *
	 * Add a gantt connector.
	 *
	 * @param string $name Chart name.
	 * @param string $from From task id.
	 * @param string $to To task id.
	 * @param array $params An array of params for connector.
	 */
	public function addGanttConnector($name, $from, $to, $params)
	{
		$this->$name->addGanttConnector($from, $to, $this->_restructureParams($params));
	}

	/**
	 * Add a gantt datatable.
	 *
	 * @param string $name Chart name.
	 * @param array $params An array of datatable params.
	 */
	public function setGanttDatatableParams($name, $params)
	{
		$this->$name->setGanttDatatableParams($this->_restructureParams($params));
	}

	/**
	 * Add a datacolumn to a gantt datatable.
	 *
	 * @param string $name Chart name.
	 * @param array $params An array of datacolumn params.
	 * @param array $columns An array of gantt datacolumn text arrays.
	 */
	public function addGanttDatacolumn($name, $params = array(), $columns = array())
	{
		$this->$name->addGanttDatacolumn($this->_restructureParams($params));

		if (!empty($columns))
		{
			$this->addGanttColumnTexts($name, $columns);
		}
	}

	/**
	 * Add gantt column texts to a datacolumn.
	 *
	 * @param string $name Chart name.
	 * @param array $columns An array of gantt column texts/params.
	 */
	public function addGanttColumnTexts($name, $columns)
	{
		foreach ($columns as $column)
		{
			$params = (isset($column['params']) ? $column['params'] : array());

			$this->$name->addGanttColumnText($column['label'], $this->_restructureParams($params));
		}
	}

	/**
	 * Sets chart message options.
	 *
	 * @param string $name Chart name.
	 * @param array $params An array of options.
	 */
	public function setChartMessage($name, $params)
	{
		$this->$name->setChartMessage($this->_restructureParams($params));
	}

	/**
	 * Gets the complete chart XML in a string.
	 *
	 * @param string $name
	 * @return string
	 */
	public function getXml($name)
	{
		return $this->$name->getXML();
	}

	/**
	 * Utility function for parameter restructuring.
	 *
	 * Restructures cake-like params (arrays) into a FusionChart-like param
	 *
	 * @param array $params
	 * @return string
	 */
	public function _restructureParams($params)
	{
		if (empty($params))
		{
			return '';
		}

		$temp = array();

		foreach ($params as $key => $value)
		{
			$temp[] = sprintf('%s=%s', $key, $value);
		}

		return implode(';', $temp);
	}
}
