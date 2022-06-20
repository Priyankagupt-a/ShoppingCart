<?php
  include('connection.php');
  
    $product_id   =   $_POST['product_id'];

    $sql = "INSERT INTO `sc_cart` (`product_id`, `qty`) VALUES ($product_id, '1');" ;

    if (mysqli_query($conn, $sql)) 
    {
        echo "Data inserted";
      }
    else
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
      
    mysqli_close($conn);
?>

