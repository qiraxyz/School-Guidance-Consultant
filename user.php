<?php
include 'config.php';
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
        <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">konsultasi</a>
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
                  <a class="dropdown-item" href="login.php">login</a>
                  <a class="dropdown-item" href="#!">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#!">Something else here</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Page content-->
      <div class="container contact">
        <div class="row">
          <div class="col-md-3">
            <div class="contact-info">
              <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image" />
              <h2>KONSUTASI</h2>
              <h4>SMK TARUNA BHAKTI</h4>
            </div>
          </div>


          <div class="col-md-9">

            <div class="contact-form">
              <form action="sistempesan.php" method="post">
                <div class="form-group">
                  <label class="control-label col-sm-2" for="nama">Name :</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="name_siswa" placeholder="Enter Name" name="nama_siswa">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="kelas">kelas:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="kelas" placeholder="Enter class" name="kelas">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="jurusan">Jurusan:</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="jurusan" placeholder="Enter major" name="jurusan">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="tanggal">Tanggal:</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="tanggal" placeholder="Enter date" name="tanggal">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="pesan">Message:</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" rows="5" name="pesan" value:pesan; id="pesan"></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" name="kirim" value="kirim" class="btn btn-default">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>


      <!-- Bootstrap core JS-->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
      <!-- Core theme JS-->
      <script src="js/scripts.js"></script>
      <script src="main.js"></script>
</body>

</html>