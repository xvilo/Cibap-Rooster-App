<?php
///include the table
include 'array.php';

///Let's do first period

//monday
if ($rows[0][1][0] == ''){
	$maandag_0 = 'geen les';
	}else{
	$maandag_0 = $rows[0][1][0] . ' in ' . $rows[0][1][1];
		}

//thuesday
if ($rows[0][2][0] == ''){
	$dinsdag_0 = 'geen les';
	}else{
	$dinsdag_0 = $rows[0][2][0] . ' in ' . $rows[0][2][1];
		}

//wednesday
if ($rows[0][3][0] == ''){
	$woensdag_0 = 'geen les';
	}else{
	$woensdag_0 = $rows[0][3][0]  . ' in ' . $rows[0][3][1];
		}

//thirsday
if ($rows[0][4][0] == ''){
	$donderdag_0 = 'geen les';
	}else{
	$donderdag_0 = $rows[0][4][0] . ' in ' . $rows[0][4][1];
		}

///friday
if ($rows[0][5][0] == ''){
	$vrijdag_0 = 'geen les';
	}else{
	$vrijdag_0 = $rows[0][5][0] . ' in ' . $rows[0][5][1];
		}


//Then do the second period
//monday

$nom = 1;

if ($rows[$nom][1][0] == ''){
	$maandag_1 = 'geen les';
	}else{
	$maandag_1 = $rows[$nom][1][0]  . ' in ' . $rows[$nom][1][1];
		}

//thuesday
if ($rows[$nom][2][0] == ''){
	$dinsdag_1 = 'geen les';
	}else{
	$dinsdag_1 = $rows[$nom][2][0]  . ' in ' . $rows[$nom][2][1];
		}

//wednesday
if ($rows[$nom][3][0] == ''){
	$woensdag_1 = 'geen les';
	}else{
	$woensdag_1 = $rows[$nom][3][0]  . ' in ' . $rows[$nom][3][1];
		}

//thirsday
if ($rows[$nom][4][0] == ''){
	$donderdag_1 = 'geen les';
	}else{
	$donderdag_1 = $rows[$nom][4][0]  . ' in ' . $rows[$nom][4][1];
		}

///friday
if ($rows[$nom][5][0] == ''){
	$vrijdag_1 = 'geen les';
	}else{
	$vrijdag_1 = $rows[$nom][5][0]  . ' in ' . $rows[$nom][5][1];
		}



//monday

$nom = 2;

if ($rows[$nom][1][0] == ''){
	$maandag_2 = 'geen les';
	}else{
	$maandag_2 = $rows[$nom][1][0]  . ' in ' . $rows[$nom][2][1];
		}

//thuesday
if ($rows[$nom][2][0] == ''){
	$dinsdag_2 = 'geen les';
	}else{
	$dinsdag_2 = $rows[$nom][2][0]  . ' in ' . $rows[$nom][2][1];
		}

//wednesday
if ($rows[$nom][3][0] == ''){
	$woensdag_2 = 'geen les';
	}else{
	$woensdag_2 = $rows[$nom][3][0]  . ' in ' . $rows[$nom][3][1];
		}

//thirsday
if ($rows[$nom][4][0] == ''){
	$donderdag_2 = 'geen les';
	}else{
	$donderdag_2 = $rows[$nom][4][0]  . ' in ' . $rows[$nom][4][1];
		}

///friday
if ($rows[$nom][5][0] == ''){
	$vrijdag_2 = 'geen les';
	}else{
	$vrijdag_2 = $rows[$nom][5][0]  . ' in ' . $rows[$nom][5][1];
		}




//Then do the second period
//monday

$nom = 3;

if ($rows[$nom][1][0] == ''){
	$maandag_3 = 'geen les';
	}else{
	$maandag_3 = $rows[$nom][1][0]  . ' in ' . $rows[$nom][1][1];
		}

//thuesday
if ($rows[$nom][2][0] == ''){
	$dinsdag_3 = 'geen les';
	}else{
	$dinsdag_3 = $rows[$nom][2][0]  . ' in ' . $rows[$nom][2][1];
		}

