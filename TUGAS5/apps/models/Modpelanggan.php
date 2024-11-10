<?php
class Modelspelanggan
{
    private $db;

    public function __construct($dbconnection)
    {
        $this->db = $dbconnection;
    }

    public function getallpelanggan()
    {
        $stmt = $this->db->query("SELECT * FROM pelanggan");
        $stmt ->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getpelangganById($id_pelanggan) {
        $stmt = $this->db->prepare("SELECT * FROM pelanggan WHERE id_pelanggan = :id_pelanggan");
        $stmt->bindParam(':id_pelanggan', $id_pelanggan);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function updatePelanggan($id_pelanggan, $nm_pelanggan, $alamat)
    {
        $stmt = $this->db->prepare("UPDATE pelanggan SET nm_pelanggan = :nm_pelanggan, 
        alamat = :alamat WHERE id_pelanggan = :id_pelanggan"); 
        $stmt->bindParam(':nm_pelanggan', $nm_pelanggan);
        $stmt->bindParam(':alamat', $alamat);
        $stmt->bindParam(':id_pelanggan', $id_pelanggan, PDO::PARAM_STR);
        return $stmt->execute(); 
    }


    public function tambahPelanggan($id_pelanggan, $nm_pelanggan, $alamat,)
    {
        $stmt = $this->db->prepare("INSERT INTO pelanggan (id_pelanggan, nm_pelanggan, alamat) 
        VALUES (:id_pelanggan, :nm_pelanggan, :alamat)");
        $stmt->bindParam(':id_pelanggan', $id_pelanggan);
        $stmt->bindParam(':nm_pelanggan', $nm_pelanggan);
        $stmt->bindParam(':alamat', $alamat);
        return $stmt->execute();
    }


    public function deletePelanggan($id_pelanggan)
    {
        $stmt = $this->db->prepare("DELETE FROM pelanggan WHERE id_pelanggan = :id_pelanggan");
        $stmt->bindParam(':id_pelanggan', $id_pelanggan, PDO::PARAM_STR); // Menambahkan titik dua (:)
        return $stmt->execute();
    }

}
?>