
<?php
function prevent(){
    $url != 'changedForSubPW.php';

if ($_SERVER['HTTP_REFERER'] == $url) {

  header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");


  $url = '';
  exit();
}

}
?>

<?php 
@prevent();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Change Password</title>
    <link rel="stylesheet" href="password-change.css" />
  </head>
  <body>
    <div class="wrapper">
      <div class="header">
        <h2>Your Password has been successfully changed!</h2>
      </div>
      <div class="btn-container">
        <a href="login.php" class="btn">Go Back</a>
      </div>
    </div>
    <div></div>
 
  </body>
</html>
