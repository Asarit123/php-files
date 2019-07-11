<?php
//loop through index array
$names=array("Sarita","Aashma","Parmila");
$arrlength=count($names);
for($x=0;$x<$arrlength;$x++)
{
	echo $names[$x];
	echo"<br>";
}
// loop through associative array
$age=array("sarita"=>"20","rita"=>"40");
foreach($age as $x=>$x_value){
	echo"name=". $x. " , age=".$x_value;
	echo"<br>";
}
//associativearray

$age=array("Sarita"=>"20","Rita"=>"40");
foreach($age as $key=>$value){
echo "$key is $value years old.";
echo"<br>";
echo"<br>";
}
$color=array("white","green","red","blue","black");
echo"The memory of that scene for me is like a frame of film forever frozen
at that moment: the ".$color[2]."  carpet, the ".$color[1]." lawn, the ".$color[0]."   house, the leaden sky. The new president and his first lady. - Richard M. Nixon"; 
echo"<br>";
echo"<br>";
$details=array("Title"=>"The Cuckoos Calling","Author"=>"Robert Galbraith","Publisher"=>"Little Brown");
foreach($details as $key=>$value)
{
	echo"$key:  $value";
	echo"<br>";
}
echo"<br>";
echo"<br>";
$ab=array("sarita","saru","sa");

echo"<br>";
//globals
$x=4;
$y=5;
function multiply()
{
	$GLOBALS['z'] = $GLOBALS['x'] * $GLOBALS['y'];
	
}
multiply();
echo"The product is : ". $z ." ";
echo"<br>";
echo"<br>";
echo $_SERVER['PHP_SELF'];
echo"<br>";
echo $_SERVER['DOCUMENT_ROOT'];
echo"<br>";
echo $_SERVER['SERVER_NAME'];
echo"<br>";
echo $_SERVER['HTTP_HOST'];
echo"<br>";
echo $_SERVER['SCRIPT_NAME'];
echo"<br>";
?>
