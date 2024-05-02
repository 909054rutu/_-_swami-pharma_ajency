<?php
include "header.php"
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Product</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding-top: 90px;
            font-size: 15px;
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
    <form method="POST" action="add22.php" enctype="multipart/form-data">
        <h1>Add Product</h1>

        <div class="form-group">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="t1" required>
        </div>

        <div class="form-group">
            <label for="price">Price:</label><br>
            <input type="text" id="price" name="t2">
        </div>

        <div class="form-group">
            <label for="date">Date:</label><br>
            <input type="date" id="date" name="t3">
        </div>

        <div class="form-group">
            <label for="image">Image:</label><br>
            <input type="file" id="image" name="img">
        </div>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
<div class="deatils">

<a href="admin_s.php" target="_blank">
   
<button1>BACK</button1>
          </a>
    </div>
