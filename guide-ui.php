<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UI Guide</title>
    <link rel="icon" href="assets/gambar/icon/ProjectMoonLogoClear.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <?php include 'sidebar.php'; ?>
    
    <main class="main-content">
        <header class="main-header">
            <h1>Panduan Antarmuka (UI) Limbus Company</h1>
        </header>

        <section class="guide-section">
            <p>Selamat datang, Manager. Panduan ini akan membantu Anda memahami semua tombol dan menu penting yang akan Anda temui di Limbus Company. Mari kita mulai dari layar utama atau lobi.</p>
        </section>

        <section class="guide-section">
            <h2><i class="fas fa-home"></i> Lobi Utama (Main Screen)</h2>
            <p>Ini adalah layar pertama yang Anda lihat saat masuk ke dalam game. Dari sini Anda bisa mengakses hampir semua fitur.</p>
            
            <img src="assets/gambar/icon/ui-lobby.png" alt="Tampilan Lobi Utama Limbus Company" style="width:100%; max-width:700px; margin-top:10px; border-radius:8px; border: 1px solid #444;">

            <ol class="steps-list" style="margin-top:20px;">
                <li><strong>Info Manajer & Sumber Daya:</strong> Di bagian kiri bawah, Anda bisa melihat Level, Lunacy (mata uang premium), dan Enkephalin (stamina).</li>
                <li><strong>Sinner Utama:</strong> Menampilkan Sinner yang Anda pilih untuk tampil di lobi. Anda bisa menggantinya dengan mengklik logo Sinner di bagian kiri atau kanan sesuai dengan Sinner yang anda inginkan.</li>
                <li><strong>Tombol Drive:</strong> Tombol utama untuk masuk ke menu pemilihan stage, termasuk Story, Mirror Dungeon, dll.</li>
                <li><strong>Menu Navigasi Bawah:</strong>
                    <ul>
                        <li><strong>Dispense:</strong> Tempat Anda menukar Egoshard dengan Identity atau E.G.O baru.</li>
                        <li><strong>Extraction:</strong> Tempat Anda melakukan gacha/ekstraksi menggunakan Lunacy atau Tiket untuk mendapatkan Identities dan E.G.O baru.</li>
                        <li><strong>Theater:</strong> Tempat Anda bisa melihat cerita, event yang telah Anda buka.</li>
                        <li><strong>Sinners:</strong> Menu untuk mengatur semua Identities dan E.G.O yang Anda miliki, menaikkan level, dan melakukan Uptyie.</li>
                        <li><strong>Battle Pass:</strong> Menampilkan progres Limbus Pass Anda untuk musim ini.</li>
                    </ul>
                </li>
                <li><strong>Pengumuman & Mailbox:</strong> Di sisi kanan atas, berisi informasi terbaru dari developer dan kotak surat untuk mengklaim hadiah.</li>
            </ol>
        </section>

        <section class="guide-section">
            <h2><i class="fas fa-swords"></i> Layar Pertarungan (Combat Screen)</h2>
            <p>Ini adalah layar paling kompleks namun paling penting. Memahaminya adalah kunci kemenangan.</p>

            <img src="assets/gambar/icon/ui-combat.png" alt="Tampilan Pertarungan Limbus Company" style="width:100%; max-width:700px; margin-top:10px; border-radius:8px; border: 1px solid #444;">
            
            <ol class="steps-list" style="margin-top:20px;">
                <li><strong>Rantai Skill:</strong> Di bagian bawah, tempat Anda merangkai skill Sinner Anda untuk giliran ini.</li>
                <li><strong>Sin Affinity:</strong> Menunjukkan jumlah skill dari setiap warna Dosa yang Anda gunakan. Mengumpulkan tiga warna yang sama akan memberikan bonus Resonance.</li>
                <li><strong>Info Musuh:</strong> Mengetuk musuh akan menampilkan HP, resistensi terhadap tipe serangan (Slash, Pierce, Blunt), dan status efek yang sedang aktif.</li>
                <li><strong>Indikator Clash:</strong> Garis merah atau biru yang menghubungkan Sinner dan musuh. Menunjukkan siapa melawan siapa. Angka di tengahnya adalah hasil prediksi (Dominating, Favored, Struggling, Hopeless, Unopossed).</li>
                <li><strong>Tombol E.G.O:</strong> Untuk menggunakan skill E.G.O, anda harus menekan potret dari masing-masing Sinner, lalu pilih E.G.O yang ingin digunakan.</li>
                <li><strong>Tombol Win Rate:</strong> Tombol di bagian kanaan bawah untuk melakukan rangkaian skill otomatis sesuai dengan presentasi kemenangan dalam clash.</li>
            </ol>
        </section>

        <section class="guide-section">
            <h2><i class="fas fa-users"></i> Layar Manajemen Sinner</h2>
            <p>Di menu "Sinners", Anda bisa memperkuat karakter Anda.</p>

            <img src="assets/gambar/icon/TabSinners.png" alt="Tampilan Pertarungan Limbus Company" style="width:100%; max-width:700px; margin-top:10px; border-radius:8px; border: 1px solid #444;">

            <ol class="steps-list">
                <li><strong>Daftar Identities:</strong> Menampilkan semua kartu Identitas yang Anda miliki untuk setiap Sinner.</li>
                <li><strong>Uptie:</strong> Proses untuk meningkatkan skill dan membuka passive baru dari sebuah Identitas. Membutuhkan Thread dan Egoshard.</li>
                <li><strong>Level Up:</strong> Meningkatkan level Identitas menggunakan tiket EXP untuk menaikkan status dasarnya.</li>
                <li><strong>E.G.O:</strong> Tab terpisah untuk melihat dan memperkuat E.G.O yang Anda miliki.</li>
            </ol>
        </section>

    </main>
    
    <?php include 'scripts.php'; ?>
</body>
</html>