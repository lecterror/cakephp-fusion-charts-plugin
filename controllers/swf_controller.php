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

class SwfController extends FusionChartsAppController
{
	var $name = 'Swf';
	var $layout = 'ajax';
	var $uses = array();

	function proxy()
	{
		if (!isset($this->params['chart']))
		{
			$this->cakeError('error404', array(array('url'=>'/')));
			return;
		}

		$chartPath = 'plugins'.DS.'fusion_charts'.DS.'vendors'.DS.'swf'.DS;
		$chartName = $this->params['chart'];

		if (!file_exists(APP.$chartPath.$chartName))
		{
			$this->cakeError('error404', array(array('url'=>'/')));
			return;
		}

		$path = $chartPath;
		$id = $chartName;
		$name = str_ireplace('.swf', '', $this->params['chart']);
		$extension = 'swf';

		$this->view = 'media';
		$this->set(compact('path', 'id', 'name', 'extension'));
	}
}

?>
