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
  $cookie_name="userid";
  $cookie_value;

    $sql="SELECT * FROM `users`";
    $data=$conn->query($sql);  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>User List</title>
</head>
<body>
    <table>
        <tr>
            <th>User ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Gender</th>
            <th>Role</th>
        </tr>
<?php
while ($row = $data->fetch_assoc()) {
    echo "<tr>";
        echo "<td>".$row['userid']."</td>";
        echo "<td>".$row['firstname']."</td>";
        echo "<td>".$row['lastname']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['phone']."</td>";
        echo "<td>".$row['gender']."</td>";
        echo "<td>".$row['role']."</td>";
}
?>
    </table>
</body>
</html>