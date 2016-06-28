<?php
echo <<<Here

Here;
if(!isset($_POST['submit']))
	exit();

//When it is not the first time,
//input the two numbers. If either is empty,
//display error message.
$num1 = $_POST['num1'];
if(empty($num1)){
	die("Error: Enter both numbers");
}
$num2 = $_POST['num2'];
if(empty($num2)){
	die("Error: Enter both numbers");
}

//input operation,
//depending on its value, find result
$op = $_POST['op'];
$res = 0;
switch($op){
	case 'add':
		$res = $num1 + $num2;
		$out = "The result of adding " . $num1 . " and " . $num2 . " is " . $res . "\n";
		break;
	case 'sub':
			$res = $num1 - $num2;
			$out = "The result of subtracting " . $num1 . " and " . $num2 . " is " . $res . "\n";
			break;
	case 'mult':
			$res = $num1 * $num2;
			$out = "The result of multiplying " . $num1 . " and " . $num2 . " is " . $res . "\n";
			break;
	case 'div':
			$res = $num1 / $num2;
			$out = "The result of dividing " . $num1 . " and " . $num2 . " is " . $res . "\n";
			break;
}
//display output
echo $out;
?>




