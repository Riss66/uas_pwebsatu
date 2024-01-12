<?php
session_start();
include 'conek.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Hubungi Kami</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>    
body {
    color: #000;
    background: #fcda2e;
    font-family: "Roboto", sans-serif;
}
.contact-form {
    padding: 50px;
    margin: 30px auto;
}	
.contact-form h1 {
    font-size: 42px;
    font-family: 'Handwritten';
    margin: 0 0 50px;
    text-align: center;
}
.contact-form .form-group {
    margin-bottom: 20px;
}
.contact-form .form-control, .contact-form .btn {
    min-height: 40px;
    border-radius: 2px;
}
.contact-form .form-control {
    border-color: #e2c705;
}
.contact-form .form-control:focus {
    border-color: #d8b012;
    box-shadow: 0 0 8px #dcae10;
}
.contact-form .btn-primary, .contact-form .btn-primary:active {
    min-width: 250px;
    color: #fcda2e;
    background: #000 !important;
    margin-top: 20px;
    border: none;
}
.contact-form .btn-primary:hover {
    color: #fff; 
}
.contact-form .btn-primary i {
    margin-right: 5px;
}
.contact-form label {
    opacity: 0.9;
}
.contact-form textarea {
    resize: vertical;
}
.bs-example {
    margin: 20px;
}
</style>
</head>
<body>
    <?php
    if(isset($_POST['username'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
    $namaproduk= $_POST['namaproduk'];
    $hargaproduk= $_POST['hargaproduk'];
    $pembayaran=$_POST['pembayaran'];
    $alamatpengiriman=$_POST['alamat'];
    
    $query = mysqli_query($conn, "INSERT INTO transaksi  (namaproduk, hargaproduk, pembayaran, alamatpengiriman) values ('$namaproduk', '$hargaproduk', '$pembayaran', '$alamatpengiriman')");
    
    if($query) {
                echo '<script>alert("Pemesanan Berhasil");
                location.href="index.php"</script>';
              }else {
                echo '<script>alert("Pemesanan Gagal")</script>';
              }
    
    }
    ?>
<div class="container-lg">
	<div class="row">
		<div class="col-md-8 mx-auto">
			<div class="contact-form">
				<h1>Dapatkan dengan Sekali Ketuk!</h1>
				<form  method="post">
					<div class="row">
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inputName">Username</label>
								<input type="text" class="form-control" id="inputName" name="username" required>
							</div>
						</div>
						<div class="col-sm-6">
							<div class="form-group">
								<label for="inputEmail">Email</label>
								<input type="email" class="form-control" id="inputEmail" name="email" required>
							</div>
						</div>
					</div>            
					<div class="form-group">
						<label for="inputSubject">Nama Produk</label>
                        <select class="form-control" id="inputnamaproduk" name="namaproduk" name="namaproduk" required>
                            <option value="Produk1">1. Helm Bogo</option>
                            <option value="Produk2">2. Helm kyoto</option>
                            <option value="Produk3">3. Helm Anak Sinchan</option>
                        </select>
					</div>
                    <div class="form-group">
                        <label for="inputhargaproduk">Harga Produk</label>
                        <input type="text" class="form-control" id="inputhargaproduk" name="hargaproduk" name="hargaproduk" value="500.000" readonly>
                     </div>
                     <div class="form-group">
                        <label for="inputpembayaran">Pembayaran</label>
                        <select class="form-control" id="inputpembayaran" name="pembayaran" name="pembayaran" required>
                            <option value="Dana">Dana</option>
                            <option value="ShopeePay">ShopeePay</option>
                            <option value="Gopay">Gopay</option>
                            <option value="BRI">BRI</option>
                            <option value="BNI">BNI</option>
                        </select>
                    </div>
					<div class="form-group">
						<label for="inputMessage">Alamat Pengiriman</label>
						<textarea class="form-control" id="inputMessage" rows="5" name="alamat" required></textarea>
					</div>
					<div class="text-center">
						<button type="submit" class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send</button>
					</div>            
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>