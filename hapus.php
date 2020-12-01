<?php 
include 'koneksi.php';
$no_meja = $_GET['no_meja'];
mysqli_query($koneksi,"delete from pesanan where no_meja='$no_meja'");
header("location:forminput1.php");
?>