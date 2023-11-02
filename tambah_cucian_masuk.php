<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <title>Tambah Barang</title>
    <link href= 
"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
		rel="stylesheet"> 
	<script src= 
"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"> 
	</script> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link href= 
"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
		rel="stylesheet"> 
	<script src= 
"https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"> 
	</script> 
        <style>
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
    <form action="add_proses_cm.php" method="post">
        <table align="center" border="0">
<td>kode konsumen</td>
                <td>:</td>
            <td>
                <input type="text" name="kd_konsumen">
</td></tr>
<tr>
<td>tanggal cucian masuk</td>
                <td>:</td>
            <td>
                <input type="text" name="tgl_cm">
</td></tr>
<td>jenis laundry</td>
                <td>:</td>
            <td>
                <input type="text" name="jenis_laundry">
</td></tr>
<td>qty</td>
                <td>:</td>
            <td>
                <input type="text" name="qty">
</td></tr>
<tr>
    <td>    <button type="submit" class="btn">simpan</button></td></tr>
        </table>
</body>


