<?php 

Class MobilSport extends Mobil{

    public $turbo = false;

    function jalankanTurbo(){
        $this->turbo = true;
        return "Jalankan Turbo!";
    }
    function infoMobil(){
        return "Nama Mobil Sport    : $this->nama " . PHP_EOL
                ."Brand             : $this->brand " . PHP_EOL
                ."Tahun             :". $this->tahun  . PHP_EOL
                ."Turbo             :". $this->turbo = true . PHP_EOL;
        
      }
}



