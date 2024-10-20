<?php
include "database.php";
$db = new Database();

// Pastikan ID ada di URL dan valid
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    // Ambil detail data berdasarkan ID
    $detail = $db->detailData($id);

    // Cek apakah data dengan ID tersebut ditemukan
    if (empty($detail)) {
        echo "Data tidak ditemukan untuk ID: " . htmlspecialchars($id);
        exit;
    }
} else {
    echo "ID tidak ditemukan!";
    exit;
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-3">
        <h1>CRUD OOP PHP</h1>
        <h4>Detail Data</h4>
        <hr class="mt-0">
        
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://www.wallpapergeeks.com/wp-content/uploads/2014/03/Nature_107.jpg" class="img-fluid rounded-start" alt="User Image">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($detail['nama']); ?></h5> <!-- Tampilkan nama dari database -->
                        <p class="card-text"><?php echo "Alamat : ".htmlspecialchars($detail['alamat']); ?></p> <!-- Tampilkan alamat dari database -->
                        <p class="card-text"><?php echo "No HP :  ".htmlspecialchars($detail['no_hp']); ?></p> <!-- Tampilkan no_hp dari database -->
                        <p class="card-text"><?php echo "Jenis Kelamin :  ".htmlspecialchars(string: $detail['jenis_kelamin']); ?></p> 
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil beatae quos at, eligendi reprehenderit enim error, hic sint nobis doloribus voluptatibus. Temporibus ut recusandae omnis ducimus sed adipisci illo laboriosam.</p>

                        <p class="card-text"><small class="text-body-secondary">Data updated recently</small></p>
                        <a href="index.php" class="btn btn-info btn-sm">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>