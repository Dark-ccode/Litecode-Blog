<?php
$server = "localhost";
$username = "echelont_Georgeslitecode";
$pword = "Georgeslitecode";
$db = "echelont_litecode";



$connect =@new mysqli($server,$username,$pword,$db);

if($connect->connect_error){
    die("connection failed:" . $connect->connect_error);
}


?>