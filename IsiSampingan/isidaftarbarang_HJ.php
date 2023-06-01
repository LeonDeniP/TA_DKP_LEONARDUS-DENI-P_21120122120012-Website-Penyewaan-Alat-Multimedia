<?php
//Membuat Abstract Class DeskripsiBarang
abstract class DeskripsiBarang {
  protected string $namaBarang;
  protected string $merkBarang;
  protected string $madeInBarang;
  protected string $fungsiPendukung;

  // Function Method Untuk Setter (Nama Barang, Merek Barang, Asal Barang, dan Fungsi Barang Pendukung)
  public function __construct(string $namaBarang, string $merkBarang, string $madeInBarang, string $fungsiPendukung) {
    $this->namaBarang = $namaBarang;
    $this->merkBarang = $merkBarang;
    $this->madeInBarang = $madeInBarang;
    $this->fungsiPendukung = $fungsiPendukung;
  }

  // Function Method Untuk Getter (Nama Barang, Merek Barang, Asal Barang, dan Fungsi Barang Pendukung)
  public function getNamaBarang(): string {return $this->namaBarang;}
  public function getMerkBarang(): string {return $this->merkBarang;}
  public function getMadeInBarang(): string {return $this->madeInBarang;}
  public function getFungsiPendukung(): string {return $this->fungsiPendukung;}

  // Function Return Type Untuk Mengeluarkan Kalimat Dan Melakukan Pemanggilan Getter 
  //(Nama Barang, Merek Barang, Asal Barang, dan Fungsi Barang Pendukung)
  public function deskripsikamera(): string {
   $deskripsikamera = "{$this->getNamaBarang()} adalah sebuah kamera dengan pabrikan 
   {$this->getMerkBarang()}. Kamera {$this->getNamaBarang()} ini dibuat di negara {$this->getMadeInBarang()}.";
   return $deskripsikamera;}      
  public function deskripsimic(): string {
   $deskripsimic = "{$this->getNamaBarang()} merupakan sebuah mic yang dibuat oleh 
   merek {$this->getMerkBarang()}. Mic {$this->getNamaBarang()} ini dibuat di negara {$this->getMadeInBarang()}.";
   return $deskripsimic;}
  public function deskripsipendukung(): string {
   $deskripsipendukung = "{$this->getNamaBarang()} adalah pembantu bidang multimedia. 
   Fungsi dari {$this->getNamaBarang()} adalah untuk {$this->getfungsiPendukung()}.";
   return $deskripsipendukung;}
}

//Inheritance Class Nama-Nama Barang Dengan DiskripsiBarang
class DsCanonEOS3000D extends DeskripsiBarang {}
class DsCanonEOS4000D extends DeskripsiBarang {}
class DsSonyHXRNX100 extends DeskripsiBarang {}
class DsXM8500 extends DeskripsiBarang {}
class DsAKGD5 extends DeskripsiBarang {}
class DsSM58LC extends DeskripsiBarang {}
class DsProyektor extends DeskripsiBarang {}
class DsSoftBox extends DeskripsiBarang {}

//Pembuatan Array (Nama Barang, Merk Barang, Asal Kamera)
$DsCanonEOS3000D = new DsCanonEOS3000D('Canon EOS 3000D', 'Canon', 'Jepang','');
$DsCanonEOS4000D = new DsCanonEOS4000D('Canon EOS 4000D', 'Canon', 'Jepang','');
$DsSonyHXRNX100 = new DsSonyHXRNX100('Sony HXR-NX 100', 'Sony', 'Jepang','');
$DsXM8500 = new DsXM8500('XM8500', 'Behringer', 'Jerman','');
$DsAKGD5 = new DsAKGD5('AKG D5', 'AKG', 'Amerika Serikat','');
$DsSM58LC = new DsSM58LC('SM-58LC', 'Shure', 'Amerika Serikat','');
$DsProyektor = new DsProyektor('Proyektor', '', '','menampilkan gambar atau video pada layar');
$DsSoftBox = new DsSoftBox('Softbox', '', '','membantu dalam penerangan ketika mangambil gambar atau video');

//------------------------------------------------------------------------------------------------------------------------------------------//
//------------------------------------------------------------------------------------------------------------------------------------------//

//Membuat Abstract Class HJBarang
abstract class HJBarang {
protected int $Harga;
protected int $Jumlah;

//Function Method Untuk Setter Harga Jumlah
public function __construct(int $Harga, int $Jumlah) {
$this->Harga = $Harga;
$this->Jumlah = $Jumlah;
}

//Function Method Untuk Getter Harga Jumlah
public function getHarga(): int {return $this->Harga;}
public function getJumlah(): int {return $this->Jumlah;}


//Function Return Type Untuk Mengeluarkan Kalimat Dan Melakukan Pemanggilan Getter Harga Jumlah
public function HargaJumlah(): string {
$HargaJumlah = "Harga: Rp{$this->getHarga()} | Jumlah: {$this->getJumlah()}";
return $HargaJumlah;}
}

//Inheritance Class Nama-Nama Barang Dengan HJBarang
class HJCanonEOS3000D extends HJBarang {}
class HJCanonEOS4000D extends HJBarang {}
class HJSonyHXRNX100 extends HJBarang {}
class HJXM8500 extends HJBarang {}
class HJAKGD5 extends HJBarang{}
class HJSM58LC extends HJBarang {}
class HJProyektor extends HJBarang {}
class HJSoftBox extends HJBarang{}

//Pembuatan Array (Harga Barang, Jumlah Barang)
$HJCanonEOS3000D  = new HJCanonEOS3000D(50000,5);
$HJCanonEOS4000D  = new HJCanonEOS4000D(50000,7);
$HJSonyHXRNX100   = new HJSonyHXRNX100(75000,2);
$HJXM8500         = new HJXM8500(15000,11);
$HJAKGD5          = new HJAKGD5(15000,9);
$HJSM58LC         = new HJSM58LC(50000,9);
$HJProyektor      = new HJProyektor(50000,3);
$HJSoftBox        = new HJSoftBox(100000,4);
?>