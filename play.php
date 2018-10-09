<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Let's Play With Us</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/aos.min.css">
    <link rel="stylesheet" href="css/hamburgers/hamburgers.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/animsition.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflarecom/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  
  <div class="js-animsition animsition" data-animsition-in-class="fade-in" data-animsition-out-class="fade-out">

    <header class="templateux-navbar" data-aos="fade-down">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-3 col-3"><div class="site-logo"><a href="home" class="animsition-link"><b style="color: #dc3545;">TeamCYD</b></a></div></div>
          <div class="col-sm-9 col-9 text-right">

            <button class="hamburger hamburger--spin toggle-menu ml-auto js-toggle-menu" type="button">
              <span class="hamburger-box">
                <span class="hamburger-inner"></span>
              </span>
            </button>  

            <nav class="templateux-menu js-templateux-menu" role="navigation">
              <ul class="list-unstyled">
                <li class="d-md-none d-block"><a href="home" class="animsition-link">Home</a></li>
                <li><a href="gallery" class="animsition-link">Gallery</a></li>
                <li><a href="our-team" class="animsition-link">Our Team</a></li>
                <!-- <li><a href="blog" class="animsition-link">Blog</a></li> -->
                <li class="active"><a href="play" class="animsition-link"><b style="color: #dc3545;">Play With Us</b></a></li>
              </ul>
            </nav>  
          </div>
        </div>
      </div>
    </header>

    <!-- END templateux-navbar -->
    <section class="templateux-hero mb-5"  data-scrollax-parent="true">
      <!-- <div class="cover" data-scrollax="properties: { translateY: '30%' }"><img src="images/hero_2.jpg" /></div> -->

      <div class="container">
        <div class="row align-items-center justify-content-center intro">
          <div class="col-md-10" data-aos="fade-up">
            <h1>Mau Bermain Bersama Kami?</h1>
            <p class="lead">Tinggal isi formulir dibawah dengan data yang valid. Tinggal tunggu aja balasan dari admin.</p>
            <a href="#next" class="go-down js-smoothscroll"></a>
          </div>
        </div>
      </div>
    </section>
    <!-- END templateux-hero -->
    
    
    <section class="templateux-portfolio-overlap mb-5" data-aos="fade-up" id="next">
      <div class="container">
        <!-- <div class="row"> -->
          <form action="#" method="post">
            <div class="row">
              <div class="col-md-4  mb-4">
                <select class="form-control" style="height: 50px;">
                  <option value="Mobile Legends">Mobile Legends</option>
                  <option value="PUBG Mobile">PUBG Mobile</option>
                </select>
              </div>
              <div class="col-md-4  mb-4">
                <input type="text" class="form-control" placeholder="Nama" required>
              </div>
              <div class="col-md-4  mb-4">
                <input type="email" class="form-control" placeholder="Email" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4  mb-4">
                <input type="text" class="form-control" placeholder="Nomor WhatsApp" required>
              </div>
              <div class="col-md-4  mb-4">
                <input type="text" class="form-control" placeholder="Nama Squad" required>
              </div>
              <div class="col-md-4  mb-4">
                <input type="text" class="form-control" placeholder="Nama Kapten" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12  mb-4">
                <textarea name="" class="form-control" id="" cols="30" rows="10" placeholder="Kirim Pesan Kepada Kami" required=""></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-md-4  mb-4">
                <input type="submit" class="button button--red" value="Mabar Yuk !!!">
              </div>
            </div>
          </form>
        <!-- </div> -->
      </div>
    </section>

    <?php include "footer.php"; ?>

  </div>

  
  <script src="js/scripts-all.js"></script>
  <script src="js/main.js"></script>

  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  
  </body>
</html>