<?php
    $username = 'root';
    $password = '';
    $host = '127.0.0.1';
    $database = 'hospedajes';

    $con = mysqli_connect($host, $username, $password, $database);

    //if($con) echo 'Connected';
    //else echo 'ERROR'.$con->connect_error;
?>