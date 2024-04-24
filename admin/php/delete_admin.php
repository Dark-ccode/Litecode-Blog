<?php
include_once "connection.php";
//data to be saved in db

$userid = $_GET['del'];
    $sql = "DELETE  FROM admins  where  id = '$userid'";
    if($connect->query($sql)){
    echo "admin deleted"; 

}
?>