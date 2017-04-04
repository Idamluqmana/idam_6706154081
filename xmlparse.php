<html>
	<head>
		<style>
			table, td, th {
					border: 1px solid black;
			}
			table {
					border-collapse: collapse;
					width: 100%;
			}

			th, td {
					text-align: left;
					padding: 8px;
			}

			tr:nth-child(even){background-color: #f2f2f2}

			th {
					background-color: #4CAF50;
					color: white;
					text-align:center;
			}
		</style>
	</head>
	<body>
		<center>
			<h1>Data Peminjaman (XML)</h1>
			<table>
				<tr>
					<th>No.</th>
					<th>ID Pembelian</th>
					<th>ID Customer</th>
					<th>Tgl Pembelian</th>
					<th>Kode Produk</th>
					<th>Jumlah</th>
				</tr>
			<?php
					$daftarpinjam = simplexml_load_file('datapembelian.xml');
					$no = 1;
					foreach ($daftarpinjam as $row){
							echo "<tr>
								<td>".$no++."</td>
								<td>".$row->idpembelian."</td>
								<td>".$row->idcustomer."</td>
								<td>".$row->tglpembelian."</td>
								<td>".$row->kodeproduk."</td>
								<td>".$row->jumlah."</td>
							</tr>";
					}
			?>
			</table>
		</center>
	</body>
</html>
