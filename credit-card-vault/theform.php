<?php

if(isset($_POST['submit']))
      {
          
          $customer_id = $_POST['customer_id'];
          $first_name = $_POST['first_name'];
          $last_name = $_POST['last_name'];
          $email = $_POST['email'];
          $user_name = $_POST['user_name'];
          $password_hash = $_POST['password_hash'];  

          $host = "localhost";
          $host = "localhost";
          $username = "root";
          $password = "";
          $dbname = "credit_card_vault";
          $conn = mysqli_connect($host, $username, $password, $dbname);
if (!$conn)
          {
die("Connection failed!" . mysqli_connect_error());
          }
$query = "INSERT INTO customers (customer_id, first_name, last_name, email, user_name, password_hash) VALUES ('$customer_id', '$first_name', '$last_name', '$email', '$user_name', '$password_hash')";
  
$run = mysqli_query($conn, $query);
if ($run)
          {
echo"Success";
          }
mysqli_close($conn);
      }


?>