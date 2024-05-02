<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
   <title>User View Blog</title>
  
 <link rel="stylesheet"
    href="styles1.css" /> 
 
  <style> 
    .grand_parent{
      width: 100vw;
      height: 100vh;
      overflow: hidden;
      overflow: scroll;
      color: black;
    }
    .parent{
      width: 80vw;
      height: auto;
      margin: auto;
      justify-content: space-around;
      display: flex;
            transition: all 0.2 linear;
      flex-wrap: wrap;
    }
    .child{
      width: 200px;
      height:300px;
       background:linear-gradient(to top,#f5f7fa,#c3cfe2);
      box-shadow: 0 0 20px #bac3c3;
      flex: 1 1 300px;
      margin: 20px;
      overflow: hidden;
      overflow: scroll;
      background: ;


    }
    
    @media(max-width:768px){
      .grand_parent{
        height: auto;
      }
    }
    
  </style>
   <link rel="stylesheet" href="styleLogin.css">
 
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
        <?php
     echo($row['id']); 
     echo($row['name1']); 
    echo($row['price']);
    echo($row['date1']);
  
    echo "<img src='".$row['image_path']."'width='350px' height='200px'>";?>
    <a href="order.php?id=<?php echo $row['id']?>"><button>buy</button></a>
    </div>
       
    
    <?php 
  }
  ?>
  </div>
</div>

      </form>
    


</body>
</html>