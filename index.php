<?php
  $school_name  = "MIS AL BAYINNAH";
  $year         = date("Y");
  $address      = "Kp. Manggis, RT.02/RW.04";
  $city         = "Dramaga, Kabupaten Bogor, Jawa Barat 16680";
  $phone        = "+62 852-1045-7475";
  $email        = "2027albyynh@gmail.com";
  $instagram    = "misalbayyinahdramaga";
  $youtube      = "@Misalbayyinahdramaga";

  $kepala_sekolah = "H. SOLAHUDIN, S.Ag";
  $sambutan = "Bismillahirrahmanirrahim. Selamat datang di MIS Al-Bayinnah Dramaga. Kami berkomitmen mendidik generasi Qur'ani yang unggul dalam ilmu pengetahuan, berakhlak mulia, dan teguh dalam iman. Bersama orang tua dan masyarakat, kami terus berupaya mewujudkan madrasah yang berkualitas dan berkarakter Islami.";

  $berita = [
    [
      "judul"   => "Sistem Penerimaan Murid Baru Tahun Ajaran 2026/2027",
      "tanggal" => "3 November 2025",
      "ringkas" => "Pendaftaran siswa baru telah dibuka. Kuota terbatas! Hubungi kami segera untuk informasi lebih lanjut.",
      "label"   => "Pengumuman",
      "warna"   => "badge--green",
    ],
    
  ];
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="<?= $school_name ?> – Madrasah Ibtidaiyah Swasta yang berkomitmen membentuk generasi berakhlak mulia, cerdas, dan berprestasi." />
  <title><?= $school_name ?></title>
  <link rel="stylesheet" href="css/style.css" />
  <link rel="icon" type="image/png" href="img/logo.png" />
</head>
<body>

<!-- ==============================
     HEADER / NAVBAR
     ============================== -->
<header id="main-header">
  <nav class="navbar">

    <!-- Brand -->
    <a href="index.php" class="navbar-brand">
      <img src="img/logo.png" alt="Logo <?= $school_name ?>" class="navbar-logo" width="70" height="67" />
      <span class="navbar-title"><?= $school_name ?></span>
    </a>

    <!-- Desktop Menu -->
    <ul class="nav-menu" id="nav-menu">
      <li><a href="#beranda"  class="nav-link active">Beranda</a></li>
      <li><a href="profil.php"     class="nav-link">Profil</a></li>
      <li><a href="kepala-guru-staff.php" class="nav-link">Akademik &amp; Staf</a></li>
      <li><a href="#fasilitas"     class="nav-link">Fasilitas</a></li>
      <li><a href="#kontak"        class="nav-link nav-link--cta">Kontak</a></li>
    </ul>

    <!-- Hamburger -->
    <button class="nav-hamburger" id="nav-hamburger" aria-label="Toggle menu" aria-expanded="false">
      <span></span><span></span><span></span>
    </button>

  </nav>
</header>


<!-- ==============================
     HERO SECTION
     ============================== -->
<section class="hero" id="beranda">
  <div class="hero-bg">
    <img src="img/schoolbuilding.jpeg" alt="Gedung <?= $school_name ?>" loading="eager" />
    <div class="hero-overlay"></div>
  </div>
  <div class="hero-content">
    <span class="hero-badge">🕌 Madrasah Ibtidaiyah Sanawiyah</span>
    <h1 class="hero-title">
      Selamat Datang di<br />
      <span class="hero-title--accent">MIS Al-Bayinnah</span>
    </h1>
    <p class="hero-sub">
      Mendidik generasi Qur'ani yang unggul dalam ilmu, teguh dalam iman, dan mulia dalam akhlak.
    </p>
    <div class="hero-cta">
      <a href="profil.php" class="btn btn--primary">Jelajahi Profil</a>
      <a href="#kontak"    class="btn btn--outline">Hubungi Kami</a>
    </div>
  </div>
  <a href="#sambutan" class="hero-scroll" aria-label="Scroll ke bawah">
    <svg viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"/></svg>
  </a>
</section>


<!-- ==============================
     SAMBUTAN KEPALA SEKOLAH
     ============================== -->
