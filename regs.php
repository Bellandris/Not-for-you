 <?php
#####WoW-YSERA####

###########################Дизайн SOUL-TEAM.RU############################

###########################ВЕРСТКА И СКРИПТОВКА SOUL-TEAM.RU##############

require_once 'config.php'; 
$tbc = 2; 
$database_encoding = 'CP1251'; 

$realmd = mysql_connect("$dbip:$dbport", "$dblogin", "$dbpass", True)or die (mysql_error ()); 
mysql_selectdb("$rdb", $realmd)or die (mysql_error ()); 

$world = mysql_connect("$dbip:$dbport", "$dblogin", "$dbpass", True)or die (mysql_error ()); 
mysql_selectdb("$mdb", $world)or die (mysql_error ()); 

$characters = mysql_connect("$dbip:$dbport", "$dblogin", "$dbpass", True)or die (mysql_erorr ()); 
mysql_selectdb("$cdb", $characters)or die (mysql_error ()); 

echo " 
<script type=\"text/javascript\"> 
function isAlphaNumeric(value) 
{ 
if (value.match(/^[a-zA-Z0-9_]+$/)) 
return true; 
return false; 
} 
function checkform(f) 
{ 
if (f.account.value == \"\") 
{ 
alert(\"Введите логин\"); 
return false; 
} 
if (!isAlphaNumeric(f.account.value)) 
{ 
alert(\"Запрещенные символы в логине\"); 
return false; 
} 
if (f.password.value==\"\") 
{ 
alert(\"Введите пароль\"); 
return false; 
} 
if (!isAlphaNumeric(f.password.value)) 
{ 
alert(\"Запрещенные символы в пароле\"); 
return false; 
} 
if (f.password2.value==\"\") 
{ 
alert(\"Вы не ввели повтор пароля\"); 
return false; 
} 
if (f.password.value != f.password2.value) 
{ 
alert(\"Пароли не совпадают\"); 
return false; 
} 
if (f.email.value==\"\") 
{ 
alert(\"Вы не ввели e-mail\"); 
return false; 

} 
} 
</script>";  
if (isset($_POST['account'])) {
if ($_POST['account'] && strlen($_POST['account'])<=20 && strlen($_POST['account'])>=3 && strlen($_POST['password'])>=3 && $_POST['password'] && $_POST['password2'] && $_POST['password']==$_POST['password2']) {
if (!eregi("^[a-zA-Z0-9_]+$", $_POST['account']))
die ("<p>Error: SQL-Injection</p>");
if (!eregi("^[a-zA-Z0-9_]+$", $_POST['password']))
die ("<p>Error: SQL-Injection</p>");
$pass = ($_POST['password']);
$username = ($_POST['account']);
$result = mysql_query("SELECT * FROM account WHERE username='".$_POST['account']."' AND sha_pass_hash='$pass'", $realmd);
if (mysql_num_rows($result) != 0) {
echo "<center><p><font color=#CC0000><b>Такой аккаунт уже есть!</b></font></p></center>";
} else {
if (!mysql_query("INSERT INTO account (username, sha_pass_hash, email, expansion) VALUES ('$username', SHA1(CONCAT(UPPER('$username'),':',UPPER('$pass'))), '".$_POST['email']."', $tbc)", $realmd)) {echo "<center><p><font color=#CC0000><b>Ошибка</b></font></p></center>";} else {echo "<center><p><font color=#00CC00><b>Аккаунт успешно зарегистрирован!</b></font></p></center>";}
}
} else {
echo "<center><p><font color=#CC0000><b>Проверьте правильность ввода!</b></font></p></center>";
}
}

?>
