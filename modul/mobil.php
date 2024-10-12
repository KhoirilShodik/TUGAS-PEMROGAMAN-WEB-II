<?php
// membuat class dengan nama mobil
class Mobil
{

  var string  $nama;
  // var string  $merk;
  // var ?string  $warna = null;
  // var int  $kecepatanMaksimal;
  var string $brand;
  var int $tahun;

  // function tambahKecepatan(){
  //   echo "Kecepatan Bertambah";
  // }

  // function ingoMobil(?string $nama) {

    // kondisi jika parameter kosong
  //   if(is_null($nama)){
  //     echo "Nama Mobil adalah  {$this->nama}".PHP_EOL;
  //   }else{
  //     echo "Nama Mobil adalah $nama". PHP_EOL;
  //   }
  // }
  
  public function __construct(string $nama, string $brand, int $tahun)
  {
    $this->nama = $nama;
    $this->brand = $brand;
    $this->tahun = $tahun;
  }
  function infoMobil()
  {
    return "Nama Mobil : $this->nama " . PHP_EOL
      . "Brand    : $this->brand " . PHP_EOL
      . "Tahun    : $this->tahun " . PHP_EOL;
  }
}