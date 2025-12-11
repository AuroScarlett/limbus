<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abnormality</title>
    <link rel="icon" href="assets/gambar/icon/ProjectMoonLogoClear.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <?php include 'sidebar.php'; ?>
    
    <main class="main-content">
        <header class="main-header">
            <h1>Abnormality</h1>
        </header>

        <section class="showcase">
            <div class="swiper showcase-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="assets/gambar/Abno/BlubberingToad.png" alt="Blubbering Toad">
                        <div class="slide-caption">Blubbering Toad - ZAYIN</div>
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/gambar/Abno/BrazenBull.png" alt="Brazen Bull">
                        <div class="slide-caption">Brazen Bull - TETH</div>
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/gambar/Abno/FuneraloftheDeadButterflies.png" alt="Funeral of the Dead Butterflies">
                        <div class="slide-caption">Funeral of the Dead Butterflies - HE</div>
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/gambar/Abno/DreamDevouringSiltcurrent.png" alt="Dream-Devouring Siltcurrent">
                        <div class="slide-caption">Dream-Devouring Siltcurrent - WAW</div>
                    </div>
                    <div class="swiper-slide">
                        <img src="assets/gambar/Abno/ApocalypseBird.png" alt="Apocalypse Bird">
                        <div class="slide-caption">Apocalypse Bird - ALEPH</div>
                    </div>
                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-pagination"></div>
            </div>
        </section>

        <hr style="margin: 40px 0; border-color: #333;">

        <section class="guide-section">
            <h2><i class="fas fa-biohazard"></i> Apa itu Abnormality?</h2>
            <p>Abnormality adalah entitas supernatural dan misterius yang menjadi inti dari dunia game Project Moon. Mereka lahir dari alam bawah sadar kolektif umat manusia dan memanifestasikan berbagai konsep, emosi, atau cerita rakyat. Di Lobotomy Corporation, mereka "dipanen" untuk menghasilkan energi. Di Limbus Company, para Sinner seringkali berhadapan dengan mereka di dalam dungeon.</p>
        </section>

        <section class="guide-section">
            <h2><i class="fas fa-exclamation-triangle"></i> Tingkat Risiko (Risk Levels)</h2>
            <p>Setiap Abnormality diklasifikasikan ke dalam lima tingkat risiko yang menunjukkan seberapa berbahaya dan sulit untuk ditangani.</p>
            <table class="requirements-table">
                <thead>
                    <tr>
                        <th>Level</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><img src="assets/gambar/icon/ZAYINRiskLabel.png" alt="ZAYIN" height="45"></td>
                        <td>Tidak Berbahaya</td>
                        <td>Cenderung jinak, tidak berbahaya, atau bahkan terkadang membantu.</td>
                    </tr>
                    <tr>
                        <td><img src="assets/gambar/icon/TETHRiskLabel.png" alt="TETH" height="45"></td>
                        <td>Ancaman Minor</td>
                        <td>Dapat menyebabkan sedikit masalah jika tidak ditangani dengan benar.</td>
                    </tr>
                     <tr>
                        <td><img src="assets/gambar/icon/HERiskLabel.png" alt="HE" height="45"></td>
                        <td>Ancaman Signifikan</td>
                        <td>Cukup berbahaya dan membutuhkan perhatian khusus untuk menekannya.</td>
                    </tr>
                     <tr>
                        <td><img src="assets/gambar/icon/WAWRiskLabel.png" alt="WAW" height="45"></td>
                        <td>Berbahaya</td>
                        <td>Ancaman besar yang dapat menyebabkan kerusakan luas jika berhasil kabur.</td>
                    </tr>
                     <tr>
                        <td><img src="assets/gambar/icon/ALEPHRiskLabel.png" alt="ALEPH" height="45"></td>
                        <td>Ancaman Eksistensial</td>
                        <td>Sangat berbahaya dan mampu menghancurkan seluruh fasilitas. Harus ditangani tanpa melakukan kesalahan.</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section class="guide-section">
            <h2><i class="fas fa-link"></i> Hubungan dengan E.G.O</h2>
            <p>E.G.O (Extermination of Geometrical Organ) adalah senjata dan pelindung yang diekstrak dari esensi sebuah Abnormality. Ini adalah cara manusia "menjinakkan" kekuatan Abnormality untuk digunakan sendiri. Setiap E.G.O memiliki karakteristik yang mencerminkan Abnormality asalnya.</p>
        </section>
    </main>
    
    <?php include 'scripts.php'; ?>
</body>
</html>