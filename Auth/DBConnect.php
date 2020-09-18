<?php

$localhost  = 'localhost';
$user       = 'root';
$password   = '';
$db         ='phpwebsite';

$db_connect = mysqli_connect($localhost, $user, $password,$db);
if (mysqli_connect_error()){
    echo mysqli_connect_error();
    die();
}
