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
<link rel="stylesheet" href="CSS/style.css">
<body>
  <!-- <img class="hero_image" src="./images/Untitled.png"/> -->
  <div class="hero_image" >
  
<div class="loginbox"> 

<h1 class="logfont">Log in</h1>
  <form action="loginProcess.php" method="post" class="form_box">
    <label>Email: </label>
    
    <input class="logfont textbox" type="email" name="email" > 
    <label>Password: </label> <input class="logfont textbox"type="password" name="password" > 
    <button class="submit_btn" type="submit">Log in</button> 
      <div>  <a class="reg_link" href="http://localhost/FinalProject/registration.php"> Didn't have an account? register here... </a></div>
  </form>  
 
</div>
</div>

</body>
</html>