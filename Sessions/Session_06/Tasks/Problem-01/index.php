<?php

if(isset($_POST['submit'])){
    $age = $_POST['age'];
    
    if ($age > 18)
        echo "You are allowed to register on the website.";
    else
        echo "You are not allowed to register on the website.";
}