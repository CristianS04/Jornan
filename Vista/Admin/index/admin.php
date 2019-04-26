<?php
    session_start();
    error_reporting(0);
    $varsesion=$_SESSION['usuario'];
    if ($varsesion== null || $varsesion=='') {
        echo 'Usted no tiene autorización';
        die();
    }   
    include 'header-admin.php';
?>