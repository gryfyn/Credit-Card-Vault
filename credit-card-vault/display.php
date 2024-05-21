<?php


include ('connection4.php');

$query="select * from customers where customer_id=1098"; // Fetch all the data from the table customers

$result=mysqli_query($conn,$query);

$singleRow = mysqli_fetch_row($result);

?>