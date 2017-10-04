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
			
			case 'home':
				self::$page = 'home.php';
			break;
			
			case 'list':
				self::$page = 'list.php';
			break;
			
			case 'logout':
				self::$page = 'logout.php';
			break;
			
			case 'login':
				self::$page = 'login.php';
			break;
			
			case 'panel':
				self::$page = 'panel.php';
			break;
			
			case 'about':
				self::$page = 'about.php';
			break;
			
			case 'contact':
				self::$page = 'contact.php';
			break;
			
			case 'register':
				self::$page = 'register.php';
			break;
			
			case 'page':
				self::$page = 'page.php';
			break;
			
			case 'post':
				self::$page = 'post.php';
			break;
			
			case 'index':
				self::$page = 'index.php';
			break;
			
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