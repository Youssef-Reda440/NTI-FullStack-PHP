<?php

function calc_max ($arr)
{
    $MX = $arr[0];
    for ($i = 1; $i < count($arr); $i++)
        if ($arr[$i] > $MX)
            $MX = $arr[$i]; 

    echo "MAX : " . $MX;
}

if (isset($_POST['submit'])){
    $arr = $_POST['array'];
    calc_max($arr);
}
