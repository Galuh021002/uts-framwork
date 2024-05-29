<!-- ======= Hero Section ======= -->
<div id="hero" class="hero route bg-image" style="background-image: url(assets/img/hero-bg.jpg); background-size: cover; background-position: center;">
    <div class="overlay-itro"></div>
    <div class="hero-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="hero-title mb-4">GALUH ADITIYA P</h1>
          <p class="hero-subtitle"><span class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer"></span></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div><!-- End Hero Section -->

<!-- ======= About Section ======= -->
<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

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
                    <img src="assets/img/testimonial-2.jpg" class="img-fluid rounded b-shadow-a" alt="">
                  </div>
                </div>
                <div class="col-sm-6 col-md-7">
                  <div class="about-info">
                    <p><span class="title-s">Name: </span> <span>Galuh Aditiya Pamungkas</span></p>
                    <p><span class="title-s">Profile: </span> <span>Freelancer</span></p>
                    <p><span class="title-s">Email: </span> <span>Galuh.aditya021002@gmail.com</span></p>
                    <p><span class="title-s">Phone: </span> <span>(62+)813-3624-6043</span></p>
                  </div>
                </div>
              </div>
              <div class="skill-mf">
                <p class="title-s">Skill</p>
                <span>HTML</span> <span class="pull-right">70%</span>
                <div class="progress">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span>CSS3</span> <span class="pull-right">65%</span>
                <div class="progress">
                  <div class="progress-bar bg-info" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span>PHP</span> <span class="pull-right">50%</span>
                <div class="progress">
                  <div class="progress-bar bg-warning" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <span>JAVASCRIPT</span> <span class="pull-right">70%</span>
                <div class="progress">
                  <div class="progress-bar bg-danger" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="about-me pt-4 pt-md-0">
                <div class="title-box-2">
                  <h5 class="title-left">
                    About me
                  </h5>
                </div>
                <p class="lead">
                  Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur arcu erat, accumsan id
                  imperdiet et, porttitor
                  at sem. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla
                  porttitor accumsan tincidunt.
                </p>
                <p class="lead">
                  Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus suscipit tortor eget felis
                  porttitor volutpat. Vestibulum
                  ac diam sit amet quam vehicula elementum sed sit amet dui. Porttitor at sem.
                </p>
                <p class="lead">
                  Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.
                  Nulla porttitor accumsan
                  tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?= $this->endSection(); ?>
</section><!-- End About Section -->

<style>
  .about-mf {
    background: f7f9fc#;
    padding: 60px 0;
  }

  .box-shadow-full {
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    padding: 30px;
    background: #fff;
    border-radius: 10px;
  }

  .about-img img {
    transition: transform 0.3s, box-shadow 0.3s;
  }

  .about-img img:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
  }

  .progress-bar {
    transition: width 0.6s ease;
  }

  .about-info p span {
    display: inline-block;
    width: 100px;
    font-weight: 600;
  }

  .about-info p span:last-child {
    font-weight: 400;
    color: #555;
  }

  .title-left {
    position: relative;
    padding-bottom: 10px;
    margin-bottom: 20px;
    font-size: 24px;
    font-weight: 700;
    color: #333;
  }

  .title-left:before {
    content: "";
    position: absolute;
    width: 50px;
    height: 3px;
    background: #5c6bc0;
    bottom: 0;
    left: 0;
  }

  .lead {
    font-size: 16px;
    line-height: 1.7;
    color: #666;
  }

  .hero {
    position: relative;
    background: linear-gradient(to right, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.1)), url(assets/img/hero-bg.jpg) center center;
    background-size: cover;
    height: 100vh;
    color: #fff;
  }

  .overlay-itro {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5);
  }

  .hero-content {
    display: table;
    width: 100%;
    height: 100%;
    text-align: center;
  }

  .hero-content .table-cell {
    display: table-cell;
    vertical-align: middle;
  }

  .hero-title {
    font-size: 48px;
    font-weight: 700;
    text-transform: uppercase;
    margin-bottom: 20px;
  }

  .hero-subtitle {
    font-size: 24px;
    font-weight: 300;
  }
</style>
