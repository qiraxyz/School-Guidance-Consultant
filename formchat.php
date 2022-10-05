<?php
include 'config.php';

$no = $_GET['no'];
$sql = "SELECT * FROM konsul WHERE no = '$no'";

$query = mysqli_query($connect, $sql);

 // (mysql_fetch_array/assoc)  pengambilan data MySQL menangkap data dari hasil perintah query
$sis = mysqli_fetch_assoc($query);

if(mysqli_num_rows($query) < 1){
    die ("gagal");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Send Wa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>
<body>
    
    <section>
        <div class="container">
            <br><br>
            <h3>Form Send Whatsapp</h3>
            <br><br>

            <div class="row">
                <div class="col-6">
                <form action="send.php" method="post" target="_blank">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="messages">Messages</label>
                        <textarea class="form-control" name="message" rows="3"></textarea>
                    </div>
                    <input type="number" hidden name="no" value="<?php echo $sis['no']?>">

                    <button type="submit" name="submit" class="btn btn-primary">Send</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>
</html>