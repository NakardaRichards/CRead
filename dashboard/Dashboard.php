<?php include_once('../dashboard/header.php'); ?>
<?php include_once('../dashboard/dashMenu.php'); ?>
<?php include_once('../Functions/users.php');


$usersObj = new Users();



if (!isset($_SESSION['id']) || $_SESSION['id'] != true) {
    header("location: ../Pages/Homepage.html");
    exit;
}

?>

<?php include_once('menu.php'); ?>




<?php include_once('footer.php'); ?>