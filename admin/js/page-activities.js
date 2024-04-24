    $(document).ready(function(){
$(".pm").click(function(){
$(".postsubm").toggle()
$(".usersubm").hide()
$(".pm").css("background-color","rgba(13, 51, 100, 0.747)").css("color","white")
 $(".med,.um,.custcare,.dsh,.postformnav,.usersub").css("background-color","transparent").css("color","black")
 
})
$(".um").click(function(){
    $(".usersubm").toggle()
    $(".postsubm ").hide()
    $(".um").css("background-color","rgba(13, 51, 100, 0.747)").css("color","white")
    $(".med,.pm,.custcare,.dsh,.postformnav,.usersub").css("background-color","transparent").css("color","black")
   
    })

//for navigations

$(".dashnav").click(function(){
    $("#page1").show()
 $("#page2,#page3,#page4,#page5,#page6,.usersubm,.postsubm,#page8,#page7").hide()
 $(".dsh").css("background-color","rgba(13, 51, 100, 0.747)").css("color","white")
 $(".med,.um,.usersub,.custcare,.pm").css("background-color","transparent").css("color","black")})


 $(".postformnav").click(function(){
    $("#page2").show()
 $("#page1,#page3,#page4,#page5,#page6,#page8,#page7").hide()
 $(".postformnav").css("background-color","rgba(13, 51, 100, 0.747)").css("color","white")
 $(".med,.um,.custcare,.dsh,.viewpostnav").css("background-color","transparent").css("color","black")})

 $(".viewpostnav").click(function(){
    $("#page3").show()
 $("#page1,#page2,#page4,#page5,#page6,#page8,#page7").hide()
 $(".viewpostnav").css("background-color","rgba(13, 51, 100, 0.747)").css("color","white")
 $(".med,.um,.custcare,.dsh,.postformnav").css("background-color","transparent").css("color","black")})

 $(".adminformnav").click(function(){
    $("#page4").show()
 $("#page1,#page3,#page2,#page5,#page6,#page8,#page7").hide()
 $(".postsubm").hide(200)

 $(".adminformnav").css("background-color","rgba(13, 51, 100, 0.747)").css("color","white")
 $(".med,.custcare,.pm,.dsh,.viewadminnav").css("background-color","transparent").css("color","black")})


 $(".viewadminnav").click(function(){
    $("#page5").show()
 $("#page1,#page3,#page4,#page2,#page6,#page8,#page7").hide()
 $(".viewadminnav").css("background-color","rgba(13, 51, 100, 0.747)").css("color","white")
 $(".med,.custcare,.pm,.dsh,.adminformnav").css("background-color","transparent").css("color","black")})



 $(".medianav").click(function(){
    $("#page6").show()
 $("#page1,#page2,#page4,#page3,#page5,.usersubm,.postsubm,#page7,#page8").hide()
 $(".med").css("background-color","rgba(13, 51, 100, 0.747)").css("color","white")
 $(".um,.custcare,.pm,.dsh,.usersub").css("background-color","transparent").css("color","black")})

 $(".profile").click(function(){
    $("#page7").show()
 $("#page1,#page2,#page4,#page3,#page5,#page6,#page8,.usersubm,.postsubm").hide()
 //$(".med").css("background-color","rgba(13, 51, 100, 0.747)").css("color","white")
 //$(".um,.custcare,.pm,.dsh,.usersub").css("background-color","transparent").css("color","black")
})


 $(".editt").click(function(){
    $("#page8").show()
 $("#page1,#page2,#page4,#page3,#page5,#page6,#page7,.usersubm,.postsubm").hide()
 //$(".med").css("background-color","rgba(13, 51, 100, 0.747)").css("color","white")
 //$(".um,.custcare,.pm,.dsh,.u.imagesersub").css("background-color","transparent").css("color","black")
})



//minor
$(".iimage").click(function(){
   $(".imagepage").show()
   $(".videopage").hide()
 $(".iimage").css("background-color","#17a2b8").css("color","white")
 $(".aaudio,.vvideo").css("background-color","transparent").css("color","black")


})

   $(".vvideo").click(function(){
      $(".videopage").show()
      $(".imagepage").hide()
      $(".vvideo").css("background-color","#17a2b8").css("color","white")
      $(".iimage,.aaudio").css("background-color","transparent").css("color","black")
      })
})
      //  $(document).scroll(function(){$(".leftnav").hide()})
 
