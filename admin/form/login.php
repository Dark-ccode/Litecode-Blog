<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=windows-1252">
    <title>Admin login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/page-activities.js"></script>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="css/form.css">

</head>

<body class="bg-light">
    <div class="container">
        <div class="row">

        <br>
      <div class="col-md-4"></div>
      <div class="col-md-4 formbody">
        <div class="formbody">


<!-- login page-->

<div id="login">
    <h4>Adminstartion  Login</h4>

<form method="post" action="../php/loginscript.php">
<div class="inputcont">
    <img src="icon/admin.svg" class="inputimgs">
    <input type="text" placeholder="name" class="inputs" name="name"></div>

<div class="inputcont">
    <img src="icon/eye.svg" class="inputimgs">
    <input type="password" placeholder="password" class="inputs" name="pword">
</div>


<br>
 <p id="signuplink"><input type="checkbox" name="preveledge">    I have preveilege to this page </p>

<input type="submit" class="bg-info text-light next" name="logged" value="Login">
</form>
</div>


      </div>
      <div class="col-md-4"></div>
</div>













    </div>
</div>
</body>

</html>