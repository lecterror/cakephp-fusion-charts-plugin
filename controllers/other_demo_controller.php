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
 * @property FusionChartsComponent $FusionCharts
 */
class OtherDemoController extends FusionChartsAppController
{
	var $name = 'OtherDemo';
	var $components = array('FusionCharts.FusionCharts');
	var $helpers = array('FusionCharts.FusionCharts');
	var $uses = array();
	var $layout = 'chart.demo';

	function gantt()
	{
		$this->FusionCharts->create
			(
				'Gantt Chart',
				array
				(
					'type'					=> 'Gantt',
					'width'					=> 750,
					'height'				=> 450
				)
			);

		$this->FusionCharts->setChartParams
			(
				'Gantt Chart',
				array
				(
					'dateFormat'			=> 'dd/mm/yyyy',
					'hoverCapBorderColor'	=> '2222ff',
					'ganttWidthPercent'		=> '60',
					'ganttLineAlpha'		=> '80',
					'canvasBorderColor'		=> '024455',
					'canvasBorderThickness'	=> '0',
					'gridBorderColor'		=> '4567aa',
					'gridBorderAlpha'		=> '20'
				)
			);

		$this->FusionCharts->addGanttCategorySet
			(
				'Gantt Chart',
				array
				(
					'bgColor' => '009999'
				),
				array
				(
					'Residential Construction' => array
					(
						'start'		=> '1/3/2005',
						'end'		=> '31/8/2005',
						'align'		=> 'center',
						'fontColor'	=> 'ffffff',
						'isBold'	=> '1',
						'fontSize'	=> '16'
					)
				)
			);

		$this->FusionCharts->addGanttCategorySet
			(
				'Gantt Chart',
				array
				(
					'bgColor'	=> '4567aa',
					'fontColor'	=> 'ff0000'
				),
				array
				(
					'Months' => array
					(
						'start'		=> '1/3/2005',
						'end'		=> '31/8/2005',
						'alpha'		=> '',
						'font'		=> 'Verdana',
						'fontColor'	=> 'ffffff',
						'isBold'	=> '1',
						'fontSize'	=> '16'
					)
				)
			);

		$this->FusionCharts->addGanttCategorySet
			(
				'Gantt Chart',
				array
				(
					'bgColor'	=> 'ffffff',
					'fontColor'	=> '1288dd',
					'fontSize'	=> '10'
				)
			);

		$this->FusionCharts->addGanttCategories
			(
				'Gantt Chart',
				array
				(
					'March' => array
					(
						'start' => '1/3/2005',
						'end' => '31/3/2005',
						'align' => 'center',
						'isBold' => '1'
					),
					'April' => array
					(
						'start' => '1/4/2005',
						'end' => '30/4/2005',
						'align' => 'center',
						'isBold' => '1'
					),
					'May' => array
					(
						'start' => '1/5/2005',
						'end' => '31/5/2005',
						'align' => 'center',
						'isBold' => '1'
					),
					'June' => array
					(
						'start' => '1/6/2005',
						'end' => '30/6/2005',
						'align' => 'center',
						'isBold' => '1'
					),
					'July' => array
					(
						'start' => '1/7/2005',
						'end' => '31/7/2005',
						'align' => 'center',
						'isBold' => '1'
					),
					'August' => array
					(
						'start' => '1/8/2005',
						'end' => '31/8/2005',
						'align' => 'center',
						'isBold' => '1'
					),
				)
			);

		$this->FusionCharts->setGanttProcessesParams
			(
				'Gantt Chart',
				array
				(
					'headerText' => 'Tasks',
					'fontColor' => 'ffffff',
					'fontSize' => '10',
					'isBold' => '1',
					'isAnimated' => '1',
					'bgColor' => '4567aa',
					'headerVAlign' => 'right',
					'headerbgColor' => '4567aa',
					'headerFontColor' => 'ffffff',
					'headerFontSize' => '16',
					'width' => '80',
					'align' => 'left'
				)
			);

		$this->FusionCharts->addGanttProcesses
			(
				'Gantt Chart',
				array
				(
					'Writing'		=> array('id' => '1'),
					'Signing'		=> array('id' => '2'),
					'Financing'		=> array('id' => '3'),
					'Permission'	=> array('id' => '4'),
					'Plumbing'		=> array('id' => '5'),
					'Terrace'		=> array('id' => '6'),
					'Inspection'	=> array('id' => '7'),
					'Wood Work'		=> array('id' => '8'),
					'Interiors'		=> array('id' => '9'),
					'Shifting'		=> array('id' => '10')
				)
			);

		$this->FusionCharts->setGanttTasksParams
			(
				'Gantt Chart',
				array('width' => '10')
			);

		$this->FusionCharts->addGanttTasks
			(
				'Gantt Chart',
				array
				(
					array
					(
						'name'			=> 'Planned',
						'processId'		=> '1',
						'start'			=> '7/3/2005',
						'end'			=> '18/4/2005',
						'id'			=> '1-1',
						'color'			=> '4567aa',
						'height'		=> '10',
						'topPadding'	=> '5',
						'animation'		=> '0'
					),
					array
					(
						'name'			=> 'Actual',
						'processId'		=> '1',
						'start'			=> '7/3/2005',
						'end'			=> '22/4/2005',
						'id'			=> '1',
						'color'			=> 'cccccc',
						'height'		=> '10',
						'topPadding'	=> '19',
						'alpha'			=> '100'
					),
					array
					(
						'name'			=> 'Planned',
						'processId'		=> '8',
						'start'			=> '22/6/2005',
						'end'			=> '29/7/2005',
						'id'			=> '2-1',
						'color'			=> '4567aa',
						'height'		=> '10',
						'topPadding'	=> '5',
						'alpha'			=> '100',
						'animation'		=> '0'
					),
					array
					(
						'name'			=> 'Actual',
						'processId'		=> '8',
						'start'			=> '22/6/2005',
						'end'			=> '5/8/2005',
						'id'			=> '2',
						'color'			=> 'cccccc',
						'height'		=> '10',
						'topPadding'	=> '19',
						'alpha'			=> '100'
					),
					array
					(
						'name'			=> 'Planned',
						'processId'		=> '2',
						'start'			=> '6/4/2005',
						'end'			=> '2/5/2005',
						'id'			=> '3-1',
						'color'			=> '4567aa',
						'height'		=> '10',
						'topPadding'	=> '5',
						'animation'		=> '0'
					),
					array
					(
						'name'			=> 'Actual',
						'processId'		=> '2',
						'start'			=> '6/4/2005',
						'end'			=> '12/5/2005',
						'id'			=> '3',
						'color'			=> 'cccccc',
						'height'		=> '10',
						'topPadding'	=> '19',
						'alpha'			=> '100',
						'isAnimated'	=> '1'
					),
					array
					(
						'name'			=> 'Planned',
						'processId'		=> '9',
						'start'			=> '18/6/2005',
						'end'			=> '21/7/2005',
						'id'			=> '4-1',
						'color'			=> '4567aa',
						'height'		=> '10',
						'topPadding'	=> '5',
						'animation'		=> '0'
					),
					array
					(
						'name'			=> 'Actual',
						'processId'		=> '9',
						'start'			=> '18/6/2005',
						'end'			=> '22/7/2005',
						'id'			=> '4',
						'color'			=> 'cccccc',
						'alpha'			=> '100',
						'isAnimated'	=> '1',
						'height'		=> '10',
						'topPadding'	=> '19'
					),
					array
					(
						'name'			=> 'Planned',
						'processId'		=> '3',
						'start'			=> '1/5/2005',
						'end'			=> '2/6/2005',
						'id'			=> '5-1',
						'color'			=> '4567aa',
						'height'		=> '10',
						'topPadding'	=> '5',
						'animation'		=> '0'
					),
					array
					(
						'name'			=> 'Actual',
						'processId'		=> '3',
						'start'			=> '1/5/2005',
						'end'			=> '2/6/2005',
						'id'			=> '5',
						'color'			=> 'cccccc',
						'height'		=> '10',
						'topPadding'	=> '19'
					),
					array
					(
						'name'			=> 'Planned',
						'processId'		=> '4',
						'start'			=> '11/5/2005',
						'end'			=> '12/6/2005',
						'id'			=> '6-1',
						'color'			=> '4567aa',
						'height'		=> '10',
						'topPadding'	=> '5',
						'animation'		=> '0'
					),
					array
					(
						'name'			=> 'Actual',
						'processId'		=> '4',
						'start'			=> '13/5/2005',
						'end'			=> '19/6/2005',
						'id'			=> '6',
						'color'			=> 'cccccc',
						'height'		=> '10',
						'topPadding'	=> '19'
					),
					array
					(
						'name'			=> 'Planned',
						'processId'		=> '5',
						'start'			=> '1/5/2005',
						'end'			=> '12/6/2005',
						'id'			=> '7-1',
						'color'			=> '4567aa',
						'height'		=> '10',
						'topPadding'	=> '5',
						'animation'		=> '0'
					),
					array
					(
						'name'			=> 'Actual',
						'processId'		=> '5',
						'start'			=> '2/5/2005',
						'end'			=> '19/6/2005',
						'id'			=> '7',
						'color'			=> 'cccccc',
						'height'		=> '10',
						'topPadding'	=> '19'
					),
					array
					(
						'name'			=> 'Planned',
						'processId'		=> '6',
						'start'			=> '1/6/2005',
						'end'			=> '12/7/2005',
						'id'			=> '8-1',
						'color'			=> '4567aa',
						'height'		=> '10',
						'topPadding'	=> '5',
						'animation'		=> '0'
					),
					array
					(
						'name'			=> 'Actual',
						'processId'		=> '6',
						'start'			=> '1/6/2005',
						'end'			=> '19/7/2005',
						'id'			=> '8',
						'color'			=> 'cccccc',
						'height'		=> '10',
						'topPadding'	=> '19'
					),
					array
					(
						'name'			=> 'Planned',
						'processId'		=> '7',
						'start'			=> '11/6/2005',
						'end'			=> '7/8/2005',
						'id'			=> '9-1',
						'color'			=> '4567aa',
						'height'		=> '10',
						'topPadding'	=> '5',
						'animation'		=> '0'
					),
					array
					(
						'name'			=> 'Actual',
						'processId'		=> '7',
						'start'			=> '15/6/2005',
						'end'			=> '11/8/2005',
						'id'			=> '9',
						'color'			=> 'cccccc',
						'height'		=> '10',
						'topPadding'	=> '19'
					),
					array
					(
						'name'			=> 'Planned',
						'processId'		=> '10',
						'start'			=> '11/7/2005',
						'end'			=> '7/8/2005',
						'id'			=> '10-1',
						'color'			=> '4567aa',
						'height'		=> '10',
						'topPadding'	=> '5',
						'animation'		=> '0'
					),
					array
					(
						'name'			=> 'Actual',
						'processId'		=> '10',
						'start'			=> '15/7/2005',
						'end'			=> '11/8/2005',
						'id'			=> '10',
						'color'			=> 'cccccc',
						'height'		=> '10',
						'topPadding'	=> '19'
					)
				)
			);

		$this->FusionCharts->addGanttConnector
			(
				'Gantt Chart',
				'3',
				'5',
				array
				(
					'color' => '4567aa',
					'thickness' => '2',
					'fromTaskConnectStart' => '1'
				)
			);

		$this->FusionCharts->addGanttConnector
			(
				'Gantt Chart',
				'8',
				'9',
				array
				(
					'color' => '4567aa',
					'thickness' => '2',
					'fromTaskConnectStart' => '1'
				)
			);

		$this->FusionCharts->setGanttDatatableParams
			(
				'Gantt Chart',
				array
				(
					'showProcessName'	=> '1',
					'nameAlign'			=> 'left',
					'fontColor'			=> '000000',
					'fontSize'			=> '10',
					'isBold'			=> '1',
					'headerBgColor'		=> '00ffff',
					'headerFontColor'	=> '4567aa',
					'headerFontSize'	=> '11',
					'vAlign'			=> 'right',
					'align'				=> 'left'
				)
			);

		$this->FusionCharts->addGanttDatacolumn
			(
				'Gantt Chart',
				array
				(
					'width'				=> '70',
					'headerFontColor'	=> 'ffffff',
					'headerBgColor'		=> '4567aa',
					'bgColor'			=> 'eeeeee',
					'headerColor'		=> 'ffffff',
					'headerText'		=> 'Start',
					'isBold'			=> '0'
				),
				array
				(
					array('label' => '7/3/2005'),
					array('label' => '6/4/2005'),
					array('label' => '1/5/2005'),
					array('label' => '13/5/2005'),
					array('label' => '2/5/2005'),
					array('label' => '1/6/2005'),
					array('label' => '15/6/2005'),
					array('label' => '22/6/2005'),
					array('label' => '18/6/2005'),
					array('label' => '15/7/2005')
				)
			);

		$this->FusionCharts->addGanttDatacolumn
			(
				'Gantt Chart',
				array
				(
					'width'				=> '70',
					'headerFontColor'	=> 'ffffff',
					'headerBgColor'		=> '4567aa',
					'bgColor'			=> 'eeeeee',
					'fontColor'			=> '000000',
					'headerText'		=> 'Finish',
					'isBold'			=> '0'
				),
				array
				(
					array('label' => '22/4/2005'),
					array('label' => '12/5/2005'),
					array('label' => '2/6/2005'),
					array('label' => '19/6/2005'),
					array('label' => '19/6/2005'),
					array('label' => '19/7/2005'),
					array('label' => '11/8/2005'),
					array('label' => '5/8/2005'),
					array('label' => '22/7/2005'),
					array('label' => '11/8/2005')
				)
			);

		$this->FusionCharts->addGanttDatacolumn
			(
				'Gantt Chart',
				array
				(
					'align'				=> 'center',
					'headerFontColor'	=> 'ffffff',
					'headerBgColor'		=> '4567aa',
					'bgColor'			=> 'eeeeee',
					'headerText'		=> 'Dur.',
					'isBold'			=> '0',
					'width'				=> '35'
				),
				array
				(
					array('label' => '150'),
					array('label' => '340'),
					array('label' => '60'),
					array('label' => '20'),
					array('label' => '30'),
					array('label' => '45'),
					array('label' => '40'),
					array('label' => '102'),
					array('label' => '60'),
					array('label' => '30'),
					array('label' => '90'),
					array('label' => '30')
				)
			);

		$this->FusionCharts->addGanttDatacolumn
			(
				'Gantt Chart',
				array
				(
					'width'				=> '35',
					'headerFontColor'	=> 'ffffff',
					'headerBgColor'		=> '4567aa',
					'align'				=> 'right',
					'fontColor'			=> '000000',
					'bgColor'			=> '4567aa',
					'bgAlpha'			=> '25',
					'headerText'		=> 'Cost'
				),
				array
				(
					array('label' => '$400'),
					array('label' => '$890'),
					array('label' => '$1234'),
					array('label' => '$230'),
					array('label' => '$450'),
					array('label' => '$120'),
					array('label' => '$1780'),
					array('label' => '$3330'),
					array('label' => '$890'),
					array('label' => '$1110'),
					array('label' => '$260'),
					array('label' => '$460')
				)
			);
	}

	function funnel()
	{
		$this->FusionCharts->create
			(
				'Funnel Chart',
				array
				(
					'type' => 'Funnel',
					'width' => 250,
					'height' => 350,
					'id' => ''
				)
			);

		$this->FusionCharts->setChartParams
			(
				'Funnel Chart',
				array
				(
					'isSliced'			=> '1',
					'slicingDistance'	=> '4',
					'decimalPrecision'	=> '0'
				)
			);

		$this->FusionCharts->addChartData
			(
				'Funnel Chart',
				array
				(
					array
					(
						'value' => '41',
						'params' => array('name' => 'Selected', 'color' => '99CC00', 'alpha' => '85')
					),
					array
					(
						'value' => '84',
						'params' => array('name' => 'Tested', 'color' => '333333', 'alpha' => '85')
					),
					array
					(
						'value' => '126',
						'params' => array('name' => 'Interviewed', 'color' => '99CC00', 'alpha' => '85')
					),
					array
					(
						'value' => '180',
						'params' => array('name' => 'Candidates Applied', 'color' => '333333', 'alpha' => '85')
					)
				)
			);
	}
}
