<?php
session_start()

?>

<?php 
//verifying and getting 

if(isset($_POST['submitted']) && $_POST['name']!=""  && $_POST['phone']!=""    && $_POST['pword']!="") :?>
<?php 

$_SESSION["admin"] = $_POST['name'] ;
$_SESSION["mail"] = $_POST['mail'] ;
$_SESSION["pass"] = $_POST['pword'] ;
$_SESSION["fone"] = $_POST['phone'] ;

include_once "connection.php";
//data to be saved in db

$name = $_POST['name'];
$email = $_POST['mail'];
$pass = $_POST['pword'];
$fone = $_POST['phone'];



$sql0 = "SELECT * from  admins where name = '$name'";
$output0 =$connect->query($sql0);

$sql1 = "SELECT * from  admins where email = '$email'";
$output1 =$connect->query($sql1);

if($output0->num_rows>0){echo "user already exist";}

elseif($output1->num_rows>0){echo "Email already exist";}
    
else{
$sql2 = "INSERT INTO admins(name,email,phone,password)
        VALUES('$name','$email','$fone','$pass')";
      if($connect->query($sql2)===true){
        Echo "Admin has been added to the database";
      }}      
      ?>
<?php else: echo "fill in Admin details ";?>
  <?php endif;?>