<?php

function calculateSum($numbers)
{
    $sum = 0;
    foreach($numbers as $number)
        $sum += $number;
    echo "Sum : " . $sum . "<br><br>";
}

if(isset($_POST['submit'])){
    $numbers = $_POST['numbers'];

    calculateSum($numbers);
}
