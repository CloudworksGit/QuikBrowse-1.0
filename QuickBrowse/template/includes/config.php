<?php

class Template {
	
	private static $TITLE		= 'Website Title';
	private static $AUTHOR		= 'Danny v. Dooijeweert';
	
	public static function get_templatesettings($setting){
		
		switch($setting){
			case 'TITLE':
				return self::$TITLE;
			break;
			
			case 'AUTHOR':
				return self::$AUTHOR;
			break;
			
			default:
				return 'Invalid template property';
			break;
		}
		
	}
	
}

	
	
?>