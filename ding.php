<?php
$cookie = explode(" ", $_COOKIE["login"]); //Cookie uitlezen en exploden op " "
$a = $cookie[0]; //$a zijn waarde geven
$b = $cookie[1]; //$b zijn waarde geven

$element = $_GET['element'];
$soort = $_GET['soort'];
$week = $_GET['week'];
$jaar = $_GET['jaar'];

//set the form post things in an array
  //some important data that may not be changed
	$post_data['ACT'] = '9';
	$post_data['RET'] = '/lol';
	$post_data['site_id'] = '1';
  //This data maybe changed to your belongings
    $post_data['username'] = '2001';
	$post_data['password'] = 'q688wy';
//traverse array and prepare data for posting (key1=value1)
foreach ( $post_data as $key => $value) {
    $post_items[] = $key . '=' . $value;
}
//create the final string to be posted using implode()
$post_string = implode ('&', $post_items);
//create cURL connection
$curl_connection =
  curl_init('http://static.cibap.nl/ee/beheer/modules/roosters/get_elementen.php?soort=klas&week=23&jaar=2015');
//set options
curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($curl_connection, CURLOPT_USERAGENT, 
  "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)");
curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, false);
curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl_connection, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($curl_connection, CURLOPT_COOKIEFILE, 'koekje.txt');
curl_setopt($curl_connection, CURLOPT_COOKIEJAR, 'koekje.txt');
//set data to be posted
curl_setopt($curl_connection, CURLOPT_POSTFIELDS, $post_string);
//perform our request
$result = curl_exec($curl_connection);

//close the connection
curl_close($curl_connection);

//close the connection
curl_close($curl_connection);

echo 'a= ' . $a . '';
echo $b;