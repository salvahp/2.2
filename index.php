<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Peter Gift</title>
<meta name="robots" content="noindex, nofollow"> 
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="img/h_fabicon.png">
<link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
<link rel="stylesheet" href="style.css">
</head>
<body>
<!-- navigation start -->

<div id="banner" class="header-inner container clear"> <!--<a class="logo" href="#"><span class="sr">Lambda Logo</span>--></a>
			<input type="checkbox" id="navigation-toggle-checkbox" name="navigation-toggle-checkbox" class="navigation-toggle-checkbox sr">
			<label for="navigation-toggle-checkbox" class="navigation-toggle-label" onclick> <span class="navigation-toggle-label-inner"> <span class="sr">Navigation</span> </span> </label>
			<nav class="navigation">
				<ul id="navtext" class="navigation-menu">
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
<!-- navigation slut -->
<!--header 1 start -->
<section  class="banner">

    	
	<div class="banner-inner container">
		<h1 class="banner-lead"> <span class="banner-lead-1"></span> <span class="banner-lead-2"><img src="img/logo_hero_pg.png"></span> </h1>
		<div class="banner-buttons"> <a href="#reservations" class="button button-primary">Book et bord</a> <a href="#menu" class="button button-primary">Se menuen</a> </div>
	</div>
</section>
<!-- Åbningstider  -->
<section id="about" class="content-block about-block">
	<div class="about-block-inner container">
		<div class="clear text-left">
			<div id="infotext"  class="about-block-content col-6-desktop">
				<h2>M.P. Bruuns gade 28, <br>
					8000 Århus C</h2>
				<table>
					<tbody>
						<tr>
							<th colspan="2"><h5>Åbningstider</h5></th>
						</tr>
						<tr>
							<td><p>Mandag-lørdag:</p></td>
							<td><p>11:00-01:00</p></td>
						</tr>
						<tr>
							<td><p>Søndag og helligdage:</p></td>
							<td><p> 14:00-22:00</p></td>
						</tr>
						<tr>
							<td colspan="2"></td>
						</tr>
						<tr>
							<th colspan="2"><h5>Køkkenet</h5></th>
						</tr>
						<tr>
							<td><p>Tirsdag-fredag:</td>
							<td>11:00-15:00
								</p></td>
						</tr>
						<tr>
							<td><p>Lørdagsbuffet: </td>
							<td> 12:00-15:00
								</p></td>
						</tr>
					</tbody>
				</table>
				<div id="text-petergift">
					<p>Vi holder traditionerne i hævd, og i 2006 kunne vi fejre 100 års jubilæum. 
						Vi har en hyggelig gårdhave, der er åbent fra marts til oktober. Når gårdhaven er lukket, tænder vi op i
						pejsen. Vi tilbyder 45 forskellige spændende ølmærker fra hele verden, så kom ind og prøv noget nyt, eller nyd et 			
						glas velskænket ROYAL. </p>
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
			<h2 class="h2-secondary">Nyheder</h2>
			<div class="feature-box-content">

				<h6><?php include "admin/includes/nyheder/nyhedstitel.html"; ?></h6>
				<p> <?php include "admin/includes/nyheder/nyhedstekst.html"; ?></p>
			</div>
		</div>
	</div>
</section>
<!--menukort-->
<?php include "admin/includes/samletmenu.php"; ?>

<!--gæster siger//Guest reviews --> 

<script type="text/javascript" src="js/jquery00.js"></script> 
<script type="text/javascript" src="js/ticker00.js"></script> 
<script type="text/javascript">
	$(document).ready(function(){
		$('#fade').list_ticker({
			speed:4000,
			effect:'fade'
		});
		$('#slide').list_ticker({
			speed:2000,
			effect:'slide'
		});		
	})
	</script>
<section id="reviews" class="content-block reviews-block">
	<div class="reviews-block-inner container">
		<div id="reviewsbox" class="feature-box text-center col-12-tablet col-8-desktop center-element">
			<h2 class="h2-secondary">vores gæster siger om os</h2>
			<blockquote>
				<ul id="fade">
					<li >
						<p> "Hvis du har kommet her gennem 5 værters tid, så må man være en rigtig stamkunde!"</p>
						<cite> Kjeld, 67 </cite></li>
					<li>
						<p> "Det eneste sted i Århus, hvor du kan få en rigtig velskænket øl ..."</p>
						<cite> Niklas, 25</cite> </li>
					<li>
						<p> "Man føler sig altid velkommen på Peter Gift ..."</p>
						<cite> Gitte, 43 </cite> </li>
					<li>
						<p>"Peter Gift er ikke bare en caffé, her er der mere hyggeligt" </p>
						<cite> Sofie, 23 </cite> </li>
					<li>
						<p>"Jeg tænker altid på næste gang jeg skal ned på Peter Gift" </p>
						<cite> Lotte, 35 </cite></li>
				</ul>
			</blockquote>
		</div>
	</div>
</section>

<!--reservationer-->
<section id="reservations" class="content-block reservations-block">
	<div class="reservations-block-inner container">
		<div class="clear"> <img class="madbillede" src="img/mad_img.jpg" alt="Mad på Peter Gift">
			<div class="reservation-block-form col-5-tablet">
				<div class=".text-left">
					<div id="text-reservations">
						<h5>RESERVATION</h5>
						<p>I tidsrummet kl. 12:00 - 15.00 er reservationer forbeholdt spisende gæster.</p>
						<p>Du modtager straks efter bestillingen en bekræftelse på e-mail, hvis der er tilknyttet en
							e-mail.</p>
						<p>Selskaber fra 7 personer kan ikke booke bord online.</p>
                        
						<h5>KONTAKT OS</h5>
						<p>Venligst kontakt os på e-mail info@petergift.dk eller på telefon 86 12 01 63.</p>
						<p>Ved telefonisk henvendelse kontaktes vi bedst imellem kl. 11.00-12.00 eller kl. 15.30-17.30.</p>
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
				<p> Kig ind - <br>
					Her er der plads til alle!</p>
			</div>
			<div class="footer-column col-4-desktop">
				<h3 class="footer-heading">Åbningstider</h3>
				<p> Dagligt: 11-01<br>
					Søndag og helligdage: 14-22</p>
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