//wednesday
if ($rows[$nom][3][0] == ''){
	$woensdag_3 = 'geen les';
	}else{
	$woensdag_3 = $rows[$nom][3][0]  . ' in ' . $rows[$nom][3][1];
		}

//thirsday
if ($rows[$nom][4][0] == ''){
	$donderdag_3 = 'geen les';
	}else{
	$donderdag_3 = $rows[$nom][4][0]  . ' in ' . $rows[$nom][4][1];
		}

///friday
if ($rows[$nom][5][0] == ''){
	$vrijdag_3 = 'geen les';
	}else{
	$vrijdag_3 = $rows[$nom][5][0]  . ' in ' . $rows[$nom][5][1];
		}



//monday

$nom = 4;

if ($rows[$nom][1][0] == ''){
	$maandag_4 = 'geen les';
	}else{
	$maandag_4 = $rows[$nom][1][0]  . ' in ' . $rows[$nom][1][1];
		}

//thuesday
if ($rows[$nom][2][0] == ''){
	$dinsdag_4 = 'geen les';
	}else{
	$dinsdag_4 = $rows[$nom][2][0]  . ' in ' . $rows[$nom][2][1];
		}

//wednesday
if ($rows[$nom][3][0] == ''){
	$woensdag_4 = 'geen les';
	}else{
	$woensdag_4 = $rows[$nom][3][0]  . ' in ' . $rows[$nom][3][1];
		}

//thirsday
if ($rows[$nom][4][0] == ''){
	$donderdag_4 = 'geen les';
	}else{
	$donderdag_4 = $rows[$nom][4][0]  . ' in ' . $rows[$nom][4][1];
		}

///friday
if ($rows[$nom][5][0] == ''){
	$vrijdag_4 = 'geen les';
	}else{
	$vrijdag_4 = $rows[$nom][5][0]  . ' in ' . $rows[$nom][5][1];
		}



//monday

$nom = 5;

if ($rows[$nom][1][0] == ''){
	$maandag_5 = 'geen les';
	}else{
	$maandag_5 = $rows[$nom][1][0]  . ' in ' . $rows[$nom][1][1];
		}

//thuesday
if ($rows[$nom][2][0] == ''){
	$dinsdag_5 = 'geen les';
	}else{
	$dinsdag_5 = $rows[$nom][2][0]  . ' in ' . $rows[$nom][2][1];
		}

//wednesday
if ($rows[$nom][3][0] == ''){
	$woensdag_5 = 'geen les';
	}else{
	$woensdag_5 = $rows[$nom][3][0]  . ' in ' . $rows[$nom][3][1];
		}

//thirsday
if ($rows[$nom][4][0] == ''){
	$donderdag_5 = 'geen les';
	}else{
	$donderdag_5 = $rows[$nom][4][0]  . ' in ' . $rows[$nom][4][1];
		}

///friday
if ($rows[$nom][5][0] == ''){
	$vrijdag_5 = 'geen les';
	}else{
	$vrijdag_5 = $rows[$nom][5][0]  . ' in ' . $rows[$nom][5][1];
		}



//monday

$nom = 6;

if ($rows[$nom][1][0] == ''){
	$maandag_6 = 'geen les';
	}else{
	$maandag_6 = $rows[$nom][1][0]  . ' in ' . $rows[$nom][1][1];
		}

//thuesday
if ($rows[$nom][2][0] == ''){
	$dinsdag_6 = 'geen les';
	}else{
	$dinsdag_6 = $rows[$nom][2][0]  . ' in ' . $rows[$nom][2][1];
		}

//wednesday
if ($rows[$nom][3][0] == ''){
	$woensdag_6 = 'geen les';
	}else{
	$woensdag_6 = $rows[$nom][3][0]  . ' in ' . $rows[$nom][3][1];
		}

//thirsday
if ($rows[$nom][4][0] == ''){
	$donderdag_6 = 'geen les';
	}else{
	$donderdag_6 = $rows[$nom][4][0]  . ' in ' . $rows[$nom][4][1];
		}

