<?php
    session_start();

    // routing path 
    $parameter = '';

    if (isset($_GET)) {
        foreach ($_GET as $key => $value) {
            $parameter = $key;
        }
    }

    // $username = '';
    // if(isset($_SESSION['user_login'])) {
    //     $username = $_SESSION['user_login'];
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
    <?php echo $parameter == 'login' ? '<link href="resource/assets/css/login.css" rel="stylesheet">' : '' ?>

</head>

<body id="page-top">

    <div id="wrapper">

        <?php $parameter !== 'login' ? include '../component/sidebar.php' : '' ?>

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content">

                <?php $parameter !== 'login' ? include '../component/header.php' : ''?>
                <?php include '../routing.php'?>

            </div>

            <?php echo $parameter !== 'login' ?
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
   
    <?php echo $parameter == 'list-pegawai' ? '<script src="vendor/datatables/jquery.dataTables.min.js"></script>' : '' ?> 
    <?php echo $parameter == 'list-pegawai' ? '<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>' : '' ?> 

    <?php echo $parameter == 'list-pegawai' ? '<script src="resource/assets/js/demo/datatables-demo.js"></script>' : ''; ?>
    
    <script>

    $('#dataTable').DataTable({
        "ajax": {
            "type": "POST",
            "url": "data_pegawai.json",
            "timeout": 12000,
            "dataSrc": function (json) {
                if(json != null){
                    return json
                } else {
                    return "";
                }
            }
            // success: function(res){
            //     for(const key in res){
            //         console.log(res[key].nip_nik)
            //     }
            // }
        },
        "columns": [
            {
                "data": null, // For the numbering column
                "render": function (data, type, row, meta) {
                    return meta.row + 1; // Incremental numbering starting from 1
                }
            },
            { "data": "nip_nik" },
            { "data": "nama" },
            { "data": "jenis_kelamin" },
            { "data": "tgl_lahir" },
            {
                "data": null,
                "render": function (data, type, row){
                    return `
                        <button class="btn btn-primary btn-sm view-btn" data-id="${row.nip_nik}">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button class="btn btn-warning btn-sm edit-btn" data-id="${row.nip_nik}">
                            <i class="fas fa-edit"></i>
                        </button>
                        <button class="btn btn-danger btn-sm delete-btn" data-id="${row.nip_nik}">
                            <i class="fas fa-trash"></i>
                        </button>
                    `;
                }
            }
        ]
    });

    // $(document).ready(function() {
    //     $.get({
    //         url: 'data_pegawai.json',
    //         success: function(data){
    //             let list = '';
    //             for(const key in data){
    //                 list += '<tr>';
    //                 list += '<td>'+data[key].opd+'</td>';
    //                 list += '<td>'+data[key].kategori+'</td>';
    //                 list += '<td>'+data[key].nama+'</td>';
    //                 list += '<td>'+data[key].nip_nik+'</td>';
    //                 list += '<td>'+data[key].unit_kerja+'</td>';
    //                 list += '<td>'+data[key].jabatan+'</td>';
    //                 list += '<td>'+data[key].jenis_kelamin+'</td>';
    //                 list += '<td>'+data[key].tgl_lahir+'</td>';
    //                 list += '<td>'+data[key].tk_pendidikan+'</td>';
    //                 list += '<td>'+data[key].golongan+'</td>';
    //                 list += '<td>'+data[key].jenisjabatan+'</td>';
    //                 list += '</tr>';
    //             }

    //             $("#table-body").html(list);
    //             $('#dataTable').DataTable();
    //         }

    //     })
    // })
    
    </script>
</body>
</html>