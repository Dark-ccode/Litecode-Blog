<?php
$server = "localhost";
$username = "root";
$pword = "";
$db = "litecode";



$connect =@new mysqli($server,$username,$pword,$db);

if($connect->connect_error){
    die("connection failed:" . $connect->connect_error);
}


?>