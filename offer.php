

<!DOCTYPE html>
<html>
  <head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<header class="header">
<a href="#" class="logo"><i class="fas fa-heartbeat"></i>medicare</a>
  <nav class="navbar">
        <a href="index.php">home</a>
        <a href="#about">about</a>
        <a href="#logins">login</a>
        <a href="product.php">products</a>
        <a href="#services">services</a>
        <a href="#blogs">Blog</a>
        <a href="#contact">Contact</a>
        </nav>

</header>
</div>
<head>
<style>
  .heading{
    text-align: center;
    color:black;
    text-transform:uppercase ;
    padding-bottom: 3.5rem;
    font-size: 4rem;
}

.btn{
    margin-top: 1rem;
    display: inline-block;
    padding: 1rem;
    font-size: 1.7rem;
    color:#fff;
    background:var(--green);
    cursor: pointer;

}
.btn:hover{
    letter-spacing: 1rem;
}
.heading span{
    color:#65809b;
    margin: 7px;
    text-transform: uppercase;

}
.header{
    padding:2rem 9%;
    position: fixed;
    top:0;left:0;right: 0;
    z-index:1000;
    box-shadow:0 .5rem 1.5rem rgba(0,0,0,  .1);
    display: flex;
    align-items: center;
    justify-content:space-between ;
    background: #fff;
}
.header .logo{
    font-size: 1.3rem;
    color:var(--black);
    text-decoration:none;
}
.header .logo i{
    color:green;
}
.header .navbar a{
    font-size:  1.2rem;
    text-decoration:none;
    margin-left: 4rem;
    color:grey;
    
}
.header .navbar a:hover{
    color: green;
    border-bottom: .1rem solid var(--green);
}
  
  .flex1{
    display: flex;
  }
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin-left: 20px;
  /* display: flex; */

  text-align: center;
  font-family: arial;
  padding: bottom 50px;
}

.price {
  color: grey;
  font-size: 22px;
}
.heading{
    text-align: center;
    color:black;
    text-transform:uppercase ;
    padding-bottom: 2rem;
    font-size: 2rem;
}
.heading span{
    color:#65809b;
    margin: 7px;
    text-transform: uppercase;

}


.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color:#10847e;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
p{
  color:red;
}
</style>
</head>
<body>
  <h1 class="heading"><span>Off-</span>RE</h1>
<!-- <h2 style="text-align:center">Product Card</h2> -->
<form action="order.php" method="POST">
<div class="flex1">
<div class="card">
  <img src="images/most6.jpg" alt="Denim Jeans" style="width:100%" margin="left">
  <h2>Albuterol</h2>
  <p class="price">Price:200</p>
  <p>up to 50% off</p>
  
  <p><button type="submit">Buy-Now</button></p>
  </div>
  <div class="card">
  <img src="images/most9.jpg" alt="Denim Jeans" style="width:100%">
  <h2>Omeprazole</h2>
  <p class="price">Price:500</p>
  <p>up to 50% off</p>
  
  <p><button>Buy-Now</button></p>
</div>
<div class="card">
  <img src="images/backc3.webp" alt="Denim Jeans" style="width:100%">
  <h2>Losartan</h2>
  <p class="price">Price:100</p>
  <p>up to 50% off</p>
  
  <p><button>Buy-Now</button></p>
</div>
<div class="card">
  <img src="images/most7.jpg" alt="Denim Jeans" style="width:100%">
  <h2>Omeprazole</h2>
  <p class="price">Price:300</p>
  <p>up to 50% off</p>
  
  <p><button>Buy-Now</button></p>
</div>

</div>
<div class="flex1">
<div class="card">
  <img src="images/most6.jpg" alt="Denim Jeans" style="width:100%" margin="left">
  <h2>Albuterol</h2>
  <p class="price">Price:200</p>
  <p>up to 50% off</p>
  
  <p><button type="submit">Buy-Now</button></p>
  </div>
  <div class="card">
  <img src="images/most9.jpg" alt="Denim Jeans" style="width:100%">
  <h2>Omeprazole</h2>
  <p class="price">Price:500</p>
  <p>up to 50% off</p>
  
  <p><button>Buy-Now</button></p>
</div>
<div class="card">
  <img src="images/backc3.webp" alt="Denim Jeans" style="width:100%">
  <h2>Losartan</h2>
  <p class="price">Price:100</p>
  <p>up to 50% off</p>
  
  <p><button>Buy-Now</button></p>
</div>
<div class="card">
  <img src="images/most7.jpg" alt="Denim Jeans" style="width:100%">
  <h2>Omeprazole</h2>
  <p class="price">Price:300</p>
  <p>up to 50% off</p>
  
  <p><button>Buy-Now</button></p>
</div>

</div>


</body>
</html>















