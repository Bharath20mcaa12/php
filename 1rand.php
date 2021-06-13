<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="POST"  >
enter starting of random number : <input type="text" name="t">
enter ending number : <input type="text" name="tt">
<button >submit</button>
</form>
<?php
$a=$_POST['t'];
$b=$_POST['tt'];
$r=rand($a,$b);
echo "Random number is:".$r;
echo '<br>';
echo "square root is:". sqrt($r);
?>
</body>
</html>
