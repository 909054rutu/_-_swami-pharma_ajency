<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User View Blog</title>
    <link rel="stylesheet" href="styles1.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .grand_parent {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 20px;
        }

        .parent {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            max-width: 1200px;
            width: 100%;
        }

        .child {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 10px;
            padding: 20px;
            width: 300px;
            text-align: center;
            position: relative;
        }

        .child img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 10px;
        }

        .product-info {
            padding: 17px;
            text-align: center;
            background-color: #f8f9fa;
            border-radius: 0 0 8px 8px;
           
        }

        button {
            background-color: #2e938e;
            color: #fff;
            border: none;
            border-radius: 3px;
            padding: 8px 16px;
            padding-top:-10px;
           
            cursor: pointer;
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
        }

        button:hover {
            background-color: #e68a00;
        }

    </style>
</head>
<body>
    <div class="grand_parent">
        <div class="parent">
            <?php
            $con = mysql_connect("localhost", "root", "");
            if($con == false) {
                die("Error in database connection...");
            }
            mysql_query("use project");

            $s="select * from add3";
            $q=mysql_query($s);
            while($row=mysql_fetch_array($q)) {
            ?>
            <div class="child">
                <img src="<?php echo $row['image_path']; ?>" alt="Product Image">
                <div class="product-info">
                    <p><strong>Code:</strong> <?php echo $row['id']; ?></p>
                    <p><strong>Name:</strong> <?php echo $row['name1']; ?></p>
                    <p><strong>Price:</strong> <?php echo $row['price']; ?></p>
                    <p><strong>Exp:</strong> <?php echo $row['date1']; ?></p>
                </div>
                <a href="order.php?id=<?php echo $row['id']; ?>"><button>BUY NOW</button></a>
            </div>
            <?php 
            }
            ?>
        </div>
    </div>
</body>
</html>
<a href="product.php"> back</a>