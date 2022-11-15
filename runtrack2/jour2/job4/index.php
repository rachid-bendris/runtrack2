<?php

$var=1;

while($var<=100):
    
   
    if(!($var%5))
    {
        echo "<br>"."Buzz";
         }
    elseif(!($var%3))
    {
        echo "<br>"."Fizz";
    }
    elseif(!($var%3) and !($var%5))
    {
    echo "<br>"."FizzBuzz";
    }
    else{echo "<br>".$var;}
    $var++;
endwhile;
?>