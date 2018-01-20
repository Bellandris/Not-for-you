<?php 
#####WoW-YSERA####
require_once 'config.php';  
mysql_connect ("$dbip:$dbport","$dblogin","$dbpass");  
mysql_selectdb ("$cdb");  
$online = mysql_query ("select count(*) from characters where online = 1");  
$online = mysql_result ($online,0);  
mysql_selectdb ("$cdb1"); 
$online1 = mysql_query ("select count(*) from characters where online = 1");  
$online1 = mysql_result ($online1,0);  
mysql_selectdb ("$cdb2"); 
$online2 = mysql_query ("select count(*) from characters where online = 1");  
$online2 = mysql_result ($online2,0);  
$online = $online + $online1 + $online2;
echo "$online";
?>