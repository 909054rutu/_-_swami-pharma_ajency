<?php
$con=mysql_connect("localhost","root","");
if($con==false){
  die("Error in Data base conn...");
}  
mysql_query("use project");
$res=mysql_query("select* from invoice");
echo("<table border='1'");
echo("<tr><th>Full_Name</th><th>User_Name</th><th>Gmail</th><th>Phone_No</th><th>Pass</th><th>C_Pass</th>");
while($row=mysql_fetch_array($res))
{
echo("<tr><td>".$row[0]);
echo("<td>".$row[1]);
echo("<td>".$row[2]);


}

mysql_close($con);
?>
