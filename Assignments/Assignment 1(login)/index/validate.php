<?php
if(isset($_COOKIE["user"]))
{
	header('Location:welcome.php');
}
	
$error=''; //Variable to Store error message;

if(isset($_POST['submit'])){
	 if(empty($_POST['user']) || empty($_POST['pass']))
 {
	 echo $error;
 }
 else
 {
 
 //Define $user and $pass
 $user=$_POST['user'];
 $pass=$_POST['pass'];
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "");
 //Selecting Database
 $db = mysqli_select_db($conn, "test");
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM userpass WHERE pass='$pass' AND user='$user'");
 
 $rows = mysqli_num_rows($query);
 if($rows == 1){
	 setcookie("user","$user",time()+10); //set the cookie time
     header("Location: welcome.php"); // Redirecting to other page
 }
 else
 {
 $error = "Invalid credentials!!!";
 }
 mysqli_close($conn); // Closing connection
 }
}
 
?>