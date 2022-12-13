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

if (!$conn->connect_error) {
  echo "Connected successfully";
  echo "<br>";
}
$userid= $_POST['userid'];
$email = $_POST['email'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];

  if (!validateName($firstname))
    echo "Invalid Firstname"; 
    
  else if (!validateName($lastname))
    echo "Invalid Lastname";

  else if(!validateEmail($email))
    echo "Invalid Email format";

  else if (!validatePassword($password))
    echo "Invalid Password";

  else if (!validatePhone($phone))
    echo "Invalid Phone Number";
    
  else {
  $sql="UPDATE `users` SET `firstname`='$firstname',`lastname`='$lastname',`email`='$email',`password`='$password',`phone`='$phone',`gender`='$gender' WHERE `userid`=$userid";
  $data=$conn->query($sql);
 echo "profile updated";
}



?>