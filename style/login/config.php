<?php

$server ="localhost";
$username ="root";
$password ="";
$database ="login_register_pure_coding";

$conn = mysqli_connect($server,$username,$password,$database);

if (!$conn){
     die("<script>alert('Connection Failed.')</script>");

}
?>