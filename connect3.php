<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "students");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$mobile=$_POST["mobile"];
$email=$_POST["email"];
$about=$_POST["about"];

// Escape user inputs for security
// Escape user inputs for security
// Attempt insert query execution
$sql = "INSERT INTO list(fname,lname,mobile,email,about) VALUES ('$fname','$lname','$mobile','$email','$about')";
if(mysqli_query($link, $sql) and !empty($_POST["fname"])and !empty($_POST["lname"]) and!empty($_POST["mobile"]) and !empty($_POST["email"])and!empty($_POST["about"]) ){
    include("success.html");
} else{
    include("fail1.html");
}
 
// Close connection
mysqli_close($link);
?>
