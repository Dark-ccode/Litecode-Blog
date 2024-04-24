<?php 
// get the q parameter from URL
$q = $_REQUEST["q"];

if ($q !== ""){ 
$q = strtolower($q);
include_once "connection.php";
$sql = " SELECT * FROM post  WHERE  head  LIKE '%$q%' OR body LIKE '%$q%'";
$output =$connect->query($sql);
if($output->num_rows>0){
while($row=$output->fetch_assoc()){   
    $id = $row['id'];
    $head = $row['head'];
echo '<span class="searchresults"><b class="hide">'.$id.'</b><img src="icon/square.svg" class="sseachimg">'. $head . '</span>' ;

}}
else{
    echo   "no search result in database";
}}
?>
<script>

 var s = document.getElementsByClassName("searchresults")
    for(var b = 0; b < s.length; b++){
        s[b].onclick = getid;
      }
      
    
      function getid(eventObj){
    var E= eventObj.target
    var id= E.firstChild;
    
    var id = id.innerHTML
 console.log(id)

 const xhr = new XMLHttpRequest()
    xhr.open('GET','php/view_search_result.php?q='+ id ,true)
    
    xhr.onload = function(){
        if(this.status==200 && this.readyState == 4){
       var sr =document.getElementById("Searchresultpage")
    sr.innerHTML += this.responseText
            //console.log(this.responseText)
        }}
    xhr.send()
  

var p1 = document.getElementById("page1")
p1.style ="display:none"

var sug = document.getElementById("suggest")
sug.style ="display:none"

var sug = document.getElementById("suggest")
sug.style ="display:none"

var slide = document.getElementById("slide_cont")
slide.style ="display:none"

var write = document.getElementById("writeup")
write.style ="display:none"

var spage = document.getElementById("Searchresultpage")
spage.style ="display:block"


  
      }
</script>