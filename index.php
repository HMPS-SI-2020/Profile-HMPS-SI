<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>HMPS Sistem Informasi</title>
  <link rel="icon" href="img/logo_si.png">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/logo_si_qG3_icon.ico" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700"
    rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: Rapid
    Theme URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
    ======================================================= -->
</head>
<?php
  
  if(isset($_GET['pesan'])){
      if($_GET['pesan'] == "sukses"){
        echo '<script type="text/javascript"> alert("Success!!!"); </script>'; 
      }
    }
  else if(isset($_GET['pesan'])){
      if($_GET['pesan'] == "gagalinput"){
      echo '<script type="text/javascript"> alert("Failed!!!"); </script>'; 

      }
    }



?>


<body>
  <!--==========================
  Header
  ============================-->
  <header id="header">

    <div id="topbar">
      <div class="container">
        <div class="social-links">
        </div>
      </div>
    </div>

    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><a href="#intro" class="scrollto"><img src="img/logo_si.png"
              style="padding-right:20px;margin-bottom:10px;"><span>HMPS SI</span></a></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo SI.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="main-nav float-right d-none d-lg-block" id="try">
        <ul>
          <li class="active"><a href="#head">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Programs</a></li>
          <li><a href="#portfolio">Gallery</a></li>
          <li><a href="#team">Team</a></li>
          <li><a data-toggle="modal" data-target="#myModal" href="#" >Form</a></li>
        </ul>
      </nav><!-- .main-nav -->

    </div>
  </header><!-- #header -->





  <!--==========================
    Intro Section
    ============================-->
  <section id="head" class="clearfix">

    <div class="carousel slide" data-ride="carousel" id="carouselExampleIndicators">

      <div class="carousel-inner">
        <div class="carousel-item active"><img alt="First slide" class="d-block w-100" src="img/slider1.jpg"></div>

      </div>

    </div>
  </section><!-- #intro -->

  <main id="main">

    <!--==========================
      About Us Section
      ============================-->
    <section id="about">

      <div class="container">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <div class="carousel slide" data-ride="carousel" id="carouselLecturer">
              <ol class="carousel-indicators">
                <li class="active" data-slide-to="0" data-target="#carouselLecturer"></li>
                <li data-slide-to="1" data-target="#carouselLecturer"></li>
                <li data-slide-to="2" data-target="#carouselLecturer"></li>
                <li data-slide-to="3" data-target="#carouselLecturer"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/dosen/tonywibowo.png" alt="">
                  <div class="lecturer-info">
                    <div class="lecturer-info-content">
                      <h4>Tony Wibowo, S.Kom.,MMSI</h4>
                      <span>Adviser I</span>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="img/dosen/deli.png" alt="">
                  <div class="lecturer-info">
                    <div class="lecturer-info-content">
                      <h4>Deli, S.Kom., MMSI</h4>
                      <span>Adviser II</span>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="img/dosen/hendi.png" alt="">
                  <div class="lecturer-info">
                    <div class="lecturer-info-content">
                      <h4>Dr.Hendi Sama, S.Kom., MM. e ‐ Bussiness</h4>
                      <span>Person In Charge</span>
                    </div>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="img/dosen/herman.png" alt="">
                  <div class="lecturer-info">
                    <div class="lecturer-info-content">
                      <h4>Herman, S.Kom</h4>
                      <span>Mentor</span>
                    </div>
                  </div>
                </div>
              </div>
              <a class="carousel-control-prev" data-slide="prev" href="#carouselLecturer" role="button"><span
                  aria-hidden="true" class="carousel-control-prev-icon"></span> <span
                  class="sr-only">Previous</span></a>
              <a class="carousel-control-next" data-slide="next" href="#carouselLecturer" role="button"><span
                  aria-hidden="true" class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
            </div>
          </div>

          <div class="col-lg-7 col-md-6">
            <div class="about-content">
              <h2>About HMPS SI</h2>

              <p class="py-0 my-3">Himpunan Mahasiswa Program studi Universitas Internasional Batam (HMPS SI UIB) merupakan Organisasi
                Kemahasiswaan yang dibentuk bersamaan dengan dibentuknya
                Program Studi Sistem Informadsi . HMPS SI berdiri di bawah Fakultas Ilmu Komputer Program studi Sistem
                Informasi yang dibimbing oleh Bapak/Ibu Dosen SI dan memiliki
                3 divisi antara lain:</p>

              <ul>
                <li class="py-0"><i class="ion-android-checkmark-circle"></i> Divisi Pemrograman</li>
                    <li class="px-5 py-0"><i class="ion-arrow-right-c"></i> Website Development</li>
                    <li class="px-5 py-0"><i class="ion-arrow-right-c"></i> Mobile & Desktop Development</li>
                <li class="pb-0"><i class="ion-android-checkmark-circle"></i> Divisi Multimedia</li>
                    <li class="px-5 py-0"><i class="ion-arrow-right-c"></i> Content Creator</li>
                    <li class="px-5 py-0"><i class="ion-arrow-right-c"></i> Photographer & Videographer</li>
                <li class="pb-0"><i class="ion-android-checkmark-circle"></i> Divisi Publikasi dan Komunikasi</li>
                    <li class="px-5 py-0"><i class="ion-arrow-right-c"></i> Social & Public Relation</li>
                    <li class="px-5 py-0"><i class="ion-arrow-right-c"></i> Social Media</li>
                    <li class="px-5 py-0"><i class="ion-arrow-right-c"></i> Event & Education</li>
                <!-- <li><i class="ion-android-checkmark-circle"></i> Divisi Informasi dan Komunikasi</li> -->
                <!-- <li><i class="ion-android-checkmark-circle"></i> Divisi Keanggotaan</li> -->
                <!-- <li><i class="ion-android-checkmark-circle"></i> Divisi E-Sport</li> -->
              </ul>

              <p>Sampai Sekarang (Tahun Ajaran 2020/2021) HMPS SI telah memiliki anggota sebanyak 31 orang, yang
                masing-masing memiliki peran tersendiri baik dalam struktur
                organisasi maupun masing-masing divisi. Setiap mahasiswa Prodi SI memiliki hak untuk bergabung dalam
                HMPS SI. Dengan bergabung ke HMPS SI para mahasiswa
                dapat mengasah kemampuan bersosial dan komunikasi baik dengan sesama anggota maupun mahasiswa lainnya
                bahkan dosen. selain itu kelebihan yang dimiliki oleh
                setiap anggota akan diasah menjelang berjalannya kegiatan Organisasi khususnya kemampuan dalam Bidang
                Ilmu Komputer. Dengan begini mahasiswa dapat menumbuhkan
                nilai/value, baik yang sudah ada maupun yang belum ada dan pada waktu yang sama nilai tersebut juga akan
                menjadi kontribusi dalam mengembangkan organisasi.</p>
            </div>
          </div>
        </div>
      </div>

    </section><!-- #about -->

    <!--==========================
      Clients Section
      ============================-->
    <section id="testimonials">
      <div class="container">

        <header class="section-header">
          <h3>Quotes</h3>
        </header>

        <div class="row justify-content-center">
          <div class="col-lg-8">

            <div class="owl-carousel testimonials-carousel wow fadeInUp">

              <div class="testimonial-item">
                <img src="img/quotes/tony.png" class="testimonial-img" alt="">
                <h3>Tony Wibowo, S.Kom.,MMSI</h3>
                <h4>Adviser I</h4>
                <p>
                  "Work for me and i will work for you,
                  Fight for me and i will fight for you."
                </p>
              </div>

              <div class="testimonial-item">
                <img src="img/quotes/deli.png" class="testimonial-img" alt="">
                <h3>Deli, S.Kom., MMSI</h3>
                <h4>Adviser II</h4>
                <p>
                  "All real education is the architecture of the soul."
                </p>
              </div>

              <div class="testimonial-item">
                <img src="img/quotes/hendi.png" class="testimonial-img" alt="">
                <h3>Dr.Hendi Sama, S.Kom., MM. e ‐ Bussiness</h3>
                <h4>Person In Charge  </h4>
                <p>
                  "Know others than comes wisdom, know yourself than comes enlightenment."
                </p>
              </div>

              <div class="testimonial-item">
                <img src="img/team/herman.jpg" class="testimonial-img" alt="">
                <h3>Herman, S.Kom</h3>
                <h4>Mentor</h4>
                <p>
                  "If you have different mindset, you will have a different outcome."
                </p>
              </div>

            </div>

          </div>
        </div>


      </div>
    </section><!-- #testimonials -->


    <!--==========================
      Services Section
      ============================-->
    <section id="services" class="section-bg">
      <div class="container">

        <header class="section-header">
          <h3>Programs</h3>

        </header>

        <div class="row">
          <!-- the old -->
          <!-- <div class="col-md-12 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <img src="img/logo/mulmed.png" style="height:50px;margin-bottom:20px;">
              <h4 class="title"><a href="">Multimedia</a></h4>
              <p class="description">Mempelajari dan meng-explore mengenai teknologi digital dan multimedia sebagai
                media komunikasi.
                Mengolah berbagai media seperti foto, video, animasi, teks, audio, grafik, design visual dan media
                lainnya secara kreatif dan inovatif dengan fungsi memberi informasi, menyampaikan pesan, menghibur dan
                mengajak.</p>
            </div>
          </div>
          <div class="col-md-12 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box">
              <img src="img/logo/program.png" style="height:50px;margin-bottom:20px;">
              <h4 class="title"><a href="">Programming</a></h4>
              <p class="description">Melatih mahasiswa/i Sistem Informasi untuk mampu menganalisa, membangun
                (developing), menguji (testing), memperbaiki (debug) dan mempertahankan
                kode dari suatu program. Mengenalkan berbagai macam bahasa pemrograman yang banyak digunakan dikalangan
                developer. Melatih skill dalam algoritma, logika, problem solving dan
                bahasa pemrograman dengan capaian dapat membuat sebuah program sesuai yang dibutuhkan, baik program
                desktop, mobile maupun web.</p>
            </div>
          </div>

          <div class="col-md-12 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="box">
              <img src="img/logo/jaringan.png" style="height:50px;margin-bottom:20px;">
              <h4 class="title"><a href="">Networking</a></h4>
              <p class="description"> Memfokuskan mahasiswa/i kepada penerapan dan penggunaan jaringan, baik antar
                komputer maupun device lainnya dengan tujuan terhubung untuk saling
                sharing atau pengiriman data dan resources lainnya. Memantapkan skill dalam penggunaan perangkat keras
                (hardware) maupun perangkat lunak (software) untuk membangun sebuah
                jaringan</p>
            </div>
          </div> -->
          <!-- the old -->

          <!-- the new -->
          <div class="col-lg-12 wow bounceInUp" data-wow-duration="1.4s">
            <div class="box row">
              <div class="col-md-2">
                <img src="img/logo/mulmed.png" style="height:50px;margin-bottom:20px;">
                <h4 class="title"><a href="">Multimedia</a></h4>
              </div>
              <div class="col-md-10">
                <p class="description">Mempelajari dan meng-explore mengenai teknologi digital dan multimedia sebagai
                  media komunikasi.
                  Mengolah berbagai media seperti foto, video, animasi, teks, audio, grafik, design visual dan media
                  lainnya secara kreatif dan inovatif dengan fungsi memberi informasi, menyampaikan pesan, menghibur dan
                  mengajak.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-12 wow bounceInUp" data-wow-duration="1.4s">
              <div class="box row">
                
                <div class="col-md-10">
                  <p class="description">Melatih mahasiswa/i Sistem Informasi untuk mampu menganalisa, membangun
                      (developing), menguji (testing), memperbaiki (debug) dan mempertahankan
                      kode dari suatu program. Mengenalkan berbagai macam bahasa pemrograman yang banyak digunakan dikalangan
                      developer. Melatih skill dalam algoritma, logika, problem solving dan
                      bahasa pemrograman dengan capaian dapat membuat sebuah program sesuai yang dibutuhkan, baik program
                      desktop, mobile maupun web.</p>
                </div>
                <div class="col-md-2">
                    <img src="img/logo/program.png" style="height:50px;margin-bottom:20px;">
                    <h4 class="title"><a href="">Programing</a></h4>
                  </div>
              </div>
            </div>

            <!-- <div class="col-lg-12 wow bounceInUp" data-wow-duration="1.4s">
                <div class="box row">
                  <div class="col-md-2">
                    <img src="img/logo/jaringan.png" style="height:50px;margin-bottom:20px;">
                    <h4 class="title"><a href="">Networking</a></h4>
                  </div>
                  <div class="col-md-10">
                    <p class="description">Memfokuskan mahasiswa/i kepada penerapan dan penggunaan jaringan, baik antar
                        komputer maupun device lainnya dengan tujuan terhubung untuk saling
                        sharing atau pengiriman data dan resources lainnya. Memantapkan skill dalam penggunaan perangkat keras
                        (hardware) maupun perangkat lunak (software) untuk membangun sebuah
                        jaringan.</p>
                  </div>
                </div>
              </div> -->
          <!-- the new -->
        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Portfolio Section
      ============================-->
    <section id="portfolio" class="">
      <div class="container">

        <header class="section-header">
          <h3 class="section-title">Gallery</h3>
        </header>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-makrab">Makrab 2018</li>
              <li data-filter=".filter-pengenalanprodi">Pengenalan Prodi 2019</li>
              <li data-filter=".filter-battle">E-battle Ground</li>
              <li data-filter=".filter-mentoring">Mentoring 2018</li>
              <li data-filter=".filter-expo">Expo 2019</li>
              <li data-filter=".filter-ormawa">Bazar Ormawa 2019</li>
              <!-- <li data-filter=".filter-agilr">AGILR SCRUM FOUNDATION</li> -->
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <div class="col-lg-4 col-md-6 portfolio-item filter-makrab">
            <div class="portfolio-wrap">
              <img src="img/portfolio/Makrab SI/1.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a>Makrab 2019</a></h4>
                <p>Games</p>
                <div>
                  <a href="img/portfolio/Makrab SI/1.JPG" data-lightbox="portfolio" data-title="Makrab 2019"
                    class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-pengenalanprodi">
            <div class="portfolio-wrap">
              <img src="img/portfolio/pengenalanprodi/2.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a>Pengenalan Prodi 2019</a></h4>
                <p>Pengenalan Prodi</p>
                <div>
                  <a href="img/portfolio/pengenalanprodi/2.JPG" data-lightbox="portfolio"
                    data-title="Pengenalan Prodi 2019" class="link-preview" title="Preview"><i
                      class="ion ion-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-agilr">
            <div class="portfolio-wrap">
              <img src="img/portfolio/agilr/208750.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a>AGILR SCRUM FOUNDATION</a></h4>
                <p>AGILR SCRUM FOUNDATION</p>
                <div>
                  <a href="img/portfolio/agilr/208750.JPG" data-lightbox="portfolio" data-title="AGILR SCRUM FOUNDATION"
                    class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>

                </div>
              </div>
            </div>
          </div> -->

          <div class="col-lg-4 col-md-6 portfolio-item filter-makrab">
            <div class="portfolio-wrap">
              <img src="img/portfolio/Makrab SI/2.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a>Makrab 2019</a></h4>
                <p>Persiapan Pemaparan Project</p>
                <div>
                  <a href="img/portfolio/Makrab SI/2.JPG" data-lightbox="portfolio"
                    data-title="Persiapan Pemaparan Project" class="link-preview" title="Preview"><i
                      class="ion ion-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-battle">
            <div class="portfolio-wrap">
              <img src="img/portfolio/EBattleGround/2.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a>E-Battle Ground 2018</a></h4>
                <p>E-Battle Ground 2018</p>
                <div>
                  <a href="img/portfolio/EBattleGround/2.JPG" data-lightbox="portfolio"
                    data-title="E-Battle Ground 2018" class="link-preview" title="Preview"><i
                      class="ion ion-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-pengenalanprodi">
            <div class="portfolio-wrap">
              <img src="img/portfolio/pengenalanprodi/3.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a>Pengenalan Prodi 2019</a></h4>
                <p>Pengenalan Prodi</p>
                <div>
                  <a href="img/portfolio/pengenalanprodi/3.JPG" data-lightbox="portfolio"
                    data-title="Pengenalan Prodi 2019" class="link-preview" title="Preview"><i
                      class="ion ion-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-makrab">
            <div class="portfolio-wrap">
              <img src="img/portfolio/Makrab SI/3.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a>Makrab 2019</a></h4>
                <p>Games</p>
                <div>
                  <a href="img/portfolio/Makrab SI/3.JPG" data-lightbox="portfolio" data-title="Makrab 2019"
                    class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-pengenalanprodi">
            <div class="portfolio-wrap">
              <img src="img/portfolio/pengenalanprodi/4.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a>Pengenalan Prodi 2019</a></h4>
                <p>Pengenalan Prodi</p>
                <div>
                  <a href="img/portfolio/pengenalanprodi/4.JPG" data-lightbox="portfolio"
                    data-title="Pengenalan Prodi 2019" class="link-preview" title="Preview"><i
                      class="ion ion-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-mentoring">
            <div class="portfolio-wrap">
              <img src="img/portfolio/mentoring/1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a>Mentoring</a></h4>
                <p>Toonboom Mentoring</p>
                <div>
                  <a href="img/portfolio/mentoring/1.jpg" data-lightbox="portfolio" data-title="Mentoring"
                    class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-battle">
            <div class="portfolio-wrap">
              <img src="img/portfolio/EBattleGround/3.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a>E-Battle Ground 2018</a></h4>
                <p>E-Battle Ground 2018</p>
                <div>
                  <a href="img/portfolio/EBattleGround/3.JPG" data-lightbox="portfolio"
                    data-title="E-Battle Ground 2018" class="link-preview" title="Preview"><i
                      class="ion ion-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-makrab">
            <div class="portfolio-wrap">
              <img src="img/portfolio/Makrab SI/4.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a>Makrab 2019</a></h4>
                <p>Persiapan Games</p>
                <div>
                  <a href="img/portfolio/Makrab SI/4.JPG" data-lightbox="portfolio" data-title="Persiapan Games"
                    class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-pengenalanprodi">
            <div class="portfolio-wrap">
              <img src="img/portfolio/pengenalanprodi/5.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a>Pengenalan Prodi 2019</a></h4>
                <p>Pengenalan Prodi</p>
                <div>
                  <a href="img/portfolio/pengenalanprodi/5.JPG" data-lightbox="portfolio"
                    data-title="Pengenalan Prodi 2019" class="link-preview" title="Preview"><i
                      class="ion ion-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-mentoring">
            <div class="portfolio-wrap">
              <img src="img/portfolio/mentoring/2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a>Mentoring</a></h4>
                <p>Toonboom Mentoring</p>
                <div>
                  <a href="img/portfolio/mentoring/2.JPG" data-lightbox="portfolio" data-title="Mentoring"
                    class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-makrab">
            <div class="portfolio-wrap">
              <img src="img/portfolio/Makrab SI/5.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a>Makrab 2019</a></h4>
                <p>Games</p>
                <div>
                  <a href="img/portfolio/Makrab SI/5.JPG" data-lightbox="portfolio" data-title="Makrab 2019"
                    class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-battle">
            <div class="portfolio-wrap">
              <img src="img/portfolio/EBattleGround/6.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a>E-Battle Ground 2018</a></h4>
                <p>E-Battle Ground 2018</p>
                <div>
                  <a href="img/portfolio/EBattleGround/6.JPG" data-lightbox="portfolio"
                    data-title="E-Battle Ground 2018" class="link-preview" title="Preview"><i
                      class="ion ion-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-pengenalanprodi">
            <div class="portfolio-wrap">
              <img src="img/portfolio/pengenalanprodi/6.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a>Pengenalan Prodi 2019</a></h4>
                <p>Pengenalan Prodi 2019</p>
                <div>
                  <a href="img/portfolio/pengenalanprodi/6.JPG" data-lightbox="portfolio"
                    data-title="Pengenalan Prodi 2019" class="link-preview" title="Preview"><i
                      class="ion ion-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-mentoring">
            <div class="portfolio-wrap">
              <img src="img/portfolio/mentoring/3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a>Mentoring</a></h4>
                <p>Toonboom Mentoring</p>
                <div>
                  <a href="img/portfolio/mentoring/3.jpg" data-lightbox="portfolio" data-title="Mentoring"
                    class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-makrab">
            <div class="portfolio-wrap">
              <img src="img/portfolio/Makrab SI/6.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a>Makrab 2018</a></h4>
                <p>Makrab 2018</p>
                <div>
                  <a href="img/portfolio/Makrab SI/6.JPG" data-lightbox="portfolio" data-title="Makrab 2018"
                    class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-makrab">
            <div class="portfolio-wrap">
              <img src="img/portfolio/Makrab SI/7.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a>Makrab 2018</a></h4>
                <p>Makrab 2018</p>
                <div>
                  <a href="img/portfolio/Makrab SI/7.JPG" data-lightbox="portfolio" data-title="Makrab 2018"
                    class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>

                </div>
              </div>
            </div>
          </div>



          <div class="col-lg-4 col-md-6 portfolio-item filter-pengenalanprodi">
            <div class="portfolio-wrap">
              <img src="img/portfolio/pengenalanprodi/1.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a>Pengenalan Prodi 2019</a></h4>
                <p>Pengenalan Prodi</p>
                <div>
                  <a href="img/portfolio/pengenalanprodi/1.JPG" data-lightbox="portfolio"
                    data-title="Pengenalan Prodi 2019" class="link-preview" title="Preview"><i
                      class="ion ion-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-battle">
            <div class="portfolio-wrap">
              <img src="img/portfolio/EBattleGround/7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a>E-Battle Ground 2018</a></h4>
                <p>E-Battle Ground 2018</p>
                <div>
                  <a href="img/portfolio/EBattleGround/7.jpg" data-lightbox="portfolio"
                    data-title="E-Battle Ground 2018" class="link-preview" title="Preview"><i
                      class="ion ion-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-4 col-md-6 portfolio-item filter-agilr">
            <div class="portfolio-wrap">
              <img src="img/portfolio/agilr/208747.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a>AGILR SCRUM FOUNDATION</a></h4>
                <p>AGILR SCRUM FOUNDATION</p>
                <div>
                  <a href="img/portfolio/agilr/208747.JPG" data-lightbox="portfolio" data-title="AGILR SCRUM FOUNDATION"
                    class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>

                </div>
              </div>
            </div>
          </div> -->

          <div class="col-lg-4 col-md-6 portfolio-item filter-expo">
            <div class="portfolio-wrap">
              <img src="img/portfolio/expo/2.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a>Expo 2019</a></h4>
                <p>Expo 2019</p>
                <div>
                  <a href="img/portfolio/expo/2.JPG" data-lightbox="portfolio"
                    data-title="Expo 2019" class="link-preview" title="Preview"><i
                      class="ion ion-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          

          <div class="col-lg-4 col-md-6 portfolio-item filter-expo">
            <div class="portfolio-wrap">
              <img src="img/portfolio/expo/1.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a>Expo 2019</a></h4>
                <p>Expo 2019</p>
                <div>
                  <a href="img/portfolio/expo/1.JPG" data-lightbox="portfolio"
                    data-title="Expo 2019" class="link-preview" title="Preview"><i
                      class="ion ion-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          
          <div class="col-lg-4 col-md-6 portfolio-item filter-battle">
            <div class="portfolio-wrap">
              <img src="img/portfolio/EBattleGround/1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a>E-Battle Ground 2018</a></h4>
                <p>E-Battle Ground 2018</p>
                <div>
                  <a href="img/portfolio/EBattleGround/1.jpg" data-lightbox="portfolio"
                  data-title="E-Battle Ground 2018" class="link-preview" title="Preview"><i
                  class="ion ion-eye"></i></a>
                  
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-ormawa">
            <div class="portfolio-wrap">
              <img src="img/portfolio/bazar_ormawa/2.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a>Bazar Ormawa 2019</a></h4>
                <p>Bazar Ormawa 2019</p>
                <div>
                  <a href="img/portfolio/bazar_ormawa/2.JPG" data-lightbox="portfolio"
                    data-title="Bazar Ormawa 2019" class="link-preview" title="Preview"><i
                      class="ion ion-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-pengenalanprodi">
            <div class="portfolio-wrap">
              <img src="img/portfolio/pengenalanprodi/7.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a>Pengenalan Prodi 2019</a></h4>
                <p>Pengenalan Prodi 2019</p>
                <div>
                  <a href="img/portfolio/pengenalanprodi/7.JPG" data-lightbox="portfolio"
                    data-title="Pengenalan Prodi 2019" class="link-preview" title="Preview"><i
                      class="ion ion-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-ormawa">
            <div class="portfolio-wrap">
              <img src="img/portfolio/bazar_ormawa/1.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a>Bazar Ormawa 2019</a></h4>
                <p>Bazar Ormawa 2019</p>
                <div>
                  <a href="img/portfolio/bazar_ormawa/1.JPG" data-lightbox="portfolio"
                    data-title="Bazar Ormawa 2019" class="link-preview" title="Preview"><i
                      class="ion ion-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-expo">
            <div class="portfolio-wrap">
              <img src="img/portfolio/expo/3.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a>Expo 2019</a></h4>
                <p>Expo 2019</p>
                <div>
                  <a href="img/portfolio/expo/3.JPG" data-lightbox="portfolio"
                    data-title="Expo 2019" class="link-preview" title="Preview"><i
                      class="ion ion-eye"></i></a>

                </div>
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-ormawa">
            <div class="portfolio-wrap">
              <img src="img/portfolio/bazar_ormawa/3.JPG" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a>Bazar Ormawa 2019</a></h4>
                <p>Bazar Ormawa 2019</p>
                <div>
                  <a href="img/portfolio/bazar_ormawa/3.JPG" data-lightbox="portfolio"
                    data-title="Bazar Ormawa 2019" class="link-preview" title="Preview"><i
                      class="ion ion-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-expo">
            <div class="portfolio-wrap">
              <img src="img/portfolio/expo/4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4><a>Expo 2019</a></h4>
                <p>Expo 2019</p>
                <div>
                  <a href="img/portfolio/expo/4.jpg" data-lightbox="portfolio"
                    data-title="Expo 2019" class="link-preview" title="Preview"><i
                      class="ion ion-eye"></i></a>

                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #portfolio -->

    <!-- ==========================
      Team Section
      ============================-->
    <section id="team" class="section-bg">
      <div class="container">
        <div class="section-header">
          <h3>Team</h3>
        </div>

        <center>
          <h4>Core Division</h4>
        </center>
        <div class="row">


          <div class="col-lg-3 offset-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team/Afandi.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Afandi Wu</h4>
                  <span>Leader</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team/Andry.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Andry</h4>
                  <span>Co. Leader</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 offset-lg-3 col-md-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="member">
              <img src="img/team/Towi.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Tony Wirawan</h4>
                  <span>General Counsel I</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team/Licen.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Li Cen</h4>
                  <span>General Counsel II</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div style="width:12%;">
          </div>

          <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="member">
              <img src="img/team/Julia.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Julia Veronica</h4>
                  <span>First Secretary</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team/Celine.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Celine Te</h4>
                  <span>Second Secretary</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team/Wisely.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Wisely Liang</h4>
                  <span>Treasurer</span>
                </div>
              </div>
            </div>
          </div>

          <!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team/gilang.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Gilang Ananda</h4>
                  <span>Second Treasurer</span>
                </div>
              </div>
            </div>
          </div> -->
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          </div>
          </div>

        <center>
          <h4  class="mt-5">Multimedia Division</h4>
        </center>
        <div class="row">


          <div class="col-lg-3 offset-lg-3 col-md-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="member">
              <img src="img/team/Hendy.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Hendy</h4>
                  <span>Head of Multimedia Division</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team/rino.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Rino</h4>
                  <span>Mentor of Multimedia Division</span>
                </div>
              </div>
            </div>
          </div>


        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="member">
              <img src="img/team/Jimmy.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Jimmy Prawira Samudra</h4>
                  <span>Content Creator</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team/Cn.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Cindy Ariadi</h4>
                  <span>Content Creator</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team/Gio.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Giovanno Estevan</h4>
                  <span>Video Editor</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team/Veri.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Veri Hartanto</h4>
                  <span>Photo Editor</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- <div class="row">

          <div style="width:12%;">
          </div>

          <div class="col-lg-3  col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team/edy.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Edy</h4>
                  <span>Member</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team/dian.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Dian Putri Manelsi</h4>
                  <span>Member</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team/rk.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Raudlatul Khairiah A.</h4>
                  <span>Member</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          </div>
        </div> -->

        <!-- <center>
          <h4>Networking Division</h4>
        </center>
        <div class="row">


          <div class="col-lg-3 offset-lg-3 col-md-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="member">
              <img src="img/team/hermanto.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Hermanto</h4>
                  <span>Head of Networking Division</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team/arif.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Arif Kurniadi</h4>
                  <span>Mentor of Networking Division</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="member">
              <img src="img/team/agus.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Agusyanto</h4>
                  <span>Member</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team/bill.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Bill Delvin</h4>
                  <span>Member</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team/kelvin.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Kelvin</h4>
                  <span>Member</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team/tony.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Tony Wirawan</h4>
                  <span>Member</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div style="width:38%;">
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team/hendy.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Hendy</h4>
                  <span>Member</span>
                </div>
              </div>
            </div>
          </div>
        </div> -->

        <center>
          <h4 class="mt-5">Programming Division</h4>
        </center>
        <div class="row">


          <div class="col-lg-3 offset-lg-3 col-md-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="member">
              <img src="img/team/Steven.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Steven Salim</h4>
                  <span>Head of Programming Division</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team/Romi.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>M.Romi Muhtarom</h4>
                  <span>Mentor of Programming Division</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          </div>
        </div>

        <div class="row">
          <div style="width:12%;">
          </div>

          <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="member">
              <img src="img/team/Indra.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Indra Saputra</h4>
                  <span>Web Programmer</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team/Kelvin.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Kelvin</h4>
                  <span>Web Programmer</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team/Eriec.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Eriec Tanijaya</h4>
                  <span>Mobile & Desktop App Programmer</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          </div>
          </div>

          <!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team/gilang.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Gilang Ananda</h4>
                  <span>Member</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="member">
              <img src="img/team/melna.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Melna Caintan</h4>
                  <span>Member</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team/licen.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Licen</h4>
                  <span>Member</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team/ryo.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Ryo Kusnadi</h4>
                  <span>Member</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team/romi.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>M.Romi Muhtarom</h4>
                  <span>Member</span>
                </div>
              </div>
            </div>
          </div>
        </div> -->

        <center>
          <h4 class="mt-5">Publication & Communication Division</h4>
        </center>
        <div class="row">

        <div style="width:12%;">
          </div>

          <div class="col-lg-3 offset-lg-3 col-md-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="member">
              <img src="img/team/Meili.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Meiliverani Erline</h4>
                  <span>Head and Mentor of Public. & Comm. Division</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          </div>
        </div>

        <div class="row">

        <div style="width:12%;">
          </div>
        
          <div class="col-lg-3  col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team/gilang.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Gilang Ananda</h4>
                  <span>Head of Social & Public Relation</span>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="member">
              <img src="img/team/frenky.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Frenky</h4>
                  <span>Head of Social Media</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="member">
              <img src="img/team/Melvy.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Melvy Devalia</h4>
                  <span>Head of Event & Education</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          </div>

        </div>

        
        
        <div class="row">
          
        <div style="width:12%;">
          </div>
          
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team/Nursudiono.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Nursudiono</h4>
                  <span>Instagram & Youtube</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team/David.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>David</h4>
                  <span>Instagram & Youtube</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team/Metta.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Mettatama Gandha <br> Puspita</h4>
                  <span>Article Writer</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          </div>

        </div>

        <div class="row">
         

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team/Audrey.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Audrey Saudjhana</h4>
                  <span>Member</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team/hermanto.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Hermanto</h4>
                  <span>Member</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team/Putra.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Putra Pamungkas</h4>
                  <span>Member</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team/Suryanto.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Suryanto</h4>
                  <span>Member</span>
                </div>
              </div>
            </div>
          </div>

        </div>

        

        <!-- <center>
          <h4>Membership Division</h4>
        </center>
        <div class="row">


          <div class="col-lg-3 offset-lg-3 col-md-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="member">
              <img src="img/team/melvy.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Melvy Devalia</h4>
                  <span>Head of Membership Division</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team/rizki.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Rizki Dwi Nugrah</h4>
                  <span>Mentor of Membership Division</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-duration="1.4s">
            <div class="member">
              <img src="img/team/jhon.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Jhon Carlie</h4>
                  <span>Member</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team/ricky.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Ricky Verniando</h4>
                  <span>Member</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team/melvin.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Melvin Nicholas A.</h4>
                  <span>Member</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="member">
              <img src="img/team/rosita.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Rosita Tandiono</h4>
                  <span>Member</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">


          <div class="col-lg-3 offset-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="member">
              <img src="img/team/indra.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Indra</h4>
                  <span>Member</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="member">
              <img src="img/team/alton.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Alton Lunandi</h4>
                  <span>Member</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
          </div>
        </div>



        <center>
          <h4>E-Sports Division</h4>
        </center>
        <div class="row">


          <div class="row">
            <div class="col-lg-3 col-md-6 wow bounceInUp" data-wow-duration="1.4s">
              <div class="member">
                <img src="img/team/herman.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Herman</h4>
                    <span>Mentor</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
              <div class="member">
                <img src="img/team/hendy.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Hendy</h4>
                    <span>PIC Dota 2</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
              <div class="member">
                <img src="img/team/melvin.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Melvin Nicholas A.</h4>
                    <span>PIC Mobile Legend</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
              <div class="member">
                <img src="img/team/tonytan.jpg" class="img-fluid" alt="">
                <div class="member-info">
                  <div class="member-info-content">
                    <h4>Tony Tan</h4>
                    <span>Mentor</span>
                  </div>
                </div>
              </div>
            </div>

          </div> -->



    



   <!-- modal input -->
