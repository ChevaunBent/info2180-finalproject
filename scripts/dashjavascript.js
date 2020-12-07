$(document).ready(function()  
{  
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