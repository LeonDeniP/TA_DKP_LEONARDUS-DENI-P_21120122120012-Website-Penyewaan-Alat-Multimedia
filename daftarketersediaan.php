<!DOCTYPE html>
<html>

<!--Head Halaman-->
<head>
  <title>TA PDKP | DAFTAR KETERSEDIAAN</title>
  <link href="img/logo.jpg" rel="shortcut icon">
  <link rel="stylesheet" href="CSS/style.css">
</head>

<!--Include File Header dan Navigasi Bar-->
<body>
<?php include 'Header_Footer_Navbar/header.php'; ?>
<?php include 'Header_Footer_Navbar/navbar.php'; ?>

<main class="main">
<div class="content">
  <center> <h2>Ketersediaan Barang</h2> </center>

<!--Include File Yang Berisi FM dan OOP Daftar Barang-->
<?php include 'IsiSampingan/isidaftarbarang_HJ.php';?>

<!--Hasil Pemanggilan File isidaftarbarang yang ditabelkan (Abstraction Class HJBarang)-->
<div>
<table>
 <tr>
 <th>Canon EOS 3000D</th>
 <td><?php echo $HJCanonEOS3000D->HargaJumlah(); ?></td>
 </tr>
 
 <tr>
 <th>Canon EOS 4000D</th>
 <td><?php echo $HJCanonEOS4000D->HargaJumlah(); ?></td>
 </tr>

 <tr>
 <th>Sony HXR-NX 100</th>
 <td><?php echo $HJSonyHXRNX100->HargaJumlah(); ?></td>
 </tr>

 <tr>
 <th>XM8500</th>
 <td><?php echo $HJXM8500->HargaJumlah(); ?></td>
 </tr>

 <tr>
 <th>AKG D5</th>
 <td><?php echo $HJAKGD5->HargaJumlah(); ?></td>
 </tr>

 <tr>
 <th>SM-58LC</th>
 <td><?php echo $HJSM58LC->HargaJumlah(); ?></td>
 </tr>

 <tr>
 <th>Proyektor</th>
 <td><?php echo $HJProyektor->HargaJumlah(); ?></td>
 </tr>

 <tr>
 <th>Softbox</th>
 <td><?php echo $HJSoftBox->HargaJumlah(); ?></td>
 </tr>
</table>

<!--CSS Halaman daftarketersediaan.php-->
<style>
      table {
        margin: 20px auto;
        border-collapse: collapse;
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        background-color: #fff;
        width: 80%;
        max-width: 600px;
        border-radius: 10px;
        overflow: hidden;
      }
      th, td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        font-size: 18px;
        font-weight: normal;
        color: #555;
      }
      th {
        background-color: #f2f2f2;
        font-size: 20px;
        color: #666;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: bold;
      }
      td {
        font-weight: 500;
      }
</style>
</div>

<!--Tombol Menuju Daftar Barang dan CSS nya-->
  <div class="btn-container">
    <a href="daftarbarang.php" class="btn">Daftar Barang</a>
    <style>
        .btn-container {
        display: flex;
        justify-content: center;
        margin-top: 30px;
        }
        .btn {
        display: inline-block;
        background-color: #3498db;
        color: #fff;
        border: none;
        padding: 15px 30px;
        text-align: center;
        text-decoration: none;
        font-size: 18px;
        font-weight: bold;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.3);
        transition: background-color 0.3s;
        margin: 10px;
        }
        .btn:hover {
        background-color: #00468b;
        }
    </style>
    </div>
</div>

</main>


<!--Include File Footer-->
<?php include 'Header_Footer_Navbar/footer.php'; ?>
</body>
</html>