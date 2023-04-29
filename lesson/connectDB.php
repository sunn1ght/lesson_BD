<?
    require('env.php'); // экспорт данных с env.php
    
    $conn = mysqli_connect($host, $user, $pass, $db);

    if ($conn === false){
        die('pizdec' . mysqli_connect_error());
    } else {
        echo "good, connecting in $db";
    }