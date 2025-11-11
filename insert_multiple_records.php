<?php
    // LINK BACK TO MAIN MENU
    echo "<a href='/MySQL-Learning/'>Back To Main Menu</a><hr>";
    // Attempt to connect to local db
    $link = mysqli_connect("localhost","root","","demo");

    // check connect status
    if ($link === false)
    {
        die("ERROR: Could not connect to database 'demo'. " . mysqli_connect_error());
    }

    // sql query execution
    $sql = "INSERT INTO persons (first_name, last_name, email) VALUES
                    ('dwa', 'ht', 'j@mail.com'),
                    ('lui', 'sryj', 'h@mail.com'),
                    ('jy', 'iouio', 'g@gmail.com')";

    //attempting to execute sql
    if (mysqli_query($link,$sql))
    {
        echo "Records added successfully";
    }
    else
    {
        echo "ERROR: could not execute $sql. " . mysqli_error($link);
    }

    //close connection
    mysqli_close($link);

?>