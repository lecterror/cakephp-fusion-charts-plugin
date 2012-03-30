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

class StackedDemoController extends FusionChartsAppController
{
	var $name = 'StackedDemo';
	var $components = array('FusionCharts.FusionCharts');
	var $helpers = array('FusionCharts.FusionCharts');
	var $uses = array();
	var $layout = 'chart.demo';

	/**
	 * FusionCharts component
	 *
	 * @var FusionChartsComponent
	 */
	var $FusionCharts = null;

	function column2d()
	{
		$this->FusionCharts->create
			(
				'Column2D Chart',
				array
				(
					'type' => 'StackedColumn2D',
					'width' => 600,
					'height' => 350,
					'id' => ''
				)
			);

		$this->FusionCharts->setChartParams
			(
				'Column2D Chart',
				array
				(
					'caption'			=> 'Cumulative Sales',
					'subCaption'		=> '( 2004 to 2006 )',
					'xAxisName'			=> 'Products',
					'yAxisName'			=> 'Sales',
					'decimalPrecision'	=> '0',
					'rotateNames'		=> '1',
					'numDivLines'		=> '3',
					'numberPrefix'		=> '$',
					'showValues'		=> '0',
					'formatNumberScale'	=> '0'
				)
			);

		$this->FusionCharts->addCategories
			(
				'Column2D Chart',
				array
				(
					'Product A',
					'Product B',
					'Product C',
					'Product D',
					'Product E'
				)
			);

		$this->FusionCharts->addDatasets
			(
				'Column2D Chart',
				array
				(
					'2004' => array
					(
						'params' => array
						(
							'color' => 'AFD8F8',
							'showValues' => '0'
						),
						'data' => array
						(
							array('value' => '25601.34'),
							array('value' => '20148.82'),
							array('value' => '17372.76'),
							array('value' => '35407.15'),
							array('value' => '38105.68')
						)
					),
					'2005' => array
					(
						'params' => array
						(
							'color' => 'F6BD0F',
							'showValues' => '0'
						),
						'data' => array
						(
							array('value' => '57401.85'),
							array('value' => '41941.19'),
							array('value' => '45263.37'),
							array('value' => '117320.16'),
							array('value' => '114845.27')
						)
					),
					'2006' => array
					(
						'params' => array
						(
							'color' => '8BBA00',
							'showValues' => '0'
						),
						'data' => array
						(
							array('value' => '45000.65'),
							array('value' => '44835.76'),
							array('value' => '18722.18'),
							array('value' => '77557.31'),
							array('value' => '92633.68')
						)
					)
				)
			);
	}

	function column3d()
	{
		$this->FusionCharts->create
			(
				'Column3D Chart',
				array
				(
					'type' => 'StackedColumn3D',
					'width' => 600,
					'height' => 350,
					'id' => ''
				)
			);

		$this->FusionCharts->setChartParams
			(
				'Column3D Chart',
				array
				(
					'caption'			=> 'Cumulative Sales',
					'subCaption'		=> '( 2004 to 2006 )',
					'xAxisName'			=> 'Products',
					'yAxisName'			=> 'Sales',
					'decimalPrecision'	=> '0',
					'rotateNames'		=> '1',
					'numDivLines'		=> '3',
					'numberPrefix'		=> '$',
					'showValues'		=> '0',
					'formatNumberScale'	=> '0'
				)
			);

		$this->FusionCharts->addCategories
			(
				'Column3D Chart',
				array
				(
					'Product A',
					'Product B',
					'Product C',
					'Product D',
					'Product E'
				)
			);

		$this->FusionCharts->addDatasets
			(
				'Column3D Chart',
				array
				(
					'2004' => array
					(
						'params' => array
						(
							'color' => 'AFD8F8',
							'showValues' => '0'
						),
						'data' => array
						(
							array('value' => '25601.34'),
							array('value' => '20148.82'),
							array('value' => '17372.76'),
							array('value' => '35407.15'),
							array('value' => '38105.68')
						)
					),
					'2005' => array
					(
						'params' => array
						(
							'color' => 'F6BD0F',
							'showValues' => '0'
						),
						'data' => array
						(
							array('value' => '57401.85'),
							array('value' => '41941.19'),
							array('value' => '45263.37'),
							array('value' => '117320.16'),
							array('value' => '114845.27')
						)
					),
					'2006' => array
					(
						'params' => array
						(
							'color' => '8BBA00',
							'showValues' => '0'
						),
						'data' => array
						(
							array('value' => '45000.65'),
							array('value' => '44835.76'),
							array('value' => '18722.18'),
							array('value' => '77557.31'),
							array('value' => '92633.68')
						)
					)
				)
			);
	}

