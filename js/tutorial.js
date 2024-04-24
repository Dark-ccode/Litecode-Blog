$(document).ready(function(){
    
    //function liker(){ 
    var z = document.getElementsByClassName("outlines")
    for(var a = 0; a < z.length; a++){
        z[a].onclick = tutorialid ;
      }
      
    
      function tutorialid(eventObj){
    var E= eventObj.target
    const main= E.firstChild;
    //---for name
    const parent= E.parentNode;
    const name= parent.firstChild;
    
    var id = main.innerHTML
    var tutname = name.innerHTML

    console.log(id)
    console.log(tutname)
    //using it
    var obj = {tutorialid:id,coursename:tutname} 
    var xxobj = JSON.stringify(obj)
    

const xhr = new XMLHttpRequest()
xhr.open('GET','php/tutorialview.php?y='+ xxobj,true)

xhr.onload = function(){
    if(this.status==200 && this.readyState == 4){
$(".tutmaincont").html(this.responseText);
       // console.log(this.responseText)
}}
xhr.send()
}
})