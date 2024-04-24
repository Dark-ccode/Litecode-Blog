<?php
session_start()
?>
<?php
$_SESSION["liked"]=0;
?>

<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=windows-1252">
<title>Litcode hub(the programmers lounge)</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/slider.js"></script>
<script src="js/post_details.js"></script>
<script src="js/nav.js"></script>
<script src="js/likes.js"></script>
<script src="js/comments.js"></script>
<script src="js/tutorial.js"></script>
<script src="js/ajax_search.js"></script>
<script src="js/tutorialviewpag.js"></script>
<script src="js/tutorialviewpagprev.js"></script>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/topography.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/animate.css">


</head>

<body class="">

<div class="intropage">
<div class="intro animated fadeInDownBig">
<div class="lite ib  animated fadeInLeft">Litecode</div>
<div class=" ib fadeInRight animated "> Hub</div>
<div class="sign ib"><sub class="cccode animated flash"> < /></sub></div>
</div>

</div>

<div class="container web bg-light none">

<div class="row ">
<div class="headfixed col-md-12">
<div class="row">
<div class="col-md-4">
<span class="name rhomenav animated fadeInLeft">Litecode Hub<sub class="code animated flash"> < /></sub></span>
<img src="icon/m.svg" alt="" class="menuicon responsive menuu animated headShake"> 
<img src="icon/arrow-right.svg" alt="" class="back menuicon responsive resnone animated headShake">

</span>

<!--<span class="app bg-dark text-light responsive">Join Forum</span>-->

</div>
<div class="col-md-5">
<span class="navcont desktop">
<span class="navs homenav n1" style="color:orange">Home</span>
<span class="navs coursenav n2">Tutorials</span>
<span class="navs n4 projectnav">Projects</span>
<span class="navs n3 aboutnav">About</span>
<span class="navs n5"><a href="http://www.echelontech.com.ng#projects" target="_blank">Enterprise</span></a>
</span>
</div>
<div class="col-md-3 desktop">
<img src="icon/search.svg" alt="" class="searchicon desktop"> 

</div>

</div>
</div>
</div><br>

<table class="table table-responsive-sm navtable resnone"  style="border-top:0px">
<tr><td class="html htmlnav"> <span class="navscat ">HTML</span></td>
<td class="css cssnav"><span class="navscat css cssnav">CSS</span></td>
<td class="js jsnav"><span class="navscat js jsnav">Javascript</span></td>
<td class="php"><span class="navscat php">PHP</span></td>
<td class="sql"><span class="navscat sql">SQL</span></td>
<td><span class="navscat">Python</span></td>
<!--<td><span class="navscat">Ruby</span></td>
<td><span class="navscat">C++</span></td>
<td><span class="navscat">Kotlin</span></td> -->

</tr>
</table>

<br>
<br>

<!--colum 8-->
<br>
<div class="row r1">
<div class="col-md-8">
<br>
<div class="row">
<div class="slide_cont" id="slide_cont">
<img src="img/s1.jpg" alt="slide  img " class="slideimg" id="slider">
</div>
</div>
<!--Absolute write up-->
<div class="writeup">
<span  id="writeup" class="mainwrite animated fadeInDown">First solve the problem, then write the code.</span>
</div>

<div class="toppag">
<span class="pagt pt1"></span>
<span class="pagt pt2"></span>
<span class="pagt pt3"></span>
<span class="pagt pt4"></span>
</div>

<!--dynamic area for post-->
<div class="page1 home" id="page1">
<?php     include_once "php/home.php"; ?>

<div class="pagnition">
<span class="pags pag1">1</span>
<span class="pags">2</span>
<span class="pags">3</span>
<span class="pags">4</span>
</div>

</div>

<!--page 2 html outline-->
<div class="page2 htmlpage page hide" id="page2"><span class="course_name hide">HTML</span><br>
<h5 class="header">HTML Course outline</h5>
<hr>
<span class="outlines"><b class="nubering">1</b>. Introduction to HTML</span>
<span class="outlines"><b class="nubering">2</b>. HTML Structure</span>
<span class="outlines"><b class="nubering">3</b>. HTML Tags</span>
<span class="outlines"><b class="nubering">4</b>. HTML Attributes</span>
<span class="outlines"><b class="nubering">5</b>. HTML Conatiners</span>
<span class="outlines"><b class="nubering">6</b>. HTML Special Tags</span>
<span class="outlines"><b class="nubering">7</b>. HTML Style</span>
<span class="outlines"><b class="nubering">8</b>. HTML Table</span>
<span class="outlines"><b class="nubering">9</b>. HTML Image</span>
<span class="outlines"><b class="nubering">10</b>. HTML Form</span>
<span class="outlines"><b class="nubering">11</b>. HTML Video</span>


</div>

<!--page 3 css outline-->

