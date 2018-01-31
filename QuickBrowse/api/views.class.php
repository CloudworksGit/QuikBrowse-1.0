<?php
	
class view{
	
	private static $page;
	
	public static function set_page(){
		
		//This is for developers
		//ini_set('display_errors', 'On');
		//error_reporting(E_ALL);
		
		//What page should be displayed.
		$file = strtok( basename($_SERVER["REQUEST_URI"]) , '?');
		switch($file){

			case '':
				self::$page = 'index.php';
			break;
			
			default:
				self::$page = $file . '.php';
			break;
			
		}
		
	}
	
	public static function get_page(){
		
		return self::$page;
		
	}
	
}
	
?>
