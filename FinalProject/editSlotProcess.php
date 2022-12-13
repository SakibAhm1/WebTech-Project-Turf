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

$slotid= $_POST['slotid'];
$time = $_POST['slotTime'];
$price = $_POST['price'];

    if (empty($time) || empty($price))
    echo "Input cannot be empty";

    else {
        $sql="UPDATE `slot` SET `time`='$time',`price`='$price' WHERE `slotid`=$slotid";
        $data=$conn->query($sql);
        echo "slot updated";
}

?>