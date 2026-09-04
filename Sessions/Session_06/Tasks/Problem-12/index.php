<?php

if (isset($_POST['submit'])) {
    $price = $_POST['price'];
    $stocks = $_POST['stocks'];

    if (!is_numeric($price) || !is_numeric($stocks)) {
        echo "You must enter numbers" . "<br>";
        exit();
    }

    if ($price < 0 || $stocks < 0) {
        echo "Negative numbers not allowed" . "<br>";
        exit();
    }

    $total_cost = $price * $stocks;

    if ($total_cost < 1000)
        $discount = 0.1;
    else
        $discount = 0.15;

    $final_cost = $total_cost - $total_cost * $discount;

    echo "Total cost before discount : " . $total_cost . "<br>";
    echo "Total cost after  discount : " . $final_cost . "<br>";
}
