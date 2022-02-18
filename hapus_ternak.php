<?php
include 'koneksi.php';
$hapus=mysqli_query($koneksi,"DELETE FROM tb_peternakan WHERE id_peternakan='$_GET[id]'");
header('location:data_ternak.php');
?>