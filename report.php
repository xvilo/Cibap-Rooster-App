<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport" />
<link href="css/style.css" rel="stylesheet" media="screen" type="text/css" />
<script src="javascript/functions.js" type="text/javascript"></script>
<title>Report an ERROR!!!1</title>
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
<span class="graytitle">Report</span>
	<ul class="pageitem">
		<li class="textbox"><span class="header">Report a problem :(</span><p>
		Argh! Heb jij een probleem gevonden? Geef deze dan snel door aan mij zodat ik het kan fixen in mijn <strong>vrije</strong>tijd.</p>
        <br />
        <p>Ga me geen 1.000.000.000 mailtjes sturen over het zelfde probleem 1 keer is genoeg! <strong>(ook als het even duurt)</strong></p>
        <br />
        <form name="input" action="report_do.php" method="get">
        <ul class="pageitem">
			<li class="smallfield"><span class="name">Naam</span><input placeholder="Koen jan" name='naam' type="text" />
			</li>
			<li class="smallfield"><span class="name">E-mail</span><input placeholder="iemand@lolz.com" name="email" type="text" />
			</li>
            <li class="smallfield"><span class="name">Telefoon nummer</span><input placeholder="0527-123456" name="telefoon" type="tel" />
			</li>
		</ul>
        
        <br />
        
        		<span class="graytitle">jouw probleem</span>
		<ul class="pageitem">
			<li class="textbox"><span class="header">Wat is je probleem</span><textarea name="probleem" rows="4"></textarea></li>
		</ul>
        
        <li class="button">
		  <input type="submit" value="Submit" /></li>
		</ul>
        </form>
		</li>
        
        <br />
</div>

<?php include 'php/footer.php'; ?>