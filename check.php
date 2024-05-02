

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding-top: 60px;
            background-color: #f4f4f4;
        }
      

        form {
            padding-top:100%;
            width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border: 1px solid #ddd;
            border-radius: 3px;
            font-size: 14px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color:#16a085;
            border: 1px solid #a88734;
            color: #111;
            font-size: 16px;
            cursor: pointer;
            border-radius: 3px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
       
    </style>
</head>
<body>
   
    <form method="post" action="">
    <h2>Check Order Details</h2>
    <label for="t1">Enter Name:</label>
    <input type="text" id="t1" name="t1"><br>
    <label for="t2">Enter Mobile Number:</label>
    <input type="number" id="t2" name="t2"><br>

    <input type="submit" value="Check Order"><br>
    </form>
</body>
<table>
        <tr>
            <th>Name</th>
            <th>Phone Number</th>
            <th>pin_code</th>
            <th>house no</th>
            <th>area</th>
            <th>city</th>
            <th>state</th>
            <th>price</th>
            <th>product name</th>
            <th>date</th>
           
        </tr>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $con = mysql_connect("localhost", "root", "");
            if ($con == false) {
                die("error in database connection");
            }

            $nm = $_POST["t1"];
            $ph = $_POST["t2"];
            mysql_query("use project");
            $res = mysql_query("select * from order_form2 where full_name='$nm' and mo='$ph'");
            while ($row = mysql_fetch_array($res)) {
                echo "<tr>";
                echo "<td>" . $row[0] . "</td>";
                echo "<td>" . $row[1] . "</td>";
                echo "<td>" . $row[2] . "</td>";
                echo "<td>" . $row[3] . "</td>";
                echo "<td>" . $row[4] . "</td>";
                echo "<td>" . $row[5] . "</td>";
                echo "<td>" . $row[6] . "</td>";
                echo "<td>" . $row[7] . "</td>";
                echo "<td>" . $row[8] . "</td>";
                echo "<td>" . $row[9] . "</td>";
               
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>
</html>

<a href="order.php"><h6>Go To Back<h6></a>
    
  
    </html>
