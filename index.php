<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Peter Gift</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="img/h_fabicon.png">
<link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
<link rel="stylesheet" href="style.css">
</head>
<body>
<!--header 1 start -->
<section class="banner">
<header class="header">
	<div class="header-inner container clear"> <!--<a class="logo" href="#"><span class="sr">Lambda Logo</span>--></a>
		<input type="checkbox" id="navigation-toggle-checkbox" name="navigation-toggle-checkbox" class="navigation-toggle-checkbox sr">
		<label for="navigation-toggle-checkbox" class="navigation-toggle-label" onclick> <span class="navigation-toggle-label-inner"> <span class="sr">Navigation</span> </span> </label>
		<nav class="navigation">
			<ul class="navigation-menu">
				<li class="navigation-item"><a href="#about">Info</a></li>
				<li class="navigation-item"><a href="#ingredients">Nyheder</a></li>
				<li class="navigation-item"><a href="#menu">Menu</a></li>
				<li class="navigation-item"><a href="#reviews">Udtalelser</a></li>
				<li class="navigation-item"><a href="#reservations">Book et bord</a></li>
			</ul>
			<ul class="navigation-social">
				<li class="navigation-item-social"><a class="social social-twitter" href="#"><span class="sr">Twitter</span></a></li>
				<li class="navigation-item-social"><a class="social social-facebook" href="https://www.facebook.com/Peter-Gift-452296481516035/?fref=ts"><span class="sr">Facebook</span></a></li>
			</ul>
		</nav>
	</div>
</header>
<div class="banner-inner container">
	<h1 class="banner-lead"> <span class="banner-lead-1"></span> <span class="banner-lead-2">PETER GIFT</span> </h1>
	<div class="banner-buttons"> <a href="#reservations" class="button button-primary">Book et bord</a> <a href="#menu" class="button button-primary">Se menuen</a> </div>
</div>
</section>
<!-- Åbningstider  -->
<section id="about" class="content-block about-block">
	<div class="about-block-inner container">
		<div class="clear text-center">
			<div class="about-block-content col-6-desktop">
				            
				<h2>Peter Gift – lige over for Bruuns Galleri</h2>
                <div id="text-petergift">
                <p> Mandag-lørdag 11:00-01:00 <br>
					Søndag og helligdage 14:00-22:00 <br>
					Kig ind! </p>
				<p> Hos Peter Gift holder vi traditionerne i hævd, og i 2006 kunne vi 
                	fejre 100 års jubilæum. Kom ind og nyd en pause i hverdagen. 
					Vi har en hyggelig gårdhave, der er åbent fra marts til oktober. Når gårdhaven er lukket, tænder vi op i
                    pejsen. Kom ind og prøv vores landskendte gløgg i julemåneden.
					Vi tilbyder 45 forskellige spændende ølmærker fra hele verden, så kom ind og prøv noget nyt, eller nyd et 			
                    glas velskænket ROYAL.
 				</p>
                </div>
				
                
                
                 </div>
			<div class="about-block-img col-6-desktop none-tablet block-desktop"> <img src="img/petergift_logo.png" alt="Dish of food"> </div>
		</div>
	</div>
</section>
<!--nyheder -->
<section id="ingredients" class="content-block ingredients-block">
	<div class="ingredients-block-inner container clear">
		<div class="feature-box text-center col-12 col-12-desktop right">
			<h2 class="h2-secondary">Peter Gift Nyheder</h2>
			<div class="feature-box-content">
				<p> Her skal der være nyheder, f.eks. forskellige tilbud. evt. Jule menuen <br>
					Nyhederne skifter hver gang der kommer et nyt tiltag <br>
					Når julen er slut, kan der stå et andet tilbud! f.eks. et tilbud der er der hele året, så det ikke skal skiftes hele tiden. </p>
                    <p> Her skal der være nyheder, f.eks. forskellige tilbud. evt. Jule menuen <br>
					Nyhederne skifter hver gang der kommer et nyt tiltag <br>
					Når julen er slut, kan der stå et andet tilbud! f.eks. et tilbud der er der hele året, så det ikke skal skiftes hele tiden. </p>
                    <p> Her skal der være nyheder, f.eks. forskellige tilbud. evt. Jule menuen <br>
					Nyhederne skifter hver gang der kommer et nyt tiltag <br>
					Når julen er slut, kan der stå et andet tilbud! f.eks. et tilbud der er der hele året, så det ikke skal skiftes hele tiden. </p>
				
			</div>
                     
            
		</div>
	</div>
