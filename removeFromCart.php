<?php
  include('connection.php');
  
    $product_id   =   $_POST['product_id'];

    echo $product_id;
    $sql = "DELETE FROM `sc_cart` WHERE `product_id` = $product_id" ;

    if (mysqli_query($conn, $sql)) 
    {
        echo "Data deleted";
    }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
      
    mysqli_close($conn);
?>

