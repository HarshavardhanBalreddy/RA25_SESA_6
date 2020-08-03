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

$sql2 = "SELECT Department_contacted FROM accidentrecord WHERE DeviceID='".explode(' ',$ci)[0]."' AND Timestamp_date='".explode(' ',$ci)[1]."' AND Timestamp_time='".explode(' ',$ci)[2]."';";
$result2 = $conn->query($sql2);

if (isset($result2->num_rows) && $result2->num_rows >0) {
    // output data of each row
    while($row2 = $result2->fetch_assoc()) {
        $Department_contacted =$row2["Department_contacted"];
    }
}

$Department_contacted = $Department_contacted.explode(' ',$ci)[3];

$sql2 = "UPDATE accidentrecord SET Department_contacted='".$Department_contacted."' WHERE DeviceID='".explode(' ',$ci)[0]."' AND Timestamp_date='".explode(' ',$ci)[1]."' AND Timestamp_time='".explode(' ',$ci)[2]."';";
$result2 = $conn->query($sql2);

if($result){
	$sql = "UPDATE accidentrecord SET ".explode(' ',$ci)[3]."_Status = 2 WHERE DeviceID='".explode(' ',$ci)[0]."' AND Timestamp_date='".explode(' ',$ci)[1]."' AND Timestamp_time='".explode(' ',$ci)[2]."';";
	$result = $conn->query($sql);
	echo "<script>window.location = './'</script>";
}

$conn->close();


?>