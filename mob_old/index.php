<?php 

include("Mobile_Detect.php");
$detect = new Mobile_Detect();

if ($detect->isMobile()) {
}else{
	die;
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport" />
<link href="css/style.css" rel="stylesheet" media="screen" type="text/css" />
<script src="javascript/functions.js" type="text/javascript"></script>
<title>Cibap roosters</title>
<meta content="cibap, zwolle, rooster, school, iphone, ipad, ipod, ipod touch, touch, android, samumsung, galaxy, s3" name="keywords" />
<meta content="Het cibap rooster app voor je iPhone of iPod touch" name="description" />
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-27561319-4']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>
<div id="topbar">
</div>
<div id="content">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-2406264984624429";
/* Rooster app */
google_ad_slot = "2136103163";
google_ad_width = 320;
google_ad_height = 50;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script><br />
<span class="graytitle">Rooster</span>
	<ul class="pageitem">
		<li class="textbox"><span class="header">Bekijk je rooster</span><p>
		Selecteer eerst hierzo je klas!</p>
        <br />
        <form name="input" action="day.php" method="get">
        <li class="select">
        <select name="soort" id="klas">
        <?php
        $result = file_get_contents('http://www.cibap.nl/beheer/modules/roosters/get_elementen.php?soort=klas&week=37&jaar=2012&current=');
		echo $result;
		?>
        </select><span class="arrow"></span> </li>
        <li class="button">
        <input type="submit" value="Ga verder" />
        </li>
        </form>
		</li>
        
        <br />
</div>
<br />
<br />
<span class="graytitle">Nieuws</span>
	<ul class="pageitem">
		<li class="textbox"><span class="header">Nog niet af.</span></li>
        <p><strong>Dit is zeer belangrijk,</strong> ik vind het hardstikkeleuk dat je mijn rooster App gebruikt!</p>
        <p>Hoewel deze app even betrouwbaar is als de website kan het zijn dat sommige dingen niet correct werken. De app is nu in een publieke beta versie en na verluit zal er binnenkort een private beta voor versie 2.0 komen.</p>
        <li class="textbox"><span class="header">PlayStore/AppStore?</span></li>
        <p>Dit is niet een "echte app" daarom staat hij niet in de PlayStore of de AppStore. Als je op een Apple product zit kun je op het vierkantje met het pijltje klikken en dan op "Zet in begin scherm" zo word het toch een soort van app.</p>
        <p>Ik ben vanplan om voor V2.0 er een PlayStore app bij te maken.</p>
        <li class="textbox"><span class="header">Disclaimer</span></li>
        <p>Er vallen geen rechten te ontlenen bij het gebruik van deze website</p>
        <p>Rooster's zijn eigendom van Cibap Zwolle</p>
        <p>Gebruik van deze website geschied op eigen risico<p>
        <p>Als er fouten zijn geconstateerd kun je dit <a href="report.php">hier zo</a> doorgeven </p>
      </p>
      </ul>
</div>
<?php include 'php/footer.php'; ?>