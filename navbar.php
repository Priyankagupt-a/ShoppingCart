<?php
    include('connection.php');
?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Kreate</a>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home <span class="sr-only"></span></a>
            </li>
          </ul>
          <span class="navbar-text">
            <a href="cart.php">
                <img src="images/cart.png" height="50px" alt="">
                <img src="images/counter.png" alt="" height="20px" width="20px" style="position:absolute;right:15px;top:25px">
               
                <div class="counter" id="counter" style="color:white;position:absolute;top:26px; right:22px;font-size: 13px;"><?php include('counter.php')?></div>
            </a>
        </span>
        </div>
    </nav>