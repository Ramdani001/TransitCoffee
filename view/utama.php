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
<body onload="SinglePages('Product1')">
     
<?php include('partials/navbar.php')?>
    

    <div id="content"></div>
    
    
    <!-- footer Section -->
    <?php include('layouts/footer.php')?> 
    <!-- End footer Section -->
    

<!-- Jquery -->    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.js"></script>


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
        $('#content').load('<?= $main_url ?>view/home.php');
    })
</script>

</body>
</html>