<section class="section-sambutan" id="sambutan">
  <div class="section-inner">
    <div class="sambutan-grid">

      <div class="sambutan-photo-wrap">
        <img src="img/guru/kepsek.jpeg" alt="Kepala Sekolah <?= $kepala_sekolah ?>"
             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';" />
        <div class="sambutan-photo-placeholder">
          <svg viewBox="0 0 24 24"><path d="M12 12c2.7 0 4.8-2.1 4.8-4.8S14.7 2.4 12 2.4 7.2 4.5 7.2 7.2 9.3 12 12 12zm0 2.4c-3.2 0-9.6 1.6-9.6 4.8v2.4h19.2v-2.4c0-3.2-6.4-4.8-9.6-4.8z"/></svg>
          <span>Foto Kepala Sekolah</span>
        </div>
        <div class="sambutan-badge">Kepala Madrasah</div>
      </div>

      <div class="sambutan-body">
        <div class="sambutan-tag">✦ Sambutan</div>
        <h2 class="sambutan-title">Pesan Kepala Sekolah</h2>
        <blockquote class="sambutan-quote">
          <svg class="quote-icon" viewBox="0 0 40 30">
            <path d="M0 30V18C0 8 6 2 18 0l2 4C12 6 9 10 9 18h9v12H0zm22 0V18c0-10 6-16 18-18l2 4c-8 2-11 6-11 14h9v12H22z"/>
          </svg>
          <?= $sambutan ?>
        </blockquote>
        <div class="sambutan-name">
          <strong><?= $kepala_sekolah ?></strong>
          <span>Kepala <?= $school_name ?></span>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ==============================
     STATISTIK HIGHLIGHT
     ============================== -->
<section class="section-info" id="info">
  <div class="section-inner">
    <h2 class="section-title">Informasi Sekolah</h2>
    <p class="section-sub">Angka-angka yang mencerminkan komitmen kami</p>

    <div class="stats-grid">

      <!-- Ekstrakurikuler -->
      <div class="stat-card">
        <div class="stat-icon">
          <svg viewBox="0 0 24 24"><path d="M12 3c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm7 7h-4.5l-1.5-2.5L11 10H4v2h2.5l1.5 5H6v2h12v-2h-2l1.5-5H20v-2z"/></svg>
        </div>
        <div class="stat-label">Ekskul</div>
        <div class="stat-number" data-target="3">0</div>
        <div class="stat-sub">Bidang &amp; Minat</div>
      </div>

      <!-- Tenaga Pengajar -->
      <a href="kepala-guru-staff.php" class="stat-card stat-card--link">
        <div class="stat-icon">
          <svg viewBox="0 0 24 24"><path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
        </div>
        <div class="stat-label">Pengajar</div>
        <div class="stat-number" data-target="22">0</div>
        <div class="stat-sub">Berdedikasi</div>
        <span class="stat-link-btn">Lihat →</span>
      </a>

      <!-- Fasilitas -->
      <div class="stat-card">
        <div class="stat-icon">
          <svg viewBox="0 0 24 24"><path d="M4 6H2v14c0 1.1.9 2 2 2h14v-2H4V6zm16-4H8c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-1 9H9V9h10v2zm-4 4H9v-2h6v2zm4-8H9V5h10v2z"/></svg>
        </div>
        <div class="stat-label">Fasilitas</div>
        <div class="stat-number" data-target="15">0</div>
        <div class="stat-sub">Ruang Belajar</div>
      </div>

      <!-- Siswa -->
      <div class="stat-card">
        <div class="stat-icon">
          <svg viewBox="0 0 24 24"><path d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/></svg>
        </div>
        <div class="stat-label">Siswa</div>
        <div class="stat-number" data-suffix="+" data-target="280">0</div>
        <div class="stat-sub">Aktif Belajar</div>
      </div>

    </div>
  </div>
</section>


<!-- ==============================
     PREVIEW FASILITAS
     ============================== -->
