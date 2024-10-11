<?php
    include_once 'conn.php';

    if(isset($_POST['btn_login'])){
        $sql_quaries_login = "SELECT * FROM tbl_pengguna where username = '$_POST[username]' AND password = '$_POST[password]'";
        $result = mysqli_query($koneksi, $sql_quaries_login);

        if(mysqli_num_rows($result) == 0){
            echo "username atau password salah, silahkan ketikan ulang";
        } else {
            // set session
            $_SESSION['user_login'] = $_POST['username'];

            // reload
            die('<script>location.replace("?")</script>');
        }
    }

?>

<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-7">

            <div class="card shadow-lg login-container my-5 py-3 px-3">
                <div class="card-body">
                    <h2 class="text-center font-weight-bolder text-gray-900">E-Rapor</h2>
                    <form class="d-flex flex-column text-center" method="POST">
                        <p class="mb-4">Selamat datang di portal E-Rapor ASN & Non-ASN</p>
                        <div class="form-group">
                            <input class="form-control form-control-user text-center" type="text" id="nip_nik" name="nip_nik" placeholder="Masukkan NIP atau NIK" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-user text-center" type="password" id="password" name="password" placeholder="Masukkan password" required>
                        </div>

                        <input class="border-0 font-weight-bolder mt-4" type="submit" value="Login">
            
            
                    </form>

                </div>

            </div>
        </div>
        
    </div>

</div>