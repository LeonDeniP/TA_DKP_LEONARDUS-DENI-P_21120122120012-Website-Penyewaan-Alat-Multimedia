<nav class="navbar">
    <!--Pembuatan Menu-Menu Pada Navigasi Bar-->
    <ul>
      <li class="utama"><a href="home.php">Home</a></li>
      <li class="utama"><a href="daftarbarang.php">Daftar Barang</a></li>
      <li class="utama"><a href="Penyewaan.php">Penyewaan</a></li>
      <li class="utama"><a href="Kontak.php">Kontak</a></li>
    </ul>

    <!--CSS Untuk Navigasi Bar-->
    <style>
      .navbar {
      display: flex;
      background-color: #333;
      }
  
      .navbar ul {
      list-style: none;
      margin: 0;
      padding: 0;
      }
      
      .navbar ul li.utama {
      display: inline-table;
      }
      
      .navbar ul li :hover {
      background-color: #2980b9;
      }
      
      .navbar ul li a {
      display: block;
      text-decoration: none;
      line-height: 40px;
      padding: 0 10px;
      color: #fff;
      }
    </style>
  </nav>
