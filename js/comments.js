$(document).ready(function(){
var y = document.getElementsByClassName("sendcomment")
for(var a = 0; a < y.length; a++){
    y[a].onclick = getidincomment;
  }
  function getidincomment(eventObj){
var E= eventObj.target
const parent= E.parentNode;
const parent2= parent.parentNode;
const parent3= parent2.parentNode;
const fchild = parent3.firstChild
const lchild = fchild.children[3]
const lchild2 = lchild.lastChild

console.log(lchild2.value)
var postid = lchild2.value

var name = document.getElementById("name").value
var email = document.getElementById("email").value
var comment = document.getElementById("comment").value
console.log(name)
console.log(email)
console.log(comment)
detailobj= {
    name :name,
    email : email,
    comment :comment,
    commentid : postid}

var  details= JSON.stringify(detailobj)

const xhrr = new XMLHttpRequest()
xhrr.open('GET','php/comment.php?z='+ details,true)

xhrr.onload = function(){
    if(this.status==200 && this.readyState == 4){
        alert(this.responseText);
        console.log(this.responseText)
    }}
xhrr.send()
}




})