<section class="section-fasilitas" id="fasilitas">
  <div class="section-inner">
    <div class="section-header">
      <div>
        <h2 class="section-title section-title--dark">Fasilitas Unggulan</h2>
        <p class="section-sub section-sub--dark">Lingkungan belajar yang nyaman dan lengkap</p>
      </div>
      <a href="#fasilitas" class="btn btn--ghost">Lihat Semua →</a>
    </div>

    <div class="fasilitas-grid">

      <div class="fasilitas-item" onclick="openLightbox('img/fasilitas-masjid.jpeg', '🕌 Masjid Al-Bayinnah')">
        <div class="fasilitas-bg" style="background-image: url('img/fasilitas-masjid.jpeg');"></div>
        <div class="fasilitas-info">
          <span class="fasilitas-label">🕌 Masjid</span>
          <p class="fasilitas-desc">Pusat ibadah dan kegiatan keagamaan siswa</p>
        </div>
      </div>

      <div class="fasilitas-item" onclick="openLightbox('img/fasilitas-lab.jpeg', '💻 Laboratorium Komputer')">
        <div class="fasilitas-bg" style="background-image: url('img/fasilitas-lab.jpeg');"></div>
        <div class="fasilitas-info">
          <span class="fasilitas-label">💻 Lab Komputer</span>
          <p class="fasilitas-desc">Sarana belajar teknologi dan literasi digital</p>
        </div>
      </div>

      <div class="fasilitas-item fasilitas-item--tall" onclick="openLightbox('img/schoolbuilding.jpeg', '🏫 Gedung Sekolah')">
        <div class="fasilitas-bg" style="background-image: url('img/schoolbuilding.jpeg');"></div>
        <div class="fasilitas-info">
          <span class="fasilitas-label">🏫 Gedung Utama</span>
          <p class="fasilitas-desc">Bangunan modern dengan 15 ruang belajar</p>
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ==============================
     BERITA / PENGUMUMAN
     ============================== -->
<section class="section-berita" id="berita">
  <div class="section-inner">
    <div class="section-header">
      <div>
        <h2 class="section-title">Berita &amp; Pengumuman</h2>
        <p class="section-sub">Informasi terkini dari madrasah</p>
      </div>
      <a href="#" class="btn btn--outline-white">Semua Berita →</a>
    </div>

    <div class="berita-grid">
      <?php foreach ($berita as $b): ?>
      <article class="berita-card">
        <div class="berita-top">
          <span class="berita-badge <?= $b['warna'] ?>"><?= $b['label'] ?></span>
          <span class="berita-date">
            <svg viewBox="0 0 24 24"><path d="M17 12h-5v5h5v-5zM16 1v2H8V1H6v2H5c-1.11 0-1.99.9-1.99 2L3 19c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2h-1V1h-2zm3 18H5V8h14v11z"/></svg>
            <?= $b['tanggal'] ?>
          </span>
        </div>
        <h3 class="berita-judul"><?= $b['judul'] ?></h3>
        <p  class="berita-ringkas"><?= $b['ringkas'] ?></p>
        <a  href="#" class="berita-link">Baca selengkapnya →</a>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ==============================
     KONTAK
     ============================== -->
<section class="section-kontak" id="kontak">
  <div class="section-inner">
    <h2 class="section-title">Kontak &amp; Lokasi</h2>
    <p class="section-sub">Kami siap melayani Anda</p>

    <div class="kontak-grid">

      <!-- Info Kontak -->
      <div class="kontak-info">

        <div class="kontak-item">
          <div class="kontak-icon">
            <svg viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z"/></svg>
          </div>
          <div>
            <strong>Alamat</strong>
            <span><?= $address ?>, <?= $city ?></span>
          </div>
        </div>

        <div class="kontak-item">
          <div class="kontak-icon">
            <svg viewBox="0 0 24 24"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24c1.12.37 2.33.57 3.58.57a1 1 0 011 1V20a1 1 0 01-1 1C10.61 21 3 13.39 3 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.25.2 2.46.57 3.58a1 1 0 01-.25 1.01l-2.2 2.2z"/></svg>
          </div>
          <div>
            <strong>Telepon / WhatsApp</strong>
            <a href="tel:<?= preg_replace('/[^0-9+]/','',$phone) ?>"><?= $phone ?></a>
          </div>
        </div>

        <div class="kontak-item">
          <div class="kontak-icon">
            <svg viewBox="0 0 24 24"><path d="M20 4H4a2 2 0 00-2 2v12a2 2 0 002 2h16a2 2 0 002-2V6a2 2 0 00-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/></svg>
          </div>
          <div>
            <strong>Email</strong>
            <a href="mailto:<?= $email ?>"><?= $email ?></a>
          </div>
        </div>

        <div class="kontak-item">
          <div class="kontak-icon kontak-icon--ig">
            <svg viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.919-.058-1.27-.07-1.645-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.69.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
          </div>
          <div>
            <strong>Instagram</strong>
            <a href="https://instagram.com/<?= $instagram ?>" target="_blank" rel="noopener">@<?= $instagram ?></a>
          </div>
        </div>

        <div class="kontak-item">
          <div class="kontak-icon kontak-icon--yt">
            <svg viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
          </div>
          <div>
            <strong>YouTube</strong>
            <a href="https://youtube.com/<?= $youtube ?>" target="_blank" rel="noopener"><?= $youtube ?></a>
          </div>
        </div>

        <div class="kontak-jam">
          <h4>🕐 Jam Operasional</h4>
          <table>
            <tr><td>Senin – Kamis</td><td>07.00 – 15.00 WIB</td></tr>
            <tr><td>Jum'at</td><td>07.00 – 11.00 WIB</td></tr>
            <tr><td>Sabtu - Minggu / Libur</td><td>Tutup</td></tr>
          </table>
        </div>

      </div>

      <!-- Peta + Form -->
      <div class="kontak-right">

        <div class="kontak-map">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d952.1838051553171!2d106.73926766955276!3d-6.576845699588526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c4c4940e9175%3A0x3be5e20ccb091df9!2sMIS%20Al-Bayyinah%20Dramaga!5e1!3m2!1sen!2sus!4v1773370404141!5m2!1sen!2sus"
            width="100%" height="100%"
            style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
        </div>

