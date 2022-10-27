<?php
$db_host = 'localhost:3306';
$db_database = 'PPL2';
$db_username = 'root';
$db_password = '';

//connect to db
$db = new mysqli($db_host, $db_username, $db_password, $db_database);

//checkin connection

if ($db->connect_errno) {
    die('could not connect to database: ' . $db->connect_error);
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}