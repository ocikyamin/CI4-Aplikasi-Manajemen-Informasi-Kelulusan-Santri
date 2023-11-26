<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Favicons -->
  <link href="<?=base_url()?>public/img/logo.png" rel="icon">
  <link href="<?=base_url()?>public/img/logo.png" rel="apple-touch-icon">
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>InfoLus | Sistem Informasi Kelulusan Santri</title>
  <meta name="description" content="Aplikasi Informasi Kelulusan santri secara online memungkinkan santri dan orang tua untuk dengan mudah mengecek status kelulusan mereka. Aplikasi ini memberikan informasi akurat dan terkini tentang status kelulusan santri, seperti nilai ujian akhir, kelulusan, dan pengumuman kelulusan. Dengan aplikasi ini, santri dan orang tua dapat mengakses informasi kelulusan mereka dengan cepat dan mudah tanpa harus datang ke sekolah.">
  <meta name="keywords" content="informasi kelulusan, santri, online, nilai ujian, pengumuman kelulusan">
  <meta name="author" content="Abdul Yamin, S.Pd">
  <meta name="robots" content="index, follow">
  <meta property="og:title" content="Informasi Kelulusan Santri Online">
  <meta property="og:description" content="Aplikasi Informasi Kelulusan Santri secara online memungkinkan Santri dan orang tua untuk dengan mudah mengecek status kelulusan mereka.">
  <meta property="og:image" content="<?=base_url()?>public/img/gambar-aplikasi.webp">
  <meta property="og:url" content="<?=base_url()?>public/img/aplikasi-informasi-kelulusan-Santri-online">
  <meta property="og:type" content="website">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Informasi Kelulusan Santri Online">
  <meta name="twitter:description" content="Aplikasi Informasi Kelulusan Santri secara online memungkinkan Santri dan orang tua untuk dengan mudah mengecek status kelulusan mereka.">
  <meta name="twitter:image" content="<?=base_url()?>public/img/gambar-aplikasi.webp">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url()?>public/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?=base_url()?>public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url()?>public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=base_url()?>public/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?=base_url()?>public/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="<?=base_url()?>public/assets/css/style.css" rel="stylesheet">
  <link href="<?=base_url()?>public/assets/vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
  
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo me-auto"><a href="<?=base_url()?>">iNFolus</a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="<?=base_url()?>" class="logo me-auto">
      <img src="<?=base_url()?>public/img/logo.png" alt="Logo" class="img-fluid">
     <span>InfoLus</span>
    </a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#features">Panduan</a></li>
          <li><a class="nav-link scrollto " href="#faq">FAQ</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center" data-aos="fade-up">
        <div class="col-lg-6 intro-info order-lg-first order-last" data-aos="zoom-in" data-aos-delay="100">
          <h2>Cek Kelulusan <br>Cukup dari <span>Rumah!</span></h2>
          <div>
            <a href="#call-to-action" class="btn-get-started shadow scrollto"><i class="bi bi-search"></i>  Cek Kelulusan Sekarang</a>
          </div>
        </div>

        <div class="col-lg-6 intro-img order-lg-last order-first" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?=base_url()?>public/img/01.webp" alt="" class="img-fluid">
        </div>
      </div>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">

      <div class="container" data-aos="fade-up">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="about-img" data-aos="fade-right" data-aos-delay="100">
              <img src="<?=base_url()?>public/img/inyiak.webp" alt="">
            </div>
          </div>

          <div class="col-lg-7 col-md-6">
            <div class="about-content" data-aos="fade-left" data-aos-delay="100">
              <h2>Visi & Misi</h2>
              <h3>" Menjadi lembaga pendidikan yang terkemuka berlandaskan ahlus sunnah wal jamaah dan bermazhab Syafi’i dalam mewujudkan generasi muslim tafaqquh fi al-din dan iqamah al-din."</h3>
             
              <ul>
                <li>
                <i class="bi bi-check-circle"></i> Menyelenggarakan pendidikan Islam berlandaskan ahlus sunnah wal jamaah dan bermazhab Syafi’i serta ilmu pengetahuan dan teknologi yang berkesinambungan;
                </li>
                <li>
                <i class="bi bi-check-circle"></i> Menyelenggarakan kajian-kajian terapan untuk menunjang pengembangan ilmu keislaman, ilmu pengetahuan, dan teknologi;
                </li>
                <li>
                <i class="bi bi-check-circle"></i>  Memberikan pelayanan dan pengabdian kepada masyarakat berupa penyebarluasan ilmu keislaman dan ilmu pengetahuan melalui kegiatan dakwah dan sosial;
                </li>
                <li>
                <i class="bi bi-check-circle"></i> Menjalin jaringan kerja sama yang produktif dan berkelanjutan dalam rangka pengembangan pendidikan, dakwah dan sosial dengan lembaga pendidikan Islam, khususnya madrasah-madrasah tarbiyah islamiyah lainnya, pemerintahan, swasta dan masyarakat di tingkat daerah, nasional maupun internasional;
                </li>
                <li>
                <i class="bi bi-check-circle"></i> Melaksanakan pemberdayaan terhadap masyarakat yang berorientasi pada peningkatan kesejahteraan MTI Canduang dan masyarakat; dan
                </li>
                <li>
                <i class="bi bi-check-circle"></i> Meningkatkan kualitas tata kelola lembaga MTI Canduang secara berkelanjutan.
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </section><!-- End About Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="zoom-out">
        <div class="row">
          <div class="col-lg-12 text-lg-start">
            <h3 class="cta-title">Informasi Pengumuman</h3>
            <?php


