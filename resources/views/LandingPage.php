<?php
$pageTitle = 'Login';
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <?php include __DIR__ . '/theme.blade.php'; ?>
<body>
  <div class="shell">
    <div class="topbar">
      <div class="brand">
        <div class="logo" aria-hidden="true"></div>
        <div>
          <h1>Website  Peminjaman Alat Lab</h1>
          <p> Login untuk melanjutkan</p>
        </div>
      </div>
      <a class="btn btn-ghost" href="index.php?register">Daftar</a>
    </div>

    <div class="grid">
      <div class="card hero">
        <h2>Selamat datang</h2>
        <p>Kelola peminjaman alat dengan cepat, rapi, dan terpantau. Masuk menggunakan <strong>Nama</strong> dan <strong>Password</strong> yang terdaftar.</p>
        <div class="badge">• Akses Kaprodi & Siswa</div>
      </div>

      <div class="card form">
        <h2>Login</h2>
        <form method="POST" action="index.php?proses_login" autocomplete="off">
          <label for="nama">Nama</label>
          <input id="nama" type="text" name="nama" required placeholder="Masukkan nama" />

          <label for="password">Password</label>
          <input id="password" type="password" name="password" required placeholder="Masukkan password" />

          <div class="actions">
            <button class="btn btn-primary" type="submit">Masuk</button>
            <a class="btn btn-ghost" href="index.php?register">Buat akun</a>
          </div>

          <div class="small">Jika sudah login, kamu akan diarahkan ke dashboard.</div>
        </form>
      </div>
    </div>

    <div class="footer">© <?= date('Y') ?> • UUK</div>
    <p><?php
      
    ?></p>
  </div>
</body>
</html>
