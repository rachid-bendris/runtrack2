<?php

$jour = true;

function bonjour($jour){
    if ($jour == true){
        echo "Bonjour";
    } elseif ($jour == false){
        echo "Bonsoir";
    }
    }

bonjour($jour);

?>