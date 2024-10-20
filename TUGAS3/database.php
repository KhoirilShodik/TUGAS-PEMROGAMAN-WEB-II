<?php
class Database {
    public $host = 'localhost';
    public $user = "root";
    public $password = "";
    public $database = "db_aril";
    public $connect;

    function __construct() {
        $this->connect = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if (!$this->connect) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    // Function to display all data
    function tampilData() {
        $data = mysqli_query($this->connect, "SELECT * FROM tb_users");
        return mysqli_fetch_all($data, MYSQLI_ASSOC);
    }

    // Function to add data
    function tambahData($nama, $alamat, $no_hp, $jenis_kelamin) {
        mysqli_query($this->connect, "INSERT INTO tb_users (nama, alamat, no_hp, jenis_kelamin) VALUES ('$nama', '$alamat', '$no_hp', '$jenis_kelamin')");
    }

    // Function to edit data
    function editData($id) {
        $data = mysqli_query($this->connect, "SELECT * FROM tb_users WHERE id=$id");
        return mysqli_fetch_all($data, MYSQLI_ASSOC);
    }

    // Function to update data
    function updateData($id, $nama, $alamat, $no_hp, $jenis_kelamin) {
        mysqli_query($this->connect, "UPDATE tb_users SET nama='$nama', alamat='$alamat', no_hp='$no_hp', jenis_kelamin='$jenis_kelamin' WHERE id='$id'  ");
    }

    // Function to delete data
    function hapusData($id) {
        mysqli_query($this->connect, "DELETE FROM tb_users WHERE id='$id'");
    }

    // Function to fetch details of a user by ID
    function detailData($id) {
        $data = mysqli_query($this->connect, "SELECT * FROM tb_users WHERE id=$id");
        return mysqli_fetch_assoc($data);
    }
}
?>