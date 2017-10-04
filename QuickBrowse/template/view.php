<?php

//START THE VIEW	
$PAGE::set_page();

?>

<!DOCTYPE html>
<html lang="en">
  <!-- head.php -->
  <?php include_once($CONFIG->get_templatesettings('TEMPLATE_ROOT') . '/includes/head.php'); ?>
  <body>

	<?php include_once( $CONFIG::get_templatesettings('TEMPLATE_ROOT') . '/views/' . $PAGE::get_page() ); ?>
	
    <!-- scripts.php -->
	<?php include_once($CONFIG->get_templatesettings('TEMPLATE_ROOT') . '/includes/scripts.php'); ?>
  </body>
</html>