<!DOCTYPE html>

<!--Head Halaman-->
<head>
  <title>TA PDKP | HOME</title>
  <link href="img/logo.jpg" rel="shortcut icon">
  <link rel="stylesheet" href="CSS/style.css">
</head>

<!--Include File Header dan Navigasi Bar-->
<body>
<?php include 'Header_Footer_Navbar/header.php'; ?>
<?php include 'Header_Footer_Navbar/navbar.php'; ?>

  <main class="main">
  <div class="content">
   <center> <h2>Daftar Barang</h2> </center>
  
   <!--Include File Yang Berisi FM dan OOP Daftar Barang-->
    <?php include 'IsiSampingan/isidaftarbarang_HJ.php';?>
    <!--Hasil Pemanggilan File isidaftarbarang yang ditabelkan (Abstraction Class DeskripsiBarang)-->
    <div>
    <table>
    <tr>
    <th>Canon EOS 3000D
    <center><img src="imgbarang/eos3000d.png" width="100" height="100"/></center>
    </th>
    <td><?php echo $DsCanonEOS3000D->deskripsikamera(); ?></td>
    </tr>

    <tr>
    <th>Canon EOS 4000D
    <center><img src="imgbarang/eos4000d.png" width="100" height="100"/></center>
    </th>
    <td><?php echo $DsCanonEOS4000D->deskripsikamera(); ?></td>
    </tr>

    <tr>
    <th>Sony HXR-NX 100
    <center><img src="imgbarang/HXR-Nx100.png" width="100" height="100"/>
    </th>
    <td><?php echo $DsSonyHXRNX100->deskripsikamera(); ?></td>
    </tr>

    <tr>
    <th>XM8500
    <center><img src="imgbarang/xm8500.png" width="100" height="100"/></center>
    </th>
    <td><?php echo $DsXM8500->deskripsimic(); ?></td>
    </tr>

    <tr>
    <th>AKG D5
    <center><img src="imgbarang/akgd5.png" width="100" height="100"/></center>
    </th>
    <td><?php echo $DsAKGD5->deskripsimic(); ?></td>
    </tr>

    <tr>
    <th>SM-58LC
    <center><img src="imgbarang/sm58lc.png" width="100" height="100"/></center>
    </th>
    <td><?php echo $DsSM58LC->deskripsimic(); ?></td>
    </tr>

    <tr>
    <th>proyektor
    <center><img src="imgbarang/proyektor.png" width="100" height="100"/></center>
    </th>
    <td><?php echo $DsProyektor->deskripsipendukung(); ?></td>
    </tr>

    <tr>
    <th>Softbox
    <center><img src="imgbarang/softbox.png" width="100" height="100"/></center>
    </th>
    <td><?php echo $DsSoftBox->deskripsipendukung(); ?></td>
    </tr>
    </table>

    <!--CSS Halaman DaftarBarang-->
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

    <!--Tombol Menuju Daftar Ketersediaan Barang dan CSS nya-->
    <div class="btn-container">
    <a href="daftarketersediaan.php" class="btn">Ketersediaan Barang</a>
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