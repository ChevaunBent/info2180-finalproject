<?php
session_start();
//Check if that session is true, else redirect to the login page  
 if(($_SESSION['loggedIn'])){
    //allow
    
$string =  '<!DOCTYPE html>'.
'<html lang="en">'.
'<head>'.
'   <meta charset="UTF-8">'.
'   <meta name="viewport" content="width=device-width, initial-scale=1.0">'.
'   <link rel="stylesheet" type="text/css" href="http://localhost:8080/info2180-finalproject/styles/userstyles.css" />'.
'   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>'.
'   <script src="http://localhost:8080/info2180-finalproject/scripts/dashjavascript.js" type="text/javascript"></script>'.
'   <title>Newuser</title>'.
'</head>'.
'<body>'.
'   <div class="grid-container">'.
'       <header>'.
'           <ul>'.
'               <li id="header">'.
'                   BugMe Issue Tracker'.
'               </li>'.
'           </ul>'.
'       </header>'.
'       <nav>'.
'           <ul>'.
'               <li id="home"><a href="dashboard.php">Home</a></li>'.
'               <li id="user"><a href="adduser.php">Add User</a></li>'.
'               <li id="issue"><a href="newissue.php">New Issue</a></li>'.
'               <li id="logout"><a href="logout.php">Logout</a></li>'.
'           </ul>'.
'           <main id="display">'.
'               <form id="newuser">'.
'		            <div id="fields">'.
'                       <h1> New User </h1>'.
'                       <br><label for="fname">Firstname</label></br>'.
'                       <input type="text" name="fname" id="fname"/><br>'.
'                       <label for="lname">Lastname</label><br>'.
'			            <input type ="text" name="lname" id="lname"/> <br>'.			
'			            <label for="password">Password</label><br>'.
'                       <input type="password" name="password" id="password" /><br>'.
'			            <label for="email">Email</label><br>'.
'			            <input type="email" name="email" id="email"/><br>'.			
'                   <div id="subdiv">'.
'                       <input type="submit" name="subbut" id="subbut" onclick="return Validate(newuser);" value="Submit" />'.
'                   </div>'.
'                       <input type="hidden" name="submitted" id="submitted" value="1" />'.
'		            </div>'.
'               </form>'.
'           </main>'.
    '               </div>'.
    '               <div id="userdiv">Logged in as: '.$_SESSION['user']. '</div>'.
    '           </main>'.
'       </nav>'.
'   </div>'.
'</body>'.
'</html>';
 echo $string; 
 }else{
          //redirect to the login page
          header('Location: http://localhost:8080/info2180-finalproject/adduser.php');
          exit;
 }
 


?>