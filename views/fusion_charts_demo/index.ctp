<?php
/**
	CakePHP FusionCharts Plugin
	Copyright (C) 2009-3827 dr. Hannibal Lecter (http://lecterror.com/)

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <http://www.gnu.org/licenses/>.
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
