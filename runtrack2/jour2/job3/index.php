<?php
$var = 0;

while($var <= 100 ):
        
        if($var <= 20)
        {
        echo "<br>"."<i>".$var."</i>";
        }
        elseif($var >= 25 and $var <=50 and $var != 42)
        {
        echo "<br>"."<u>".$var."</u>";
        }
        elseif($var == 42)
        {
            echo "<br>"."La Plateforme_";
        }
        else{echo "<br>".$var;}
        $var++;
    endwhile;

?>
