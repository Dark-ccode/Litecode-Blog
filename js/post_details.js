$(document).ready(function(){
//var fullbody = document.getElementById("postsfullbody")
//important snippet
    function showfullbody(){
        z = $(".readmore")
       for(var a = 0; a < z.length; a++){
         z[a].onclick =change_details ;
       }}
       
    function change_details(eventObj){
        $("#postsfullbody,.post_body").show()
      $(".page1,.page2,.page3,.page4,.page5,.readmore,.slide_cont,.writeup").hide()
      //$("#postsfullbody").css("margin-top","40px")
      $(".post_body").css("margin-top","20px").css("margin-bottom","20px").css("overflow","visible").css("height","auto")
      $(".commentedcont").toggle()
      
    var E= eventObj.target
    const testdetails= E.parentNode
    const testcont = testdetails.parentNode


//using it

$("#postsfullbody").prepend(testcont);



console.log(testdetails)
 console.log(testcont)

      
    }
    showfullbody()



})
