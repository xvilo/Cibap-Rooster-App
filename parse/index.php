<?php
if ($_GET['soort'] == ''){
   echo	'Something went wrong :(';
   die;
	}

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

