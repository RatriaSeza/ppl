<?php
$db_host = 'localhost:3306';
$db_database = 'PPL2';
$db_username = 'root';
$db_password = '';
$con = mysqli_connect($db_host, $db_username, $db_password, $db_database);

if (!$con){
    die ('Connection failed' . mysqli_connect_error());
}