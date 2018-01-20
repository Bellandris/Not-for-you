<!DOCTYPE html>
<html lang="ru">
<head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
	<title>WoW YSERA</title>
	<link rel="stylesheet" type="text/css" href="templates/main/css/styles.css">
        <link rel="icon" href="templates/main/images/favicon.gif" type="image/x-icon">
	<link rel="shortcut icon" href="templates/main/images/favicon.gif" type="image/x-icon">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
	<script src="templates/main/js/jquery.tools.min.js"></script>
	<script src="templates/main/js/jquery.fancybox-1.3.4.pack.js"></script>
	<script src="templates/main/js/jquery.easing.1.3.js"></script>
	<script src="templates/main/js/tms-0.3.js"></script>
	<script src="templates/main/js/script.js"></script>	
	<script type="text/javascript" src="//vk.com/js/api/openapi.js?105"></script>
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
<body>
	<header>

<div class="main-menu">
			<a href="/" style="width:148px;" class="page-main"><span class="lighter_fast"></span></a>
			<span class="menu-br"></span>
			<a href="/forum" style="margin-left:-14px;width:118px;" class="page-reg"><span class="lighter_fast"></span></a>
			<span class="menu-br"></span>
			<a href="/reg.php" style="margin-left:-14px;width:172px;" class="page-forum"><span class="lighter_fast"></span></a>
			<span class="menu-br"></span>
			<a href="http://cp.ysera-wow.ru/" style="margin-left:-25px;width:208px;" class="page-lk"><span class="lighter_fast"></span></a>
			<span class="menu-br"></span>
			<a href="/reg.php" style="margin-left:-24px;width:208px;" class="page-armory"><span class="lighter_fast"></span></a>
			<span class="menu-br"></span>
			<a href="/faq.php" style="margin-left:-14px;width:167px;" class="page-bd"><span class="lighter_fast"></span></a>
			<span class="menu-br"></span>
		</div>

	</header>
	
	<div class="top-line"></div>
	<article>

		<div class="left-column">
		<div class="obschiu-onlay-bg"><div class="obschiu-onlay-text">Общий онлайн : <font style="font-size:25px;"><?php include("obschiy.php")?></font></div></div>
			<div class="slider-bg">
				<div class="slider">
					<ul class="items">
						<li><img src="templates/main/images/img1.png" alt=""></li>
						<li><img src="templates/main/images/img2.png" alt=""></li>
						<li><img src="templates/main/images/img3.png" alt=""></li>
						<li><img src="templates/main/images/img4.png" alt=""></li>
						<li><img src="templates/main/images/img5.png" alt=""></li>
					</ul>
				</div>				
			</div>
			
						
<div style="margin-top:-140px;"></div>
<div class="bg-regaa">
<div class="bg-regaa-top-text">
 Внимательно вводите свои данные! Правильно вводите адрес E-mail, так как именно на него будет высылаться пароль и аккаунт, если Вы их забыли. В имени аккаунта могут содержаться только латинские буквы, арабские цифры и знаки подчеркивания и тире. После создания аккаунта вы можете войти и проверить свои данные. Вы не имеете право удалять созданный аккаунт!
</div>
						
			      <form method="post" action="" id="reg_form" style="margin:50px 0 0 30px;">
					
					<table class="regform">
				<p><p><?php include('regs.php') ?></p></p> 
				           
						<tr><td class="regform_left" align="top"> </td><td> <p style="color:#f0e2bc;font-size:14px;text-align:center;">Логин:</p><input name="account" type="text" class="regform_input_login"/></td></tr>
				
						<tr><td class="regform_left"> </td><td> <p style="color:#f0e2bc;font-size:14px;text-align:center;">Пароль:</p><input name="password" type="password"  class="regform_input_pass"/></td></tr>
				
						<tr><td class="regform_left"></td><td> <p style="color:#f0e2bc;text-align:center;font-size:14px;">Подтвердите пароль:</p><input name="password2" type="password" class="regform_input_pass2" /></td></tr>
						
						<tr><td class="regform_left"></td><td> <p style="color:#f0e2bc;font-size:14px;text-align:center;">Е-mail:</p></p><input name="email" type="text"  class='regform_input_email' /></td></tr>
						<tr><td class="regform_left"></td><td> <p style="color:#f0e2bc;font-size:14px;text-align:center;">Секретный вопрос:</p></p> 
						<select name="secret-aks" style="width:290px;height:30px;background-color:black;border:1px solid #6e2c77;border-radius:2px;color:#f0e2bc;">				
				<option value="d1">Девичья фамилия мамы</option>
				<option value="d2">Имя первого питомца</option>
				<option value="d3">Номер школы</option>
				<option value="d3">Любимая звезда</option>
				<option value="d4">Номера автомобиля</option></select>

						<tr><td class="regform_left"></td><td> <p style="color:#f0e2bc;font-size:14px;text-align:center;">Секретный ответ:</p></p><input name="secret" type="text"  class='regform_input_email' /></td></tr>
						<tr><td></td><td>
						<center style="margin-top:30px;margin-left:50px;width:200px;color:#f0e2bc;">Я согласен с правилами регистрации 
