<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Limbus Company</title>
    <link rel="icon" href="assets/gambar/icon/ProjectMoonLogoClear.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <?php include 'sidebar.php'; ?>
    <main class="main-content">
        <header class="main-header">
            <center>
                <div class="main-header-logo">
                    Welcome to
                    <img src="assets/gambar/icon/WikiLogo.png" alt="Limbus Company Logo">
                    , Dear Manager!
                </div>
                <table width="100%">
                    <tbody>
                        <tr>
                            <th style="background:#810000;" align="center">
                                <div style="color:#FFFFFF;font-size:23px;font-family:Bebas Neue;">
                                    FACE THE SIN, SAVE THE E.G.O</div>
                            </th>
                        </tr>
                    </tbody>
                </table>
            </center>
        </header>

        <section class="showcase">
            <h2>Featured</h2>

            <div class="swiper showcase-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <video src="assets/video/Canto VIII.mp4" loop muted playsinline></video>
                        <div class="slide-caption">Season 6 Update</div>
                    </div>

                    <div class="swiper-slide">
                        <img src="assets/gambar/icon/TabSinners.png" alt="Tab Sinners">
                        <div class=slide-caption>Characters</div>
                    </div>
                
                    <div class="swiper-slide">
                        <video src="assets/video/Battle.mp4" loop muted playsinline></video>
                        <div class="slide-caption">Normal Encounter</div>
                    </div>

                    <div class="swiper-slide">
                        <img src="assets/gambar/icon/Extraction.png" alt="Extraction">
                        <div class="slide-caption">Featured Extraction/Gacha</div>
                    </div>

                    <div class="swiper-slide">
                        <video src="assets/video/Focused_Encounter.mp4" loop muted playsinline></video>
                        <div class="slide-caption">Focused Encounter</div>
                    </div>
                </div>

                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <div class="swiper-pagination"></div>
            </div>
        </section>
        <hr>
        <p>
            <i>
                <b>Limbus Company</b>
            </i>
            <img alt="Limbus Company Logo" src="assets/gambar/icon/LimbusIcon.png" width="30px" height="30px" align="center">
            adalah sebuah game single-player RPG berbasis turn-based yang dikembangkan oleh Project Moon, dirilis untuk perangkat Microsoft Windows, iOS, dan Android. Game ini diluncurkan pada tanggal 27 Februari 2023, mengikuti kisah seorang Manajer Eksekutif yang mengalami amnesia yang bertugas membimbing dua belas Sinner aneh melalui masa lalu mereka yang bermasalah dan menuju Golden Boughs. Game ini berlatar setelah game sebelumnya <i><b>Lobotomy Corporation</b></i> <img alt="Lobotomy Corporation Logo" src="assets/gambar/icon/L_Corp_Logo.png" width="30px" height="30px" align="center"> dan <i><b>Library of Ruina</b></i> <img alt="Library of Ruina Logo" src="assets/gambar/icon/Logo_lor.png" width="30px" height="30px" align="center">, yang ketiganya mengeksplorasi distopia unik yang dikenal sebagai <i><b>The City</b><i>. 
        </p>
    </main>
    <?php include 'scripts.php'; ?>
</body>
</html>