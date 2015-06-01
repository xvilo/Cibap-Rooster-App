<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport" />
<link href="css/style.css" rel="stylesheet" media="screen" type="text/css" />
<script src="javascript/functions.js" type="text/javascript"></script>
<title>Selecteer je dag!</title>
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
<div id="leftnav">
		<a href="index.php"><img alt="home" src="images/home.png" /></a>
        </div>
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
		Welkom, op dit moment bekijk je het rooster van klas <?php echo $_GET["soort"]; ?>!</p>
        <p>Selecteer hieronder je dag!</p>
		</li>
        
		<li class="menu">
        
        <a href="dagen/maandag.php?soort=<?php echo $_GET["soort"]; ?>">
	    <span class="name">
        Maandag
        </span>
        <span class="arrow"></span>
        </a>
        </li>
		 
		<li class="menu">
        
        <a href="dagen/dinsdag.php?soort=<?php echo $_GET["soort"]; ?>">
	    <span class="name">
        Dinsdag
        </span>
        <span class="arrow"></span>
        </a>
        </li>
		 
		<li class="menu">
        
        <a href="dagen/woensdag.php?soort=<?php echo $_GET["soort"]; ?>">
	    <span class="name">
        Woensdag
        </span>
        <span class="arrow"></span>
        </a>
        </li>
		 
		<li class="menu">
        
        <a href="dagen/donderdag.php?soort=<?php echo $_GET["soort"]; ?>">
	    <span class="name">
        Donderdag
        </span>
        <span class="arrow"></span>
        </a>
        </li>
		 
		<li class="menu">
        
        <a href="dagen/vrijdag.php?soort=<?php echo $_GET["soort"]; ?>">
	    <span class="name">
        Vrijdag
        </span>
        <span class="arrow"></span>
        </a>
        </li>
		 
		
       
	</ul>
</div>

<?php include 'php/footer.php'; ?>