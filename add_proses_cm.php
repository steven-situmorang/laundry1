<?php
   include "koneksi.php";
   $random_data_id = random_int(100000000,999999999); 
   $value_id = $random_data_id; 
   $value_nama_cek = $_POST['kd_konsumen'];
   $value_nama1_cek = $_POST['tgl_cm'];
   $value_bagian_cek = $_POST['jenis_laundry'];
   $value_bagian_cek1 = $_POST['qty'];

   $cek_id = mysqli_query($koneksi,"select *  from cucian_masuk where kd_cm = '$random_data_id'");
 $cek_validasi = mysqli_num_rows($cek_id);
   
   $perintah_sql = mysqli_query(
    $koneksi,
    "insert into cucian_masuk values('$value_id', '$value_nama_cek ', '$value_nama1_cek ',' $value_bagian_cek',' $value_bagian_cek1')"
   );

   header('Location:cucian_masuk.php');
   ?>