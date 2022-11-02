<?php
    require_once("db_login.php");
    $id = $_GET['nim'];

    $query = 'UPDATE irs 
              SET status_irs = "BELUM DISETUJUI"
              WHERE NIM="'.$id.'"';
    $result = $db->query( $query );
    header('Location: srs7.php');
?>