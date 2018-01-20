<?php 
#####WoW-YSERA####
require_once 'config.php';  
mysql_connect ("$dbip:$dbport","$dblogin","$dbpass");  
mysql_select_db ("$cdb");  
$online = mysql_query ("select count(*) from characters where online = 1");  
$online = mysql_result ($online,0);  
$allianceonline = mysql_query ("select count(*) from characters where online = 1 and race in (1,3,4,7,11)");  
$allianceonline = mysql_result ($allianceonline,0);  
$hordeonline = mysql_query ("select count(*) from characters where online = 1 and race in (2,5,6,8,10)");  
$hordeonline = mysql_result ($hordeonline,0);  
mysql_selectdb ("$rdb");  
$max = mysql_query ("select max(`maxplayers`) from uptime");     
$max = mysql_result ($max,0);  
echo "$online";
?>