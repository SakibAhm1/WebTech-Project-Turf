<?php
  session_start();
  if(!isset($_SESSION['userid']))
  {
    if(isset($_COOKIE['userid'])) {
      $_SESSION['userid']=$_COOKIE['userid'];
    }
    
  }
  include "validation.php";
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $databasename = "turf";
  $conn = new mysqli($servername, $username, $password, $databasename);
  $cookie_name="userid";
  $cookie_value;

  if (!$conn->connect_error) {
    echo "Connected successfully";
    echo "<br>";
  }

  $email = $_POST['email'];
  $password = $_POST['password'];
  if(!validateEmail($email))
    echo "Invalid Email format";
  else if(empty($password))
    echo "Please enter password";
  else {
    $sql="SELECT `userid`, `role` FROM `users` WHERE `email`='$email' AND `password`='$password'";
    $data=$conn->query($sql);
    if($data->num_rows == 1){
      $row = $data->fetch_assoc();
      $cookie_value=$row['userid'];
      setcookie($cookie_name, $cookie_value, time() + (86400 * 30));
      $_SESSION['userid'] = $row['userid'];
      $_SESSION['role'] = $row['role'];
      echo "Login Succesful";
      header('Location: home.php');
    }
    else echo "Login Failed. Incorrect Username or Password";
  }


?>