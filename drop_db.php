<!-- delete a database... -->
<?php
    // LINK BACK TO MAIN MENU
    echo "<a href='/MySQL-Learning/'>Back To Main Menu</a><hr>";
    // connecting to db
    $link = mysqli_connect("localhost", "root","","demo");

    if ($link === false) { echo "FAILED TO CONNECT TO demo db.";}

    // attempting to execute sql query
    $sql = "DROP DATABASE demo";

    if (mysqli_query($link, $sql))
    {
        echo "Successfully deleted database!";
    }
    else
    {
        echo "ERROR: cant execute $sql. " . mysqli_error($link);
    }

    //close connection
    mysqli_close($link);
?>