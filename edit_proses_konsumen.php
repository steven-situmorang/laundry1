<?php
 include 'koneksi.php';

 $kd = $_POST['kd_konsumen'];
 $jenis_order = $_POST['nama'];
 $jenis_order1 = $_POST['alamat'];
 $jenis_order2 = $_POST['no_telp'];

 $upd_barang = mysqli_query($koneksi,"UPDATE konsumen SET nama='$jenis_order', alamat='$jenis_order1', no_telp='$jenis_order2'  WHERE kd_konsumen='$kd' ");
 header('Location:konsumen.php');
 ?>