	function bar2d()
	{
		$this->FusionCharts->create
			(
				'Bar2D Chart',
				array
				(
					'type' => 'StackedBar2D',
					'width' => 600,
					'height' => 350,
					'id' => ''
				)
			);

		$this->FusionCharts->setChartParams
			(
				'Bar2D Chart',
				array
				(
					'caption'			=> 'Cumulative Sales',
					'subCaption'		=> '( 2004 to 2006 )',
					'xAxisName'			=> 'Products',
					'yAxisName'			=> 'Sales',
					'decimalPrecision'	=> '0',
					'rotateNames'		=> '1',
					'numDivLines'		=> '3',
					'numberPrefix'		=> '$',
					'showValues'		=> '0',
					'formatNumberScale'	=> '0'
				)
			);

		$this->FusionCharts->addCategories
			(
				'Bar2D Chart',
				array
				(
					'Product A',
					'Product B',
					'Product C',
					'Product D',
					'Product E'
				)
			);

		$this->FusionCharts->addDatasets
			(
				'Bar2D Chart',
				array
				(
					'2004' => array
					(
						'params' => array
						(
							'color' => 'AFD8F8',
							'showValues' => '0'
						),
						'data' => array
						(
							array('value' => '25601.34'),
							array('value' => '20148.82'),
							array('value' => '17372.76'),
							array('value' => '35407.15'),
							array('value' => '38105.68')
						)
					),
					'2005' => array
					(
						'params' => array
						(
							'color' => 'F6BD0F',
							'showValues' => '0'
						),
						'data' => array
						(
							array('value' => '57401.85'),
							array('value' => '41941.19'),
							array('value' => '45263.37'),
							array('value' => '117320.16'),
							array('value' => '114845.27')
						)
					),
					'2006' => array
					(
						'params' => array
						(
							'color' => '8BBA00',
							'showValues' => '0'
						),
						'data' => array
						(
							array('value' => '45000.65'),
							array('value' => '44835.76'),
							array('value' => '18722.18'),
							array('value' => '77557.31'),
							array('value' => '92633.68')
						)
					)
				)
			);
	}

	function area2d()
	{
		$this->FusionCharts->create
			(
				'Area2D Chart',
				array
				(
					'type' => 'StackedArea2D',
					'width' => 600,
					'height' => 350,
					'id' => ''
				)
			);

		$this->FusionCharts->setChartParams
			(
				'Area2D Chart',
				array
				(
					'caption'					=> 'Monthly Sales Summary Comparison',
					'xAxisName'					=> 'Month',
					'yAxisName'					=> 'Sales',
					'numberPrefix'				=> '$',
					'showValues'				=> '0',
					'numVDivLines'				=> '10',
					'showAlternateVGridColor'	=> '1',
					'AlternateVGridColor'		=> 'e1f5ff',
					'divLineColor'				=> 'e1f5ff',
					'vDivLineColor'				=> 'e1f5ff',
					'bgColor'					=> 'E9E9E9',
					'canvasBorderThickness'		=> '0',
					'decimalPrecision'			=> '0'
				)
			);

		$this->FusionCharts->addCategories
			(
				'Area2D Chart',
				array
				(
					'Jan',
					'Feb',
					'Mar',
					'Apr',
					'May',
					'Jun',
					'Jul',
					'Aug',
					'Sep',
					'Oct',
					'Nov',
					'Dec'
				)
			);

		$this->FusionCharts->addDatasets
			(
				'Area2D Chart',
				array
				(
					'2004' => array
					(
						'params' => array
						(
							'color'					=> 'B1D1DC',
							'areaAlpha'				=> '60',
							'showAreaborder'		=> '1',
							'areaBorderThickness'	=> '1',
							'areaBorderColor'		=> '7B9D9D'
						),
						'data' => array
						(
							array('value' => '27400'),
							array('value' => '29800'),
							array('value' => '25800'),
							array('value' => '26800'),
							array('value' => '29600'),
							array('value' => '32600'),
							array('value' => '31800'),
							array('value' => '36700'),
							array('value' => '29700'),
							array('value' => '31900'),
							array('value' => '32900'),
							array('value' => '34800')
						)
					),
					'2003' => array
					(
						'params' => array
						(
							'color'					=> 'C8A1D1',
							'areaAlpha'				=> '60',
							'showAreaborder'		=> '1',
							'areaBorderThickness'	=> '1',
							'areaBorderColor'		=> '9871a1'
						),
						'data' => array
						(
							array('value' => ''),
							array('value' => ''),
							array('value' => '4500'),
							array('value' => '6500'),
							array('value' => '7600'),
							array('value' => '6800'),
							array('value' => '11800'),
							array('value' => '19700'),
							array('value' => '21700'),
							array('value' => '21900'),
							array('value' => '22900'),
							array('value' => '29800')
						)
					)
				)
			);

		$this->FusionCharts->addTrendLine
			(
				'Area2D Chart',
				array
				(
					'startValue'	=> '22000',
					'endValue'		=> '58000',
					'color'			=> '3366FF',
					'displayValue'	=> 'Target',
					'thickness'		=> '1',
					'alpha'			=> '80'
				)
			);
	}
}
