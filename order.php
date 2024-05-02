<?php
include "header.php"
?>

<?php
$con = mysql_connect("localhost", "root", "");
if($con == false) {
    die("Error in database connection...");
}
mysql_query("use project");
$id=$_GET['id'];
$s="select * from add3 where id='$id'";
$q=mysql_query($s);
$row=mysql_fetch_array($q);
$id=$row['id']; 
$name=$row['name1']; 
$price= $row['price'];
$date1=$row['date1'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Details</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Code</th>
            <th>Product-Name</th>
            <th>Price</th>
            <th>Exp Date</th>
        </tr>
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $price; ?></td>
            <td><?php echo $date1; ?></td>
        </tr>
    </table>
</body>
</html>

<html>
<head>
    <title>Product order form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding-top:90px;
            font-size:15px;
        }

        form {
            padding-top:20px;
            margin: 0 auto;
            max-width: 900px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        select,
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            width: 10%;
            padding: 10px;
            background-color:#10847e;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="reset"] {
            width: 10%;
            padding: 10px;
            background-color:#10847e;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
      
      
    </style>
</head>
<body>
    <form method="POST" action="">
        <h1>Product order form</h1>

       

        Full Name(First and Last Name):<br>
        <input type="text" name="t2" required><br><br>

        Mobile Number:<br>
        <input type="text" name="t3" pattern="[0-9]{10}" title="Please enter a 10-digit mobile number" required><br><br>

        Pincode:<br>
        <input type="text" name="t4" pattern="[0-9]{6}" title="Please enter a 6-digit pincode"><br><br>

        Flat, House No, Building, Company, Apartment:<br>
        <input type="text" name="t5" required><br><br>

        Area, Street, Sector, Village:<br>
        <input type="text" name="t6" required><br><br>

        <!-- Landmark:<br> -->
        <!-- <input type="text" name="t7" required><br><br> -->

        Town/city:<br>
        <input type="text" name="t8" required><br><br>

        State:<br>
        <select name="t9" required>
            <option value="maharashtra">Maharashtra</option>
           
        </select><br><br>
       price:<br>
        <input type="text" name="t10" value="<?php echo $price ?>" required><br><br>
           
        product name:<br>
        <input type="text" name="t11" value="<?php echo $name?>" required>
        Date:<br>
        <input type="date" name="t12" value="<?php echo $date1?>" required><br><br>
        payment:<br>
        <select name="t13" required>
            <option value="cash on dilivery">cash on dilivery</option>
           
        </select><br><br>
        <input type="submit" name="t1" value="submit">
        <input type="reset" name="t1" value="reset">
        <div class="reset">
        <a href="check.php">
       <h4>Check Order Details!! </h4>
    </a>
    
    </a>
    </div>
    </form>
</body>
</html>

<?php
if (isset($_POST['t1'])) 
{
    $con=mysql_connect("localhost","root","");
    if($con==false)
    {
        die("error in database connection");
    }
  
    $f=$_POST["t2"];
    $m=$_POST["t3"];
    $p=$_POST["t4"];
    $h=$_POST["t5"];
    $a=$_POST["t6"];
    // $l=$_POST["t7"];
    $t=$_POST["t8"];
    $s=$_POST["t9"];
    $p_s=$_POST["t10"];
    $p_n=$_POST["t11"];
    $d1=$_POST["t12"];
    mysql_select_db("project");
   {
        $k=mysql_query("insert into order_form2 values('$f',$m,$p,$h,'$a','$t','$s',$p_s,'$p_n','$d1')");
        if($k==true)
        {
            echo "<script> alert('Order succ..!!!! you need to get more information contact us'); </script>";
            // header("Location:contact_order.php");
        }
        else
        {
            echo("not success");
        }
    }

    mysql_close($con);
}

?>
<?php include "footer.php"; ?>