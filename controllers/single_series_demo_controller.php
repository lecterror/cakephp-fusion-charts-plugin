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

class SingleSeriesDemoController extends FusionChartsAppController
{
	var $name = 'SingleSeriesDemo';
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
					'type' => 'Column2D',
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
					'caption' => 'Monthly Unit Sales',
					'xAxisName' => 'Month',
					'yAxisName' => 'Units',
					'decimalPrecision' => '0',
					'formatNumberScale' => '0'
				)
			);

		$this->FusionCharts->addChartData
			(
				'Column2D Chart',
				array
				(
					array('value' => '462', 'params' => array('name' => 'Jan')),
					array('value' => '857', 'params' => array('name' => 'Feb')),
					array('value' => '671', 'params' => array('name' => 'Mar')),
					array('value' => '494', 'params' => array('name' => 'Apr')),
					array('value' => '761', 'params' => array('name' => 'May')),
					array('value' => '960', 'params' => array('name' => 'Jun')),
					array('value' => '629', 'params' => array('name' => 'Jul')),
					array('value' => '622', 'params' => array('name' => 'Aug')),
					array('value' => '376', 'params' => array('name' => 'Sep')),
					array('value' => '494', 'params' => array('name' => 'Oct')),
					array('value' => '761', 'params' => array('name' => 'Nov')),
					array('value' => '960', 'params' => array('name' => 'Dec'))
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
					'type' => 'Column3D',
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
					'caption' => 'Monthly Unit Sales',
					'xAxisName' => 'Month',
					'yAxisName' => 'Units',
					'decimalPrecision' => '0',
					'formatNumberScale' => '0'
				)
			);

		$this->FusionCharts->addChartData
			(
				'Column3D Chart',
				array
				(
					array('value' => '462', 'params' => array('name' => 'Jan')),
					array('value' => '857', 'params' => array('name' => 'Feb')),
					array('value' => '671', 'params' => array('name' => 'Mar')),
					array('value' => '494', 'params' => array('name' => 'Apr')),
					array('value' => '761', 'params' => array('name' => 'May')),
					array('value' => '960', 'params' => array('name' => 'Jun')),
					array('value' => '629', 'params' => array('name' => 'Jul')),
					array('value' => '622', 'params' => array('name' => 'Aug')),
					array('value' => '376', 'params' => array('name' => 'Sep')),
					array('value' => '494', 'params' => array('name' => 'Oct')),
					array('value' => '761', 'params' => array('name' => 'Nov')),
					array('value' => '960', 'params' => array('name' => 'Dec'))
				)
			);
	}

	function line2d()
	{
		$this->FusionCharts->create
			(
				'Line2D Chart',
				array
				(
					'type' => 'Line',
					'width' => 600,
					'height' => 350,
					'id' => ''
				)
			);

		$this->FusionCharts->setChartParams
			(
				'Line2D Chart',
				array
				(
					'caption'					=> 'Monthly Sales Summary',
					'subcaption'				=> 'For the year 2004',
					'xAxisName'					=> 'Month',
					'yAxisMinValue'				=> '15000',
					'yAxisName'					=> 'Sales',
					'decimalPrecision'			=> '0',
					'formatNumberScale'			=> '0',
					'numberPrefix'				=> '$',
					'showNames'					=> '1',
					'showValues'				=> '0',
					'showAlternateHGridColor'	=> '1',
					'AlternateHGridColor'		=> 'ff5904',
					'divLineColor'				=> 'ff5904',
					'divLineAlpha'				=> '20',
					'alternateHGridAlpha'		=> '5'
				)
			);

		$this->FusionCharts->addChartData
			(
				'Line2D Chart',
				array
				(
					array('value' => '17400', 'params' => array('name' => 'Jan', 'hoverText' => 'January')),
					array('value' => '19800', 'params' => array('name' => 'Feb', 'hoverText' => 'February')),
					array('value' => '21800', 'params' => array('name' => 'Mar', 'hoverText' => 'March')),
					array('value' => '23800', 'params' => array('name' => 'Apr', 'hoverText' => 'April')),
					array('value' => '29600', 'params' => array('name' => 'May', 'hoverText' => 'May')),
					array('value' => '27600', 'params' => array('name' => 'Jun', 'hoverText' => 'June')),
					array('value' => '31800', 'params' => array('name' => 'Jul', 'hoverText' => 'July')),
					array('value' => '39700', 'params' => array('name' => 'Aug', 'hoverText' => 'August')),
					array('value' => '37800', 'params' => array('name' => 'Sep', 'hoverText' => 'September')),
					array('value' => '21900', 'params' => array('name' => 'Oct', 'hoverText' => 'October')),
					array('value' => '32900', 'params' => array('name' => 'Nov', 'hoverText' => 'November')),
					array('value' => '39800', 'params' => array('name' => 'Dec', 'hoverText' => 'December'))
				)
			);
	}

	function pie3d()
	{
		$this->FusionCharts->create
			(
				'Pie3D Chart',
				array
				(
					'type' => 'Pie3D',
					'width' => 600,
					'height' => 350,
					'id' => ''
				)
			);

		$this->FusionCharts->setChartParams
			(
				'Pie3D Chart',
				array
				(
					'decimalPrecision'			=> '0',
					'showNames'					=> '1'
				)
			);

		$this->FusionCharts->addChartData
			(
				'Pie3D Chart',
				array
				(
					array('value' => '20', 'params' => array('name' => 'USA')),
					array('value' => '7', 'params' => array('name' => 'France')),
					array('value' => '12', 'params' => array('name' => 'India')),
					array('value' => '11', 'params' => array('name' => 'England')),
					array('value' => '8', 'params' => array('name' => 'Italy')),
					array('value' => '19', 'params' => array('name' => 'Canada')),
					array('value' => '15', 'params' => array('name' => 'Germany'))
				)
			);
	}

	function pie2d()
	{
		$this->FusionCharts->create
			(
				'Pie2D Chart',
				array
				(
					'type' => 'Pie2D',
					'width' => 600,
					'height' => 350,
					'id' => ''
				)
			);

		$this->FusionCharts->setChartParams
			(
				'Pie2D Chart',
				array
				(
					'decimalPrecision'			=> '0',
					'showNames'					=> '1'
				)
			);

		$this->FusionCharts->addChartData
			(
				'Pie2D Chart',
				array
				(
					array('value' => '20', 'params' => array('name' => 'USA', 'isSliced' => 1)),
					array('value' => '7', 'params' => array('name' => 'France')),
					array('value' => '12', 'params' => array('name' => 'India')),
					array('value' => '11', 'params' => array('name' => 'England')),
					array('value' => '8', 'params' => array('name' => 'Italy')),
					array('value' => '19', 'params' => array('name' => 'Canada')),
					array('value' => '15', 'params' => array('name' => 'Germany'))
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
					'type' => 'Bar2D',
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
					'caption'					=> 'Monthly Unit Sales',
					'xAxisName'					=> 'Month',
					'yAxisName'					=> 'Units',
					'decimalPrecision'			=> '0',
					'formatNumberScale'			=> '0',
					'chartRightMargin'			=> '30'
				)
			);

		$this->FusionCharts->addChartData
			(
				'Bar2D Chart',
				array
				(
					array('value' => '462', 'params' => array('name' => 'Jan')),
					array('value' => '857', 'params' => array('name' => 'Feb')),
					array('value' => '671', 'params' => array('name' => 'Mar')),
					array('value' => '494', 'params' => array('name' => 'Apr')),
					array('value' => '761', 'params' => array('name' => 'May')),
					array('value' => '960', 'params' => array('name' => 'Jun')),
					array('value' => '629', 'params' => array('name' => 'Jul')),
					array('value' => '622', 'params' => array('name' => 'Aug')),
					array('value' => '376', 'params' => array('name' => 'Sep')),
					array('value' => '494', 'params' => array('name' => 'Oct')),
					array('value' => '761', 'params' => array('name' => 'Nov')),
					array('value' => '960', 'params' => array('name' => 'Dec'))
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
					'type' => 'Area2D',
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
					'caption'					=> 'Monthly Sales Summary',
					'subcaption'				=> 'For the year 2006',
					'xAxisName'					=> 'Month',
					'yAxisName'					=> 'Sales',
					'yAxisMaxValue'				=> '45000',
					'yAxisMinValue'				=> '15000',
					'decimalPrecision'			=> '0',
					'numberPrefix'				=> '$'
				)
			);

		$this->FusionCharts->addChartData
			(
				'Area2D Chart',
				array
				(
					array('value' => '17400', 'params' => array('name' => 'Jan')),
					array('value' => '19800', 'params' => array('name' => 'Feb')),
					array('value' => '21800', 'params' => array('name' => 'Mar')),
					array('value' => '23800', 'params' => array('name' => 'Apr')),
					array('value' => '29600', 'params' => array('name' => 'May')),
					array('value' => '27600', 'params' => array('name' => 'Jun')),
					array('value' => '31800', 'params' => array('name' => 'Jul')),
					array('value' => '39700', 'params' => array('name' => 'Aug')),
					array('value' => '37800', 'params' => array('name' => 'Sep')),
					array('value' => '21900', 'params' => array('name' => 'Oct')),
					array('value' => '32900', 'params' => array('name' => 'Nov')),
					array('value' => '39800', 'params' => array('name' => 'Dec'))
				)
			);
	}

	function doughnut2d()
	{
		$this->FusionCharts->create
			(
				'Doughnut2D Chart',
				array
				(
					'type' => 'Doughnut2D',
					'width' => 600,
					'height' => 350,
					'id' => ''
				)
			);

		$this->FusionCharts->setChartParams
			(
				'Doughnut2D Chart',
				array
				(
					'showNames'					=> '1',
					'decimalPrecision'			=> '0'
				)
			);

		$this->FusionCharts->addChartData
			(
				'Doughnut2D Chart',
				array
				(
					array('value' => '20', 'params' => array('name' => 'USA')),
					array('value' => '7', 'params' => array('name' => 'France')),
					array('value' => '12', 'params' => array('name' => 'India')),
					array('value' => '11', 'params' => array('name' => 'England')),
					array('value' => '8', 'params' => array('name' => 'Italy')),
					array('value' => '19', 'params' => array('name' => 'Canada')),
					array('value' => '15', 'params' => array('name' => 'Germany'))
				)
			);
	}
}
