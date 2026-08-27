<?php

$tests = array(1, "tariq", 1.5, true, 7, 's', false);

function checkBoolean ($arr)
{
    foreach ($arr as $data){
        if (is_bool($data))
            echo "No" . "<br>"; 
        else
            echo $data . " : Yes" . "<br>"; 
    }
}

checkBoolean($tests);
