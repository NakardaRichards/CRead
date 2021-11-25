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
                        <!-- Maybe swith from 'lesson grades' to 'level grades' -->
                        <li style="height: <?php echo $progress[5]/10*100;?>%;"><p><?php if($progress[5]) echo ($progress[5]/10)*100 .'%';?></p></li> 
                        <li style="height: <?php echo $progress[6]/10*100;?>%;"><p><?php if($progress[6]) echo ($progress[6]/10)*100 .'%';?></p></li>
                        <li style="height: <?php echo $progress[7]/10*100;?>%;"><p><?php if($progress[7]) echo ($progress[7]/10)*100 .'%';?></p></li>
                        <li style="height: <?php echo $progress[8]/10*100;?>%;"><p><?php if($progress[8]) echo ($progress[8]/10)*100 .'%';?></p></li>
                        <li style="height: <?php echo $progress[9]/10*100;?>%;"><p><?php if($progress[9]) echo ($progress[9]/10)*100 .'%';?></p></li>
                        <li style="height: <?php echo $progress[10]/10*100;?>%;"><p><?php if($progress[10]) echo ($progress[10]/10)*100 .'%';?></p></li>
                        <li style="height: <?php echo $progress[11]/10*100;?>%;"><p><?php if($progress[11]) echo ($progress[11]/10)*100 .'%';?></p></li>
                        <li style="height: <?php echo $progress[12]/10*100;?>%;"><p><?php if($progress[12]) echo ($progress[12]/10)*100 .'%';?></p></li>
                        <li style="height: <?php echo $progress[13]/10*100;?>%;"><p><?php if($progress[13]) echo ($progress[13]/10)*100 . '%';?></p></li>
                    </ul>
                    <ul class="tests-cont">
                        <li>B1</li>
                        <li>B2</li>
                        <li>B3</li>
                        <li>I1</li>
                        <li>I2</li>
                        <li>I3</li>
                        <li>A1</li>
                        <li>A2</li>
                        <li>A3</li>
                    </ul>
                    
                </div>
                <!-- Graph of Progression -->
            </div>
        </div>
    </div>




<?php include_once('footer.php'); ?>