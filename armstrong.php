
<?php
$n=123;
  //153 
   $sum = 0;   
    $x = $n;   
    while($x != 0)   
    {   
        $remainder = $x % 10;   
        $sum = $sum + $remainder**3;   
        $x = $x / 10;   
    }   
      
   
    if ($n == $sum)
    {
     echo" armstrong number";    
    } 
    else{
        echo "not armstrong";
    }     

?>