<?php
include_once "connection.php";
//data to be saved in db

$id = $_GET['del'];
    $sql = "DELETE  FROM post  where  id = '$id'";
    if($connect->query($sql)){
    echo "Post deleted"; 

}
?>