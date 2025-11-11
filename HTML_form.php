<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form for database</title>
</head>

<body>
    <a href='/MySQL-Learning/'>Back To Main Menu</a><hr>
    <!-- Form for adding to demo database table persons -->
    <form action="insert.php" method="post">
        <p>
            <label for="firstName">First Name:</label>
            <input type="text" name="first_name" id="firstName">
        </p>
        <p>
            <label for="lastName">Last Name:</label>
            <input type="text" name="last_name" id="lastName">
        </p>
        <p>
            <label for="emailAddress">Email Address:</label>
            <input type="text" name="email" id="emailAddress">
        </p>
        <input type="submit" value="Add Records">
    </form>

</body>

</html>