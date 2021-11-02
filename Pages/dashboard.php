<?php
include 'C:\xampp\htdocs\FieldGroupProject\Functions\users.php';

$usersObj = new Users();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="stylesheet" href="gymDashboard.css" />
    <title> <?php echo $_SESSION['username'];
            echo "'s" ?> Dashboard</title>
</head>

<body>




    <?php if (isset($_SESSION['username'])) : ?>


        <p>
            Welcome
            <strong>
                <?php echo $_SESSION['username']; ?>
            </strong>
        </p>

        
        <p>
            <a href="log-in.php" style="color: red;">
                Click here to Logout
            </a>

        </p>
        <?php endif ?>
</html>