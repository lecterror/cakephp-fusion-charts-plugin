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

class MultiSeriesDemoController extends FusionChartsAppController
{
	var $name = 'MultiSeriesDemo';
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

	function column3d()
	{
		$this->FusionCharts->create
			(
				'Column3D Chart',
				array
				(
					'type' => 'MSColumn3D',
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
					'caption'					=> 'Global Export',
					'subcaption'				=> 'In Millions Tonnes per annum per Hectare',
					'xAxisName'					=> 'Continent',
					'yAxisName'					=> 'Export',
					'hoverCapBg'				=> 'DEDEBE',
					'hoverCapBorder'			=> '889E6D',
					'rotateNames'				=> '0',
					'yAxisMaxValue'				=> '100',
					'numDivLines'				=> '9',
					'divLineColor'				=> 'CCCCCC',
					'divLineAlpha'				=> '80',
					'decimalPrecision'			=> '0',
					'showAlternateHGridColor'	=> '1',
					'AlternateHGridAlpha'		=> '30',
					'AlternateHGridColor'		=> 'CCCCCC'
				)
			);

		$this->FusionCharts->setCategoriesParams
			(
				'Column3D Chart',
				array
				(
					'font' => 'Arial',
					'fontSize' => '11',
					'fontColor' => '000000'
				)
			);

		$this->FusionCharts->addCategories
			(
				'Column3D Chart',
				array
				(
					'N. America' => array('hoverText' => 'North America'),
					'Asia',
					'Europe',
					'Australia',
					'Africa'
				)
			);

		$this->FusionCharts->addDatasets
			(
				'Column3D Chart',
				array
				(
					'Rice' => array
					(
						'params' => array('color' => 'FDC12E'),
						'data' => array
						(
							array('value' => '30'),
							array('value' => '26'),
							array('value' => '29'),
							array('value' => '31'),
							array('value' => '34')
						)
					),
					'Wheat' => array
					(
						'params' => array('color' => '56B9F9'),
						'data' => array
						(
							array('value' => '67'),
							array('value' => '98'),
							array('value' => '79'),
							array('value' => '73'),
							array('value' => '80')
						)
					),
					'Grain' => array
					(
						'params' => array('color' => 'C9198D'),
						'data' => array
						(
							array('value' => '27'),
							array('value' => '25'),
							array('value' => '28'),
							array('value' => '26'),
							array('value' => '10')
						)
					)
				)
			);
	}

