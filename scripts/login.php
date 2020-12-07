<?php
session_start();
if( isset( $_POST['subbut'] ) )
{
    $host = 'localhost';
    $dbname = 'BugMe';
    $DBusername = 'info2180';
    $DBpassword = '2020Sem1';
    $password = $_POST['password'];
    $password_digest = md5($password);

    
    if(empty($_POST['username'])|| empty($_POST['password']))
    {
        die("User Name or Password was empty, please to go back and try again");//resolve using javascript
        return false;
    }

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $DBusername, $DBpassword);
        echo "Connected to $dbname at $host successfully.";
        echo"<br>";
    } catch (PDOException $pe) {
        die("Could not connect to the database $dbname :" . $pe->getMessage());
    }
            // Validate username, checks for empty username and checks if exists in database
    if(empty(trim($_POST["username"]))){
            $user_err = "Empty Username";
            echo($user_err. " Error");
    } else if(empty(trim($_POST["password"]))){//Validates password
        $pass_err = "Empty Password.";
        echo($pass_err. " Error");     
    } else if(strlen(trim($_POST["password"])) < 8){
        $pass_err = "Password length";
        echo($pass_err . " Error");
    }else{
        $username = filter_var($_POST["username"],FILTER_SANITIZE_STRING);
        $password = $password_digest;
        $checkifexists = ("SELECT * FROM UsersTable WHERE firstname = '$username' AND password = '$password_digest'");
        $stmt = $conn->query($checkifexists);
        $results = $stmt ->fetchALL(PDO ::FETCH_ASSOC);
        if(empty($stmt)||empty($results)){
            echo("User ". $username. " with entered credentials does not exist please go back and try again");
            echo"<br>";
            echo("If error persists, please to contact administrator");
            echo"<br>";
            echo'<a href="http://localhost:8080/info2180-finalproject/index.html">Go Back</a>';
        }else{
            $_SESSION['loggedIn'] = true;
            $_SESSION['user'] = $username;
            header("Location: http://localhost:8080/info2180-finalproject/scripts/dashboard.php");
            $conn = null;//close connection

        }

            /*foreach ($results as $row) 
            {
                if($row['firstname'] != 'administrator'){
                    echo("You are not Administrator");
                }
                else{
                    echo("Administrator found");
                }
            }
            */
        
    }
    
}

?>