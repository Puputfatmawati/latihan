<?php

include 'koneksi.php';

$nama          = $_POST['nama'];
$alamat        = $_POST['alamat'];
$nama_barang   = $_POST['nama_barang'];
$harga          = $_POST['harga'];
$jumlah        = $_POST['jumlah'];
$total          = $harga*$jumlah;

$query = "INSERT INTO input SET nama='$nama', alamat='$alamat', nama_barang='$nama_barang', harga='$harga', jumlah='$jumlah', total='$total'";

mysqli_query($koneksi, $query);
header("location:tabel.php");
?>