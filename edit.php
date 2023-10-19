<?php
    // session start
    if(!empty($_SESSION)){ }else{ session_start(); }
    // panggil file
    require 'proses/panggil.php';
    
    // tampilkan form edit
    $idGet = strip_tags($_GET['id']);
    $hasil = $proses->tampil_data_id('Penjualan',$idGet);
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Edit Pelanggan</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
    <body style="background:#586df5;">
		<div class="container">
			<br/>
            <span style="color:#fff";>Selamat Datang, <?php echo $sesi['NamaPelanggan'];?></span>
			<div class="float-right">	
				<a href="index.php" class="btn btn-success btn-md" style="margin-right:1pc;"><span class="fa fa-home"></span> Kembali</a> 
			</div>		
			<br/><br/><br/>
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-lg-6">
					<br/>
					<div class="card">
						<div class="card-header">
						<h4 class="card-title">Edit Pelanggan - <?php echo $hasil['NamaPelanggan'];?></h4>
						</div>
						<div class="card-body">
						<!-- form berfungsi mengirimkan data input 
						dengan method post ke proses crud dengan paramater get aksi edit -->
							<form action="proses/crud.php?aksi=edit" method="POST">
								<div class="form-group">
									<label>IdPenjualan </label>
									<input type="text" value="<?php echo $hasil['IdPenjualan'];?>" class="form-control" name="IdPenjualan">
								</div>
								<div class="form-group">
									<label>NamaPelanggan</label>
									<input type="text" value="<?php echo $hasil['NamaPelanggan'];?>" class="form-control" name="NamaPelanggan">
								</div>
								<div class="form-group">
									<label>NamaBarang</label>
									<input type="text" value="<?php echo $hasil['NamaPelanggan'];?>" class="form-control" name="NamaPelanggan">
								</div>
								<div class="form-group">
									<label>Qty</label>
									<input type="number" value="<?php echo $hasil['Qty'];?>" class="form-control" name="Qty">
								</div>
								<div class="form-group">
									<label>HargaBarang</label>
									<input type="number" value="" placeholder="HargaBarang" class="form-control" name="HargaBarang">
								</div>
								<button class="btn btn-primary btn-md" name="create"><i class="fa fa-edit"> </i> Edit Data</button>
							</form>
						</div>
					</div>
				</div>
				<div class="col-sm-3"></div>
			</div>
		</div>
	</body>
</html>
