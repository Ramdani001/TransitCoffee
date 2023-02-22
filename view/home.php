<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transit Coffee</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?= $main_url ?>assets/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="<?= $main_url ?>assets/bootstrap/css/bootstrap.min.css">

  <!-- Data Aos -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- MyStyle -->
  <link rel="stylesheet" href="<?= $main_url ?>assets/style/css/style.css">

  <!-- Fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">

</head>
<body onload="SinglePages('Product1')">
  
    <?php include('partials/navbar.php')?>
    
    <!-- Hero Section -->
      <?php include('layouts/hero.php')?>
    <!-- End Hero Section -->

    <div id="AboutUs" class="m-5 position-relative" style="margin-top: -100px !important;">
      <div class="card shadow">
          <div class="card-title ms-3 mt-4">
            <h1 class=" text-center">
              About Us
              <hr class="w-100">
            </h1>
          </div>
          <div class="card-body">
            <div class="card border-0">
                <div class="card-body d-flex">
                
                  <div class="w-50 Content">
                    <h2>
                      Transit Coffee
                    </h2>
                    <p class="" style="text-align: justify !important;">
                      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem error quo est quisquam sapiente illo quos ducimus voluptates corrupti placeat alias eligendi quibusdam, soluta nesciunt non eos libero aliquam maiores officia perspiciatis necessitatibus! Ab earum voluptatibus alias veritatis velit harum suscipit, ex soluta rem aperiam doloribus cum ipsam officiis? Soluta natus, eius consectetur consequuntur commodi voluptatum incidunt dolore maiores, necessitatibus eos ratione ipsam illo nulla fuga minima alias dicta ab corrupti odio, dignissimos quisquam autem excepturi praesentium? Placeat eaque id, nostrum voluptatum voluptas cumque facere doloribus vitae, suscipit est itaque veniam quibusdam excepturi ducimus, ex non. Quidem, veritatis! Voluptatem, rem?
                    </p>
              </div>

                  <div class="w-50 ImgContent" style="padding-left: 150px !important;" data-aos="fade-up" data-aos-duration="3000">
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                          <img src="<?= $main_url ?>assets/gambar/Hero/robusta.png" width="300" alt="img">
                        </div>
                        <div class="carousel-item" data-bs-interval="6000">
                          <img src="<?= $main_url ?>assets/gambar/Hero/arabica.png" width="300" alt="img">
                        </div>
                        <div class="carousel-item">
                          <img src="<?= $main_url ?>assets/gambar/Hero/vietnamDrip.png" width="300" alt="img">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
      </div>
    </div>

    <?php include('layouts/bestSeller.php') ?>

    <!-- Reservasi Section -->
      <?php include('layouts/reservasi.php')?> 
    <!-- End Reservasi Section -->

    <!-- footer Section -->
      <?php include('layouts/footer.php')?> 
    <!-- End footer Section -->

<!-- Data Aos -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- Bootstrap -->
<script src="<?= $main_url ?>assets/bootstrap/js/bootstrap.js"></script>
<script src="<?= $main_url ?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= $main_url ?>assets/bootstrap/js/popper.min.js"></script>
<script src="<?= $main_url ?>assets/style/js/script.js"></script>

<!-- Fontawesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"></script>



</body>
</html>