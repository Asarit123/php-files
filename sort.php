<!DOCTYPE html>
<html>
<body>
<?php
$colors = array("Red", "Green", "White");
sort($colors);
$clength = count($colors);
for($x = 0; $x < $clength; $x++) {
    echo $colors[$x];
    echo "<br>";
} echo"<br>";
$name=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
asort($name);

foreach($name as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
     
} echo "<br>";
$name=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
ksort($name);

foreach($name as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
      
}echo "<br>";
$name=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
arsort($name);

foreach($name as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
     
} echo "<br>";
$name=array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
krsort($name);

foreach($name as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
      
}echo "<br>";
?>
</body>
</html>