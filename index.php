<?php
session_start();
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Nitipin</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="assets/img/blog/logobiru.png" rel="icon">

  

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Updated: Nov 01 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

 <header id="header" class="header d-flex align-items-center fixed-top">
  <div class="container d-flex align-items-center justify-content-between">

    <!-- Logo -->
    <a href="index.php" class="logo d-flex align-items-center me-auto me-xl-0">
      <img src="/assets/img/nitipin/nitip_logo.png" alt="">
      <!-- <h1 class="sitename">Nitipin</h1><span>.</span> -->
    </a>

    <!-- Menu Navigasi -->
    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#hero" class="active">Home</a></li>
        <li><a href="#features">Benefit</a></li>
        <li><a href="/category.html">Categories</a></li>
        <li><a href="#order">Order</a></li>
        <li><a href="#testimonials">Testimonials</a></li>
        <li><a href="#contact">Contact</a></li>
        <?php
        if (isset($_SESSION['tipe'])) {
    if ($_SESSION['tipe'] === 'admin') {
        // Tampilkan tombol admin
        echo '<li><a href="atmin.php">Admin</a></li>';
    } else {
        // Tidak menampilkan tombol untuk user
        echo '';
        }
    } else {
        echo '';
    }
    ?>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

    <!-- Tombol Login/Logout -->
    <?php if (isset($_SESSION['username'])): ?>
  <a class="btn-getstarted" href="logout.php">Logout</a>
<?php else: ?>
  <a class="btn-getstarted" href="login.php">Login</a>
<?php endif; ?>


  </div>
</header>

  

  <main class="main">

    <!-- Hero Section -->
<section id="home">
    <div class="container-fluid px-0 position-relative" id="header-image">
        <img class="w-100" src="/assets/img/nitipin/abu-biru.jpg" alt="Image">
        <div class="position-absolute top-50 end-0 translate-middle-y  pe-4 caption-text">
         <div class="row justify-content-center text-center">
            <div class="col-lg-10 col-md-12">
              <h2 class="display-5 fw-bold mb-3" data-aos="fade-up" data-aos-delay="100">Welcome to Our Website</h2>
              <p  class="lead text-light" data-aos="fade-up" data-aos-delay="200">We are team of talented designers making websites with Bootstrap</p>
            </div>
        </div>
       </div>
      </div>
</section>
<!-- /Hero Section -->


<section class="py-5 bg-white">
  <div class="container">
    <div class="row g-4 justify-content-center">

      <!-- Box 1 -->
      <div class="col-md-6 col-lg-4">
        <div class="card border-0 shadow-sm text-center p-4 h-100">
          <div class="icon-circle mx-auto mb-3">
            <img src="/assets/img/icon-unit.png" alt="Unit" class="img-fluid">
          </div>
          <h5 class="fw-bold">Unit Lengkap</h5>
          <p class="text-muted">Pelanggan bebas memilih motor sesuai keinginan mereka beserta kelengkapannya.</p>
        </div>
      </div>

      <!-- Box 2 -->
      <div class="col-md-6 col-lg-4">
        <div class="card border-0 shadow-sm text-center p-4 h-100">
          <div class="icon-circle mx-auto mb-3">
            <img src="/assets/img/icon-kemudahan.png" alt="Kemudahan" class="img-fluid">
          </div>
          <h5 class="fw-bold">Kemudahan</h5>
          <p class="text-muted">Penyewaan kendaraan dan informasi wisata yang mudah membuat pelanggan nyaman.</p>
        </div>
      </div>

      <!-- Box 3 -->
      <div class="col-md-6 col-lg-4">
        <div class="card border-0 shadow-sm text-center p-4 h-100">
          <div class="icon-circle mx-auto mb-3">
            <img src="/assets/img/icon-pelayanan.png" alt="Pelayanan" class="img-fluid">
          </div>
          <h5 class="fw-bold">Pelayanan</h5>
          <p class="text-muted">Kami berkomitmen untuk pelayanan terbaik demi kenyamanan pelanggan.</p>
        </div>
      </div>

    </div>
  </div>
