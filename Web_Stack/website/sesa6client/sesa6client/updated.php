<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sesaclient";

$Department_ID = $_POST['searchinput'];
$ci = $_POST['ci'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "UPDATE accidentrecord SET ".explode(' ',$ci)[3]."_ID='".$Department_ID."' WHERE DeviceID='".explode(' ',$ci)[0]."' AND Timestamp_date='".explode(' ',$ci)[1]."' AND Timestamp_time='".explode(' ',$ci)[2]."';";
$result = $conn->query($sql);
if($result){
	$sql = "UPDATE accidentrecord SET ".explode(' ',$ci)[3]."_Status = 2 WHERE DeviceID='".explode(' ',$ci)[0]."' AND Timestamp_date='".explode(' ',$ci)[1]."' AND Timestamp_time='".explode(' ',$ci)[2]."';";
	$result = $conn->query($sql);
	echo "<script>window.location = 'index.php'</script>";
}

$conn->close();


?>