<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="">
	<input type="number" name="num">
	<input type="submit">
</form>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
	$n=$_POST["num"];
for($i=1;$i<=$n;$i++)
	
	{
	for($j=1;$j<=$i;$j++)

{
echo $j."";
}
echo"<br>";
}
echo"<br>";
for($i=1;$i<=4;$i++)
{
	$b=$i+4;
	$a=$i+8;
	echo $i." ".$b." ".$a;
	echo"<br>";
}
?>

</body>
</html>