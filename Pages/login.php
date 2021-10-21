<?php



session_id();

include 'C:\xampp\htdocs\FieldGroupProject\Functions\users.php';

$usersObj = new Users();


if (isset($_POST['submit'])) {
    $usersObj->loginData($_POST);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login Component</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">




</head>

<body>

    <form action="login.php" method="post">

       
        <label name="email">Email Address</label>
        <input type="email" name="email" placeholder="ex. jbrown@mail.com" required>

        <br>
        <label name="pwd">Password</label>
        <input type="password" name="pass" placeholder="Use numbers and letters" required>

        <br>
        <button name="submit" type="submit" value="Submit">
            Login
        </button>


        <div>
            <span>
                Don't have an account?
            </span>

            <a href="signup.php">
                Signup 
            </a>
        </div>
    </form>


</body>

</html>