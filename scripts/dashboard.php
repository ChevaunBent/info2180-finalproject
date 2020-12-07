<?php
session_start();
//Check if that session is true, else redirect to the login page  
 if(($_SESSION['loggedIn'])){
   $host = 'localhost';
   $dbname = 'BugMe';
   $DBusername = 'info2180';
   $DBpassword = '2020Sem1';
    //allow
    try {
      $conn = new PDO("mysql:host=$host;dbname=$dbname", $DBusername, $DBpassword);
      echo"<br>";
  } catch (PDOException $pe) {
      die("Could not connect to the database $dbname :" . $pe->getMessage());
  }
  $checkifexists = ("SELECT * FROM IssuesTables");
  $stmt = $conn->query($checkifexists);
  $results = $stmt ->fetchALL(PDO ::FETCH_ASSOC);
  if(!empty($results)){
  }
      $string =  '<!DOCTYPE html>'.
    '<html lang="en">'.
    '<head>'.
    '   <meta charset="UTF-8">'.
    '   <meta name="viewport" content="width=device-width, initial-scale=1.0">'.
    '   <link rel="stylesheet" type="text/css" href="http://localhost:8080/info2180-finalproject/styles/dashstyles.css" />'.
    '   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>'.
    '   <script src="http://localhost:8080/info2180-finalproject/scripts/dashjavascript.js" type="text/javascript"></script>'.
    '   <title>Dashboard</title>'.
    '</head>'.
    '<body >'.
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
    '               <div id="topdiv">'.
    '                   <H1>Issues</H1>'.
    '               </div>'.
    '               <div id="resdiv">'.
    '                   <table>'.
    '                       <thead>'.
    '                           <tr>'.
    '                               <th class="c1">Title</th><th class="c2">Type</th><th class="c3">Status</th><th class="c4">Assigned to</th><th class="c5">Created</th>'.
    '                           </tr>'.
    '                       </thead>';
    $print =                '<tbody>';
                              foreach($results as $items){  
                                $asgn = $items['assigned_to'];
                                $checkifexists = ("SELECT firstname, lastname FROM UsersTable WHERE id = '$asgn' ");
                                $stmt = $conn->query($checkifexists);
                                $results2 = $stmt ->fetchALL(PDO ::FETCH_ASSOC);
                                foreach($results2 as $items2){$res = $items2['firstname']." ".$items2['lastname'];}
                                  $print.= '<tr><td class="c1">'.$items['title'].'</td><td class="c2">'.$items['type'].'</td><td class="c3">'
                                          .$items['status'].'</td><td class="c4">'.$res.'</td><td class="c5">'.$items['created'].'</td></tr>';
                              }
    $printcontd = 
    '                       </tbody>'.
    '                  </table>'.
    '               </div>'.
    '               <div id="userdiv">Logged in as: '.$_SESSION['user']. '</div>'.
    '           </main>'.
    '       </nav>'.
    '   </div>'.
    '</body>'.
    '</html>';
 echo $string; 
 echo $print;
 echo $printcontd;
 $conn = null;//closes connection
 }else{
          //redirect to the login page
          header('Location: http://localhost:8080/info2180-finalproject/index.html');
          exit;
 }
 


?>