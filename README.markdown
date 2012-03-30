# FusionCharts Plugin for CakePHP #

Thank you for trying out FusionCharts plugin for CakePHP!

Please note that this is still a work-in-progress plugin, with only the basic
functionality to reproduce the charts available in the official FC Free zip file.
More features will be added and the existing ones will be improved as you people
start to complain.

Please send your comments and suggestions to neutrinocms[at]gmail.com

## Usage ##

Deploy the plugin in your `app/Plugin/FusionCharts` directory. If you're using
Git, run this while in your app folder:

	git submodule add git://github.com/lecterror/cakephp-fusion-charts-plugin.git Plugin/FusionCharts
	git submodule init
	git submodule update

Or visit <http://github.com/lecterror/cakephp-fusion-charts-plugin>
and download the plugin manually to your `app/Plugin/FusionCharts/` folder.

Since CakePHP 2.0 it is necessary to activate the plugin in your application. To do so,
edit `app/Config/bootstrap.php` and add the line `CakePlugin::load('FusionCharts');` at the 
bottom.

You're done. Check the demo charts included in the plugin to see how to generate
individual chart types. Open the demos in your browser:

	[your app root]/fusion_charts/fusion_charts_demo

The demos should also be available at my homepage, but these are not updated as
they are still using the 0.1 version which is stuck with CakePHP 1.2.x:

<http://lecterror.com/demos/fusion_charts>

**Important**

If you're using CakePHP 1.3.x, you should use the 1.3.x series of the plugin. Check out the
GitHub repository for the latest tag in the 1.3.x series.

If you're using CakePHP 1.2.x, check this page for additional info:

<http://lecterror.com/articles/view/fusioncharts-plugin-for-cakephp-1>

Some people have reported that this plugin also works with the paid version of FusionCharts,
but I don't have a license so I can't confirm it.

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
Thanks to destinydriven (<https://github.com/destinydriven>) for doing the plugin migration
from CakePHP 1.3.x to 2.x.

## Licence ##

Multi-licensed under:

* MPL <http://www.mozilla.org/MPL/MPL-1.1.html>
* LGPL <http://www.gnu.org/licenses/lgpl.html>
* GPL <http://www.gnu.org/licenses/gpl.html>
