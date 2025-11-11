<?php
    // LINK BACK TO MAIN MENU
    echo "<a href='/mysqllearning'>Back To Main Menu</a><hr>";
    // attempt to connect to local mysql server
    $link = mysqli_connect("localhost", "root", "", "demo");

    // checking connection status
    if ($link === false)
    {
        die("ERROR: could not connect" . mysqli_connect_error());
    }

    //creating query variable
    $sql = "CREATE TABLE persons(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        first_name VARCHAR(30) NOT NULL,
        last_name VARCHAR(30) NOT NULL,
        email VARCHAR(70) NOT NULL UNIQUE
    )";

    //attempting to create table and execute query
    if (mysqli_query($link, $sql))
    {
        echo "Table persons created successfully.";
    }
    else
    {
        echo "ERROR: Could not execute $sql. " . mysqli_error($link);
    }


    // close connection
    mysqli_close($link);

?>