и общими правилами сервера.
</br><font style="color:red;"><?php echo "$realm1";?></font>
</center>
						<div class='register'>
						<input type="submit" class="login-box-submit" style="border:none" value="">
						</tr> 
                       

				
					</div>
						<tr>		

 </td> 
				</tr>
					
					
					</td></tr>
					</table>
				</form>   
				<center style="margin-left:10px;"><div class="bg-rega-bottom-text">Возникли проблемы , во время регистрации? Отпишите на <a href="http://forum.ru/">ФОРУМ</a></div></center>
</div>
		
			

		                            
			
			
			
			
			
			
	
			
			

								

	</div>	
	
				<div class="right-column">
				<div class="go-block">
				<div class="go-block-text">
				
				Начать игру :
				</div>
				<a href="/reg.php" style="width:90px;height:90px;float:right;"><div class="go-block-img"></div></a>
				</div>
		<div class="realm-status-bg">
				<div style="padding-top:50px;"></div>

				<a href="javascript:void(0);" onclick="closeText1();closeText2();getText()" style="text-decoration:none;"><div class="realm-name-bg">
				<div class="realm-name-text">
				Mists of Pandaria 5.0.5 - x 5
				
				</div>
				
				<div id="text" style="display:none;">
						<div class="realmlstaticimg1">
<? 
require_once 'config.php';  
$fp = @fsockopen ("$dbip","$gameport",$errno,$errstr,1); 
if ($fp) 
echo '<img src="templates/main/images/on.png" alt="">'; 
else 
echo '<img src="templates/main/images/off.png" alt="">'; 
?> 
</div>
				<div class="realmlstatictext1" style="display:block;position:relative;">
						
				
					<a style="font-size:12.7px;">Рейты:</a>&nbsp X5
								</br>
								<a style="font-size:13px;">Онлайн: </a>&nbsp<?php include('online1.php') ?>
								</br>
								<a style="font-size:13px;">Версия:</a> &nbsp 5.0.5
								</br>
								<a style="font-size:13px;">Аптайм:</a>&nbsp <?php include('uptime1.php') ?>	
								</br>
								
								
					</div>	</br></br></br></br></br></br><font style="color:#f0e2bc;"><center><?php echo "$realm1";?></center></font>
				
				

				

				</div>
				
				</div></a>
				<div id="lalka123" style="display:none;"><div style="margin-top:120px;"></div></div>

				
				

								<a href="javascript:void(0);" onclick="closeText();closeText2();getText1()" style="text-decoration:none;"><div class="realm-name-bg">
				<div class="realm-name-text">
				Mists of Pandaria 5.0.5 - x100
				
				</div>
				
				<div id="text1" style="display:none;">
						<div class="realmlstaticimg1">
<? 
require_once 'config.php';  
$fp = @fsockopen ("$dbip","$gameport",$errno,$errstr,1); 
if ($fp) 
echo '<img src="templates/main/images/on.png" alt="">'; 
else 
echo '<img src="templates/main/images/off.png" alt="">'; 
?> 
</div>
								<div class="realmlstatictext1" style="display:block;position:relative;">
						
							
					<a style="font-size:12.7px;">Рейты:</a>&nbsp X100
								</br>
								<a style="font-size:13px;">Онлайн: </a>&nbsp<?php include('online2.php') ?>
								</br>
								<a style="font-size:13px;">Версия:</a> &nbsp 5.0.5
								</br>
								<a style="font-size:13px;">Аптайм:</a>&nbsp <?php include('uptime2.php') ?>	
								</br>
					</div>	</br></br></br></br></br></br><font style="color:#f0e2bc;"><center><?php echo "$realm2";?></center></font>

				</div>
				
				</div></a>	
