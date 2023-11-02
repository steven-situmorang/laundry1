<html>
    <title>latihan</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div>
  <h3 align="center">Laundry Sejahtera</h3>
</div>

    <table  border="0" class="table table-hover table-responsive">
      <tr>
    <td colspan="9." align="center"><a href="tambah_cucian_masuk.php"  class="glyphicon glyphicon-plus">TAMBAHKAN DATA </a></td></tr>
        <td>kode cucian masuk</TD>
        <td>kode konsumen</td>
        <td>tanggal cucian masuk</TD>
        <td>jenis laundry</TD>
        <td>qty</TD>
        <td colspan="2" align="center">aksi</td>
        </tr>
        <?php 
        include "koneksi.php";
        $data = mysqli_query($koneksi,"SELECT * FROM cucian_masuk");
        while ($d = mysqli_fetch_array($data)){
        ?>
        <tr>
        <td><?php echo $d['kd_cm'];?></TD> 
        <td><?php echo $d['kd_konsumen'];?></TD>
        <td><?php echo $d['tanggal_cm'];?></TD>
        <td><?php echo $d['jenis_laundry'];?></TD>  
        <td><?php echo $d['qty'];?></TD> 
        <td><a href="edit_cm.php?update=<?php echo $d['kd_cm'];?>" class="glyphicon glyphicon-pencil">update</td></a>
        <td><a href="delete_cucian_masuk.php?delete=<?php echo $d['kd_cm'];?>" class="glyphicon glyphicon-remove">delete</td></a>
        <?php 
       } ?>
    </table>
    <a href="home.php">back</a>
</html>