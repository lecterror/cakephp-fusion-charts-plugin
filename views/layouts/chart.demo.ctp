<?php
/**
	This file is part of FusionCharts plugin for CakePHP.

	FusionCharts plugin for CakePHP is free software: you can redistribute
	it and/or modify it under the terms of the GNU General Public License
 	as published by the Free Software Foundation, either version 3
 	of the License, or (at your option) any later version.

	FusionCharts plugin for CakePHP is distributed in the hope that it
	will be useful, but WITHOUT ANY WARRANTY; without even the implied
	warranty of	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
	See the GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with FusionCharts plugin for CakePHP.
	If not, see <http://www.gnu.org/licenses/>.

	@link http://dsi.vozibrale.com/
	@copyright Copyright 2009-3827, lecterror / Bloody L Software (http://dsi.vozibrale.com/)
*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title>
		<?php __('FusionCharts plugin demos / tests'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $html->meta('icon');
		echo $html->css('cake.generic');
		echo $html->css('/fusion_charts/css/demo');
		echo $scripts_for_layout;
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php __('FusionCharts plugin demos / tests'); ?></h1>
		</div>
		<div id="content">
			<?php $session->flash(); ?>
			<?php
			if ($this->params['controller'] != 'fusion_charts_demo' && $this->params['action'] != 'index')
			{
				echo $html->link
					(
						'<< Back to index',
						array
						(
							'plugin'		=> 'fusion_charts',
							'controller'	=> 'fusion_charts_demo',
							'action'		=> 'index'
						)
					);
			}
			?>
			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
			<a href="http://dsi.vozibrale.com/" title="author's homepage" style="font-variant:small-caps; font-size:small;">http://dsi.vozibrale.com/</a>
			<?php echo $html->link(
					$html->image('cake.power.gif', array('alt'=> __("CakePHP: the rapid development php framework", true), 'border'=>"0")),
					'http://www.cakephp.org/',
					array('target'=>'_blank'), null, false
				);
			?>
		</div>
	</div>
	<?php echo $cakeDebug; ?>
</body>
</html>