if (!empty($period)) {
?>
<div class="alert alert-info">
<div class="table-responsive">
<table class="table table-sm table-hover">
<thead>
<tr>
    <th>Periode</th>
    <th>Waktu</th>
    <th>Jenis Kelulusan</th>
    <th>Status</th>
  </tr>
</thead>
<tbody>
  <?php
foreach ($period as $p):?>
<tr>
<td><?=$p['periode_tahun']?></td>
<td><?=date('d F Y', strtotime($p['waktu_mulai']))?> s/d <?=date('d F Y', strtotime($p['waktu_tutup']))?></td>
<td><?=$p['tipe_kelulusan']?></td>
<td>
<?php
if ($p['is_active']==1) {
echo "<span class='badge rounded-pill text-bg-success'> Aktif</span>";
}else{
echo "<span class='badge rounded-pill text-bg-danger'> Tidak Aktif</span>";
}
?>
</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
</div>
</div>

<?php
  
}


            ?>
            <!-- <p class="cta-text"> 
            Pengumuman Kelulusan kelas VII Tahun Pelajaran 2022/2023 akan diumumkan tanggal 05 Mei 2023 Jam 09.30 Wita sesuai jadwal kelulusan. selamat menunggu.
            </p>
            <hr> -->
            <p>
              <ul class="text-white">
                <li>Gunakan NISN Untuk Melihat Kelulusan Assasment Madrasah</li>
                <li>Gunakan Nomor BP Untuk Melihat Kelulusan Ujian Pondok</li>
              </ul>
            </p>
            <form id="form-info" method="post">
              <?=csrf_field()?>
              <div class="row">
                <div class="col-lg-5">
                <div class="input-group shadow">
                <input type="text" name="nisn" class="form-control" placeholder="NISN / No.BP">
                <button class="btn btn-primary" type="submit" id="btn-cek"><i class="bi bi-search"></i> Lihat Hasil</button>
                </div>

                </div>
              </div>
            </form>
           
            

          </div>
          <!-- <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#">Call To Action</a>
          </div> -->
        </div>

      </div>
    </section><!--  End Call To Action Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row feature-item">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <img src="<?=base_url()?>public/assets/img/features-1.svg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0" data-aos="fade-left" data-aos-delay="150">
            <h4>Panduan</h4>
            <p>
             <ul>
              <li>Silahkan akses halaman web <a href="<?=base_url()?>"><?=base_url()?></a></li>
              <li>Lihat informasi status pengumuman kelulusan yang aktif</li>
              <li>Masukkan NISN / No.BP</li>
              <li>Klik Tombol Lihat Hasil</li>
              <li>Selesai</li>
             </ul>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

   
    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h3>Frequently Asked Questions</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </header>
        <ul class="faq-list">

