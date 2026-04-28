<?php
  $school_name = "MIS AL BAYINNAH";
  $year        = date("Y");

  $visi = "Terwujudnya warga madrasah yang Qur'ani, unggul dalam ilmu pengetahuan, teguh dalam iman dan taqwa";

  $misi = [
    "Mengoptimalkan program Tahfid Al-Qur'an dan pengamalannya.",
    "Melaksanakan pembelajaran yang berkualitas dan bimbingan secara efektif, sehingga murid berkembang secara optimal, sesuai dengan potensi yang dimiliki.",
    "Menumbuhkan semangat budaya baca secara intensif kepada seluruh warga madrasah.",
    "Mendorong dan membantu setiap murid untuk mengenali potensi dirinya, sehingga dapat dikembangkan secara optimal.",
    "Menumbuhkan penghayatan terhadap ajaran Agama Islam dan juga budaya bangsa sehingga menjadi sumber kearifan dalam bertindak dan bertanggung jawab.",
    "Menerapkan manajemen partisipatif dengan melibatkan seluruh warga madrasah dan kelompok kepentingan yang terkait dengan madrasah (stakeholders) dalam mewujudkan madrasah tahfidz.",
    "Meningkatkan pengolahan Madrasah yang disesuaikan dengan kemampuan warga madrasah.",
    "Membangun dan mengembangkan komitmen cinta kehidupan alam dan lingkungan hidup.",
    "Memberi layanan bagi tenaga kependidikan melalui diklat tingkat dasar yang berorientasi pada akhlaqul karimah dan kesempurnaan IMTAQ kepada Allah SWT.",
  ];

  $identitas = [
    ["label" => "Nama Madrasah",         "value" => "MIS Al-Bayinnah Dramaga"],
    ["label" => "NSM",                   "value" => "111232010057"],
    ["label" => "NPSN",                  "value" => "60726446"],
    ["label" => "Status Madrasah",       "value" => "Swasta"],
    ["label" => "Akreditasi",            "value" => "B"],
    ["label" => "Tahun Berdiri",         "value" => "1990"],
    ["label" => "Kepala Madrasah",       "value" => "H. Solahudin, S.Ag"],
    ["label" => "Alamat",                "value" => "Kp. Manggis, RT.02/RW.04"],
    ["label" => "Desa/Kelurahan",        "value" => "Dramaga"],
    ["label" => "Kabupaten/Kota",        "value" => "Kabupaten Bogor"],
    ["label" => "Provinsi",              "value" => "Jawa Barat"],
    ["label" => "Kode Pos",              "value" => "16680"],
    ["label" => "No. Telepon",           "value" => "+62 852-1045-7475"],
    ["label" => "Email",                 "value" => "2027albyynh@gmail.com"],
    ["label" => "Yayasan Penyelenggara", "value" => "Yayasan Al-Bayinnah"],
  ];

  $program = [
    [
      "icon"  => "📖",
      "judul" => "Tahfidz Al-Qur'an",
      "desc"  => "Program unggulan hafalan Al-Qur'an yang diintegrasikan ke dalam kurikulum harian. Siswa dibimbing secara intensif oleh guru tahfidz berpengalaman dengan target hafalan yang terstruktur per jenjang kelas.",
    ],
    [
      "icon"  => "🌟",
      "judul" => "Pembelajaran Berbasis Karakter",
      "desc"  => "Membentuk akhlak mulia melalui pembiasaan nilai-nilai Islami dalam setiap kegiatan belajar mengajar, mulai dari adab masuk kelas, doa bersama, hingga kegiatan sosial.",
    ],
    [
      "icon"  => "💻",
      "judul" => "Literasi Digital",
      "desc"  => "Pengenalan teknologi informasi sejak dini melalui laboratorium komputer yang dilengkapi dengan akses internet dan perangkat pembelajaran digital yang memadai.",
    ],
    [
      "icon"  => "🏆",
      "judul" => "Pembinaan Prestasi",
      "desc"  => "Program ekstrakurikuler dan pembinaan olimpiade untuk mengembangkan potensi siswa di bidang akademik maupun non-akademik, termasuk perlombaan tilawah, adzan, dan kaligrafi.",
    ],
    [
      "icon"  => "🌱",
      "judul" => "Peduli Lingkungan",
      "desc"  => "Program madrasah hijau yang mendidik siswa untuk mencintai dan menjaga lingkungan hidup melalui kegiatan penghijauan, pengelolaan sampah, dan budidaya tanaman.",
    ],
    [
      "icon"  => "🤝",
      "judul" => "Parenting & Komite",
      "desc"  => "Keterlibatan aktif orang tua dan masyarakat dalam pengembangan madrasah melalui pertemuan rutin, program parenting Islami, dan forum komunikasi antara wali murid dan guru.",
    ],
  ];

  $struktur = [
    ["jabatan" => "Kepala Madrasah",         "nama" => "H. Solahudin, S.Ag",          "level" => 1],
    ["jabatan" => "Komite Madrasah",         "nama" => "— (Template)",                "level" => 2],
    ["jabatan" => "Wakil Kepala Madrasah",   "nama" => "— (Template)",                "level" => 2],
    ["jabatan" => "Bendahara",               "nama" => "— (Template)",                "level" => 3],
    ["jabatan" => "Tata Usaha",              "nama" => "Ria Astrianti, S.Pd",         "level" => 3],
    ["jabatan" => "Operator Sekolah",        "nama" => "Vania Wijaya, S.Pd",          "level" => 3],
    ["jabatan" => "Koordinator Guru",        "nama" => "— (Template)",                "level" => 3],
    ["jabatan" => "Guru Kelas & Mapel",      "nama" => "16 Tenaga Pengajar",          "level" => 4],
    ["jabatan" => "Staff Kebersihan & Keamanan", "nama" => "Toha & Tresna Pramana",   "level" => 4],
  ];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Profil <?= $school_name ?> – Sejarah, Visi Misi, Struktur Organisasi, Identitas Sekolah, dan Program Unggulan." />
  <title>Profil – <?= $school_name ?></title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="icon" type="image/png" href="img/logo.png" />
  <style>
    /* ===========================
       PROFIL PAGE – SPECIFIC STYLES
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
    .breadcrumb-inner a { color: var(--text-soft); text-decoration: none; transition: color 0.2s; }
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

    /* ---- Tab Navigation ---- */
    .tab-nav {
      background: var(--white);
      border-bottom: 2px solid var(--green-wash);
      position: sticky;
      top: var(--navbar-h);
      z-index: 90;
    }
    .tab-nav-inner {
      max-width: 1180px;
      margin: 0 auto;
      padding: 0 24px;
      display: flex;
      gap: 0;
      overflow-x: auto;
      scrollbar-width: none;
    }
    .tab-nav-inner::-webkit-scrollbar { display: none; }

    .tab-btn {
      padding: 16px 20px;
      font-family: 'Nunito', sans-serif;
      font-size: 0.85rem;
      font-weight: 700;
      color: var(--text-soft);
      background: none;
      border: none;
      border-bottom: 3px solid transparent;
      cursor: pointer;
      white-space: nowrap;
      transition: var(--transition);
      margin-bottom: -2px;
    }
    .tab-btn:hover { color: var(--green-dark); }
    .tab-btn.active {
      color: var(--green-dark);
      border-bottom-color: var(--green-dark);
    }

    /* ---- Tab Content ---- */
    .tab-content { display: none; }
    .tab-content.active { display: block; }

    /* ---- Section Base ---- */
    .profil-section {
      padding: 60px 24px 80px;
    }
    .profil-section-inner {
      max-width: 1180px;
      margin: 0 auto;
    }
    .profil-section-title {
      font-family: 'Amiri', serif;
      font-size: 1.7rem;
      font-weight: 700;
      color: var(--text-dark);
      margin-bottom: 8px;
    }
    .profil-section-sub {
      color: var(--text-soft);
      font-size: 0.88rem;
      margin-bottom: 36px;
    }

    /* ==============================
       TAB 1 – SEJARAH
       ============================== */
    .sejarah-grid {
      display: grid;
      grid-template-columns: 1fr 380px;
      gap: 48px;
      align-items: start;
    }
    .sejarah-text h3 {
      font-family: 'Amiri', serif;
      font-size: 1.3rem;
      color: var(--green-dark);
      margin: 28px 0 10px;
    }
    .sejarah-text h3:first-child { margin-top: 0; }
    .sejarah-text p {
      color: #2a3a2c;
      font-size: 0.92rem;
      line-height: 1.9;
      margin-bottom: 14px;
    }

    .sejarah-timeline {
      display: flex;
      flex-direction: column;
      gap: 0;
    }
    .timeline-item {
      display: flex;
      gap: 16px;
      position: relative;
    }
    .timeline-item:not(:last-child)::after {
      content: '';
      position: absolute;
      left: 19px;
      top: 38px;
      bottom: 0;
      width: 2px;
      background: var(--green-wash);
    }
    .timeline-dot {
      width: 38px;
      height: 38px;
      border-radius: 50%;
      background: var(--green-dark);
      color: var(--white);
      font-size: 0.7rem;
      font-weight: 800;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      z-index: 1;
      box-shadow: 0 2px 8px rgba(2,138,15,.3);
    }
    .timeline-body {
      padding: 6px 0 28px;
    }
    .timeline-year {
      font-size: 0.72rem;
      font-weight: 800;
      color: var(--green-mid);
      text-transform: uppercase;
      letter-spacing: .05em;
      margin-bottom: 3px;
    }
    .timeline-desc {
      font-size: 0.875rem;
      color: var(--text-dark);
      line-height: 1.6;
    }

    /* ==============================
       TAB 2 – VISI MISI
       ============================== */
    .visimisi-section { background: var(--green-bg); }

    .visi-card {
      background: var(--green-dark);
      border-radius: var(--radius-lg);
      padding: 40px 44px;
      text-align: center;
      margin-bottom: 36px;
      position: relative;
      overflow: hidden;
    }
    .visi-card::before {
      content: '"';
      position: absolute;
      top: -20px;
      left: 24px;
      font-family: 'Amiri', serif;
      font-size: 12rem;
      color: rgba(255,255,255,.05);
      line-height: 1;
      pointer-events: none;
    }
    .visi-label {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(255,255,255,.12);
      border: 1px solid rgba(255,255,255,.2);
      color: var(--green-pale);
      padding: 5px 16px;
      border-radius: 50px;
      font-size: 0.75rem;
      font-weight: 800;
      letter-spacing: .06em;
      text-transform: uppercase;
      margin-bottom: 20px;
    }
    .visi-text {
      font-family: 'Amiri', serif;
      font-size: 1.9rem;
      font-style: italic;
      color: var(--white);
      line-height: 1.7;
      max-width: 820px;
      margin: 0 auto;
    }

    .misi-card {
      background: var(--white);
      border-radius: var(--radius-lg);
      padding: 36px 40px;
      box-shadow: var(--shadow-sm);
    }
    .misi-header {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 28px;
      padding-bottom: 18px;
      border-bottom: 2px solid var(--green-wash);
    }
    .misi-header-icon {
      width: 42px;
      height: 42px;
      background: var(--green-dark);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }
    .misi-header-icon svg { width: 20px; height: 20px; fill: var(--white); }
    .misi-header h3 {
      font-family: 'Amiri', serif;
      font-size: 1.25rem;
      color: var(--text-dark);
    }
    .misi-list {
      display: flex;
      flex-direction: column;
      gap: 14px;
      list-style: none;
      padding: 0;
    }
    .misi-list li {
      display: flex;
      gap: 14px;
      align-items: flex-start;
      font-size: 0.92rem;
      color: #1e3620;
      line-height: 1.75;
    }
    .misi-num {
      width: 28px;
      height: 28px;
      background: var(--green-dark);
      color: var(--white);
      border-radius: 50%;
      font-size: 0.72rem;
      font-weight: 800;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
      margin-top: 2px;
    }

    /* ==============================
       TAB 3 – STRUKTUR ORGANISASI
       ============================== */
    .struktur-section { background: var(--green-bg); }

    .struktur-note {
      background: rgba(255,113,0,.08);
      border: 1px solid rgba(255,113,0,.25);
      border-radius: var(--radius-sm);
      padding: 12px 16px;
      font-size: 0.82rem;
      color: #7a3800;
      margin-bottom: 32px;
    }

    .org-chart {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 0;
    }

    .org-level {
      display: flex;
      justify-content: center;
      gap: 16px;
      flex-wrap: wrap;
      width: 100%;
      position: relative;
    }

    .org-level:not(:last-child) {
      margin-bottom: 0;
      padding-bottom: 32px;
    }

    /* Garis vertikal dari level ke level */
    .org-connector {
      width: 2px;
      height: 32px;
      background: var(--green-pale);
      margin: 0 auto;
    }

    .org-node {
      background: var(--white);
      border: 2px solid var(--green-wash);
      border-radius: var(--radius-md);
      padding: 14px 20px;
      text-align: center;
      min-width: 170px;
      max-width: 220px;
      box-shadow: var(--shadow-sm);
      transition: var(--transition);
    }
    .org-node:hover {
      border-color: var(--green-mid);
      box-shadow: var(--shadow-md);
      transform: translateY(-2px);
    }
    .org-node--head {
      background: var(--green-dark);
      border-color: var(--green-dark);
      min-width: 220px;
    }
    .org-node--head .org-jabatan { color: var(--green-pale); }
    .org-node--head .org-nama    { color: var(--white); }

    .org-jabatan {
      font-size: 0.7rem;
      font-weight: 800;
      text-transform: uppercase;
      letter-spacing: .05em;
      color: var(--green-dark);
      margin-bottom: 4px;
    }
    .org-nama {
      font-family: 'Amiri', serif;
      font-size: 0.92rem;
      font-weight: 700;
      color: var(--text-dark);
      line-height: 1.3;
    }

    /* ==============================
       TAB 4 – IDENTITAS SEKOLAH
       ============================== */
    .identitas-section { background: var(--white); }

    .identitas-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 0;
      border: 1.5px solid var(--green-wash);
      border-radius: var(--radius-lg);
      overflow: hidden;
      box-shadow: var(--shadow-sm);
    }
    .identitas-row {
      display: contents;
    }
    .identitas-label,
    .identitas-value {
      padding: 13px 20px;
      font-size: 0.875rem;
      border-bottom: 1px solid var(--green-wash);
    }
    .identitas-label {
      background: var(--green-bg);
      color: var(--text-soft);
      font-weight: 700;
    }
    .identitas-value {
      background: var(--white);
      color: var(--text-dark);
    }
    .identitas-label:last-of-type,
    .identitas-value:last-of-type {
      border-bottom: none;
    }

    /* ==============================
       TAB 5 – PROGRAM UNGGULAN
       ============================== */
    .program-section { background: var(--green-bg); }

    .program-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 20px;
    }
    .program-card {
      background: var(--white);
      border-radius: var(--radius-lg);
      padding: 28px 24px;
      box-shadow: var(--shadow-sm);
      border: 1.5px solid var(--green-wash);
      transition: var(--transition);
    }
    .program-card:hover {
      transform: translateY(-4px);
      box-shadow: var(--shadow-md);
      border-color: var(--green-mid);
    }
    .program-icon {
      font-size: 2.2rem;
      margin-bottom: 14px;
      display: block;
    }
    .program-judul {
      font-family: 'Amiri', serif;
      font-size: 1.1rem;
      font-weight: 700;
      color: var(--green-dark);
      margin-bottom: 10px;
    }
    .program-desc {
      font-size: 0.86rem;
      color: #2a3a2c;
      line-height: 1.8;
    }

    /* ---- Footer simple ---- */
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
      .sejarah-grid    { grid-template-columns: 1fr; }
      .program-grid    { grid-template-columns: 1fr 1fr; }
      .identitas-grid  { grid-template-columns: 1fr; }
      .identitas-label,
      .identitas-value { border-bottom: 1px solid var(--green-wash); }
    }
    @media (max-width: 600px) {
      .program-grid  { grid-template-columns: 1fr; }
      .visi-text     { font-size: 1.4rem; }
      .tab-btn       { padding: 14px 14px; font-size: 0.8rem; }
      .misi-card     { padding: 24px 20px; }
      .visi-card     { padding: 28px 24px; }
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
      <li><a href="profil.php"            class="nav-link active">Profil</a></li>
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
    <span class="breadcrumb-current">Profil Madrasah</span>
  </div>
</div>


<!-- ==============================
     PAGE BANNER
     ============================== -->
<div class="page-banner">
  <div class="page-banner-inner">
    <h1>Profil Madrasah</h1>
    <p>Mengenal lebih dekat <?= $school_name ?> — sejarah, visi misi, struktur organisasi, identitas, dan program unggulan madrasah.</p>
  </div>
</div>


<!-- ==============================
     TAB NAVIGATION
     ============================== -->
<div class="tab-nav">
  <div class="tab-nav-inner">
    <button class="tab-btn active" data-tab="sejarah">📜 Sejarah</button>
    <button class="tab-btn"        data-tab="visimisi">🌟 Visi &amp; Misi</button>
    <button class="tab-btn"        data-tab="struktur">🏛️ Struktur Organisasi</button>
    <button class="tab-btn"        data-tab="identitas">📋 Identitas Sekolah</button>
    <button class="tab-btn"        data-tab="program">🎯 Program Unggulan</button>
  </div>
</div>


<!-- ==============================
     TAB 1: SEJARAH
     ============================== -->
<div class="tab-content active" id="tab-sejarah">
  <div class="profil-section">
    <div class="profil-section-inner">
      <h2 class="profil-section-title">Sejarah Madrasah</h2>
      <p class="profil-section-sub">Perjalanan panjang <?= $school_name ?> dalam mendidik generasi Qur'ani</p>

      <div class="sejarah-grid">

        <!-- Narasi -->
        <div class="sejarah-text">
          <h3>Latar Belakang Pendirian</h3>
          <p>
            MIS Al-Bayinnah Dramaga didirikan atas kesadaran dan kepedulian masyarakat Kampung Manggis
            terhadap pentingnya pendidikan Islam yang berkualitas bagi generasi penerus. Berawal dari
            pengajian dan kegiatan belajar mengajar sederhana di lingkungan masjid, madrasah ini
            tumbuh menjadi lembaga pendidikan formal yang diakui.
          </p>
          <p>
            Dengan semangat kebersamaan dan dukungan penuh dari warga sekitar, para pendiri madrasah
            bersepakat untuk mendirikan Madrasah Ibtidaiyah Swasta yang berazaskan nilai-nilai
            Al-Qur'an dan Sunnah, dengan tetap mengikuti kurikulum nasional yang berlaku.
          </p>

          <h3>Perkembangan Madrasah</h3>
          <p>
            Sejak berdiri, MIS Al-Bayinnah terus mengalami perkembangan yang signifikan baik dari
            segi fisik bangunan, kualitas tenaga pengajar, maupun jumlah peserta didik. Program
            Tahfidz Al-Qur'an menjadi ciri khas dan keunggulan utama yang membedakan madrasah ini
            dari sekolah dasar lainnya di wilayah Dramaga.
          </p>
          <p>
            Kini dengan lebih dari 320 siswa aktif dan 22 tenaga pendidik yang berdedikasi,
            MIS Al-Bayinnah terus berkomitmen mewujudkan generasi yang Qur'ani, unggul dalam
            ilmu pengetahuan, serta teguh dalam iman dan taqwa.
          </p>

          <h3>Komitmen ke Depan</h3>
          <p>
            MIS Al-Bayinnah berkomitmen untuk terus meningkatkan mutu pendidikan, memperluas
            fasilitas belajar, dan memperkuat program-program unggulan demi menjawab tantangan
            zaman tanpa meninggalkan nilai-nilai Islam yang menjadi fondasi utama madrasah.
          </p>
        </div>

        <!-- Timeline -->
        <div>
          <h3 style="font-family:'Amiri',serif;font-size:1.1rem;color:var(--text-dark);margin-bottom:20px;">Tonggak Sejarah</h3>
          <div class="sejarah-timeline">
            <div class="timeline-item">
              <div class="timeline-dot">📌</div>
              <div class="timeline-body">
                <div class="timeline-year">1990</div>
                <div class="timeline-desc">Pendirian MIS Al-Bayinnah oleh masyarakat Kampung Manggis, Dramaga.</div>
              </div>
            </div>
            <div class="timeline-item">
              <div class="timeline-dot">📜</div>
              <div class="timeline-body">
                <div class="timeline-year">1995</div>
                <div class="timeline-desc">Mendapat izin operasional resmi dari Kementerian Agama Kabupaten Bogor.</div>
              </div>
            </div>
            <div class="timeline-item">
              <div class="timeline-dot">🏫</div>
              <div class="timeline-body">
                <div class="timeline-year">2002</div>
                <div class="timeline-desc">Pembangunan gedung baru dua lantai untuk mendukung kegiatan belajar mengajar.</div>
              </div>
            </div>
            <div class="timeline-item">
              <div class="timeline-dot">📖</div>
              <div class="timeline-body">
                <div class="timeline-year">2010</div>
                <div class="timeline-desc">Peluncuran program unggulan Tahfidz Al-Qur'an yang diintegrasikan ke kurikulum.</div>
              </div>
            </div>
            <div class="timeline-item">
              <div class="timeline-dot">🏆</div>
              <div class="timeline-body">
                <div class="timeline-year">2015</div>
                <div class="timeline-desc">Meraih akreditasi B dari Badan Akreditasi Nasional Madrasah.</div>
              </div>
            </div>
            <div class="timeline-item">
              <div class="timeline-dot">💻</div>
              <div class="timeline-body">
                <div class="timeline-year">2020</div>
                <div class="timeline-desc">Pengembangan laboratorium komputer dan program literasi digital bagi siswa.</div>
              </div>
            </div>
            <div class="timeline-item">
              <div class="timeline-dot">🌟</div>
              <div class="timeline-body">
                <div class="timeline-year">Kini</div>
                <div class="timeline-desc">Terus berkembang dengan 320+ siswa aktif dan 22 tenaga pendidik berdedikasi.</div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>


<!-- ==============================
     TAB 2: VISI MISI
     ============================== -->
<div class="tab-content" id="tab-visimisi">
  <div class="profil-section visimisi-section">
    <div class="profil-section-inner">
      <h2 class="profil-section-title">Visi &amp; Misi Madrasah</h2>
      <p class="profil-section-sub">Landasan dan arah pengembangan <?= $school_name ?></p>

      <!-- Visi -->
      <div class="visi-card">
        <div class="visi-label">
          <svg viewBox="0 0 24 24" style="width:14px;height:14px;fill:currentColor;"><path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/></svg>
          Visi Madrasah
        </div>
        <p class="visi-text">" <?= $visi ?> "</p>
      </div>

      <!-- Misi -->
      <div class="misi-card">
        <div class="misi-header">
          <div class="misi-header-icon">
            <svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 100 20A10 10 0 0012 2zm0 18a8 8 0 110-16 8 8 0 010 16zm0-4c-1.48 0-2.75-.81-3.45-2h6.9c-.7 1.19-1.97 2-3.45 2zm-3.5-4a1.5 1.5 0 110-3 1.5 1.5 0 010 3zm7 0a1.5 1.5 0 110-3 1.5 1.5 0 010 3z"/></svg>
          </div>
          <h3>Misi Madrasah</h3>
        </div>
        <ul class="misi-list">
          <?php foreach ($misi as $i => $m): ?>
          <li>
            <span class="misi-num"><?= $i + 1 ?></span>
            <span><?= $m ?></span>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>

    </div>
  </div>
</div>


<!-- ==============================
     TAB 3: STRUKTUR ORGANISASI
     ============================== -->
<div class="tab-content" id="tab-struktur">
  <div class="profil-section struktur-section">
    <div class="profil-section-inner">
      <h2 class="profil-section-title">Struktur Organisasi</h2>
      <p class="profil-section-sub">Susunan kepengurusan <?= $school_name ?> Tahun <?= $year ?></p>w

      <div class="org-chart">

        <!-- Level 1: Kepala -->
        <div class="org-level">
          <div class="org-node org-node--head">
            <div class="org-jabatan">Kepala Madrasah</div>
            <div class="org-nama">H. Solahudin, S.Ag</div>
          </div>
        </div>

        <div class="org-connector"></div>

        <!-- Level 2: Komite + Wakil -->
        <div class="org-level">
          <div class="org-node">
            <div class="org-jabatan">Komite Madrasah</div>
            <div class="org-nama">— (Template)</div>
          </div>
          <div class="org-node">
            <div class="org-jabatan">Wakil Kepala Madrasah</div>
            <div class="org-nama">— (Template)</div>
          </div>
        </div>

        <div class="org-connector"></div>

        <!-- Level 3: Bendahara, TU, Operator, Koordinator -->
        <div class="org-level">
          <div class="org-node">
            <div class="org-jabatan">Bendahara</div>
            <div class="org-nama">— (Template)</div>
          </div>
          <div class="org-node">
            <div class="org-jabatan">Tata Usaha</div>
            <div class="org-nama">Ria Astrianti, S.Pd</div>
          </div>
          <div class="org-node">
            <div class="org-jabatan">Operator Sekolah</div>
            <div class="org-nama">Vania Wijaya, S.Pd</div>
          </div>
          <div class="org-node">
            <div class="org-jabatan">Koordinator Guru</div>
            <div class="org-nama">— (Template)</div>
          </div>
        </div>

        <div class="org-connector"></div>

        <!-- Level 4: Guru + Staff -->
        <div class="org-level">
          <div class="org-node">
            <div class="org-jabatan">Guru Kelas &amp; Mapel</div>
            <div class="org-nama">16 Tenaga Pengajar</div>
          </div>
          <div class="org-node">
            <div class="org-jabatan">Staff Kebersihan &amp; Keamanan</div>
            <div class="org-nama">Toha &amp; Tresna Pramana</div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>


<!-- ==============================
     TAB 4: IDENTITAS SEKOLAH
     ============================== -->
<div class="tab-content" id="tab-identitas">
  <div class="profil-section identitas-section">
    <div class="profil-section-inner">
      <h2 class="profil-section-title">Identitas Sekolah</h2>
      <p class="profil-section-sub">Data resmi <?= $school_name ?></p>

      <div class="identitas-grid">
        <?php foreach ($identitas as $row): ?>
        <div class="identitas-label"><?= $row['label'] ?></div>
        <div class="identitas-value"><?= $row['value'] ?></div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</div>


<!-- ==============================
     TAB 5: PROGRAM UNGGULAN
     ============================== -->
<div class="tab-content" id="tab-program">
  <div class="profil-section program-section">
    <div class="profil-section-inner">
      <h2 class="profil-section-title">Program Unggulan</h2>
      <p class="profil-section-sub">Keunggulan dan kekhasan <?= $school_name ?> dalam membentuk generasi terbaik</p>

      <div class="program-grid">
        <?php foreach ($program as $p): ?>
        <div class="program-card">
          <span class="program-icon"><?= $p['icon'] ?></span>
          <div class="program-judul"><?= $p['judul'] ?></div>
          <p class="program-desc"><?= $p['desc'] ?></p>
        </div>
        <?php endforeach; ?>
      </div>

    </div>
  </div>
</div>


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
    document.getElementById('main-header').classList.toggle('header--scrolled', window.scrollY > 40);
  });

  /* ---- Tab System ---- */
  const tabBtns     = document.querySelectorAll('.tab-btn');
  const tabContents = document.querySelectorAll('.tab-content');

  tabBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const target = btn.dataset.tab;

      tabBtns.forEach(b => b.classList.remove('active'));
      tabContents.forEach(c => c.classList.remove('active'));

      btn.classList.add('active');
      document.getElementById('tab-' + target).classList.add('active');

      // Scroll ke konten tab
      document.querySelector('.tab-nav').scrollIntoView({ behavior: 'smooth', block: 'start' });
    });
  });

  /* ---- Hash di URL → buka tab langsung ---- */
  const hash = window.location.hash.replace('#', '');
  if (hash) {
    const targetBtn = document.querySelector(`.tab-btn[data-tab="${hash}"]`);
    if (targetBtn) targetBtn.click();
  }
</script>

</body>
</html>