<div class="page3 csspage page hide" id="page3"><span class="course_name hide">CSS</span><br>
<h5 class="header">CSS Course outline</h5>
<hr>
<span class="outlines"><b class="nubering">1</b>. Introduction to CSS</span>
<span class="outlines"><b class="nubering">2</b>. Text Formatting</span>
<span class="outlines"><b class="nubering">3</b>. CSS Colors</span>
<span class="outlines"><b class="nubering">4</b>. CSS Images</span>
<span class="outlines"><b class="nubering">5</b>. CSS Background Images</span>
<span class="outlines"><b class="nubering">6</b>. CSS Borders</span>
<span class="outlines"><b class="nubering">7</b>. CSS Width and height</span>
<span class="outlines"><b class="nubering">8</b>. CSS Grid system</span>
<span class="outlines"><b class="nubering">9</b>. Element Positioning</span>
<span class="outlines"><b class="nubering">10</b>. Animations and Transitions</span>
<span class="outlines"><b class="nubering">11</b>. Responsive Designing(Media Queries)</span>



</div>

<!--page 4 Js outline-->
<div class="page4 jspage page hide" id="page4"><span class="course_name hide">JavaScript</span><br>
<h5 class="header">Javascript Course outline</h5>
<hr>
<span class="outlines"><b class="nubering">1</b>. Introduction to Javascript</span>
<span class="outlines"><b class="nubering">2</b>. Javascript Variable</span>
<span class="outlines"><b class="nubering">3</b>. Javascript Conditionals</span>
<span class="outlines"><b class="nubering">4</b>. Javascript Operators</span>
<span class="outlines"><b class="nubering">5</b>. Javascript Loop</span>
<span class="outlines"><b class="nubering">6</b>. Javascript Array</span>
<span class="outlines"><b class="nubering">7</b>. Javascript Object</span>
<span class="outlines"><b class="nubering">8</b>. Javascript Function</span>
<span class="outlines"><b class="nubering">9</b>. Javascript DOM</span>
<span class="outlines"><b class="nubering">10</b>. Javascript Events</span>
<span class="outlines"><b class="nubering">11</b>.   Javascript Libries and Frameworks </span>



</div>

<!--page 5 php outline-->
<div class="page5 php" id="page5">
</div>

<!--page 6 sql outline-->
<div class="page6 sql" id="page6">
</div>


<!--page  outline-->
<div class="page8 courseviwer page hide" id="page8">
<div class="tutmaincont"></div>
<div class="tutorialnav">
<span class="tutnav tleft bg-light">Prev</span>
<span class="tutnav tright bg-light">Next</span>
</div>
</div>

<!--page  outline-->
<div class="page9 comming_soon " id="page">
</div>


<!--page Search result outline-->
<div class="page7 Searchresult hide page" id="Searchresultpage">
<h4 class="center"> Search results</h4><br><hr>
</div>



<div class="page10 aboutpage" id="aboutpage">
<div class="phead">About Litecode Hub</div>
<div class="pbody">
Litecode is a platform set out to enlighten developers on some, delicate topics in programming.
litecode comprises of developers from different spheres of programming, we are here to help
through; our blogs,tutorials also our project ideas.Any post you see here is subject to review, we don't assure 100%
accuracy our posts are open to correction. Our assurnace here in Litecodes is that
you will always get the tips you needed in development
<br>
<!---<span><b>Admins</b></span><br>
Ukonu George - <b>Fullstack Web Developer</b><br>
Ezeh Jane - <b>FrontEnd Developer</b><br>
Kenneth Benjamin  - <b>Moblie Application Developer</b><br>-->

</div>
</div>

<div class="page11 Project" id="projectpage">
<!-- beginner intermedite pro-->
<!--<div class="pojmenurow desktop">
<span class="projmenus">Beginner</span>
<span class="projmenus">Intermediate</span>
<span class="projmenus">Advanced</span>
</div>-->

<div class="project1 beginner">
<span class="projecthead">Beginner projects[HTML,CSS]</span>
<ol class="list">
<li class="listitem">One page layout</li>
<li class="listitem">Clock</li>
<li class="listitem">Google home page look alike</li>
<li class="listitem">Count down timer</li>
<li class="listitem">Calculator</li>
<li class="listitem">Unit coverter</li>

</ol>


</div>
<div class="project2 inter">
<span class="projecthead">Intermediate projects  [HTML,CSS,JavaScript]</span>
<ol class="list">
<li class="listitem">User login with authentication</li>
<li class="listitem">Todo list</li>
<li class="listitem">Survey form(Quiz web app)</li>
<li class="listitem">File Downloader</li>
<li class="listitem">Slide show</li>
<li class="listitem">RegEx query</li>

</ol>

</div>
<div class="project3 advanced">
<span class="projecthead">Advanced projects [HTML,CSS,JavaScript,SQL,PHP]</span>
<ol class="list">
<li class="listitem">Online Blog</li>
<li class="listitem">Ewallet web app</li>
<li class="listitem">Password generator</li>
<li class="listitem">Chatbot</li>
<li class="listitem">Web board(forum for you and your friends)</li>
<li class="listitem">Chat application</li>

