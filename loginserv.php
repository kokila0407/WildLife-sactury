<?php
$error=''; //Variable to Store error message;
if(isset($_POST['submit'])){
 if(empty($_POST['username']) || empty($_POST['password'])){
 $error = "Username or Password is Invalid";
 }
 else
 {
 //Define $user and $pass
 $username=$_POST['username'];
 $password=$_POST['password'];
 //Establishing Connection with server by passing server_name, user_id and pass as a patameter
 $conn = mysqli_connect("localhost", "root", "","sanc");
 //Selecting Database
 $db = mysqli_select_db($conn, "sanc");
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM login WHERE password='$password' AND username='$username'");
 
 $rows = mysqli_num_rows($query);
 if($rows == 1){
 header("Location: main.php"); // Redirecting to other page
 }
 else
 {
 $error = "Username or Password is Invalid";
 }
 mysqli_close($conn); // Closing connection
 }
}
 
?>