<?php
    // LINK BACK TO MAIN MENU
    echo "<a href='/mysqllearning'>Back To Main Menu</a><hr>";

    // attempt to connect to local mysql server
    $link = mysqli_connect("localhost","root","","demo");

    // check connection status
    if ($link === false)
    {
        die("ERROR: count not connect to db. " . mysqli_connect_error());
    }

    //attempt select quyery exectuin
    // $sql = "SELECT * FROM persons WHERE first_name LIKE 'G%'";
    $sql = "SELECT * FROM persons ORDER BY id "; //this orders the data alphabetically
    if ($result = mysqli_query($link,$sql))
    {

        if (mysqli_num_rows($result) > 0)
        {
            echo "<table>"; 
                echo"<tr>";
                    echo "<th>id</th>";
                    echo "<th>first_name</th>";
                    echo "<th>last_name</th>";
                    echo "<th>email</th>";
                echo "</tr>";            
            while ($row = mysqli_fetch_array($result))
            {
                echo"<tr>";
                    echo "<td>" . $row['id'] . "<hr></td>";
                    echo "<td>" . $row['first_name'] . "<hr></td>";
                    echo "<td>" . $row['last_name'] . "<hr></td>";
                    echo "<td>" . $row['email'] . "<hr></td>";
                echo "</tr>";

            }
            echo "</table>";
            // free result set from memory
            mysqli_free_result($result); // helps with performance!
        }
        else
        {
                echo "Cant find records";
        }
    }
    else
    {
        echo "ERROR: could not execute $sql. " . mysqli_error($link);
    }

    // close connection
    mysqli_close($link);
?>