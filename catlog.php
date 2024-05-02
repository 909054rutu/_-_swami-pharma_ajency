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
    <h2>Product Purchase info</h2>
</div>

<form action="" method="post">
    <h1>Add Product Catlog</h1>
<label for="Company-name">Company Name:</label>
<select name="t1" required>
            <option value="Sun Pharmaceutical Industries Ltd">Sun Pharmaceutical Industries Ltd</option>
            <option value="Cipla Ltd">Cipla Ltd</option>
            <option value="Lupin Ltd">Lupin Ltd</option>
            <option value="Aurobindo Pharma Ltd">Aurobindo Pharma Ltd</option>
            <option value="Biocon Ltd">Biocon Ltd</option>
            <option value="Cadila Healthcare Ltd">Cadila Healthcare Ltd</option>
            <option value="Divi's Laboratories Ltd">Divi's Laboratories Ltd</option>
           
        </select><br><br>
    <label for="Product-sec">Product-sec:</label>
  
        <select name="t2" required>
            <option value="skin">skin</option>
            <option value="fever&infection">fever & infection</option>
            <option value="heart">Heart</option>
            <option value="vitamins">Vitamins</option>
            <option value="diabetes">Diabetes</option>
            <option value="women care">Women_care</option>
            <option value="thyroid">Thyroid</option>
            <option value="covid_care">covid_care</option>
        </select><br><br>
    <label for="product-name">Product Name:</label>
    <input type="text" id="product-name" name="t3"><br><br>
   
    <label for="Mfg Date">Mfg Date:</label>
    <input type="date" id="mdate" name="t4"><br><br>
    <label for="Exp Date">Exp Date:</label>
    <input type="date" id="edate" name="t5"><br><br>
    <label for="price">Price:</label>
    <input type="number" id="price" name="t6"><br><br>
    <label for="Avilable">Avilable To Sale:</label>
    <select name="t7" required>
            <option value="Avilable">Avilable</option>
            <option value="Out Of Stock">Out Of Stock</option>
            </select><br><br>
    <button type="submit" name="r1">Add Product</button>
</form>
</div>
<script src="cat.js"></script>
</body>
<?php
if (isset($_POST['r1'])) 
{
    $con=mysql_connect("localhost","root","");
    if($con==false)
    {
        die("error in database connection");
    }
    $c=$_POST["t1"];
    $f=$_POST["t2"];
    $m=$_POST["t3"];
    $p=$_POST["t4"];
    $h=$_POST["t5"];
    $a=$_POST["t6"];
    $pa=$_POST["t7"];
    
    mysql_select_db("project");
    $k=mysql_query("insert into purchase values('$c','$f','$m','$p','$h',$a,'$pa')");
    if($k==true)
    {
        echo "<script> alert('insert succ..'); </script>";
        // header("Location:catlog_det.php");

       
    }
    else
    {
        echo("not success");
    }

    mysql_close($con);
}
?>
<div class="deatils">

<a href="admin_s.php" target="_blank">
   
                                    <button1>BACK</button1>
          </a>
    </div>
                               