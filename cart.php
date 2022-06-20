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
    <!-- navbar -->
    <?php
        include('navbar.php');
    ?>

    <div class="container-fluid">
        
        <div class="h4">Cart details</div>

        <div class="row col-lg-12">
            <?php
                $sql = "SELECT sc_products.name AS product_name,
                                sc_products.image AS product_image,
                                sc_products.description,
                                sc_products.price,
                                sc_products.id as product_id
                FROM  `sc_cart`
                LEFT JOIN `sc_products`
                ON sc_products.id = sc_cart.product_id" ;
                $result = mysqli_query($conn, $sql);
                
                if (mysqli_num_rows($result) > 0) 
                {
                  while($row = mysqli_fetch_assoc($result))
                    {
                    echo ' <div class="col-lg-9 box"> 
                            <hr>
                            <div class="row col-lg-12">
                                <div class="col-lg-3">
                                    <img src="'.$row['product_image'].'" height="150px" width="150px">
                                </div>
                                <div class="col-lg-9">
                                    <div class="col-lg-12">
                                        '.$row["product_name"].'
                                    </div>
                                    <div class="col-lg-12">
                                        '.$row["description"].'
                                    </div>
                                    <div class="col-lg-12">
                            '.$row["price"].'
                            </div>
                                    <div class="col-lg-12">
                                        quantity
                                    </div>
                                    <div class="btn btn-danger col-lg-3" onclick="removeBtn('.$row['product_id'].')">
                                        Remove
                                    </div>
                                </div>
                            </div>
                        </div>';
                    }
                } else {
                  echo "0 results";
                }
                
                mysqli_close($conn);
            ?>
            <div class="col-lg-3"> 
                <div class="btn btn-success col-lg-12">
                    Proceed
                </div>
            </div>

        </div>

    </div>
</body>
<script src="js/custom.js"></script>
</html>