</section>



    
    <!-- Features Section -->
    <section id="features" class="features section py-5" >
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Benefit</h2>
        <p>Why Choose Us?<br></p>
      </div><!-- End Section Title -->
      <div class="container">
         <div class="row gy-4">
          <div class="col-xl-6 d-flex align-items-center " data-aos="zoom-out" data-aos-delay="100">
            <img src="assets/img/gambar/kardus.png" class="img-fluid" alt="">
          </div>
            <div class="col-xl-6 d-flex p-2 ">
              <div class="row Top align-self-center gy-5">
                <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">
                 <div class="feature-box d-flex align-items-center">
                    <i class="bi bi-check "></i>
                    <h3>Terpercaya</h3>
                 </div>
                </div>
                <div class="col-md-12" data-aos="fade-up" data-aos-delay="200">
                  <div class="feature-box d-flex align-items-center">
                    <i class="bi bi-check"></i>
                    <h3>Terjamin Keamanannya</h3>
                </div>
                </div>
                <div class="col-md-12" data-aos="fade-up" data-aos-delay="300">
                  <div class="feature-box d-flex align-items-center">
                    <i class="bi bi-check"></i>
                    <h3>Terjangkau</h3>
                  </div>
                </div>
                
                <!-- End Feature Item -->

              


            </div>
          </div>

        </div>

      </div>
    </section><!-- /Features Section -->

    <!-- Values Section -->
    <section id="values" class="values section px-auto mx-auto" >
          <div class="container section-title" data-aos="fade-up">
            <h2>Our Categories</h2>
          </div><!-- End Section Title --> 

          <div class="container"> 
            <div class="row gy-4">
              <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card">
                    <img src="assets/img/gambar/book.png" class="img-fluid" alt="">
                    <!-- <a href="/small.html">Small</a> -->
                    <h3>Small</h3>
                </div>
              </div>
              <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card">
                  <img src="assets/img/nitipin/mediem.png" class="img-fluid" alt="">
                  <h3>Medium</h3>
                </div>
              </div>
              <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card">
                  <img src="assets/img/gambar/lemari.png" class="img-fluid" alt="">
                  <h3>Large</h3>
                </div>
              </div>
            </div>
          </div> 
    </section><!-- /Values Section -->

    <!-- order button -->
<section id="order" class="order section bg-none mx-auto px-auto">
 <div  class="order-container" >
    <h2>Ready to Order?</h2>
    <p>Click the button below to place your order.</p>
    <a href="form.php" class="btn-order">Order Now</a>
  </div>
</section>


    <!-- /order button -->


    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section my-auto" >
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>Our Customer Love</h2>
        <!-- <p>What We Do<br></p> -->
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Amanah sekali, barang sampai dengan selamat dan cepat. Pelayanan juga ramah dan baik. Terima kasih Nitipin.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/team/gwan.jpeg" class="testimonial-img" alt="">
                  <h3>Gwan Sik</h3>
                  <h4>Mahasiswa</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Aigoo,murah meriah dan cepat. Pelayanan juga ramah dan baik. Terima kasih Nitipin.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/team/ae.jpeg" class="testimonial-img" alt="">
                  <h3>Aesun</h3>
                  <h4>IRT</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Mudik lebaran saya menitipkan barang ke Nitipin, barang dijaga dengan baik sama dengan kondisi awal. Pelayanan juga ramah dan baik. Terima kasih Nitipin.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/team/gm.jpeg" class="testimonial-img" alt="">
                  <h3>geummyong</h3>
                  <h4>Mahasiswa Luar Kota</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <div class="stars">
                  <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <p>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                </p>
                <div class="profile mt-auto">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- form review -->
