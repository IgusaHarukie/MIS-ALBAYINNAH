<?php
  $school_name = "MIS AL BAYINNAH";
  $year        = date("Y");

  // Badge: Jabatan → warna
  $jabatan_colors = [
    "Kepala Sekolah" => "#c0392b",
    "Guru"           => "#2D8F81",
    "Staff"          => "#FF7100",
  ];

  $people = [

    /* ========= KEPALA SEKOLAH (1) ========= */
    [
      "name"    => "H. SOLAHUDIN, S.Ag",
      "role"    => "KEPALA MADRASAH",
      "subject" => "—",
      "jabatan" => "Kepala Sekolah",
      "photo"   => "img/guru/kepsek.jpeg",
    ],

    /* ========= GURU PENGAJAR (15) ========= */
    ["name"=>"SITI MAEMUNAH, S.Pd.I",           "role"=>"Guru Kelas 1A",  "subject"=>"—","jabatan"=>"Guru","photo"=>"img/guru/guru-01.jpeg"],
    ["name"=>"LASTRI SULASTRI, S.Pd",           "role"=>"Guru Kelas 1B",  "subject"=>"—","jabatan"=>"Guru","photo"=>"img/guru/guru-02.jpeg"],
    ["name"=>"IKKA NURILAH JAMIL, S.Pd",        "role"=>"Guru Kelas 2A",  "subject"=>"—","jabatan"=>"Guru","photo"=>"img/guru/guru-03.jpeg"],
    ["name"=>"ROBIATUL ADAWIYAH, S.Pd",         "role"=>"Guru Kelas 2B",  "subject"=>"—","jabatan"=>"Guru","photo"=>"img/guru/guru-04.jpeg"],
    ["name"=>"DAYAT SEPTIAN, S.Pd",             "role"=>"Guru Kelas 3A",  "subject"=>"—","jabatan"=>"Guru","photo"=>"img/guru/guru-05.jpeg"],
    ["name"=>"SITI MAESAROH, S.Pd",             "role"=>"Guru Kelas 3B",  "subject"=>"—","jabatan"=>"Guru","photo"=>"img/guru/guru-06.jpeg"],
    ["name"=>"NISA KHUSNIATI, S.Pd",            "role"=>"Guru Kelas 4A",  "subject"=>"—","jabatan"=>"Guru","photo"=>"img/guru/guru-07.jpeg"],
    ["name"=>"MULYADI, S.Pd",                   "role"=>"Guru Kelas 4B",  "subject"=>"—","jabatan"=>"Guru","photo"=>"img/guru/guru-08.jpeg"],
    ["name"=>"HOERUNNISA, S.Pd",                "role"=>"Guru Kelas 5A",  "subject"=>"—","jabatan"=>"Guru","photo"=>"img/guru/guru-09.jpeg"],
    ["name"=>"SITI NURAENI, S.Th.I",            "role"=>"Guru Kelas 5B",  "subject"=>"—","jabatan"=>"Guru","photo"=>"img/guru/guru-10.jpeg"],
    ["name"=>"EKA SURYATI, S.Pd",               "role"=>"Guru Kelas 6A",  "subject"=>"—","jabatan"=>"Guru","photo"=>"img/guru/guru-11.jpeg"],
    ["name"=>"SITI HOMSYAH, S.Pd",              "role"=>"Guru Kelas 6B",  "subject"=>"—","jabatan"=>"Guru","photo"=>"img/guru/guru-12.jpeg"],
    ["name"=>"DEWI WULAN PURNAMA SARI",         "role"=>"Guru Mapel",     "subject"=>"—","jabatan"=>"Guru","photo"=>"img/guru/guru-13.jpeg"],
    ["name"=>"IKHFA ANAKING, S.Pd",             "role"=>"Guru Mapel",     "subject"=>"—","jabatan"=>"Guru","photo"=>"img/guru/guru-14.jpeg"],
    ["name"=>"SITI ARTANTI MULYASARI, S.Pd",    "role"=>"Guru Mapel",     "subject"=>"—","jabatan"=>"Guru","photo"=>"img/guru/guru-15.jpeg"],
    ["name"=>"THAZRA NUR ARIFAH",               "role"=>"Guru Mapel",     "subject"=>"—","jabatan"=>"Guru","photo"=>"img/guru/guru-16.jpeg"],

    /* ========= STAFF (4) ========= */
    ["name"=>"Vania Wijaya, S.Pd",   "role"=>"Operator Sekolah",    "subject"=>"—","jabatan"=>"Staff","photo"=>"img/guru/staff-01.jpeg"],
    ["name"=>"RIA ASTRIANTI, S.Pd",  "role"=>"Tata Usaha",          "subject"=>"—","jabatan"=>"Staff","photo"=>"img/guru/staff-02.jpeg"],
    ["name"=>"TOHA",                 "role"=>"Security / Kebersihan","subject"=>"—","jabatan"=>"Staff","photo"=>"img/guru/staff-03.jpeg"],
    ["name"=>"TRESNA PRAMANA",       "role"=>"Security",             "subject"=>"—","jabatan"=>"Staff","photo"=>"img/guru/staff-04.jpeg"],
  ];

  $kepsek_count = count(array_filter($people, fn($p) => $p['jabatan'] === 'Kepala Sekolah'));
  $guru_count   = count(array_filter($people, fn($p) => $p['jabatan'] === 'Guru'));
  $staff_count  = count(array_filter($people, fn($p) => $p['jabatan'] === 'Staff'));
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Kepala Sekolah, Guru & Staff <?= $school_name ?>" />
  <title>Akademik & Staf – <?= $school_name ?></title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="icon" type="image/png" href="img/logo.png" />
  <style>
    /* ===========================
       PAGE-SPECIFIC: KEPALA-GURU-STAFF
       (style.css di-load dulu, ini override & tambahan)
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
    .breadcrumb-inner a {
      color: var(--text-soft);
      text-decoration: none;
      transition: color 0.2s;
    }
    .breadcrumb-inner a:hover { color: var(--green-dark); }
    .breadcrumb-sep     { opacity: 0.4; }
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
    }
    .banner-stats {
      display: flex;
      gap: 14px;
      margin-top: 24px;
      flex-wrap: wrap;
    }
    .banner-stat {
      background: rgba(255,255,255,.10);
      border: 1px solid rgba(255,255,255,.18);
      border-radius: var(--radius-sm);
      padding: 10px 20px;
      text-align: center;
      min-width: 90px;
    }
    .banner-stat strong {
      display: block;
      font-family: 'Amiri', serif;
      font-size: 1.55rem;
      color: var(--white);
      line-height: 1;
    }
    .banner-stat span {
      font-size: 0.7rem;
      color: rgba(255,255,255,.6);
      text-transform: uppercase;
      letter-spacing: .05em;
    }

    /* ---- Filter Bar ---- */
    .filter-bar {
      background: var(--white);
      padding: 14px 24px;
      box-shadow: var(--shadow-sm);
      position: sticky;
      top: var(--navbar-h);   /* mengikuti tinggi navbar baru */
      z-index: 90;
      border-bottom: 1px solid var(--green-wash);
    }
    .filter-bar-inner {
      max-width: 1180px;
      margin: 0 auto;
      display: flex;
      align-items: center;
      gap: 10px;
      flex-wrap: wrap;
    }
    .filter-label {
      font-size: 0.78rem;
      font-weight: 800;
      color: var(--text-soft);
      text-transform: uppercase;
      letter-spacing: .05em;
      flex-shrink: 0;
    }
    .filter-btn {
      padding: 6px 16px;
      border-radius: 50px;
      border: 1.5px solid var(--green-pale);
      background: transparent;
      color: var(--text-mid);
      font-family: 'Nunito', sans-serif;
      font-size: 0.82rem;
      font-weight: 700;
      cursor: pointer;
      transition: var(--transition);
    }
    .filter-btn:hover { background: var(--green-wash); }
    .filter-btn.active { background: var(--green-dark); border-color: var(--green-dark); color: var(--white); }
    .filter-btn[data-filter="Kepala Sekolah"].active { background: #c0392b; border-color: #c0392b; }
    .filter-btn[data-filter="Guru"].active            { background: #2D8F81; border-color: #2D8F81; }
    .filter-btn[data-filter="Staff"].active           { background: #FF7100; border-color: #FF7100; }

    .search-wrap {
      margin-left: auto;
      position: relative;
    }
    .search-wrap svg {
      position: absolute;
      left: 12px;
      top: 50%;
      transform: translateY(-50%);
      width: 15px; height: 15px;
      fill: var(--text-soft);
      pointer-events: none;
    }
    .search-input {
      padding: 7px 14px 7px 34px;
      border-radius: 50px;
      border: 1.5px solid var(--green-pale);
      font-family: 'Nunito', sans-serif;
      font-size: 0.82rem;
      color: var(--text-dark);
      background: var(--green-bg);
      outline: none;
      width: 220px;
      transition: var(--transition);
    }
    .search-input:focus {
      border-color: var(--green-mid);
      background: var(--white);
      box-shadow: 0 0 0 3px rgba(2,138,15,.1);
    }

    /* ---- Section Wrapper ---- */
    .section-people {
      background: var(--green-bg);
      padding: 40px 24px 64px;
    }
    .section-people-inner {
      max-width: 1180px;
      margin: 0 auto;
    }

    /* ---- Legend ---- */
    .legend {
      display: flex;
      align-items: center;
      gap: 18px;
      flex-wrap: wrap;
      font-size: 0.78rem;
      color: var(--text-soft);
      margin-bottom: 32px;
    }
    .legend-item { display: flex; align-items: center; gap: 6px; }
    .legend-dot  { width: 10px; height: 10px; border-radius: 50%; flex-shrink: 0; }

    /* ---- Group Heading ---- */
    .group-divider { margin-bottom: 44px; }
    .group-heading {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 20px;
    }
    .group-heading-dot { width: 12px; height: 12px; border-radius: 50%; flex-shrink: 0; }
    .group-heading h3 {
      font-family: 'Amiri', serif;
      font-size: 1.2rem;
      font-weight: 700;
      color: var(--text-dark);
    }
    .group-heading-count {
      font-size: 0.72rem;
      font-weight: 800;
      color: var(--white);
      padding: 2px 11px;
      border-radius: 50px;
    }

    /* ---- Card Grids ---- */
    .people-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(190px, 1fr));
      gap: 18px;
    }

    /* Kepala Sekolah – single wide card */
    .people-grid.grid-kepsek {
      grid-template-columns: minmax(220px, 460px);
    }
    .people-grid.grid-kepsek .person-card {
      flex-direction: row;
    }
    .people-grid.grid-kepsek .person-photo-wrap {
      width: 170px;
      min-width: 170px;
      aspect-ratio: 1 / 1.15;
      border-radius: var(--radius-md) 0 0 var(--radius-md);
    }
    .people-grid.grid-kepsek .person-name  { font-size: 1.2rem; }
    .people-grid.grid-kepsek .person-role  { font-size: 0.88rem; }
    .people-grid.grid-kepsek .person-badge { font-size: 0.76rem; padding: 4px 16px; }

    /* ---- Person Card ---- */
    .person-card {
      background: var(--white);
      border-radius: var(--radius-md);
      overflow: hidden;
      box-shadow: var(--shadow-sm);
      transition: var(--transition);
      display: flex;
      flex-direction: column;
      animation: fadeInUp 0.45s ease both;
    }
    .person-card:hover {
      transform: translateY(-5px);
      box-shadow: var(--shadow-lg);
    }
    .person-card.card-kepsek {
      border: 2px solid rgba(192,57,43,.2);
      box-shadow: 0 4px 20px rgba(192,57,43,.12);
    }

    .person-photo-wrap {
      width: 100%;
      aspect-ratio: 1 / 1;
      overflow: hidden;
      flex-shrink: 0;
    }
    .person-photo-wrap img {
      width: 100%; height: 100%;
      object-fit: cover;
      object-position: center top;
      display: block;
      transition: var(--transition);
    }
    .person-card:hover .person-photo-wrap img { transform: scale(1.05); }

    .person-photo-placeholder {
      width: 100%; height: 100%;
      background: linear-gradient(135deg, var(--green-wash) 0%, #b2f0b4 100%);
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .person-photo-placeholder svg {
      width: 50px; height: 50px;
      fill: var(--green-mid);
      opacity: 0.4;
    }

    .person-body {
      padding: 14px 16px 16px;
      display: flex;
      flex-direction: column;
      gap: 3px;
      flex: 1;
    }
    .person-name {
      font-family: 'Amiri', serif;
      font-size: 0.97rem;
      font-weight: 700;
      color: var(--text-dark);
      line-height: 1.3;
    }
    .person-role {
      font-size: 0.78rem;
      color: var(--text-soft);
      line-height: 1.4;
    }
    .person-badge {
      display: inline-block;
      margin-top: 9px;
      padding: 3px 12px;
      border-radius: 50px;
      font-size: 0.67rem;
      font-weight: 800;
      letter-spacing: .05em;
      color: var(--white);
      align-self: flex-start;
    }

    /* ---- Empty State ---- */
    .empty-state {
      text-align: center;
      padding: 64px 20px;
      color: var(--text-soft);
      grid-column: 1 / -1;
    }
    .empty-state svg { width: 52px; height: 52px; fill: var(--green-pale); margin: 0 auto 14px; }

    /* ---- Footer override (halaman ini pakai footer simple) ---- */
    footer {
      background: var(--text-dark);
      color: rgba(255,255,255,.45);
      text-align: center;
      padding: 20px 24px;
      font-size: 0.82rem;
    }
    footer span { color: var(--green-pale); font-weight: 700; }

    /* ---- Responsive ---- */
    @media (max-width: 900px) {
      /* Navbar mobile sudah di-handle style.css */
      .filter-bar { top: var(--navbar-h); }
    }

    @media (max-width: 700px) {
      .page-banner h1      { font-size: 1.45rem; }
      .filter-bar-inner    { gap: 8px; }
      .search-wrap         { margin-left: 0; width: 100%; }
      .search-input        { width: 100%; }
      .people-grid         { grid-template-columns: repeat(2, 1fr); gap: 12px; }
      .people-grid.grid-kepsek { grid-template-columns: 1fr; }
      .people-grid.grid-kepsek .person-card { flex-direction: column; }
      .people-grid.grid-kepsek .person-photo-wrap {
        width: 100%;
        aspect-ratio: 3/2;
        border-radius: var(--radius-md) var(--radius-md) 0 0;
      }
    }
    @media (max-width: 380px) {
      .people-grid { grid-template-columns: 1fr; }
    }
  </style>
</head>
<body>

<!-- ==============================
     HEADER / NAVBAR (sama dengan index.php)
     ============================== -->
<header id="main-header">
  <nav class="navbar">

    <a href="index.php" class="navbar-brand">
      <img src="img/logo.png" alt="Logo <?= $school_name ?>" class="navbar-logo" width="70" height="67" />
      <span class="navbar-title"><?= $school_name ?></span>
    </a>

    <ul class="nav-menu" id="nav-menu">
      <li><a href="index.php"              class="nav-link">Beranda</a></li>
      <li><a href="profil.php"             class="nav-link">Profil</a></li>
      <li><a href="kepala-guru-staff.php"  class="nav-link active">Akademik &amp; Staf</a></li>
      <li><a href="index.php#fasilitas"    class="nav-link">Fasilitas</a></li>
      <li><a href="index.php#kontak"       class="nav-link nav-link--cta">Kontak</a></li>
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
    <span class="breadcrumb-current">Akademik &amp; Staf</span>
  </div>
</div>


<!-- ==============================
     PAGE BANNER
     ============================== -->
<div class="page-banner">
  <div class="page-banner-inner">
    <h1>Kepala Sekolah, Guru &amp; Staff</h1>
    <p>Seluruh tenaga pendidik dan kependidikan <?= $school_name ?> yang berdedikasi membentuk generasi Qur'ani dan berprestasi.</p>
    <div class="banner-stats">
      <div class="banner-stat">
        <strong><?= count($people) ?></strong>
        <span>Total</span>
      </div>
      <div class="banner-stat" style="border-color:rgba(192,57,43,.4);">
        <strong><?= $kepsek_count ?></strong>
        <span>Kepala Sekolah</span>
      </div>
      <div class="banner-stat" style="border-color:rgba(45,143,129,.4);">
        <strong><?= $guru_count ?></strong>
        <span>Guru</span>
      </div>
      <div class="banner-stat" style="border-color:rgba(255,113,0,.4);">
        <strong><?= $staff_count ?></strong>
        <span>Staff</span>
      </div>
    </div>
  </div>
</div>


<!-- ==============================
     FILTER BAR
     ============================== -->
<div class="filter-bar">
  <div class="filter-bar-inner">
    <span class="filter-label">Filter:</span>
    <button class="filter-btn active" data-filter="all">Semua</button>
    <button class="filter-btn" data-filter="Kepala Sekolah">Kepala Sekolah</button>
    <button class="filter-btn" data-filter="Guru">Guru</button>
    <button class="filter-btn" data-filter="Staff">Staff</button>
    <div class="search-wrap">
      <svg viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0016 9.5 6.5 6.5 0 109.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
      <input type="text" class="search-input" id="searchInput" placeholder="Cari nama atau jabatan…" />
    </div>
  </div>
</div>


<!-- ==============================
     MAIN CONTENT
     ============================== -->
<section class="section-people">
  <div class="section-people-inner">

    <!-- Legend -->
    <div class="legend">
      <span>Keterangan:</span>
      <div class="legend-item"><div class="legend-dot" style="background:#c0392b;"></div><span>Kepala Sekolah</span></div>
      <div class="legend-item"><div class="legend-dot" style="background:#2D8F81;"></div><span>Guru</span></div>
      <div class="legend-item"><div class="legend-dot" style="background:#FF7100;"></div><span>Staff</span></div>
    </div>

    <!-- ===== GROUP: KEPALA SEKOLAH ===== -->
    <div class="group-divider" data-group="Kepala Sekolah">
      <div class="group-heading">
        <div class="group-heading-dot" style="background:#c0392b;"></div>
        <h3>Kepala Sekolah</h3>
        <span class="group-heading-count" style="background:#c0392b;"><?= $kepsek_count ?></span>
      </div>
      <div class="people-grid grid-kepsek">
        <?php foreach ($people as $p): if ($p['jabatan'] !== 'Kepala Sekolah') continue; ?>
        <div class="person-card card-kepsek" data-jabatan="<?= $p['jabatan'] ?>" data-name="<?= strtolower($p['name']) ?>" data-role="<?= strtolower($p['role']) ?>">
          <div class="person-photo-wrap">
            <img src="<?= $p['photo'] ?>" alt="Foto <?= $p['name'] ?>" loading="eager"
                 onerror="this.style.display='none';this.nextElementSibling.style.display='flex';" />
            <div class="person-photo-placeholder" style="display:none;">
              <svg viewBox="0 0 24 24"><path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/></svg>
            </div>
          </div>
          <div class="person-body">
            <div class="person-name"><?= $p['name'] ?></div>
            <div class="person-role"><?= $p['role'] ?></div>
            <span class="person-badge" style="background:#c0392b;"><?= $p['jabatan'] ?></span>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ===== GROUP: GURU ===== -->
    <div class="group-divider" data-group="Guru">
      <div class="group-heading">
        <div class="group-heading-dot" style="background:#2D8F81;"></div>
        <h3>Guru Pengajar</h3>
        <span class="group-heading-count" style="background:#2D8F81;"><?= $guru_count ?></span>
      </div>
      <div class="people-grid">
        <?php foreach ($people as $i => $p): if ($p['jabatan'] !== 'Guru') continue;
          $delay = ($i % 8) * 0.05; ?>
        <div class="person-card" data-jabatan="<?= $p['jabatan'] ?>" data-name="<?= strtolower($p['name']) ?>" data-role="<?= strtolower($p['role']) ?>" style="animation-delay:<?= $delay ?>s">
          <div class="person-photo-wrap">
            <img src="<?= $p['photo'] ?>" alt="Foto <?= $p['name'] ?>" loading="lazy"
                 onerror="this.style.display='none';this.nextElementSibling.style.display='flex';" />
            <div class="person-photo-placeholder" style="display:none;">
              <svg viewBox="0 0 24 24"><path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/></svg>
            </div>
          </div>
          <div class="person-body">
            <div class="person-name"><?= $p['name'] ?></div>
            <div class="person-role"><?= $p['role'] ?></div>
            <span class="person-badge" style="background:#2D8F81;"><?= $p['jabatan'] ?></span>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- ===== GROUP: STAFF ===== -->
    <div class="group-divider" data-group="Staff">
      <div class="group-heading">
        <div class="group-heading-dot" style="background:#FF7100;"></div>
        <h3>Staff</h3>
        <span class="group-heading-count" style="background:#FF7100;"><?= $staff_count ?></span>
      </div>
      <div class="people-grid">
        <?php foreach ($people as $i => $p): if ($p['jabatan'] !== 'Staff') continue;
          $delay = ($i % 6) * 0.05; ?>
        <div class="person-card" data-jabatan="<?= $p['jabatan'] ?>" data-name="<?= strtolower($p['name']) ?>" data-role="<?= strtolower($p['role']) ?>" style="animation-delay:<?= $delay ?>s">
          <div class="person-photo-wrap">
            <img src="<?= $p['photo'] ?>" alt="Foto <?= $p['name'] ?>" loading="lazy"
                 onerror="this.style.display='none';this.nextElementSibling.style.display='flex';" />
            <div class="person-photo-placeholder" style="display:none;">
              <svg viewBox="0 0 24 24"><path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/></svg>
            </div>
          </div>
          <div class="person-body">
            <div class="person-name"><?= $p['name'] ?></div>
            <div class="person-role"><?= $p['role'] ?></div>
            <span class="person-badge" style="background:#FF7100;"><?= $p['jabatan'] ?></span>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>

    <!-- Empty State -->
    <div id="emptyState" style="display:none;" class="empty-state">
      <svg viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0016 9.5 6.5 6.5 0 109.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"/></svg>
      <p>Tidak ada yang ditemukan.</p>
    </div>

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
  /* ---- Navbar Hamburger (sama dengan index.php) ---- */
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
    document.getElementById('main-header').classList.toggle('header--scrolled', window.scrollY > 40);
  });

  /* ---- Filter & Search ---- */
  const cards       = document.querySelectorAll('.person-card');
  const filterBtns  = document.querySelectorAll('.filter-btn');
  const searchInput = document.getElementById('searchInput');
  const groups      = document.querySelectorAll('.group-divider');
  const emptyState  = document.getElementById('emptyState');

  let activeFilter = 'all';
  let searchQuery  = '';

  function applyFilters() {
    let totalVisible = 0;

    groups.forEach(group => {
      const groupCards = group.querySelectorAll('.person-card');
      let groupVisible = 0;

      groupCards.forEach(card => {
        const matchFilter = activeFilter === 'all' || card.dataset.jabatan === activeFilter;
        const matchSearch = !searchQuery
          || card.dataset.name.includes(searchQuery)
          || card.dataset.role.includes(searchQuery);

        const show = matchFilter && matchSearch;
        card.style.display = show ? '' : 'none';
        if (show) { groupVisible++; totalVisible++; }
      });

      group.style.display = groupVisible === 0 ? 'none' : '';
    });

    emptyState.style.display = totalVisible === 0 ? 'block' : 'none';
  }

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      activeFilter = btn.dataset.filter;
      applyFilters();
    });
  });

  searchInput.addEventListener('input', e => {
    searchQuery = e.target.value.toLowerCase().trim();
    applyFilters();
  });
</script>

</body>
</html>
