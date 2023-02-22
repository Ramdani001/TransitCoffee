<!DOCTYPE html>
<html lang="en">
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
<body>
    <?php include('partials/navbar.php')?>

    <?php include('partials/promoMenu.php')?>

    
    <div class="container" style="height: 120vh !important;">
        <div class="m-1 mt-5 border p-2 shadow rounded mb-2" style="background-color: #C3FCF1;">
          <div class="card" style="background-color: rgba( 255, 255, 255, .7); border: none;">
              
              <!-- Menu Item -->
                <div class="w-50 mx-auto" style="background-color: rgba( 195, 252, 241); border-radius: 0 0 20px 20px">
                  <div class="d-flex justify-content-around" style="font-size: 20px;">
                      <div class="m-2 menuItem ">
                        <a class="menu menuActive text-decoration-none text-dark" href="#" id="All Product">All Product</a>
                      </div>
                      <div class="m-2" id="Drink">
                        <a class="menu text-decoration-none text-dark" href="#" id="Drink">Drink & Coffee</a>
                      </div>
                      <div class="m-2" id="Food">
                        <a class="menu text-decoration-none text-dark" href="#" id="Food">Snack & Food</a>
                      </div>
                  </div>
                </div>
              <!-- End Menu Item -->

                <div id="content"></div>
                

            <!-- <?php include('partials/AllProduct.php') ?> -->

          </div>
        </div>
    </div>


    <?php include('partials/footer.php')?>

  <!-- Jquery -->
  <script src="<?= $main_url ?>assets/style/jquery.js"></script>
  <script src="<?= $main_url ?>assets/style/jquery.min.js"></script>

<!-- Data Aos -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- Bootstrap -->
<script src="<?= $main_url ?>assets/bootstrap/js/bootstrap.js"></script>
<script src="<?= $main_url ?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= $main_url ?>assets/bootstrap/js/popper.min.js"></script>
<script src="<?= $main_url ?>assets/style/js/script.js"></script>

<!-- Fontawesome -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js"></script>


  <script>
    $(document).ready(function() {
      
      $('#content').load('<?= $main_url ?>view/partials/AllProduct.php');
    })


    $('.menu').click(function (e) {
      e.preventDefault();

      
      var menu = $(this).attr('id');
      
      if(menu == "All Product"){
        $('.menu').removeClass('menuActive')
        $(this).addClass('menuActive');
        $('#content').load('<?= $main_url ?>view/partials/AllProduct.php');
      }else if(menu == "Drink"){
        $('.menu').removeClass('menuActive')
        $(this).addClass('menuActive');
        $('#content').load('<?= $main_url ?>view/partials/Drink.php');
      }else if(menu == "Food"){
        $('.menu').removeClass('menuActive')
        $(this).addClass('menuActive');
        $('#content').load('<?= $main_url ?>view/partials/Food.php');
      }
    })

  </script>

</body>
</html>