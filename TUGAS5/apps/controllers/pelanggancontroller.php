<?php
require_once 'apps/models/Modpelanggan.php';

class pelangganController {
    private $userModel;

    public function __construct($dbConnection) {
        $this->userModel = new ModelsPelanggan($dbConnection);
    }

    public function show($id_pelanggan) {
        $user = $this->userModel->getpelangganById($id_pelanggan);
        require_once 'apps/view/pelanggan.php';
    }

    public function index() {
        $Pelanggan = $this->userModel->getallPelanggan(); // Mendapatkan data pengguna
        include 'apps/view/pelanggan.php'; // Memuat view dengan data pengguna
    }
    
    public function tambah() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_pelanggan = $_POST['id_pelanggan'];
            $nm_pelanggan = $_POST['nm_pelanggan'];
            $alamat = $_POST['alamat'];

            $this->userModel->tambahPelanggan($id_pelanggan, $nm_pelanggan, $alamat);
            header('Location: index.php?page=pelanggan');
            exit();
        }
    
        require_once 'apps/view/tambah_pelanggan.php';
    }

    public function edit($id_pelanggan) {
        // Ambil data pelanggan berdasarkan id_pelanggan dari model
        $Pelanggan = $this->userModel->getpelangganById($id_pelanggan);
        if (!$Pelanggan) {
            echo "Pelanggan tidak ditemukan.";
            return;
        }
    
        // Jika form di-submit, lakukan update data
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nm_pelanggan = $_POST['nm_pelanggan'];
            $alamat = $_POST['alamat'];
            $this->userModel->updatePelanggan($id_pelanggan, $nm_pelanggan, $alamat);
            header('Location: index.php?page=pelanggan');
            exit();
        }
    
        // Kirim data pelanggan ke view
        require_once 'apps/view/edit_pelanggan.php';
    }

    public function delete($id_pelanggan) {
        $this->userModel->deletePelanggan($id_pelanggan);
        header('Location: index.php?page=pelanggan');
        exit();
    }
}
?>