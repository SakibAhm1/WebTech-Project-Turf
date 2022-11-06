<?php
  session_start();
  if(!isset($_SESSION['userid']))
  {
    if(isset($_COOKIE['userid'])) {
      $_SESSION['userid']=$_COOKIE['userid'];
    }
  }
  
  $servername = "localhost";
  $username = "root";
  $password = "";
  $databasename = "turf";
  $conn = new mysqli($servername, $username, $password, $databasename);
  $cookie_name="userid";
  $cookie_value;

    $sql="SELECT * FROM `slot`";
    $data=$conn->query($sql);  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Slot List</title>
</head>
<body>
    <table>
        <tr>
            <th>Slot ID</th>
            <th>Slot Time</th>
            <th>Price</th>
        </tr>
<?php
while ($row = $data->fetch_assoc()) {
    echo "<tr>";
        echo "<td>".$row['slotid']."</td>";
        echo "<td>".$row['time']."</td>";
        echo "<td>".$row['price']."</td>";
}
?>
    </table>
</body>
</html>