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

    // attempting to delete query execution
    $sql = "DELETE FROM persons WHERE first_name='gabriel'";
    if(mysqli_query($link, $sql))
    {
        echo "Records were deleted successfully";
    }
    else
    {
        echo "ERROR: could not execute $sql" . mysqli_error($link);
    }


    // close connection
    mysqli_close($link);

    // redirect to select page
    header("Location: select.php");

?>