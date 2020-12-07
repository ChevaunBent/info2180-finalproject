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
'   <link rel="stylesheet" type="text/css" href="http://localhost:8080/info2180-finalproject/styles/issuestyles.css" />'.
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
'   <form id="createissue">'.
'		<div id="fields">'.
'           <h1> Create Issue </h1>'.
'            <br><label for="title">Title</label></br>'.
'            <input type="text" name="title" id="title"/><br>'.
'            <label for="description">Description</label><br>'.
'			<input type="text" name="description" id="description"/> <br>'.			
'			<label for="assignedto">Assigned To</label><br>'.
'           <select id="assignedto" name="assignedto"><br>'.
'				<option value="marcia">Marcia Brady</option>'.
'				<option value="shen">Shenor Anglin</option>'.
'			</select>'.
'			<label for="Type">Type</label><br>'.
'			<select id="Type" name="Type"><br>'.
'				<option value="bug">Bug</option>'.
'				<option value="enhancement">Enhancement</option>'.
'				<option value="newfeature">New Feature</option>'.
'			</select>'.
'			<label for="priority">Priority</label><br>'.
'			<select id="priority" name="priority"><br>'.
'				<option value="major">Major</option>'.
'				<option value="intermediate">Intermediate</option>'.
'				<option value="minor">Minor</option>'.
'			</select>'.
'            <div id="subdiv">'.
'                <input type="submit" name="subbut" id="subbut" onclick="return Validate(createissue);" value="Submit" />'.
'            </div>'.
'            <input type="hidden" name="submitted" id="submitted" value="1" />'.
'		</div>'.
'    </form>'.
'</main>'.
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
          header('Location: http://localhost:8080/info2180-finalproject/newissue.php');
          exit;
 }
 


?>