///friday
if ($rows[$nom][5][0] == ''){
	$vrijdag_6 = 'geen les';
	}else{
	$vrijdag_6 = $rows[$nom][5][0]  . ' in ' . $rows[$nom][5][1];
		}


//monday

$nom = 7;

if ($rows[$nom][1][0] == ''){
	$maandag_7 = 'geen les';
	}else{
	$maandag_7 = $rows[$nom][1][0]  . ' in ' . $rows[$nom][1][1];
		}

//thuesday
if ($rows[$nom][2][0] == ''){
	$dinsdag_7 = 'geen les';
	}else{
	$dinsdag_7 = $rows[$nom][2][0]  . ' in ' . $rows[$nom][2][1];
		}

//wednesday
if ($rows[$nom][3][0] == ''){
	$woensdag_7 = 'geen les';
	}else{
	$woensdag_7 = $rows[$nom][3][0]  . ' in ' . $rows[$nom][3][1];
		}

//thirsday
if ($rows[$nom][4][0] == ''){
	$donderdag_7 = 'geen les';
	}else{
	$donderdag_7 = $rows[$nom][4][0]  . ' in ' . $rows[$nom][4][1];
		}

///friday
if ($rows[$nom][5][0] == ''){
	$vrijdag_7 = 'geen les';
	}else{
	$vrijdag_7 = $rows[$nom][5][0]  . ' in ' . $rows[$nom][5][1];
		}


//monday

$nom = 8;

//monday
if ($rows[$nom][1][0] == ''){
	$maandag_8 = 'geen les';
	}else{
	$maandag_8 = $rows[$nom][1][0]  . ' in ' . $rows[$nom][1][1];
		}

//thuesday
if ($rows[$nom][2][0] == ''){
	$dinsdag_8 = 'geen les';
	}else{
	$dinsdag_8 = $rows[$nom][2][0]  . ' in ' . $rows[$nom][2][1];
		}

//wednesday
if ($rows[$nom][3][0] == ''){
	$woensdag_8 = 'geen les';
	}else{
	$woensdag_8 = $rows[$nom][3][0]  . ' in ' . $rows[$nom][3][1];
		}

//thirsday
if ($rows[$nom][4][0] == ''){
	$donderdag_8 = 'geen les';
	}else{
	$donderdag_8 = $rows[$nom][4][0]  . ' in ' . $rows[$nom][4][1];
		}

///friday
if ($rows[$nom][5][0] == ''){
	$vrijdag_8 = 'geen les';
	}else{
	$vrijdag_8 = $rows[$nom][5][0]  . ' in ' . $rows[$nom][5][1];
		}


//monday

$nom = 9;

if ($rows[$nom][1][0] == ''){
	$maandag_9 = 'geen les';
	}else{
	$maandag_9 = $rows[$nom][1][0]  . ' in ' . $rows[$nom][1][1];
		}

//thuesday
if ($rows[$nom][2][0] == ''){
	$dinsdag_9 = 'geen les';
	}else{
	$dinsdag_9 = $rows[$nom][2][0]  . ' in ' . $rows[$nom][2][1];
		}

//wednesday
if ($rows[$nom][3][0] == ''){
	$woensdag_9 = 'geen les';
	}else{
	$woensdag_9 = $rows[$nom][3][0]  . ' in ' . $rows[$nom][3][1];
		}

//thirsday
if ($rows[$nom][4][0] == ''){
	$donderdag_9 = 'geen les';
	}else{
	$donderdag_9 = $rows[$nom][4][0]  . ' in ' . $rows[$nom][4][1];
		}

///friday
if ($rows[$nom][5][0] == ''){
	$vrijdag_9 = 'geen les';
	}else{
	$vrijdag_9 = $rows[$nom][5][0]  . ' in ' . $rows[$nom][5][1];
		}


//monday

$nom = 10;

if ($rows[$nom][1][0] == ''){
	$maandag_10 = 'geen les';
	}else{
	$maandag_10 = $rows[$nom][1][0]  . ' in ' . $rows[$nom][1][1];
		}

