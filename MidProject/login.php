<?php
  session_start();
  if(!isset($_SESSION['userid']))
  {
    if(isset($_COOKIE['userid'])) {
      $_SESSION['userid']=$_COOKIE['userid'];
      header('Location: profile.php');
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
<h1>Log in</h1>
  <form action="loginProcess.php" method="post">
    Email: <input type="email" name="email" > <br>
    Password: <input type="password" name="password" > <br>
    <button type="submit">Log in</button> 
  </form>  
</body>
</html>