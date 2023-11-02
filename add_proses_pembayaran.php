<?php
   include "koneksi.php";
   $random_data_id = random_int(100000000,999999999); 
   $value_id = $random_data_id; 
   $value_nama_cek = $_POST['kd_konsumen'];
   $value_nama1_cek = $_POST['kd_ck'];
   $value_bagian_cek = $_POST['nama'];
   $value_bagian_cek1 = $_POST['no_telepon'];
   $value_bagian_cek2 = $_POST['qty'];
   $value_bagian_cek3 = $_POST['harga'];

   $cek_id = mysqli_query($koneksi,"select *  from pembayaran where kd_pembayaran = '$random_data_id'");
 $cek_validasi = mysqli_num_rows($cek_id);
   
   $perintah_sql = mysqli_query(
    $koneksi,
    "insert into pembayaran values('$value_id', '$value_nama_cek ', '$value_nama1_cek ',' $value_bagian_cek',' $value_bagian_cek1',' $value_bagian_cek2',' $value_bagian_cek3')"
   );

   header('Location:pembayaran.php');
   ?>