<li>
  <div data-bs-toggle="collapse" class="question collapsed" href="#faq1" aria-expanded="false">Bagaimana Cara Cek Kelulusan Online ?<i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
  <div id="faq1" class="collapse" data-bs-parent=".faq-list" style="">
    <p>
      Silahkan akses situs <a href="<?=base_url()?>"><?=base_url()?></a> lalu klik tombol Cek Sekarang, Masukkan Nomor Peserta Ujian Kamu, lalu klik cari 
    </p>
  </div>
</li>

<li>
  <div data-bs-toggle="collapse" href="#faq2" class="question collapsed" aria-expanded="false">Apa yang harus dilakukan apabila status Kelulusan <b>Pending</b> ? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
  <div id="faq2" class="collapse" data-bs-parent=".faq-list" style="">
    <p>
      Hubungi pihak Madrasah / masing-masing wali kelas kamu ..
    </p>
  </div>
</li>

<li>
  <div data-bs-toggle="collapse" href="#faq3" class="question collapsed" aria-expanded="false">Bagaimana Cara Mendapatkan SKL ? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
  <div id="faq3" class="collapse" data-bs-parent=".faq-list" style="">
    <p>
     <!-- Jika status Kelulusan kamu dinyatakan LULUS, maka SKL lansung bisa diunduh/download pada saat melihat kelulusan, tanpa harus datang ke sekolah, caranya  Klik tombol <b>Download SK</b> dibawah informasi kelulusan kamu .. -->
    </p>
  </div>
</li>







</ul>

      </div>
    </section>
    
    <!-- End F.A.Q Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="section-bg">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>UPTIK - MTIC</strong>. All Rights Reserved
      </div>
      <div class="credits">
        Developed by <a href="#">Abdul Yamin</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  
  <div class="viewmodal"></div>
  
  <!-- Vendor JS Files -->
  <script src="<?=base_url()?>public/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="<?=base_url()?>public/assets/vendor/aos/aos.js"></script>
  <script src="<?=base_url()?>public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url()?>public/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?=base_url()?>public/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?=base_url()?>public/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?=base_url()?>public/assets/js/jquery.js"></script>
  <script src="<?=base_url()?>public/assets/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
  <!-- Template Main JS File -->
  <script src="<?=base_url()?>public/assets/js/main.js"></script>
  <script>
      // $(document).ready(function () {
      //   $('#result_pengumuman').modal('show');
      // });



    $('#form-info').submit(function (e) { 
      e.preventDefault();
      $.ajax({
        type: "post",
        url: "<?=base_url('/')?>",
        data: $(this).serialize(),
        dataType: "json",
            beforeSend: function() {
            $('#btn-cek').prop('disabled', true);
            $('#btn-cek').html(
            `<div class="spinner-border text-light" role="status"><span class="visually-hidden">Loading...</span></div>`
            );
            },
            complete: function() {
            $('#btn-cek').prop('disabled', false);
            $('#btn-cek').html(`<i class="bi bi-search"></i> Lihat Hasil`);
            },
        success: function (response) {
          console.log(response)
          if (response.err) {
            if (response.err.nisn) {
                Swal.fire({
                icon: 'warning',
                title: 'Warning',
                text: response.err.nisn
                // showConfirmButton: false,
                // timer: 1500
                })
                $('#result').html('')
                            
            }
          }

          if (response.view) {
      
            
              
                  let timerInterval
                  Swal.fire({
                  title: 'Please Wait..',
                  html: 'I will close in <b></b> milliseconds.',
                  timer: 2000,
                  timerProgressBar: true,
                  didOpen: () => {
                  Swal.showLoading()
                  const b = Swal.getHtmlContainer().querySelector('b')
                  timerInterval = setInterval(() => {
                  b.textContent = Swal.getTimerLeft()
                  }, 100)
                  },
                  willClose: () => {
                  clearInterval(timerInterval)
                  }
                  }).then((result) => {
                  /* Read more about handling dismissals below */
                  if (result.dismiss === Swal.DismissReason.timer) {
                    Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: 'NISN / No.BP ditemukan. Berikut hasilnya',
                    showConfirmButton: false,
                    timer: 1500
                    })

                    $('.viewmodal').html(response.view).show();
            $('#result_pengumuman').modal('show');



                   
                    

                  }
                  })
              
                            
            }


          
        }
      });
      
    });
  </script>

</body>

</html>