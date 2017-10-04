<?php 
	//BUGFIX FOR SOME SERVERS - HEADERS NOT WORKING
	ob_start();
	
	//ALWAYS INIT SESSIONS.
	session_start();
	
	//CONFIG HANDLER
	require_once('./QuickBrowse/config/main.php');
	
	$CONFIG = 		new Config();
	
	//DATABASE HANDLER - Maybe rebuild a class from scratch?
	require_once('./QuickBrowse/api/db.class.php');
	
	$DATABASE = 	new Database();
	
	$CONNECTION = 	$DATABASE->connect();
	
	//VIEW HANDLER
	require_once('./QuickBrowse/api/views.class.php');
	
	$PAGE = 		new view();
	
	//DISPLAY HANDLER
	require_once( './QuickBrowse/api/display.class.php');

	$DISPLAY = new Display();
	
	//PHPMailer Addon
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	
	require_once( './QuickBrowse/api/lib/vendor/autoload.php');
	
	//CALL TO THE TEMPLATE view.php
	include_once($CONFIG::get_templatesettings('TEMPLATE_ROOT') . '/view.php');
	
	//STOP HEADER BUGFIX;
	ob_end_flush();

?>
