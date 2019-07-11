<?php
$temperature = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,
68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
$temp_array = explode(',',$temperature );
$total = 0;
$temp_array_length = count($temp_array);
foreach($temp_array as $temp)
{
 $total =$total + $temp;
}
 $avg_high_temp = $total/$temp_array_length;
 echo "Average Temperature is : ".$avg_high_temp.""; 
 echo"<br>";
sort($temp_array);
echo " List of five lowest temperatures :";
for ($i=0; $i< 5; $i++)
	if ($i==4)
	{
		echo $temp_array[$i];
	}
	else
{ 
echo $temp_array[$i]." , ";
}
echo"<br>";
echo "List of five highest temperatures :";
for ($i=($temp_array_length-5); $i< ($temp_array_length); $i++)
	if($i==($temp_array_length)-1){
		echo $temp_array[$i];
	}
	else
{
echo $temp_array[$i]." , ";
}
echo"<br>";
?>
