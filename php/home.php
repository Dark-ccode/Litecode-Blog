    <?php

include_once "connection.php";
$sql = " SELECT * FROM post  WHERE category='Code Facts'";
$output =$connect->query($sql);
if($output->num_rows>0){

while($row=$output->fetch_assoc()){   
    $id = $row['id'];
    $cat = $row['category'];
   $head = $row['head'];
   $body = $row['body'];
   $file = $row['file'];
   $like = $row['postlike'];
   $t = $row['time'];

$sql0 = " SELECT * FROM usercomment  WHERE commentid='$id'";
$output0 =$connect->query($sql0);
$length =$output0->num_rows;


echo '<div class="post animated fadeInLeft"><div class="info"><span class="cat web ">'.$cat . /*'</span><span class="time">' .$t. '</span>*/'</div>
<span class="post_caption">'. $head .'</span>
<div class="post_body">'. $body .'</div><div class="actions"><span class="likes"><img src="icon/like.svg" class="simg"><span id="likeno">' .$like.' </span></span>
<span class="comments">Comments '.$length .'</span><span class="readmore">Read more</span>
<input id="postid" class="postid" type="number" value="' .$id.'"></span></div>'
;

$sql2 = " SELECT * FROM usercomment  WHERE commentid='$id'";

$output2 =$connect->query($sql2);

if($output2->num_rows>0){
while($row2=$output2->fetch_assoc()){   
    $name = $row2['name'];
    $time = $row2['time'];
    $comment = $row2['comment'];


echo'  <div class="commentedcont">
<div class="comentbox bg-light" ><span class="commenter block">'.$name.'</span><br>
<span class="comment_body block">'.$comment . '.</span>
    <span class="comentdate block">'. $time.'</span>
</div>
</div>
';

}}
echo '</div>';
};}

?>