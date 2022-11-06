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

  if($_GET['id']!=$_SESSION['userid'] && $_SESSION['role']!="admin") 
    header('Location: error.php?message=AccessDenied');

  $servername = "localhost";
  $username = "root";
  $password = "";
  $databasename = "turf";
  $conn = new mysqli($servername, $username, $password, $databasename);
  if (isset($_GET['id']))
    $userid = $_GET['id'];
  else 
    $userid = $_SESSION['userid'];
  $sql = "SELECT * FROM `users` WHERE `userid`=$userid";
  $data = $conn->query($sql);
  $row = $data->fetch_assoc();

  $userid=$row['userid'];
  $firstname = $row['firstname'];
  $lastname = $row['lastname'];
  $email = $row['email'];
  $phone = $row['phone'];
  $gender = $row['gender'];

  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
</head>
<body>
    <h1>Profile</h1>
    <form action="profileUpdateProcess.php" method="post">
      <input type="text" name="userid" value="<?php echo $userid?>" hidden>
      Firstname: <input type="text" name="firstname" value="<?php echo $firstname?>"> <br>
      Lastname: <input type="text" name="lastname" value="<?php echo $lastname?>"> <br>
      Email: <input type="text" name="email" value="<?php echo $email?>"> <br>
      Password: <input type="password" name="password"> <br>
      Phone: <input type="text" name="phone" value="<?php echo $phone?>"> <br>
      Gender: <input type="text" name ="gender" value="<?php echo $gender?>"> 
      <button type="submit">Edit</button> 
  </form> 
</body>
</html>