<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>GreenDent</title> 
	<meta name="description" content="GotYa Free Bootstrap Theme"/>
	<meta name="keywords" content="Template, Theme, web, html5, css3, Bootstrap" />
	<meta name="author" content="Łukasz Holeczek from creativeLabs"/>

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<meta property="og:title" content=""/>
	<meta property="og:description" content=""/>
	<meta property="og:type" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:image" content=""/>

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid+Serif">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Boogaloo">
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Economica:700,400italic">
</head>
<body>
	

	<header>

			<div class="container">

				<div class="row">

					<div class="logo span3">
							
						<a class="brand" href="index.php"><img src="img/logo.jpg"></a>
							
					</div>

					<div class="span9">
							
						<div class="navbar navbar-inverse">
							<div class="navbar-inner">
								<div class="container">
									<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</a>
									<div class="nav-collapse collapse">
										<ul class="nav">
											<li><a href="index.php">Главная</a></li>
											<li ><a href="about.php">О нас</a></li>
											<li><a href="services.php">Услуги</a></li>
											<li class="active"><a href="contact.php">Контакты</a></li>
											<li><a href="zapis.php">Записаться</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						
					</div>	
						
				</div>
				
			</div>		
				
		</header>

		<div>


			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
			<div id="googlemaps-container-top"></div>
			<div id="googlemaps-container-bottom"></div>
			<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A4360567387caf544bb414f3f581f50eb9865b311c28d6b2809d26ddccd9f9382&amp;width=100%25&amp;height=400&amp;lang=ru_RU&amp;scroll=true"></script>
			<script src="js/jquery.gmap.min.js"></script>
			<script type="text/javascript">
				$('#googlemaps').gMap({
					maptype: 'ROADMAP',
					scrollwheel: false,
					zoom: 13,
					markers: [
						{
							address: 'Yakutsk, Russia', 
							html: '',
							popup: false,
						}

					],

				});
			</script>

		</div>

		<div id="wrapper">		

			<div class="container">

				<div class="row">
					<div class="span6">
						<div class="title"><h3>Информация</h3></div>
						<p>
							<b>GreenDent</b>
						</p>
						<p>
							Республика Саха(Якутия), г.Якутск
						</p>
						<p>	
							ул. Петра Алексеева, 4
						</p>	
						<p>	
							Телефон: +7 (924) 466-77-60
						</p>
						<p>
							Почта: gdent@rambler.ru
						</p>
					</div>
					
					<div class="span6">
						<div class="title"><h3>Отправить сообщение</h3></div>

						<div class="main-content">
							<form class="obratnuj-zvonok" autocomplete="off" action='index.php' method='post'>
								<div class="form-zvonok"> 
									<div>
										<label>ФИО:<span>*</span></label>
										<input type='text' name='name' required>
										<label>Телефон:<span>*</span></label>
										<input type='text' name='phone' required>
										<label>Сообщение:</label>
										<input type='text' name='description'>
									</div>
									<input class="bot-send-mail" type='submit' name="send" value='Отправить заявку'>
								</div>
							</form>
							</div>

					</div>

				</div>


			</div>
					
		</div>

		<div id="footer-menu" class="">

			<div class="container">

			</div>	

		</div>	

		<div id="copyright">
		
			<div class="container">
			
				<p>
					<img src="img/logo.jpg" alt="Poland" style="margin-top:-4px; height: 100px; width: auto;"><br>&copy; 2024, <a href="index.html" alt="Gdent" title="GreenDent">GreenDent</a>.
				</p>
		
			</div>
			
		</div>	

<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script def src="js/custom.js"></script>

</body>
</html>