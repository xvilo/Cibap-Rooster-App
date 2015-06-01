<?php
if($_GET['set_cookie'] == "yes"){
	$name = 'disclaimer';
	$value = $_GET['cookie_value'];
	$expire = time()+3600*24*30;
	setcookie($name,$value,$expire);
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cookies - Disclaimer</title>
</head>

<body>
<p>Sorry dat ik je zo bruut lastig val - dit is verplicht van onze overheid - maar op deze site worden cookies gebruikt!</p>
<p>Ook wil ik je op een paar huishoudelijke regeltjes en opmerkingen wijzen</p>
<p>Het <strong>Niet lezen</strong> van deze regels is je eigen zaak, maar lees ze alstublieft eventjes!!! (ze worden maar 1x weergegeven)</p>
<p>&nbsp;</p>
<p>1. Er worden cookies gebruikt ter indentificatie van jou.</p>
<p>2. Hoewel deze rooster app net zo betrouw baar is als de website van school kan het zijn dat sommige dingen soms verkeerd worden weergegeven of niet werken.<br />Als dit het geval is geef dit dan <strong>zo spoedig mogelijk door</strong>!</p>
<p>3. Het gebruik van deze app geschied op eigen risico</p>
<p>4. Er kunnen geen rechten worden ontleent aan deze roosters </p>
<p>5. Rooster's zijn eigendom van CIBAP zwolle</p>
<p>6. Ik ben nergens aansprakelijk voor</p>
<p>&nbsp;</p>
<p>Wil je mee helpen aan deze (web)App, DAT KAN! (heel graag zelfs) stuur me dan even een mailtje naar <b>xvilo@me.com</b></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>Ik ga <b>akkoord</b> met de bovenstaande regels en ik vind het goed dat er cookies worden gebruikt.</p>
<a href="?set_cookie=yes&value=yes"><span>Ga verder</span></a> | <a href="?set_cookie=yes&value=no"><span>Ik wil <b>NIET VERDER</b></span></a> 
</body>
</html>