<form class="kontak-form" onsubmit="handleForm(event)">
  <h4>✉️ Kirim Pesan</h4>
  <input  type="text"  name="nama"  placeholder="Nama Anda"  required />
  <input type="email" name="email" placeholder="Email" required />
  <textarea name="pesan" rows="3"   placeholder="Tulis pesan Anda…" required></textarea>
  <button type="submit" class="btn btn--primary btn--full">Kirim Pesan 📨</button>
  <p class="form-note" id="form-status"></p>
</form>

<!-- WhatsApp Direct -->
<a href="https://wa.me/6285210457475" target="_blank" rel="noopener" class="wa-direct">
  <div class="wa-direct-icon">
    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
      <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347z"/>
      <path d="M12 0C5.373 0 0 5.373 0 12c0 2.127.558 4.122 1.532 5.856L.057 23.428a.75.75 0 00.916.916l5.574-1.476A11.943 11.943 0 0012 24c6.627 0 12-5.373 12-12S18.627 0 12 0zm0 22c-1.907 0-3.693-.504-5.241-1.385l-.374-.217-3.875 1.026 1.026-3.874-.217-.374A9.951 9.951 0 012 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10z"/>
    </svg>
  </div>
  <div class="wa-direct-text">
    <strong>Chat via WhatsApp</strong>
    <span>Langsung terhubung dengan kami</span>
  </div>
  <svg class="wa-direct-arrow" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
</a>
      </div>

    </div>
  </div>
</section>


<!-- ==============================
     FOOTER
     ============================== -->
<footer class="footer">
  <div class="footer-inner">

    <div class="footer-brand">
      <img src="img/logo.png" alt="Logo <?= $school_name ?>" width="52" height="50" />
      <div>
        <strong><?= $school_name ?></strong>
        <span>Madrasah Ibtidaiyah Swasta</span>
      </div>
    </div>

    <div class="footer-cols">

      <div class="footer-col">
        <h5>Navigasi Cepat</h5>
        <ul>
          <li><a href="#beranda">Beranda</a></li>
          <li><a href="profil.php">Profil Sekolah</a></li>
          <li><a href="kepala-guru-staff.php">Akademik &amp; Staf</a></li>
          <li><a href="#fasilitas">Fasilitas</a></li>
          <li><a href="#berita">Berita</a></li>
          <li><a href="#kontak">Kontak</a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h5>Informasi</h5>
        <ul>
          <li>📍 <?= $address ?></li>
          <li><?= $city ?></li>
          <li>📞 <a href="tel:<?= preg_replace('/[^0-9+]/','',$phone) ?>"><?= $phone ?></a></li>
          <li>✉️ <a href="mailto:<?= $email ?>"><?= $email ?></a></li>
        </ul>
      </div>

      <div class="footer-col">
        <h5>Ikuti Kami</h5>
        <div class="footer-socials">
          <a href="https://instagram.com/<?= $instagram ?>" target="_blank" rel="noopener" class="social-btn social-btn--ig">
            <svg viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.919-.058-1.27-.07-1.645-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.69.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
            Instagram
          </a>
          <a href="https://youtube.com/<?= $youtube ?>" target="_blank" rel="noopener" class="social-btn social-btn--yt">
            <svg viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 00-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 00.502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 002.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 002.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
            YouTube
          </a>
        </div>
        <p class="footer-tagline">
          "Qur'ani, Unggul, dan Bertaqwa"
        </p>
      </div>

    </div>

  </div>
  <div class="footer-bottom">
    <p>&copy; <?= $year ?> <span><?= $school_name ?></span>. All Rights Reserved.</p>
    <p>Dibuat dengan ❤️ untuk pendidikan Islam</p>
  </div>
