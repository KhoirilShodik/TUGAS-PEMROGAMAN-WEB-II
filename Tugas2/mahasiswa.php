<?php
// Definisi Class Mahasiswa
class Mahasiswa {
    // Properti
    public $nama;
    public $nim;
    public $jurusan;
    public $semester;

    // Constructor untuk menginisialisasi properti
    public function __construct($nama, $nim, $jurusan, $semester) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
        $this->semester = $semester;
    }

    // Function untuk menampilkan informasi mahasiswa
    public function tampilkanInfo() {
        echo "Nama: " . $this->nama . "<br>";
        echo "NIM: " . $this->nim . "<br>";
        echo "Jurusan: " . $this->jurusan . "<br>";
        echo "Semester: " . $this->semester . "<br>";
    }

    // Function untuk memperbarui semester
    public function updateSemester($semesterBaru) {
        $this->semester = $semesterBaru;
        echo "Semester telah diperbarui menjadi: " . $this->semester . "<br>";
    }
}

// Membuat objek dari class Mahasiswa
$mahasiswa1 = new Mahasiswa("ivan nadhim saputra", "23.240.0007", "Teknik Informatika", 3);

// Menampilkan informasi mahasiswa
$mahasiswa1->tampilkanInfo();

// Memperbarui semester mahasiswa
$mahasiswa1->updateSemester(4);

// Menampilkan kembali informasi mahasiswa setelah semester diperbarui
$mahasiswa1->tampilkanInfo();
?>
