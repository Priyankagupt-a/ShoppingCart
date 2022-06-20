<?php

$server     =   "localhost";
$username   =   "root";
$password   =   "";
$db         =   "shoppingcart";

$conn       =   mysqli_connect($server,$username,$password);

if(!$conn)
{
    die("connection failed" .mysqli_error($conn));
}

$dbcon      =   mysqli_select_db($conn,$db);
if(!$dbcon)
{
    die ("db select failed" .mysqli_error($conn));
}

?>