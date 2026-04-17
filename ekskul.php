<?php
  $school_name = "MIS AL BAYINNAH";
  $year        = date("Y");

  $ekskul = [
    [
      "nama"    => "Pramuka",
      "icon"    => "⚜️",
      "foto"    => "img/ekskul/ekskul-01.jpg",
      "desc"    => "Kegiatan kepanduan yang membentuk karakter siswa menjadi pribadi yang disiplin, mandiri, dan berjiwa pemimpin. Melalui berbagai kegiatan outdoor dan indoor, siswa belajar nilai-nilai kebangsaan dan kebersamaan.",
      "hari"    => "Sabtu",
      "jam"     => "08.00 – 10.00 WIB",
      "pembina" => "— (Template)",
      "peserta" => "± 60 Siswa",
      "warna"   => "#c0392b",
    ],
    [
      "nama"    => "Seni Kaligrafi",
      "icon"    => "✍️",
      "foto"    => "img/ekskul/ekskul-02.jpg",
      "desc"    => "Mengembangkan bakat seni siswa melalui keindahan tulisan Arab. Siswa diajarkan berbagai gaya khat mulai dari Naskhi hingga Tsuluts oleh pembina berpengalaman, dengan target mengikuti perlombaan tingkat kecamatan dan kabupaten.",
      "hari"    => "Jum'at",
      "jam"     => "13.00 – 14.30 WIB",
      "pembina" => "— (Template)",
      "peserta" => "± 30 Siswa",
      "warna"   => "#2D8F81",
    ],
    [
      "nama"    => "Olahraga & Futsal",
      "icon"    => "⚽",
      "foto"    => "img/ekskul/ekskul-03.jpg",
      "desc"    => "Program olahraga yang melatih kebugaran fisik dan semangat sportivitas siswa. Selain futsal, kegiatan ini mencakup senam, atletik ringan, dan permainan tim yang menanamkan nilai kerja sama dan fair play.",
      "hari"    => "Rabu",
      "jam"     => "14.00 – 15.30 WIB",
      "pembina" => "— (Template)",
      "peserta" => "± 45 Siswa",
      "warna"   => "#FF7100",
    ],
  ];

  $prestasi = [
    [
      "ekskul" => "Seni Kaligrafi",
      "judul"  => "Juara 2 Lomba Kaligrafi",
      "event"  => "MTQ Tingkat Kecamatan Dramaga",
      "tahun"  => "2025",
      "warna"  => "#2D8F81",
    ],
    [
      "ekskul" => "Pramuka",
      "judul"  => "Juara 3 Perkemahan",
      "event"  => "Jambore Ranting Dramaga",
      "tahun"  => "2024",
      "warna"  => "#c0392b",
    ],
    [
      "ekskul" => "Olahraga",
      "judul"  => "Juara 1 Futsal",
      "event"  => "Turnamen Antar Madrasah Kabupaten Bogor",
      "tahun"  => "2024",
      "warna"  => "#FF7100",
    ],
  ];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Ekstrakurikuler <?= $school_name ?> – Kegiatan pengembangan bakat dan minat siswa." />
  <title>Ekstrakurikuler – <?= $school_name ?></title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="icon" type="image/png" href="img/logo.png" />
  <style>
    /* ===========================
       EKSKUL PAGE – SPECIFIC STYLES
       =========================== */

    /* ---- Breadcrumb ---- */
    .breadcrumb {
      background: var(--white);
      border-bottom: 1px solid var(--green-wash);
      padding: 10px 24px;
    }
    .breadcrumb-inner {
      max-width: 1180px;
      margin: 0 auto;
      display: flex;
      align-items: center;
      gap: 8px;
      font-size: 0.82rem;
      color: var(--text-soft);
    }
    .breadcrumb-inner a { color: var(--text-soft); text-decoration: none; transition: color .2s; }
    .breadcrumb-inner a:hover { color: var(--green-dark); }
    .breadcrumb-sep     { opacity: .4; }
    .breadcrumb-current { color: var(--green-dark); font-weight: 700; }

    /* ---- Page Banner ---- */
    .page-banner {
      background: var(--green-dark);
      padding: 44px 24px 50px;
      position: relative;
      overflow: hidden;
    }
    .page-banner::before {
      content: '';
      position: absolute;
      inset: 0;
      background:
        radial-gradient(ellipse 60% 80% at 90% 50%, rgba(45,143,129,.25) 0%, transparent 70%),
        radial-gradient(ellipse 40% 60% at 10% 80%, rgba(255,113,0,.12)  0%, transparent 60%);
      pointer-events: none;
    }
    .page-banner-inner {
      max-width: 1180px;
      margin: 0 auto;
      position: relative;
      z-index: 1;
    }
    .page-banner h1 {
      font-family: 'Amiri', serif;
      font-size: 2rem;
      font-weight: 700;
      color: var(--white);
      margin-bottom: 8px;
    }
    .page-banner p {
      color: rgba(255,255,255,.72);
      font-size: 0.92rem;
      max-width: 560px;
      margin-bottom: 24px;
    }
    .banner-chips {
      display: flex;
      gap: 10px;
      flex-wrap: wrap;
    }
    .banner-chip {
      background: rgba(255,255,255,.12);
      border: 1px solid rgba(255,255,255,.2);
      color: var(--white);
      padding: 6px 16px;
      border-radius: 50px;
      font-size: 0.8rem;
      font-weight: 700;
    }

    /* ---- Ekskul Cards Section ---- */
    .section-ekskul {
      background: var(--green-bg);
      padding: 64px 24px;
    }
    .section-ekskul-inner {
      max-width: 1180px;
      margin: 0 auto;
    }
    .section-label {
      font-size: 0.78rem;
      font-weight: 800;
      color: var(--green-mid);
      text-transform: uppercase;
      letter-spacing: .08em;
      margin-bottom: 8px;
    }
    .section-heading {
      font-family: 'Amiri', serif;
      font-size: 1.8rem;
      font-weight: 700;
      color: var(--text-dark);
      margin-bottom: 6px;
    }
    .section-desc {
      color: var(--text-soft);
      font-size: 0.88rem;
      margin-bottom: 44px;
      max-width: 560px;
    }

    /* ---- Ekskul Card ---- */
    .ekskul-list {
      display: flex;
      flex-direction: column;
      gap: 36px;
    }

    .ekskul-card {
      background: var(--white);
      border-radius: var(--radius-lg);
      overflow: hidden;
      box-shadow: var(--shadow-sm);
      display: grid;
      grid-template-columns: 420px 1fr;
      transition: var(--transition);
      border: 1.5px solid var(--green-wash);
    }
    .ekskul-card:hover {
      box-shadow: var(--shadow-lg);
      transform: translateY(-3px);
    }
    .ekskul-card:nth-child(even) {
      grid-template-columns: 1fr 420px;
    }
    .ekskul-card:nth-child(even) .ekskul-photo {
      order: 2;
    }
    .ekskul-card:nth-child(even) .ekskul-body {
      order: 1;
    }

    /* Photo */
    .ekskul-photo {
      position: relative;
      overflow: hidden;
      min-height: 280px;
    }
    .ekskul-photo img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform .5s ease;
    }
    .ekskul-card:hover .ekskul-photo img {
      transform: scale(1.05);
    }
    .ekskul-photo-placeholder {
      width: 100%;
      height: 100%;
      min-height: 280px;
      background: linear-gradient(135deg, var(--green-wash) 0%, #c8f5ca 100%);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      gap: 12px;
      color: var(--text-soft);
      font-size: 0.82rem;
    }
    .ekskul-photo-placeholder span:first-child {
      font-size: 3.5rem;
    }
    .ekskul-number {
      position: absolute;
      top: 16px;
      left: 16px;
      width: 38px;
      height: 38px;
      border-radius: 50%;
      color: var(--white);
      font-family: 'Amiri', serif;
      font-size: 1.1rem;
      font-weight: 700;
      display: flex;
      align-items: center;
      justify-content: center;
      box-shadow: 0 2px 8px rgba(0,0,0,.2);
    }

    /* Body */
    .ekskul-body {
      padding: 32px 36px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      gap: 16px;
    }
    .ekskul-tag {
      display: inline-flex;
      align-items: center;
      gap: 6px;
      font-size: 0.72rem;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: .06em;
      color: var(--white);
      padding: 4px 14px;
      border-radius: 50px;
      align-self: flex-start;
    }
    .ekskul-nama {
      font-family: 'Amiri', serif;
      font-size: 1.7rem;
      font-weight: 700;
      color: var(--text-dark);
      line-height: 1.2;
    }
    .ekskul-desc {
      font-size: 0.9rem;
      color: #2a3a2c;
      line-height: 1.85;
    }

    /* Meta Info */
    .ekskul-meta {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 12px;
      margin-top: 4px;
    }
    .ekskul-meta-item {
      display: flex;
      align-items: flex-start;
      gap: 10px;
      background: var(--green-bg);
      border-radius: var(--radius-sm);
      padding: 10px 14px;
    }
    .ekskul-meta-icon {
      width: 30px;
      height: 30px;
      border-radius: 50%;
      background: var(--green-dark);
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }
    .ekskul-meta-icon svg { width: 14px; height: 14px; fill: var(--white); }
    .ekskul-meta-text {
      display: flex;
      flex-direction: column;
      gap: 1px;
    }
    .ekskul-meta-label {
      font-size: 0.68rem;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: .05em;
      color: var(--text-soft);
    }
    .ekskul-meta-value {
      font-size: 0.83rem;
      font-weight: 700;
      color: var(--text-dark);
    }

    /* ---- Prestasi Section ---- */
    .section-prestasi {
      background: var(--green-dark);
      padding: 64px 24px;
    }
    .section-prestasi-inner {
      max-width: 1180px;
      margin: 0 auto;
    }
    .section-prestasi .section-heading { color: var(--white); }
    .section-prestasi .section-desc    { color: rgba(255,255,255,.65); }

    .prestasi-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 18px;
    }
    .prestasi-card {
      background: rgba(255,255,255,.09);
      border: 1px solid rgba(255,255,255,.14);
      border-radius: var(--radius-lg);
      padding: 24px;
      backdrop-filter: blur(4px);
      transition: var(--transition);
      display: flex;
      flex-direction: column;
      gap: 12px;
    }
    .prestasi-card:hover {
      background: rgba(255,255,255,.15);
      transform: translateY(-4px);
    }
    .prestasi-trophy {
      font-size: 2.2rem;
    }
    .prestasi-ekskul-badge {
      display: inline-block;
      padding: 3px 12px;
      border-radius: 50px;
      font-size: 0.68rem;
      font-weight: 800;
      letter-spacing: .04em;
      color: var(--white);
      align-self: flex-start;
    }
    .prestasi-judul {
      font-family: 'Amiri', serif;
      font-size: 1.1rem;
      font-weight: 700;
      color: var(--white);
      line-height: 1.35;
    }
    .prestasi-event {
      font-size: 0.82rem;
      color: rgba(255,255,255,.65);
      line-height: 1.5;
    }
    .prestasi-tahun {
      font-size: 0.75rem;
      font-weight: 800;
      color: var(--green-pale);
      margin-top: auto;
    }

    /* ---- CTA Section ---- */
    .section-cta {
      background: var(--green-mid);
      padding: 52px 24px;
      text-align: center;
    }
    .section-cta h3 {
      font-family: 'Amiri', serif;
      font-size: 1.6rem;
      color: var(--white);
      margin-bottom: 10px;
    }
    .section-cta p {
      color: rgba(255,255,255,.8);
      font-size: 0.92rem;
      margin-bottom: 24px;
    }
    .cta-btns {
      display: flex;
      gap: 14px;
      justify-content: center;
      flex-wrap: wrap;
    }

    /* ---- Footer ---- */
    footer {
      background: var(--text-dark);
      color: rgba(255,255,255,.45);
      text-align: center;
      padding: 20px 24px;
      font-size: 0.82rem;
    }
    footer span { color: var(--green-pale); font-weight: 700; }

    /* ---- Template Note ---- */
    .template-note {
      background: rgba(255,113,0,.08);
      border: 1px solid rgba(255,113,0,.25);
      border-radius: var(--radius-sm);
      padding: 12px 16px;
      font-size: 0.82rem;
      color: #7a3800;
      margin-bottom: 36px;
    }

    /* ---- Responsive ---- */
    @media (max-width: 960px) {
      .ekskul-card,
      .ekskul-card:nth-child(even) {
        grid-template-columns: 1fr;
      }
      .ekskul-card:nth-child(even) .ekskul-photo,
      .ekskul-card:nth-child(even) .ekskul-body {
        order: unset;
      }
      .ekskul-photo { min-height: 240px; }
      .prestasi-grid { grid-template-columns: 1fr 1fr; }
    }
    @media (max-width: 600px) {
      .ekskul-body   { padding: 24px 20px; }
      .ekskul-meta   { grid-template-columns: 1fr; }
      .prestasi-grid { grid-template-columns: 1fr; }
      .page-banner h1 { font-size: 1.55rem; }
    }
  </style>
