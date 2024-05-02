<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="css/log.css">
</head>
<body>
  <div class="wrapper">
    <form action="" method="POST">
      <h2> Admin Login</h2>
        <div class="input-field">
        <input type="text" name="r1" required>
        <label>Enter user name</label>
      </div>
      <div class="input-field">
        <input type="password" name="r2" required>
        <label>Enter your password</label>
      </div>
      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p>Remember me</p>
        </label>
      
      </div>
      <button type="submit">Log In</button>
     

      </div>
    </form>
  </div>
</body>
</html>

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

echo "<script>alert('! Invalid User_Name or Password');</script>";
}
?>


