<?php include 'config.php';

session_start();
// cek sudah login blm
if ($_SESSION['status'] == "") {
    header("localtion:index.php?status=gagal");
}

// sesion user
$email = $_SESSION['email'];
$query = "SELECT * FROM data_akun WHERE email = '$email'";
$sql = mysqli_query($connect, $query);
?>

<?php
if (mysqli_num_rows($sql) > 0) {
    $data_akun = mysqli_fetch_array($sql);
    $_SESSION["nama_user"] = $data_akun["nama_user"];
    $_SESSION["pp"] = $data_akun["file"];
    $_SESSION["email"] = $data_akun["email"];
    $_SESSION["status"] = $data_akun["status"];
}
?>

<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<title>Feedback Admin</title>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css'>
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.0.13/css/all.css'>
<link rel="stylesheet" href="style.css">
<script src="index.js"></script>
<!-- quicksand font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/esm/popper.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.js'></script>
<script src="script.js"></script>
<!-- favicon -->
<link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">
<link rel="icon" href="./assets/favicon.png" type="image/x-icon">


</head>
<body>
<!-- partial:index.partial.html -->
<div class="page-wrapper chiller-theme toggled">
<a id="show-sidebar" class="btn btn-sm btn-dark" href="#">
<i class="fas fa-bars"></i>
</a>
<nav id="sidebar" class="sidebar-wrapper">
<div class="sidebar-content">
<div class="sidebar-brand">
<a href="#">Administrator</a>

<!-- close sidebar -->
<!-- <div id="close-sidebar" class="hidden">
<i class="fas fa-times"></i>
</div> -->
</div>
<div class="sidebar-header">
<div class="user-pic">
<img class="img-responsive img-rounded" src="<?php echo $_SESSION['pp']?>" alt="avatar">
</div>
<div class="user-info">
<span class="user-name">
<strong><?php echo $_SESSION['nama_user']?></strong>
</span>
<span class="user-role">Administrator</span>
<span class="user-status">
<i class="fa fa-circle"></i>
<span>Online</span>
</span>
</div>
</div>
<!-- sidebar-header -->

<!-- <div class="sidebar-search">
<div>
<div class="input-group">
<input type="text" class="form-control search-menu" placeholder="Search...">
<div class="input-group-append">
<span class="input-group-text">
<i class="fa fa-search" aria-hidden="true"></i>
</span>
</div>
</div>
</div>
</div> -->
<!-- sidebar-search -->

<div class="sidebar-menu">
<ul>
<li class="header-menu">
<span>General</span>
</li>
<li class="sidebar-dropdown">
<a href="index.php?" class="clicked-dashboard">
<i class="fa fa-tachometer-alt"></i>
<span>Dashboard</span>
<span class="badge badge-pill badge-warning">New</span>
</a>
<div class="sidebar-submenu">
<ul>
<li>
<a href="#">Dashboard 1
<span class="badge badge-pill badge-success">Pro</span>
</a>
</li>
<li>
<a href="#">Dashboard 2</a>
</li>
<li>
<a href="#">Dashboard 3</a>
</li>
</ul>
</div>
</li>



<!-- E-commerce -->

<li class="sidebar-dropdown">
<a href="feedback.php">
<i class="fa fa-shopping-cart"></i>
<span>Feedback</span>
<!-- <span class="badge badge-pill badge-danger">3</span> -->
</a>
<div class="sidebar-submenu">
<ul>
<li>
<a href="#">Products
</a>
</li>
<li>
<a href="#">Orders</a>
</li>
 <li>
<a href="#">Credit cart</a>
</li>
</ul>
</div>
</li>

<!-- Component -->

<!-- <li class="sidebar-dropdown">
<a href="#">
<i class="far fa-gem"></i>
<span>Components</span>
</a>
<div class="sidebar-submenu">
<ul>
<li>
<a href="#">General</a>
</li>
<li>
<a href="#">Panels</a>
</li>
<li>
<a href="#">Tables</a>
</li>
<li>
<a href="#">Icons</a>
</li>
<li>
<a href="#">Forms</a>
</li>
</ul>
</div>
</li> -->




