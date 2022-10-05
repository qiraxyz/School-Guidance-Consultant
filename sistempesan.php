<?php
include 'config.php';

if(isset($_POST['kirim'])) {
    $nama_siswa = $_POST['nama_siswa'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];
    $tanggal = $_POST['tanggal'];
    $no = $_POST['no'];
    $pesan = $_POST['pesan'];

    $sql = "INSERT INTO konsul (nama_siswa, kelas, jurusan, tanggal, no,pesan) VALUES ('$nama_siswa','$kelas','$jurusan','$tanggal','$no','$pesan')";
    $query = mysqli_query($connect, $sql);

    if($query){
        header('Location: user.php');
    }else{
        header('Location: user.php?status=gagal');
    }
}

?>