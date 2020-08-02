<?php

$servername = "localhost";
$username = "id13306652_sesa6services";
$password = "Vpb~BqA)N59q~q_[";
$dbname = "id13306652_sesaclient";

$sortfilter = "";
if($_COOKIE['iconvehtypevar']!="order"){
	$sortfilter = $sortfilter.",".$_COOKIE['iconvehtypevar'];
}
if($_COOKIE['ownernamevar']!="order"){
	$sortfilter = $sortfilter.",".$_COOKIE['ownernamevar'];
}
if($_COOKIE['vehidvar']!="order"){
	$sortfilter = $sortfilter.",".$_COOKIE['vehidvar'];
}
if($_COOKIE['sevvar']!="order"){
	$sortfilter = $sortfilter.",".$_COOKIE['sevvar'];
}
if($_COOKIE['tsvar']!="order"){
	$sortfilter = $sortfilter.",".$_COOKIE['tsvar'];
}
if($_COOKIE['depvar']!="order"){
	$sortfilter = $sortfilter.",".$_COOKIE['depvar'];
}
if($_COOKIE['locationvar']!="order"){
	$sortfilter = $sortfilter.",".$_COOKIE['locationvar'];
}
if($_COOKIE['deviceidvar']!="order"){
	$sortfilter = $sortfilter.",".$_COOKIE['deviceidvar'];
}
$sortfilter = ltrim($sortfilter,",");

$repc = 0;

session_start();

if(!isset($_SESSION["depid"])){
	echo "<script>
			function pgtp(){
				window.location.href='\login';
			}
			pgtp();
			</script>";
}
else{
	$DepartmentID = $_SESSION["depid"];
}

