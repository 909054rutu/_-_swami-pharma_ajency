

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Product - Your Agency System</title>
    <!-- <link rel="stylesheet" href="styles1.css"> -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        form {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input[type="text"],
        input[type="file"],
        input[type="date"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #10847e;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        
    </style>
</head>
<body>
    <form method="POST" action="" enctype="multipart/form-data">
        <h2>Add Product</h2>

        Name:<br>
        <input type="text" name="name" id="name" required><br><br>

        Image:<br>
        <input type="file" name="img" id="image" accept=".jpg,.jpeg,.png" required><br><br>

        Price:<br>
        <input type="text" name="price" id="price" required><br><br>

        Date:<br>
        <input type="date" name="date1" id="date1" required><br><br>

        <input type="submit" value="Add Product">
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
        $n=$_POST["name"];
        $p=$_POST["price"];
        $d=$_POST["date1"];
        $img=$_FILES['img']['name'];
        $timg=$_FILES['img']['tmp_name'];
        $folder='img/'.$img;
        move_uploaded_file($timg, $folder);

    
        mysql_select_db("project");
       
            $k=mysql_query("INSERT INTO add_product (image_path, price,date1,name1) VALUES ('$img',$p,'$d','$n')");
            if($k==true)
            {
                echo(" success");
                // header("Location:contact_order.php");
            }
            else
            {
                echo("not success");
            }
        
        mysql_close($con);
    }
    

    ?>
    
    