<div id="lalka124" style="display:none;"><div style="margin-top:120px;"></div></div>
				<a href="javascript:void(0);" onclick="closeText();closeText1();getText2()" style="text-decoration:none;"><div class="realm-name-bg">
				<div class="realm-name-text">
				Mists of Pandaria 5.0.5 - FUN
				
				</div>
				
				<div id="text2" style="display:none;">
										<div class="realmlstaticimg1">
<? 
require_once 'config.php';  
$fp = @fsockopen ("$dbip","$gameport",$errno,$errstr,1); 
if ($fp) 
echo '<img src="templates/main/images/on.png" alt="">'; 
else 
echo '<img src="templates/main/images/off.png" alt="">'; 
?> 
</div>
												<div class="realmlstatictext1" style="display:block;position:relative;">
						
							
					<a style="font-size:12.7px;">Рейты:</a>&nbsp FUN
								</br>
								<a style="font-size:13px;">Онлайн: </a>&nbsp<?php include('online3.php') ?>
								</br>
								<a style="font-size:13px;">Версия:</a> &nbsp 5.0.5
								</br>
								<a style="font-size:13px;">Аптайм:</a>&nbsp <?php include('uptime3.php') ?>	
								</br>
					</div>	</br></br></br></br></br></br><font style="color:#f0e2bc;"><center><?php echo "$realm3";?></center></font>

				</div>
				
				</div></a>
				
				
			
						
								
							
				</div>	

<div class="client-bg">
<div class="client-bg-left">
<a href="<?php echo "$downloadwow";?>">Скачать клиент</a>
</div>
<div class="client-bg-right">
<a href="/reg.php">Подключение</a>
</div>
</div>

			<div class="clear"></div>
			<div class="player-bg"><a class="player-play" href="//www.youtube.com/v/cf64fIn9LVI?hl=ru_RU&amp;version=3&amp;rel=0" id="showvideo"></a></div>
			<div class="books-bg">
			<div class="books-horde"><a href="http://ru.wowhead.com/faction=67" Target="_blank"></a></div>
			<div class="books-alliance"><a href="http://ru.wowhead.com/faction=469" Target="_blank"></a></div>
			
			</div>
			
			<div class="login-bg">
			<div class="login-bg-razmetka">
			<a href="http://ru.wowhead.com/faction=67" Target="_blank">ТОПы реалмов</a></br>
			<a href="http://ru.wowhead.com/faction=67" Target="_blank">Бонусы</a></br>
			<a href="http://ru.wowhead.com/faction=67" Target="_blank">Акции</a></br>
			<a href="http://ru.wowhead.com/faction=67" Target="_blank">Эвенты</a></br>
			<a href="http://ru.wowhead.com/faction=67" Target="_blank">Трансфер</a>
			</div>
			</div>
<div class="vk-group">
<div id="vk_groups" style="padding-top:60px;"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 0, width: "254", height: "220", color1: 'FFFFFF', color2: '166C40', color3: '126342'}, 65723456);
</script>
</div>

			
	
			
			
		
			
		
		</div>

			<div class="clear"></div>

	</article>

	<div class="content-bg-bottom">
	<div class="copppy" style="width:400px;color:#545453;">© 2014  "Ysera"  -  Запрещается использование материалов сайта
 без письменного разрешения со стороны администрации ресурса.
Все права защищены.</div>
<div class="ssulki-soc-seti">
<a href="http://<?php echo"$ssulkafacebook";?>" class="futer-bottom-img5"></a>
<a href="http://<?php echo"$ssulkatwitter";?>" class="futer-bottom-img4"></a>
<a href="http://<?php echo"$ssulkaevk";?>" class="futer-bottom-img3"></a>
<a href="skype:<?php echo"$ssulkaskype";?>?call" class="futer-bottom-img2"></a>
<a href="<?php echo"$ssulkaemail";?>" class="futer-bottom-img1"></a>	
</div>	
	
	</div>
	

	<div class="videoplayer">asd</div>
	<script>
		$(".trigger").tooltip({
          effect: 'fade',
          fadeOutSpeed: 50,
          predelay: 100,
          position: "bottom left",
          offset: [-45, 20]
		  });
	</script>
	</body>
</html>