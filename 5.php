<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="5.php" method="POST"  >
1 number : <input type="text" name="t1">
2 number : <input type="text" name="t2">
<button value="Add" name="cal">Add</button><button value="Subtract" name="cal">Subtract</button>
<button value="Multiply" name="cal">Multiply</button><button value="Divide" name="cal">Divide</button>
</form>

<?php
$n1=$_POST['t1'];
$n2=$_POST["t2"]; 															
switch ($_POST['cal']) {
	case 'Add':
		$a=$n1+$n2;
		echo "addition of $n1 and $n2 is $a";
		break;
			case 'Subtract':
		$s=$n1-$n2;
		echo "subtraction of $n1 and $n2 is $s";
		break;
			case 'Multiply':
		$m=$n1*$n2;
		echo "multiplication of $n1 and $n2 is $m";
		break;
			case 'Divide':
		$d=$n1/$n2;
		echo "division of $n1 and $n2 is $d";
		break;
	default:
		echo".";
		break;
}
?>
</body>
</html>