if(strrchr($DepartmentID,"H") == $DepartmentID){
	$Depl = "H";
}
else if(strrchr($DepartmentID,"P") == $DepartmentID){
	$Depl = "P";
}
else if(strrchr($DepartmentID,"F") == $DepartmentID){
	$Depl = "F";
}

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql2  = "SELECT DISTINCT Timestamp_date FROM accidentrecord WHERE ".$Depl."_ID = '".$DepartmentID."';";
$result2 = $conn->query($sql2);

	if (isset($result2->num_rows) && $result2->num_rows >0) {
				    // output data of each row
				    while($row2 = $result2->fetch_assoc()) {

    	if($sortfilter==""){
			$sql = "SELECT * FROM accidentrecord WHERE Timestamp_date='".$row2['Timestamp_date']."' AND ".$Depl."_ID='".$DepartmentID."'";
		}
		else{
			$sql = "SELECT * FROM accidentrecord WHERE Timestamp_date='".$row2['Timestamp_date']."' AND ".$Depl."_ID='".$DepartmentID."' ORDER BY ".$sortfilter;
		}
		$result = $conn->query($sql);

		if(isset($result->num_rows) && $result->num_rows >0){
		$nr = $result->num_rows;
	}
	else{
		$nr = 0;
	}
				$content = '<div class="element-area">
							<H2>'.$row2['Timestamp_date'].'<span class="content-rec">'.$nr.' Case</span></H2>	
					<button class="firl"  onclick="recentevent()">Recent event</button>
				<div class="elementrec header">
					<div class="ele header icon-veh-type">
						<button class="button-header" id="bicon-veh-type" onclick="changefil(\'icon-veh-type\')">Icon vehicle
							<div class="imgdiv">';
								if($_COOKIE['iconvehtypevar'] == "Icon_vehicle ASC"){
									$content = $content . 
									'<img class="ua" id="ua-veh-type" src="ua.png" style="display:none;"/>
									<img class="uda" id="uda-veh-type" src="uda.png" style="display:block;"/>
									<img class="uaicon-veh-type" id="uaicon-veh-type" src="uda.png" style="display:none;"/>';
								}
								else if($_COOKIE['iconvehtypevar'] == "Icon_vehicle DESC"){
									$content = $content . 
									'<img class="ua" id="ua-veh-type" src="ua.png" style="display:block;"/>
									<img class="uda" id="uda-veh-type" src="uda.png" style="display:none;"/>
									<img class="uaicon-veh-type" id="uaicon-veh-type" src="uda.png" style="display:none;"/>';
								}
								else{
									$content = $content . 
									'<img class="ua" id="ua-veh-type" src="ua.png" style="display:none;"/>
									<img class="uda" id="uda-veh-type" src="uda.png" style="display:none;"/>
									<img class="uaicon-veh-type" id="uaicon-veh-type" src="uda.png" style="display:block;"/>';
								}
							$content = $content . '</div>
						</button>
					</div>
					<div class="ele header deviceID">
						<button class="button-header" id="bdeviceid" onclick="changefil(\'deviceid\')">DeviceID
							<div class="imgdiv">';
								if($_COOKIE['deviceidvar'] == "DeviceID ASC"){
									$content = $content . 
									'<img class="ua" id="uadeviceid" src="ua.png" style="display:none;"/>
									<img class="uda" id="udadeviceid" src="uda.png" style="display:block;"/>
									<img class="uaicondeviceid" id="uaicondeviceid" src="uda.png" style="display:none;"/>';
								}
								else if($_COOKIE['deviceidvar'] == "DeviceID DESC"){
									$content = $content . 
									'<img class="ua" id="uadeviceid" src="ua.png" style="display:block;"/>
									<img class="uda" id="udadeviceid" src="uda.png" style="display:none;"/>
									<img class="uaicondeviceid" id="uaicondeviceid" src="uda.png" style="display:none;"/>';
								}
								else{
									$content = $content . 
									'<img class="ua" id="uadeviceid" src="ua.png" style="display:none;"/>
									<img class="uda" id="udadeviceid" src="uda.png" style="display:none;"/>
									<img class="uaicondeviceid" id="uaicondeviceid" src="uda.png" style="display:block;"/>';
								}
							$content = $content . '</div>
						</button>
					</div>
					<div class="ele header owner-name">
						<button class="button-header" id="bowner-name" onclick="changefil(\'owner-name\')">Onwer Name
							<div class="imgdiv">';
								if($_COOKIE['ownernamevar'] == "Owner_name ASC"){
									$content = $content . 
									'<img class="ua" id="uaowner-name" src="ua.png" style="display:none;"/>
									<img class="uda" id="udaowner-name" src="uda.png" style="display:block;"/>
									<img class="uaiconowner-name" id="uaiconowner-name" src="uda.png" style="display:none;"/>';
								}
								else if($_COOKIE['ownernamevar'] == "Owner_name DESC"){
									$content = $content . 
									'<img class="ua" id="uaowner-name" src="ua.png" style="display:block;"/>
									<img class="uda" id="udaowner-name" src="uda.png" style="display:none;"/>
									<img class="uaiconowner-name" id="uaiconowner-name" src="uda.png" style="display:none;"/>';
								}
								else{
									$content = $content . 
									'<img class="ua" id="uaowner-name" src="ua.png" style="display:none;"/>
									<img class="uda" id="udaowner-name" src="uda.png" style="display:none;"/>
									<img class="uaiconowner-name" id="uaiconowner-name" src="uda.png" style="display:block;"/>';
								}
							$content = $content . '</div>
						</button>
					</div>
					<div class="ele header veh-id">
						<button class="button-header" id="bveh-id" onclick="changefil(\'veh-id\')">Vehicle ID
							<div class="imgdiv">';
							if($_COOKIE['vehidvar'] == "VehicleID ASC"){
									$content = $content . 
									'<img class="ua" id="uaveh-id" src="ua.png" style="display:none;"/>
									<img class="uda" id="udaveh-id" src="uda.png" style="display:block;"/>
									<img class="uaiconveh-id" id="uaiconveh-id" src="uda.png" style="display:none;"/>';
								}
								else if($_COOKIE['vehidvar'] == "VehicleID DESC"){
									$content = $content . 
									'<img class="ua" id="uaveh-id" src="ua.png" style="display:block;"/>
									<img class="uda" id="udaveh-id" src="uda.png" style="display:none;"/>
									<img class="uaiconveh-id" id="uaiconveh-id" src="uda.png" style="display:none;"/>';
								}
								else{
									$content = $content . 
									'<img class="ua" id="uaveh-id" src="ua.png" style="display:none;"/>
									<img class="uda" id="udaveh-id" src="uda.png" style="display:none;"/>
									<img class="uaiconveh-id" id="uaiconveh-id" src="uda.png" style="display:block;"/>';
								}
							$content = $content . '</div>
						</button>
					</div>
					<div class="ele header veh-id">
						<button class="button-header" id="bveh-id" onclick="changefil(\'veh-id\')">Age
							<div class="imgdiv">';
							if($_COOKIE['vehidvar'] == "VehicleID ASC"){
									$content = $content . 
									'<img class="ua" id="uaveh-id" src="ua.png" style="display:none;"/>
									<img class="uda" id="udaveh-id" src="uda.png" style="display:block;"/>
									<img class="uaiconveh-id" id="uaiconveh-id" src="uda.png" style="display:none;"/>';
								}
								else if($_COOKIE['vehidvar'] == "VehicleID DESC"){
									$content = $content . 
									'<img class="ua" id="uaveh-id" src="ua.png" style="display:block;"/>
									<img class="uda" id="udaveh-id" src="uda.png" style="display:none;"/>
									<img class="uaiconveh-id" id="uaiconveh-id" src="uda.png" style="display:none;"/>';
								}
								else{
									$content = $content . 
									'<img class="ua" id="uaveh-id" src="ua.png" style="display:none;"/>
									<img class="uda" id="udaveh-id" src="uda.png" style="display:none;"/>
									<img class="uaiconveh-id" id="uaiconveh-id" src="uda.png" style="display:block;"/>';
								}
							$content = $content . '</div>
						</button>
					</div>
					<div class="ele header veh-id">
						<button class="button-header" id="bveh-id" onclick="changefil(\'veh-id\')">Sex
							<div class="imgdiv">';
							if($_COOKIE['vehidvar'] == "VehicleID ASC"){
									$content = $content . 
									'<img class="ua" id="uaveh-id" src="ua.png" style="display:none;"/>
									<img class="uda" id="udaveh-id" src="uda.png" style="display:block;"/>
									<img class="uaiconveh-id" id="uaiconveh-id" src="uda.png" style="display:none;"/>';
								}
								else if($_COOKIE['vehidvar'] == "VehicleID DESC"){
									$content = $content . 
									'<img class="ua" id="uaveh-id" src="ua.png" style="display:block;"/>
									<img class="uda" id="udaveh-id" src="uda.png" style="display:none;"/>
									<img class="uaiconveh-id" id="uaiconveh-id" src="uda.png" style="display:none;"/>';
								}
								else{
									$content = $content . 
									'<img class="ua" id="uaveh-id" src="ua.png" style="display:none;"/>
									<img class="uda" id="udaveh-id" src="uda.png" style="display:none;"/>
									<img class="uaiconveh-id" id="uaiconveh-id" src="uda.png" style="display:block;"/>';
								}
							$content = $content . '</div>
						</button>
					</div>
					<div class="ele header veh-id">
						<button class="button-header" id="bveh-id" onclick="changefil(\'veh-id\')">Blood group
							<div class="imgdiv">';
							if($_COOKIE['vehidvar'] == "VehicleID ASC"){
									$content = $content . 
									'<img class="ua" id="uaveh-id" src="ua.png" style="display:none;"/>
									<img class="uda" id="udaveh-id" src="uda.png" style="display:block;"/>
									<img class="uaiconveh-id" id="uaiconveh-id" src="uda.png" style="display:none;"/>';
								}
								else if($_COOKIE['vehidvar'] == "VehicleID DESC"){
									$content = $content . 
									'<img class="ua" id="uaveh-id" src="ua.png" style="display:block;"/>
									<img class="uda" id="udaveh-id" src="uda.png" style="display:none;"/>
									<img class="uaiconveh-id" id="uaiconveh-id" src="uda.png" style="display:none;"/>';
								}
								else{
									$content = $content . 
									'<img class="ua" id="uaveh-id" src="ua.png" style="display:none;"/>
									<img class="uda" id="udaveh-id" src="uda.png" style="display:none;"/>
									<img class="uaiconveh-id" id="uaiconveh-id" src="uda.png" style="display:block;"/>';
								}
							$content = $content . '</div>
						</button>
					</div>
					<div class="ele header veh-id">
						<button class="button-header" id="bveh-id" onclick="changefil(\'veh-id\')">Air bag
							<div class="imgdiv">';
							if($_COOKIE['vehidvar'] == "VehicleID ASC"){
									$content = $content . 
									'<img class="ua" id="uaveh-id" src="ua.png" style="display:none;"/>
									<img class="uda" id="udaveh-id" src="uda.png" style="display:block;"/>
									<img class="uaiconveh-id" id="uaiconveh-id" src="uda.png" style="display:none;"/>';
								}
								else if($_COOKIE['vehidvar'] == "VehicleID DESC"){
									$content = $content . 
									'<img class="ua" id="uaveh-id" src="ua.png" style="display:block;"/>
									<img class="uda" id="udaveh-id" src="uda.png" style="display:none;"/>
									<img class="uaiconveh-id" id="uaiconveh-id" src="uda.png" style="display:none;"/>';
								}
								else{
									$content = $content . 
									'<img class="ua" id="uaveh-id" src="ua.png" style="display:none;"/>
									<img class="uda" id="udaveh-id" src="uda.png" style="display:none;"/>
									<img class="uaiconveh-id" id="uaiconveh-id" src="uda.png" style="display:block;"/>';
								}
							$content = $content . '</div>
						</button>
					</div>
					<div class="ele header sev">
						<button class="button-header" id="bsev" onclick="changefil(\'sev\')">Severity
						<div class="imgdiv">';
						if($_COOKIE['sevvar'] == "Severity ASC"){
									$content = $content . 
									'<img class="ua" id="uasev" src="ua.png" style="display:none;"/>
									<img class="uda" id="udasev" src="uda.png" style="display:block;"/>
									<img class="uaiconsev" id="uaiconsev" src="uda.png" style="display:none;"/>';
								}
								else if($_COOKIE['sevvar'] == "Severity DESC"){
									$content = $content . 
									'<img class="ua" id="uasev" src="ua.png" style="display:block;"/>
									<img class="uda" id="udasev" src="uda.png" style="display:none;"/>
									<img class="uaiconsev" id="uaiconsev" src="uda.png" style="display:none;"/>';
								}
								else{
									$content = $content . 
									'<img class="ua" id="uasev" src="ua.png" style="display:none;"/>
									<img class="uda" id="udasev" src="uda.png" style="display:none;"/>
									<img class="uaiconsev" id="uaiconsev" src="uda.png" style="display:block;"/>';
								}
							$content = $content . '</div>
						</button>
					</div>
					<div class="ele header ts">
						<button class="button-header" id="bts" onclick="changefil(\'ts\')">Time stamp
							<div class="imgdiv">';
							if($_COOKIE['tsvar'] == "Timestamp_time ASC"){
									$content = $content . 
									'<img class="ua" id="uats" src="ua.png" style="display:none;"/>
									<img class="uda" id="udats" src="uda.png" style="display:block;"/>
									<img class="uaiconts" id="uaiconts" src="uda.png" style="display:none;"/>';
								}
								else if($_COOKIE['tsvar'] == "Timestamp_time DESC"){
									$content = $content . 
									'<img class="ua" id="uats" src="ua.png" style="display:block;"/>
									<img class="uda" id="udats" src="uda.png" style="display:none;"/>
									<img class="uaiconts" id="uaiconts" src="uda.png" style="display:none;"/>';
								}
								else{
									$content = $content . 
									'<img class="ua" id="uats" src="ua.png" style="display:none;"/>
									<img class="uda" id="udats" src="uda.png" style="display:none;"/>
									<img class="uaiconts" id="uaiconts" src="uda.png" style="display:block;"/>';
								}
							$content = $content . '</div>
						</button>
					</div>
					<div class="ele header location">
						<button class="button-header" id="blocation" onclick="changefil(\'location\')">Location
							<div class="imgdiv">';
							if($_COOKIE['locationvar'] == "Location ASC"){
									$content = $content . 
									'<img class="ua" id="ualocation" src="ua.png" style="display:none;"/>
									<img class="uda" id="udalocation" src="uda.png" style="display:block;"/>
									<img class="uaiconlocation" id="uaiconlocation" src="uda.png" style="display:none;"/>';
								}
								else if($_COOKIE['locationvar'] == "Location DESC"){
									$content = $content . 
									'<img class="ua" id="ualocation" src="ua.png" style="display:block;"/>
									<img class="uda" id="udalocation" src="uda.png" style="display:none;"/>
									<img class="uaiconlocation" id="uaiconlocation" src="uda.png" style="display:none;"/>';
								}
								else{
									$content = $content . 
									'<img class="ua" id="ualocation" src="ua.png" style="display:none;"/>
									<img class="uda" id="udalocation" src="uda.png" style="display:none;"/>
									<img class="uaiconlocation" id="uaiconlocation" src="uda.png" style="display:block;"/>';
								}
							$content = $content . '</div>
						</button>
					</div>
					<div class="ele header dep">
						<button class="button-header" id="bdep" onclick="changefil(\'dep\')">Action
							<div class="imgdiv">';
							if($_COOKIE['depvar'] == "Department_contacted ASC"){
									$content = $content . 
									'<img class="ua" id="uadep" src="ua.png" style="display:none;"/>
									<img class="uda" id="udadep" src="uda.png" style="display:block;"/>
									<img class="uaicondep" id="uaicondep" src="uda.png" style="display:none;"/>';
								}
								if($_COOKIE['depvar'] == "Department_contacted DESC"){
									$content = $content . 
									'<img class="ua" id="uadep" src="ua.png" style="display:block;"/>
									<img class="uda" id="udadep" src="uda.png" style="display:none;"/>
									<img class="uaicondep" id="uaicondep" src="uda.png" style="display:none;"/>';
								}
								else{
									$content = $content . 
									'<img class="ua" id="uadep" src="ua.png" style="display:none;"/>
									<img class="uda" id="udadep" src="uda.png" style="display:none;"/>
									<img class="uaicondep" id="uaicondep" src="uda.png" style="display:block;"/>';
								}
							$content = $content . '</div>
						</button>
					</div>
				</div>';
				echo $content;
				if (isset($result->num_rows) && $result->num_rows >0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        $DeviceID =$row["DeviceID"];
				        $Icon_vehicle= $row["Icon_vehicle"];
				        $Owner_Name =$row["Owner_name"];
				        $VehicleID= $row["VehicleID"];
				        $Severity =$row["Severity"];
				        $Timestamp_date= $row["Timestamp_date"];
				        $Timestamp_time = $row["Timestamp_time"];
				        $Timestamp = $Timestamp_date." ".$Timestamp_time;
				        $Department_contacted =$row["Department_contacted"];
				        $Location= $row["Location"];
				        $Pic = $row["Pic"];
				        $H_Status = $row['H_Status'];
                        $P_Status = $row['P_Status'];
                        $F_Status = $row['F_Status'];
				        $Update_report = $row['Update_report'];
				        $td = new DateTime(date('Y-m-d H:i:s'));
        $tdc = $td->diff(new DateTime($Update_report));
        date_default_timezone_set('Asia/Kolkata');
        $date1 = strtotime($Update_report);
		$date2 = strtotime(date('Y-m-d H:i:s', time()));
		$subTime = $date2 - $date1;
		$d = ($subTime/(60*60*24))%365;
		$h = ($subTime/(60*60))%24;
		$m = ($subTime/60)%60;
		$s = ($subTime)%60;
        if($d==0){
        	if($h==0){
        		if($m==0){
        			$tdc = $s."s";
        		}else{
        			$tdc = $m."min"." ".$s."s";
        		}
        	}else{
        		$tdc = $h."h"." ".$m."min";
        	}
        }else{
        	$tdc = $d."d"." ".$h."h";
        }

        $sql2 = "SELECT t.Age,t.Sex,t.Blood_group,veh.Air_Bags FROM owner_info t,vehicle_info veh WHERE t.DeviceID='".$DeviceID."' AND veh.DeviceID='".$DeviceID."';";
	$result2 = $conn->query($sql2);
	if($result2){
		while($row = $result2->fetch_assoc()) {
			$Age = $row['Age'];
			$Sex = $row['Sex'];
			$Blood_group = $row['Blood_group'];
			$Air_Bags = $row['Air_Bags'];
	}	
}
						$repc = $repc + 1;
						if($Depl == "H"){
						    $Status = $H_Status;
						}
						else if($Depl == "P"){
						    $Status = $P_Status;
						}
						else{
						    $Status = $F_Status;
						}

				        /*vehicle category
							Sedan Car SUV Bus Van Truck htruck*/
						/* Severity 
							1 - Police
							2 - Police Hospital
							3 - Police Hospital Fire station*/
						/* Department Contacted 
							P - Police
							H - Hospital
							F - Fire station*/
						/* Location
							12.56475,23,56453*/
							if($Pic==0){
								$contentl = '<div class="elementrec data" onclick="location.href=\'detailpage.php?DeviceID='.$DeviceID.' '.$Timestamp_date.' '.$Timestamp_time.'\'" id="D'.$DeviceID.'D'.$Timestamp_date.'">';
							}
							else
							{
								$contentl = '<div class="elementrec data" onclick="location.href=\'detailpage2.php?DeviceID='.$DeviceID.' '.$Timestamp_date.' '.$Timestamp_time.'\'" id="D'.$DeviceID.'D'.$Timestamp_date.'">';
							}
						
						echo $contentl.'
				       			 	<div class="ele icon-veh-type">
										<img class="img-icon" src ="svg\\'.$Icon_vehicle.'-svg.svg"/>
									</div>
									<div class="ele DeviceID">
										<label>'.$DeviceID.'</label>
									</div>
									<div class="ele owner-name">
										<label>'.$Owner_Name.'</label>
									</div>
									<div class="ele veh-id">
										<label>'.$VehicleID.'</label>
									</div>
									<div class="ele veh-id">
						<label>'.$Age.'</label>
					</div>
					<div class="ele veh-id">
						<label>'.$Sex.'</label>
					</div>
					<div class="ele veh-id">
						<label>'.$Blood_group.'</label>
					</div>
					<div class="ele veh-id">
						<label>'.$Air_Bags.'</label>
					</div>
									<div class="ele sev">
										<img class="img-icon" src="sev'.$Severity.'.svg.svg"/>
									</div>
									<div class="ele ts">
										<label>'.$Timestamp.'</label>
									</div>
									<form method="POST" action="locatepage.php">
					<div class="ele location">
						<input type="text" name="DeviceID" value="'.$DeviceID.' '.$Timestamp_date.' '.$Timestamp_time.'"/>
						<button id="lD'.$DeviceID.'D'.$Timestamp_date.'"><img class="location-pointer" src="place.png"/></button>
					</div>
					</form>
									<div class="ele dep">';
					if($Status==3||$Status==2){
						echo '<div class="tansbg">
								<form method="POST" action="tranfpage.php">
                					<div class="transbg transb">
                							<input type="text" name="DeviceID" id="tranb" value="'.$DeviceID.' '.$Depl.' '.$Timestamp_date.' '.$Timestamp_time.'"/>
                    						<button name="transb" id="t'.$DeviceID."D".$Timestamp_date.'">Transfer</button>
                					</div>
                				</form>
                					<div class="transbg acceb">
                    						<button name="acceb" id="a'.$DeviceID."D".$Timestamp_date.'" onclick="transb(\''.$DeviceID.' '.$Timestamp_date.' '.$Timestamp_time.' '.$Depl.'\');">Accept</button>
                					</div>
    						</div>';
					}
					else if($Status==1){
						echo '<div class="transbg acceb">
                    						<button name="acceb">Accepted</button>
                					</div>';
					}
					echo '</div>';
									if($H_Status==1&&$P_Status==1&&$F_Status==1){
										echo '<div class="ele updatereport">';
									}
									else if($H_Status==2||$P_Status==2||$F_Status==2){
										echo '<div class="ele updatereport org">';
									}
									else
										echo '<div class="ele updatereport red">';
									echo '<center><p class="ats"> '.$tdc.' ago</p></center>
										</div>
									<div class="cameraicon">';
									if($Pic==1){
										echo '<img src="photo-camera.svg">';
									}
									echo '</div>
								</div></div>';
				    }
				} else {
				    
				}
  }
}

echo "<script>var message = ".$repc.";</script>";

$conn->close();

?>