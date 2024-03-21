
<?php
if(isset($_POST['submit'])){
$dbconn=mysqli_connect("mysql-btech","root","","23rp01685_shareride_db")or die(mysqli_connect_error()); // connect to database

// inserting in Database
$name=$_POST['user_firstname'];
$lname=$_POST['user_lastname'];
$gender=$_POST['user_gender'];
$email=$_POST['user_email'];
$password=$_POST['user_password'];
$sql="INSERT INTO students SET names='$name', lastname='$lname', gender='$gender',
email='$email', pass='$password'";
$quer =mysqli_query($dbconn,$sql);
header("location:index.php");
} ?>
<!DOCTYPE html> <html> <head> 	<title> Form to Register</title>
</head>  <body>  <form action="login.php" method="POST">
First name<input type="text" name="fname" >
Last name<input type="text" name="lname">
Gender<input type="text" name="gender">
Email<input type="text" name="email">
Password<input type="password" name="pass">

<input type="submit" name="submit"></td>
</form> 

</body> </html>
