<?php
include "header.php"
?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
    body{
        padding-top:100px;
        /* background:url("images/th7.jpg"); */
        /* background-repeat:no-repeat; */
        /* width:100%; */
        /* background-color:grey; */
    }
table {

  border-collapse: collapse;
  border-spacing: 0;
  width: 90%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}
</style>
</head>
<!-- <body background="images/w5.jpg"> -->
    <body>

 

<h1> Record Of All Customer</h1>
</li>
</ul>
</body>
</html>
<?php
$con=mysql_connect("localhost","root","");
if($con==false)
{
    die("error in database connection");
}
mysql_select_db("project");
$res=mysql_query("select*from order_form2");
echo("<table border='1'>");
    echo("<tr><th>Country</th><th>Full_Name</th><th>Phone_NO</th><th>Pin Code</th><th>House No</th><th>Area</th><th>Landmark</th><th>City</th><th>State</th><th>product_section</th><th>Medicins</th>");
while($row=mysql_fetch_array($res))
{
    
   echo("<tr><td>".$row[0]);
   echo("<td>".$row[1]);
   echo("<td>".$row[2]);
   echo("<td>".$row[3]);
   echo("<td>".$row[4]);
   echo("<td>".$row[5]);
   echo("<td>".$row[6]);
   echo("<td>".$row[7]);
   echo("<td>".$row[8]);
   echo("<td>".$row[9]);
   echo("<td>".$row[10]);
   echo("</tr>");
  
}
mysql_close($con);
echo("</table>");
?>
