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
?>
<table>
	<thead>
		<tr>
			<th>Single-series demo charts</th>
			<th>Multi-series demo charts</th>
			<th>Stacked demo charts</th>
			<th>Combination demo charts</th>
			<th>Other demo charts</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?php echo $html->link('Column 2D', array('plugin' => 'fusion_charts', 'controller' => 'single_series_demo', 'action' => 'column2d')); ?></td>
			<td><?php echo $html->link('Column 3D', array('plugin' => 'fusion_charts', 'controller' => 'multi_series_demo', 'action' => 'column3d')); ?></td>
			<td><?php echo $html->link('Column 2D', array('plugin' => 'fusion_charts', 'controller' => 'stacked_demo', 'action' => 'column2d')); ?></td>
			<td><?php echo $html->link('Column3DLineDY', array('plugin' => 'fusion_charts', 'controller' => 'combination_demo', 'action' => 'column3dlinedy')); ?></td>
			<td><?php echo $html->link('Gantt', array('plugin' => 'fusion_charts', 'controller' => 'other_demo', 'action' => 'gantt')); ?></td>
		</tr>
		<tr>
			<td><?php echo $html->link('Column 3D', array('plugin' => 'fusion_charts', 'controller' => 'single_series_demo', 'action' => 'column3d')); ?></td>
			<td><?php echo $html->link('Column 2D', array('plugin' => 'fusion_charts', 'controller' => 'multi_series_demo', 'action' => 'column2d')); ?></td>
			<td><?php echo $html->link('Column 3D', array('plugin' => 'fusion_charts', 'controller' => 'stacked_demo', 'action' => 'column3d')); ?></td>
			<td><?php echo $html->link('Column2DLineDY', array('plugin' => 'fusion_charts', 'controller' => 'combination_demo', 'action' => 'column2dlinedy')); ?></td>
			<td><?php echo $html->link('Funnel', array('plugin' => 'fusion_charts', 'controller' => 'other_demo', 'action' => 'funnel')); ?></td>
		</tr>
		<tr>
			<td><?php echo $html->link('Line 2D', array('plugin' => 'fusion_charts', 'controller' => 'single_series_demo', 'action' => 'line2d')); ?></td>
			<td><?php echo $html->link('Area 2D', array('plugin' => 'fusion_charts', 'controller' => 'multi_series_demo', 'action' => 'area2d')); ?></td>
			<td><?php echo $html->link('Bar 2D', array('plugin' => 'fusion_charts', 'controller' => 'stacked_demo', 'action' => 'bar2d')); ?></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td><?php echo $html->link('Pie 3D', array('plugin' => 'fusion_charts', 'controller' => 'single_series_demo', 'action' => 'pie3d')); ?></td>
			<td><?php echo $html->link('Line 2D', array('plugin' => 'fusion_charts', 'controller' => 'multi_series_demo', 'action' => 'line2d')); ?></td>
			<td><?php echo $html->link('Area 2D', array('plugin' => 'fusion_charts', 'controller' => 'stacked_demo', 'action' => 'area2d')); ?></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td><?php echo $html->link('Pie 2D', array('plugin' => 'fusion_charts', 'controller' => 'single_series_demo', 'action' => 'pie2d')); ?></td>
			<td><?php echo $html->link('Bar 2D', array('plugin' => 'fusion_charts', 'controller' => 'multi_series_demo', 'action' => 'bar2d')); ?></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td><?php echo $html->link('Bar 2D', array('plugin' => 'fusion_charts', 'controller' => 'single_series_demo', 'action' => 'bar2d')); ?></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td><?php echo $html->link('Area 2D', array('plugin' => 'fusion_charts', 'controller' => 'single_series_demo', 'action' => 'area2d')); ?></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
		<tr>
			<td><?php echo $html->link('Doughnut 2D', array('plugin' => 'fusion_charts', 'controller' => 'single_series_demo', 'action' => 'doughnut2d')); ?></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</tbody>
</table>
