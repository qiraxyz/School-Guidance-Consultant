<?php
include 'config.php';
session_start();

// cek sudah login blm
// if (!isset($_SESSION['status'])) {
  //     header("localtion:index.php?status=gagal");
  // }
  
  // sesion user
  $email = $_SESSION['email'];
  $query = "SELECT * FROM data_akun WHERE email = '$email'";
  $sql = mysqli_query($connect, $query);
  //cek admin
  // session_start();
  
  if(!isset($_SESSION['email'])){
    header("Location: user.php");
  }
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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user</title>
    <link rel="stylesheet" href="user.css">
</head>

<body>
    <!-- sidebar -->
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <div class="border-end bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading border-bottom bg-light">Starbhak BK</div>
            <div class="list-group list-group-flush">
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="user2.php">konsultasi</a>
                <a class="list-group-item list-group-item-action list-group-item-light p-3" href="profil.php">Profil</a>
                <!--<a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Overview</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Events</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Profile</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Status</a> -->
            </div>
        </div>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <button class="btn btn-primary" id="sidebarToggle">Menu</button>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                            <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                            <!-- <li class="nav-item"><a class="nav-link" href="#!">Link</a></li> -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <!-- <a class="dropdown-item" href="login.php">login</a> -->
                                    <a class="dropdown-item" href="logout.php">Logout</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#!">Something else here</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Page content-->
            <!-- copyright by zanco21 -->
            <section style="background-color: #eee; padding: 15px 15px;">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card mb-4">
                            <div class="card-body text-center">
                                <img src="<?php echo $_SESSION['pp']?>" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                <h5 class="my-3"><?php echo $_SESSION['nama_user'] ?></h5>
                                <p class="text-muted mb-1">Full NGEstuck</p>
                                <p class="text-muted mb-4">Bay Area, Depok, ID</p>
                               
                            </div>
                        </div>
                    </div>
                </div>  
                <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Full Name</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $_SESSION['nama_user'] ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">Email</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $_SESSION['email'] ?></p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0">status</p>
              </div>
              <div class="col-sm-9">
                <p class="text-muted mb-0"><?php echo $_SESSION['status'] ?></p>
              </div>
            </div>
        </div>  
</section>

            <!-- <h1>Profil</h1>
            <label for="">Nama :</label>
            <label for="" style="border: 1px solid black; padding: 5px 30px;"><php echo $_SESSION['nama_user'] ?></label>
            <br>
            <label for="">Status :</label>
            <label for="" style="border: 1px solid black;"><php echo $_SESSION['status'] ?></label>
            <br>
            <label for="">Email :</label>
            <label for="" style="border: 1px solid black;"><php echo $_SESSION['email'] ?></label> -->




            <!-- Bootstrap core JS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
            <!-- Core theme JS-->
            <script src="js/scripts.js"></script>
            <script src="main.js"></script>
</body>

</html>