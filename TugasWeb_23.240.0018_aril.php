<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Total Belanja 23.240.0018</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="text-center">Kalkulator Total Pembelian Toko Aril</h4>
            </div>
            <div class="card-body">
                <?php
                function hitungTotalBelanja($totalBelanja, $isMember) {
                    $diskon = 0;
                    $keteranganDiskon = "";

                    // Cek apakah pembeli adalah member atau bukan
                    if ($isMember) {
                        // Member mendapat diskon 10% terlebih dahulu
                        $diskon = 10;
                        $keteranganDiskon = "Diskon member 10%";

                        // Jika total belanja lebih dari atau sama dengan 500.000, potongan harga tambahan 10%
                        if ($totalBelanja >= 500000) {
                            $diskon += 10;
                            $keteranganDiskon .= " + Potongan tambahan 10% (>= Rp 500.000)";
                        }
                        // Jika total belanja lebih dari atau sama dengan 300.000 tetapi kurang dari 500.000, potongan 5%
                        elseif ($totalBelanja >= 300000) {
                            $diskon += 5;
                            $keteranganDiskon .= " + Potongan tambahan 5% (>= Rp 300.000)";
                        }
                        // Jika total belanja kurang dari 300.000, hanya mendapat diskon member
                    } else {
                        // Bukan member, cek apakah pembelian >= 500.000
                        if ($totalBelanja >= 500000) {
                            $diskon = 10; // Mendapatkan potongan 10% jika >= 500.000
                            $keteranganDiskon = "Potongan harga 10% (>= Rp 500.000)";
                        } else {
                            $keteranganDiskon = "Tidak ada potongan harga";
                        }
                    }

                    // Hitung total akhir setelah diskon
                    $jumlahDiskon = $totalBelanja * $diskon / 100;
                    $totalAkhir = $totalBelanja - $jumlahDiskon;

                    // Tampilkan detail pembelian dalam bentuk tabel
                    echo '<table class="table table-bordered">';
                    echo '<tr><th>Detail</th><th>Harga</th></tr>';
                    echo '<tr><td>Total Belanja Awal</td><td>Rp ' . number_format($totalBelanja, 0, ',', '.') . '</td></tr>';
                    echo '<tr><td>Keterangan Diskon</td><td>' . $keteranganDiskon . '</td></tr>';
                    echo '<tr><td>Total Diskon</td><td>Rp ' . number_format($jumlahDiskon, 0, ',', '.') . '</td></tr>';
                    echo '<tr><th>Total yang harus dibayar</th><th>Rp ' . number_format($totalAkhir, 0, ',', '.') . '</th></tr>';
                    echo '</table>';
                }

                // Contoh penggunaan
                $totalBelanja = 550000; // Total belanja
                $isMember = true;       // Apakah pembeli adalah member? true untuk member, false untuk bukan member

                hitungTotalBelanja($totalBelanja, $isMember);
                ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
