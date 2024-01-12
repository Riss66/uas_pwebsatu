<?php
session_start();
include '../conek.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">

    <title>Produk</title>
  </head>
  <body>
  <?php
  if(isset($_POST['nama'])){
    $nama = $_POST['nama'];
    $pesan = $_POST['pesan'];
$jumlah = $_POST['jumlah'];
$harga= $_POST['harga'];


// $query = mysqli_query($conn, "INSERT INTO product (nama, pesan, jumlah, harga) VALUES ('$nama', '$pesan', '$jumlah', '$harga')");
$query = mysqli_query($conn, "INSERT INTO product(nama, pesan, jumlah, harga) VALUES ('$nama','$pesan','$jumlah','$harga')");
if ($query) {
    echo '<script>alert("tambah produk berhasil"); location.href="../index.php"</script>';
} else {
    echo '<script>alert("Error: ' . mysqli_error($conn) . '");</script>';
}


}
  ?>
  <div class="content">
    
    <div class="container">
      <div class="row align-items-stretch justify-content-center no-gutters">
        <div class="col-md-7">
          <div class="form h-100 contact-wrap p-5">
            <h3 class="text-center">Tambah barang</h3>
            <form class="mb-5" method="post" >
              <div class="row">
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Nama Produk</label>
                  <input type="text" class="form-control" name="nama" id="inputnama" placeholder="Masukkan Nama Produk">
                </div>
                <div class="col-md-6 form-group mb-3">
                  <label for="" class="col-form-label">Pesan</label>
                  <input type="text" class="form-control" name="pesan" id="inputpesan"  placeholder="Masukkan Pesan">
                </div>
              </div>

              <div class="row">
                <div class="col-md-12 form-group mb-3">
                  <label for="budget" class="col-form-label">Jumlah</label>
                  <input type="text" class="form-control" name="jumlah" id="inputjumlah" placeholder="Masukkan Jumlah Produk">
                </div>
              </div>

              <div class="row mb-5">
                <div class="col-md-12 form-group mb-3">
                  <label for="message" class="col-form-label">Harga</label>
                  <input type="text" class="form-control" id="inputharga" name="harga" name="harga" value="500.000" readonly>
                </div>
              </div>
              <div class="row justify-content-center">
  <div class="col-md-5 form-group text-center">
  <button type="submit" class="btn btn-success">Order Now</button>  
  <!-- <a href="../index.php" class="btn btn-block btn-primary rounded-0 py-2 px-4"> -->
      <!-- Done Kak -->
    <!-- </a> -->
    <span class="submit"></span>
  </div>
</div>

              </div>
            </form>

            <div id="form-message-warning mt-4"></div> 
            <div id="form-message-success">
              Pesanan Telah Ditambah, Suwun
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>

  </body>
</html>