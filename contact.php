<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	

	<title>Kontakty</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Personal Blog Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" 
	/>
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!----webfonts---->
		<link href='http://fonts.googleapis.com/css?family=Oswald:100,400,300,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,300italic' rel='stylesheet' type='text/css'>
		<!----//webfonts---->
		  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<!--end slider -->
		<!--script-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--/script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!---->

</head>
<body>
<!---header---->
<header>

	<div class="logo">
		<a href="index.php">zdrowie</a>
	</div>
	<!---start-top-nav---->
	<div class="top-menu">
		<div class="search">

			<span class="menu"> </span>
			<ul>
				<li ><a href="index.php">Strona główna</a></li>
				<li><a href="blog.php">Artykuły</a></li>
				<li class="active"><a href="contact.php">Kontakty</a></li>
				<li><a href="terms.php">Warunki i postanowienia</a></li>
				<li><a href="policy.php">Polityka prywatności</a></li>
				<div class="clearfix"></div>
			</ul>
		</div>
		<div class="clearfix"></div>
		<script>
			$("span.menu").click(function () {
				$(".top-menu ul").slideToggle("slow", function () {
				});
			});
		</script>
		<!---//End-top-nav---->
	</div>
</header>
<!--/header-->
<div class="contact-content">
	 <div class="container">
		     <div class="contact-info">
			 <h2>Kontakty</h2>

		     </div>
			 <div class="contact-details">				 
			 <form action="thanks.php" method="post">
				 <input type="text" placeholder="Nazwa" />
				 <input type="text" placeholder="Nazwisko" />
				 <input type="text" placeholder="Email" />
				 <input type="text" placeholder="Numer telefonu" />
				 <textarea ></textarea>
				 <label class="terms-field">
					 <input type="checkbox" name="terms" value="check" required=""/>
					 <a href="policy.php" target="_blank">
						 Przeczytałem i zgadzam się z warunkami umowy
					 </a>
				 </label>
				 <input type="submit" value="Wysłać"/>

			 </form>
		  </div>
		  <div class="contact-details">
			  <div class="col-md-6 contact-map">

				 <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d803187.8113675824!2d-120.11910914056458!3d38.15292455846902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fb9fe5f285e3d%3A0x8b5109a227086f55!2sCalifornia%2C+USA!5e0!3m2!1sen!2sin!4v1423829283333" frameborder="0" style="border:0"></iframe>
			  </div>
			  <div class="col-md-6 company_address">		 

					<p>Nałkowskiej Zofii 52/34, 82-430 Łomża</p>

					<p>+7709884168267</p>

					<p>iwo69@interia.pl</p>

			 </div>
			  <div class="clearfix"></div>
	     </div>		 


			 </div>
	 </div>
</div>
<!---->
<footer>

	<div class="container">
		<div class="footer">
			<p>
				Copyright &copy;<script>document.write(new Date().getFullYear());</script>
				All rights reserved</p>

		</div>
	</div>
</footer>

<div class='cookie-banner'>
	<p>
		Strona wykorzystuje pliki cookie. Pozwalają one poznać ciebie i otrzymywać informacje o swoim doświadczeniu użytkownika.Kontynuując przeglądanie strony, wyrażam zgodę na korzystanie z plików cookie przez właściciela serwisu zgodnie z  <a target="_blank" href="https://en.wikipedia.org/wiki/HTTP_cookie">Polityką cookie</a>
	</p>
	<button class='close-cookie'>&times;</button>
</div>
<script>
	window.onload = function() {
		$('.close-cookie').click(function () {
			$('.cookie-banner').fadeOut();
		})
	}
</script>
<script>
	let elems = document.querySelectorAll('.server-name');
	elems.forEach((elem) => {
		elem.innerHTML = window.location.hostname
	})
</script>

	</body>
