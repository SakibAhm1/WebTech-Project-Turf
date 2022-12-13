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
  $servername = "localhost";
  $username = "root";
  $password = "";
  $databasename = "turf";
  $conn = new mysqli($servername, $username, $password, $databasename);
  if (isset($_GET['id']))
    $slotId = $_GET['id'];

  $sql = "SELECT * FROM `slot` WHERE `slotid`=$slotId";
  $data = $conn->query($sql);
  $row = $data->fetch_assoc();

  $slotId=$row['slotid'];
  $slotTime = $row['time'];
  $price = $row['price'];

  if(isset($_GET['id']) && $_SESSION['role']!="admin") 
  header('Location: error.php?message=AccessDenied');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
</head>
<body>
    <h1>Profile</h1>
    <form action="editSlotProcess.php" method="post">
    <input type="text" name="slotid" value="<?php echo $slotId?>" hidden>
    Slot Time: <input type="text" name="slotTime" value="<?php echo $slotTime?>"> <br>
    Price: <input type="text" name="price" value="<?php echo $price?>"> <br>
    <button type="submit">Edit</button> 
  </form> 
</body>
</html>