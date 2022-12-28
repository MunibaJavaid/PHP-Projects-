<?php include 'Connection.php';?>

<body>
   
    <?php include 'Dashboard.php';?>

    <style>
        
        @media screen and (min-width: 600px) {
            .head{
            text-align: center;
        top:50%;
        margin-top:200px;  
        font-size:80px;
                }
        }
        @media screen and (max-width: 599px) {
            .head{
            text-align: center;
        top:50%;
        margin-top:80px;  
        font-size:50px;
                }
        }
</style>

    <div>
        <h1 class ="head">Welcome To Admin <br> Dashboard</h1>
    </div>

    <!-- Footer -->
    <!-- <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
         </footer> -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

