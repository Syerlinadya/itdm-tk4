<?php
    // session start
    if(!empty($_SESSION)){ }else{ session_start(); }
    //session
	if(!empty($_SESSION['ADMIN']))
    // panggil file
    require 'proses/panggil.php';
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Tambah Pelanggan</title>
	</head>
    <body style="background:#586df5;">
		<div class="container">
			<br/>
            <span style="color:#fff";>Selamat Datang, <?php echo $sesi['NamaPelanggan'];?></span>
			<div class="float-right">	
				<a href="index.php" class="btn btn-success btn-md" style="margin-right:1pc;"><span class="fa fa-home"></span> Kembali</a> 
				<a href="logout.php" class="btn btn-danger btn-md float-right"><span class="fa fa-sign-out"></span> Logout</a>
			</div>		
			<br/><br/><br/>
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-lg-6">
					<br/>
					<div class="card">
						<div class="card-header">
						<h4 class="card-title">Tambah Pengguna</h4>
						</div>
						<div class="card-body">
							<form action="proses/crud.php?aksi=tambah" method="POST">
								<div class="form-group">
									<label>IdPenjualan </label>
									<input type="text" value="" class="form-control" name="IdPenjualan">
								</div>
								<div class="form-group">
									<label>NamaPelanggan</label>
									<input type="text" value="" class="form-control" name="NamaPelanggan">
								</div>
								<div class="form-group">
									<label>NamaBarang</label>
									<input type="text" value="" class="form-control" name="NamaBarang">
								</div>
								<div class="form-group">
									<label>Qty</label>
									<input type="number" value="" class="form-control" name="Qty">
								</div>
								<div class="form-group">
									<label>HargaBarang</label>
									<input type="number" value="" class="form-control" name="HargaBarang">
								</div>
								<button class="btn btn-primary btn-md" name="create"><i class="fa fa-plus"> </i> Tambah Data</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-3"></div>
			</div>
		</div>
	</body>
</html>