	function column2d()
	{
		$this->FusionCharts->create
			(
				'Column2D Chart',
				array
				(
					'type' => 'MSColumn2D',
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
					'caption'					=> 'Global Export',
					'subcaption'				=> 'In Millions Tonnes per annum per Hectare',
					'xAxisName'					=> 'Continent',
					'yAxisName'					=> 'Export',
					'hoverCapBg'				=> 'DEDEBE',
					'hoverCapBorder'			=> '889E6D',
					'rotateNames'				=> '0',
					'yAxisMaxValue'				=> '100',
					'numDivLines'				=> '9',
					'divLineColor'				=> 'CCCCCC',
					'divLineAlpha'				=> '80',
					'decimalPrecision'			=> '0',
					'showAlternateHGridColor'	=> '1',
					'AlternateHGridAlpha'		=> '30',
					'AlternateHGridColor'		=> 'CCCCCC'
				)
			);

		$this->FusionCharts->setCategoriesParams
			(
				'Column2D Chart',
				array
				(
					'font' => 'Arial',
					'fontSize' => '11',
					'fontColor' => '000000'
				)
			);

		$this->FusionCharts->addCategories
			(
				'Column2D Chart',
				array
				(
					'N. America' => array('hoverText' => 'North America'),
					'Asia',
					'Europe',
					'Australia',
					'Africa'
				)
			);

		$this->FusionCharts->addDatasets
			(
				'Column2D Chart',
				array
				(
					'Rice' => array
					(
						'params' => array('color' => 'FDC12E'),
						'data' => array
						(
							array('value' => '30'),
							array('value' => '26'),
							array('value' => '29'),
							array('value' => '31'),
							array('value' => '34')
						)
					),
					'Wheat' => array
					(
						'params' => array('color' => '56B9F9'),
						'data' => array
						(
							array('value' => '67'),
							array('value' => '98'),
							array('value' => '79'),
							array('value' => '73'),
							array('value' => '80')
						)
					),
					'Grain' => array
					(
						'params' => array('color' => 'C9198D'),
						'data' => array
						(
							array('value' => '27'),
							array('value' => '25'),
							array('value' => '28'),
							array('value' => '26'),
							array('value' => '10')
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
					'type' => 'MSArea2D',
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
					'caption'					=> 'Sales Volume',
					'subcaption'				=> 'For the month of Aug 2004',
					'divLineColor'				=> 'F47E00',
					'numDivLines'				=> '4',
					'showAreaBorder'			=> '1',
					'areaBorderColor'			=> '000000',
					'numberPrefix'				=> '$',
					'showNames'					=> '1',
					'numVDivLines'				=> '29',
					'vDivLineAlpha'				=> '30',
					'formatNumberScale'			=> '1',
					'rotateNames'				=> '1',
					'decimalPrecision'			=> '0'
				)
			);

		$this->FusionCharts->addCategories
			(
				'Area2D Chart',
				array
				(
					'08/01',
					'08/02',
					'08/03',
					'08/04',
					'08/05',
					'08/06',
					'08/07',
					'08/08',
					'08/09',
					'08/10',
					'08/11',
					'08/12',
					'08/13',
					'08/14',
					'08/15',
					'08/16',
					'08/17',
					'08/18',
					'08/19',
					'08/20',
					'08/21',
					'08/22',
					'08/23',
					'08/24',
					'08/25',
					'08/26',
					'08/27',
					'08/28',
					'08/29',
					'08/30',
					'08/31'
				)
			);

		$this->FusionCharts->addDatasets
			(
				'Area2D Chart',
				array
				(
					'Product A' => array
					(
						'params' => array
						(
							'color'					=> 'FF5904',
							'showValues'			=> '0',
							'areaAlpha'				=> '50',
							'showAreaBorder'		=> '1',
							'areaBorderThickness'	=> '2',
							'areaBorderColor'		=> 'FF0000'
						),
						'data' => array
						(
							array('value' => '36634'),
							array('value' => '43653'),
							array('value' => '55565'),
							array('value' => '49457'),
							array('value' => '64654'),
							array('value' => '58457'),
							array('value' => '66456'),
							array('value' => '48765'),
							array('value' => '52574'),
							array('value' => '49546'),
							array('value' => '42346'),
							array('value' => '51765'),
							array('value' => '78456'),
							array('value' => '53867'),
							array('value' => '38359'),
							array('value' => '63756'),
							array('value' => '45554'),
							array('value' => '6543'),
							array('value' => '7555'),
							array('value' => '4567'),
							array('value' => '7544'),
							array('value' => '6565'),
							array('value' => '6433'),
							array('value' => '3465'),
							array('value' => '3574'),
							array('value' => '6646'),
							array('value' => '4546'),
							array('value' => '9565'),
							array('value' => '5456'),
							array('value' => '5667'),
							array('value' => '4359')
						)
					),
					'Product B' => array
					(
						'params' => array
						(
							'color'					=> '99cc99',
							'showValues'			=> '0',
							'areaAlpha'				=> '50',
							'showAreaBorder'		=> '1',
							'areaBorderThickness'	=> '2',
							'areaBorderColor'		=> '006600'
						),
						'data' => array
						(
							array('value' => '12152'),
							array('value' => '15349'),
							array('value' => '16442'),
							array('value' => '17551'),
							array('value' => '13478'),
							array('value' => '16553'),
							array('value' => '17338'),
							array('value' => '17263'),
							array('value' => '16552'),
							array('value' => '17649'),
							array('value' => '12442'),
							array('value' => '11151'),
							array('value' => '15478'),
							array('value' => '16553'),
							array('value' => '16538'),
							array('value' => '17663'),
							array('value' => '13252'),
							array('value' => '16549'),
							array('value' => '14342'),
							array('value' => '13451'),
							array('value' => '15378'),
							array('value' => '17853'),
							array('value' => '17638'),
							array('value' => '14363'),
							array('value' => '10952'),
							array('value' => '10049'),
							array('value' => '19442'),
							array('value' => '13951'),
							array('value' => '19778'),
							array('value' => '18453'),
							array('value' => '17338')
						)
					)
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
					'type' => 'MSLine',
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
					'caption'					=> 'Daily Visits',
					'subcaption'				=> 'from 8/6/2006 to 8/12/2006)',
					'hoverCapBg'				=> 'FFECAA',
					'hoverCapBorder'			=> '4',
					'showAreaBorder'			=> 'F47E00',
					'formatNumberScale'			=> '0',
					'decimalPrecision'			=> '0',
					'showvalues'				=> '0',
					'numDivLines'				=> '3',
					'numVDivLines'				=> '0',
					'yAxisMinValue'				=> '1000',
					'yAxisMaxValue'				=> '1800',
					'rotateNames'				=> '1'
				)
			);

		$this->FusionCharts->addCategories
			(
				'Line2D Chart',
				array
				(
					'8/6/2006',
					'8/7/2006',
					'8/8/2006',
					'8/9/2006',
					'8/10/2006',
					'8/11/2006',
					'8/12/2006'
				)
			);

		$this->FusionCharts->addDatasets
			(
				'Line2D Chart',
				array
				(
					'Offline Marketing' => array
					(
						'params' => array
						(
							'color'					=> '1D8BD1',
							'anchorBorderColor'		=> '1D8BD1',
							'anchorBgColor'			=> '1D8BD1'
						),
						'data' => array
						(
							array('value' => '1327'),
							array('value' => '1826'),
							array('value' => '1699'),
							array('value' => '1511'),
							array('value' => '1904'),
							array('value' => '1957'),
							array('value' => '1296')
						)
					),
					'Search' => array
					(
						'params' => array
						(
							'color'					=> 'F1683C',
							'anchorBorderColor'		=> 'F1683C',
							'anchorBgColor'			=> 'F1683C'
						),
						'data' => array
						(
							array('value' => '2042'),
							array('value' => '3210'),
							array('value' => '2994'),
							array('value' => '3115'),
							array('value' => '2844'),
							array('value' => '3576'),
							array('value' => '1862')
						)
					),
					'Paid Search' => array
					(
						'params' => array
						(
							'color'					=> '2AD62A',
							'anchorBorderColor'		=> '2AD62A',
							'anchorBgColor'			=> '2AD62A'
						),
						'data' => array
						(
							array('value' => '850'),
							array('value' => '1010'),
							array('value' => '1116'),
							array('value' => '1234'),
							array('value' => '1210'),
							array('value' => '1054'),
							array('value' => '802')
						)
					),
					'From Mail' => array
					(
						'params' => array
						(
							'color'					=> 'DBDC25',
							'anchorBorderColor'		=> 'DBDC25',
							'anchorBgColor'			=> 'DBDC25'
						),
						'data' => array
						(
							array('value' => '541'),
							array('value' => '781'),
							array('value' => '920'),
							array('value' => '754'),
							array('value' => '840'),
							array('value' => '893'),
							array('value' => '451')
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
					'type' => 'MSBar2D',
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
					'caption'			=> 'Business Results: 2005',
					'yAxisName'			=> 'Revenue (Millions)',
					'hoverCapBg'		=> 'FFFFFF',
					'divLineColor'		=> '999999',
					'divLineAlpha'		=> '80',
					'numDivLines'		=> '5',
					'decimalPrecision'	=> '0',
					'numberPrefix'		=> '$',
					'numberSuffix'		=> 'M'
				)
			);

		$this->FusionCharts->addCategories
			(
				'Bar2D Chart',
				array
				(
					'Hardware',
					'Software',
					'Service'
				)
			);

		$this->FusionCharts->addDatasets
			(
				'Bar2D Chart',
				array
				(
					'Domestic' => array
					(
						'params' => array
						(
							'color'					=> '839F2F'
						),
						'data' => array
						(
							array('value' => '84'),
							array('value' => '207'),
							array('value' => '116')
						)
					),
					'International' => array
					(
						'params' => array
						(
							'color'					=> '56B9F9'
						),
						'data' => array
						(
							array('value' => '116'),
							array('value' => '237'),
							array('value' => '83')
						)
					)
				)
			);
	}
}
