<?php
    // LINK BACK TO MAIN MENU
    echo "<a href='/MySQL-Learning/'>Back To Main Menu</a><hr>";
    // attempting to connect to local mysql server
    $link = mysqli_connect("localhost", "root", "", "demo");

    // check status
    if ($link === false)
    {
        die("ERROR: couldnt connect to local database. " . mysqli_connect_error());
    }

    // attempt sql query execution
    $sql = "UPDATE persons SET email='gcd@hotmail.com' WHERE id=11";
    if (mysqli_query($link, $sql))
    {
        echo "Records updated successfully!";
    }
    else{
        echo "ERROR: couldnt execute $sql. " . mysqli_error($link);
    }

    // close connection
    mysqli_close($link);
?>