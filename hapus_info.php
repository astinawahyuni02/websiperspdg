<?php
include 'koneksi.php';
$hapus=mysqli_query($koneksi,"DELETE FROM tb_info WHERE id_info='$_GET[id]'");
header('location:info.php');
?>