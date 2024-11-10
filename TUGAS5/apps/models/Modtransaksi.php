<?php

class Modtransaksi {
    private $db;

    public function __construct($dbConnection) {
        $this->db = $dbConnection;
    }

    public function getAllTransaksi() {
        $stmt = $this->db->query("SELECT * FROM transaksi");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function tambahTransaksi($id_transaksi, $id_pelanggan, $kd_barang, $jumlah, $harga_total) {
        $stmt = $this->db->prepare("INSERT INTO transaksi (id_transaksi, id_pelanggan, kd_barang, jumlah, harga_total, tanggal) 
            VALUES (:id_transaksi, :id_pelanggan, :kd_barang, :jumlah, :harga_total, NOW())");
        $stmt->bindParam(':id_transaksi', $id_transaksi);
        $stmt->bindParam(':id_pelanggan', $id_pelanggan);
        $stmt->bindParam(':kd_barang', $kd_barang);
        $stmt->bindParam(':jumlah', $jumlah);
        $stmt->bindParam(':harga_total', $harga_total);
        return $stmt->execute();
    }

    public function deleteTransaksi($id_transaksi) {
        $stmt = $this->db->prepare("DELETE FROM transaksi WHERE id_transaksi = :id_transaksi");
        $stmt->bindParam(':id_transaksi', $id_transaksi);
        return $stmt->execute();
    }
    
    
}
?>
