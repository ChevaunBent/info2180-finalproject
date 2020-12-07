$(document).ready(function()  
{  
     var p1 = "<h2>About Company</h2><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>";  
     var p2 = "<h2>Our Products</h2><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>";  
     var p3 = "<h2>Our Services</h2><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>";  
     $("#home").click(function()  
     {  
         $("http://localhost:8080/info2180-finalproject/scripts/dashboard.php").load("http://localhost:8080/info2180-finalproject/scripts/dashboard.php");
         return false;  
     });  
     $("#user").click(function() {  
         $("http://localhost:8080/info2180-finalproject/scripts/adduser.php").load("http://localhost:8080/info2180-finalproject/scripts/adduser.php");
         return false;  
     });  
     $("#issue").click(function() {  
         $("http://localhost:8080/info2180-finalproject/scripts/newissue.php").load("http://localhost:8080/info2180-finalproject/scripts/newissue.php"); 
         return false; 
     });  
 });