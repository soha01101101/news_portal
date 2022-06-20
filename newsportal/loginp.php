<?php
 session_start();

// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
    exit;
}

//Database Configuration File
include('includes/config.php');
//error_reporting(0);
if(isset($_POST['btn']))
  {
 
    // Getting username/ email and password
     $uname=$_POST['usnm'];
    $password=$_POST['pass'];
    // Fetch data from database on the basis of username/email and password
$sql =mysqli_query($con,"SELECT username, password FROM tbluser WHERE (username ='$uname'and password = '$password')");

 $row = mysqli_fetch_array($sql);

 


if ($row['username'] == $uname && $row['password'] == $password) { 

	
	  session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;

$_SESSION['login']=$_POST['usnm'];
    echo "<script type='text/javascript'> document.location = 'index.php'; </script>";

    }
 else{
echo "<script>alert('Wrong Password');</script>";
 
  }

 
}
?>