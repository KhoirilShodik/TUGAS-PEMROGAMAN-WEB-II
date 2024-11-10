<?php
require_once 'apps/models/Modbarang.php';

class barangController {
    private $userModel;

    public function __construct($dbConnection) {
        $this->userModel = new ModelsBarang($dbConnection);
    }

    public function show($kd_barang) {
        $user = $this->userModel->getBarangById($kd_barang);
        require_once 'apps/view/barang.php';
    }

     public function index() {
        $Barang = $this->userModel->getAllBarang(); // Mendapatkan data pengguna
        include 'apps/view/barang.php'; // Memuat view dengan data pengguna
    }
    
    public function tambah() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $kd_barang = $_POST['kd_barang'];
            $nm_barang = $_POST['nm_barang'];
            $harga = $_POST['harga'];
            $stok = $_POST['stok'];
    
            $this->userModel->tambahBarang($kd_barang, $nm_barang, $harga, $stok);
            header('Location: index.php?page=barang');
            exit();
            
        }
    
        require_once 'apps/view/tambah_barang.php';
    }


    public function edit($kd_barang) {
        // Ambil data barang berdasarkan kd_barang dari model
        $barang = $this->userModel->getBarangById($kd_barang);
        if (!$barang) {
            echo "Barang tidak ditemukan.";
            return;
        }
    
        // Jika form di-submit, lakukan update data
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nm_barang = $_POST['nm_barang'];
            $harga = $_POST['harga'];
            $stok = $_POST['stok'];
            $this->userModel->updateBarang($kd_barang, $nm_barang, $harga, $stok);
            header('Location: index.php?page=barang');
            exit();
        }
    
        // Kirim data barang ke view
        require_once 'apps/view/edit_barang.php';
    }
    
        public function delete($kd_barang) {
        $this->userModel->deleteBarang($kd_barang);
        header('Location: index.php?page=barang');
        exit();
    }
    
}
?>