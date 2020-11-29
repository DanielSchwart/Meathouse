<?php session_start(); ?>
<!doctype html>
<html class="no-js" lang="en-US">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Мясной гастроном</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- favicon
		============================================ -->		
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		
		<!-- Google Fonts
		============================================ -->		
       <link href='https://fonts.googleapis.com/css?family=Raleway:400,600' rel='stylesheet' type='text/css'>
       <link href='https://fonts.googleapis.com/css?family=Roboto:400,700' rel='stylesheet' type='text/css'>
	   
		<!-- Bootstrap CSS
		============================================ -->		
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Font awesome CSS
		============================================ -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- owl.carousel CSS
		============================================ -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
		<!-- nivo slider CSS
		============================================ -->
		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" />
		<!-- meanmenu CSS
		============================================ -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- jquery-ui CSS
		============================================ -->
        <link rel="stylesheet" href="css/jquery-ui.css">
		<!-- animate CSS
		============================================ -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- main CSS
		============================================ -->
        <link rel="stylesheet" href="css/main.css">
		<!-- style CSS
		============================================ -->
        <link rel="stylesheet" href="css/style.css">
		<!-- responsive CSS
		============================================ -->
        <link rel="stylesheet" href="css/responsive.css">
    </head>
    <body>

        <!-- Add your site or application content here -->

		
			<!-- HEADER-MIDDLE START -->
			<div class="header-middle">
				<div class="container">
					<!-- Start Support-Client -->
					<div class="support-client hidden-xs">
						<div class="row">
							
						</div>
					</div>
					<!-- End Support-Client -->
					<!-- Start logo & Search Box -->
					<div class="row">
						<div class="col-md-3 col-sm-12">
							<div class="logo">
								<a href="index.html" title="Мясной гастроном"><img src="img/4242.jpg " width="630" height="500" alt="Мясной гастроном"></a>
							</div>
						</div>
						<!-- Start Single-Support -->
							<div class="col-md-3 hidden-sm">
								<div class="single-support">
									<div class="support-content">
										<div class="support-text">
											<h1 class="zero gfont-1">Рабочее время</h1>
											<p>Mon- Sun: 8.00 - 18.00</p>
										</div>
									</div>
								</div>
							</div>
							<!-- End Single-Support -->
						<!-- Start Single-Support -->
							<div class="col-md-3 col-sm-4">
								<div class="single-support">
									<div class="support-text">
										<h1 class="zero gfont-1">Телефон:8-86354-701-70</h1>
										<p>Всегда на связи!</p>
									</div>
								</div>
							</div>
							<!-- End Single-Support -->
							
		                    </div>
		                </div>
					</div>
					
					<!-- End logo & Search Box -->
				</div> 
			</div>
			<!-- HEADER-MIDDLE END -->
			<!-- START MAINMENU-AREA -->
			<div class="mainmenu-area">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="mainmenu hidden-sm hidden-xs">
								<nav>
									<ul>
										<li><a href="index.html">Главная</a>
											<ul>
												
											</ul>
										</li>
										<li><a href="posting.php">Новости</a></li>
										<li><a href="shop.php">Каталог товаров</a></li>
										<li><a href="map.html">Карта</a></li>
										<li><a href="com.php">Отзывы</a></li>
										
										
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN-MENU-AREA -->
			<!-- Start Mobile-menu -->
			<div class="mobile-menu-area hidden-md hidden-lg">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<nav id="mobile-menu">
								<ul>
									<li><a href="index.html">Главная</a>
										<ul>
											
										</ul>
									</li>
									<li><a href="posting.php">Новости</a></li>
									<li><a href="shop.php">Каталог товаров</a></li>
									<li><a href="map.html">Карта</a></li>
									<li><a href="com.php">Отзывы</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
			<!-- End Mobile-menu -->
		</header>
		<!-- HEADER AREA END -->
		<!-- START PAGE-CONTENT -->
		<section class="page-content">
			<div class="container">
	            <div class="row">
					<div class="col-md-12">
						<ul class="page-menu">
							<li><a href="index.html">Главная</a></li>
							<li class="active"><a href="#">О нас</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3">
						
		</section>
		<!-- END PAGE-CONTENT -->
			<?php
 

      if(!isset($_SESSION['login_user'])) // If session is not set then redirect to Login Page
       {
echo '<script type="text/javascript"> window.open("../account.php","_self");</script>' ;
       }
?>
    <body class="home blog">

        
<?php
include ("bd.php");
$user = $_SESSION['login_user'];

$result = mysql_query("SELECT * FROM users WHERE login='$user'");
while ($row = mysql_fetch_array($result)) {
echo " <div class='pagination-area'>
				<div class='row'>
					<div class='col-xs-5'>
				<div class='pagination'>

       <img height='200px' weight='200px' src='../img/profiles/blank.jpg' class='imgp'><br>
        <label>Никнейм:{$row['login']}</label><br>
        <label>Электронная почта: {$row['email']}</label><br>
        
<br>

<li><a href='../php/logout.php' target='_top'  class='buttonL' align='left' >Выйти из аккаунта</a>' 
<li><a href='auto.php' target='_top'  class='buttonL' align='left' >Сменить пароль</a>" ;}
?>
<?php

if(!isset($_SESSION['login_user'])) // If session is not set then redirect to Login Page
       {
echo '<script type="text/javascript"> window.open("../account.php","_self");</script>' ;
       }
else{
    
   $user=$_SESSION['login_user'];
    if ($user=="JON"){
          echo "<li><a href='admin.php' target='_top' class='buttonA' align='left'>Админ-панель</a><br>" ;
    }
    else {
         echo '<script type="text/javascript"> window.open("../profile_a.php","_self");</script>' ;
    }
}
   echo "	</div>
														</div>
													</div>
												</div>  ";



?>
   
    </body>
		
			
			<!-- Copyright-area Start -->
			<div class="copyright-area">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="copyright">
								<p>Copyright &copy;  All rights reserved.</p>								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Copyright-area End -->
		
        

		<!-- jquery
		============================================ -->		
        <script src="js/jquery-1.11.3.min.js"></script>
		<!-- bootstrap JS
		============================================ -->		
        <script src="js/bootstrap.min.js"></script>
		<!-- wow JS
		============================================ -->		
        <script src="js/wow.min.js"></script>
		<!-- meanmenu JS
		============================================ -->		
        <script src="js/jquery.meanmenu.js"></script>
		<!-- owl.carousel JS
		============================================ -->		
        <script src="js/owl.carousel.min.js"></script>
		<!-- scrollUp JS
		============================================ -->		
        <script src="js/jquery.scrollUp.min.js"></script>
        <!-- countdon.min JS
		============================================ -->		
        <script src="js/countdon.min.js"></script>
        <!-- jquery-price-slider js
		============================================ --> 
        <script src="js/jquery-price-slider.js"></script>
        <!-- Nivo slider js
		============================================ --> 		
		<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
		<!-- plugins JS
		============================================ -->		
        <script src="js/plugins.js"></script>
		<!-- main JS
		============================================ -->		
        <script src="js/main.js"></script>
    </body>
</html>



