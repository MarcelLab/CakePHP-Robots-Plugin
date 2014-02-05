CakePHP-Robots-Plugin
==========================

Small Plugin used to disallow search engine spidering on CakePhp 2.x

Setup
-----

You need to clone the files into an "Robots" directory in app/Plugin.
Then, add this CakePlugin::load in the app bootstrap and active the plugin bootstrap :

> CakePlugin::load('Robots', array('route' => true));

Confidentiality activation
--------------------------

In your bootstrap file:

> Configure::write('Robots.isConfidential', true);