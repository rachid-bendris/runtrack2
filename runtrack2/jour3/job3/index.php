<?php
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'I', 'E', 'I', 'O', 'U', 'Y'];
$str = "I'm sorry Dave I'm afraid I can't do that";


foreach (str_split($str) as  $voy )
{
    if (in_array($voy, $voyelles))
    {
        echo  "$voy";

    }
}
    ?>