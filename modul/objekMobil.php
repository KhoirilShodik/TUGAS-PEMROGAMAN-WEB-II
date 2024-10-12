<?php
//memgakses file mobil.php dan mobilSport.php
require_once "Mobil.php";
require_once "MobilSport.php";

// Inisialisasi variable mobilSatu
// $MobilSatu = new Mobil();

// // Menambahkan properties pada objek mobilSatu
// $MobilSatu->nama = "Avanza";
// $MobilSatu->merk = "Toyota";
// $MobilSatu->warna = "hitam";
// $MobilSatu->tahun = 2019;
// $MobilSatu->kecepatanMaksimal = 1300;
// // Menambahkan informasi objek mobilSatu
// echo "Nama               : $MobilSatu->nama" . PHP_EOL;
// echo "Merk               : $MobilSatu->merk" . PHP_EOL;
// echo "Warna              : $MobilSatu->warna" . PHP_EOL;
// echo "Tahun              : $MobilSatu->tahun" . PHP_EOL;
// echo "Kecepatan Maksimal : $MobilSatu->nama" . PHP_EOL;
// echo $MobilSatu->tambahKecepatan();

// // Inisialisasi variable mobilDua
// $MobilDua = new Mobil();

// // Menambahkan properties pada objek mobilDua
// $MobilDua->nama = "Brio";
// $MobilDua->merk = "Honda";
// $MobilDua->warna = "Merah";
// $MobilDua->tahun = 2018;
// $MobilDua->kecepatanMaksimal = 1000;
 
// var_dump($MobilDua);

//inisialisasi objek dari kelas Mobil
$avanza = new Mobil("Avanza", "Toyota", 2020);
echo $avanza->infoMobil();

echo "<br>";
//inisialisasi objek dari kelas Mobil
$supra = new MobilSport("Supra", "Toyota", 2021);
echo $supra->infoMobil();
echo $supra->jalankanTurbo();
 