<?php
session_start()

?>
<?php

##db section
include_once "connection.php";
$name = ($_POST['name']);
$pass = $_POST['pword'];

$sql = "SELECT * from admins where name = '$name'";

$output =$connect->query($sql);
$output->num_rows>0;
 while($row=$output->fetch_assoc()){ 
     $dname =$row['name'];
     $dpass =$row['password'];
$_SESSION["mail"] = $row['email'];
$_SESSION["fone"] = $row['phone'];
}
?>






<?php if(isset($_POST['preveledge']) && $_POST['name']!="" && $_POST['pword']!="" && $dname==$name && $dpass==$pass):?>
<?php
$_SESSION["admin"] = $_POST['name'] ;
$_SESSION["pass"] = $_POST['pword'] ;
header("Location:../dashboard.php");
?>
 <?php else: echo "input correct login details" ?>
   <?php endif?>
 



  