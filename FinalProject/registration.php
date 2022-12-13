<!DOCTYPE html>
<html lang="en">
<head>
    <title>RegistrationForm</title>
</head>
<link rel="stylesheet" href="CSS/style.css">
<body>

<div class="hero_image" >
  
<div class="loginbox">
   <h1 class="logfont">RegistrationForm</h1>


  <form action="registrationProcess.php" method="post" class="form_box">
    <label>Firstname: </label>
     <input class="logfont textbox" type="text" name="firstname" > 
    <label>Lastname: </label>
     <input class="logfont textbox" type="text" name="lastname" > 
    <label>Email: </label>
    <input class="logfont textbox" type="text" name="email" > 
    <label>Password: </label>
     <input class="logfont textbox" type="password" name="password" > 
    <label>Phone: </label>
     <input class="logfont textbox" type="text" name="phone" > 
    <label>Gender: </label>
    <input class="logfont textbox" type="text" name ="gender" > 
    <button class="submit_btn" type="submit">Register</button> 
  </form>  
</div>
</div>
</body>
</html>