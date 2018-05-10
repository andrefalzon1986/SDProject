<?php
    function connectToMySQL()
    {
        $connection = mysqli_connect("localhost", "root", "", "supermarket_db", "3306")
        or die('Error connecting to the database');
        return $connection;
    }
?>