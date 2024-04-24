<?php
session_start()

?>
<?php
include_once "php/connection.php";
$sql = " SELECT * FROM post";
$output =$connect->query($sql);
if($output->num_rows>0){
$postno = $output->num_rows;
$_SESSION["postno"] = $postno;

while($row=$output->fetch_assoc()){   
    $like = $row['postlike'];
    $_SESSION["nolikes"] += $like;
}}

$sql1 = " SELECT * FROM usercomment";
$output1 =$connect->query($sql1);
if($output1->num_rows>0){
$noemail = $output1->num_rows;
$_SESSION["noemail"] = $noemail;

}
?>


<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=windows-1252">
    <title>Litecodes Blog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/page-activities.js"></script>

    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        

                <div class="row bg-dark">
                    <div class="col-md-8 head ">
               <span class="name text-light ">Litecodes Blog<sub>(administrator)</sub></span>
        </div>
        <div class="col-md-2 head "></div>

               <div class="col-md-2 head ">
            <span class="headimgcont editt">
               <img src="icon/user-edit.svg" class="nicons headimg editt">
            </span>
            </div>
                     </div>



        <div class="row all">
        <div class="col-md-4">
<div class="leftnav bg-light text-dark">
 <div class="profilecont">
    <div class="imgcont"><img src="icon/admin.svg" class="adminimg bg-info"></div>
    <span class="namecont">
        <span class="adminname text-info profile">
      <?php  echo  $_SESSION["admin"] ;?><sub class="profile pp text-danger"> <b>profile</b></sub></span> 
</span>

</div>
<hr>
<div class="navcont">
<span class="nav dashnav dsh"><img src="icon/dashboard.svg" class="nicons"> Dashboard</span>
<span class="nav pm"> <img src="icon/pen.svg" class="nicons">Post Manager</span>
<span class="Submenu postsubm">
<span class="nav postsub postformnav">Add Post</span>
<span class="nav postsub viewpostnav">View posts</span>

</span>


 
<span class="nav um"> <img src="icon/users.svg" class="nicons"> Admin Manager</span>
<span class="Submenu usersubm">
<span class="nav usersub adminformnav">Add admin</span>
<span class="nav usersub viewadminnav">View admins</span>

</span>


<hr>
<a href="form/login.php">
 <span class="nav"><img src="icon/logout.svg" class="nicons"> Log out</span></a>
</div>
</div>
</div>
            <div class="col-md-8 mainbody">
        <!--head-->

        <!--body-->
  <!--first page-->   
 <div class="dashboardpage page" id="page1"> 
<div class="row">
  <div class="col-md-6">
    <div class="statcard bg-dark viewpostnav">
<div class="statcont"><span class="statname text-light ">Posts</span>
  <span class="statvalue text-danger"><?php  echo  $_SESSION["postno"] ;?></span></div>
  <div class="statimgcont"> <img src="icon/pen.svg" alt="" class="statimg"> </div>    
    </div>  
</div>


<div class="col-md-6">
  <div class="statcard  bg-info">
    <div class="statcont"><span class="statname text-light">Email</span>
      <span class="statvalue text-light"><?php  echo  $_SESSION["noemail"] ;?></span></div>
      <div class="statimgcont"> <img src="icon/envelope.svg" alt="" class="statimg"> </div>
</div>  </div></div>


<!--second row-->      
<div class="row">
    <div class="col-md-6">
    <!--1-->
        <div class="statcard smallc fsmallc bg-info ">

          <div class="statcont"><span class="statname text-light">Supports</span>
            <span class="statvalue text-light">10</span></div>
            <div class="statimgcont"> <img src="icon/help.svg" alt="" class="statimg ostimg"> </div>
      
        </div>
 <!--2-->
 <div class="statcard smallc fsmallc bg-warning sfsmallc">
  <div class="statcont"><span class="statname text-light">Total Likes</span>
    <span class="statvalue text-light"><?php  echo  $_SESSION["nolikes"] ;?></span></div>
    <div class="statimgcont"> <img src="icon/like.svg" alt="" class="statimg ostimg"> </div>
</div>
 </div>
 
<div class="col-md-6 pop">
    <div class="statcard bg-light ">
      <div class="statcont"><span class="statname text-info">Categories</span>
        <span class="statvalue text-light">10</span></div>
        <div class="statimgcont"> <img src="icon/list.svg" alt="" class="statimg"> </div>
        <span class="smallname text-dark"></span> <span class="smallvalue">7</span>
    </div></div></div>
<!--page 1 end---></div>


<!--second page-->   
<div class="Postpage page none" id="page2"> 
  <div class="formcont bg-light"><br>
    <h4 class="posthead">Fill out the form to post an article</h4>
    <br>
  
  
  <form method="POST" enctype="multipart/form-data"  action="php/post.php">
             
              <select name="category" class="cat" placeholder="categories">
                  <option disabled>Post categories</option>
                  <option>Code Facts</option>
                  <option>Code Issues</option>
                  <option>Tutorial</option>
                  
                            </select>
                 
  
                            <select name="tutorial_cat" class="cat" placeholder="categories">
                  <option disabled>Tutorial category</option>
                  <option></option>
                  <option>HTML</option>
                  <option>CSS</option>
                  <option>JavaScript</option>
                  <option>PHP</option>
                  <option>SQL</option>
                  <option>Python</option>
                            </select>
                            <input type="number" id="no" name="courseid">

      <input type="file" name="file"  id="file" class="inputs">
  
      <input type="text" name="heading" placeholder="post heading" class="inputs">    
  
    <textarea cols="30" rows="4" placeholder="Post body" name="postbody" id="t"></textarea>
