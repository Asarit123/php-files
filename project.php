<?php 
 echo "Hello World!";
 echo "<br>";
 $x="abc";
 var_dump($x);

 $names=array("sarita",123,"12w");
 var_dump($names);
 echo "<br>";
 print_r($names);
 echo "<br>";
  print_r($names[0]); 
  echo "<br>";
  class car{
  	function car(){
  		$this->model="i-20";	
  	}
  }
  $sar=new car();
  echo $sar->model;
   echo "<br>";
   $x="sarita";
   $x=null;
   var_dump($x);
    echo "<br>";
    echo"<br>";

echo strlen ("hello");
echo"<br>";
echo"<br>";
echo strrev ("hello");
echo"<br>";
echo"<br>";
echo strpos("hello hey world","world");
echo"<br>";
echo"<br>";
echo str_word_count("hello hey world");
echo"<br>";
echo"<br>";
echo str_replace("world","sarita","hello world");
echo"<br>";
echo"<br>";
$str=date('Y-M-D');
print_r(explode("-",$str));
echo"<br>";
echo"<br>";
$a="Sarita Sharma";
$newarray=explode(" ",$a);
print_r($newarray[0]);
echo"<br>";
echo"<br>";
define("example","hello everyone!!");
function mytest(){
  echo example;
}
mytest();
echo"<br>";
echo"<br>";
$a=2;
echo(++$a);
echo"<br>";
echo"<br>";
$a=2;
echo($a++);
echo"<br>";
echo"<br>";
$a=2;
echo($a--);
echo"<br>";
echo"<br>";
$a=2;
echo(--$a);
echo"<br>";
echo"<br>"; 
$x=3;
$y=4;
echo($x+=$y);
echo"<br>";
echo"<br>";
 //echo $color = $color ?? "red";
 //echo"<br>";
//echo"<br>";
$x=5;
echo $x>2?"true":"false";
echo"<br>";
echo"<br>";
//find a word in a string and freplace it
echo str_replace("world","sarita","hello world");
echo"<br>";
//position of a word and replace it
echo strpos("hello hey world","world");
echo str_replace("world","sarita","hello hey world");
echo"<br>";
//find last 4 letter of the string
echo substr("hello World",7,4);
echo"<br>";
//switch statement
/*$favcolor="red";
switch($favcolor)
{
  case"red":
  echo"your fav color is red";
  break;
  case blue:
  echo"your fav color is blue";
}
case "default":
echo"invalid";*/
//while loop
echo"<br>";
$x=1;
while($x<=5){
 ++$x;
}
  echo"the number is:$x <br>";
  echo"<br>";
  //do while loop
  $x=6;
  do{
    echo"the number is:$x <br>";
    $x++;
  }
  while($x<=11);
  //for each
  $colors=array("red"," ","green"," ","blue"," ","yellow");
  foreach($colors as $value)
  {
    echo"$value ";
  }
  //function to return name
   echo"<br>";
  function writemsg($name){
    echo $name;
  }
  writemsg("ram");
  echo"<br>";
  //function to add name
  function writems($name){
    $msg="hello ".$name;
    return $msg;
  }
$mymsg=writems("sarita");
echo $mymsg;
echo"<br>";
//function
function sar(){
  echo"hello";
}
sar();
echo"<br>";
//function to sum subtract multiply and division of two numbers
function twonumber($a,$b=10){
$c=$a+$b;
echo "the sum is ".$c ;
echo"<br>";
$c=$a-$b;
echo "the difference is ".$c;
echo"<br>";
$c=$a*$b;
echo "the product is ".$c;
echo"<br>";
$c=$a/$b;
echo "the quotient is ".$c;
}
twonumber(1);

?>