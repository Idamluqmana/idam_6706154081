<?php
	include "connection.php";
	$query = mysqli_query($link,"SELECT * FROM pembelian");
	$datapembelian = array();
	$data = array();
	$contents = array();

/*
	foreach($query as $row) {
		$contents[] = $row;
	}
*/

	while($row = mysqli_fetch_array($query)) {
		$contents[] = array(
			'idpembelian' => ''.$row['idpembelian'].'',
			'idcustomer' => ''.$row['idcustomer'].'',
			'tglpembelian' => ''.$row['tglpembelian'].'',
			'kodeproduk' => ''.$row['kodeproduk'].'',
			'jumlah' => ''.$row['jumlah'].''
		);
	}

	$data['data'] = $contents;
	$datapembelian['datapembelian'] = $data;

	$json_data = json_encode($datapembelian, JSON_PRETTY_PRINT);
	echo $json_data;
	file_put_contents('datapembelian.json', $json_data); //export to "data.json"
?>
