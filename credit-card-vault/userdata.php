<?php
include("developers.php");
?>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <h1>Customer Details</h1>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead><tr><th>S.N</th>

         <th>Customer ID</th>
         <th>First Name</th>
         <th>Last Name</th>
         <th>Email Address</th>
         <th>Username</th>
         <th>password_hash</th>
         <th>Edit</th>
         <th>Delete</th>
         
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['customer_id']??''; ?></td>
      <td><?php echo $data['first_name']??''; ?></td>
      <td><?php echo $data['last_name']??''; ?></td>
      <td><?php echo $data['email']??''; ?></td>
      <td><?php echo $data['user_name']??''; ?></td>
      <td><?php echo $data['password_hash']??''; ?>
      <td>
                <form action='update.php' method='post'>
                 <input name='id' value='",$row["id"],"' hidden>
                 <button type='submit' name='update' value='update'>Edit</button>
                </form></td>
                 <td>
                <form action='form-post.php' method='post'>
                 <input name='id' value='",$row["id"],"' hidden>
                 <button type='submit' name='delete' value='delete'>Delete</button>
                </form>
            </td>
    </td>
      
     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>
