<?php
require_once 'apps/models/Modtransaksi.php';

class transaksiController {
    private $transaksiModel;

    public function __construct($dbConnection) {
        $this->transaksiModel = new Modtransaksi($dbConnection);
    }

    public function index() {
        $transaksi = $this->transaksiModel->getAllTransaksi();
        include 'apps/view/transaksi.php';
    }

    public function tambah() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id_transaksi = $_POST['id_transaksi'];
            $id_pelanggan = $_POST['id_pelanggan'];
            $kd_barang = $_POST['kd_barang'];
            $jumlah = $_POST['jumlah'];
            $harga_total = $_POST['harga_total'];

            $this->transaksiModel->tambahTransaksi($id_transaksi, $id_pelanggan, $kd_barang, $jumlah, $harga_total);
            header('Location: index.php?page=transaksi');
            exit();
        }

        require_once 'apps/view/tambah_transaksi.php';
    }

    public function delete($id_transaksi) {
        var_dump($id_transaksi); // Untuk debug pastikan ID yang benar diterima
    
        // Pastikan ID transaksi tidak kosong
        if ($id_transaksi) {
            // Cek apakah transaksi berhasil dihapus
            $deleted = $this->transaksiModel->deleteTransaksi($id_transaksi);
            
            if ($deleted) {
                // Jika berhasil, redirect ke halaman transaksi
                header('Location: index.php?page=transaksi');
                exit();
            } else {
                echo "Gagal menghapus transaksi.";
                exit();
            }
        } else {
            echo "ID Transaksi tidak ditemukan.";
            exit();
        }
    }
    

    
}
?>
