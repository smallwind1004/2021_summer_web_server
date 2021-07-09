<?php
// header("Access-Control-Allow-Origin: *");
// $appName = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$connStr = "host=localhost port=5432 dbname=smallwind user=smallwind";
$link = pg_connect($connStr);

if(!$link){
    # code...
    echo "Error: unable to connect to psql." . PHP_EOL;
    echo "Debugging errno:" . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging errno:" . mysqli_connect_error() . PHP_EOL;
    exit;
}

// $link -> set_charset("utf8");