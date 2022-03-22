<?php
$servername = "openshift6";
$username = "root";
$password = "123";
$dbname = "grocery";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT  itemName, qty FROM list";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Item: " . $row["itemName"]. " " . $row["qty"]. "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
