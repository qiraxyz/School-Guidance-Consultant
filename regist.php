<?php
include 'config.php';
session_start();
if(isset($_SESSION['email'])){
    header("Location: user2.php");
}elseif(isset($_SESSION['email']) == 'ara123@gmail.com'){
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body style=" background-position: center; background-size: 114%; background-image: url(img/bglogintb.png)">
    <div class="zan-login">
        <div class="isi-login">

            <div class="isi-left">
                <img src="img/logohs.png" alt="">
                <p>KONSUL BK</p>
                
            </div>

            <div class="dokicon">
                <img src="img/logotb.png" alt="">
            </div>
            
            <p class="judul-login">REGISTER</p>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="isi-right">
                    
                    <label for=""><img src="img/nameicon.png" alt=""></label>
                    <input type="text" name="nama_user" placeholder="Full Name...">
                    <br>
                    <label for=""><img src="img/nameicon.png" alt=""></label>
                    <input type="text" name="email" placeholder="Email...">
                    <br>
                    <label for=""><img src="img/passicon.png" alt="" style="height: 25px;"></label>
                    <input type="password" name="password" placeholder="Password"> 
                    <br>
                    <input type="file" name="file">
                    <button type="submit" name="simpanakun" style=" margin-left: 23%; background-color: #083AA9; border: none; border-radius: 10px; color: white; width: 150px; height: 35px; font-weight: bold;">Sign Up</button>

                    <!-- dont have account -->
                    <br>
                    <div class="have-account">
                    <label for="">have account?</label>
                    <a href="login.php" style="color: green;">Sign In</a>
                    </div>
                </div>
            </form>    
            
            
        </div>
        
    </div>
    <?php

        if(isset($_POST['simpanakun'])){
            $pp = $_FILES['file']['name'];
            $nama_user = $_POST['nama_user'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            


            $file_tmp = $_FILES['file']['tmp_name'];

            if(move_uploaded_file($file_tmp, "img/$pp"));

            $query = mysqli_query($connect, "INSERT INTO data_akun VALUES ('', '$pp', '$nama_user', '$email','$password','user')");

            if($query){
                header("Location: login.php");
            }else{
                header("Location: regist.php?status='gagal'");
            }
            
                // var_dump($file);
                // die;
            }

?>
</body>

</html> 