<?php
     session_id();

     include '../functions/tests-verify.php';
     include '../functions/users.php';

     $usersObj = new Users();

     if (!isset($_SESSION['id']) || $_SESSION['id'] != true) {
          header("location: ../Pages/Homepage.html");
          exit;
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="../css/feedback.css">
     <title>CRead - Certificate</title>
</head>
<body>
     <section>
          <h1>Certificate of Completion</h1>
          <p>Congratulations <span class="highlight"><?php echo $_SESSION['username']; ?></span>
               on completing the CRead Literacy course. <br> Below is a certificate as a reward for your hard work.
          </p>
     </section>
     <section>
          <img style="width: 50%; height: auto;" src="../img/CRead_Certificate.png" alt="cread-certificate">
          <br><a class="go-to-class" href="../img/CRead_Certificate.png" download>Download Certificate Here</a>
     </section>
     <!-- Route to Pages -->
     <section class="user-route">
          <div>
               <a class="go-to-class" href="../dashboard/Dashboard.php">Go to Dashboard</a>
          </div>
     </section>
</body>
</html>