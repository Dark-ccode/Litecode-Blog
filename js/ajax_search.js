$(document).ready(function(){
function search() {
var str =document.getElementById("searchin").value
if(str==""){
document.getElementById("suggest").innerHTML = "no search result";
//("no search result")
return str;}

else {
console.log(str)
const xhr = new XMLHttpRequest()
xhr.open('GET','php/search.php?q='+ str,true)

xhr.onload = function(){
    if(this.status==200 && this.readyState == 4){
    $("#suggest").html(this.responseText);
        console.log(this.responseText)
    }}
xhr.send()

}}

$("#searchin").keyup(function(){search() 
    $("#suggest").show()})
$("#searchsub").click(function(){search()
     $("#suggest").show()})

//$("#searchin").focusout(function(){$("#suggest").hide()})
//$(document).scroll(function(){$("#suggest").hide()}
})