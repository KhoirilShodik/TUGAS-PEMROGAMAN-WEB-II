<?php
require_once 'config/database.php';
require_once 'apps/controllers/barangcontroller.php';

//koneksi ke database
$dbconnection = getdbconnection();

$page = $_GET['page'] ?? 'home'; // Default ke halaman home

switch ($page) {
    case 'barang':
        require_once 'apps/controllers/barangcontroller.php';
        $controller = new barangController($dbconnection);
        $controller->index(); // Tampilkan semua barang
        break;

    case 'transaksi':
        require_once 'apps/controllers/transaksicontroller.php';
        $controller = new transaksiController($dbconnection);
        $controller->index(); // Tampilkan semua barang
        break;

    case 'pelanggan':
        require_once 'apps/controllers/pelanggancontroller.php';
        $controller = new pelangganController($dbconnection);
        $controller->index(); // Tampilkan semua pelanggan
        break;

    case 'tambah_barang':
        require_once 'apps/controllers/barangcontroller.php';
        $controller = new barangController($dbconnection);
        $controller->tambah(); // Form tambah barang
        break;

    case 'tambah_pelanggan':
        require_once 'apps/controllers/pelanggancontroller.php';
        $controller = new pelangganController($dbconnection);
        $controller->tambah(); // Form tambah pelanggan
        break;

        case 'tambah_transaksi':
            require_once 'apps/controllers/transaksicontroller.php';
            $controller = new transaksiController($dbconnection);
            $controller->tambah(); // Form tambah transaksi
            break;
        

    case 'edit_barang':
        require_once 'apps/controllers/barangcontroller.php';
        $controller = new barangController($dbconnection);
        $kd_barang = $_GET['kd_barang'] ?? null;
        if ($kd_barang) {
            $controller->edit($kd_barang); // Edit barang
        }
        break;

    case 'delete_barang':
        require_once 'apps/controllers/barangcontroller.php';
        $controller = new barangController($dbconnection);
        $kd_barang = $_GET['kd_barang'] ?? null;
        if ($kd_barang) {
            $controller->delete($kd_barang); // Hapus barang
        }
        break;

    case 'edit_pelanggan':
        require_once 'apps/controllers/pelanggancontroller.php';
        $controller = new pelangganController($dbconnection);
        $id_pelanggan = $_GET['id_pelanggan'] ?? null;
        if ($id_pelanggan) {
            $controller->edit($id_pelanggan); // Edit pelanggan
        }
        break;

    case 'delete_pelanggan':
        require_once 'apps/controllers/pelanggancontroller.php';
        $controller = new pelangganController($dbconnection);
        $id_pelanggan = $_GET['id_pelanggan'] ?? null;
        if ($id_pelanggan) {
            $controller->delete($id_pelanggan); // Hapus pelanggan
        }
        break;

        case 'delete_transaksi':
            require_once 'apps/controllers/transaksicontroller.php';
            $controller = new transaksiController($dbconnection);
            $id_transaksi = $_GET['id_transaksi'] ?? null;
            if ($id_transaksi) {
                $controller->delete($id_transaksi); // Hapus transaksi
            }
            break;
        
        

    case 'home':
    default:
        require_once 'apps/controllers/homecontroller.php';
        $controller = new homeController($dbconnection);
        $controller->index(); // Tampilkan home
        break;
}
?>