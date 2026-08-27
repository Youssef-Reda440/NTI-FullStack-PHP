<?php

function find_common_values ($arr1, $arr2)
{
    $common = []; 
    for ($i = 0; $i < count($arr1); $i++){
        for ($j = 0; $j < count($arr2); $j++){
            if ($arr1[$i] == $arr2[$j]){
                $common[] = $arr1[$i];
                break;
            }
        }
    }

    echo "Common elements : " . implode(" - ", $common);
}

if (isset($_POST['submit'])){
    $arr1 = $_POST['array1'];
    $arr2 = $_POST['array2'];
    find_common_values($arr1, $arr2);
}
