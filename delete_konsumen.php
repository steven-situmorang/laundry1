<?php 

$drop = $_GET['delete'];

//include(dbconnect.php);
include('koneksi.php');

//query hapus
$drop = "DELETE FROM konsumen WHERE kd_konsumen= '$drop' ";

if (mysqli_query($koneksi , $drop)) {
 # redirect ke index.php
 header("location:konsumen.php");
}
else{
 echo "ERROR, data gagal dihapus". mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>