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

$deviceid = $_POST['device_ID'];
$severity = $_POST['severity'];
$hospitalid = $_POST['H_ID'];
$policeid = $_POST['P_ID'];
$firestationid = $_POST['f_ID'];
$d_contacted = "";
$H_Status = 1;
$P_Status = 1;
$F_Status = 1;
if(!isset($hospitalid)||$hospitalid=="Hospital ID"){
	$hospitalid = "H";
}
else{
	$d_contacted = $d_contacted."H";
	$H_Status = 3;
}
if(!isset($policeid)||$policeid=="Police ID"){
	$policeid = "P";
}
else{
	$d_contacted = $d_contacted."P";
	$P_Status = 3;
}
if(!isset($firestationid)||$firestationid=="Firestation ID"){
	$firestationid = "F";
}
else{
	$d_contacted = $d_contacted."F";
	$F_Status = 3;
}
$location = $_POST['Loc'];
$address = $_POST['address'];
$picture = $_POST['picture'];
if($picture == "Yes"){
	$picture = 1;
}
else{
	$picture = 0;
}
$sos = $_POST['SOS'];
if($sos == "Yes"){
	$sos = 1;
}
else{
	$sos = 0;
}
$accidenttime = $_POST['adct_t'];
$timestamp_date = explode("T", $accidenttime)[0];
$timestamp_time = explode("T", $accidenttime)[1].":00";
$updatetime = $_POST['upd_t'];
$updatetime = explode("T", $updatetime)[0]." ".explode("T", $updatetime)[1].":00";

$sql = "SELECT w.Name,veh.VehicleID,veh.Type FROM owner_info w,vehicle_info veh WHERE w.DeviceID = '".$deviceid."' AND veh.DeviceID = '".$deviceid."' AND w.DeviceID = '".$deviceid."';";

$result = $conn->query($sql);
if (isset($result->num_rows) && $result->num_rows >0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $Name =$row["Name"];
        $VehicleID = $row['VehicleID'];
        $vehicletype = $row['Type'];
    }
}

$sql = "INSERT INTO accidentrecord VALUES ('".$deviceid."','".$vehicletype."','".$Name."','".$VehicleID."',".$severity.",'".$timestamp_date."','".$timestamp_time."','".$d_contacted."','".$location."','".$address."',".$picture.",'".$sos."','".$hospitalid."','".$policeid."','".$firestationid."','".$updatetime."','".$H_Status."','".$P_Status."','".$F_Status."');";

if (mysqli_query($conn, $sql)) {
  echo "Accident reported";
} else {
  echo "record not inserted";
}

mysqli_close($conn);
?> 


