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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo __('CakePHP FusionCharts plugin demos / tests'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css(array('cake.generic', '/fusion_charts/css/demo' ));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<h1><?php echo __('FusionCharts plugin demos / tests'); ?></h1>
		</div>
		<div id="content">
			<?php $this->Session->flash(); ?>
			<?php
			
			if ($this->request->params['controller'] != 'fusion_charts_demo' && $this->request->params['action'] != 'index')
			{
				echo $this->Html->link
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
			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<a href="http://lecterror.com/" title="author's homepage" style="font-size:x-small; color:#ffffff;">http://lecterror.com/</a>
			<?php
			echo $this->Html->link
				(
					$this->Html->image('cake.power.gif', array('alt'=> __("CakePHP: the rapid development php framework"), 'border'=>"0")),
					'http://www.cakephp.org/',
					array('target'=>'_blank', 'escape' => false),
					false
				);
			?>
		</div>
	</div>
</body>
</html>
