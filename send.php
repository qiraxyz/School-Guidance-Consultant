<?php
include 'koneksi.php';

    if(isset($_POST['submit'])){
        $name       = $_POST['name'];
        $email      = $_POST['email'];
        $message    = $_POST['message'];
        $no      = $_POST['no'];
        header("location:https://api.whatsapp.com/send?phone=$no&text=Nama:%20$name%20%0AEmail:%20$email%20%0APesan:%20$message");
    }else{
        echo "
            <script>
                window.location=history.go(-1);
            </script>
        ";
    }
?>