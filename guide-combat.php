<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Combat Guide</title>
    <link rel="icon" href="assets/gambar/icon/ProjectMoonLogoClear.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body>
    <?php include 'sidebar.php'; ?>
    
    <main class="main-content">
        <header class="main-header">
            <h1>Mekanisme Dasar Pertarungan</h1>
        </header>

        <section class="guide-section">
            <h2><i class="fas fa-fist-raised"></i> Tujuan Pertarungan: Memenangkan Clash</h2>
            <p>Pertarungan di Limbus Company berpusat pada sistem "Clash", di mana skill dari Sinner Anda akan beradu dengan skill musuh. Tujuannya adalah untuk mendapatkan angka yang lebih tinggi agar serangan Anda yang masuk dan serangan musuh dibatalkan.(Kecuali karakter sinner atau musuh yang memiliki <b><img alt="Unbreakable Coin" src="assets/gambar/Effect/Unbreakable_Coin.png" width="30px" height="30px" align="center">Unbreakable Coin</b>)</p>
        </section>

        <section class="guide-section">
            <h2><i class="fas fa-dice"></i> Koin dan Angka Skill</h2>
            <p>Setiap skill memiliki "Base Power" dan sejumlah "Koin". Angka final sebuah skill dihitung dari `Base Power + (Hasil lemparan setiap Koin)`. Koin yang menunjukkan sisi kepala akan menambah power, sementara sisi ekor tidak. Semakin tinggi Sanity (SP) Sinner, semakin besar kemungkinan Koin menunjukkan sisi kepala.</p>
        </section>

        <section class="guide-section">
            <h2><i class="fas fa-gavel"></i> Tipe Serangan dan Resistensi</h2>
            <p>Ada tiga tipe serangan fisik. Setiap musuh dan Sinner memiliki tingkat resistensi yang berbeda terhadap setiap tipe, yang sangat mempengaruhi damage.</p>
            <table class="requirements-table">
                <thead>
                    <tr>
                        <th>Ikon</th>
                        <th>Tipe Serangan</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><b><img alt="Slash" src="assets/gambar/Res/Slash.png" width="30px" height="30px" align="center"></b></td>
                        <td><b>Slash (Tebas)</b></td>
                        <td>Efektif melawan musuh berdaging, tidak efektif melawan pelindung keras.</td>
                    </tr>
                    <tr>
                        <td><b><img alt="Pierce" src="assets/gambar/Res/Pierce.png" width="30px" height="30px" align="center"></b></td>
                        <td><b>Pierce (Tusuk)</b></td>
                        <td>Efektif untuk menembus celah pelindung, netral terhadap daging.</td>
                    </tr>
                    <tr>
                        <td><b><img alt="Blunt" src="assets/gambar/Res/Blunt.png" width="30px" height="30px" align="center"></b></td>
                        <td><b>Blunt (Hantam)</b></td>
                        <td>Efektif untuk menghancurkan cangkang atau pelindung keras.</td>
                    </tr>
                </tbody>
            </table>
        </section>
    
        <section class="guide-section">
            <h2><i class="fas fa-palette"></i> Afinitas Dosa (Sin Affinity)</h2>
            <p>Setiap skill juga memiliki warna Dosa. Menggunakan skill dengan warna yang sama secara beruntun akan memberikan bonus damage atau mengaktifkan E.G.O Pasif. Ini adalah kunci untuk memaksimalkan output damage tim Anda.</p>
            <table class="requirements-table">
                <thead>
                    <tr>
                        <th>Ikon</th>
                        <th>Berhubungan Dengan Status Efek</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><b><img alt="Wrath" src="assets/gambar/Affinity/LcbSinWrath.png" width="30px" height="30px" align="center">Wrath</b></td>
                        <td><b><img alt="Burn" src="assets/gambar/Effect/Burn.png" width="30px" height="30px" align="center">Burn</b></td>
                    </tr>
                    <tr>
                        <td><b><img alt="Lust" src="assets/gambar/Affinity/LcbSinLust.png" width="30px" height="30px" align="center">Lust</b></td>
                        <td><b><img alt="Bleed" src="assets/gambar/Effect/Bleed.png" width="30px" height="30px" align="center">Bleed</b></td>
                    </tr>
                    <tr>
                        <td><b><img alt="Sloth" src="assets/gambar/Affinity/LcbSinSloth.png" width="30px" height="30px" align="center">Sloth</b></td>
                        <td><b><img alt="Tremor" src="assets/gambar/Effect/Tremor.png" width="30px" height="30px" align="center">Tremor</b></td>
                    </tr>
                    <tr>
                        <td><b><img alt="Gluttony" src="assets/gambar/Affinity/LcbSinGluttony.png" width="30px" height="30px" align="center">Gluttony</b></td>
                        <td><b><img alt="Rupture" src="assets/gambar/Effect/Rupture.png" width="30px" height="30px" align="center">Rupture</b></td>
                    </tr>
                    <tr>
                        <td><b><img alt="Gloom" src="assets/gambar/Affinity/LcbSinGloom.png" width="30px" height="30px" align="center">Gloom</b></td>
                        <td><b><img alt="Sinking" src="assets/gambar/Effect/Sinking.png" width="30px" height="30px" align="center">Sinking</b></td>
                    </tr>
                    <tr>
                        <td><b><img alt="Pride" src="assets/gambar/Affinity/LcbSinPride.png" width="30px" height="30px" align="center">Pride</b></td>
                        <td><b><img alt="Poise" src="assets/gambar/Effect/Poise.png" width="30px" height="30px" align="center">Poise</b></td>
                    </tr>
                    <tr>
                        <td><b><img alt="Envy" src="assets/gambar/Affinity/LcbSinEnvy.png" width="30px" height="30px" align="center">Envy</b></td>
                        <td><b><img alt="Charge" src="assets/gambar/Effect/Charge.png" width="30px" height="30px" align="center">Charge</b></td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>
    
    <?php include 'scripts.php'; ?>
</body>
</html>