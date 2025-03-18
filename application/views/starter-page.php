<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>PT. MITRA MURATARA SEJAHTERA</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="Assets/assets/img/BAR.png" rel="BAR">
  <link href="Assets/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&family=Raleway:wght@100;200;300;400;500;600;700;800;900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="Assets/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="Assets/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="Assets/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="Assets/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="Assets/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="Assets/assets/css/main.css" rel="stylesheet">
</head>

<body class="starter-page">

<header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="starter-page.php" class="logo d-flex align-items-center me-auto">
        <h1 class="sitename">Selamat Datang</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero">Info</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <a href="<?= base_url('Home') ?>" class="cta-btn">Halaman Utama</a>

    </div>
</header>

<main class="main">

    <!-- Page Title -->
    <div class="page-title dark-background" data-aos="fade" style="background-image: url(assets/img/rumah.jpg);">
      <div class="container position-relative">
        <h1>PT. MITRA MURATARA SEJAHTERA</h1>
        <p></p>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="<?= base_url('Home') ?>">Home</a></li>
            <li class="current"><a href="<?= base_url('Home#services-2') ?>">Info Terkini</a></li>
          </ol>
        </nav>
      </div>
    </div>

    <!-- Info Terkini Section -->
    <section id="starter-section" class="starter-section section">
      <div class="container section-title" data-aos="fade-up">
        <h2>Info Terkini</h2>
        <p><br></p>
      </div>

      <div class="container" data-aos="fade-up">
        <p>PT. MITRA MURATARA SEJAHTERA</p>
      </div>
    </section>

</main>

<footer id="footer" class="footer dark-background">
    <div class="container footer-top">
      <div class="row gy-4">
        
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="<?= base_url() ?>" class="logo d-flex align-items-center">
            <span class="sitename">PT. MITRA MURATARA SEJAHTERA</span>
          </a>
          <div class="footer-contact pt-3">
            <p></p>
            <p class="mt-3"><strong>Phone:</strong> <span>+62</span></p>
            <p><strong>Email:</strong> <span>mitramuratarasejahtera@gmail.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Kembali</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Halaman</a></li>
          </ul>
        </div>

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <form action="" method="post">
            <div class="newsletter-form">
              <input type="email" name="email" required>
              <input type="submit" value="Subscribe">
            </div>
            <div class="loading"></div>
            <div class="error-message"></div>
            <div class="sent-message"></div>
          </form>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p><strong class="px-1 sitename">PT. MITRA MURATARA SEJAHTERA</strong></p>
      <div class="credits">
        <a href="https://bootstrapmade.com/">BootstrapMade</a> | <a href="https://themewagon.com">Themewagon</a>
      </div>
    </div>

</footer>

<!-- Scroll Top -->
<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="Assets/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="Assets/assets/vendor/php-email-form/validate.js"></script>
<script src="Assets/assets/vendor/aos/aos.js"></script>
<script src="Assets/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="Assets/assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="Assets/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="Assets/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
<script src="Assets/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

<!-- Main JS File -->
<script src="Assets/assets/js/main.js"></script>

</body>
</html>
