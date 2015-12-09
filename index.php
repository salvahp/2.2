<!DOCTYPE html>
<!-- Mikrodatamarkering tilføjet af Google Markeringsværktøj til strukturerede data. -->
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Peter Gift</title>
<meta name="robots" content="noindex, nofollow">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta itemprop="url" content="http://www.avejle.dk/petergift">
<link rel="shortcut icon" href="img/h_fabicon.png">
<link rel="apple-touch-icon" sizes="57x57" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">
<link rel="stylesheet" href="style.css">
</head>

<body>
<?php include_once("analyticstracking.php") ?>
<script src="js/vendor/wow.js"></script> 
<script src="js/vendor/webfontloader.js"></script> 
<script src="js/default.js"></script> 
<!-- navigation start -->

<div id="banner" class="header-inner container clear"> <!--<a class="logo" href="#"><span class="sr">Lambda Logo</span>--></a>
	<input type="checkbox" id="navigation-toggle-checkbox" name="navigation-toggle-checkbox" class="navigation-toggle-checkbox sr">
	<label for="navigation-toggle-checkbox" class="navigation-toggle-label" onclick> <span class="navigation-toggle-label-inner"> <span class="sr">Navigation</span> </span> </label>
	<nav class="navigation">
		<ul id="navtext" class="navigation-menu">
			<li class="navigation-item current"><a href="#about">Info</a></li>
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
<span itemscope itemtype="http://schema.org/LocalBusiness">
<section id="about" class="content-block about-block">
	<div class="about-block-inner container">
		<div class="clear text-left">
			<div id="infotext"  class="about-block-content col-6-desktop">
				<h2 itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
<span itemprop="streetAddress">M.P. Bruunsgade 28,</span> <br>
					<span itemprop="postalCode">8000</span><span itemprop="addressLocality"> Århus C</span></h2>
				<table>
					<tbody>
						<tr>
							<th colspan="2"><h5>Åbningstider</h5></th>
						</tr>
						<tr itemprop="openingHoursSpecification" itemscope itemtype="http://schema.org/OpeningHoursSpecification">
							<td><span itemprop="dayOfWeek" itemscope itemtype="http://schema.org/DayOfWeek"><p itemprop="name">Mandag-lørdag:</p></span></td>
							<td><p>
<span itemprop="opens">11:00</span>-
<span itemprop="closes">01:00</span></p></td>
						</tr>
						<tr itemprop="openingHoursSpecification" itemscope itemtype="http://schema.org/OpeningHoursSpecification">
							<td><p>
<span itemprop="dayOfWeek" itemscope itemtype="http://schema.org/DayOfWeek">
<span itemprop="name">Søndag og helligdage</span></span>:</p></td>
							<td><p> 
<span itemprop="opens">14:00</span>-
<span itemprop="closes">22:00</span></p></td>
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
			<div class="about-block-img col-6-desktop none-tablet block-desktop"> <img itemprop="image" src="img/petergift_logo.png" alt="Peter Gift logo"> </div>
		</div>
	</div>
</section>
<!--nyheder -->
<section id="ingredients" class="content-block ingredients-block">
	<div class="ingredients-block-inner container clear">
		<div class="feature-box text-center col-12 col-12-desktop right">
			<h2 class="h2-secondary">Nyheder</h2>
			<div class="feature-box-content">
				<h6>
					<?php include "admin/includes/nyheder/nyhedstitel.html"; ?>
				</h6>
				<p>
					<?php include "admin/includes/nyheder/nyhedstekst.html"; ?>
				</p>
			</div>
		</div>
	</div>
</section>
<!--menukort-->
<?php include "admin/includes/samletmenu.php"; ?>

<!--gæster siger//Guest reviews -->

<section id="reviews" class="content-block reviews-block">
	<div class="reviews-block-inner container">
		<div id="reviewsbox" class="feature-box text-center col-12-tablet col-8-desktop center-element">
			<h2 class="h2-secondary">Vores gæster siger</h2>
			<blockquote>
				<ul id="fade">
					<li itemprop="review" itemscope itemtype="http://schema.org/Review">
						<p> "
