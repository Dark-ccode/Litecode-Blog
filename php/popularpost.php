<?php 
$no = 1;

include_once "connection.php";
$sql = " SELECT * FROM post  WHERE  postlike>='$no'";
$output =$connect->query($sql);
if($output->num_rows>0){
while($row=$output->fetch_assoc()){   
    $id = $row['id'];
    $cat = $row['category'];
    $head = $row['head'];
    $like = $row['postlike'];
    $t = $row['time'];

    echo '<div class="pop"><div class="popccard"><b class="popid hide">'.$id.'</b>'.
    '<div class="posdiv"><span class="lleft"><img src="icon/like.svg" class="loveicon">'.
    '<b id="nooflikes">'.$like.'</b></span><span class="popularhead">'.$head.'</span></div>
</div></div>';
    
#<div class="popright">'.$t.'</div>        

}}
    ?>