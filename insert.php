<?php
    // LINK BACK TO MAIN MENU
    echo "<a href='/mysqllearning'>Back To Main Menu</a><hr>";
    
    // 
    //                      METHOD 1      
    // 

    // //attempt to connect to demo database
    // $link = mysqli_connect("localhost", "root", "", "demo");

    // //check connection status
    // if ($link === false)
    // {
    //     die("ERROR: could not connect to demo db " . mysqli_connect_error());
    // }

    // // Escape user inputs for security
    // $first_name = mysqli_real_escape_string($link, $_REQUEST['first_name']);
    // $last_name = mysqli_real_escape_string($link, $_REQUEST['last_name']);
    // $email = mysqli_real_escape_string($link, $_REQUEST['email']);

    // // attempt insert query execution
    // $sql = "INSERT INTO persons (first_name, last_name, email) VALUES ('$first_name', '$last_name', '$email')";
    // if (mysqli_query($link, $sql))
    // {
    //     echo "Records added succesfully.";
    // }
    // else
    // {
    //     echo "ERROR: Could not execute $sql. " . mysqli_error($link);
    // }

    // //close connection
    // mysqli_close($link);


    // 
    //                      METHOD 2      
    // 

    $link = mysqli_connect("localhost", "root", "","demo");

    if ($link === false)
    {
        die("ERROR: could not connect." . mysqli_connect_error());
    }

    // statement
    $sql = "INSERT INTO persons (first_name, last_name, email) VALUES (?,?,?)";

    if ($stmt = mysqli_prepare($link, $sql))
    {
        // bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "sss", $first_name, $last_name, $email);

        $first_name = $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $email = $_REQUEST['email'];

        // attempt to execute prpared statement
        if (mysqli_stmt_execute($stmt))
        {
            echo "Records executed successfully.";
        }
        else
        {
            echo "ERROR: could not execute query $sql." . mysqli_error($link);
        }
    }
    else
    {
        echo "ERROR: could not prepare query: $sql. " . mysqli_error($link); 
    }

    // close statement
    mysqli_stmt_close($stmt);

    // close db connecton
    mysqli_close($link);
?>