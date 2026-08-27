<?php

function calc($num1, $num2)
{
    echo "This is Calculations<br><br>";
    echo "Multiplication : " . ($num1 * $num2) . "<br><br>";
    echo "Subtraction : " . ($num1 - $num2) . "<br><br>";
    echo "Modulus : " . ($num1 % $num2) . "<br><br>";
}

if(isset($_POST['submit'])){
    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];
    
    calc($num1, $num2);
}
