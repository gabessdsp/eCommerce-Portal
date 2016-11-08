<?php

if(!defined('INCLUDE_CHECK')) die('You are not allowed to execute this file directly');


/* Database config */

$db_host		= 'huecomm13985237.db.10870394.hostedresource.com';
$db_user		= 'huecomm13985237';
$db_pass		= 'E3m@W1sn!';
$db_database	= 'huecomm13985237'; 

/* End config */



$link = mysql_connect($db_host,$db_user,$db_pass) or die('Unable to establish a DB connection');

mysql_select_db($db_database,$link);
mysql_query("SET names UTF8");

?>