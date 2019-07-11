<?php
$original = array( '1','2','3','4','5' );
echo 'Original array : '."\n";
foreach ($original as $x) 
{echo "$x ";}
$inserted = '$';
array_splice( $original, 3, 0, $inserted ); 
echo"<br>";
echo " \n After inserting '$' the array is : "."\n";
foreach ($original as $x) 
{
	echo " $x";
}
echo "\n";
echo"<br>";
//delete element from array

 $x = array(1, 2, 3, 4, 5);
 var_dump($x);
 unset($x[3]);
 $x = array_values($x);
 echo '';
 echo"<br>";
var_dump($x);
?>
