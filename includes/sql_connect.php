<?php
           
    $host="localhost";
    $port=8889;
    $socket="/Applications/MAMP/tmp/mysql/mysql.sock";
    $user="root";
    $password="root";
    $dbname="db";

    $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
        or die ('Could not connect to the database server' . mysqli_connect_error());

    //$con->close();

?>
