<?php
 include 'koneksi.php';

 $kd = $_POST['kd_cm'];
 $kd1 = $_POST['kd_konsumen'];
 $jenis_order = $_POST['tanggal_cm'];
 $jenis_order1 = $_POST['jenis_laundry'];
 $jenis_order2 = $_POST['qty'];

 $upd_barang = mysqli_query($koneksi,"UPDATE cucian_masuk SET  kd_konsumen='$kd1', tanggal_cm='$jenis_order', jenis_laundry='$jenis_order1', qty='$jenis_order2'  WHERE kd_cm='$kd' ");
 header('Location:cucian_masuk.php');
 ?>