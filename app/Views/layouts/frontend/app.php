<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= setHeader()->title ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url('templates/frontend/DevFolio') ?>/assets/img/favicon.png" rel="icon">
  <link href="<?= base_url('templates/frontend/DevFolio') ?>/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url('templates/frontend/DevFolio') ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('templates/frontend/DevFolio') ?>/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url('templates/frontend/DevFolio') ?>/assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="<?= base_url('templates/frontend/DevFolio') ?>/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="<?= base_url('templates/frontend/DevFolio') ?>/assets/vendor/venobox/venobox.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url('templates/frontend/DevFolio') ?>/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: DevFolio - v2.4.0
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body id="page-top">

  <!-- ======= Header/ Navbar ======= -->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top"><?= setHeader()->navbar_title ?></a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#work">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- ======= Intro Section ======= -->
  <div id="home" class="intro route bg-image" style="background-image: url(<?= base_url('uploads/headers/'.setHeader()->image); ?>)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4"><?= setHeader()->up_text ?></h1>
          <p class="intro-subtitle"><span class="text-slider-items"><?= setHeader()->down_text ?></span><strong class="text-slider"></strong></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Intro Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-sm-6 col-md-5">
                      <div class="about-img">
                        <img style="height: 200px; object-fit: cover; object-position: center;" src="<?= base_url('uploads/about/'.setAbout()->image) ?>" class="img-fluid rounded b-shadow-a" alt="">
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-7">
                      <div class="about-info">
                        <p><span class="title-s">Name: </span> <span><?= setAbout()->name ?></span></p>
                        <p><span class="title-s">Profile: </span> <span><?= setAbout()->role ?></span></p>
                        <p><span class="title-s">Email: </span> <span><?= setAbout()->email ?></span></p>
                        <p><span class="title-s">Phone: </span> <span><?= setAbout()->phone ?></span></p>
                      </div>
                    </div>
                  </div>
                  
                  <div class="skill-mf">
                    <p class="title-s">Skill</p>
                    <ul class="list-group col-md-8">
                      <?php foreach(setSkill() as $skill) : ?>
                      <li class="list-group-item"><?= $skill->name ?></li>
                      <?php endforeach ?>
                    </ul>
                  </div>

                </div>
                <div class="col-md-6">
                  <div class="about-me pt-4 pt-md-0">
                    <div class="title-box-2">
                      <h5 class="title-left">
                        <?= setAbout()->title ?>
                      </h5>
                    </div>
                    <p class="lead">
                      <?= setAbout()->description ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="work" class="portfolio-mf sect-pt4 route">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="title-box text-center">
              <h3 class="title-a">
                Portfolio
              </h3>
              <p class="subtitle-a">
                My Web Application Project 
              </p>
              <div class="line-mf"></div>
            </div>
          </div>
        </div>
        <div class="row">
         <?php foreach(setPortfolio() as $portfolio) : ?>
          <div class="col-md-4">
            <div class="work-box">
              <a href="<?= base_url('uploads/portfolio/'.$portfolio->image) ?>" data-gall="portfolioGallery" class="venobox">
                <div class="work-img">
                  <img src="<?= base_url('uploads/portfolio/'.$portfolio->image) ?>" style="width: 100%; height: 270px; object-fit: cover; object-position: center;" alt="" class="img-fluid">
                </div>
              </a>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    <h2 class="w-title"><?= $portfolio->title ?></h2>
                    <div class="w-more">
                      <?= $portfolio->description ?>
                    </div>
                  </div>
                  <div class="col-sm-4">
                    <div class="w-like">
                      <a href="portfolio-details.html"> <span class="ion-ios-plus-outline"></span></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section class="paralax-mf footer-paralax bg-image sect-mt4 route">
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-6 mx-auto">
                    <div class="title-box-2 pt-4 pt-md-0">
                      <h5 class="title-left">
                        <?= setFooter()->title  ?>
                      </h5>
                    </div>
                    <div class="more-info">
                      <p class="lead">
                       <?= setFooter()->description ?>
                      </p>
                      <ul class="list-ico">
                        <li><span class="ion-ios-location"></span> <?= setFooter()->address ?></li>
                        <li><span class="ion-ios-telephone"></span> <?= setFooter()->phone ?? 'Footer Phone'  ?></li>
                        <li><span class="ion-email"></span> <?= setFooter()->email ?? 'Footer Email'  ?></li>
                      </ul>
                    </div>
                    <div class="socials">
                      <ul>
                        <li><a href="javascript:void(0)" onclick="window.open('https://web.facebook.com/profile.php?id=100050205264012')"><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="copyright-box">
            <p class="copyright">&copy; Copyright <strong><?= setFooter()->copyright ?></strong>. All Rights Reserved</p>
            <div class="credits">
              <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
            -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?= base_url('templates/frontend/DevFolio') ?>/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('templates/frontend/DevFolio') ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('templates/frontend/DevFolio') ?>/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?= base_url('templates/frontend/DevFolio') ?>/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url('templates/frontend/DevFolio') ?>/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?= base_url('templates/frontend/DevFolio') ?>/assets/vendor/counterup/jquery.counterup.min.js"></script>
  <script src="<?= base_url('templates/frontend/DevFolio') ?>/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?= base_url('templates/frontend/DevFolio') ?>/assets/vendor/typed.js/typed.min.js"></script>
  <script src="<?= base_url('templates/frontend/DevFolio') ?>/assets/vendor/venobox/venobox.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url('templates/frontend/DevFolio') ?>/assets/js/main.js"></script>

</body>

</html>