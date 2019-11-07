<?php 
include 'mysqlconnect.php';
$query='select * from product_info where id=1';
$c=mysqli_query($conn,$query);
$row=mysqli_fetch_array($c);

 ?>



<!DOCTYPE html>
<html>
<head>
	<title>i-phone</title>
	<link rel="stylesheet" type="text/css" href="prod.css">
</head>
<body>
<p class="prod1"><img src="shoes.jpg"><br>
	Name:i-phone XS<br>
	Brand:Apple<br>
	Price:$1249.99<br>
	<input type="submit" name="" value="Order Now">
</p>
</body>
</html>