<?php
/**
*
*	Weather Codes 
*	@package DataPoint Helpers
*	@author John Nye, NimbleWorks LLP
*	@license MIT
*/
class WeatherCodes{


	function __construction(){
		
	}
	/**
	 * getTextForCode($code) function
	 *	
	 * @return corresponding string value for MetOffice DataPoint weather code
	 * @author John Nye
	 **/
	
	function getTextForCode($code){
		$return = null;
		switch ($code) {
		    case 0:
		        $return= "Clear Night";
		        break;
		    case 1:
		        $return = "Sunny Day";
		        break;
		    case 2:
		        $return = "Partly Cloudy night";
		        break;
			case 3:
				$return = "Partly cloudy (day)";
				break;
			case 4:
				$return = "";//Not used
				break;
			case 5:
				$return = "Mist";
				break;
			case 6:
				$return = "Fog";
				break;
			case 7:
				$return = "Cloudy";
				break;
			case 8:
				$return = "Overcast";
				break;
			case 9:
				$return = "Light rain shower (night)";
				break;
			case 10:
				$return = "Light rain shower (day)";
				break;
			case 11:
				$return = "Drizzle";
				break;
			case 12:
				$return = "Light rain";
				break;
			case 13:
				$return = "Heavy rain shower (night)";
				break;
			case 14:
				$return = "Heavy rain shower (day)";
				break;
			case 15:
				$return = "Heavy rain";
				break;
			case 16:
				$return = "Sleet shower (night)";
				break;
			case 17:
				$return = "Sleet shower (day)";
				break;
			case 18:
				$return = "Sleet";
				break;
			case 19:
				$return = "Hail shower (night)";
				break;
			case 20:
				$return = "Hail shower (day)";
				break;
			case 21:
				$return = "Hail";
				break;
			case 22:
				$return = "Light snow shower (night)";
				break;
			case 23;
				$return = "Light snow shower (day)";
				break;
			case 24:
				$return = "Light snow";
				break;
			case 25:
				$retrun = "Heavy snow shower (night)";
				break;
			case 26:
				$return = "Heavy snow shower (day)";
				break;
				case 27:
				$return = "Heavy snow";
				break;
			case 28:
				$return ="Thunder shower (night)";
				break;
			case 29:
				$return = "Thunder shower (day)";
				break;
			case 30:
				$retrun = "Thunder";
				break;
			default:
				break;
		}
		return $return;
	}
}
	
?>