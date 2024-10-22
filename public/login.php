<?php
    include_once "../koneksi.php";

    if(isset($_POST['btn_login'])){
        $sql_quaries_login = "
            SELECT u.username, p.nama 
            FROM tbl_user u 
            JOIN tbl_pegawai p ON u.role_id = p.id 
            WHERE u.username = '$_POST[username]' AND u.password = '$_POST[password]'
        ";
        $result = mysqli_query($koneksi, $sql_quaries_login);

        if(mysqli_num_rows($result) == 0){
            echo "username atau password salah, silahkan ketikan ulang";
        } else {
            $user_data = mysqli_fetch_assoc($result);

            // Set session variables
            $_SESSION['user_login'] = $user_data['username'];
            $_SESSION['nama'] = $user_data['nama']; // Include 'nama' from tbl_pegawai

            // Reload
            die('<script>location.replace("/")</script>');
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
                            <input class="form-control form-control-user text-center" type="text" id="username" name="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : '' ; ?>" placeholder="Masukkan NIP atau NIK" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-user text-center" type="password" id="password" name="password" value="<?php echo isset($_POST['password']) ? $_POST['password'] : '' ; ?>" placeholder="Masukkan password" required>
                        </div>

                        <input class="border-0 font-weight-bolder mt-4" name="btn_login" type="submit" value="Login">
            
            
                    </form>

                </div>

            </div>
        </div>
        
    </div>

</div>