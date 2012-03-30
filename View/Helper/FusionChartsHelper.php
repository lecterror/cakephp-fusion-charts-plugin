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

class FusionChartsHelper extends AppHelper
{
	public $helpers = array('Html', 'Session');
	public $charts = array();
	
	
	/**
	 * Constructor.
	 * 
	 * @param View
	 * @param $options array
	 */
	public function __construct(View $View, $options = array())
	{
		parent::__construct($View, $options);	  
	}	

	public function beforeRender($viewFile)
	{
		$this->Html->script('/fusion_charts/js/FusionCharts', false);
		return true;
	}

	public function afterRender($viewFile)
	{
		CakeSession::delete('FusionChartsPlugin.Charts');
	}

	public function _getCharts()
	{
		static $read = false;

		if ($read === true)
		{
			return $this->charts;
		}

		$this->charts = CakeSession::read('FusionChartsPlugin.Charts');
		$read = true;

		return $this->charts;
	}

	public function render($name)
	{
		$charts = $this->_getCharts();

		if (!isset($charts[$name]))
		{
			trigger_error(sprintf(__('Chart %s could not be found', true), $name), E_USER_ERROR);
			return;
		}

		ob_start();
		$charts[$name]->renderChart();
		$output = @ob_get_contents();
		@ob_end_clean();

		return $this->output($output);
	}
}

