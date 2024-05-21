<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

</head>
<body>
    <h1>Add Customer</h1>
  <div class="form">
   <form method="POST" action="theform.php">
    <p>
        <label for="customer_id">Customer ID </label>
        <input type="number" name="customer_id" id="customer_id">
        </p>
     <p>
     <label for="first_name">First Name </label>
     <input type="text" name="first_name" id="first_name">
     </p>
     <p>
     <label for="last_name">Last Name </label>
     <input type="text" name="last_name" id="last_name">
     </p>
     <p>
     <label for="email">Email</label>
     <input type="text" name="email" id="email">
     </p>
     <p>
        <label for="username">Username </label>
        <input type="text" name="user_name" id="user_name">
        </p>
    <p>
            <label for="password_hash">Password Hash </label>
            <input type="text" name="password_hash" id="password_hash">
    </p>
     <p>
     <input type="submit" name="submit" id="submit" value="Submit">
     </p>
   </form>
   
</body>
</html>