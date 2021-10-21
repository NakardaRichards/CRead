<?php



session_id();

include 'C:\xampp\htdocs\FieldGroupProject\Functions\users.php';

$usersObj = new Users();


if (isset($_POST['submit1'])) {
    $usersObj->signupData($_POST);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign-up Component</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">




</head>

<body>

    <form action="signup.php" method="post">

        <label name="fname">First Name</label>
        <input type="text" name="fname" placeholder="ex. John" required>

        <br>
        <label name="lname">Last Name</label>
        <input type="text" name="lname" placeholder="ex. Brown" required>

        <br>
        <label name="email">Email Address</label>
        <input type="email" name="email" placeholder="ex. jbrown@mail.com" required>

        <br>
        <label name="pwd">Password</label>
        <input type="password" name="pass" placeholder="Use numbers and letters" required>

        <br>
        <button name="submit1" type="submit" value="Submit">
            Sign Up
        </button>


        <div>
            <span>
                Already have an account?
            </span>

            <a href="login.php">
                Login
            </a>
        </div>
    </form>


</body>

</html>