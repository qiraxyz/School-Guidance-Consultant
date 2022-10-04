<?php
    include 'config.php';
     
    //parameter primary key
    $id = $_GET['id'];
    
    //variable for exec
    $sql = "DELETE FROM konsul WHERE id='$id'";
    $query = mysqli_query($connect,$sql);
    //$query = mysqli_query($connect, $sql);

    //executor
    if($query) {
        header('Location: feedback.php');
    }else {
        header('Location: hapus.php?=status=gagal');
    }
?>