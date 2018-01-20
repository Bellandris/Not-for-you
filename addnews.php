<!DOCTYPE html>
<html lang="ru">
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title>WoW YSERA</title>
	
	<script type="text/javascript">
	
function getText(){
  $('#text').show(1000);
  $('#lalka123').show(1000);
}
</script>	
	<script type="text/javascript">
function closeText(){
  $('#text').hide(1000);
  $('#lalka123').hide(1000);

}
</script>
	<script type="text/javascript">
function getText1(){
  $('#text1').show(1000);
    $('#lalka124').show(1000);
}
</script>	
	<script type="text/javascript">
function closeText1(){
  $('#text1').hide(1000);
      $('#lalka124').hide(1000);
}
</script>
	<script type="text/javascript">
function getText2(){
  $('#text2').show(1000);
}
</script>	
	<script type="text/javascript">
function closeText2(){
  $('#text2').hide(1000);
}
</script>	
	<!--Проект YSERA дизайн студии soul-team.ru! верстка meylah15-->
</head>
<body style="background-color:grey;">

	<center><form name="fastsearch" method="post" action="lib_add.php">
	Название новости (80 символов)</br>
	<input id="nazva" name="nazva" type="text" size="20" maxlength="80"></br>
	Введите текст полной новости новости.</br>
	<textarea id="fullnews" name="fullnews" style="width:500px;height:300px;"></textarea></br>
	Введите текст короткой новости для отображения на главной новости новости.(200 символов)</br>
	<textarea maxlength="200" id="korotkonews" name="korotkonews" style="width:500px;height:300px;"></textarea></br>
	Введите дату публикации вида (01.01.2001)</br>
	<input id="data" name="data" type="text" size="20" maxlength="10"></br>
	Пароль администратора</br>
	<input id="adminpassword" name="adminpassword" type="text" size="30"></br>
	<input type="submit">
	</form>
	<center>
	</body>
</html>