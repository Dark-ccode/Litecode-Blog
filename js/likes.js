$(document).ready(function(){
var like = 0;
 
var z = document.getElementsByClassName("likes")
for(var a = 0; a < z.length; a++){
    z[a].onclick = getid ;
  }
  

  function getid(eventObj){
var E= eventObj.target
const parent= E.parentNode;
const parent2= parent.parentNode;
const lchild = parent2.lastChild
const lchild2 = parent.lastChild

//lchild2.style="background-color:red;"

var id = lchild.value
var no_of_likes = lchild2
console.log(id)
//using it
var obj = {y:id} 
var xx = JSON.stringify(obj)

like = like + 1; 

if(like == 1){
$(".likes").css("opacity","0.8")
console.log("liked")
console.log(like)
}
else if(like == 2){
    like = 0;
    $(".likes").css("opacity","1")
    console.log("unliked")
    console.log(like)
}

const xhr = new XMLHttpRequest()
xhr.open('GET','php/likes.php?x='+ xx ,true)

xhr.onload = function(){
    if(this.status==200 && this.readyState == 4){
no_of_likes.innerHTML = this.responseText
        console.log(this.responseText)
    }}
xhr.send()
}

})