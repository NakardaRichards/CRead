<ul class="navbar-nav bg-green-primary sidebar sidebar-dark accordion" style="background-color:grey" id="accordionSidebar">


    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../Pages/Homepage.html">
        <div >
            <img src="../img/Cread transparent.png" width="146px";>
        </div>
    </a>

    <hr class="sidebar-divider my-0">

    <hr class="sidebar-divider my-0">


    <hr class="sidebar-divider">


    <hr class="sidebar-divider">

    
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
            <i class="fas fa-fw fa-book"></i>
            <span>Lessons</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="../dashboard/beginnerlessons.php">Beginner Lessons</a>
                <a class="collapse-item" href="../dashboard/intermediatelessons.php">Intermediate Lessons</a>
                <a class="collapse-item" href="../dashboard/advancedlessons.php">Advanced Lessons</a>
                <div class="collapse-divider"></div>

            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-check"></i>
            <span>Tests</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

                <a class="collapse-item" href="../tests/beginner-t1.php">Beginner Tests</a>
                <a class="collapse-item" href="../tests/intermediate-t1.php">Intermediate Tests</a>
                <a class="collapse-item" href="../tests/advanced-t1.php">Advanced Tests</a>
                <div class="collapse-divider"></div>

              
            </div>
        </div>
    </li>

    <div>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <i class="fas fa-fw fa-archive"></i>
            <span>Supplementary Content</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">

            <a class="collapse-item" href="../Supplemental Material Page/smaterial.html">Content</a>
               
        
                <div class="collapse-divider"></div>

            </div>
        </div>
    </li>
</div>

   


    <hr class="sidebar-divider">





</ul>

<div id="content-wrapper" class="d-flex flex-column">


    <div id="content">


        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


            <ul class="navbar-nav ml-auto">


                <div class="topbar-divider d-none d-sm-block"></div>


                <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small">Username: <?php echo '<b>' . $_SESSION['username'] . '</b>'; ?> </span>
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        <b style="color:red;"> Logout</b>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Continue
                        </a>
                    </div>
                </li>

            </ul>

        </nav>