<?php
  $school_name = "MIS AL BAYYINAH";
  $year = date("Y");
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Galeri – <?= $school_name ?></title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="icon" type="image/png" href="img/logo.png" />
</head>
<body>

<header id="main-header">
  <nav class="navbar">
    <a href="index.php" class="navbar-brand">
      <img src="img/logo.png" alt="Logo" class="navbar-logo" width="70" height="67" />
      <span class="navbar-title"><?= $school_name ?></span>
    </a>
    <ul class="nav-menu" id="nav-menu">
      <li><a href="index.php"             class="nav-link">Beranda</a></li>
      <li><a href="profil.php"            class="nav-link">Profil</a></li>
      <li><a href="kepala-guru-staff.php" class="nav-link">Akademik &amp; Staf</a></li>
      <li><a href="galeri.php"            class="nav-link active">Fasilitas</a></li>
      <li><a href="index.php#kontak"      class="nav-link nav-link--cta">Kontak</a></li>
    </ul>
    <button class="nav-hamburger" id="nav-hamburger" aria-label="Toggle menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
  </nav>
</header>

<section style="min-height:60vh; display:flex; align-items:center; justify-content:center; background:var(--green-bg); padding: 60px 24px; text-align:center;">
  <div>
    <div style="font-size:4rem; margin-bottom:20px;">🖼️</div>
    <h2 style="font-family:'Amiri',serif; font-size:2rem; color:var(--green-dark); margin-bottom:12px;">Galeri Segera Hadir</h2>
    <p style="color:var(--text-soft); font-size:0.95rem; max-width:420px; margin:0 auto 28px;">
      Kami sedang mempersiapkan galeri foto kegiatan dan fasilitas madrasah. Pantau terus!
    </p>
    <a href="index.php" class="btn btn--primary">← Kembali ke Beranda</a>
  </div>
</section>

<footer style="background:var(--text-dark);color:rgba(255,255,255,.45);text-align:center;padding:20px 24px;font-size:.82rem;">
  <p>&copy; <?= $year ?> <span style="color:var(--green-pale);font-weight:700;"><?= $school_name ?></span>. All Rights Reserved.</p>
</footer>

<script>
  const hamburger = document.getElementById('nav-hamburger');
  const navMenu   = document.getElementById('nav-menu');
  hamburger.addEventListener('click', () => {
    const open = navMenu.classList.toggle('nav-menu--open');
    hamburger.classList.toggle('nav-hamburger--open', open);
    hamburger.setAttribute('aria-expanded', open);
  });
  window.addEventListener('scroll', () => {
    document.getElementById('main-header').classList.toggle('header--scrolled', window.scrollY > 40);
  });
</script>

</body>
</html>