<section class="container my-3">
  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up" style="text-align: center; margin-bottom: 30px;">
    <h2 style="color: #003366; font-weight: bold;">Review</h2>
    <p style="color: #1E293B;">Beri kami ulasan Anda</p>
  </div>

  <div class="p-5 shadow rounded" style="background-color: #F1F5F9; max-width: 1200px; margin: auto;">
    <form action="#" method="post">
      <div class="mb-3" style="margin-bottom: 20px;">
        <label for="name" class="form-label" style="font-weight: bold; color: #1E293B;">Nama</label>
        <input type="text" class="form-control" id="name" name="name" required
          style="width: 100%; padding: 12px; border-radius: 8px; border: 2px solid #ccc; transition: 0.3s; outline: none;">
      </div>

      <div class="mb-3" style="margin-bottom: 20px;">
        <label for="comment" class="form-label" style="font-weight: bold; color: #1E293B;">Komentar</label>
        <textarea class="form-control" id="comment" name="comment" rows="4" required
          style="width: 100%; padding: 12px; border-radius: 8px; border: 2px solid #ccc; transition: 0.3s; outline: none;"></textarea>
      </div>

      <div style="text-align: center;">
        <button type="submit"
          style="background: #003366; color: white; padding: 12px 30px; border: none; border-radius: 8px; font-weight: bold; font-size: 1rem; transition: background 0.3s, transform 0.2s; box-shadow: 0 4px 12px rgba(0, 51, 102, 0.3); cursor: pointer;">
          Kirim Ulasan
        </button>
      </div>
    </form>
  </div>
</section>

<!-- Efek fokus input -->
<script>
  const inputs = document.querySelectorAll('input, textarea');
  inputs.forEach(input => {
    input.addEventListener('focus', () => {
      input.style.borderColor = '#0073e6';
      input.style.boxShadow = '0 0 0 3px rgba(0, 115, 230, 0.2)';
    });
    input.addEventListener('blur', () => {
      input.style.borderColor = '#ccc';
      input.style.boxShadow = 'none';
    });
  });
</script>


   
    <!-- Contact Section -->
    <section id="contact" class="contact py-5">
      <div class="container">
        <!-- Section Title -->
        <div class="section-title text-center mb-3" data-aos="fade-up">
          <h2>Contact</h2>
        </div>
    
        <div class="row g-4">
          <!-- Left Column with Info -->
          <div class="col-md-6">
            <div class="ratio ratio-16x9">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3953.468487115405!2d110.406180806458!3d-7.74002848489793!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a596c488653bb%3A0x82dfbd66792a7728!2s7C54%2BXFG%2C%20Ploso%20Kuning%20V%2C%20Minomartani%2C%20Kec.%20Ngaglik%2C%20Kabupaten%20Sleman%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1742264955977!5m2!1sid!2sid" allowfullscreen></iframe>
            </div>
          </div>
    
          <!-- Right Column with Contact Info -->
          <div class="col-md-6 d-flex flex-column justify-content-center">
            <p><strong>Alamat :</strong> Ploso Kuning, Condong Catur, Depok, Sleman, Yogyakarta </p>
            <p><strong>Email:</strong> @nitipin</p>
            <p><strong>Phone:</strong> +62 8821 5474 608</p>
            <a href="https://wa.me/088215474608" target="_blank" class="btn btn-success w-100">
              <i class="bi bi-whatsapp"></i> WhatsApp
            </a>
          </div>
        </div>
      </div>
    </section>
    

  </main>

  <footer id="footer" class="footer">
    <div class="container footer-top">
      <div class="row gy-4">
        <!-- Bagian About -->
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.php" class="d-flex align-items-center">
            <span class="sitename">Nitipin</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Ploso Kuning, Condong Catur </p>
            <p>Depok, Sleman, Yogyakarta </p>
            <p class="mt-3"><strong>Phone:</strong> <span>088215474608</span></p>
            <p><strong>Email:</strong> <span>Nitipin.@gmail.com</span></p>
          </div>
        </div>
  
        <!-- Bagian Useful Links -->
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#hero">Home</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Categories</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#order">Order</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Review</a></li>
          </ul>
        </div>
  
        <!-- Bagian Our Services -->
        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Penitipan Barang</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Pembersihan Kos</a></li>
            <li><i class="bi bi-chevron-right"></i> <a href="#">Pindahan</a></li>
          </ul>
        </div>
  
        <!-- Bagian Follow Us -->
        <div class="col-lg-4 col-md-12 jus">
          <!-- <h4>Follow Us</h4> -->
          <div class="social-links d-flex justify-content-center">
            <a href=""><i class="bi bi-twitter"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
  
      </div>
    </div>
  
    <!-- Bagian Copyright -->
    <div class="container copyright text-center mt-4">
      <p><span></span> <strong class="px-1 sitename">Nitipin</strong></p>
      <div class="credits">
        <!-- Credits section, bisa dibiarkan kosong jika tidak diperlukan -->
      </div>
    </div>
  
  </footer>
  

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

 