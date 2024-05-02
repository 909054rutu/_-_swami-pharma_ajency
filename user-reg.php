<?php
  $error = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $con = mysql_connect("localhost", "root", "");
    if ($con == false) {
      die("error in database");
    }

    $fn = $_POST["r1"];
    $un = $_POST["r2"];
    $em = $_POST["r3"];
    $ph = $_POST["r4"];
    $pass = $_POST["r5"];
    $cpass = $_POST["r6"];

    if (strlen($un) <= 8) {
      $error = "Username must be more than 8 characters";
    } else if ($pass != $cpass) {
      $error = "Passwords do not match";
    } else {
      mysql_select_db("project");
      $k = mysql_query("insert into ulogin values('$fn','$un','$em',$ph,'$pass','$cpass')");
      if ($k == true) {
        header("Location:index.php");
        exit;
      } else {
        $error = "Registration failed";
      }
    }
    mysql_close($con);
  }
?>

<html>
<head>
  <title>Registration Form in Html</title>
  <link rel="stylesheet" href="css/user-reg.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="wrapper">
    <form method="post" action="">
      <h1>Registration</h1>
     
      <div class="input-box">
        <div class="input-field">
          <input type="text" placeholder="Full Name" name="r1" required>
          <i class="fa-solid fa-user"></i>
        </div>
      </div>
      
      <div class="input-box">
        <div class="input-field">
          <input type="text" placeholder="Username" name="r2" required>
          <i class="fa-solid fa-user"></i>
        </div>
      </div>
     
      <div class="input-box">
        <div class="input-field">
          <input type="email" placeholder="Email" name="r3" required>
          <i class="fa-solid fa-envelope"></i>
        </div>
      </div>
        
      <div class="input-box">
        <div class="input-field">
        <input type="tel" pattern="[0-9]{10}" placeholder="Phone (10 digits)" name="r4" required>
          <i class="fa-solid fa-phone"></i>
        </div>
      </div>
      
      <div class="input-box">
        <div class="input-field">
          <input id="password" type="password"  placeholder="Password" name="r5" required>
          <i class="fa-solid fa-lock"></i>
        </div>
      </div>
       
      <div class="input-box">
        <div class="input-field">
          <input id="conf_password" type="password" placeholder="Confirm Password" name="r6" onkeyup="check(this)" required>
          <error id="alert"><?php echo $error; ?></error>
          <i class="fa-solid fa-lock show"></i>
        </div>
      </div>
      
      <lable><input type="checkbox">That the information provided is true and correct</label>
      
      <button type="submit" name="submit" class="btn" value="submit">Register</button>
      <label>If you already have an account</label>
      <div class="login">
      <a href="user_login.php">Login</a> 
      </div>
    </form>
  </div>
</body>
</html>