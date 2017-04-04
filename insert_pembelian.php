<?php
	include 'connection.php';

	if(isset($_POST['submit'])){
		$tglpembelian = $_POST['tglPembelian'];
		$idcustomer = $_POST['idCustomer'];
		$kodeproduk = $_POST['kodeproduk'];
		$jumlah= $_POST['jumlah'];
		$query = mysqli_query($link,"INSERT INTO pembelian VALUES ('','$tglpembelian','$idcustomer','$kodeproduk','$jumlah')");
		if($query){
			echo "
			<script>
				alert('Pembelian pada ".$tglpembelian." berhasil disimpan. Pembelian Kode Produk : ".$kodeproduk.".');
				window.location.href='index.php';
			</script>";
		}else{
			echo "
			<script>
				alert('Pembelian pada ".$tglpembelian." gagal disimpan. Pembelian Kode Produk : ".$kodeproduk.".');
			</script>";
		}
	}else{
		echo "
		<script>
			alert('Produk harus dipilih!');
			window.location.href='index.php';
		</script>";
	}
?>
