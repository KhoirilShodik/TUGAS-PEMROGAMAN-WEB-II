<?php
include "database.php";
$db_0021 = new Database;
$dataUsers = $db_0021->tampilData();

// Cek jika ada parameter alert di URL
$message = ""; // Untuk menyimpan pesan alert

// Cek jika ada parameter alert di URL
if (isset($_GET['alert'])) {
    $alertType = $_GET['alert'];
    if ($alertType == 'added') {
        $message = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        Data berhasil ditambahkan!
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
    } elseif ($alertType == 'updated') {
        $message = "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
                        Data berhasil diperbarui!
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
    } elseif ($alertType == 'delete') {
        $message = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        Data berhasil dihapus!
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                    </div>";
    }
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD OOP PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-3">
        <h1>CRUD OOP PHP</h1>
         <!-- Tampilkan pesan alert jika ada -->
         <?php if ($message): ?>
            <?php echo $message; ?>
        <?php endif; ?>
        <hr>
        <!-- tombol tambah data -->
        <a href="input.php" class="btn btn-success btn-sm">Tambah Data</a>

        <!-- tabel untuk menampilkan data user -->
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No HP</th>
                    <th scope="col">jenis_kelamin</th>
                    <th scope="col">Aksi</th>


                </tr>
            </thead>
            <tbody>
                <?php
                    $nomor = 1;
                    foreach ($dataUsers as $dataUser) {
                ?>
                <tr>
                    <th scope="row"><?php echo $nomor++; ?></th>
                    <td><?php echo $dataUser["nama"]; ?></td>
                    <td><?php echo $dataUser["alamat"]; ?></td>
                    <td><?php echo $dataUser["no_hp"]; ?></td>
                    <td><?php echo $dataUser["jenis_kelamin"]; ?></td>

                    <td>
                        <a href="edit.php?id=<?php echo $dataUser['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="detail.php?id=<?php echo $dataUser['id']; ?>" class="btn btn-primary -- btn-sm">Detail</a>
                        <a href="proses.php?id=<?php echo $dataUser['id'] ?>&aksi=hapus" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</a>
                        

                    </td>
                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>