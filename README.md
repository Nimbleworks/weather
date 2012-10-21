weather
=======

Helpful Classes for the MetOffice [Datapoint](http://www.metoffice.gov.uk/datapoint) API. Currently standing at one class, the [WeatherCode](#weatherCode.php) class. This will hopefully develop into a suite of classes to help speed up development with MetOffice data. 



WeatherCode.php
---------------

WeatherCode converts the MetOffice DataPoint API weather codes into meaningful strings (as per the documentation). Instead of 

### Usage
<pre>
	<?php
	$weatherCode = new WeatherCode;
	print $weatherCode->getTextForCode(30); //print Thunder
	?>
</pre>

Copyright 2012 NimbleWorks LLP, available to use under the MIT License. 