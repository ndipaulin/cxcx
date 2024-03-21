<?php
if(isset($_POST['submit'])){
$dbconn=mysqli_connect("mysql-btech","root","","23rp01685_shareride_db")or die(mysqli_connect_error()); // connect to database

// inserting in Database

$email=$_POST['email'];
$password=$_POST['password'];
$sql="INSERT INTO students SET names='$name', lastname='$lname', gender='$gender',
email='$email', pass='$password'";
$quer =mysqli_query($dbconn,$sql);
header("location:index.php");
} ?>
<!DOCTYPE html> <html> <head> 	<title> Form to Register</title>
</head>  <body>  <form action="homepage.php" method="POST">

Email<input type="text" name="email">
Password<input type="password" name="pass">

<input type="submit" name="submit"></td>

</form> </body> </html>