</footer>


<!-- ==============================
     LIGHTBOX MODAL
     ============================== -->
<div id="lightbox" onclick="closeLightbox()">
  <div class="lightbox-inner" onclick="event.stopPropagation()">
    <button class="lightbox-close" onclick="closeLightbox()">✕</button>
    <img id="lightbox-img" src="" alt="" />
    <p id="lightbox-caption"></p>
  </div>
</div>


<!-- ==============================
     JAVASCRIPT
     ============================== -->
<script>
/* ---------- Navbar ---------- */
const hamburger = document.getElementById('nav-hamburger');
const navMenu   = document.getElementById('nav-menu');

hamburger.addEventListener('click', () => {
  const open = navMenu.classList.toggle('nav-menu--open');
  hamburger.classList.toggle('nav-hamburger--open', open);
  hamburger.setAttribute('aria-expanded', open);
});

// Tutup menu saat link diklik
navMenu.querySelectorAll('.nav-link').forEach(link => {
  link.addEventListener('click', () => {
    navMenu.classList.remove('nav-menu--open');
    hamburger.classList.remove('nav-hamburger--open');
    hamburger.setAttribute('aria-expanded', false);
  });
});

// Navbar shadow saat scroll
window.addEventListener('scroll', () => {
  document.getElementById('main-header').classList.toggle('header--scrolled', window.scrollY > 40);
});

/* ---------- Counter Animasi ---------- */
function animateCounters() {
  document.querySelectorAll('.stat-number[data-target]').forEach(el => {
    const target   = +el.dataset.target;
    const suffix   = el.dataset.suffix || '';
    const duration = 1200;
    const step     = target / (duration / 16);
    let current    = 0;
    const timer = setInterval(() => {
      current += step;
      if (current >= target) {
        current = target;
        clearInterval(timer);
      }
      el.textContent = Math.floor(current) + suffix;
    }, 16);
  });
}

const statsObserver = new IntersectionObserver(entries => {
  entries.forEach(e => { if (e.isIntersecting) { animateCounters(); statsObserver.disconnect(); } });
}, { threshold: 0.3 });

const statsSection = document.querySelector('.section-info');
if (statsSection) statsObserver.observe(statsSection);

/* ---------- Lightbox ---------- */
function openLightbox(src, caption) {
  document.getElementById('lightbox-img').src  = src;
  document.getElementById('lightbox-caption').textContent = caption;
  document.getElementById('lightbox').classList.add('active');
  document.body.style.overflow = 'hidden';
}

function closeLightbox() {
  document.getElementById('lightbox').classList.remove('active');
  document.body.style.overflow = '';
}

document.addEventListener('keydown', e => { if (e.key === 'Escape') closeLightbox(); });

/* ---------- Form ---------- */
function handleForm(e) {
  e.preventDefault();
  const status = document.getElementById('form-status');
  status.textContent = '✅ Pesan berhasil dikirim! Kami akan segera menghubungi Anda.';
  status.style.color = '#76FF7A';
  e.target.reset();
  setTimeout(() => { status.textContent = ''; }, 5000);
}

/* ---------- Reveal Animasi Scroll ---------- */
const revealObserver = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      e.target.classList.add('revealed');
      revealObserver.unobserve(e.target);
    }
  });
}, { threshold: 0.1 });

document.querySelectorAll('.berita-card, .fasilitas-item, .stat-card, .sambutan-grid, .kontak-item')
  .forEach(el => revealObserver.observe(el));
</script>

</body>
</html>
