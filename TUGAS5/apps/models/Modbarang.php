<?php
class ModelsBarang
{
    private $db;

    public function __construct($dbconnection)
    {
        $this->db = $dbconnection;
    }

    // Mengambil semua data barang
    public function getAllBarang()
    {
        $stmt = $this->db->query("SELECT * FROM barang");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Mengambil data barang berdasarkan ID
    public function getBarangById($kd_barang) {
        $stmt = $this->db->prepare("SELECT * FROM barang WHERE kd_barang = :kd_barang");
        $stmt->bindParam(':kd_barang', $kd_barang);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Memperbarui data barang
    public function updateBarang($kd_barang, $nm_barang, $harga, $stok)
    {
        $stmt = $this->db->prepare("UPDATE barang SET nm_barang = :nm_barang, 
            harga = :harga, stok = :stok WHERE kd_barang = :kd_barang");
        $stmt->bindParam(':nm_barang', $nm_barang);
        $stmt->bindParam(':harga', $harga);
        $stmt->bindParam(':stok', $stok);
        $stmt->bindParam(':kd_barang', $kd_barang, PDO::PARAM_STR);
        
        return $stmt->execute(); // Pastikan statement dieksekusi
    }

    // Menambahkan data barang
    public function tambahBarang($kd_barang, $nm_barang, $harga, $stok)
    {
        $stmt = $this->db->prepare("INSERT INTO barang (kd_barang, nm_barang, harga, stok) 
            VALUES (:kd_barang, :nm_barang, :harga, :stok)");
        $stmt->bindParam(':kd_barang', $kd_barang);
        $stmt->bindParam(':nm_barang', $nm_barang);
        $stmt->bindParam(':harga', $harga);
        $stmt->bindParam(':stok', $stok);
        
        return $stmt->execute();
    }

    // Menghapus data barang
    public function deleteBarang($kd_barang)
    {
        $stmt = $this->db->prepare("DELETE FROM barang WHERE kd_barang = :kd_barang");
        $stmt->bindParam(':kd_barang', $kd_barang, PDO::PARAM_STR); // Menggunakan PDO::PARAM_STR
        return $stmt->execute();
    }

}
?>
