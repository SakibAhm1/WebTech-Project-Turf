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
include "validation.php";
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "turf";
$conn = new mysqli($servername, $username, $password, $databasename);

$timeSlot=$_POST['timeslot'];
$price=$_POST['price'];
if(empty($timeSlot) || empty($price))
    echo "Input cannot be empty";
else {
  $sql="SELECT * FROM `slot` WHERE `time`='$timeSlot'";
  $data=$conn->query($sql);
  if($data->num_rows > 0){
    echo "Already existing time slot";
  }
  else {  
      $sql2="INSERT INTO `slot`(`time`, `price`) VALUES ('$timeSlot','$price')";
      echo "Slot Created";
      $data=$conn->query($sql2);
  } 
}
?>