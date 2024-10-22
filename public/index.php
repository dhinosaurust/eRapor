<?php
    session_start();

    // routing path 
    
    // if(isset($_SESSION['user_login'])){
    //     $username = $_SESSION['user_login'];
    //     $name = $_SESSION['nama'];
    // }

    // if(!isset($_SESSION['user_login'])){
    //     if($_SERVER['REQUEST_URI'] == '/login'){
    //         header('Location: /login');
    //         exit;
    //     }
    // }

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>eRapor</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="resource/assets/css/sb-admin-2.min.css" rel="stylesheet">

    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <?php echo $_SERVER['REQUEST_URI'] == '/login' ? '<link href="resource/assets/css/login.css" rel="stylesheet">' : ''; ?>

    <style>
        .toggled .user-profile{
            width: 40px !important;
            height: 40px !important;
        }
    </style>

</head>

<body id="page-top">

    <div id="wrapper">
        
        <?php //var_dump($_SERVER['REQUEST_URI'] == '/login')?>

        <?php $_SERVER['REQUEST_URI'] != '/login' ? include '../component/sidebar.php' : '' ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <?php $_SERVER['REQUEST_URI'] != '/login' ? include '../component/header.php' : ''?>
                <?php include("../routing.php")?>

            </div>

            <?php echo $_SERVER['REQUEST_URI'] != '/login' ?
            '<footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>'
            : '' ?>

        </div>

    </div>

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
    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="resource/assets/js/sb-admin-2.min.js"></script>
   
    <?php echo $request_uri == '/list-pegawai' ? '<script src="vendor/datatables/jquery.dataTables.min.js"></script>' : '' ?> 
    <?php echo $request_uri == '/list-pegawai' ? '<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>' : '' ?> 

    <?php echo $request_uri == '/list-pegawai' ? '<script src="resource/assets/js/demo/datatables-demo.js"></script>' : ''; ?>
    
    <?php echo $request_uri == '/list-pegawai' ? '<script src="resource/assets/js/list-pegawai.js"></script>' : '' ;?>


</body>
</html>