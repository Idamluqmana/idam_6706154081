<?php
	include 'connection.php';
	$jenis = $_GET['jenis'];
	if(!$link){
		die("Koneksi gagal");
	}
	$sql = mysqli_query($link, "SELECT * FROM produk WHERE jenis = '$jenis'");
	
	if(mysqli_num_rows($sql) > 0){
		echo "<select name='kodeproduk' id='kodeproduk' class='form-control' required><option value=''>--Pilih Produk--</option>";
		while($data = mysqli_fetch_array($sql)){
			echo "<option value='".$data['kodeproduk']."'>".$data['namaproduk']."</option>";
		}
		echo "</select>";
	}
?>