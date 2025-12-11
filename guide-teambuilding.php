<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Team Building Guide</title>
    <link rel="icon" href="assets/gambar/icon/ProjectMoonLogoClear.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <?php include 'sidebar.php'; ?>
    
    <main class="main-content">
        <header class="main-header">
            <h1>Panduan Membangun Tim di Limbus Company</h1>
        </header>

        <section class="guide-section">
            <p>Membangun tim yang efektif di Limbus Company lebih dari sekadar mengumpulkan Identitas tier 000(3). Kunci utamanya adalah <strong><i>sinergi</i></strong>. Panduan ini akan membahas tiga pilar utama yang perlu Anda pertimbangkan saat menyusun tim.</p>
            <blockquote style="margin-top: 15px; border-left-color: var(--accent-color);">
                <strong>Aturan Emas:</strong> Sebuah tim yang terdiri dari Identitas tier 00(2) dan 0(1) yang bersinergi dengan baik akan jauh lebih kuat daripada tim berisi Identitas tier 000 yang skill-nya tidak saling mendukung.
            </blockquote>
        </section>

        <section class="guide-section">
            <h2><i class="fas fa-link"></i> Pilar #1: Sinergi Status Efek</h2>
            <p>Ini adalah cara paling umum dan efektif untuk membangun tim. Fokus pada satu atau dua status efek dan pilih Identitas yang dapat menerapkan dan memanfaatkannya.</p>
            
            <h3 style="margin-top:20px;">Contoh: Tim Bleed (Luka)<img alt="Bleed" src="assets/gambar/Effect/Bleed.png" width="30px" height="30px" align="center"></h3>
            <p>Tim Bleed membutuhkan dua peran utama:</p>
            <ul>
                <li><strong>Enabler (Pemberi Potency):</strong> Karakter yang dapat memberikan tumpukan (stack) <em>Bleed Potency</em> yang tinggi ke musuh.</li>
                <li><strong>Burst (Pemberi Count):</strong> Karakter yang memberikan <em>Bleed Count</em> (jumlah giliran status aktif) atau memiliki skill yang memberikan damage ekstra berdasarkan jumlah <em>Bleed Potency</em> musuh.</li>
            </ul>

            <h3 style="margin-top:20px;">Contoh Lainnya: Tim Rupture (Retak)<img alt="Rupture" src="assets/gambar/Effect/Rupture.png" width="30px" height="30px" align="center"> & Poise<img alt="Poise" src="assets/gambar/Effect/Poise.png" width="30px" height="30px" align="center"></h3>
            <p>Prinsip yang sama berlaku untuk status lain. Tim Rupture butuh pemberi potency dan count. Tim Poise butuh penghasil Poise dan "spender" dengan jumlah Koin banyak untuk memanfaatkan critical hit.</p>
        </section>

        <section class="guide-section">
            <h2><i class="fas fa-palette"></i> Pilar #2: "Bahan Bakar" untuk E.G.O</h2>
            <p>Tim yang hebat harus bisa menghasilkan sumber daya Dosa (Sin Affinity) yang cukup untuk menggunakan skill E.G.O andalannya. Perhatikan warna skill dari setiap Identitas di tim Anda.</p>
            <p>Contoh, jika Anda ingin sering menggunakan E.G.O "Fluid Sac" milik Faust (membutuhkan 6 Gloom, 5 Envy), pastikan tim Anda memiliki banyak skill dengan warna ungu (Envy) dan biru muda (Gloom).</p>
            
            <table class="requirements-table">
                <thead>
                    <tr>
                        <th>Identitas</th>
                        <th>Skill 1</th>
                        <th>Skill 2</th>
                        <th>Skill 3</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Kurokumo Clan Wakashu Ryoshu</td>
                        <td style="color:#16cfac;">Gluttony<img alt="Gluttony" src="assets/gambar/Affinity/LcbSinGluttony.png" width="30px" height="30px" align="center"></td>
                        <td style="color:#426686;">Pride<img alt="Pride" src="assets/gambar/Affinity/LcbSinPride.png" width="30px" height="30px" align="center"></td>
                        <td style="color:#ae612e;">Lust<img alt="Lust" src="assets/gambar/Affinity/LcbSinLust.png" width="30px" height="30px" align="center"></td>
                    </tr>
                    <tr>
                        <td>N Corp. Großhammer Meursault</td>
                        <td style="color:#e2ab63;">Sloth<img alt="Sloth" src="assets/gambar/Affinity/LcbSinSloth.png" width="30px" height="30px" align="center"></td>
                        <td style="color:#dc2e42;">Wrath<img alt="Wrath" src="assets/gambar/Affinity/LcbSinWrath.png" width="30px" height="30px" align="center"></td>
                        <td style="color:#426686;">Pride<img alt="Pride" src="assets/gambar/Affinity/LcbSinPride.png" width="30px" height="30px" align="center"></td>
                    </tr>
                     <tr>
                        <td>W Corp. L3 Cleanup Agent Don Quixote</td>
                        <td style="color:#e2ab63;">Sloth<img alt="Sloth" src="assets/gambar/Affinity/LcbSinSloth.png" width="30px" height="30px" align="center"></td>
                        <td style="color:#2e6571;">Gloom<img alt="Gloom" src="assets/gambar/Affinity/LcbSinGloom.png" width="30px" height="30px" align="center"></td>
                        <td style="color:#835693;">Envy<img alt="Sloth" src="assets/gambar/Affinity/LcbSinEnvy.png" width="30px" height="30px" align="center"></td>
                    </tr>
                </tbody>
            </table>
        </section>
        
        <section class="guide-section">
            <h2><i class="fas fa-gavel"></i> Pilar #3: Cakupan Tipe Serangan</h2>
            <p>Meskipun tidak sekrusial dua pilar pertama, memiliki variasi tipe serangan (Slash, Pierce, Blunt) akan membuat tim Anda lebih fleksibel untuk menghadapi berbagai jenis musuh dengan resistensi yang berbeda.</p>
        </section>

        <section class="guide-section">
            <h2><i class="fas fa-users-cog"></i> Contoh Komposisi Tim Lengkap</h2>
            <h3 style="margin-top:20px;">Contoh: Tim Bleed Klasik</h3>
            <p>Tim ini fokus untuk menumpuk Bleed dengan cepat dan memanfaatkannya untuk damage besar.</p>
            <ul class="steps-list">
                <li><strong>Kurokumo Clan Wakashu Ryoshu (000):</strong> Peran utama sebagai "Burst". Skill 3-nya memberikan damage masif berdasarkan Bleed Potency musuh.</li>
                <li><strong>Kurokumo Clan Wakashu Hong Lu (00):</strong> Peran utama sebagai "Enabler". Skill 2 dan 3-nya dapat menumpuk Bleed Potency dalam jumlah besar.</li>
                <li><strong>Kurokumo Clan Captain Ishmael (000):</strong> Memberikan support buff ke Identity Kurokumo lain, sekaligus bisa juga sebagai "Burst" yang sangat kuat.</li>
                <li><strong>The One Who Grips Faust (000):</strong> Memberikan support dan debuff yang kuat, sekaligus bisa memberikan Bleed.</li>
                <li><strong>LCCB Assistant Manager Rodion (00):</strong> Sumber Bleed Potency tambahan yang solid dan mudah didapat.</li>
            </ul>
        </section>
    </main>
    
    <?php include 'scripts.php'; ?>
</body>
</html>