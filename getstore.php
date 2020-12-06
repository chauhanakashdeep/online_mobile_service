<!DOCTYPE html>
<html lang = "en">
<head>
    <title>Our Stores</title><!--Title Of A Webpage-->
<style>
table {
  width: 40%;
  border-collapse: collapse;/*Styling Of Table*/ 
}

table, td, th {
  border: 1px white;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = ($_GET['q']);//geting value from html page
$con = mysqli_connect('localhost','root','','itlab1');//connection to database
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));//connection to databases if failed
}

mysqli_select_db($con,"itlab1");//select database
$sql="SELECT * FROM stores WHERE City like '%$q%' limit 3";//sql query
$result = mysqli_query($con,$sql);//getting query results

echo "<table>
<tr>
<th>City</th>
<th>Area</th>
</tr>";//creating table
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['city'] . "</td>";//printing data to table
  echo "<td>" . $row['area'] . "</td>";
  
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);//closing connection
?>
</body>
</html>