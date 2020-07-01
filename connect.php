<?php
$servername="localhost";
$user="root";
$pss="";
$conn=mysqli_connect($servername,$user,$pss,"hospital");

if(!$conn){
    die("connection failed".mysqli_connect_error());
    
}
?>