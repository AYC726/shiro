<?php
require_once 'config.php';

$dbConn = mysqli_connect ($dbHost, $dbUser, $dbPass) or die ('MySQL connect failed. ' . mysql_error());
mysqli_query($dbConn,"SET NAMES 'UTF8'");

if (!mysqli_set_charset($dbConn,'UTF8')) {
    echo "Error: Unable to set the character set.\n";
    exit;
}

mysqli_select_db($dbConn,$dbName) or die('Cannot select database. ' . mysqli_error($dbConn));

  
function dbPrepareStatement($sql) {
	global $dbConn;

	return $dbConn->prepare($sql);
}

function dbQuery($sql)
{
	global $dbConn;
	
	$result = @mysqli_query($dbConn,$sql) or die("dbQuery error: " . mysqli_error($dbConn));
	return $result;
}

function dbAffectedRows()
{
	global $dbConn;
	
	return mysqli_affected_rows($dbConn);
}

function dbFetchArray($result, $resultType = MYSQL_NUM) {
	return mysqli_fetch_array($result, $resultType);
}

function dbFetchAssoc($result)
{
	return mysqli_fetch_assoc($result);
}

function dbFetchRow($result) 
{
	return mysqli_fetch_row($result);
}

function dbFreeResult($result)
{
	return mysqli_free_result($result);
}

function dbNumRows($result)
{
	return mysqli_num_rows($result);
}

function dbSelect($dbName)
{
	global $dbConn;
	
	return mysqli_select_db($dbConn,$dbName);
}

function dbInsertId()
{
	global $dbConn;
	
	return mysqli_insert_id($dbConn);
}

function dbEscapeString ($str)
{
	global $dbConn;
	
	return  mysqli_real_escape_string($dbConn,$str);
}
?>