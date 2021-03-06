<!DOCTYPE html>
<!-- Mikrodatamarkering tilføjet af Google Markeringsværktøj til strukturerede data. -->
<html lang="da">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Peter Gift</title>
<meta name="robots" content="noindex, nofollow">
<meta name="description" content="Hos Peter Gift holder vi traditionerne i hævd, og i 2006 kunne vi fejre 100 års jubilæum. Kom ind og nyd en pause i hverdagen.">
<meta name="keywords" content="Bar, dansk traditionel mad, frokost buffet, jule buffet, bodega, aarhus, århus, gammel">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta itemprop="url" content="http://www.avejle.dk/petergift">
<link rel="shortcut icon" href="img/h_favicon.png">
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


<!-- NAVIGATION STAR -->
<div id="banner" class="header-inner container clear">
	<input type="checkbox" id="navigation-toggle-checkbox" name="navigation-toggle-checkbox" class="navigation-toggle-checkbox sr">
	<label for="navigation-toggle-checkbox" class="navigation-toggle-label" onclick> <span class="navigation-toggle-label-inner"> <span class="sr">Navigation</span> </span> </label>
	<nav class="navigation">
		<ul id="navtext" class="navigation-menu">
			<li class="navigation-item current"><a href="#about">Info</a></li>
			<li class="navigation-item"><a href="#news">Nyheder</a></li>
			<li class="navigation-item"><a href="#menu">Menu</a></li>
			<li class="navigation-item"><a href="#reviews">Udtalelser</a></li>
			<li class="navigation-item"><a href="#reservations">Book bord</a></li>
		</ul>
		<ul class="navigation-social footer-social-list icon-list-inline">
			<li class="navigation-item-social">
				<a class="social social-facebook" href="https://www.facebook.com/Peter-Gift-452296481516035/?fref=ts" target="_blank">			
					<span class="sr">
						Facebook
					</span>
				</a>
			</li>
		</ul>
	</nav>
</div>
<!-- NAVIGATION SLUT --> 
<!-- HEADER START -->
<div  class="banner">
	<div class="banner-inner container"><img id="pg_hero_logo" src="img/logo_hero_pg.png" alt="Peter Gifts Logo">
		<div class="banner-buttons"> <a href="#reservations" class="button button-primary">Book bord</a> <a href="#menu" class="button button-primary">Se menuen</a> </div>
	</div>
</div>

<!-- ÅBNINGSTIDER --> 
<span itemscope itemtype="http://schema.org/LocalBusiness"></span>
<section id="about" class="content-block about-block">
	<div class="about-block-inner container">
		<div class="clear text-left">
			<div id="infotext"  class="about-block-content col-6-desktop"  itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
				<table class="h2">
					<tr>
						<td itemprop="streetAddress">M.P. Bruunsgade 28,</td>
					</tr>
					<tr>
						<td><span itemprop="postalCode">8000</span> <span itemprop="addressLocality"> Århus C</span></td>
					</tr>
				</table>
				<table>
					<tbody>
						<tr>
							<th colspan="2" class="h5">Åbningstider</th>
						</tr>
						<tr itemprop="openingHoursSpecification" itemscope itemtype="http://schema.org/OpeningHoursSpecification">
							<td itemprop="dayOfWeek" itemscope itemtype="http://schema.org/DayOfWeek"><p itemprop="name">Mandag - lørdag:</p></td>
							<td><p><span itemprop="opens">11:00 - </span> <span itemprop="closes">01:00</span></p></td>
						</tr>
						<tr itemprop="openingHoursSpecification" itemscope itemtype="http://schema.org/OpeningHoursSpecification">
							<td itemprop="dayOfWeek" itemscope itemtype="http://schema.org/DayOfWeek"><p itemprop="name">Søndag og helligdage:</p></td>
							<td><p><span itemprop="opens">14:00 - </span> <span itemprop="closes">22:00</span></p></td>
						</tr>
						<tr>
							<td colspan="2"></td>
						</tr>
						<tr>
							<th colspan="2" class="h5">Køkkenet</th>
						</tr>
						<tr>
							<td><p>Tirsdag-fredag:</p></td>
							<td><p>11:00 - 15:00</p></td>
						</tr>
						<tr>
							<td><p>Lørdagsbuffet: </p></td>
							<td><p>12:00 - 15:00</p></td>
						</tr>
					</tbody>
				</table>
				<div id="text-petergift">
					<p>Vi holder traditionerne i hævd, og i 2006 kunne vi fejre 100 års jubilæum. 
						Vi har en hyggelig gårdhave, der er åbent fra marts til oktober. Når gårdhaven er lukket, tænder vi op i
						pejsen. Vi tilbyder 45 forskellige spændende ølmærker fra hele verden - så kom ind og prøv noget nyt eller nyd et 			
						glas velskænket ROYAL!</p>
				</div>
			</div>
			<div class="about-block-img col-6-desktop none-tablet block-desktop"><img src="img/petergift_logo.png" alt="Peter Gift logo" itemprop="image"></div>
		</div>
	</div>
</section>
<!-- ÅBNINGSTIDER SLUT -->
<!-- NYHEDER -->
<section id="news" class="content-block ingredients-block">
	<div class="ingredients-block-inner container clear">
		<div class="feature-box text-center col-12 col-12-desktop right">
			<h2 class="h2-secondary">Nyheder</h2>
			<div class="feature-box-content">
				<h6> <!-- her trækker vi data fra en html fil ind på siden -->
					<?php include "admin/includes/nyheder/nyhedstitel.html"; ?>
				</h6>
				<p>
					<?php include "admin/includes/nyheder/nyhedstekst.html"; ?>
				</p>
			</div>
		</div>
	</div>
