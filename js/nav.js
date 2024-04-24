$(document).ready(function(){
/* $(".comments").click(function(){
$(".commentedcont").toggle()
})   */        
//main menu nav goes here
$(".plugins").toggleClass("animated fadeInDown");

function hideloader(){ $(".intropage").hide()}

function showpage(){ $(".web").show()}
setInterval(hideloader,8000)
setInterval(showpage,8100)



$(".post").click(function(){
$(".cat").toggleClass("animated headShake");
})

$(".searchicon").click(function(){
$(".searchcont").toggleClass("animated shake");
$(".searchicon").toggleClass("animated bounce");
var s = document.getElementById("searchin").focus
})

$(".navs").toggleClass("animated fadeInLeft");
$(".upnav").toggleClass("animated fadeInRight");
$(".outlines").toggleClass("animated fadeInDown");
//$(".nubering").toggleClass("animated fadeInLeft");
$(".project1,.project2,.project3").toggleClass("animated fadeInDown");

$(".projecthead").toggleClass("animated fadeInLeft");





$(".menuu").click(function(){

$(".resmmenu").toggleClass("animated fadeInDown");
$(".tutcourses").toggleClass("animated fadeInDown");
$(".follow").toggleClass("animated fadeInUp");

})

   







$(".coursenav").click(function(){
$(".navtable,.page2").show()
$(".page5,#page1,.page8,.postsfullbody,.slide_cont,.writeup,.page10,.page11,#Searchresultpage,.toppag").hide()
$(".n2").css("color","orange")
$(".n1,.n3,.n4").css("color","black")
$(".r1").css("margin-top","-100px")
})

$(".tutcourses,.resmmenu").click(function(){
$(".menubody,.back").hide()
$(".menuu").show()
})


//sub menu nav for courses
$(".homenav").click(function(){
$("#page1,.readmore,.slide_cont,.writeup,.toppag").show()
$(".page2,.page3,.page4,.page5,#page8,.navtable,.postsfullbody,.commentedcont,#Searchresultpage,.page10,.page11,.menubody").hide()
$(".n1,.rn1").css("color","orange")
$(".n2,.n3,.n4").css("color","black")
$(".rn3,.rn4").css("color","black")

$(".post_body").css("margin-top","4px")
$(".r1").css("margin-top","-30px")
$(".post_body").css("overflow","hidden").css("height","50px").css("margin-top","5px").css("margin-bottom","8px")

})


$(".aboutnav").click(function(){
$(".page10,.readmore,.slide_cont,.writeup,.toppag").show()
$(".page2,.page1,.page3,.page4,.page5,#page8,.page11,.navtable,.postsfullbody,.commentedcont,#Searchresultpage,.menubody").hide()
$(".n3,.rn3").css("color","orange")
$(".n2,.n1,.n4,.rn2").css("color","black")
$(".rn4,.rn1").css("color","black")
$(".post_body").css("margin-top","4px")
$(".r1").css("margin-top","-30px")
$(".post_body").css("overflow","hidden").css("height","50px").css("margin-top","5px").css("margin-bottom","8px")

})

$(".projectnav").click(function(){
$(".page11").show()
$(".page2,.page1,.page3,.page4,.page5,#page8,.page10,.navtable,.slide_cont,.toppag,.writeup,.postsfullbody,.commentedcont,#Searchresultpage,.menubody").hide()
$(".n4,.rn4").css("color","orange")
$(".n2,.n1,.n3").css("color","black")
$(".rn3,.rn1").css("color","black")

$(".post_body").css("margin-top","4px")
$(".r1").css("margin-top","-30px")
$(".post_body").css("overflow","hidden").css("height","50px").css("margin-top","5px").css("margin-bottom","8px")

})




$(".outlines").click(function(){
$("#page8").show()
$("#page1,.page2,.page3,.page4,.page5,.page7,.postsfullbody,.commentedcont,.slide_cont,.writeup,.project,.page10,.toppag").hide()
})



$(".rhomenav").click(function(){
$("#page1,.readmore,.slide_cont,.toppag").show()
$(".page2,.page3,.page4,.page5,.page7,#page8,.page10,.postsfullbody,.commentedcont,.page11,.menubody").hide()
$(".name").css("color","black")
$(".post_body").css("overflow","hidden").css("height","50px").css("margin-top","5px").css("margin-bottom","8px")

})




$(".html").click(function(){
$(".page2").show()
$(".page1,.page3,.page4,.page5,.page7,#page8,.page10,.postsfullbody,.slide_cont,.writeup,.page11,.menubody,.toppag").hide()
$(".htmlnav").css("background-color","#343a40").css("color","white")
$(".cssnav,.jsnav,.php,.sqlnav").css("background-color","transparent").css("color","black")
})

$(".css").click(function(){
$(".page3").show()
$(".page1,.page2,.page4,.page5,.page7,#page8,.page10,.postsfullbody,.slide_cont,.writeup,.writeup,.page11,.menubody,.toppag").hide()
$(".cssnav").css("background-color","#343a40").css("color","white")
$(".htmlnav,.jsnav,.php,.sql").css("background-color","transparent").css("color","black")
})


$(".js").click(function(){
$(".page4").show()
$(".page1,.page2,.page3,.page5,.page7,#page8,.page10,.postsfullbody,.slide_cont,.writeup,.writeup,.page11,.menubody,.toppag").hide()
$(".jsnav").css("background-color","#343a40").css("color","white")
$(".htmlnav,.cssnav,.php,.sql").css("background-color","transparent").css("color","black")
})


$(".menuu").click(function(){
$(".menubody,.back").show()
$(".menuu").hide()
})

$(".back").click(function(){
$(".menubody,.back").hide()
$(".menuu").show()

})


})

