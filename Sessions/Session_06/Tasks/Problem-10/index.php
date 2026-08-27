<?php

function sorting ($arr)
{
    sort($arr);
    echo "Array after sorting : " . implode(" ", $arr);
}

if (isset($_POST['submit'])){
    $arr = $_POST['array'];
    sorting($arr);
}
