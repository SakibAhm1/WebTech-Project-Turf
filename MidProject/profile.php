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
  if(!isset($_SESSION['userid']))
  {
    if(isset($_COOKIE['userid'])) {
      $_SESSION['userid']=$_COOKIE['userid'];
    }
    else 
        header('Location: login.php');
  }

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

  $userid = $row['userid'];
  $firstname = $row['firstname'];
  $lastname = $row['lastname'];
  $email = $row['email'];
  $phone = $row['phone'];
  $gender = $row['gender'];
  $role = $row['role'];
  
  if(isset($_GET['id']) && $_SESSION['role']!="admin") 
    header('Location: error.php?message=AccessDenied');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Profile</title>
</head>
<body>
<?php 
    echo "Firstname: ".$firstname."<br>";
    echo "Lastname: ".$lastname."<br>";
    echo "Email: ".$email."<br>";
    echo "Phone: ".$phone."<br>";
    echo "Gender: ".$gender."<br>";
    echo "<a href='http://localhost/MidProject/editprofile.php?id=$userid'>Edit Profile</a>";
?>
</body>
</html>