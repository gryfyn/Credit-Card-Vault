<?php      
    include('connection.php');  
    $user_name = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $user_name = stripcslashes($user_name);  
        $password = stripcslashes($password);  
        $user_name = mysqli_real_escape_string($con, $user_name);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from customers where user_name = '$user_name' and password_hash = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<script> location.href='customerinfo.html'; </script>";
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  