<?php
include "header.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/index.css">
<title>Product Purchase info</title>
</head>
<body>
<div class="zigzag">
    <h2>Update Catlog</h2>
</div>
<h2>Update Catlog</h2>
<form action="" method="post">
<h3>Update Catlog</h3>
<label for="product-name">Product Name:</label>
    <input type="text" id="product-name" name="t3"><br><br>
   
    
    <label for="Avilable">Avilable To Sale(update):</label>
    <select name="t7" required>
            <option value="Avilable">Avilable</option>
            <option value="Out Of Stock">Out Of Stock</option>
            </select><br><br>

    <button type="submit" name="r1">Add Product</button>
</div>
</form>
<script src="cat.js"></script>
</body>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST") 
{
$con=mysql_connect("localhost","root","");
if($con==false){

die("error in database");
}
    $m=$_POST["t3"];
    $pa=$_POST["t7"];

mysql_query("use project");

$k=mysql_query("update purchase set avi='$pa' where pro_name='$m'");
if($k>=1)
echo "<script> alert('Reocord UPDATE succ..'); </script>";
else
echo("record not found");

mysql_close($con);
}
?>
<html>
<div class="underline">
<a href="admin_s.php"><h1>Go To Back<h1></a>
    
    </div>
    </html>
