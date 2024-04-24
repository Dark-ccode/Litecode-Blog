<?php
include_once "connection.php";
//data to be saved in db

$oldpasss = $_POST['oldpword'];

$newname = $_POST['newname'];
$newpass = $_POST['newpword'];
$newfone = $_POST['newphone'];
$newmail = $_POST['newmail'];



$sql0 = "SELECT * from  admins where password = '$oldpasss' ";
$output0 =$connect->query($sql0);


if($output0->num_rows>0){
    while($row=$output0->fetch_assoc()){   
        $oldname = $row['name'];
        $oldmail = $row['email'];
        $oldfone = $row['phone'];
        $oldpass = $row['password'];}  
        
        function  detailchecher($newdtl,$olddtl){
            if($newdtl == ""){ $newdtl = $olddtl; }
        else{$newdtl = $newdtl;}
        return $newdtl; 
    
    
    }
        
    $n=    detailchecher($newname,$oldname);
    $e =    detailchecher($newmail,$oldmail);
    $f =    detailchecher($newfone,$oldfone);
    $p=   detailchecher($newpass,$oldpass);
           
        
$sql1 = "UPDATE admins SET   name = '$n', email = '$e',phone = '$f',password = '$p' where password = '$oldpasss'";
$output1 =$connect->query($sql1);
 header("Location:../dashboard.php");
        }
        ?>