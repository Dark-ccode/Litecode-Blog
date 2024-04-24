<?php
$zz = json_decode($_GET["z"],false);
$id = $zz->tutid;
$course = $zz->tutname;
$id=$id + 1;


include_once "connection.php";
$sql = " SELECT * FROM tutorialpost WHERE tutorialname='$course' and  manualid ='$id'";
$output =$connect->query($sql);
if($output->num_rows>0){

while($row=$output->fetch_assoc()){   
$head = $row['thead'];
$body = $row['tbody'];
$tname = $row['tutorialname'];


echo '<span class="course_name hide"></span>'.
'<h4>  '. $head .'</h4><br>'
. $body .'<span class="tutno hide">'.$id.'</span><span class="tutname hide">'.$tname.'</span>';}
}
else{
echo "<span>No course yet </span>".$id . "      ".$course.'<span class="tutno hide">'.$id.'</span><span class="tutname hide">'.$course.'</span>';
}

?>


