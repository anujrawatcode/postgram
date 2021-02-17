<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'cms';


$connection =  mysqli_connect($host, $user, $password, $database);

if ($connection)
    echo "Success Connection";
else
    echo "No connection";
