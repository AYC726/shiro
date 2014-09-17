<?php
ini_set('display_errors', 'On');
//ob_start("ob_gzhandler");
error_reporting(E_ALL);

// start the session
session_start();

$production = stripos($_SERVER['SERVER_NAME'],"DomainName.com") !== FALSE;

// database connection config
if ($production) {
	$dbHost = 'localhost';
	$dbUser = 'root';
	$dbPass = '';
	$dbName = '';
} else {
	$dbHost = 'localhost';
	$dbUser = 'root';
	$dbPass = 'rootpassword';
	$dbName = 'shiro';
}

// setting up the web root and server root for
// this shopping cart application
$thisFile = str_replace('\\', '/', __FILE__);
$docRoot = $_SERVER['DOCUMENT_ROOT'];

$webRoot  = str_replace(array($docRoot, 'library/config.php'), '', $thisFile);
$srvRoot  = str_replace('library/config.php', '', $thisFile);

define('WEB_ROOT', $webRoot);
define('SRV_ROOT', $srvRoot);

// these are the directories where we will store all
// brand, category and product images
define('CATEGORY_IMAGE_DIR', 'images/');
define('BRAND_IMAGE_DIR', 'images/brand/');
define('PRODUCT_IMAGE_DIR',  'images/product/');

// some size limitation for the brand, category
// and product images

// all category image width must not 
// exceed 75 pixels
define('MAX_CATEGORY_IMAGE_WIDTH', 75);

// all category image width must not 
// exceed 300 pixels
define('MAX_BRAND_IMAGE_WIDTH', 500);

// the width for brand thumbnail
define('BRAND_THUMBNAIL_WIDTH',         80);

// do we need to limit the brand image width?
// setting this value to 'true' is recommended
define('LIMIT_BRAND_WIDTH',     true);

// do we need to limit the product image width?
// setting this value to 'true' is recommended
define('LIMIT_PRODUCT_WIDTH',     true);

// maximum width for all product image
define('MAX_PRODUCT_IMAGE_WIDTH', 500);

// the width for product thumbnail
define('THUMBNAIL_WIDTH',         130);

if (!get_magic_quotes_gpc()) {
	if (isset($_POST)) {
		foreach ($_POST as $key => $value) {
			// Comment out the line below until I figure out how to convert Value to String. Updated 4/21/2010 by Christiana
			//$_POST[$key] =  trim(addslashes($value));
		}
	}
	
	if (isset($_GET)) {
		foreach ($_GET as $key => $value) {
			$_GET[$key] = trim(addslashes($value));
		}
	}	
}

// since all page will require a database access
// and the common library is also used by all
// it's logical to load these library here
require_once 'database.php';
//require_once 'common.php';

?>