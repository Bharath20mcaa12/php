<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form method="POST"  >
Enter number : <input type="text" name="n1">
<button type="submit">Check</button>
</form>
<?php
if($_POST)
{
	$num=$_POST['n1'];
	$total=0;
	$x=$num;
	while($x!=0)
	{
		$rem=$x%10;
		$total=$total+$rem*$rem*$rem;
		$x=$x/10;
	}
	echo"given no is$num<br>";
	echo"sum is $total<br>";
	if($num==$total)
	{
		echo"given no is Armstrong";
	}
	else
	{
		echo"given num is not Palindrome";
	}

}
?>
</body>
</html>