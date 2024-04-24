$(document).ready(function(){

var z = document.getElementsByClassName("tright")
for(var a = 0; a < z.length; a++){
z[a].onclick = tutnext ;
}

function tutnext(eventObj){
var E= eventObj.target
const parent= E.parentNode;
const div= parent.previousElementSibling
const name= div.lastElementChild;
const no= name.previousElementSibling;


console.log(no)
console.log(name)


var id = no.innerHTML
var tname = name.innerHTML

console.log()

var obj = {tutid:id,tutname:tname} 
var xxobj = JSON.stringify(obj)


const xhr = new XMLHttpRequest()
xhr.open('GET','php/tutorialviewpag.php?z='+ xxobj,true)

xhr.onload = function(){
if(this.status==200 && this.readyState == 4){

$(".tutmaincont").html(this.responseText);
// console.log(this.responseText)
}
}
xhr.send()
}})
