<?php

function calcule($op1,$op2,$op3){
    $a = $op1;
    $b = $op3;
    $operation = $op2;
    if ($operation == "+"){
        return($a+$b);
    } elseif($operation == "-"){
        return ($a-$b);
    } elseif($operation == "*"){
        return($a*$b);
    } elseif($operation =="/"){
        return($a/$b);
    } elseif($operation =="%"){
        return($a%$b);
    }
    }


echo calcule(4, "*", 9);

?>