<br>     
<br>     
     <input type="hidden" name="posted">
  <input type="submit" value="Post now" class="postbtn" name="post">
  
    
  </form>
  </div>
<!--page 2 end---></div>

<!--third page-->   
<div class="viewpostpage page none" id="page3"> 
 <!--table-->
 <h3>Manage posts made</h3>
 <div class="row tablerow">
     <div class="col-md-12">
         <table class="table table-stipped table-hover table-dark ">
             <thead>
                
                 <th class="text-info">ID</th>
                 <th class="text-info">Post Category</th>
                 <th class="text-info">Post Head</th>
                 <th class="text-info">Post Body</th>

                 <th class="text-info">Delete</th>
             </thead>
             
       <?php     include_once "php/post_table.php"; ?>
             
         </table>
     </div></div>
<!--page 2 end---></div>
 


<!--fourth page-->   
<div class="addadminpage page none" id="page4"> 

  <div class="formbody">
    <h5 >Add adminstrator</h5>
    <form action="php/signupscript.php" method="POST">
      <div class="inputcont">
        <img src="icon/admin.svg" class="inputimgs">
        <input type="text" placeholder="name" class="inputts" name="name">
    </div>
    <div class="inputcont">
        <img src="icon/envelope.svg" class="inputimgs">
    <input type="text" placeholder="Email" class="inputts" name="mail">
    </div>
    <div class="inputcont">
        <img src="icon/phone.svg" class="inputimgs">
    <input type="tel" placeholder="Phone no" class="inputts" name="phone">
    </div>
    <div class="inputcont">
      <img src="icon/eye.svg" class="inputimgs">
      <input type="password" placeholder="password" class="inputts" name="pword">
  </div>
      
    <input type="submit" value="Submit" class="bg-dark text-light next" name="submitted">
</form>
</div>
  <!--page 4 end---></div>



<!--fifth page-->   
<div class="viewadminpage page none" id="page5"> 
<!--table-->
<h3>Adminstrators</h3>
<div class="row tablerow">
    <div class="col-md-12">
        <table class="table table-stipped table-hover table-dark ">
            <thead>
               <th class="text-info">ID</th>
               <th class="text-info">Name</th>
                <th class="text-info">Email</th>
                <th class="text-info">Phone no</th>
                <th class="text-info">Password</th>
                <th class="text-info">Delete</th>
            </thead>
       <?php     include_once "php/admin_table.php"; ?>
     
            </table></div></div>
  <!--page 5 end---></div>




<!--fifth page-->   
<div class="Detailspage page none" id="page7"> 

  <div class="detailscont">
  <h4 class="posthead">Account Details</h4>
  <br>
  <span class="drows">
    <span class="info cells">Name</span><span class="details cells"><?php echo   $_SESSION["admin"] ;?></span></span>
  <span class="drows">
  <span class="info cells">Phone no</span><span class="details cells"><?php echo $_SESSION["fone"] ;?></span></span>
  
  <span class="drows">
  <span class="info cells">Email</span><span class="details cells"><?php  echo  $_SESSION["mail"] ;?>
</span></span>
 
  <span class="drows">
  <span class="info cells">Password</span><span class="details cells"><?php echo  $_SESSION["pass"] ;?></span></span><hr>
 
  <span class="edit editt bg-info text-light">Edit Details</span>
  <hr>



</div>

  <!--page 7 end---></div>



  <div class="editorpage page none" id="page8">
    <h5>Edit Admin details</h5>
  <form action="php/editDB.php" method="post">
    <div class="inputcont">
      <img src="icon/eye.svg" class="inputimgs">
      <input type="password" placeholder="Input your old password" class="inputts" name="oldpword">
  </div><hr>
  
  <div class="inputcont">
    <img src="icon/admin.svg" class="inputimgs">
    <input type="text" placeholder="New Name" class="inputts" name="newname">
  </div>
  <div class="inputcont">
    <img src="icon/envelope.svg" class="inputimgs">
  <input type="text" placeholder="New Email" class="inputts" name="newmail">
  </div>
  <div class="inputcont">
    <img src="icon/phone.svg" class="inputimgs">
  <input type="tel" placeholder="New Phone no" class="inputts" name="newphone">
  </div>
  <div class="inputcont">
  <img src="icon/eye.svg" class="inputimgs">
  <input type="password" placeholder="New password" class="inputts" name="newpword">
  </div>
  <input type="submit" class="bg-dark text-light next" id="next1" value="Submit"></span>
  </form>
  </div>
  <!--page 8 end---></div>



   <!--MORE GOES--> 

</div> 


</div>
</body>

</html>