</ol>

</div>


</div>

















<!--Post full body with comment-->
<div class="postsfullbody hide" id="postsfullbody">
<!--Append full story-->
<div class="commentcont">
<h5>Comment</h5>   
<form  method="POST">
<input type="text" name="name" id="name" class="inputs" placeholder="Your Name"><br>
<input type="email" name="email" id="email" class="inputs" placeholder="Your  Email"><br>
<textarea name="comment" id="comment"></textarea>
<input type="button" class="sendcomment" name="comment_send" value="comment" id="sendcomment">
</form>
</div>   
</div>
<!--col 8 end ---></div>

<!--colum 4 mostly side plugins-->
<div class="col-md-4 left ">
<!--search plugin--><br>
<div class="searchcont resnone">
<input type="search" name="search" class="search" id="searchin" placeholder="search keyword">
<input type="submit" name="searchsub" value="search" id="searchsub" class="searchsub">
</div>
<!--Cat plugin
<div class="categories bg-light desktop plugins">
<h5 class="text-dark t">Categories</h5>
<span class="cats"><img src="icon/circle.svg" class="ssimg"> Web development</span>
<span class="cats"><img src="icon/circle.svg" class="ssimg">Javascript development</span>
<span class="cats"><img src="icon/circle.svg" class="ssimg"> PHP development</span>
<span class="cats"><img src="icon/circle.svg" class="ssimg"> HTML development</span>
<span class="cats"><img src="icon/circle.svg" class="ssimg"> CSS development</span>
</div>-->


<!--Author  plugin-->
<div class="Aboutme plugins">
<h5 class=" t">About me</h5>
<div class="about">
<img src="img/admin.jpg" class="admin"><br>
Ukonu George is a passionate website and mobile app developer, 
based on fullstack web development.I derive pleasure in teaching programming. 
</div>
</div>
<br>


<div class="plugins followbody">
<span class="followh t">follow us on</span><br>
<div class="follow">
<img src="icon/facebook.svg" class="ffollowimg fb" title="our facebookpage">
<img src="icon/whatsapp.svg" class="ffollowimg whatsapp" title="Join our whatsapp now">
<img src="icon/youtube.svg" class="ffollowimg yt" title="our Youtube">
<img src="icon/twitter.svg" class="ffollowimg twitter" title="our twitter fan page">
</div>
</div>


<div class="popular plugins">
<h5 class=" t">Popular posts</h5>
<?php     include_once "php/popularpost.php"; ?>
</div>

<!--page  outline-->
<div class="suggest search_hanger" id="suggest">
</div>

<!--foot nav-->
<div class="footnavs">
<span class="navs navf">Write for us now</span>
<!--<span class="navs navf aboutnav">About</span>
<span class="navs navf projectnav">Projects</span>-->
<span class="navs navf"><a href="http://www.echelontech.com.ng#projects" target="_blank">Enterprise</a></span>

</div>


</div>






<div class="footer  text-light">
<div class="footername"><span class="fname ">Litecode Hub</span></div>
<div class="talk">Any post you see here is subject to review, we dont assure 100%
accuracy our posts are open to correcttion.<br>Our assurnace here in Litcodes is that
you will always get the tips you needed in development. </div>
</div>




<a href="#">  <img src="icon/up.png" alt="go up" class="upnav responsive"></a>

<!-- absolute menu-->
<div class="responsive menubody">
<div class="mainnav1">
<span class="resmmenu homenav rn1" style="color:orange"> <img src="icon/h.svg" alt="" class="resmmenuicon"> Home</span>
<span class="resmmenu projectnav rn4"> <img src="icon/book.svg" alt="" class="resmmenuicon"> Projects</span>
<span class="resmmenu aboutnav rn3"> <img src="icon/info-circle.svg" alt="" class="resmmenuicon"> About</span>
</div>
<br>
<div class="mainnav1">
<span class="tuthead"><b>Tutorial Courses</b> <sub class="code"> < /></sub></span>  
<hr>
<span class="tutcourses html">HTML</span>
<span class="tutcourses css">CSS</span>
<span class="tutcourses js">Java Script</span>
<span class="tutcourses">PHP</span>
<span class="tutcourses">SQL</span>
<span class="tutcourses">Python</span>
<span class="tutcourses">Flutter</span>

<BR>

<div class="follow">
<span class="" style="fontsize:12px;color:orange;margin-bottom:5px;display:inline-block;">follow us on</span><br>

<img src="icon/facebook.svg" class="ffollowimg fb fimgresm" title="our facebookpage">
<img src="icon/whatsapp.svg" class="ffollowimg whatsapp fimgresm" title="Join our whatsapp now">
<img src="icon/youtube.svg" class="ffollowimg yt fimgresm" title="our Youtube">
<img src="icon/twitter.svg" class="ffollowimg twitter fimgresm" title="our twitter fan page">
</div>

</div>


</div>

</div>
</body>
</html>

