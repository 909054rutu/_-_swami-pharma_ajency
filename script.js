$(document).ready(function (){
    var items = [];

    $("#item-form").on("submit", addItemToCart);
    $("#cart-table").on("click", ".btn", removeItemFromCart);
    $("#generate-invoice").on("click", generateInvoice);

    function addItemToCart(event){
        event.preventDefault();
        var itemName = $("#item-name").val();
        var itemPrice = $("#item-price").val();
        var itemQuantity = $("#item-quantity").val(); 
        if(itemName !== "" && itemPrice !== "" && itemQuantity !== ""){
            var item = {
                name: itemName,
                price: parseFloat(itemPrice),
                quantity: parseInt(itemQuantity) 
            };

            items.push(item);
            $("#cart-table tbody").append(
                "<tr><td>" + item.name +
                "</td><td>" + item.quantity + "</td><td>" + 
                item.price.toFixed(2) +
                '</td><td><button class="btn">REMOVE</button></td></tr>'
            );

            updateTotalCost();
            $("#item-name").val("");
            $("#item-price").val("");
            $("#item-quantity").val(""); 
        }
    }

    function removeItemFromCart(){
        var index = $(this).closest("tr").index();
        items.splice(index, 1);
        $(this).closest("tr").remove();
        updateTotalCost();
    }

    function updateTotalCost(){
        var totalCost = 0;
        items.forEach(function (item){
            totalCost += item.price * item.quantity; 
        });
        $("#total-cost").text("Total Cost: " + totalCost.toFixed(2));
    }

    function generateInvoice(){
        var customerName = $("#customer-name").val();
        var customerAddress = $("#customer-address").val();
        var currentDateTime = new Date().toLocaleString();
          
        var invoice = '<html> \
        <head>\
        \
            <title>Invoice</title>\
            <link rel="stylesheet" href="css/invoice.css">\
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />\
        </head>\
        <body>\
        <div class="container">\
        <h1 class="text-center">Swami-Pharma-Agency</h1>\
        <p class="invoice-info"><strong>Customer Name:</strong> ' + customerName + '</p>\
        <p class="invoice-info"><strong>Customer Address:</strong> ' + customerAddress + '</p>\
        <p class="invoice-info"><strong>Date:</strong> ' + currentDateTime + '</p>\
            <table border="1" class="table" id="cart-table" align="center" border-radius="1px">\
                <thead>\
                    <tr>\
                        <th>Item Name</th>\
                        <th>Quantity</th>\
                        <th>Item Price</th>\
                    </tr>\
                </thead>\
                <tbody>';
                  
                   
        items.forEach(function (item){
            invoice += "<tr><td>" + item.name + "</td><td>" + item.quantity + "</td><td>" + (item.price * item.quantity).toFixed(2) + "</td></tr>";
        });
    
        invoice += '</tbody></table><p>Total Cost: ' + getTotalCost() + "</p></div></body></html>";
        invoice += '<button onclick="window.print()">Print</button>';
    
          
        
        var win = window.open("", "_blank");
        win.document.open();
        win.document.write(invoice);
        win.document.close(invoice);
    }

    function getTotalCost() {
        var totalCost = 0;
        items.forEach(function (item){
            totalCost += item.price * item.quantity; 
        });
        return totalCost.toFixed(2);
    }

});