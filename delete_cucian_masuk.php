<?php 

$drop = $_GET['delete'];

//include(dbconnect.php);
include('koneksi.php');

//query hapus
$drop = "DELETE FROM cucian_masuk WHERE kd_cm= '$drop' ";

if (mysqli_query($koneksi , $drop)) {
 # redirect ke index.php
 header("location:cucian_masuk.php");
}
else{
 echo "ERROR, data gagal dihapus". mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>