<div id="myModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content" style="width: 100%">
      <div class="modal-header">
        <h4 class="modal-title">Form Mahasiswa Sistem Informasi UIB</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body px-0 py-0">
      <iframe class="gform" src="https://docs.google.com/forms/d/e/1FAIpQLSedGYdOAkWkk135oSTF2I3pHQBCmW0CEIitURjkzKybuH1FZA/viewform?embedded=true" width="100%" height="2190" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
        <!-- <form action="form_act.php" method="post" enctype="multipart/form-data" >
        
     

        <div class="form-group">
            <label>Email</label>
            <input name="email" type="email" class="form-control" required placeholder="Your Email...">
        </div>

        <div class="form-group">
            <label>Register Number</label>
            <input name="noreg" type="text" class="form-control" required placeholder="Register Number... (ex: BM202020) ">
        </div>

          <div class="form-group">
            <label>Full Name</label>
            <input name="nama" type="text" class="form-control" required placeholder="Full Name ...">
          </div>

          <div class="form-group">
            <label>Place of Birth</label>
            <input name="tmpt" type="text" class="form-control" required placeholder="Place Of Birth ...">
          </div>

          <div class="form-group">
            <label>Date Of Birth</label>
            <input name="tgl" type="date" class="form-control" required>
          </div>

          <div class="form-group">
            <label>Hobby</label>
            <select name="hobby" type="text" class="form-control">
                
                  <option>Sports </option>
                  <option>Game</option>
                  <option>Eating</option>
                   <option>Walking</option>
                   <option>the rest of it</option>
                   <option>Others</option>
                
              </select>
              
          </div>
      
          <div class="form-group">
            <label>School Origin</label>
            <input name="asal" type="text" class="form-control" required placeholder="School Origin ...">
          </div>  

  
          <div class="form-group">
            <label>Phone Number</label>
            <input name="nohp" type="number" class="form-control" required placeholder="Phone Number ..." maxlength="13">
          </div>
          <div class="form-group">
            <label>ID LINE</label>
            <input name="id_line" type="text" class="form-control" required placeholder="ID LINE ...">
          </div>

          <div class="form-group">
            <label>Picture</label>
            <input name="gambar" type="file" accept="image/*" class="form-control" required>

          </div>
          

                                    
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
          <input type="submit" class="btn btn-primary" value="Submit">
        </div>
      </form> -->
    </div>
  </div>
</div>

</div>


    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- Uncomment below i you want to use a preloader -->
    <!-- <div id="preloader"></div> -->

    <!-- JavaScript Libraries -->
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/mobile-nav/mobile-nav.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <!-- Contact Form JavaScript File -->
    <script src="contactform/contactform.js"></script>

    <!-- Template Main Javascript File -->
    <script src="js/main.js"></script>

</body>

</html>