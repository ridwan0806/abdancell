<?php
include ('resource.php');
$koneksi = new Abdancell();
$kode_barang = $_GET['id'];

if(! is_null($kode_barang))
{
    $row = $koneksi->get_kode_produk($kode_barang);
}
else
{
    header('location:lihat_produk.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman edit produk</title>
</head>
<body>
    <form method="post" action="produk.php?action=editproduk">
        <table>
        <tr>
				<td></td>
				<td></td>
				<td><input type="hidden" name="kode_barang" value="<?php echo $row['kode_barang']; ?>"></td>
			</tr>
			<tr>
				<td>Nama Produk</td>
				<td>:</td>
				<td><input type="text" name="nama_barang" value="<?php echo $row['nama_barang']; ?>"></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td>:</td>
				<td><input type="text" name="kategori" value="<?php echo $row['kategori']; ?>"></td>
			</tr>
			<tr>
				<td>Brand</td>
				<td>:</td>
				<td><input type="text" name="brand" value="<?php echo $row['brand']; ?>"></td>
			</tr>
			<tr>
				<td>Harga Pokok</td>
				<td>:</td>
				<td><input type="text" name="hpp" value="<?php echo $row['hpp']; ?>"></td>
			</tr>
			<tr>
				<td>Harga Jual</td>
				<td>:</td>
				<td><input type="text" name="harga_jual" value="<?php echo $row['harga_jual']; ?>"></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td>:</td>
				<td><input type="text" name="stok" value="<?php echo $row['stok']; ?>"></td>
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