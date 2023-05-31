<!DOCTYPE html>
<?php //include 'connection.php';?>

<!--Head Halaman-->
<head>
  <title>TA PDKP | KONTAK</title>
  <link href="img/logo.jpg" rel="shortcut icon">
  <link rel="stylesheet" href="CSS/style.css">
</head>

<!--Include File Header dan Navigasi Bar-->
<body>
<?php include 'Header_Footer_Navbar/header.php'; ?>
<?php include 'Header_Footer_Navbar/navbar.php'; ?>

  <main class="main">

<!--Pembuatan Kalimat Pojok Promosi Menggunakan Inheritance-->
    <div class="content">
    <h2>Pojok Promosi</h2>
      <?php
        class namanyajugapromosi {
            protected $isian;
            
            public function __construct($isian) {
                $this->isian = $isian;
            }
            
            public function Harga() {
                echo $this->isian . " Terjangkau.<br>";
            }
            
            public function partner() {
                echo $this->isian . " Banyak Partner.<br>";
            }
        }

        class tanya extends namanyajugapromosi {
            public function tanya() {
                echo $this->isian . " Rudi Mulmed?<br>";
            }
        }

        class jawab extends namanyajugapromosi {
            public function jawab() {
                echo $this->isian . " Berkualitas.<br>";
            }
        }

        $tanya = new tanya("Kenapa Harus");
        $jawab = new jawab("Karena Rudi Mulmed");

        $tanya->tanya();

        $jawab->harga();
        $jawab->partner();
        $jawab->jawab();
        ?>

    <br>
    <hr />
      
<!--Pembuatan Kalimat Ruko-Ruko Cabang-->
      <p>
      <h2>Ruko Cabang</h2>
        Semarang : Jalan Menoreh Raya No 106, Sampangan, Kota Semarang. <br>
        Jakarta  : Jalan Taman Fatahillah No.1, Pinangsia, Jakarta Barat. <br>
        Jogja    : Jalan Malioboro, Sosromenduran, Gedong Tengen, Kota Yogyakarta. <br>
      </p>

      <br>
      <hr />

<!--Pembuatan Rating Bintang Dengan Pengkondisian dan Perulangan-->
      <h2>Berapakah Rating Untuk Web Ini?</h2>
        <?php
        $ratingbintang = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (isset($_POST["rating"]) && is_numeric($_POST["rating"]) && $_POST["rating"] >= 0 && $_POST["rating"] <= 5) {
          $ratingbintang = $_POST["rating"];
          } else {
          echo "Rating tidak valid!";
          }
        }
        ?>

        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <div class="rating">
        <?php
            $maxbintang = 5;
            for ($i = 1; $i <= $maxbintang; $i++) {
            $hasilbintang = ($i == $ratingbintang) ? "checked" : "";
            echo '<input type="radio" id="star'.$i.'" name="rating" value="'.$i.'" '.$hasilbintang.'>';
            echo '<label for="star'.$i.'"></label>';
        }
        ?>

<!--CSS Untuk Rating Bintang-->
        <style>
          .rating {
          display: inline-block;}

          .rating input {
          display: none;}

          .rating label {
          float: right;
          color: #ddd;
          font-size: 30px;
          padding: 0;
          cursor: pointer;}

          .rating label:before {
          content: '\2605';}

          .rating input:checked ~ label {
          color: #ffdd00;}

          .rating label:hover,
          .rating label:hover ~ label {
          color: #ffdd00;}
        </style>
        </div>
        </form>

<!--Pemanggilan Gambar Media Partner-->
      <br>
      <img src="img/prambors.png" width="100" height="100"/>
      <img src="img/cnbc.png" width="100" height="100"/>
      <img src="img/bca.jpg" width="100" height="100"/>
      <img src="img/cstv.png" width="100" height="100"/>
    </div>

<!--Pembuatan Sidebar Kontak-->
    <aside class="sidebar">
      <center>
      <img src="img/leon.png" style="width: 100px;height: 100px;border-radius: 100%;" />
      <h2>KONTAK</h2>
      </center>
      <p style="text-align: justify">Silahkan Menghubungi Kontak Di Bawah Ini Untuk Melakukan Konfirmasi Pembayaran</p>
      <hr />
        <div style="text-align: left;width:70%;">
        <a href="https://api.whatsapp.com/send?phone=6289685854668"><img src="img/wa.png" width="50" height="50" style="float:left; margin:0 8px 4px 0"></a>Kontak WA : 0896-8585-4668</div>
        <br>
        <br>
        <div style="text-align: left;width:50%;">
        <a href="http://line.me/ti/p/~leondeni"><img src="img/line.png" width="50" height="50" style="float:left; margin:0 8px 4px 0"></a>ID Line : leondeni</div>
        <br>
        <br>
        <div style="text-align:left;width:100%;">
        <a href="https://www.instagram.com/leonardusdeni/"> <img src="img/ig.png" width="50" height="50" style="float:left; margin:0 8px 4px 0"></a>ID Instagram : @leonardusdeni</div>
    </aside>
  </main>

<!--Pemanggilan Footer-->
<?php include 'Header_Footer_Navbar/footer.php'; ?>
</body>
</html>