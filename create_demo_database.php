<?php
    // LINK BACK TO MAIN MENU
    echo "<a href='/mysqllearning'>Back To Main Menu</a><hr>";
    // Attempt to connect to mysql local server no passwd
    $link = mysqli_connect("localhost", "root", "");

    //check
    if ($link === false)
    {
        die("Error: could not connect: " . mysqli_connect_error());
    }

    // attempt to create database query execution
    $sql = "CREATE DATABASE demo"; //this is the query
    if (mysqli_query($link, $sql))
    {
        echo "Database demo created successfully";
    }
    else
    {
        echo "ERROR: could not execute $sql. " .mysqli_error($link);
    }


    // close conn
    mysqli_close($link);
?>