//thuesday
if ($rows[$nom][2][0] == ''){
	$dinsdag_10 = 'geen les';
	}else{
	$dinsdag_10 = $rows[$nom][2][0]  . ' in ' . $rows[$nom][2][1];
		}

//wednesday
if ($rows[$nom][3][0] == ''){
	$woensdag_10 = 'geen les';
	}else{
	$woensdag_10 = $rows[$nom][3][0]  . ' in ' . $rows[$nom][3][1];
		}

//thirsday
if ($rows[$nom][4][0] == ''){
	$donderdag_10 = 'geen les';
	}else{
	$donderdag_10 = $rows[$nom][4][0]  . ' in ' . $rows[$nom][4][1];
		}

///friday
if ($rows[$nom][5][0] == ''){
	$vrijdag_10 = 'geen les';
	}else{
	$vrijdag_10 = $rows[$nom][5][0]  . ' in ' . $rows[$nom][5][1];
		}



//monday

$nom = 11;

if ($rows[$nom][1][0] == ''){
	$maandag_11 = 'geen les';
	}else{
	$maandag_11 = $rows[$nom][1][0]  . ' in ' . $rows[$nom][1][1];
		}

//thuesday
if ($rows[$nom][2][0] == ''){
	$dinsdag_11 = 'geen les';
	}else{
	$dinsdag_11 = $rows[$nom][2][0]  . ' in ' . $rows[$nom][2][1];
		}

//wednesday
if ($rows[$nom][3][0] == ''){
	$woensdag_11 = 'geen les';
	}else{
	$woensdag_11 = $rows[$nom][3][0]  . ' in ' . $rows[$nom][3][1];
		}

//thirsday
if ($rows[$nom][4][0] == ''){
	$donderdag_11 = 'geen les';
	}else{
	$donderdag_11 = $rows[$nom][4][0]  . ' in ' . $rows[$nom][4][1];
		}

///friday
if ($rows[$nom][5][0] == ''){
	$vrijdag_11 = 'geen les';
	}else{
	$vrijdag_11 = $rows[$nom][5][0]  . ' in ' . $rows[$nom][5][1];
		}

//monday

$nom = 12;

if ($rows[$nom][1][0] == ''){
	$maandag_12 = 'geen les';
	}else{
	$maandag_12 = $rows[$nom][1][0]  . ' in ' . $rows[$nom][1][1];
		}

//thuesday
if ($rows[$nom][2][0] == ''){
	$dinsdag_12 = 'geen les';
	}else{
	$dinsdag_12 = $rows[$nom][2][0]  . ' in ' . $rows[$nom][2][1];
		}

//wednesday
if ($rows[$nom][3][0] == ''){
	$woensdag_12 = 'geen les';
	}else{
	$woensdag_12 = $rows[$nom][3][0]  . ' in ' . $rows[$nom][3][1];
		}

//thirsday
if ($rows[$nom][4][0] == ''){
	$donderdag_12 = 'geen les';
	}else{
	$donderdag_12 = $rows[$nom][4][0]  . ' in ' . $rows[$nom][4][1];
		}

///friday
if ($rows[$nom][5][0] == ''){
	$vrijdag_12 = 'geen les';
	}else{
	$vrijdag_12 = $rows[$nom][5][0]  . ' in ' . $rows[$nom][5][1];
		}


//monday

$nom = 13;

if ($rows[$nom][1][0] == ''){
	$maandag_13 = 'geen les';
	}else{
	$maandag_13 = $rows[$nom][1][0]  . ' in ' . $rows[$nom][1][1];
		}

//thuesday
if ($rows[$nom][2][0] == ''){
	$dinsdag_13 = 'geen les';
	}else{
	$dinsdag_13 = $rows[$nom][2][0]  . ' in ' . $rows[$nom][2][1];
		}

//wednesday
if ($rows[$nom][3][0] == ''){
	$woensdag_13 = 'geen les';
	}else{
	$woensdag_13 = $rows[$nom][3][0]  . ' in ' . $rows[$nom][3][1];
		}

