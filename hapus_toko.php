<?php
include 'koneksi.php';
$hapus=mysqli_query($koneksi,"DELETE FROM tb_toko WHERE id_toko='$_GET[id]'");
header('location:data_toko.php');
?>