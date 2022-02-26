<?php
include ('resource.php');
$konek = new Abdancell();

$action = $_GET['action'];
if($action == "tambahproduk")
{
    $konek->tambah_produk($_POST['kode_barang'],$_POST['nama_barang'],$_POST['kategori'],$_POST['brand'],
    $_POST['hpp'],$_POST['harga_jual'],$_POST['stok']);
    header('location:lihat_produk.php');
}

elseif($action == "editproduk")
{
    $konek->edit_produk($_POST['nama_barang'],$_POST['kategori'],$_POST['brand'],
    $_POST['hpp'],$_POST['harga_jual'],$_POST['stok'],$_POST['kode_barang']);
    header('location:lihat_produk.php');
}

elseif($action == "deleteproduk")
{
    $kode_barang = $_GET['id'];
    $konek->hapus_produk($kode_barang);
    header('location:lihat_produk.php');
}
?>