<?php 

//include("important_code.php");
$cookie = explode(" ", $_COOKIE["login"]); //Cookie uitlezen en exploden op " "
$a = $cookie[0]; //$a zijn waarde geven
$b = $cookie[1]; //$b zijn waarde geven

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="yes" name="apple-mobile-web-app-capable" />
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="minimum-scale=1.0, width=device-width, maximum-scale=0.6667, user-scalable=no" name="viewport" />

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
    <link rel="apple-touch-startup-image" href="ico/splash-screen-320x460.jpg" />
    <meta name="apple-mobile-web-app-capable" content="yes">

<link rel="stylesheet" href="add2home.css">
<script type="application/javascript" src="add2home.js"></script>
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
<span class="graytitle">&nbsp;</span>
	<ul class="pageitem">
    <li class="textbox"><span class="header">LET OP</span></li>
        <p>Wat je nu bekijkt is in september 2012 (een week na de release) verbannen door het Cibap bestuur... Daarom vraag ik je vriendelijk om dit als een geheim te houden! Vertel dit aan niemand verder, ik kan zien hoeveel mensen de roosters bekijken en als het er te veel worden zet ik hem uit!</p>
        <p>Veel plezier bij het gebruik, <Br />groeten, <Br /> Sem Schilder (OM306)
      </ul>
      <br />
<span class="graytitle">Rooster</span>
	<ul class="pageitem">
		<li class="textbox"><span class="header">Bekijk je rooster</span><p>

<?php 
if( isset( $_COOKIE['login'] ) )
{
?>Selecteer eerst hierzo je klas!</p>
        <br />
        <form name="input" action="day.php" method="get">
        <li class="select">
        <select name="soort" id="klas">
        <?php
        include 'ding.php';
		echo $result;
		?>
        </select><span class="arrow"></span> </li>
        <li class="button">
        <input type="submit" value="Ga verder" />
        </li>
        </form>
		</li> <?php
}
else
{
?>

<form method="post" action="login.php?action=koekje">
		<fieldset><span class="graytitle">Login</span>
		<ul class="pageitem">
			<li class="bigfield"><input placeholder="gebruikersnaam"  type="tel" name="a" /></li>
			<li class="bigfield">
			<input placeholder="wachtwoord" type="Password" name="b"/></li>
                        <li class="button">
			<input name="Submit input" type="submit" value="Login in" /></li>
		</ul>
                </fieldset>
</form>
<?php
}
?>



        



        <br />
</div>
<br />
<br />
</div>
<?php include 'php/footer.php'; ?>