</head>
<body>

<!-- ==============================
     NAVBAR
     ============================== -->
<header id="main-header">
  <nav class="navbar">
    <a href="index.php" class="navbar-brand">
      <img src="img/logo.png" alt="Logo <?= $school_name ?>" class="navbar-logo" width="70" height="67" />
      <span class="navbar-title"><?= $school_name ?></span>
    </a>
    <ul class="nav-menu" id="nav-menu">
      <li><a href="index.php"             class="nav-link">Beranda</a></li>
      <li><a href="profil.php"            class="nav-link">Profil</a></li>
      <li><a href="kepala-guru-staff.php" class="nav-link">Akademik &amp; Staf</a></li>
      <li><a href="index.php#fasilitas"   class="nav-link">Fasilitas</a></li>
      <li><a href="index.php#kontak"      class="nav-link nav-link--cta">Kontak</a></li>
    </ul>
    <button class="nav-hamburger" id="nav-hamburger" aria-label="Toggle menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>
  </nav>
</header>


<!-- ==============================
     BREADCRUMB
     ============================== -->
<div class="breadcrumb">
  <div class="breadcrumb-inner">
    <a href="index.php">Beranda</a>
    <span class="breadcrumb-sep">›</span>
    <span class="breadcrumb-current">Ekstrakurikuler</span>
  </div>
