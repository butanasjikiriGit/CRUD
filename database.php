<?php

    $localhost = "localhost";
    $username = "root";
    $password = "";
    $database = "crud_db";

    $connection = new mysqli($localhost, $username, $password, $database);

    if (!$connection){
        die("Failed to establish a connection!".mysqli_error($connection));
    } else {
        echo "";
    }

?>