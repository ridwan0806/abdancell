<?php
include ('resource.php');
$produk = new Abdancell();
$show = $produk->lihat_produk();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>halaman produk</title>
</head>
<body>
	<table border="1">
		<tr>
			<td>NO</td>
			<td>ID</td>
			<td>Produk</td>
			<td>Kategori</td>
			<td>Branch</td>
			<td>HPP</td>
			<td>Harga Jual</td>
			<td>Stok</td>
		</tr>
		<tr>
			<?php
				$no = 1;
				foreach($show as $row){
			?>
			<td><?php echo $no++; ?></td>
			<td><?php echo $row['kode_barang']; ?></td>
			<td><?php echo $row['nama_barang']; ?></td>
			<td><?php echo $row['kategori']; ?></td>
			<td><?php echo $row['brand']; ?></td>
			<td><?php echo $row['hpp']; ?></td>
			<td><?php echo $row['harga_jual']; ?></td>
			<td><?php echo $row['stok']; ?></td>
		</tr>
			<?php
		}
			?>
	</table>
</body>
</html>