//thirsday
if ($rows[$nom][4][0] == ''){
	$donderdag_13 = 'geen les';
	}else{
	$donderdag_13 = $rows[$nom][4][0]  . ' in ' . $rows[$nom][4][1];
		}

///friday
if ($rows[$nom][5][0] == ''){
	$vrijdag_13 = 'geen les';
	}else{
	$vrijdag_13 = $rows[$nom][5][0]  . ' in ' . $rows[$nom][5][1];
		}


//monday

$nom = 14;

if ($rows[$nom][1][0] == ''){
	$maandag_14 = 'geen les';
	}else{
	$maandag_14 = $rows[$nom][1][0]  . ' in ' . $rows[$nom][1][1];
		}

//thuesday
if ($rows[$nom][2][0] == ''){
	$dinsdag_14 = 'geen les';
	}else{
	$dinsdag_14 = $rows[$nom][2][0]  . ' in ' . $rows[$nom][2][1];
		}

//wednesday
if ($rows[$nom][3][0] == ''){
	$woensdag_14 = 'geen les';
	}else{
	$woensdag_14 = $rows[$nom][3][0]  . ' in ' . $rows[$nom][3][1];
		}

//thirsday
if ($rows[$nom][4][0] == ''){
	$donderdag_14 = 'geen les';
	}else{
	$donderdag_14 = $rows[$nom][4][0]  . ' in ' . $rows[$nom][4][1];
		}

///friday
if ($rows[$nom][5][0] == ''){
	$vrijdag_14 = 'geen les';
	}else{
	$vrijdag_14 = $rows[$nom][5][0]  . ' in ' . $rows[$nom][5][1];
		}


//monday

$nom = 15;

if ($rows[$nom][1][0] == ''){
	$maandag_15 = 'geen les';
	}else{
	$maandag_15 = $rows[$nom][1][0]  . ' in ' . $rows[$nom][1][1];
		}

//thuesday
if ($rows[$nom][2][0] == ''){
	$dinsdag_15 = 'geen les';
	}else{
	$dinsdag_15 = $rows[$nom][2][0]  . ' in ' . $rows[$nom][2][1];
		}

//wednesday
if ($rows[$nom][3][0] == ''){
	$woensdag_15 = 'geen les';
	}else{
	$woensdag_15 = $rows[$nom][3][0]  . ' in ' . $rows[$nom][3][1];
		}

//thirsday
if ($rows[$nom][4][0] == ''){
	$donderdag_15 = 'geen les';
	}else{
	$donderdag_15 = $rows[$nom][4][0]  . ' in ' . $rows[$nom][4][1];
		}

///friday
if ($rows[$nom][5][0] == ''){
	$vrijdag_15 = 'geen les';
	}else{
	$vrijdag_15 = $rows[$nom][5][0]  . ' in ' . $rows[$nom][5][1];
		}




?>



<!--
///Let's test the periodes
echo '<h1>first periode</h1><br>';
echo '' . $maandag_0 . '<br>';
echo '' . $dinsdag_0 . '<br>';
echo '' . $woensdag_0 . '<br>';
echo '' . $donderdag_0 . '<br>';
echo '' . $vrijdag_0 . '<br>';

///Let's test the periodes
echo '<h1>second periode</h1><br>';
echo '' . $maandag_1 . '<br>';
echo '' . $dinsdag_1 . '<br>';
echo '' . $woensdag_1 . '<br>';
echo '' . $donderdag_1 . '<br>';
echo '' . $vrijdag_1 . '<br>';

///Let's test the periodes
echo '<h1>3rd periode</h1><br>';
echo '' . $maandag_2 . '<br>';
echo '' . $dinsdag_2 . '<br>';
echo '' . $woensdag_2 . '<br>';
echo '' . $donderdag_2 . '<br>';
echo '' . $vrijdag_2 . '<br>';

///Let's test the periodes
echo '<h1>fourth periode</h1><br>';
echo '' . $maandag_3 . '<br>';
echo '' . $dinsdag_3 . '<br>';
echo '' . $woensdag_3 . '<br>';
echo '' . $donderdag_3 . '<br>';
echo '' . $vrijdag_3 . '<br>';