</div>


<!-- ==============================
     PAGE BANNER
     ============================== -->
<div class="page-banner">
  <div class="page-banner-inner">
    <h1>Ekstrakurikuler</h1>
    <p>Wadah pengembangan bakat, minat, dan karakter siswa <?= $school_name ?> di luar jam pelajaran.</p>
    <div class="banner-chips">
      <?php foreach ($ekskul as $e): ?>
      <span class="banner-chip"><?= $e['icon'] ?> <?= $e['nama'] ?></span>
      <?php endforeach; ?>
    </div>
  </div>
</div>


<!-- ==============================
     EKSKUL CARDS
     ============================== -->
<section class="section-ekskul">
  <div class="section-ekskul-inner">

    <div class="section-label">✦ Kegiatan Siswa</div>
    <h2 class="section-heading">Program Ekstrakurikuler</h2>
    <p class="section-desc">Tiga program ekskul aktif yang membentuk siswa menjadi pribadi unggul, berkarakter, dan berprestasi.</p>

    <div class="template-note">
      ⚠️ <strong>Template</strong> — Nama pembina dan foto kegiatan masih perlu diisi sesuai data aktual madrasah.
    </div>

    <div class="ekskul-list">
      <?php foreach ($ekskul as $i => $e): ?>
      <div class="ekskul-card">

        <!-- Foto -->
        <div class="ekskul-photo">
          <img src="<?= $e['foto'] ?>"
               alt="Foto Ekskul <?= $e['nama'] ?>"
               onerror="this.style.display='none';this.nextElementSibling.style.display='flex';" />
          <div class="ekskul-photo-placeholder" style="display:none;">
            <span><?= $e['icon'] ?></span>
            <span>Foto <?= $e['nama'] ?></span>
          </div>
          <div class="ekskul-number" style="background:<?= $e['warna'] ?>;"><?= $i + 1 ?></div>
        </div>

        <!-- Body -->
        <div class="ekskul-body">
          <span class="ekskul-tag" style="background:<?= $e['warna'] ?>;"><?= $e['icon'] ?> Ekstrakurikuler</span>
          <h3 class="ekskul-nama"><?= $e['nama'] ?></h3>
          <p class="ekskul-desc"><?= $e['desc'] ?></p>

          <div class="ekskul-meta">

            <div class="ekskul-meta-item">
              <div class="ekskul-meta-icon">
                <svg viewBox="0 0 24 24"><path d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z"/></svg>
              </div>
              <div class="ekskul-meta-text">
                <span class="ekskul-meta-label">Jadwal</span>
                <span class="ekskul-meta-value"><?= $e['hari'] ?></span>
              </div>
            </div>

            <div class="ekskul-meta-item">
              <div class="ekskul-meta-icon">
                <svg viewBox="0 0 24 24"><path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67V7z"/></svg>
              </div>
              <div class="ekskul-meta-text">
                <span class="ekskul-meta-label">Jam</span>
                <span class="ekskul-meta-value"><?= $e['jam'] ?></span>
              </div>
            </div>

            <div class="ekskul-meta-item">
              <div class="ekskul-meta-icon">
                <svg viewBox="0 0 24 24"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>
              </div>
              <div class="ekskul-meta-text">
                <span class="ekskul-meta-label">Pembina</span>
                <span class="ekskul-meta-value"><?= $e['pembina'] ?></span>
              </div>
            </div>

            <div class="ekskul-meta-item">
              <div class="ekskul-meta-icon">
                <svg viewBox="0 0 24 24"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
              </div>
              <div class="ekskul-meta-text">
                <span class="ekskul-meta-label">Peserta</span>
                <span class="ekskul-meta-value"><?= $e['peserta'] ?></span>
              </div>
            </div>

          </div>
        </div>

      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ==============================
     PRESTASI
     ============================== -->
