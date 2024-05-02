<!DOCTYPE html>
<html>
<head>
    <title>Product Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
$con = mysql_connect("localhost", "root", "");
if($con == false) {
    die("Error in database connection...");
}
mysql_query("use project");
$res = mysql_query("select * from add3");
echo("<table>");

echo("<tr><th>id</th><th>name</th><th>price</th><th>date</th><th>image</th></tr>");
while($row = mysql_fetch_array($res)) {
    echo("<tr><td>".$row[0]);
    echo("<td>".$row[1]);
    echo("<td>".$row[2]);
    echo("<td>".$row[3]);
    echo("<td>".$row[4]);
}
mysql_close($con);
?>

</body>
</html>