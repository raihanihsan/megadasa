<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BudayaKu</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.min.css" rel="stylesheet">

  </head>

  <body>

    <h1 class="site-heading text-center text-white d-none d-lg-block">
      <span class="site-heading-lower">BudayaKu</span>
      <span class="site-heading-upper text-primary mb-3">Mission, Vission & Values</span>
    </h1>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="<?php echo url("/")."/home";?>">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="<?php echo url("/")."/input";?>">Input Budaya</a>
            </li>

            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="<?php echo url("/")."/cagarbudaya";?>">Budaya</a>
            </li>


            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="<?php echo url("/")."/about";?>">About</a>
            </li>

            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="<?php echo url("/")."/store";?>">Store</a>
            </li>

            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="<?php echo url("/")."/account";?>"><img src="img/user.png" alt="">Your Account</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>


<div class="row">
  
  <?php
    for ($i=0;$i<count($data);$i++)
    {
      $detail=$data[$i];
      ?>
        <div class="col-sm-4">
            <section class="page-section clearfix">
              <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/<?php echo $detail->Gambar;?>" alt="">
                  <p class="mb-3">
                      <?php
                        echo $detail->Keterangan;
                      ?>
                  </p>
                  <div class="intro-button mx-auto">
                    <?php
                      echo $detail->Nama;
                    ?>
                  </div>
              </div>
            </section>
          </div>
      <?php
    }
    //print_r($data);
  ?>
  

  
</div>


<!--
    <section class="page-section clearfix">
      <div class="container">
        <div class="intro">
          <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="img/borobudur.jpg" alt="">
          <div class="intro-text left-0 text-center bg-faded p-5 rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Fresh Coffee</span>
              <span class="section-heading-lower">Cagar Budaya</span>
            </h2>
            <p class="mb-3">Daerah yang kelestarian hidup masyarakat dan peri kehidupannya dilindungi oleh undang-undang dari bahaya kepunahan. Menurut UU no. 11 tahun 2010, cagar budaya adalah warisan budaya bersifat kebendaan berupa Benda Cagar Budaya, Bangunan Cagar Budaya, Struktur Cagar Budaya, Situs Cagar Budaya, dan Kawasan Cagar Budaya di darat dan/atau di air yang perlu dilestarikan keberadaannya karena memiliki nilai penting bagi sejarah, ilmu pengetahuan, pendidikan, agama, dan atau kebudayaan melalui proses penetapan.
            </p>

            <div class="intro-button mx-auto">
              <a class="btn btn-primary btn-xl" href="#">Visit Us Today!</a>
            </div>

          </div>
        </div>
      </div>
    </section>
-->
    <footer class="footer text-faded text-center py-5">
      <div class="container">
        <p class="m-0 small">Copyright &copy; Your Website 2018</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
