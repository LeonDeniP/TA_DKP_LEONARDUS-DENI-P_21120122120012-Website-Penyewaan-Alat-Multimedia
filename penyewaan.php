<!DOCTYPE html>

<!--Head Halaman-->
<head>
  <title>TA PDKP | PENYEWAAN</title>
  <link href="img/logo.jpg" rel="shortcut icon">
  <link rel="stylesheet" href="CSS/style.css">
</head>

<!--Include File Header dan Navigasi Bar-->
<body>
<?php include 'Header_Footer_Navbar/header.php'; ?>
<?php include 'Header_Footer_Navbar/navbar.php'; ?>

  <main class="main">

  <div class="wrapper">
    <div class="container bg-white">
    <h2 class="container-header text-center">Silahkan Isi</h2>
    <form class="form" action="hasilsewa.php" method="post" id="form">

    <!--CSS Halaman penyewaan.php-->
    <style>
        input[type=text],
        input[type=date] {
        font-family: Raleway;
        background: #F5F1FF;
        border: 2px solid #3498db;
        border-radius: 8px;
        padding: 10px;
        box-sizing: border-box;
        margin-bottom: 8px;
        font-size: 12px;
        }

        input[type=text],
        input[type=date],
        .btn-submit:focus {
        outline: none;
        }
        .text-center {
        text-align: center;
        }
        .form-book {
        margin: auto 0;
        }
    </style>

    <!--Isian Data Diri-->
    <div class="form-group form-book">
    <label for="nama">Nama Anda</label>
    <input type="text" id="title" name="nama" required>
    </div>
    <div class="form-group form-book">
    <label for="nik">NIK Anda</label>
    <input type="text" id="title" name="nik" required>
    </div>
    <div class="form-group form-book">
    <label for="alamat">Alamat Anda</label>
    <input type="text" id="title" name="alamat" required>
    </div>
    <br>

    <!--Isian Pilihan Jenis Kelamin-->
    <div class="form-group form-book">
    <label for="jk">Jenis Kelamin</label>
        <select class="form-select" aria-label="Default select example" name="jk" id="jk">
            <option selected>Pilih Jenis kelamin</option>
                <option value="laki">Laki-laki</option>
                <option value="perempuan">Perempuan</option>
        </select>
    </div>
    <br>
 
    <!--Isian Pilihan Pembayaran Barang-->
    <div class="form-group form-book">
        <label for="pmntn">Pengambilan</label>
    
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="check1" value="Datang Ke Toko" id="flexCheckDefault">
            <label class="form-check-label">Datang Ke Toko</label>
        </div>
    
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="check2" value="Diantar (Dalam Semarang)" id="flexCheckDefault">
            <label class="form-check-label">Diantar (Dalam Semarang)</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="check3" value="Diantar (Luar Semarang)" id="flexCheckDefault">
            <label class="form-check-label">Diantar (Luar Semarang) </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="check4" value="Bertemu (COD)" id="flexCheckDefault">
            <label class="form-check-label"> Bertemu (COD) </label>
        </div>
    </div>
    <br>

    <!--Isian Pilihan Pembayaran-->
    <div class="form-group form-book">
        <label for="pmntn">Pembayaran</label>
    
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="check5" value="BNI" id="flexCheckDefault">
            <label class="form-check-label">BNI</label>
        </div>
    
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="check6" value="BRI" id="flexCheckDefault">
            <label class="form-check-label">BRI</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="check7" value="DANA" id="flexCheckDefault">
            <label class="form-check-label">DANA</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="check8" value="GOPAY" id="flexCheckDefault">
            <label class="form-check-label">GOPAY</label>
        </div>
    </div>
    <br>

    <!--Isian Barang Yang Dipinjam-->
    <div class="form-group form-book">
        <label for="pmntn">Barang Yang Ingin Dilakukan Penyewaan</label>
    
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="CanonEOS-3000D" value="CanonEOS-3000D" id="flexCheckDefault">
            <label class="form-check-label">Canon EOS 3000D</label>
        </div>
    
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="CanonEOS-4000D" value="CanonEOS-4000D" id="flexCheckDefault">
            <label class="form-check-label">Canon EOS 4000D</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="SonyHXR-NX100" value="SonyHXR-NX100" id="flexCheckDefault">
            <label class="form-check-label">Sony HXR-NX 100</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="XM8500" value="XM8500" id="flexCheckDefault">
            <label class="form-check-label">XM8500</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="AKG-D5" value="AKG-D5" id="flexCheckDefault">
            <label class="form-check-label">AKG D5</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="SM-58LC" value="SM-58LC" id="flexCheckDefault">
            <label class="form-check-label">SM-58LC</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="Proyektor" value="Proyektor" id="flexCheckDefault">
            <label class="form-check-label">Proyektor</label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="SoftBox" value="SoftBox" id="flexCheckDefault">
            <label class="form-check-label">SoftBox</label>
        </div>
    </div>

    <!--Tombol Button Submit dan CSS Tombol Submit-->
    <input type="submit" value="Submit" name="Submit" class="btn-submit">
    <style>
    .btn-submit-container {
        display: flex;
        justify-content: center;
        margin-top: 30px;
        }
        .btn-submit {
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
        .btn-submit:hover {
        background-color: #00468b;
        }
    </style>
    </form>
    </div>
    </div>
  </main>

<!--Include File Footer-->
<?php include 'Header_Footer_Navbar/footer.php'; ?>
</body>
</html>