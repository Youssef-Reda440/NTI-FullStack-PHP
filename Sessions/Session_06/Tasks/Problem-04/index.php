<?php

if(isset($_POST['submit'])){
    $films = $_POST['films'];
    $keyword  = $_POST['keyword'];
    $found = FALSE;

    foreach ($films as $film){
        if ($keyword == $film){
            $found = TRUE;
            echo "Yes" . "<br><br>";
            break;
        }
    }

    if (!$found)
        echo "No". "<br><br>";
}
