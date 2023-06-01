<?php 
      $totalHarga = 0;
      //Pemanggilan Hasil Pilihan Jenis Kelamin Disertai Pengkondisian If_Else
      echo "</br>";
      $jk = $_POST['jk'];
         if ($jk == 'laki') 
         {$hasil = 'Peminjam: Mas '.$nama; } 
         else 
         {$hasil = 'Peminjam: Mbak '.$nama; } 
         echo $hasil;

      //Pemanggilan Hasil Pilihan Pengiriman Barang Disertai Pengkondisian If
      echo "</br>";
      echo "Pengiriman Barang Pinjaman: ";
      if (isset($_POST['check1'])) { 
         $totalHarga += 0;
         echo $_POST['check1']." <br/>"; } 
      if (isset($_POST['check2'])) { 
         $totalHarga += 5000;
         echo $_POST['check2']." <br/>"; } 
      if (isset($_POST['check3'])) {
         $totalHarga += 10000;
         echo $_POST['check3']." <br/>"; } 
      if (isset($_POST['check4'])) { 
         $totalHarga += 5000;
         echo $_POST['check4']." <br/>"; } 
      echo "</br>";

      //Pemanggilan Hasil Pilihan Pemilihan Barang
      echo "Pembayaran Melalui ";
      if (isset($_POST['check5'])) 
         { echo $_POST['check5']." <br/>";
           echo "Nomer Rekening: 123456789";} 
      if (isset($_POST['check6'])) 
         { echo $_POST['check6']." <br/>";
           echo "Nomer Rekening: 987654321";} 
      if (isset($_POST['check7'])) 
         { echo $_POST['check7']." <br/>";
           echo "Nomer Telepon: 089685854668";} 
      if (isset($_POST['check8'])) 
         { echo $_POST['check8']." <br/>";
           echo "Nomer Telepon: 089685854668";}
      echo "</br>";

      //Pemanggilan Hasil Pilihan Barang Sewa
      echo "</br>";
      echo "Barang Yang Dipinjam: " ;
      echo "<br>";
         if (isset($_POST['CanonEOS-3000D'])) {
            $totalHarga += 50000;
            echo $_POST['CanonEOS-3000D']."<br/>"; }
         if (isset($_POST['CanonEOS-4000D'])) {
            $totalHarga += 50000;
            echo $_POST['CanonEOS-4000D']."<br/>"; }
         if (isset($_POST['SonyHXR-NX100'])) {
            $totalHarga += 75000; 
            echo $_POST['SonyHXR-NX100']." <br/>"; } 
         if (isset($_POST['XM8500'])) {
            $totalHarga += 15000; 
            echo $_POST['XM8500']." <br/>"; } 
         if (isset($_POST['AKG-D5'])) {
            $totalHarga += 15000;  
            echo $_POST['AKG-D5']." <br/>"; } 
         if (isset($_POST['SM-58LC'])) {
            $totalHarga += 25000;   
            echo $_POST['SM-58LC']." <br/>"; } 
         if (isset($_POST['Proyektor'])) {
            $totalHarga += 50000; 
            echo $_POST['Proyektor']." <br/>"; } 
         if (isset($_POST['SoftBox'])) {
            $totalHarga += 100000;  
            echo $_POST['SoftBox']." <br/>"; } 
      echo "<br>";
      echo "Total Harga: Rp " . $totalHarga;
      echo "<br>";

      //Variabel Tanggal & Waktu Yang Dipecah Dengan Explode Dan Dijadikan Array
      echo "<br>";
      $TanggalWaktu = date('Y-m-d H:i:s');
      $ArrayTanggalWaktu = explode(' ', $TanggalWaktu);
      $Tanggal = $ArrayTanggalWaktu[0];
      $Waktu = $ArrayTanggalWaktu[1];
      echo "Tanggal: " . $Tanggal . "<br>";
      echo "Waktu: " . $Waktu;
      echo "<br>";

      //Array Yang Dijadikan Perulangan Melalui Perulangan Foreach
      $SyaratKetentuan = [
         "Harap Segera Melakukan Konfirmasi Peminjaman Melalui Kontak.",
         "Sertakan Hasil Screenshot Pada Halaman Ini Beserta Bukti Pembayaran.",
         "Pemesanan Tanpa Konfirmasi Kemungkinan Tidak Akan Terproses.",
         "Segala Bentuk Tindak Kriminal Bisa Dilaporkan Pada Pihak Berwenang.",
         "Melakukan Pemesanan Artinya Menyetujui Syarat & Ketentuan." ];
      echo "<h3>Syarat & Ketentuan:</h3>";
      echo "<ul>";
      foreach($SyaratKetentuan as $PrintSyaratKetentuan){
         echo "<li>$PrintSyaratKetentuan</li>";
      }
      echo "</ul>";
   ?>