<?include "connect.php"?>
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
								  <li><a href="contact.php">Контакты</a></li>
								<li class="active"><a href="zapis.php">Записаться</a></li>
							</ul>
						  </div>
					</div>
				  </div>
			</div>
			
		</div>	
			
	</div>
	
</div>		
	
</header>
<center>
	<h1 style="margin-top:40px;">Запишитесь</h1>
		<div class="main-content">
		<form class="obratnuj-zvonok" autocomplete="off" action='index.php' method='post'>
			<div class="form-zvonok"> 
				<div>
					<?
					if ($_POST['send']=='Отправить заявку'){

						$name=$_POST['name'];
						$phone=$_POST['phone'];
						$description=$_POST['description'];
						$date=$_POST['date'];
						$time=$_POST['time'];
						

						$query="INSERT INTO `zayava`(`name`, `phone`, `description`, `date`, `time`, `status`) VALUES ('$name', '$phone', '$description','$date','$time', 'Новая')";
						mysqli_query($conn, $query);
						
						echo "<h3>Заявка успешно добавлена</h3>";
						
					}
					?>
					<label>Имя <span>*</span></label>
					<input type='text' name='name' required>
					<label>Номер телефона (с кодом) <span>*</span></label>
					<input type='number' name='phone' required>
					<label>Сообщение</label>
					<input type='text' name='description'>
					<label>Дата</label>
					<input type='date' name='date'>
					<label>Время записи</label>
					<input type='time' name='time'>
					<label>Услуга</label>
					<select name="new_status">
						<option value="Подтверждено">Протезирование</option>
						<option value="Отклонено">Чистка</option>
						<option value="Отклонено">Удаление</option>
						<option value="Отклонено">Фторирование</option>
						<option value="Отклонено">Отбеливание</option>
						<option value="Отклонено">Брекеты</option>
                	</select>
				</div>
				<input class="bot-send-mail" type='submit' name="send" value='Отправить заявку'>
			</div>
		</form>
		</div>
</center>
<script src="js/jquery-1.8.2.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/flexslider.js"></script>
<script src="js/carousel.js"></script>
<script src="js/jquery.cslider.js"></script>
<script src="js/slider.js"></script>
<script def src="js/custom.js"></script>
</body>
</html>