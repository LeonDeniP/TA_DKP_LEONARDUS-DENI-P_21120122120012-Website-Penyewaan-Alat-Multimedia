<html>

<!--Head Halaman-->
 <head>
    <title>TA PDKP | PENYEWAAN</title>
    <link href="img/logo.jpg" rel="shortcut icon">
    <link rel="stylesheet" href="CSS/stylepenyewaan.css">
 <head>

<!--CSS Halamn hasilsewa.php-->
 <body>
 <style>
 body {
   font-family: Raleway;
   margin: 0;
   padding: 0;
   box-sizing: border-box;
   }
 </style>  

 <header>
    <h2 class="text-center">HASIL DATA PENYEWA</h2>
    <style>
    header {
      background: #3498db;
      padding: 40px;
      color: white;
      }
    </style>
 </header>
 
<!--CSS Kotak Warna Di Belakang Tulisan Isi-->
 <div class="wrapper">
   <style>
   .wrapper {
      display: flex;
      flex-direction: column;
      align-items: center;
      }

   .wrapper .container {
      width: 1024px;
      border-radius: 8px;
      margin: 20px;
      background: #3498db;
      padding: 20px;
      flex-grow: 1;
      height: 750px;
      }
   </style>

 
 <div class="container bg-white">
 <h2 class="container-header text-center">Mohon ScreenShot Dan Melakukan Konfirmasi</h2>
 
<!--CSS Halaman hasilsewa.php-->
<table class="form">
   <style>
      .form {
      display: flex;
      padding: 16px;
      flex-direction: column;
      height: 300px;
      border-radius: 16px;
      }

      .form-group {
      display: flex;
      flex-direction: column;
      }

      .form-group label {
      margin-bottom: 4px;
      font-size: 18;
      font-weight: lighter;
      }
   </style>

<!--Pemanggilan Hasil Isi Data Diri-->
 <tr>
 <td>Nama Peminjam </td> 
    <td>: <?php echo $nama = $_POST['nama']; ?></td> 
 </tr>
 <tr>
 <td>NIK Peminjam</td> 
    <td>: <?php echo $nik = $_POST['nik']; ?></td> 
 </tr>
 <tr>
 <td>Alamat Peminjam</td> 
    <td>: <?php echo $alamat = $_POST['alamat']; ?></td> 
 </tr>

<!--Pemanggilan File "isihasilsewa.php" Berisi Hasil Submit-->
 <tr>   
 <td>
    <?php include 'IsiSampingan/isihasilsewa.php';?>
 </td>
 </tr>

</table>
 </div>
 </div> 

<!--Tombol Kembali dan CSS Tombol Kembali-->
 <div class="btn-container">
      <a href="penyewaan.php" class="btn">Kembali</a>
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

 </body>



</html>
