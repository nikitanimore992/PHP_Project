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
<h1>
    This is my insert data page 
  </h1>
</center>
  <?php
 if (isset($_POST["submit"]))
 {

  $con=new mysqli("localhost", "root", "", "employee");

  $sql="insert into cybrom(empid,	empname , empdept , sal)  
  values('$id', '$name', '$dept', '$sal') ";
  $con->query($sql);
  $con->close();

  echo "<script>";
  echo "alert('Record Save!!!')";
  echo "</script>";
 }

   
?>

<form method="post" action="insert.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter employee id</label>
    <input type="text" class="form-control" name="eid" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter employee name</label>
    <input type="text" class="form-control" name="nm" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter employee department</label>
    <input type="text" class="form-control" name="dept" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter employee salary</label>
    <input type="text" class="form-control" name="sl" aria-describedby="emailHelp">
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>


</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>