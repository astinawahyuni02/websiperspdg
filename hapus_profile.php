<?php
include 'koneksi.php';
$hapus=mysqli_query($koneksi,"DELETE FROM tb_user WHERE id_user='$_GET[id]'");
header('location:profile.php');
?>