<?php
 include 'koneksi.php';

 $kd = $_POST['kd_ck'];
 $kd1 = $_POST['kd_konsumen'];
 $jenis_order = $_POST['tgl_ck'];
 $jenis_order1 = $_POST['jenis_laundry'];
 $jenis_order2 = $_POST['qty'];

 $upd_barang = mysqli_query($koneksi,"UPDATE cucian_keluar SET  kd_konsumen='$kd1', tgl_ck='$jenis_order', jenis_laundry='$jenis_order1', qty='$jenis_order2'  WHERE kd_ck='$kd' ");
 header('Location:cucian_keluar.php');
 ?>