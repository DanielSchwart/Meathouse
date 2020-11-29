<?php
session_start(); 
?>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Мясной гастроном </title>
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

			<!-- HEADER-AREA START -->
		<header class="header-area">
			<!-- HEADER-TOP START -->
			<div class="header-top hidden-xs">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="top-menu">
								
								<ul class="Login">
									<li><a href="profile_a.php"><img class="right-5">Профиль</a>
										
									</li>
								</ul>							
								
							</div>
							
						</div>
					</div>
				</div>
			</div>
			<!-- HEADER-TOP END -->
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
								<a href="home.html" title="Мясной гастроном"><img src="img/4242.jpg " width="630" height="500" alt="Мясной гастроном"></a>
							</div>
						</div>
						<!-- Start Single-Support -->
							<div class="col-md-3 hidden-sm">
								<div class="single-support">
									<div class="support-content">
										
										<div class="support-text">
											<h1 class="zero gfont-1">Рабочее время</h1>
											<p>Пон- Вос: 8.00 - 18.00</p>
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
			<!-- Start Account-Create-Area -->
			<div class="account-create-area">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="page-menu">
								<li><a href="index.html">Главная</a></li>
								<li class="active"><a href="#">Коментарии</a></li>
							</ul>
						</div>
					</div>
					
					
					<div class="account-create">
					 <?php
					 if(!isset($_SESSION['login_user'])) // If session is not set then redirect to Login Page
                          {
                               echo '' ;
                                                }
                                         else{
											  $user=$_SESSION['login_user'];
                                         if ($user=="JON"){
                                                    echo "<form name='comment'  method='post' action='savecom.php' >
							<div class='row'>
								<div class='col-md-12'>
									<div class='account-create-box'>
										<h2 class='box-info'>Оставить коментарий</h2>
										<div class='row'>
											<div class='col-sm-4 col-xs-12'>
												<div class='single-create'>
													<p>Имя<sup>*</sup></p>
													<input class='form-control' type='text' required  name='name'size='15' maxlength='15' placeholder='Введите пвсевдоним'>
													<br>
													
													<textarea name='text_comment' rows='3' cols='46' maxlength='835' placeholder='Введите текст' type='text' wrap='hard'> </textarea>
													<br><br>
													
													<p>
					
                                                        <input type='hidden' name='page_id' value='150' />
                                                        <input type='submit' value='Отправить'  />
                                                        </p>
												</div>
											</div>
											
											
										</div>
									</div>";
                                                       }
                                                              else {
                                                               echo "<form name='comment'  method='post' action='savecom.php' >
							<div class='row'>
								<div class='col-md-12'>
									<div class='account-create-box'>
										<h2 class='box-info'>Оставить коментарий</h2>
										<div class='row'>
											<div class='col-sm-4 col-xs-12'>
												<div class='single-create'>
													<p>Имя<sup>*</sup></p>
													<input class='form-control' type='text' required  name='name'size='15' maxlength='15' placeholder='Введите пвсевдоним'>
													<br>
													
													<textarea name='text_comment' rows='3' cols='46'  maxlength='835' placeholder='Введите текст' type='text' wrap='hard'> </textarea>
													<br><br>
													
													<p>
					
                                                        <input type='hidden' name='page_id' value='150' />
                                                        <input type='submit' value='Отправить'  />
                                                        </p>
												</div>
											</div>
											
											
										</div>
									</div>" ;
                                                                        }
                                                                         }
						
									?>
									<div class="row">
						<div class="col-md-12">
							<div class="area-title">
								<h3 class="title-group gfont-1">Коментарии</h3>
							

							</div>
							
						</div>
					</div>		

								</div>
							</div>
						</form>
			           <HEADER> 
					   <?php
require_once dirname(__FILE__).'/ko.php';

$counter = mysql_query('SELECT COUNT(`id`) FROM `comments`');
$counter = mysql_fetch_array($counter);
$pages = intval( ($counter[0] - 1) / $conf['pp']) + 1;


if( isset($_GET['page'])) {
// Да, пользователь что-то передал
$page = (int) $_GET['page'];
	if ( $page > 0 && $page <= $pages ) {
		// Вычисляем с какого номера статьи надо начинать выводить
		$start = $page * $conf['pp'] - $conf['pp'];
		$sql = "SELECT * FROM `comments` ORDER BY `date` DESC LIMIT {$start}, {$conf['pp']}";
	}
	else { 
		$sql = 'SELECT * FROM `comments` ORDER BY `date` DESC LIMIT '. $conf['pp']; 
		$page = 1;
	}
}
else {
$sql = 'SELECT * FROM `comments` ORDER BY `date` DESC LIMIT '. $conf['pp'];
$page = 1;
}
$otvet = mysql_query($sql);
?>

 	<article> 
 		<!-- content -->
 		<?php
 		while($row = mysql_fetch_assoc($otvet)){
 			echo "<section>
 			<h2>{$row['name']}</h2>			
 			
			<h5><div class='text'><blockquote>{$row['text_comment']}</blockquote></div></h5>
 			<p class=\"date\">{$row['date']}</p>
 			</section>";
 		
 		}
 		?>
		   
<nav>
<?php
echo "<div class='pagination-area'>
                                                 <div class='row'>
														<div class='col-xs-5'>
															<div class='pagination'>";
if( $page > 1 ) echo'<li><a href="com.php?page='.($page-1).'"><</a>';
if( $page < $pages ) echo '<li><a href="com.php?page='.($page+1).'">></a>';
echo"</div>
</div>
														</div>
														<div class='col-xs-7'>
															<div class='product-result'>
																<span></span>
															</div>
														</div>";
?>

</nav>


		<style>
		.text {
    text-align:  center;
   }
* {
font-family: Arial, Helvetica, sans-serif;
}

/* Блоки */


article {
width:850px;
height:auto;
margin:auto;
}

article section {
border-bottom:1px dashed #BDECFE;
}

article section h2 {
color:#41738A;
font-size:25pt;
}

article section p {
font-size:10pt;
}

article section p.date {
font-size:9pt;
color:#516168;
text-align:right;
margin-bottom:0px;
padding-bottom:0px;
}
</style>			   
					   
					   
					   </HEADER>
					</div>
				</div>
			</div>
			

			<!-- End Account-Create-Area -->
			<p class="required text-right"></p>
		
		</section>
		
		<!-- END PAGE-CONTENT -->
		
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
		</footer>
		<!-- FOOTER-AREA END -->
        
        <script>

    var textarea = null;
        window.addEventListener("load", function() {
            textarea = window.document.querySelector("textarea");
            textarea.addEventListener("keypress", function() {
                if(textarea.scrollTop != 0){
                    textarea.style.height = textarea.scrollHeight + "px";
                }
            }, false);
        }, false);
    </script>
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