<?php
// this is to prevent this specific page from being called directly
// exit the page if it was done so
if (!defined('WEB_ROOT')) {
	exit;
}

// set the default page title
if (!isset($pageTitle) || $pageTitle == "") {
	$pageTitle = 'Welcome to Shiro';
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="Planet Earth's friendliest platform "/>
<meta name="keywords" content="Travel World. Vacation. Trip planner. Trip Itinerary"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo $pageTitle; ?></title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">

<link href="css/style.css" rel="stylesheet" type="text/css" />

<?php 
	/*
	 * The following js files are jquery files
	 * that have been written as a part of jquery template
	 * jquery.ui.core.js and jquery.ui.widget.js are required files
	 * Each feature will require its own js file
	 * we will include them as needed
	 *
	 * any js files reside in /js
	 * any jquery css files reside in /css/themes
	 */
?>
<link rel="stylesheet" href="css/themes/base/jquery.ui.all.css">
<script src="js/common.js" type="text/javascript"></script>
<script src="js/2.1.1.jquery.js" type="text/javascript"></script>
    <script src="js/ui/jquery.ui.core.js"></script>
    <script src="js/ui/jquery.ui.widget.js"></script>
    <script src="js/ui/jquery.ui.mouse.js"></script>
    <script src="js/ui/jquery.ui.selectable.js"></script>
	<script src="js/ui/jquery.ui.button.js"></script>
	<script src="js/ui/jquery.ui.draggable.js"></script>
	<script src="js/ui/jquery.ui.position.js"></script>
	<script src="js/ui/jquery.ui.resizable.js"></script>
	<script src="js/ui/jquery.ui.button.js"></script>
	<script src="js/ui/jquery.ui.dialog.js"></script>
    <script src="js/ui/jquery.ui.effect.js"></script>
	<script src="js/ui/jquery.ui.effect-blind.js"></script>
	<script src="js/ui/jquery.ui.effect-explode.js"></script>