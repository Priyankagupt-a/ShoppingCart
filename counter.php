<?php
    include('connection.php');
    
    $sql = "SELECT COUNT('*') AS total FROM `sc_cart`" ;

    $result = mysqli_query($conn, $sql);
    
    $data=mysqli_fetch_assoc($result);
    echo $data['total'];

?>