<!-- charts -->

<!-- <li class="sidebar-dropdown">
<a href="#">
<i class="fa fa-chart-line"></i>
<span>Charts</span>
</a>
<div class="sidebar-submenu">
<ul>
<li>
<a href="#">Pie chart</a>
</li>
<li>
<a href="#">Line chart</a>
</li>
<li>
<a href="#">Bar chart</a>
</li>
<li>
<a href="#">Histogram</a>
</li>
</ul>
</div>
</li> -->




<!-- maps -->

<!-- <li class="sidebar-dropdown">
<a href="#">
<i class="fa fa-globe"></i>
<span>Maps</span>
</a>
<div class="sidebar-submenu">
<ul>
<li>
<a href="#">Google maps</a>
</li>
<li>
<a href="#">Open street map</a>
</li>
</ul>
</div>
</li>
<li class="header-menu">
<span>Extra</span>
</li>
<li>
<a href="#">
<i class="fa fa-book"></i>
<span>Documentation</span>
<span class="badge badge-pill badge-primary">Beta</span>
</a>
</li>
<li>
<a href="#">
<i class="fa fa-calendar"></i>
<span>Calendar</span>
</a>
</li>
<li>
<a href="#">
<i class="fa fa-folder"></i>
<span>Examples</span>
</a>
</li>
</ul>
</div> -->
<!-- sidebar-menu -->
</div>
<!-- sidebar-content -->
<div class="sidebar-footer">
<a href="#">
<i class="fa fa-bell"></i>
<!-- <span class="badge badge-pill badge-warning notification">3</span> -->
</a>
<a href="#">
<i class="fa fa-envelope"></i>
<!-- <span class="badge badge-pill badge-success notification">7</span> -->
</a>
<a href="#">
<i class="fa fa-cog"></i>
<!-- <span class="badge-sonar"></span> -->
</a>
<a href="login.php">
<i class="fa fa-power-off"></i>
</a>
</div>
</nav>



<!-- sidebar-wrapper -->

<main class="page-content">
<div class="container-fluid">
<h2><strong>Dashboard</strong></h2>
<hr><br><br>
                        <!-- PHP -->
<div class="container-fluid">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Last Data</h4>
                            <h6 class="card-subtitle">Data related</h6>
                        </div>


                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                <tr> 
                                        <th scope="col"><b>id</b></th>
                                        <th scope="col"><b>Nama Siswa</b></th>
                                        <th scope="col"><b>Kelas</b></th>
                                        <th scope="col"><b>Jurusan</b></th>
                                        <th scope="col"><b>Tanggal</b></th>
                                        <th scope="col"><b>Pesan</b></th>

                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                $sql = "SELECT * FROM konsul";
                                $query = mysqli_query($connect,$sql);
                         
                                //take and put data with array to table
                                while ($sis = (mysqli_fetch_array($query))) {
                                
                                echo "<tr>";
                                echo "<td>". $sis [0]. "</td>";
                                echo "<td>". $sis [1]. "</td>";
                                echo "<td>". $sis [2]. "</td>";
                                echo "<td>". $sis [3]. "</td>";
                                echo "<td>". $sis [4]. "</td>";
                                echo "<td>". $sis [5]. "</td>";
                                // echo "<td>". "<button>". "<a href='editform_siswa.php?id_siswa=".$sis['id_siswa']."'>edit</a>" . "</button>";
                                // echo "<button>". "<a href='hapus_siswa.php?id_siswa=".$sis['id_siswa']."'>delete</a>". "</button>"; 
                                echo "</td>";
                                echo "</tr>";
                                
                                                  }
                                         ?>
                                </tbody>
                            </table>
                       
                        
                    </div>
                </div>
            </div>
        </div>
<!-- PHP -->         
<!-- page-content" -->
</div>
<!-- page-wrapper -->
</body>
</html>
