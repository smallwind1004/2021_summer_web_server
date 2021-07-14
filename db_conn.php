<?php
echo "Hello" . "<br/>";

$db_handle = pg_connect("host=localhost port=5432 dbname=smallwind user=smallwind password=pw2334pw");

if ($db_handle){
    echo 'Connection attempt succeeded.<br/>';
}else{
    echo 'Connection attempt failed.';
}