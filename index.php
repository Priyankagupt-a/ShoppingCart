<?php
  include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


</head>
<body>

    <?php
      include('navbar.php');
    ?>

    <div class="col-lg-12 p-3">
        <img src="https://images.cdn2.stockunlimited.net/preview1300/mobile-shopping-banner_2022428.jpg" class="col-lg-12" alt="">
    </div>
    <div class="container-fluid " style="padding-left: 33px;">

        <div class="h4">Eco Friendly</div>

        <div class="row col-lg-12">

            <?php
              $sql = "SELECT * FROM sc_products LIMIT 6";
              $result = mysqli_query($conn, $sql);
              
              if (mysqli_num_rows($result) > 0) 
              {
                while($row = mysqli_fetch_assoc($result)) {
                  echo "<div class='col-lg-3 col-sm-6 col-md-4 center'>
                  <div class='row img-thumbnail'>
                      <div class='row col-lg-12'>
                          <img src='".$row['image']."' class='col-lg-12' width='200px' height='200px' style='object-fit:contain;'>
                      </div>
                      <p class='text-center col-lg-12'>".$row['name']."</p>
                      <div class='h6 col-lg-12'>Rs.".$row['price']."</div>
                      <div class='col-lg-12'>
                          <div class='col-lg-3'></div>
                          <div class='col-lg-12 btn btn-success' id='add-to-cart-btn-".$row['id']."' onclick='addToCartBtn(".$row['id'].")' >Add to cart</div>
                          <div class='col-lg-12 btn btn-danger' id='remove-from-cart-btn-".$row['id']."' onclick='removeFromCart(".$row['id'].")'  style='display:none;'>Remove</div>
                      </div>
                  </div>
              </div>";                }
              } else {
                echo "0 results";
              }
              
              mysqli_close($conn);
            ?>
            
        </div>



        <ul class="pagination">
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
                <span class="sr-only">Previous</span>
              </a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
                <span class="sr-only">Next</span>
              </a>
            </li>
          </ul>


        
    </div>
    
</body>
<script src="js/custom.js"></script>
</html>