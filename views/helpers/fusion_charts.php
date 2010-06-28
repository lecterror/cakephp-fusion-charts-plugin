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

class FusionChartsHelper extends AppHelper
{
	var $helpers = array('Html', 'Javascript', 'Session');
	var $charts = array();

	function beforeRender()
	{
		$this->Javascript->link('/fusion_charts/js/FusionCharts', false);
		return true;
	}

	function afterRender()
	{
		$this->Session->del('FusionChartsPlugin.Charts');
	}

	function _getCharts()
	{
		static $read = false;

		if ($read === true)
		{
			return $this->charts;
		}

		$this->charts = $this->Session->read('FusionChartsPlugin.Charts');
		$read = true;

		return $this->charts;
	}

	function render($name)
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
?>