<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Windows - Installs</title>
    <link rel="icon" href="assets/gambar/icon/ProjectMoonLogoClear.png" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="assets/style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    />
  </head>
  <?php include 'sidebar.php'; ?>
  <body>
    <main class="main-content">
      <header class="main-header">
        <h1>Panduan Instalasi Limbus Company - Windows</h1>
      </header>
      <section class="guide-section">
        <h2><i class="fas fa-laptop-code"></i> Spesifikasi Minimum</h2>
        <p>
          Sebelum mengunduh, pastikan PC atau laptop Anda memenuhi persyaratan
          minimum untuk dapat menjalankan game dengan lancar.
        </p>
        <table class="requirements-table">
          <thead>
            <tr>
              <th>Komponen</th>
              <th>Spesifikasi Minimum</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Sistem Operasi (OS)</td>
              <td>Windows 10 64-bit</td>
            </tr>
            <tr>
              <td>Prosesor (CPU)</td>
              <td>Intel Core i5 atau setara</td>
            </tr>
            <tr>
              <td>Memori (RAM)</td>
              <td>8 GB RAM</td>
            </tr>
            <tr>
              <td>Grafis (GPU)</td>
              <td>NVIDIA GeForce GT 1030 atau setara</td>
            </tr>
            <tr>
              <td>Penyimpanan</td>
              <td>10 GB ruang tersedia</td>
            </tr>
            <tr>
              <td>DirectX</td>
              <td>Versi 10</td>
            </tr>
          </tbody>
        </table>
        <p>
          <small
            ><em
              >*Spesifikasi dapat berubah sewaktu-waktu sesuai pembaruan dari
              Project Moon.</em
            ></small
          >
        </p>
      </section>
      <section class="guide-section">
        <h2><i class="fas fa-cloud-download-alt"></i> Tautan Unduhan</h2>
        <p>
          Limbus Company tersedia secara gratis di Steam. Kami sangat
          merekomendasikan untuk mengunduh melalui platform resmi ini.
        </p>
        <a
          href="https://store.steampowered.com/app/1973530/Limbus_Company/"
          target="_blank"
          class="btn-download steam"
        >
          <i class="fab fa-steam"></i> Unduh via Steam
        </a>
      </section>
      <section class="guide-section">
        <h2>
          <i class="fas fa-tasks"></i> Langkah-langkah Instalasi (via Steam)
        </h2>
        <ol class="steps-list">
          <li>
            <strong>Instal Aplikasi Steam:</strong> Jika Anda belum memiliki
            Steam, unduh dan instal terlebih dahulu dari
            <a href="https://store.steampowered.com/about/" target="_blank"
              >situs resmi Steam</a
            >. Buat akun jika diperlukan.
          </li>
          <li>
            <strong>Buka Halaman Limbus Company:</strong> Klik tombol unduh di
            atas atau cari "Limbus Company" di kolom pencarian aplikasi Steam.
          </li>
          <li>
            <strong>Klik "Play Game":</strong> Pada halaman toko Limbus Company,
            klik tombol hijau besar bertuliskan "Play Game". Ini akan memulai
            proses instalasi.
            <br>
            <img
              src="assets/gambar/icon/Steam.png"
              alt="Tombol Play Game di Steam"
              style="
                width: 100%;
                max-width: 500px;
                margin-top: 10px;
                border-radius: 8px;
              "
            />
          </li>
          <li>
            <strong>Ikuti Proses Instalasi:</strong> Steam akan menampilkan
            jendela konfirmasi instalasi, menunjukkan ruang disk yang
            dibutuhkan. Klik "Next" dan biarkan Steam mengunduh dan menginstal
            game.
          </li>
          <li>
            <strong>Jalankan Game:</strong> Setelah selesai, Anda bisa menemukan
            Limbus Company di "Library" Anda. Klik "Play" untuk memulai
            petualangan Anda sebagai Manajer!
          </li>
        </ol>
      </section>
      <section class="guide-section">
        <h2><i class="fas fa-question-circle"></i> Pemecahan Masalah Umum</h2>
        <dl class="troubleshooting-list">
          <dt>Game gagal/tidak mau terbuka?</dt>
          <dd>
            Coba verifikasi integritas file game di Steam. Caranya: klik kanan
            Limbus Company di Library > Properties > Local Files > Verify
            integrity of game files...
          </dd>

          <dt>Grafik terlihat patah-patah (lag)?</dt>
          <dd>
            Pastikan driver kartu grafis (NVIDIA/AMD) Anda sudah diperbarui ke
            versi terbaru. Anda juga bisa mencoba menurunkan pengaturan grafis
            di dalam game.
          </dd>

          <dt>Mengalami error saat instalasi?</dt>
          <dd>
            Pastikan koneksi internet stabil dan ruang penyimpanan di hard
            drive/SSD Anda mencukupi.
          </dd>
        </dl>
      </section>
    </main>
    <?php include 'scripts.php'; ?>
</body>
</html>
