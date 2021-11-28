<?php include_once('../dashboard/header.php'); ?>
<?php include_once('../Functions/users.php');


$usersObj = new Users();



if (!isset($_SESSION['id']) || $_SESSION['id'] != true) {
    header("location: ../Pages/Homepage.html");
    exit;
}

?>
<?php include_once('../dashboard/dashMenu.php'); ?>
<?php 
    include '../functions/tests-verify.php';
    $tests = new tests();
    $progress = $tests->userProgress();
?>

    <div class="dash-body">
        <div class="dash-wrap">
            <div class="dash-card">
                <!-- Logo -->
                <div class="show-level">
                    Your Current Level is <br><?php echo '<span class="highlight">'.$progress[0]?>
                </div>
                <div class="show-lesson">
                    <?php echo $progress[1]?>
                </div>
            </div>
        </div>
        <div class="dash-wrap">
            <div class="dash-card">
                <svg>
                    <circle cx="70" cy="70" r="70"></circle>
                    <circle cx="70" cy="70" r="70" 
                            style="stroke-dashoffset: calc(440 - (440 * <?php echo $progress[4];?>) / 100);">
                    </circle>
                    <text x="25" y="94" fill="black" style="font-size: 48px;"><?php echo $progress[4];?>%</text>
                </svg>
                <p>
                    <?php echo '<span class="highlight">'.$progress[2].'</span> out of <span class="highlight">'.$progress[3].'</span> points'; ?>
                </p>
                
            </div>
        </div>
        <div class="dash-wrap-l">
            <div class="dash-card">
                <div style="height: 100%; width:100%; padding-top: 0.5rem;">
                    <ul class="bars-cont">
                        <!-- Temporary fix for % overlaying the graph footers for low percentages -->
                        <li style="height: <?php echo ($progress[5]+$progress[6]+$progress[7])/30*100;?>%;"></li> 
                        <li style="height: <?php echo ($progress[8]+$progress[9]+$progress[10])/30*100;?>%;"></li>
                        <li style="height: <?php echo ($progress[11]+$progress[12]+$progress[13])/10*100;?>%;"></li>
                    </ul>
                    <ul class="tests-cont">
                        <li><?php echo round((($progress[5]+$progress[6]+$progress[7])/30)*100) .'%';?><br>Beginner</li>
                        <li><?php echo round((($progress[8]+$progress[9]+$progress[10])/30)*100) .'%';?><br>Intermediate</li>
                        <li><?php echo round((($progress[11]+$progress[12]+$progress[13])/10)*100) .'%';?><br>Advanced</li>
                    </ul>
                    
                </div>
                <!-- Graph of Progression -->
            </div>
        </div>
    </div>




<?php include_once('footer.php'); ?>