<span itemprop="reviewBody">Nu har jeg kommet her gennem 5 værters tid, så må man da være en rigtig stamkunde! Det er ihvertfald sådan jeg vil betegne mig selv. Èn gang på Peter Gift og jeg var solgt ..</span>"</p>
						
<span itemprop="author" itemscope itemtype="http://schema.org/Person"><cite itemprop="name"> Kjeld, 67 </cite></span></li>
					<li itemprop="review" itemscope itemtype="http://schema.org/Review">
						<p> "
<span itemprop="reviewBody">Det eneste sted i Århus, hvor du kan få en rigtig velskænket øl ... Kvaliteten er altid i top når man besøger Peter Gift - Prøv det selv!"</span></p>
						
<span itemprop="author" itemscope itemtype="http://schema.org/Person"><cite itemprop="name"> Niklas, 25</cite></span> </li>
					<li itemprop="review" itemscope itemtype="http://schema.org/Review">
						<p> "
<span itemprop="reviewBody">Man føler sig altid velkommen på Peter Gift, det er som én stor familie når man besøger det hyggelige værtshus i Bruunsgade ..</span>."</p>
						
<span itemprop="author" itemscope itemtype="http://schema.org/Person"><cite itemprop="name"> Gitte, 43 </cite></span> </li>
					<li itemprop="review" itemscope itemtype="http://schema.org/Review">
						<p>"
<span itemprop="reviewBody">Peter Gift er ikke bare en café, her er der mere hyggeligt. Efter min personlige mening, er det det bedste værtshus i byen - Hvilket AOA jo har givet mig ret i gennem 7 år ...</span>" </p>
						
<span itemprop="author" itemscope itemtype="http://schema.org/Person"><cite itemprop="name"> Sofie, 23 </cite></span> </li>
					<li itemprop="review" itemscope itemtype="http://schema.org/Review">
						<p>"
<span itemprop="reviewBody">Jeg tænker altid på næste gang jeg skal ned på Peter Gift, det er simpelthen bare så hyggeligt og gårdhaven er lige mig, om sommeren er der intet bedre!"</span> </p>
						
<span itemprop="author" itemscope itemtype="http://schema.org/Person"><cite itemprop="name"> Lotte, 35 </cite></span></li>
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
						<p>Venligst kontakt os på e-mail <span itemprop="email">info@petergift.dk</span> eller på telefon 
<span itemprop="telephone">86 12 01 63</span>.</p>
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
								<input name="date-of-booking" class="field" id="date" type="date" placeholder="dato *">
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
				<h3 itemprop="name" class="footer-heading">Peter Gift</h3>
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
				<p>M. P. Bruunsgade 28 </p>
				<p>8000 Århus C</p>
				<ul class="footer-social-list icon-list-inline">
					<li class="navigation-item-social"><a class="social social-twitter" href="#"><span class="sr">Twitter</span></a></li>
					<li class="navigation-item-social"><a class="social social-facebook" href="https://www.facebook.com/Peter-Gift-452296481516035/?fref=ts"><span class="sr">Facebook</span></a></li>
				</ul>
			</div>
		</div>
	</section>
</footer>

<!--MOUSEFLOW--> 
<script type="text/javascript">
        var _mfq = _mfq || [];
        (function () {
        var mf = document.createElement("script"); mf.type = "text/javascript"; mf.async = true;
        mf.src = "//cdn.mouseflow.com/projects/13019fdb-92c9-4071-a43c-b58c554a75c2.js";
        document.getElementsByTagName("head")[0].appendChild(mf);
      })();
    </script> 

<!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]--> 
<!--[if gt IE 8]><!--><script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script><!--<![endif]--> 
 
<script type="text/javascript" src="js/ticker00.js"></script> 
<script type="text/javascript" src="js/jquery.nav.js"></script> 

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
	//onePageslider 
		$('#navtext').onePageNav();
		});	
</script>

</body>
</html>