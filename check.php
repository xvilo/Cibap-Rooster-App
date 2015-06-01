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
        <form name="input" action="html_form_action.asp" method="get">
        <select name="soort" id="klas">
        <?php
        $result = file_get_contents('http://www.cibap.nl/beheer/modules/roosters/get_elementen.php?soort=klas&week=37&jaar=2012&current=');
		echo $result;
		?>
        </select>
        <input type="submit" value="Submit" />
        </form>
		</li>
        
        <br />
</div>
<div id="footer">
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
	<!-- Support iWebKit by sending us traffic; please keep this footer on your page, consider it a thank you for my work :-) -->
	<a class="noeffect" href="http://xvilo.net">iPhone app powered by xvilo</a></div>

</body>

</html>
