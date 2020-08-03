<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sesaclient";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$DeviceID = $_POST['DeviceID'];
$Timestamp_date = $_POST['Timestamp_date'];
$Timestamp_time = $_POST['Timestamp_time'];

$sql = "DELETE FROM accidentrecord WHERE DeviceID = '".$DeviceID."' AND Timestamp_date = '".$Timestamp_date."' AND Timestamp_time = '".$Timestamp_time."';";

$result = $conn->query($sql);
if (isset($result->num_rows) && $result->num_rows >0) {
    // output data of each row
   
}
mysqli_close($conn);
?> 