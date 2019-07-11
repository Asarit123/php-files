
<?php
$a=0;
$b=1;
$sum=0;
for($i=0;$i<10;$i++)
{
	if($i==9){
		  	echo $a;
	}
	else{
			echo $a." , ";
	}
	$sum=$a+$b;
	$a=$b;
	$b=$sum;
}
    
?>

