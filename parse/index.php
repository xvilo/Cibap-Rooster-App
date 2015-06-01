<?php
if ($_GET['soort'] == ''){
   echo	'Something went wrong :(';
   die;
	}
//set these if this page requested from the internet
//$element = $_GET['element'];
//$soort = $_GET['soort'];
//$week = '9';
//$jaar = $_GET['jaar'];

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
  curl_init('http://www.cibap.nl/beheer/modules/roosters/create_rooster.php?element='.$element.'&soort='.$soort.'&week='.$week.'&jaar='.$jaar.'');
//set options
curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
curl_setopt($curl_connection, CURLOPT_USERAGENT,
  "Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1)");
curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
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

