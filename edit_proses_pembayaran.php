<?php
 include 'koneksi.php';

 $kd = $_POST['kd_pembayaran'];
 $kd1 = $_POST['kd_konsumen'];
 $jenis_order = $_POST['kd_ck'];
 $jenis_order1 = $_POST['nama'];
 $jenis_order2 = $_POST['no_telepon'];
 $jenis_order3 = $_POST['qty'];
 $jenis_order4 = $_POST['harga'];

 $upd_barang = mysqli_query($koneksi,"UPDATE pembayaran SET  kd_konsumen='$kd1', kd_ck='$jenis_order', nama='$jenis_order1', no_telepon='$jenis_order2', qty='$jenis_order3', harga='$jenis_order4'  WHERE kd_pembayaran='$kd' ");
 header('Location:pembayaran.php');
 ?>