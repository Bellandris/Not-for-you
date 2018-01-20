<?php
#####WoW-YSERA####
require_once 'config.php'; 
	if (!$conn = mysql_connect($dbip, $dblogin, $dbpass))
{
	echo "<h2>MySQL Error!</h2>";
	exit;
}


	$sex1= $_POST['fullnews'];
	$sex2= $_POST['korotkonews'];
	$sex3= $_POST['data'];
	$sex4= $_POST['nazva'];



	
	if (empty($_POST['fullnews'])){echo "<center style=\"margin-top:300px;\"><font style=\"font-size:30px;color:red;margin-top:200px;\">Не введено полное название новости</font></br>Через 3 секунды вы будете перенапревлены назад</center>
<script language=\"JavaScript\" type=\"text/javascript\">
<!-- 
function GoNah(){ 
 location=\"http://".$_SERVER['HTTP_HOST']."/addnews.php\"; 
} 
setTimeout( 'GoNah()', 3000 ); 
//--> 
</script>
	
	";}
	elseif (empty($_POST['korotkonews'])){echo "<center style=\"margin-top:300px;\"><font style=\"font-size:30px;color:red;margin-top:200px;\">Не ввели короткий текст новости</font></br>Через 3 секунды вы будете перенапревлены назад</center>
	<script language=\"JavaScript\" type=\"text/javascript\">
<!-- 
function GoNah(){ 
 location=\"http://".$_SERVER['HTTP_HOST']."/addnews.php\"; 
} 
setTimeout( 'GoNah()', 3000 ); 
//--> 
</script>
	";}
	elseif (empty($_POST['nazva'])){echo "<center style=\"margin-top:300px;\"><font style=\"font-size:30px;color:red;margin-top:200px;\">Не ввели название новости</font></br>Через 3 секунды вы будете перенапревлены назад</center>
	<script language=\"JavaScript\" type=\"text/javascript\">
<!-- 
function GoNah(){ 
 location=\"http://".$_SERVER['HTTP_HOST']."/addnews.php\"; 
} 
setTimeout( 'GoNah()', 3000 ); 
//--> 
</script>
	";}
		elseif (empty($_POST['data'])){echo "<center style=\"margin-top:300px;\"><font style=\"font-size:30px;color:red;margin-top:200px;\">Не ввели дату</font></br>Через 3 секунды вы будете перенапревлены назад</center>
	<script language=\"JavaScript\" type=\"text/javascript\">
<!-- 
function GoNah(){ 
 location=\"http://".$_SERVER['HTTP_HOST']."/addnews.php\"; 
} 
setTimeout( 'GoNah()', 3000 ); 
//--> 
</script>
	";}
	elseif($_POST['adminpassword'] != $adminpassnews)
	{echo "<center style=\"margin-top:300px;\"><font style=\"font-size:30px;color:red;margin-top:200px;\">Пароль администратора неверный</font></br>Через 3 секунды вы будете перенапревлены назад</center>
	<script language=\"JavaScript\" type=\"text/javascript\">
<!-- 
function GoNah(){ 
 location=\"http://".$_SERVER['HTTP_HOST']."/addnews.php\"; 
} 
setTimeout( 'GoNah()', 3000 ); 
//--> 
</script>
	";}

	 
	
 else{

	 	mysql_select_db($saitbd) or die ("не выбралась дб");
		mysql_query("set names UTF8");
		
			$result = mysql_query("INSERT INTO news(textfull,textmini,data,nazva) VALUES('$sex1','$sex2','$sex3','$sex4')");
            echo "<center style=\"margin-top:300px;\"><font style=\"font-size:30px;color:green;margin-top:200px;\">Новость успешно добавлена!</font></br>Через 6 секунд вы будете перенапревлены назад</center>
				<script language=\"JavaScript\" type=\"text/javascript\">
<!-- 
function GoNah(){ 
 location=\"http://".$_SERVER['HTTP_HOST']."/\"; 
} 
setTimeout( 'GoNah()', 6000 ); 
//--> 
</script>
			";

			}
 
 
      
?>