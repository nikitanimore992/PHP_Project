<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <link rel="stylesheet" href="css/style.css">
</head>
  <body>
    <center>
  <div class="container">
   <?php 
    require "include/TopNavbar.php";
    // reuirede ka use ham kisi bhi page ko include
    //  karne ke liye karte hai pr agar jo page dhund rahe hai wo
    //   find na ho to require page not found ki warrning genarate karte
    //    hai and uske age koi program terminate ho jata hai age ka program 
    //    chalta hi nahi hai pure page pr warnning generate ho jati hai hai 
   ?>
 <div id="mydata">
    <h1> Welcome To My Home Page</h1>

 </div>
 
<?php 
   include "include/Footer.php";
   // reuirede ka use ham kisi bhi page ko include
//    karne ke liye karte hai pr agar jo page dhund rahe hai wo
//    find na ho to include page not found ki warrning genarate karte
//     hai and particular utna hi program nahi chalta uske baad ka all program chalta hai 
?>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</center> 
</body>
</html>