<?php
session_start()
?>

<?php
$xx = json_decode($_GET["x"],false);
$id = $xx->y;

include_once "connection.php";

$sql1 = " SELECT * FROM post  WHERE id='$id'";
$output1 =$connect->query($sql1);
  if($output1->num_rows>0){
  while($row=$output1->fetch_assoc()){   
      $like = $row['postlike'];

$_SESSION["liked"]++;

if($_SESSION["liked"]==1){
$like = $like + 1;

}

elseif($_SESSION["liked"]==2){
  $like = $like - 1;
  $_SESSION["liked"]=0;
  }

  $sql2 = "UPDATE post SET postlike = '$like' WHERE id = '$id'";
$output2 =$connect->query($sql2); 

echo $like;

}}
  



?>