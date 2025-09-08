 <?php 
if (isset($_POST["submit"]))
{
  $id=$_POST["eid"];
  $name=$_POST["nm"];
  $dept=$_POST["dept"];
  $sal=$_POST["sl"];
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>insert page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">

<?php
require "include/TopNavbar.php"
?>
 

<div id="mydata">
 
<center>
  <h1>Employee Data page !!!!</h1>
</center>

<table>
  <thead>
<tr>
  <th>Employee Id</th>
  <th>Employee Name</th>
  <th>Employee Department</th>
  <th>Employee Salary</th>
</tr>
</thead>
<tbody>

<?php 
$con = new mysqli("localhost","root","","bhopal");
$sql = "select * from employee";
$result = $con->query($sql);
while($eow=$result->fetch_assoc()){
  echo "<tr>";
  echo "<td>".$row["eid"]."</td>";
  echo "<td>".$row["nm"]."</td>";
  echo "<td>".$row["dept"]."</td>";
  echo "<td>".$row["sl"]."</td>";
  echo "</tr>";
}
$con->close();
?>

</tbody>
</table>

</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>