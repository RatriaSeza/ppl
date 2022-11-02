<?php
    
    require_once("db_con.php");
    session_start();

    $nim = $_SESSION['username'];

    $query1 = "SELECT * FROM irs WHERE NIM='.$nim.'" ;
    $query_run = mysqli_query($con, $query1);
    $query2 = "SELECT * FROM khs WHERE nim_mhs='24060120000004' AND  SMT=7";

    $query_run1 = mysqli_query($con, $query2);

    


?>