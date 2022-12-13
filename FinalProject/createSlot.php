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
  <form action="createSlotProcess.php" method="post"> 
    Slot Time: <input type="text" name="timeslot" > <br>
    Price: <input type="number" name="price" > <br>
    <button type="submit">Add Slot</button> 
  </form>  
</body>
</html>