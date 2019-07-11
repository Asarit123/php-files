<?php
//uppercase and lowecase
echo strtoupper("Hello it's me sarita sharma!")."<br>";
echo strtolower("HELLO EVERYONE IT'S ME sarita sharma!!!");
echo"<br>";
//find a word in a string and replace it
echo str_replace("everyone", "Sarita","hey everyone!" );
echo "<br>";

//find a position o a word in a string
echo strpos("hello everyone", "everyone")."<br/>";
echo "<br>";

//find last letters of the string
echo substr("Hello world",-4)."<br>";
echo "<br>";
//to display first 100 characters of a paragraph

$string1="hello its me sarita from butwal devinagar. I have passed my slc from tilottama english higher secondary school.cdfgg sggdhjsjjs sgdffd gdhjsjkks gdhjdjjd ghdhjdjhy gdhdjjdjd dhyjdjdjdjd hdjdjjd hdhhdhd hdhhdhhd hdhdhhd cbbcvcvv bcnxnjj gdgbsnj hgbnbxb bcbbc ncnn cbh cbh";
echo substr($string1,0,100);
echo"<br>";
//Extract “a best instruction ” from of below string.Alpha BetaCollege has a best instruction for BscCSIT.
 $x="alpha beta college has a best instruction for bsc csit.";
$newarray=explode(" ",$x);
echo $newarray[4]." ".$newarray[5]." ".$newarray[6];
?>