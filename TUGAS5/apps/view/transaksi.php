<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Aplikasi Toko Arif</title>
  
  <style>
    footer {
      text-align: center; /* Center the footer text */
      padding: 10px 0;
      color: white;
      width: 100%;
      position: fixed;
      bottom: 0;
      background-color: #333; /* Optional: to make the footer background consistent */
    }

    .content-header h1 {
      text-align: center; /* Center the header title */
      width: 100%;
    }
  </style>
  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="public/adminlte/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/adminlte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="index.php" class="brand-link">
      <img src="public/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Aplikasi Toko </span>
    </a>

    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">MENU</li>
          <li class="nav-item">
            <a href="index.php?page=barang" class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'barang') ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-box text-danger"></i>
              <p>Barang</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=pelanggan" class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'pelanggan') ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-users text-warning"></i>
              <p>Pelanggan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="index.php?page=transaksi" class="nav-link <?php echo (isset($_GET['page']) && $_GET['page'] == 'transaksi') ? 'active' : ''; ?>">
              <i class="nav-icon fas fa-shopping-cart text-info"></i>
              <p>Transaksi</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>

  <!-- Content Wrapper -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header bg-secondary">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>Aplikasi Toko</h1> <!-- Title is centered -->
          </div>
        </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container mt-5">
        <h5 class="text-left text-success font-weight-bold">Data Transaksi</h5>
        
        <a href="index.php?page=tambah_transaksi" class="btn btn-success btn-sm mt-3 font-weight-bold">Tambahkan Data</a>
        
        <table class="table table-hover mt-4">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Id Transaksi</th>
              <th scope="col">Id Pelanggan</th>
              <th scope="col">Kd Barang</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Harga Total</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $nomor = 1;
              if (isset($transaksi) && is_array($transaksi)) {
                foreach ($transaksi as $item) {
            ?>
            <tr>
              <th scope="row"><?php echo $nomor++; ?></th>
              <td><?php echo htmlspecialchars($item["id_transaksi"]); ?></td>
              <td><?php echo htmlspecialchars($item["id_pelanggan"]); ?></td>
              <td><?php echo htmlspecialchars($item["kd_barang"]); ?></td>
              <td><?php echo htmlspecialchars($item["jumlah"]); ?></td>
              <td><?php echo htmlspecialchars($item["harga_total"]); ?></td>
              <td><?php echo htmlspecialchars($item["tanggal"]); ?></td>
              <td>
                <a href="index.php?page=delete_transaksi&id_transaksi=<?= htmlspecialchars($item['id_transaksi']) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus transaksi ini?')">Hapus</a>
              </td>
            </tr>
            <?php
                }
              } else {
                echo "<tr><td colspan='8'>Tidak ada data transaksi ditemukan.</td></tr>";
              }
            ?>
          </tbody>
        </table>
      </div>
    </section>
  </div>

  <!-- Footer -->
  <footer class="bg-secondary">
    <p>&copy; <?php echo date("Y"); ?> PT. Ronald Foundation || Semua hak dilindungi.</p>
  </footer>

</div>

<!-- Scripts -->
<script src="public/adminlte/plugins/jquery/jquery.min.js"></script>
<script src="public/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="public/adminlte/dist/js/adminlte.min.js"></script>
</body>
</html>
