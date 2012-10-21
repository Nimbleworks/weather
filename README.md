weather
=======

Helpful Classes for the MetOffice [Datapoint](http://www.metoffice.gov.uk/datapoint) API. Currently standing at one class, the [WeatherCode](#weatherCode.php) class. This will hopefully develop into a suite of classes to help speed up development with MetOffice data. 



WeatherCode.php
---------------

WeatherCode converts the MetOffice DataPoint API weather codes into meaningful strings (as per the documentation). Codes are NA (returns <code>null</code>) and 0-30, code 4 is an empty code so returns and empty string (not <code>null</code> though).

### Usage

<pre>
		$weatherCode = new WeatherCode;
		print $weatherCode->getTextForCode(30); //prints Thunder

</pre>

<hr>

Copyright 2012 NimbleWorks LLP, available to use under the MIT License. 