<section class="section-prestasi">
  <div class="section-prestasi-inner">

    <div class="section-label" style="color:var(--green-pale);">🏆 Pencapaian</div>
    <h2 class="section-heading">Prestasi Ekstrakurikuler</h2>
    <p class="section-desc">Kebanggaan <?= $school_name ?> di berbagai ajang perlombaan</p>

    <div class="prestasi-grid">
      <?php foreach ($prestasi as $p): ?>
      <div class="prestasi-card">
        <div class="prestasi-trophy">🏆</div>
        <span class="prestasi-ekskul-badge" style="background:<?= array_column($ekskul,'warna','nama')[$p['ekskul']] ?? '#028A0F' ?>;">
          <?= $p['ekskul'] ?>
        </span>
        <div class="prestasi-judul"><?= $p['judul'] ?></div>
        <div class="prestasi-event"><?= $p['event'] ?></div>
        <div class="prestasi-tahun">📅 <?= $p['tahun'] ?></div>
      </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>


<!-- ==============================
     CTA – DAFTAR EKSKUL
     ============================== -->
<section class="section-cta">
  <h3>Tertarik Bergabung?</h3>
  <p>Daftarkan putra-putri Anda ke ekstrakurikuler pilihan. Hubungi kami untuk informasi lebih lanjut.</p>
  <div class="cta-btns">
    <a href="https://wa.me/6285210457475" target="_blank" rel="noopener" class="btn btn--primary">
      💬 Chat WhatsApp
    </a>
    <a href="index.php#kontak" class="btn btn--outline">
      📩 Kirim Pesan
    </a>
  </div>
</section>


<!-- ==============================
     FOOTER
     ============================== -->
<footer>
  <p>&copy; <?= $year ?> <span><?= $school_name ?></span>. All Rights Reserved.</p>
</footer>


<!-- ==============================
     JAVASCRIPT
     ============================== -->
<script>
  /* ---- Navbar ---- */
  const hamburger = document.getElementById('nav-hamburger');
  const navMenu   = document.getElementById('nav-menu');

  hamburger.addEventListener('click', () => {
    const open = navMenu.classList.toggle('nav-menu--open');
    hamburger.classList.toggle('nav-hamburger--open', open);
    hamburger.setAttribute('aria-expanded', open);
  });

  navMenu.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', () => {
      navMenu.classList.remove('nav-menu--open');
      hamburger.classList.remove('nav-hamburger--open');
      hamburger.setAttribute('aria-expanded', false);
    });
  });

  window.addEventListener('scroll', () => {
    document.getElementById('main-header')
      .classList.toggle('header--scrolled', window.scrollY > 40);
  });
</script>

</body>
</html>
