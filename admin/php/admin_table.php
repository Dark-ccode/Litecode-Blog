<?php


include_once "connection.php";

$sql = " SELECT * FROM admins";

$output =$connect->query($sql);
if($output->num_rows>0){

while($row=$output->fetch_assoc()){   
     $id = $row['id'];
     $name = $row['name'];
    $mail = $row['email'];
    $fone = $row['phone'];
    $pword = $row['password'];

    

  echo " <tr><td>". $id . "</td>".
                "<td>" . $name . "</td>".
                "<td>" . $mail . "</td>".
                "<td>". $fone ."</td>".
                "<td>". $pword ."</td>".
              "<td> <a href ='php/delete_admin.php?del=".$id."'><img src='icon/cancel.svg' class='nicons cancelimg'></a></td>
              </tr>";
};


};

?>