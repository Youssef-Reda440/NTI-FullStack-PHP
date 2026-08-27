<?php

function RouteBubble ($arr)
{
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++){
        for ($j = 0; $j < $n - $i - 1; $j++){
            if ($arr[$j] > $arr[$j + 1]){
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    echo "Array after apply Bubble sort algorithm : " . implode(" ", $arr);
}

if (isset($_POST['submit'])){
    $arr = $_POST['array'];
    RouteBubble($arr);
}
