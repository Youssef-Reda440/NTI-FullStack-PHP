<?php

function counter ($films, $keyword)
{
    $count = 0;
    foreach ($films as $film){
        if ($film == $keyword)
            $count++;
    }
    echo "Counter : " . $count;
}

if (isset($_POST['submit'])){
    $films = $_POST['films'];
    $keyword = $_POST['keyword'];
    counter($films, $keyword);
}
