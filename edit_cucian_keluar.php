<?php
include "koneksi.php";

$id_update_barang = $_GET['update'];

$upd_barang= mysqli_query($koneksi,"select  *  from cucian_keluar where kd_ck ='$id_update_barang' ");
$upd = mysqli_fetch_array($upd_barang);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href= 
"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
		rel="stylesheet"> 
	<script src= 
"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"> 
	</script> 
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}



/* Tambahkan styles ke container form  */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}

/* Lebar maksimum untuk field input */
.form-container input[type=text], .form-container input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* Saat inputan menjadi fokus, lakukan sesuatu */
.form-container input[type=text]:focus, .form-container input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* atur a style untuk submit/login button */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom:10px;
  opacity: 0.8;
}

/* Tambahkan warna merah untuk button cancel */
.form-container .cancel {
  background-color: red;
}

/* Tambahkan beberapa efek hover ke button */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
</head>
<body>

<div> 
		<div class="text-center"> 
      <img src="logo laundry.png" width="50px" height="50px">
			<h1 class="text-success">Laundry Sejahtera</h1> 
		</div> 
		<br><br> 
		<nav class="navbar navbar-expand-lg"> 
			<div class="container-fluid text-success"> 
				<button class="navbar-toggler"
						data-bs-toggle="collapse"
						data-bs-target="#gfgnavbar"> 
					<span class="navbar-toggler-icon"> 
					</span> 
				</button> 
				<div class="collapse navbar-collapse ps-3"
					id="gfgnavbar"> 
					<ul class="navbar-nav"> 
						<li class="nav-item"> 
							<a class="nav-link" href="home.php"> 
							home
							</a> 
						</li> 
						<li class="nav-item"> 
							<a class="nav-link" href="konsumen.php"> 
								konsumen
							</a> 
						</li> 
						<li class="nav-item"> 
							<a class="nav-link" href="pembayaran.php"> 
							pembayaran
							</a> 
						</li> 
            <li class="nav-item"> 
							<a class="nav-link" href="cucian_masuk.php"> 
					cucian masuk
							</a> 
						</li> 
            <li class="nav-item"> 
							<a class="nav-link" href="cucian_keluar.php"> 
							cucian keluar
							</a> 
						</li> 
					</ul> 
				</div> 
			</div> 
		</nav> 
	</div> 
  <form action="edit_proses_cucian_keluar.php" class="form-container" method="post" align="center">
    <h1>Edit</h1>

    <table border="0" align="center">
          <tr>
              <td align="center" class="pink">kode cucian keluar</td>
              <td>:</td>
          <td align="center">
              <input readonly type="text" name="kd_ck" value="<?php echo $upd['kd_ck'];?>">
</td></tr>
<td align="center" class="pink">kode Konsumen</td>
              <td>:</td>
          <td align="center">
              <input type="text" name="kd_konsumen" value="<?php echo $upd['kd_konsumen'];?>">
</td></tr>
<td align="center" class="pink">tanggal cucian keluar</td>
              <td>:</td>
          <td align="center">
              <input type="text" name="tgl_ck" value="<?php echo $upd['tgl_ck'];?>">
</td></tr>
<td align="center" class="pink">jenis laundry</td>
              <td>:</td>
          <td align="center">
              <input type="text" name="jenis_laundry" value="<?php echo $upd['jenis_laundry'];?>">
</td></tr>
<td align="center" class="pink">qty</td>
              <td>:</td>
          <td align="center">
              <input type="text" name="qty" value="<?php echo $upd['qty'];?>">
</td></tr>
<tr>
    <td>
    <button type="submit" class="btn">simpan</button>

</td>
</tr>
</table>
  </form>
</div>

<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

</body>
</html>
