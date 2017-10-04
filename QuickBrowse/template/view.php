<?php
	
	//START THE VIEW	
	$PAGE::set_page();
	
	//INCLUDE THE VIEW
	include_once( $CONFIG::get_templatesettings('TEMPLATE_ROOT') . '/page/' . $PAGE::get_page() );
	
?>