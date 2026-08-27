<?php

function RouteRandomPass ($number)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $number; $i++) {
        $index = random_int(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    return $randomString; 
}

if (isset($_POST['submit'])){
    $number = $_POST['number'];
    $randomString = RouteRandomPass($number);
    echo "RandomString : " . $randomString;
}