</section>
<!--menukort-->
<?php include "admin/includes/samletmenu.php"; ?>
<!--gæster siger -->

<section id="reviews" class="content-block reviews-block">
	<div class="reviews-block-inner container">
		
        <div class="feature-box text-center col-12-tablet col-8-desktop center-element">
			<h2 class="h2-secondary">Guest Reviews</h2>
			<blockquote>
				<p> If you've been to one of our restaurants, you've seen - and tasted - what keeps our customers coming back for more.
					Perfect materials and freshly baked food, delicious Lambda cakes, muffins, and gourmet coffees makes us hard to resist!
					Stop in today and check us out! </p>
				<cite> food inc, New York </cite> </blockquote>
             </div>
        
	</div>
</section>


<!--reservationer-->
<section id="reservations" class="content-block reservations-block">
	<div class="reservations-block-inner container">
		<div class="clear">
        	<img src="img/mad_img.jpg" alt="Food">
			
			<div class="reservation-block-form col-5-tablet">
				<div class=".text-left">
					<div id="text-reservations">
					<p> Reservationer i tidsrummet 12:00 - 15.00 er forbeholdt spisende gæster. <br>
Du modtager straks efter bestillingen en bekræftelse på e-mail, hvis der er tilknyttet en
e-mail.<br>
Selskaber fra 7 personer kan ikke booke bord online.<br>
Venligst kontakt os på email info@petergift.dk eller på telefon 86 12 01 63.
<br>Ved telefonisk henvendelse kontaktes vi bedst imellem 11.00 og 12.00 - 15.30 og 17.30.  </p>
				</div>
                </div>
                </div>
                <div class="reservation-block-form col-7-tablet">
				<form class="reservations-form">
					<fieldset>
						<legend class="sr">Contact Us</legend>
						<div class="clear">
                        <h2>BORD RESERVATION</h2>
							<div class="col-6-tablet field-group">
								<label class="block strong" for="name">Navn</label>
								<input name="full-name" class="field" id="name" type="text" placeholder="Dit navn *">
							</div>
							<div class="col-6-tablet field-group">
								<label class="block strong" for="email">Email</label>
								<input name="email" class="field" id="email" type="email" placeholder="Din email *">
							</div>
						</div>
						<div class="clear">
							<div class="col-6-tablet field-group">
								<label class="block strong" for="date">Dato</label>
								<input name="date-of-booking" class="field" id="date" type="text" placeholder="dato *">
							</div>
							<div class="col-6-tablet field-group">
								<label class="block strong" for="party-size">Antal personer</label>
								<span class="select">
								<select name="party-size" id="party-size">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="3">4</option>
									<option value="3">5</option>
									<option value="3">6</option>
								</select>
								</span> </div>
						</div>
                        
						<div class="text-center">
							<input type="submit" class="button reservations-submit" value="Book!">
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
</section>
<!--footer-->
<footer class="footer">
	<section class="footer-inner container">
		<div class="clear">
			<div class="footer-column col-4-desktop">
				<h3 class="footer-heading">Peter Gift</h3>
				<p> Kig ind - <br>Her er der plads til <strong>alle</strong>!</p>
			</div>
			<div class="footer-column col-4-desktop">
				<h3 class="footer-heading">Åbnings tider</h3>
				<p> <strong>Dagligt:</strong> 11- 01<br>
					<strong>Søndag og helligdage:</strong> 14 - 22</p>
			</div>
			<div class="footer-column col-4-desktop">
				<h3 class="footer-heading">Her er vi </h3>
				<p>M. P. Bruuns Gade 28 </p>
				<p>8000 Århus C</p>
				<ul class="footer-social-list icon-list-inline">
					<li class="navigation-item-social"><a class="social social-twitter" href="#"><span class="sr">Twitter</span></a></li>
					<li class="navigation-item-social"><a class="social social-facebook" href="https://www.facebook.com/Peter-Gift-452296481516035/?fref=ts"><span class="sr">Facebook</span></a></li>
				</ul>
			</div>
		</div>
	</section>
</footer>
<script src="js/vendor/wow.js"></script> 
<script src="js/vendor/webfontloader.js"></script> 
<script src="js/default.js"></script>
</body>
</html>