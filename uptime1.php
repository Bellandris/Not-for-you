<?php
#####WoW-YSERA####

###########################Äèçàéí SOUL-TEAM.RU############################

###########################ÂÅÐÑÒÊÀ È ÑÊÐÈÏÒÎÂÊÀ SOUL-TEAM.RU##############

require_once 'config.php';  
mysql_connect ("$dbip:$dbport","$dblogin","$dbpass");        
   mysql_select_db ("$rdb");            
   $uptime = mysql_query ("select max(`starttime`) from `uptime` WHERE `realmid`= '1'");            
   $uptime = time()-mysql_result ($uptime,0);            
   $sec = $uptime%60;            
   $uptime = intval ($uptime/60);            
   $min = $uptime%60;            
   $uptime = intval ($uptime/60);            
   $hours = $uptime%24;            
   $uptime = intval($uptime/24);                 
   $days = $uptime;           
    
   echo "$days d $hours h $min m ";       
?> 