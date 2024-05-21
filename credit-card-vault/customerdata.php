<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <?php include 'display.php'; ?>
            <div class="card">
              <div class="card-header">
                Customer records for Griffins Adero
              </div>
              <div class="card-body">
                <b>Customer ID</b> :- <span class="card-text"><?php echo $singleRow['0']; ?> </span><br>
                <b>First Name</b> :- <span class="card-text"><?php echo $singleRow['1']; ?> </span><br>
                <b>Last Name</b> :- <span class="card-text"> <?php echo $singleRow['2']; ?></span><br>
                <b>Email </b> :- <span class="card-text"> <?php echo $singleRow['3']; ?></span><br>
                <b>Username</b> :- <span class="card-text"> <?php echo $singleRow['4']; ?></span><br>
                <b>password_hash</b> :- <span class="card-text"> 
                    <?php
                $key = 'Your_AES_Key_Here';
                $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length('AES-256-CBC'));
                echo openssl_encrypt($singleRow['5'],'AES-256-CBC', $key, 0, $iv); 
                ?></span><br>
              </div>
            </div>
        </div>
    </div>        
</div>

</body>
</html>