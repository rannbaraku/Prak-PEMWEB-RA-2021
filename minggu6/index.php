<head>
	<title> Minggu 6 </title>

    <!--link untuk css file-->
    <link rel="stylesheet" type="text/css" href="style.css">

    <!--link untuk font yang saya gunakan-->
    <link rel="preconnect" href="https://fonts.googleapis.com"> 

</head>
<body>
	<!--judul dokumen-->
	<h1 align="center">Toko Buah ITERA</h1>
	<hr>

	<center>
		<!--formuir pengisian-->
		<form method="POST" onsubmit="hasil()">
			<table>
				<thead>
					<!--menuliskan dalam bentuk tabel-->
					<tr>
						<td colspan="3" align="center" width="500px" class="title">Masukan Buah pada Keranjang</td>
					</tr>
					<!--header tabel-->
					<tr align="center" class="judul">
						<td >Nama Buah</td>
						<td >Harga </td>
						<td >Jumlah kilogram </td>
					</tr>
				</thead>
				<tbody>
						<!--keterangan untuk buah mangga-->
						<tr align="center">
							<td><label >Mangga</label></td>
							<td><label >Rp. 15.000</label></td>
							<td><input type="number" min="0" name="mango" style="width: 50px" placeholder="0" value="0" ></td>
						</tr>

						<!--lKeterangn untuk buah jambu-->
						<tr align="center">
							<td><label >Jambu</label></td>
							<td><label >Rp. 13.000</label></td>
							<td><input type="number" min="0" name="guava" style="width: 50px" placeholder="0" value="0" ></td>
						</tr>

						<!--keterangan untuk buah salak-->
						<tr align="center">
							<td><label >Salak</label></td>
							<td><label >Rp. 10.000</label></td>
							<td><input type="number" min="0" name="snakefruit" style="width: 50px" placeholder="0" value="0" ></td>
						</tr>
				</tbody>
			</table><br>
			<!--tombol yang digunakan-->
			<button  id="btn" name="pesan" >Hitung</button><br><br>
		</form>
		
		<table>
			<thead>
				<tr>
					<!--tabel untuk hasil belanjaan-->
					<td colspan="3" align="center" width="500px" class="title" >Berikut harga yang harus dibayar</td>
				</tr>
				<!--header tabelhasil belanjaan-->
				<tr align="center" class="judul">
					<td>Nama Buah</td>
					<td>Jumlah kilogram </td>
					<td>Harga(Rupiah)</td>
				</tr>
			<!--hasil belanjaan akan ditampilkan disini-->
			</thead>
			<tbody id="cetak" align="center">
				
			</tbody>
		</table>
	</center>
</body>

<!--memanggil file fungsi untuk perhitungan-->
<?php include('fungsi.php') ?>
<!--menggunakan java sctip untuk mengubah DOM dari tabel hasil agar tidak perlu refresh-->
<script type="text/javascript">
	function hasil() {

		//mengambil dom berdasarkan id 
		var tulis = document.getElementById('cetak');
		var text ="";

		//memanggil ffungsi php
		<?php for ($i=0; $i < $belanja->getIterasi(); $i++) {  ?>

			//memanggil fungsi nama buah pada php
			var nama_buah = '<?php echo $belanja->getNamaBuah($i); ?>';

			//memanggil fungsi jumlah buah pada php
			var jml_kg = '<?php echo $belanja->getJumlahBuah($i); ?>';

			//memanggil fungsi harga buah pada php
			var harga_buah = '<?php echo $belanja->getHargaBeli($i); ?>';
			text += " <tr> <td> "+nama_buah+"</td> "+" <td> "+jml_kg+"</td> "+" <td> "+harga_buah+"</td> </tr>";
			
		<?php } ?>

		//memanggil fungsi total belanjaan pada php
		var total = <?php echo $belanja->getTotal(); ?>	
		text += "<tr> <td></td> <td>Total</td> <td>"+total+"</td> </tr>"

		//mengubah dom
		tulis.innerHTML = text;

	}
	//hasil ditampilkan
	hasil();
</script>