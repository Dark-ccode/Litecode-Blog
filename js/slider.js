window.addEventListener('load',start)
var K = 0;
    var animationright = () => {
    var bg = document.getElementById("slider")
    var write = document.getElementById("writeup")
K++
if(K==1){
    bg.src="img/s2.jpg";
    write.innerHTML="Simplicity is the soul of efficiency,think twice code once.";
$(".mainwrite").addClass("fadeInLeft");
$(".mainwrite").removeClass("fadeInUp");
$(".mainwrite").removeClass("fadeInDown");
$(".mainwrite").removeClass("flash");
$(".pt2").css("background-color","orange");
$(".pt1,.pt3,.pt4").css("background-color","transparent");
$(".pagt").addClass("animated");

$(".pt2").addClass("flash");
$(".pt1,.pt3,.pt4").removeClass("flash");

    }
    
else if(K==2){
    bg.src="img/s4.jpg";
    write.innerHTML="First solve the problem,then write the code."
$(".mainwrite").toggleClass("flash");
$(".mainwrite").removeClass("fadeInUp fadeInLeft fadeInDown");
$(".pt3").css("background-color","orange");
$(".pt1,.pt2,.pt4").css("background-color","transparent");
$(".pt3").addClass("flash");
$(".pt2,.pt1,.pt4").removeClass("flash");

  }

else if(K==3){
    bg.src="img/s5.jpg";
    write.innerHTML="Programming is the art where creativity meets logic."
    $(".mainwrite").toggleClass("fadeInUp");
$(".mainwrite").removeClass("fadeInLeft fadeInDown flash");

$(".pt4").css("background-color","orange");
$(".pt2,.pt3,.pt1").css("background-color","transparent");
$(".pt4").addClass("flash");
$(".pt2,.pt3,.pt1").removeClass("flash");


} 



else if(K==4){
    bg.src="img/s1.jpg";
    write.innerHTML="First solve the problem, then write the code."
    $(".mainwrite").toggleClass("fadeInDown");
$(".mainwrite").removeClass("fadeInLeft fadeInUp flash");

$(".pt1").css("background-color","orange");
$(".pt2,.pt3,.pt4").css("background-color","transparent");
$(".pt1").addClass("flash");
$(".pt2,.pt3,.pt4").removeClass("flash");

     K=0;

} 


}

var start = setInterval(animationright,6000)


