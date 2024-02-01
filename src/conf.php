<?php

$host = 'mysql';
$user = 'yoshan';
$password = 'root';
$db = 'shop';
$conn = mysqli_connect($host,$user,$password,$db);

if (!$conn){
    echo "connection error --> ".mysqli_connect_error();
}

?>




