<?php
if ($_GET["a"] == "") {
//echo 'Je moet wel een leerling nummer in vullen';
//die;
}elseif ($_GET["b"] == "") {
//echo 'vul je wachtoord in';
//die;
}

$a = $_GET["a"];
$b = $_GET["b"];

if ($_GET["action"] == "koekje") {
    setcookie("login", $a ." " .$b, time()+3600); //cookie setten. Cookie vervalt over een uur. Veranderd 3600 in de benodigde tijd.
   // echo "set koekje";
    header('Location: http://experiments.xvilo.com/rooster/index.php?action=koekje'); /* Stuur de browser naar www.site.nl */  
} else {
    echo "geen koekje";
}
?>