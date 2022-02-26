<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman tambah produk</title>
</head>
<body>
	<form method="post" action="produk.php?action=tambahproduk">
		<table>
			<tr>
				<td>ID Produk</td>
				<td>:</td>
				<td><input type="text" name="kode_barang"></td>
			</tr>
			<tr>
				<td>Nama Produk</td>
				<td>:</td>
				<td><input type="text" name="nama_barang"></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td>:</td>
				<td><input type="text" name="kategori"></td>
			</tr>
			<tr>
				<td>Brand</td>
				<td>:</td>
				<td><input type="text" name="brand"></td>
			</tr>
			<tr>
				<td>Harga Pokok</td>
				<td>:</td>
				<td><input type="text" name="hpp"></td>
			</tr>
			<tr>
				<td>Harga Jual</td>
				<td>:</td>
				<td><input type="text" name="harga_jual"></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td>:</td>
				<td><input type="text" name="stok"></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="proses" value="simpan"></td>
			</tr>
		</table>

	</form>
</body>
</html>