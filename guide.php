<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guide</title>
    <link rel="icon" href="assets/gambar/icon/ProjectMoonLogoClear.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <?php include 'sidebar.php'; ?>
    
    <main class="main-content">
        <header class="main-header">
            <h1>Pusat Panduan Limbus Company</h1>
            <p style="text-align: center; color: var(--text-secondary);">Temukan semua yang perlu Anda ketahui untuk menjadi Manager yang handal.</p>
        </header>

        <section class="guide-category">
            <h2><i class="fas fa-rocket"></i> Untuk Pemain Baru</h2>
            <div class="guide-grid">
                <a href="guide-ui.php" class="guide-card">
                    <i class="fas fa-desktop"></i>
                    <h3>Pengenalan Antarmuka (UI)</h3>
                    <p>Memahami semua menu utama, dari lobi hingga pembentukan tim.</p>
                </a>
                <a href="guide-combat.php" class="guide-card">
                    <i class="fas fa-khanda"></i>
                    <h3>Mekanisme Dasar Pertarungan</h3>
                    <p>Pelajari tentang Koin, Clash, Tipe Serangan, dan Sin Affinity.</p>
                </a>
                 <a href="guide-resources.php" class="guide-card">
                    <i class="fas fa-coins"></i>
                    <h3>Mata Uang & Sumber Daya</h3>
                    <p>Mengenal Lunacy, Enkephalin, Thread, dan cara mendapatkannya.</p>
                </a>
            </div>
        </section>

        <section class="guide-category">
            <h2><i class="fas fa-brain"></i> Panduan Lanjutan</h2>
            <div class="guide-grid">
                <a href="guide-teambuilding.php" class="guide-card">
                    <i class="fas fa-users"></i>
                    <h3>Panduan Membangun Tim</h3>
                    <p>Sinergi antar Identitas dan membangun tim berbasis status efek.</p>
                </a>
                <a href="guide-mirrordungeon.php" class="guide-card">
                    <i class="fas fa-dungeon"></i>
                    <h3>Strategi Mirror Dungeon</h3>
                    <p>Tips dan trik menaklukkan Mirror Dungeon dan memilih E.G.O Gift.</p>
                </a>
                 <a href="guide-railway.php" class="guide-card">
                    <i class="fas fa-train"></i>
                    <h3>Menaklukkan Refraction Railway</h3>
                    <p>Persiapan dan strategi untuk konten paling menantang.</p>
                </a>
            </div>
        </section>

    </main>
    
    <?php include 'scripts.php'; ?>
</body>
</html>