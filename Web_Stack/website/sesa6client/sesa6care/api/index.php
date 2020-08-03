
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

	$msmessage = $_GET['msmessage'];
	//$msmessage = "D20203 2 HPF 13.557109,78.49601 0 0 2020-07-15 11:31:03 1 1";
    
    
	if(!isset(explode(" ", $msmessage)[9])){
		echo "Check the message and Try again";
	}
	else{
		$DeviceID = explode(" ", $msmessage)[0];
	$severity = explode(" ", $msmessage)[1];
	$dep_contacted =explode(" ", $msmessage)[2];
	$locations = explode(" ", $msmessage)[3];
	$pic = explode(" ", $msmessage)[4];
	$sos  =explode(" ", $msmessage)[5];
	$Timestamp_date = explode(" ", $msmessage)[6];
	$Timestamp_time = explode(" ", $msmessage)[7];
	$tsds = explode(" ", $msmessage)[9];

	$location_word = "Unnamed Location";


	$H_ID = "";
	$H_d = 99999;
	$P_ID = "";
	$P_d = 99999;
	$F_ID = "";
	$F_d = 99999;

	$H_Status = 3;
	$P_Status = 3;
	$F_Status = 3;

	$JSON = explode(" ", $msmessage)[8];

	$lon = explode(",", $locations)[0];
	$lat = explode(",", $locations)[1];

	$sql = "SELECT w.Name, veh.Type, veh.VehicleID FROM owner_info w, vehicle_info veh WHERE w.DeviceID = veh.DeviceID AND w.DeviceID='".$DeviceID."';";

	$result = $conn->query($sql);

		if (isset($result->num_rows) && $result->num_rows >0) {
    	// output data of each row
    		while($row = $result->fetch_assoc()) {
        		$npe = $row['Name'];
        		$Type = $row['Type'];
        		$VehicleID = $row['VehicleID'];
        	}
        }


	if(strpos($dep_contacted, "H") !== False){
		$sql = "SELECT * FROM hospitalrecord";

		$result = $conn->query($sql);

		if (isset($result->num_rows) && $result->num_rows >0) {
    	// output data of each row
    		while($row = $result->fetch_assoc()) {
        		$lon2 = explode(",", $row['H_Location'])[0];
        		$lat2 = explode(",", $row['H_Location'])[1];

        		$R = 6371; // km (change this constant to get miles)
				$dLat = ($lat2-$lat) * pi() / 180;
				$dLon = ($lon2-$lon) * pi() / 180;
				$a = sin($dLat/2) * sin($dLat/2) + cos($lat * pi() / 180 ) * cos($lat2 * pi() / 180 ) * sin($dLon/2) * sin($dLon/2);
				$c = 2 * atan2(sqrt($a), sqrt(1-$a));
				$d = $R * $c;

				if($H_d >= $d){
					$H_d = $d;
					$H_ID = $row['H_DepartmentID'];
					$H_Name = $row['H_Name'];
					$H_Address = $row['H_Address'];
					$H_Phoneno = $row['H_Phoneno'];
					$H_Location = $row['H_Location'];
					$H_Website = $row['H_Website'];
					$H_Category = $row['H_Category'];
					$H_Service = $row['H_Service'];
				}
        	}
        }
        //echo $H_ID." ".round($H_d,3)."km";
	}
	else{
		$H_ID = "H";
		$H_Status = 1;
	}
	if(strpos($dep_contacted, "P") !== False){
		$sql = "SELECT * FROM policerecord";

		$result = $conn->query($sql);

		if (isset($result->num_rows) && $result->num_rows >0) {
    	// output data of each row
    		while($row = $result->fetch_assoc()) {
        		$lon2 = explode(",", $row['P_Location'])[0];
        		$lat2 = explode(",", $row['P_Location'])[1];

        		$R = 6371; // km (change this constant to get miles)
				$dLat = ($lat2-$lat) * pi() / 180;
				$dLon = ($lon2-$lon) * pi() / 180;
				$a = sin($dLat/2) * sin($dLat/2) + cos($lat * pi() / 180 ) * cos($lat2 * pi() / 180 ) * sin($dLon/2) * sin($dLon/2);
				$c = 2 * atan2(sqrt($a), sqrt(1-$a));
				$d = $R * $c;

				if($P_d >= $d){
					$P_d = $d;
					$P_ID = $row['P_DepartmentID'];
					$P_Name = $row['P_Name'];
					$P_Address = $row['P_Address'];
					$P_Phoneno = $row['P_Phoneno'];
					$P_Location = $row['P_Location'];
					$P_Website = $row['P_Website'];
					$P_Category = $row['P_Category'];
					$P_Service = $row['P_Service'];
				}
        	}
        }
        //echo $P_ID." ".round($P_d,3)."km";
	}
	else{
		$P_ID = "P";
		$P_Status = 1;
	}
	if(strpos($dep_contacted, "F") !== False){
		$sql = "SELECT * FROM fstation";

		$result = $conn->query($sql);

		if (isset($result->num_rows) && $result->num_rows >0) {
    	// output data of each row
    		while($row = $result->fetch_assoc()) {
        		$lon2 = explode(",", $row['F_Location'])[0];
        		$lat2 = explode(",", $row['F_Location'])[1];

        		$R = 6371; // km (change this constant to get miles)
				$dLat = ($lat2-$lat) * pi() / 180;
				$dLon = ($lon2-$lon) * pi() / 180;
				$a = sin($dLat/2) * sin($dLat/2) + cos($lat * pi() / 180 ) * cos($lat2 * pi() / 180 ) * sin($dLon/2) * sin($dLon/2);
				$c = 2 * atan2(sqrt($a), sqrt(1-$a));
				$d = $R * $c;

				if($F_d >= $d){
					$F_d = $d;
					$F_ID = $row['F_DepartmentID'];
					$F_Name = $row['F_Name'];
					$F_Address = $row['F_Address'];
					$F_Phoneno = $row['F_Phoneno'];
					$F_Location = $row['F_Location'];
					$F_Website = $row['F_Website'];
					$F_Category = $row['F_Category'];
					$F_Service = $row['F_Service'];
				}
        	}
        }
        //echo $F_ID." ".round($F_d,3)."km";
	}
	else{
		$F_ID = "F";
		$F_Status = 1;
	}

	date_default_timezone_set("Asia/Kolkata");

	if($tsds == 1){
		$sql = "INSERT INTO `accidentrecord`(`DeviceID`, `Icon_vehicle`, `Owner_name`, `VehicleID`, `Severity`, `Timestamp_date`, `Timestamp_time`, `Department_contacted`, `Location`, `Location_word`, `Pic`, `SOS`, `H_ID`, `P_ID`, `F_ID`, `Update_report`, `H_Status`, `P_Status`, `F_Status`) VALUES ('".$DeviceID."','".$Type."','".$npe."','".$VehicleID."',".$severity.",'".$Timestamp_date."','".$Timestamp_time."','".$dep_contacted."','".$locations."','".$location_word."',".$pic.",'".$sos."','".$H_ID."','".$P_ID."','".$F_ID."','".date('Y-m-d H:i:s')."','".$H_Status."','".$P_Status."','".$F_Status."');";

		$result = $conn->query($sql);

		if($result){
			echo "New record inserted successfully";
		}
		else{
			echo "Error in inserting record";
		}
	}

	$content = "{";

	if($JSON == 1){
		if(strpos($dep_contacted, "H") !== False){
			$content = $content.'{
						"HospitalID" = "'.$H_ID.'",
						"Hospital name" = "'.$H_Name.'",
						"Hospital address" = "'.$H_Address.'",
						"Hospital Phoneno" = "'.$H_Phoneno.'",
						"Hospital Location" = "'.$H_Location.'",
						"Hospital webpage" = "'.$H_Website.'",
						"Hospital service" = "'.$H_Service.'",
						"Hospital dis" = "'.round($H_d,3)."km".'"
					}';
		}
		if(strpos($dep_contacted, "P") !== False){
			$content = $content.',
						{
						"PoliceID" = "'.$P_ID.'",
						"Police name" = "'.$P_Name.'",
						"Police address" = "'.$P_Address.'",
						"Police Phoneno" = "'.$P_Phoneno.'",
						"Police Location" = "'.$P_Location.'",
						"Police webpage" = "'.$P_Website.'",
						"Police service" = "'.$P_Service.'",
						"Police dis" = "'.round($P_d,3)."km".'"
					}';
		}
		if(strpos($dep_contacted, "F") !== False){
			$content = $content.',
					{
						"FirestationID" = "'.$F_ID.'",
						"Firestation name" = "'.$F_Name.'",
						"Firestation address" = "'.$F_Address.'",
						"Firestation Phoneno" = "'.$F_Phoneno.'",
						"Firestation Location" = "'.$F_Location.'",
						"Firestation webpage" = "'.$F_Website.'",
						"Firestation service" = "'.$F_Service.'",
						"Firestation dis" = "'.round($F_d,3)."km".'"
					}';
		}
		$content = $content."}";
		echo $content;
	}
	}


?>