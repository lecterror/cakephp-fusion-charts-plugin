# FusionCharts Plugin for CakePHP #

Thank you for trying out FusionCharts plugin for CakePHP!

Please note that this is still a work-in-progress plugin, with only the basic
funcionality to reproduce the charts available in the official FC Free zip file.
More features will be added and the existing ones will be improved as you people
start to complain.

Please send your comments and suggestions to neutrinocms[at]gmail.com

## Usage ##

Deploy the plugin in your `app/plugins/fusion_charts` directory. If you're using
Git, run this while in your app folder:

	git submodule add git://github.com/lecterror/cakephp-fusion-charts-plugin.git plugins/fusion_charts
	git submodule init
	git submodule update

Or visit <http://github.com/lecterror/cakephp-fusion-charts-plugin>
and download the plugin manually to your `app/plugins/fusion_charts/` folder.

Then simply add the FusionCharts Component and Helper to your controller:

	var $components = array('FusionCharts.FusionCharts');
	var $helpers = array('FusionCharts.FusionCharts');

You're done. Check the demo charts included in the plugin to see how to generate
individual chart types. Open the demos in your browser:

	[your app root]/fusion_charts/fusion_charts_demo

The demos should also be available at my homepage, but these are not updated as
they are still using the 0.1 version which is stuck with CakePHP 1.2.x:

<http://lecterror.com/demos/fusion_charts>

**Important**

If you're using CakePHP 1.2.x, check this page for additional info:

<http://lecterror.com/articles/view/fusioncharts-plugin-for-cakephp-1>

Some people have reported that this plugin also works with the paid version of FusionCharts,
but I don't have a licence so I can't confirm it.

## Contributing ##

If you'd like to contribute, clone the source on GitHub, make your changes and send me a pull request.
If you don't know how to fix the issue or you're too lazy to do it, create a ticket and we'll see
what happens next.

**Important**: If you're sending a patch, follow the coding style! If you don't, there is a great
chance I won't accept it. For example:

	// bad
	function drink() {
		return false;
	}

	// good
	function drink()
	{
		return true;
	}

## Credits ##

Obviously, this plugin is using FusionCharts Free, freely available from
<http://www.fusioncharts.com/>

Thanks to Pallav Nadhani from InfoSoft Global for the support during development.

## Licence ##

Multi-licensed under:

* MPL <http://www.mozilla.org/MPL/MPL-1.1.html>
* LGPL <http://www.gnu.org/licenses/lgpl.html>
* GPL <http://www.gnu.org/licenses/gpl.html>
