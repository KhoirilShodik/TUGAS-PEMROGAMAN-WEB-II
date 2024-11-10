<?php
require_once 'apps/models/Modhome.php';
class homeController {
    private $homeController;
    

    public function __construct($dbConnection) {
        $this->homeController = new home($dbConnection);
    }

    public function index() {
        $Barang = $this->homeController->tampilkan(); // Ambil semua data barang
        include 'apps/view/home.php'; // Tampilkan view barang
    }
}
?>