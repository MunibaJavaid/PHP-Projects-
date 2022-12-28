
<?php include '../includes/authorized.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600|Open+Sans:400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/spur.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="assets/js/chart-js-config.js"></script>
        <style>
            hr{
           
                background-color: #ffffff;
             
            }
        </style>         
</head>
<body>
    <div class="dash">
        <div class="dash-nav dash-nav-dark">
            <header>
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="index.html" class="spur-logo"><span>LabAutomation</span></a>

            </header>
                

            <nav class="dash-nav-list">
                <a href="header.php" class="dash-nav-item">
                    <i class="fas fa-home"></i> Dashboard </a>
               
                 <div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-chart-bar"></i> Add Tester User </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="AddTesterUser.php" class="dash-nav-dropdown-item">Add Testers</a>
                    </div>
                     <div class="dash-nav-dropdown-menu">
                        <a href="viewdataproduct.php" class="dash-nav-dropdown-item">View Testers</a>
                    </div>
                </div>
                                 <div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-chart-bar"></i>Products </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="AddProduct.php" class="dash-nav-dropdown-item">Add Products</a>
                    </div>
                     <div class="dash-nav-dropdown-menu">
                        <a href="viewdataproduct.php" class="dash-nav-dropdown-item">View Products</a>
                    </div>
                </div>
                <hr>
                <a href="index.html" class="spur-logo ml-4 mb-4"><span>Testing</span></a>
                <div class="dash-nav-dropdown ">
                    <a href="companytesting.php" class="dash-nav-item dash-nav-toggle">
                        <i class="fas fa-cube"></i> Company Tester </a>
                    <!-- <div class="dash-nav-dropdown-menu">
                        <a href="cards.html" class="dash-nav-dropdown-item">Cards</a>
                        <a href="forms.html" class="dash-nav-dropdown-item">Forms</a>
                        <div class="dash-nav-dropdown ">
                            <a href="#" class="dash-nav-dropdown-item dash-nav-dropdown-toggle">Icons</a>
                             <div class="dash-nav-dropdown-menu">
                                <a href="icons.html" class="dash-nav-dropdown-item">Solid Icons</a>
                                <a href="icons.html#regular-icons" class="dash-nav-dropdown-item">Regular Icons</a>
                                <a href="icons.html#brand-icons" class="dash-nav-dropdown-item">Brand Icons</a>
                            </div>
                        </div>
                        <a href="stats.html" class="dash-nav-dropdown-item">Stats</a>
                        <a href="tables.html" class="dash-nav-dropdown-item">Tables</a>
                        <a href="typography.html" class="dash-nav-dropdown-item">Typography</a>
                        <a href="userinterface.html" class="dash-nav-dropdown-item">User Interface</a>
                    </div> -->
                </div>
                <div class="dash-nav-dropdown">
                    <a href="labtesting.php" class="dash-nav-item dash-nav-toggle">
                        <i class="fas fa-file"></i> Laboratory Tester </a>
               
                </div>
                <!-- <div class="dash-nav-dropdown">
                    <a href="#!" class="dash-nav-item dash-nav-dropdown-toggle">
                        <i class="fas fa-info"></i> About </a>
                    <div class="dash-nav-dropdown-menu">
                        <a href="https://github.com/HackerThemes/spur-template" target="_blank" class="dash-nav-dropdown-item">GitHub</a>
                        <a href="http://hackerthemes.com" target="_blank" class="dash-nav-dropdown-item">HackerThemes</a>
                    </div>
                </div> -->
            </nav>
        </div>
        <div class="dash-app">
            <header class="dash-toolbar">
                <a href="#!" class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </a>
                <a href="#!" class="searchbox-toggle">
                    <i class="fas fa-search"></i>
                </a>
                <form class="searchbox" action="#!">
                    <a href="#!" class="searchbox-toggle"> <i class="fas fa-arrow-left"></i> </a>
                    <button type="submit" class="searchbox-submit"> <i class="fas fa-search"></i> </button>
                    <input type="text" class="searchbox-input" placeholder="type to search">
                </form>
                <div class="tools">
                    <a href="https://github.com/HackerThemes/spur-template" target="_blank" class="tools-item">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="#!" class="tools-item">
                        <i class="fas fa-bell"></i>
                        <i class="tools-item-count">4</i>
                    </a>
                    <div class="dropdown tools-item">
                        <a href="#" class="" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                            <a class="dropdown-item" href="#!">Profile</a>
                            <a class="dropdown-item" href="../MainLayout/logout.php">Logout</a>
                        </div>
                    </div>
                </div>
            </header>
     
     

    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="assets/js/spur.js"></script>
</body>
</html>