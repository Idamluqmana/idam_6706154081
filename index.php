<!DOCTYPE html>
<html>
	<head>
		<title>Input Peminjaman</title>
		<link rel="stylesheet" type="text/css" href="css/sidebar.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

		<script src="scriptajax.js"></script>
	</head>
	<body>
		<div id="container">
			<ul class="nav nav-pills nav-stacked sidebar">
				 <li role="presentation" class="active"><a href="index.php">Tambah Pembelian</a></li>
				 <li role="presentation"><a href="dbtoxml.php">DB to XML</a></li>
				 <li role="presentation"><a href="dbtojson.php">DB to JSON</a></li>
				 <li role="presentation"><a href="xmlparse.php">View XML</a></li>
				 <li role="presentation"><a href="jsonparse.php">View JSON</a></li>
			</ul>
			<div id="content">
				<form class="form-horizontal" method="post" action="insert_pembelian.php">
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-4 control-label">Tanggal Pembelian</label>
						<div class="col-sm-6">
								<input type="date" class="form-control" id="tglPembelian" name="tglPembelian" required/>
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-4 control-label">Customer</label>
						<div class="col-sm-6">
							<select name="idCustomer" id="idCustomer" class="form-control" required>
								<option>--Pilih Customer--</option>
								<?php
									include 'connection.php';
									$sql = mysqli_query($link, "SELECT * FROM customer");
									while($data = mysqli_fetch_array($sql)){
										echo "<option value='".$data['idcustomer']."'>".$data['namacustomer']."</option>";
									}
								?>
							</select>
						</div>
					</div>
				
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-4 control-label">Jenis Produk</label>
						<div class="col-sm-6">
							<select name="jenis" id="jenis" class="form-control" onChange="showProduk(this.value)" required>
								<option>--Pilih Jenis--</option>
								<?php
									include 'connection.php';
									$sql = mysqli_query($link, "SELECT * FROM produk");
									while($data = mysqli_fetch_array($sql)){
										echo "<option value='".$data['jenis']."'>".$data['jenis']."</option>";
									}
								?>
							</select>
						</div>
					</div>
					
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-4 control-label"></label>
						<div class="col-sm-6">
							<div id="divProduk"></div>
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-4 control-label">Jumlah</label>
						<div class='col-sm-6'>
							<input type='text' class='form-control' id='jumlah' name='jumlah' required/>		
						</div>
					</div>
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-4 control-label"></label>
						<div class="col-sm-6">
							<button type="submit" class="btn btn-success" name="submit">Submit</button>
							<button type="reset" class="btn btn-default" name="reset">Reset</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>
