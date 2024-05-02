document.addEventListener("DOMContentLoaded", function() {
    document.querySelector("form").addEventListener("submit", function(event) {
        var productName = document.getElementById("product-name").value;
        if (productName.trim() === "") {
            alert("Please enter a product name.");
            event.preventDefault(); 
        }
    });
});