<?php


include_once "connection.php";

$sql = " SELECT * FROM post";

$output =$connect->query($sql);
if($output->num_rows>0){

while($row=$output->fetch_assoc()){   
     $id = $row['id'];
     $cat = $row['category'];
    $head = $row['head'];
    $body = $row['body'];

    

  echo " <tr><td>". $id . "</td>".
                "<td>" . $cat . "</td>".
                "<td>" . $head . "</td>".
                "<td>" . $body . "</td>".
              "<td> <a href ='php/delete_post.php?del=".$id."'><img src='icon/cancel.svg' class='nicons cancelimg'></a></td>
              </tr>";
};


};

?>