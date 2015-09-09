<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Variables and Operators</title>
<?php
/*
	Hasan Karagulle
	Sept 9th, 2015
	Purpose: Investigate Variables and Operators
*/
	?>
    
</head>

<body>

	//create varaiables of all primitive data types
	<?php
	$fy =3.12e1; // double scientific notation
	$dy = 3.12e-2; 
	$hx =0xff; // hex
	$fx = 007; // octal
	$bx = 0b11; // binary
	$sx = "this is a great day"; // string
$ix=(INT)(9/5); // interger
$boolx=true; // boolean
$booly=false; //boolean
echo "<p> $fy </p>";
echo "<p> $ix </p>";
echo "<p> $hx </p>";
echo "<p> $fx </p>";
echo "<p> $bx </p>";
echo "<p> $boolx $booly </p>";
echo "<p> $dy </p>";
echo "<p> $sx </p>";
// Utilize the Ternary Operator
$hours = -14; // hours worked
$payrate= 15; // pay rate  $/hr
$paycheck=$hours<0?		0:
	($hours<20? $hours* $payrate:20* $payrate+ 2*($hours-20)* $payrate); 
echo " <p> paycheck = $$paycheck </p> ";


?>

</body>
</html><li></li>