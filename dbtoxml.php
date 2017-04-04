<?php
	include "connection.php";
	$query = mysqli_query($link, "SELECT * FROM pembelian");
	$datapembelian = new SimpleXMLElement('<datapembelian/>');

	while($row = mysqli_fetch_array($query)) {
			$data = $datapembelian->addChild('data');
			$data->addChild("idpembelian", "".$row['idpembelian']."");
			$data->addChild("idcustomer", "".$row['idcustomer']."");
			$data->addChild("tglpembelian", "".$row['tglpembelian']."");
			$data->addChild("kodeproduk", "".$row['kodeproduk']."");
			$data->addChild("jumlah", "".$row['jumlah']."");
	}

	Header('Content-type: text/xml');
	print($datapembelian->asXML());
	file_put_contents('datapembelian.xml',$datapembelian->saveXML()); //export to "data.xml"
?>
