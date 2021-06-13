<!DOCTYPE html>
<html>
<body>
	<form  method="POST">
	<input type="text" name="n">Enter the string<br>
<input type="radio" name="n1" value="n2">Reversing the string<br>
<input type="radio" name="n1" value="n3">Finding the length of the string<br>
<input type="radio" name="n1" value="n4">Substring operations<br>
<input type="radio" name="n1" value="n5">Converting to uppercase<br>
<input type="radio" name="n1" value="n6">Converting to lowercase<br>
<input type="radio" name="n1" value="n7">Counting the number of words<br>
<input type="submit" >
</form>

<?php 
$n=$_POST['n'];
switch ($_POST['n1']) {
	case 'n2':
		echo "reverse the string $n is: ".strrev($n);
		break;
		case 'n3':
		echo "length of the string $n is: ".strlen($n);
		break;
			case 'n4':
		echo "substring the string $n is: ".substr($n, 5, 13);
		break;
			case 'n5':
		echo "uppercase of $n is: ".strtoupper($n);
		break;
			case 'n6':
		echo "lowercase of $n is: ".strtolower($n);
		break;
			case 'n7':
		echo "number of words in $n is: ".str_word_count($n);
		break;
}
?>
</body>
</html>