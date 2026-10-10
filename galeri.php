<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio - Galeri</title>
    <link rel="stylesheet" href="css/portfolio.css">
</head>
<body>
<?php include "_nav.php"; ?>
<main>
    <section class="page-hero"><div class="portfolio-wrap reveal"><span class="eyebrow">GALERI PROJECT</span><h1>Project yang pernah saya kerjakan</h1><p>Kumpulan dokumentasi project selama belajar dan mengembangkan kemampuan.</p></div></section>
    <section class="section portfolio-wrap">
        <div class="project-grid gallery-grid">
            <article class="project-card reveal" id="kasir"><img src="gambar/ProjectKasir.png" alt="Project Website Kasir"><div class="project-body"><span>PROJECT 01</span><h2>Website Kasir</h2><p>Dokumentasi project website kasir.</p><a class="btn btn-primary small" href="http://localhost/kasir_project1//" target="_blank">Lihat Project ↗</a></div></article>
            <article class="project-card reveal" id="sekolah"><img src="gambar/ProjectWebSekolah.png" alt="Project Website Sekolah"><div class="project-body"><span>PROJECT 02</span><h2>Website Sekolah</h2><p>Dokumentasi project website sekolah menggunakan CodeIgniter 3.</p><a class="btn btn-primary small" href="http://localhost/project_3/" target="_blank">Lihat Project ↗</a></div></article>
            <article class="project-card reveal" id="tampilan-menu"><img src="gambar/projectTampilMenu.png" alt="Project Tampilan Menu"><div class="project-body"><span>PROJECT 03</span><h2>Tampilan Menu</h2><p>Dokumentasi project website tampilan menu.</p><a class="btn btn-primary small" href="http://localhost/xrcipank02/daftarmenu/" target="_blank">Lihat Project ↗</a></div></article>
        </div>
    </section>
</main>
<footer><div class="portfolio-wrap"><strong>MyPortfolio</strong><span>© 2026 Allura Ipank Putra P</span></div></footer>
<script src="js/portfolio.js"></script>
</body>
</html>