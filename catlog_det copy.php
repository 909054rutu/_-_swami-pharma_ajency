<!DOCTYPE html>
<html>
<head>
<title>Purchase Table</title>
<style>
    /* Table styles */
    
    table {
        width: 100%;
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.9em;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        min-width: 400px;
        box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    }
    .table-title {
    padding: 10px 0;
    background-color:; 
    color:black;
   
    text-align: center;
    margin-bottom: 20px; 
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); 
}

.table-title h2 {
    margin: 0;
    font-size: 24px; 
    font-family: Times New Roman; 
    font-weight: normal; 
}
    th, td {
        padding: 12px 15px;
        text-align: left;
        border-bottom: 1px solid #dddddd;
    }

    thead tr {
        background-color: #483D8B;
        color: #ffffff;
        text-align: left;
    }

    tbody tr:nth-of-type(even) {
        background-color: #F0F8FF;
    }

    tbody tr:hover {
        background-color: #E6E6FA;
    }

    tbody tr:last-of-type {
        border-bottom: 2px solid #483D8B;
    }
</style>
</head>
<html>
<div class="table-title">
    <h2>Catlog Details</h2>
</div>
</html>


<?php
$con=mysql_connect("localhost","root","");
if($con==false)
{
    die("error in database connection");
}
mysql_select_db("project");
$res=mysql_query("select*from purchase");
echo("<table border='1'>");
    echo("<tr><th>compnay_name</th><th>section</th><th>pro_name</th><th>Mfg_Date</th><th>Exp_Date</th><th>price</th><th>Avil_OFS</th>");
while($row=mysql_fetch_array($res))
{
    
   echo("<tr><td>".$row[0]);
   echo("<td>".$row[1]);
   echo("<td>".$row[2]);
   echo("<td>".$row[3]);
   echo("<td>".$row[4]);
   echo("<td>".$row[5]);
   echo("<td>".$row[6]);
  
   
   echo("</tr>");
  
}
mysql_close($con);
echo("</table>");
?>
<div class="deatils">

<a href="admin_s.php" target="_blank">
   
                                    <button1>BACK</button1>
          </a>
    </div>
                               