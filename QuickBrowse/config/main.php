<?php

class Config {
	
	//Database settings. This should not be changed unless you know what you're doing.
	private static $DB_SERV 	= 'localhost';
	private static $DB_NAME 	= 'database';
	private static $DB_PASS		= '';
	private static $DB_USER		= 'root';
	
	//Domain name so the script can function easier.
	private static $DOMAIN		= 'localhost';
	
	//Template you're using.
	private static $TEMPLATE	= 'template';
	
	//Ignore below if you are just here for the configuration.
	public static function get_dbsettings($setting){
		
		switch($setting){
			
			case 'DB_USER':
				return self::$DB_USER;
			break;
			
			case 'DB_PASS':
				return self::$DB_PASS;
			break;
			
			case 'DB_NAME':
				return self::$DB_NAME;
			break;
			
			case 'DB_SERV':
				return self::$DB_SERV;
			break;
			
			default:
				return 'No setting found with the name: ' .  $setting;
			break;
			
		}
		
	}
	
	public static function get_templatesettings($setting){
		
		if($setting == 'TEMPLATE_ROOT'){
			
			return './QuickBrowse/' . self::$TEMPLATE;
			
		}elseif($setting == "WEB_ROOT"){
			
			return self::$DOMAIN;
			
		}else{
		
			require_once('./QuickBrowse/' . self::$TEMPLATE . '/includes/config.php');
		
			$TEMPLATE_CONFIG = new Template();
		
			return $TEMPLATE_CONFIG::get_templatesetting($setting);	
			
		}
		
	}
	
}

	
	
?>