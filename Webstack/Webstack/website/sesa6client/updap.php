<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sesaclient";

$DeviceIDt = $_POST['DeviceID'];
$DeviceID = explode(" ", $DeviceIDt)[0];
$Timestamp_date = explode(" ", $DeviceIDt)[1];
$Timestamp_time = explode(" ", $DeviceIDt)[2];
$Depl = explode(" ", $DeviceIDt)[3];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE accidentrecord SET ".$Depl."_Status = 1 WHERE DeviceID='".$DeviceID."' AND Timestamp_date='".$Timestamp_date."' AND Timestamp_time='".$Timestamp_time."';";

$result = $conn->query($sql);

$conn->close();


?>