</section>
<!-- MENUKORT, trukket ind med include -->
<?php include "admin/includes/samletmenu.php"; ?>

<!-- VORES GÆSTER... //GUEST REVIEWS -->

<section id="reviews" class="content-block reviews-block">
	<div class="reviews-block-inner container">
		<div id="reviewsbox" class="feature-box text-center col-12-tablet col-8-desktop center-element">
			<h2 class="h2-secondary">Vores gæster siger</h2>
			<blockquote>
				<ul id="fade" itemprop="review" itemscope itemtype="http://schema.org/Review">
					<li>
						<p itemprop="reviewBody">"Nu har jeg kommet her gennem 5 værters tid, så må man da være en rigtig stamkunde! Det er ihvertfald sådan jeg vil betegne mig selv. Èn gang på Peter Gift og jeg var solgt .."</p>
						<span itemprop="author" itemscope itemtype="http://schema.org/Person"><cite itemprop="name">Kjeld, 67</cite></span></li>
					<li>
						<p itemprop="reviewBody">"Det eneste sted i Århus, hvor du kan få en rigtig velskænket øl ... Kvaliteten er altid i top når man besøger Peter Gift - Prøv det selv!"</p>
						<span itemprop="author" itemscope itemtype="http://schema.org/Person"><cite itemprop="name">Niklas, 25</cite></span> </li>
					<li>
						<p itemprop="reviewBody">"Man føler sig altid velkommen på Peter Gift, det er som én stor familie når man besøger det hyggelige værtshus i Bruunsgade ..."</p>
						<span itemprop="author" itemscope itemtype="http://schema.org/Person"><cite itemprop="name">Gitte, 43</cite></span> </li>
					<li>
						<p itemprop="reviewBody">"Peter Gift er ikke bare en café, her er der mere hyggeligt. Efter min personlige mening, er det det bedste værtshus i byen - Hvilket AOA jo har givet mig ret i gennem 7 år ..."</p>
						<span itemprop="author" itemscope itemtype="http://schema.org/Person"><cite itemprop="name">Sofie, 23</cite></span> </li>
					<li>
						<p itemprop="reviewBody">"Jeg tænker altid på næste gang jeg skal ned på Peter Gift, det er simpelthen bare så hyggeligt og gårdhaven er lige mig, om sommeren er der intet bedre!"</p>
						<span itemprop="author" itemscope itemtype="http://schema.org/Person"><cite itemprop="name">Lotte, 35</cite></span></li>
				</ul>
			</blockquote>
		</div>
	</div>
</section>

<!-- RESERVATIONER -->
<section id="reservations" class="content-block reservations-block">
	<div class="reservations-block-inner container">
		<div class="clear"> <img class="madbillede" src="img/mad_img.jpg" alt="Mad på Peter Gift">
			<div class="reservation-block-form col-5-tablet">
				<div class=".text-left">
					<div id="text-reservations">
						<h5>BORDRESERVATION</h5>
						<p>I tidsrummet kl. 12:00 - 15.00 er reservationer forbeholdt spisende gæster.</p>
						<p>Du modtager straks efter bestillingen en bekræftelse på e-mail, hvis der er tilknyttet en
							e-mail.</p>
						<p>Selskaber på mere end 6 personer kan ikke booke bord online.</p>
						<h5>KONTAKT OS</h5>
						<p>Venligst kontakt os på e-mail <span itemprop="email">info@petergift.dk</span> eller på telefon <span itemprop="telephone">86 12 01 63</span>.</p>
						<p>Ved telefonisk henvendelse træffes vi bedst imellem kl. 11.00 - 12.00 eller kl. 15.30 -ial 17.30.</p>
					</div>
				</div>
			</div>
			<div class="reservation-block-form col-7-tablet">
				<form class="reservations-form">
					<fieldset>
						<legend class="sr">Contact Us</legend>
						<div class="clear">
							<h2>RESERVATION</h2>
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
								<input name="date-of-booking" class="field" id="date" type="date">
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
<!-- RESERVATIONER SLUT -->
<!-- FOOTER -->
<footer class="footer">
	<section class="footer-inner container">
		<div class="clear">
			<table class="footer-column col-4-desktop text-center">
				<tr>
					<td itemprop="name" class="footer-heading h3">Peter Gift</td>
				</tr>
				<tr>
					<td>Kig ind</td>
				</tr>
				<tr>
					<td>- Her er der plads til alle</td>
				</tr>
			</table>
			<table class="footer-column col-4-desktop text-center">
				<tr>
					<td colspan="2" itemprop="name" class="footer-heading h3">Åbningstider</td>
				</tr>
				<tr>
					<td>Dagligt: 11:00 - 01:00</td>
				</tr>
				<tr>
					<td>Søndag og helligdage: 14:00 - 22:00</td>
				</tr>
			</table>
			<table class="footer-column col-4-desktop text-center">
				<tr>
					<td itemprop="name" class="footer-heading h3">Her er vi</td>
				</tr>
				<tr>
					<td>M. P. Bruunsgade 28,</td>
				</tr>
				<tr>
					<td>8000 Århus C</td>
				</tr>
			</table>
			<ul class="footer-social-list icon-list-inline">
				<li class="navigation-item-social"><a class="social social-facebook" href="https://www.facebook.com/Peter-Gift-452296481516035/?fref=ts"><span class="sr">Facebook</span></a></li>
			</ul>
		</div>
		</div>
	</section>
</footer>

<!-- MOUSEFLOW --> 
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

<!-- funktionen der skifter udtalelser i "Vores gæster siger" -->
<script type="text/javascript">
	$(document).ready(function(){
		
		$('#fade').list_ticker({
			speed:10000,
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