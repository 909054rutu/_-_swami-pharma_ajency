<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login  </title>
  <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>

<div class="wrapper">
    <div class="form-wrapper sign-in">
    <form method="post" action="login.php">
        <h2>Login</h2>
        <div class="input-group">
          <input type="text" name="r1" required>
          <label for="">Username</label>
        </div>
        <div class="input-group">
          <input type="password" name="r2" required>
          <!-- <input type="password" id="psw" name="r2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required> -->
          <label for="">Password</label>
        </div>
        <button type="submit">Login</button>
    


</body>
</form>


<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
$con=mysql_connect("localhost","root","");
if($con==false)
{
die("error in database connection");
}

$u=$_POST["r1"];
$p=$_POST["r2"];
mysql_query("use project");
$res=mysql_query("select*from login where user_name='$u' and password='$p'");
if($row=mysql_fetch_array($res))
header("Location:admin_s.php");
else
// echo("invalid user or pass");
echo "<script>alert('! Invalid User_Name or Password');</script>";
}
?>
