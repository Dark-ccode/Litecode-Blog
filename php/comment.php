<?php
session_start()?>

<?php
$xx = json_decode($_GET['z'],false);
$id = $xx->commentid;
$name = $xx->name;
$email = $xx->email;
$comment = $xx->comment;

include_once "connection.php";


    
if($name!=""  && $email!="" && $comment!=""){
$sql2 = "INSERT INTO usercomment(name,email,commentid,comment)
        VALUES('$name','$email',$id,'$comment')";
if($connect->query($sql2)==true){$_SESSION["posted"] = "your comment is posted" ; }
#$_SESSION["name"] = $name;
echo $_SESSION["posted"];  
    }
        //!isempty($_POST[]) && 
?>