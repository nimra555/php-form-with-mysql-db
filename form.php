<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <form action="backend.php" method="post">
        <h2>Sign Up</h2>
        <p>
            <label for="firstName" class="floatLabel">First Name</label>
            <input id="firstName" name="firstName" type="text">
        </p>
        <p>
            <label for="lastName" class="floatLabel">Last Name</label>
            <input id="lastName" name="lastName" type="text">
        </p>
        <p>
            <label for="Email" class="floatLabel">Email</label>
            <input id="Email" name="Email" type="text">
        </p>
        <p>
            <label for="password" class="floatLabel">Password</label>
            <input id="password" name="password" type="password">
            <span>Enter a password longer than 8 characters</span>
        </p>
        <p>
            <label for="confirm_password" class="floatLabel">Confirm Password</label>
            <input id="confirm_password" name="confirm_password" type="password">
            <span>Your passwords do not match</span>
        </p>
        <p>
            <input type="submit" name="submit" value="Create My Account" id="submit">
        </p>
        <p>
            <a href="display.php"><input type="button" name="button" value="Show Table" id="button"></a>
        </p>
    </form>
</body>

</html>

 