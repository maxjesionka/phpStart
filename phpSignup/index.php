<?php
require_once 'includes/config_session.inc.php';
require_once 'includes/signup_view.inc.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php course</title>
</head>

<body style="background-color:antiquewhite;">

<h3>Login</h3>
  <form action='includes/login.inc.php' method='post'>
    <input type ='text' name='username' placeholder='username'>
    <input type ='text' name='pwd' placeholder='password'>
    <button>Login</button>
  </form>

<?php
check_login_errors();
?>

  <br>



    <h3>Create account</h3>
  <form action='includes/signup.inc.php' method='post'>
  <?php  signup_input()
  ?>
    <button>Signup</button>
  </form>
  <br>

 
<?php
check_signup_errors();
?>

  


</body>

</html>