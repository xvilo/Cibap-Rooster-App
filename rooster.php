<?php
$soort = $_GET["soort"];

if ($soort == '') {
	echo 'pleas select your class';
	}else {
		
	}
include 'parse/hour_format.php;'
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="index,follow" name="robots" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link href="pics/homescreen.gif" rel="apple-touch-icon" />
<meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport" />
<link href="css/style.css" rel="stylesheet" media="screen" type="text/css" />
<script src="javascript/functions.js" type="text/javascript"></script>
<title>Je cibap rooster</title>
<meta content="iPod,iPhone,Webkit,iWebkit,Website,Create,mobile,Tutorial,free" name="Keywords" />
<meta content="This special iTunes music list emulates the feeling of the itunes app on the iphone." name="description" />
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-27561319-3']);
  _gaq.push(['_setDomainName', 'xvilo.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body class="musiclist">

<div id="topbar">
	<div id="leftnav">
		<a href="index.php"><img alt="home" src="images/home.png" /></a>
        <a href="day.php">dagen</a> 
        </div>
	<div id="rightnav">
		<?php echo $next_day; ?></div>
</div>
<div id="content">
<br />
<br />
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
	<ul>
    
		<li>
		<span class="number">1</span><span class="name"><?php print_r($rows[0][1][0]); ?></span><span class="time">(08:45)</span><span class="arrow"></span>
        </li>
            
		<li>
		<span class="number">2</span><span class="name"><?php print_r($rows[1][1][0]); ?> in <?php print_r($rows[1][1][1]); ?></span><span class="time">(09:15)</span><span class="arrow"></span>
        </li>
           
		<li>
		<span class="number">3</span><span class="name">Les 3</span><span class="time">(09:45)</span><span class="arrow"></span>
        </li>
           
		<li>
		<span class="number">4</span><span class="name">Les 4</span><span class="time">(10:30)</span><span class="arrow"></span>
        </li>
           
		<li>
		<span class="number">5</span><span class="name">Les 5</span><span class="time">(11:00)</span><span class="arrow"></span>
        </li>
           
		<li>
		<span class="number">6</span><span class="name">Les 6</span><span class="time">(11:30)</span><span class="arrow"></span>
        </li>
           
		<li>
		<span class="number">7</span><span class="name">Les 7</span><span class="time">(12:00)</span><span class="arrow"></span>
        </li>
           
		<li>
		<span class="number">8</span><span class="name">Les 8</span><span class="time">(12:30)</span><span class="arrow"></span>
        </li>
           </ul>
           <br />
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
           <ul>
		<li>
		<span class="number">9</span><span class="name">Les 9</span><span class="time">(13:00)</span><span class="arrow"></span>
        </li>
           
		<li>
		<span class="number">10</span><span class="name">Les 10</span><span class="time">(13:30)</span><span class="arrow"></span>
        </li>
           
		<li>
		<span class="number">11</span><span class="name">Les 11</span><span class="time">(14:00)</span><span class="arrow"></span>
        </li>
           
		<li>
		<span class="number">12</span><span class="name">Les 12</span><span class="time">(14:45)</span><span class="arrow"></span>
        </li>
           
		<li>
		<span class="number">13</span><span class="name">Les 13</span><span class="time">(15:15)</span><span class="arrow"></span>
        </li>
           
		<li>
		<span class="number">14</span><span class="name">Les 14</span><span class="time">(15:45)</span><span class="arrow"></span>
        </li>
           
		<li>
		<span class="number">15</span><span class="name">Les 15</span><span class="time">(16:15)</span><span class="arrow"></span>
        </li>
       
       		<li>
		<span class="number">16</span><span class="name">Les 16</span><span class="time">(16:45)</span><span class="arrow"></span>
        </li>
	</ul>
</div>

<?php include 'php/footer.php'; ?>
