<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing system application</title>
    <link rel="stylesheet" href="css/invoice.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body background="images/image.png" width="100%" height="100%">
    <div class="container">
        <h1 class="text-center">Billing system application</h1><br><br>
        <div class="row">
            <form action="" method="post" id="item-form">
                <lable class="item_n" for="item-name">Item Name:</lable>
                <input type="text" id="item-name" placeholder="Item Name"><br><br>
                <lable class="item_n" for="item-name">Quantity:</lable>
                <input type="text" id="item-quantity" placeholder="Quantity"><br><br>
                <lable class="item_n for="item-name">Item Price:</lable>
                <input type="text" id="item-price" placeholder="Item Price"><br><br>
                <!-- Mobile Number Field Added -->
               

                <lable class="item_n for="item-name" text-align="left">cust-name:</lable>
                <input type="text" id="customer-name" placeholder="Customer Name"><br><br>
                <lable class="item_n for="item-name">cust addess:</lable>
                <input type="text" id="customer-address" placeholder="Customer Address"><br><br>
                <button  type="submit">Add</button><br><br><br>
               
                
            </form>
        </div>
        <div class="col">
            <table border="1" class="table" id="cart-table" align="center" border-radius="1px">
                <tr>
                    <th>Item Name</th>
                    <th>Item Quantity</th>
                    <th>Item Price</th>
                    
                   
                    <th>Action</th>
                </tr>
            </table>
            <p id="total-cost">Total Cost: 0</p>
            <button  id="generate-invoice">Generate Invoice</button>
           
          
        </div>
    </div>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="script.js"></script>
</body>
</html>
<div class="deatils">

<a href="admin_s.php" target="_blank">
   
                                    <button1>BACK</button1>
          </a>
    </div>
                               