///Let's test the periodes
echo '<h1>5th periode</h1><br>';
echo '' . $maandag_4 . '<br>';
echo '' . $dinsdag_4 . '<br>';
echo '' . $woensdag_4 . '<br>';
echo '' . $donderdag_4 . '<br>';
echo '' . $vrijdag_4 . '<br>';

///Let's test the periodes
echo '<h1>6th periode</h1><br>';
echo '' . $maandag_5 . '<br>';
echo '' . $dinsdag_5 . '<br>';
echo '' . $woensdag_5 . '<br>';
echo '' . $donderdag_5 . '<br>';
echo '' . $vrijdag_5 . '<br>';

///Let's test the periodes
echo '<h1>7th periode</h1><br>';
echo '' . $maandag_6 . '<br>';
echo '' . $dinsdag_6 . '<br>';
echo '' . $woensdag_6 . '<br>';
echo '' . $donderdag_6 . '<br>';
echo '' . $vrijdag_6 . '<br>';

///Let's test the periodes
echo '<h1>8th periode</h1><br>';
echo '' . $maandag_7 . '<br>';
echo '' . $dinsdag_7 . '<br>';
echo '' . $woensdag_7 . '<br>';
echo '' . $donderdag_7 . '<br>';
echo '' . $vrijdag_7 . '<br>';

///Let's test the periodes
echo '<h1>9th periode</h1><br>';
echo '' . $maandag_8 . '<br>';
echo '' . $dinsdag_8 . '<br>';
echo '' . $woensdag_8 . '<br>';
echo '' . $donderdag_8 . '<br>';
echo '' . $vrijdag_8 . '<br>';

///Let's test the periodes
echo '<h1>10th periode</h1><br>';
echo '' . $maandag_9 . '<br>';
echo '' . $dinsdag_9 . '<br>';
echo '' . $woensdag_9 . '<br>';
echo '' . $donderdag_9 . '<br>';
echo '' . $vrijdag_9 . '<br>';

///Let's test the periodes
echo '<h1>11th periode</h1><br>';
echo '' . $maandag_10 . '<br>';
echo '' . $dinsdag_10 . '<br>';
echo '' . $woensdag_10 . '<br>';
echo '' . $donderdag_10 . '<br>';
echo '' . $vrijdag_10 . '<br>';

///Let's test the periodes
echo '<h1>12th periode</h1><br>';
echo '' . $maandag_11 . '<br>';
echo '' . $dinsdag_11 . '<br>';
echo '' . $woensdag_11 . '<br>';
echo '' . $donderdag_11 . '<br>';
echo '' . $vrijdag_11 . '<br>';

///Let's test the periodes
echo '<h1>13th periode</h1><br>';
echo '' . $maandag_12 . '<br>';
echo '' . $dinsdag_12 . '<br>';
echo '' . $woensdag_12 . '<br>';
echo '' . $donderdag_12 . '<br>';
echo '' . $vrijdag_12 . '<br>';

///Let's test the periodes
echo '<h1>14th periode</h1><br>';
echo '' . $maandag_13 . '<br>';
echo '' . $dinsdag_13 . '<br>';
echo '' . $woensdag_13 . '<br>';
echo '' . $donderdag_13 . '<br>';
echo '' . $vrijdag_13 . '<br>';

///Let's test the periodes
echo '<h1>15th periode</h1><br>';
echo '' . $maandag_14 . '<br>';
echo '' . $dinsdag_14 . '<br>';
echo '' . $woensdag_14 . '<br>';
echo '' . $donderdag_14 . '<br>';
echo '' . $vrijdag_14 . '<br>';

///Let's test the periodes
echo '<h1>16th periode</h1><br>';
echo '' . $maandag_15 . '<br>';
echo '' . $dinsdag_15 . '<br>';
echo '' . $woensdag_15 . '<br>';
echo '' . $donderdag_15 . '<br>';
//echo '' . $vrijdag_15 . '<br>';
?>
-->