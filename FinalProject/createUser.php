<?php
  session_start();
  if(!isset($_SESSION['userid']))
  {
    if(isset($_COOKIE['userid'])) {
      $_SESSION['userid']=$_COOKIE['userid'];
    }
    else 
        header('Location: login.php');
  }
  if($_SESSION['role']!="admin") 
  header('Location: error.php?message=AccessDenied');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>RegistrationForm</title>
</head>
<body>
<h1>RegistrationForm</h1>
  <form action="registrationProcess.php" method="post"> 
    Email: <input type="text" name="email" > <br>
    Password: <input type="password" name="password" > <br>
    <button type="submit">Register</button> 
  </form>  
</body>
</html>