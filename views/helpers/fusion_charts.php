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

class FusionChartsHelper extends AppHelper
{
	var $helpers = array('Html', 'Session');
	var $charts = array();

	function beforeRender()
	{
		$this->Html->script('/fusion_charts/js/FusionCharts', false);
		return true;
	}

	function afterRender()
	{
		$this->Session->delete('FusionChartsPlugin.Charts');
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

