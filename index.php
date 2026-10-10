<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio - Home</title>
    <link rel="stylesheet" href="css/portfolio.css">
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>
<?php include "_nav.php"; ?>
<main>
    <section class="hero portfolio-wrap">
        <div class="hero-copy reveal">
            <span class="eyebrow">PORTFOLIO • XI RC</span>
            <h1>Halo, saya <span>Allura Ipank Putra P</span>.</h1>
            <p>Saya tertarik pada teknologi, kreativitas, dan pengalaman baru yang bisa menambah kemampuan. Di sini saya menampilkan beberapa project yang sudah saya kerjakan.</p>
            <div class="hero-actions">
                <a href="#project" class="btn btn-primary">Lihat Project</a>
                <a href="galeri.php" class="btn btn-ghost">Buka Galeri</a>
            </div>
            <div class="quick-info">
                <div><b>02</b><span>No. Absen</span></div>
                <div><b>XI RC</b><span>Kelas</span></div>
                <div><b>2026</b><span>Portfolio</span></div>
            </div>
        </div>
        <div class="hero-photo reveal">
            <div class="photo-glow"></div>
            <img src="gambar/saya.jpeg" alt="Foto Allura">
            <div class="photo-card"><span>Student</span><strong>SMKN 2 Karanganyar</strong></div>
        </div>
    </section>

    <section class="section portfolio-wrap" id="tentang">
        <div class="section-heading reveal"><span class="eyebrow">TENTANG SAYA</span><h2>Kenalan lebih dekat</h2><p>Beberapa informasi singkat tentang saya, pendidikan, project, dan keahlian.</p></div>
        <div class="about-grid">
            <article class="info-card reveal"><span class="info-icon">01</span><h3>Profil Singkat</h3><p>Saya adalah pribadi yang memiliki semangat, selalu ingin tahu hal baru dan selalu berusaha mengembangkan kemampuan diri. Saya tertarik pada teknologi, kreativitas, dan berbagai pengalaman baru yang dapat meningkatkan wawasan serta keterampilan. Dengan sikap disiplin dan kemampuan beradaptasi, saya siap menghadapi tantangan serta terus berkembang untuk mencapai tujuan pribadi maupun profesional.</p></article>
            <article class="info-card reveal"><span class="info-icon pink">02</span><h3>Jenjang Pendidikan</h3><p>SDN 04 MATESIH<br>SMPN 1 MATESIH<br>SMKN 2 KARANGANYAR</p></article>
            <article class="info-card reveal"><span class="info-icon yellow">03</span><h3>Keahlian</h3><p>Microsoft Office</p></article>
            <article class="info-card reveal"><span class="info-icon blue">04</span><h3>Project yang Pernah Dibuat</h3><p><a href="galeri.php#kasir">Project Website Kasir</a><br><a href="galeri.php#sekolah">Project CI3 Membuat Website Sekolah</a><br><a href="galeri.php#tampilan-menu">Project Tampilan Menu</a></p></article>
        </div>
    </section>

    <section class="section projects-section" id="project">
        <div class="portfolio-wrap">
            <div class="section-heading reveal"><span class="eyebrow">PROJECT</span><h2>Beberapa project yang pernah saya kerjakan</h2><p>Project dibuat selama belajar pemrograman dan pengembangan website.</p></div>
            <div class="project-grid">
                <article class="project-card reveal"><img src="gambar/ProjectKasir.png" alt="Project Website Kasir"><div class="project-body"><span>PHP • MySQL</span><h3>Website Kasir</h3><p>Project website kasir untuk mengelola data barang dan transaksi.</p><a href="galeri.php#kasir">Lihat detail →</a></div></article>
                <article class="project-card reveal"><img src="gambar/ProjectWebSekolah.png" alt="Project Website Sekolah"><div class="project-body"><span>CodeIgniter 3</span><h3>Website Sekolah</h3><p>Project website sekolah dengan beberapa halaman informasi dan administrasi.</p><a href="galeri.php#sekolah">Lihat detail →</a></div></article>
                <article class="project-card reveal"><img src="gambar/projectTampilMenu.png" alt="Project Tampilan Menu"><div class="project-body"><span>HTML • CSS</span><h3>Tampilan Menu</h3><p>Project untuk membuat tampilan menu website yang sederhana dan rapi.</p><a href="galeri.php#tampilan-menu">Lihat detail →</a></div></article>
            </div>
        </div>
    </section>

    <section class="section contact-section" id="kontak">
        <div class="portfolio-wrap">
            <div class="section-heading reveal contact-heading">
                <span class="eyebrow">CONTACT ME</span>
                <h2>Hubungi saya</h2>
                <p>Terima kasih sudah berkunjung. Kalau ingin menghubungi saya, silakan gunakan informasi di bawah ini.</p>
            </div>
            <div class="contact-details">
                <article class="contact-detail-card reveal">
                    <span class="contact-symbol" aria-hidden="true">✉</span>
                    <div class="contact-detail-text"><h3>Email</h3><a href="mailto:blcjaya0@gmail.com">blcjaya0@gmail.com</a></div>
                </article>
                <article class="contact-detail-card reveal">
                    <span class="contact-symbol" aria-hidden="true">☎</span>
                    <div class="contact-detail-text"><h3>No. Telepon</h3><a href="tel:088228848122">088228848122</a></div>
                </article>
                <article class="contact-detail-card address-card reveal">
                    <span class="contact-symbol" aria-hidden="true">⌖</span>
                    <div class="contact-detail-text"><h3>Alamat</h3><p>Karanganyar RT 02 / RW 03, Kecamatan Matesih, Kabupaten Karanganyar</p></div>
                </article>
            </div>
            <div class="contact-card reveal">
                <div><span class="eyebrow">PORTFOLIO</span><h2>Terima kasih sudah berkunjung.</h2><p>Website portfolio ini dibuat sebagai dokumentasi singkat tentang saya dan project yang pernah saya kerjakan.</p></div>
                <a href="galeri.php" class="btn btn-primary">Lihat Semua Project</a>
            </div>
        </div>
    </section>
</main>
<footer><div class="portfolio-wrap"><strong>MyPortfolio</strong><span>© 2026 Allura Ipank Putra P</span></div></footer>
<script src="js/portfolio.js"></script>
</body>
</html>