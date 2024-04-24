<?php include_once "connection.php";?>

<?php if(isset($_POST['posted'])&& $_POST['category']!="" && $_POST['heading']!=""&& $_POST['postbody']!=""):?>
<?php

$cat1 = ($_POST['category']);
$cat2 = ($_POST['tutorial_cat']);
$head = ($_POST['heading']);
$body = ($_POST['postbody']);
$courseid = ($_POST['courseid']);


//for img upload 


$name = $_FILES['file'] ['name'];
$temp_name = $_FILES['file'] ['tmp_name'];
if(isset($name) && !empty($name)){
  $location = '../img/';
 if(move_uploaded_file($temp_name,$location.$name)){
   echo 'uploaded successfully<br>';
   $path = "img/".$name;
 } 
else{ echo 'no file seleceted';} 
}


if($_POST['tutorial_cat']!==""){
  $sql1 = "INSERT INTO tutorialpost(manualid,tcategory,tutorialname,thead,tbody)
  VALUES('$courseid','$cat1','$cat2','$head','$body')";
  $output1 =$connect->query($sql1);
  if($output1){ echo "posted    ". $cat2. "article : no file selected";}
}

else if($_POST['tutorial_cat']==""){
  $sql = "INSERT INTO post(category,head,body,file)
  VALUES('$cat1','$head','$body','$path')";
  $output =$connect->query($sql);
  if($output){ echo "Random article posted";}
}

 ?>
<?php else: echo "you must fill all inputs before you can post "; ?>
  <?php endif;?>
  