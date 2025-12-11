<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="icon" href="assets/gambar/icon/ProjectMoonLogoClear.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <?php include 'sidebar.php'; ?>
    
    <main class="main-content">
        <header class="main-header">
            <div class="main-header-logo">
                MANAGER RECORD
            </div>
        </header>

        <section class="about-container">
            <div class="dossier-card">
                <div class="dossier-header">
                    <span class="company-name">Limbus Company</span>
                    <span class="record-id">ID: 231011403014</span>
                </div>
                
                <div class="dossier-body">
                    <div class="dossier-photo">
                        <img src="assets/gambar/icon/keisandy.jpg" alt="Manager Photo" onerror="this.src='https://placehold.co/400x400/1a1b1e/7b4dff?text=MANAGER'">
                        <div class="risk-level-tag risk-ALEPH">MANAGER'S DATA</div>
                    </div>
                    
                    <div class="dossier-info">
                        <h1 class="manager-name">Keisandy Dafa Mulianda</h1>
                        <h3 class="manager-title">Fullstack Web Developer</h3>
                        <p class="manager-bio">
                            "Selama jarum jam masih berputar, tugas saya belum selesai." <br><br>
                            Seorang pengembang web yang berdedikasi untuk menciptakan antarmuka digital yang efisien dan estetis. 
                            Seperti halnya mengelola para Sinner di dalam game, saya mengelola kode PHP, CSS, dan JavaScript agar bekerja secara harmonis.
                            Memiliki ketertarikan mendalam pada desain UI futuristik dan pengembangan sistem backend yang kompleks.
                        </p>
                        
                        <div class="manager-stats">
                            <h4><i class="fas fa-chart-bar"></i>SKILLS</h4>
                            
                            <div class="skill-bar">
                                <div class="skill-label"><span style="color:#feea08">PHP</span></div>
                                <div class="progress-track"><div class="progress-fill" style="width: 50%; background-color: #feea08;"></div></div>
                            </div>

                            <div class="skill-bar">
                                <div class="skill-label"><span style="color:#fb0000">HTML & CSS</span></div>
                                <div class="progress-track"><div class="progress-fill" style="width: 70%; background-color: #fb0000;"></div></div>
                            </div>

                            <div class="skill-bar">
                                <div class="skill-label"><span style="color:#1eb7fe">JavaScript</span></div>
                                <div class="progress-track"><div class="progress-fill" style="width: 65%; background-color: #1eb7fe;"></div></div>
                            </div>
                            
                            <div class="skill-bar">
                                <div class="skill-label"><span style="color:#721fb2">Database</span></div>
                                <div class="progress-track"><div class="progress-fill" style="width: 50%; background-color: #721fb2;"></div></div>
                            </div>
                        </div>

                        <div class="contact-actions">
                            <a href="https://www.github.com/AuroScarlett" class="btn-dossier"><i class="fab fa-github"></i> Github</a>
                            <a href="#" class="btn-dossier"><i class="fab fa-linkedin"></i> LinkedIn</a>
                            <a href="mailto:keisandydafamulianda@gmail.com" class="btn-dossier"><i class="fas fa-envelope"></i> Contact</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'scripts.php'; ?>
</body>
</html>