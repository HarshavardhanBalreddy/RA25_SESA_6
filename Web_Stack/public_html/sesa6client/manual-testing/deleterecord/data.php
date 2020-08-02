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


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql2  = "SELECT DISTINCT Timestamp_date FROM accidentrecord";
$result2 = $conn->query($sql2);

	if (isset($result2->num_rows) && $result2->num_rows >0) {
				    // output data of each row
				    while($row2 = $result2->fetch_assoc()) {

    	if($sortfilter==""){
			$sql = "SELECT * FROM accidentrecord WHERE Timestamp_date='".$row2['Timestamp_date']."'";
		}
		else{
			$sql = "SELECT * FROM accidentrecord WHERE Timestamp_date='".$row2['Timestamp_date']."' ORDER BY ".$sortfilter;
		}
		$result = $conn->query($sql);

		if(isset($result->num_rows) && $result->num_rows >0){
		$nr = $result->num_rows;
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
									'<img class="ua" id="ua-veh-type" src="" style="display:none;"/>
									<img class="uda" id="uda-veh-type" src="" style="display:block;"/>
									<img class="uaicon-veh-type" id="uaicon-veh-type" src="" style="display:none;"/>';
								}
								else if($_COOKIE['iconvehtypevar'] == "Icon_vehicle DESC"){
									$content = $content . 
									'<img class="ua" id="ua-veh-type" src="" style="display:block;"/>
									<img class="uda" id="uda-veh-type" src="" style="display:none;"/>
									<img class="uaicon-veh-type" id="uaicon-veh-type" src="" style="display:none;"/>';
								}
								else{
									$content = $content . 
									'<img class="ua" id="ua-veh-type" src="" style="display:none;"/>
									<img class="uda" id="uda-veh-type" src="" style="display:none;"/>
									<img class="uaicon-veh-type" id="uaicon-veh-type" src="" style="display:block;"/>';
								}
							$content = $content . '</div>
						</button>
					</div>
					<div class="ele header deviceID">
						<button class="button-header" id="bdeviceid" onclick="changefil(\'deviceid\')">DeviceID
							<div class="imgdiv">';
								if($_COOKIE['deviceidvar'] == "DeviceID ASC"){
									$content = $content . 
									'<img class="ua" id="uadeviceid" src="" style="display:none;"/>
									<img class="uda" id="udadeviceid" src="" style="display:block;"/>
									<img class="uaicondeviceid" id="uaicondeviceid" src="" style="display:none;"/>';
								}
								else if($_COOKIE['deviceidvar'] == "DeviceID DESC"){
									$content = $content . 
									'<img class="ua" id="uadeviceid" src="" style="display:block;"/>
									<img class="uda" id="udadeviceid" src="" style="display:none;"/>
									<img class="uaicondeviceid" id="uaicondeviceid" src="" style="display:none;"/>';
								}
								else{
									$content = $content . 
									'<img class="ua" id="uadeviceid" src="" style="display:none;"/>
									<img class="uda" id="udadeviceid" src="" style="display:none;"/>
									<img class="uaicondeviceid" id="uaicondeviceid" src="" style="display:block;"/>';
								}
							$content = $content . '</div>
						</button>
					</div>
					<div class="ele header owner-name">
						<button class="button-header" id="bowner-name" onclick="changefil(\'owner-name\')">Onwer Name
							<div class="imgdiv">';
								if($_COOKIE['ownernamevar'] == "Owner_name ASC"){
									$content = $content . 
									'<img class="ua" id="uaowner-name" src="" style="display:none;"/>
									<img class="uda" id="udaowner-name" src="" style="display:block;"/>
									<img class="uaiconowner-name" id="uaiconowner-name" src="" style="display:none;"/>';
								}
								else if($_COOKIE['ownernamevar'] == "Owner_name DESC"){
									$content = $content . 
									'<img class="ua" id="uaowner-name" src="" style="display:block;"/>
									<img class="uda" id="udaowner-name" src="" style="display:none;"/>
									<img class="uaiconowner-name" id="uaiconowner-name" src="" style="display:none;"/>';
								}
								else{
									$content = $content . 
									'<img class="ua" id="uaowner-name" src="" style="display:none;"/>
									<img class="uda" id="udaowner-name" src="" style="display:none;"/>
									<img class="uaiconowner-name" id="uaiconowner-name" src="" style="display:block;"/>';
								}
							$content = $content . '</div>
						</button>
					</div>
					<div class="ele header veh-id">
						<button class="button-header" id="bveh-id" onclick="changefil(\'veh-id\')">Vehicle ID
							<div class="imgdiv">';
							if($_COOKIE['vehidvar'] == "VehicleID ASC"){
									$content = $content . 
									'<img class="ua" id="uaveh-id" src="" style="display:none;"/>
									<img class="uda" id="udaveh-id" src="" style="display:block;"/>
									<img class="uaiconveh-id" id="uaiconveh-id" src="" style="display:none;"/>';
								}
								else if($_COOKIE['vehidvar'] == "VehicleID DESC"){
									$content = $content . 
									'<img class="ua" id="uaveh-id" src="" style="display:block;"/>
									<img class="uda" id="udaveh-id" src="" style="display:none;"/>
									<img class="uaiconveh-id" id="uaiconveh-id" src="" style="display:none;"/>';
								}
								else{
									$content = $content . 
									'<img class="ua" id="uaveh-id" src="" style="display:none;"/>
									<img class="uda" id="udaveh-id" src="" style="display:none;"/>
									<img class="uaiconveh-id" id="uaiconveh-id" src="" style="display:block;"/>';
								}
							$content = $content . '</div>
						</button>
					</div>
					<div class="ele header sev">
						<button class="button-header" id="bsev" onclick="changefil(\'sev\')">Severity
						<div class="imgdiv">';
						if($_COOKIE['sevvar'] == "Severity ASC"){
									$content = $content . 
									'<img class="ua" id="uasev" src="" style="display:none;"/>
									<img class="uda" id="udasev" src="" style="display:block;"/>
									<img class="uaiconsev" id="uaiconsev" src="" style="display:none;"/>';
								}
								else if($_COOKIE['sevvar'] == "Severity DESC"){
									$content = $content . 
									'<img class="ua" id="uasev" src="" style="display:block;"/>
									<img class="uda" id="udasev" src="" style="display:none;"/>
									<img class="uaiconsev" id="uaiconsev" src="" style="display:none;"/>';
								}
								else{
									$content = $content . 
									'<img class="ua" id="uasev" src="" style="display:none;"/>
									<img class="uda" id="udasev" src="" style="display:none;"/>
									<img class="uaiconsev" id="uaiconsev" src="" style="display:block;"/>';
								}
							$content = $content . '</div>
						</button>
					</div>
					<div class="ele header ts">
						<button class="button-header" id="bts" onclick="changefil(\'ts\')">Time stamp
							<div class="imgdiv">';
							if($_COOKIE['tsvar'] == "Timestamp_time ASC"){
									$content = $content . 
									'<img class="ua" id="uats" src="" style="display:none;"/>
									<img class="uda" id="udats" src="" style="display:block;"/>
									<img class="uaiconts" id="uaiconts" src="" style="display:none;"/>';
								}
								else if($_COOKIE['tsvar'] == "Timestamp_time DESC"){
									$content = $content . 
									'<img class="ua" id="uats" src="" style="display:block;"/>
									<img class="uda" id="udats" src="" style="display:none;"/>
									<img class="uaiconts" id="uaiconts" src="" style="display:none;"/>';
								}
								else{
									$content = $content . 
									'<img class="ua" id="uats" src="" style="display:none;"/>
									<img class="uda" id="udats" src="" style="display:none;"/>
									<img class="uaiconts" id="uaiconts" src="" style="display:block;"/>';
								}
							$content = $content . '</div>
						</button>
					</div>
					<div class="ele header dep">
						<button class="button-header" id="bdep" onclick="changefil(\'dep\')">Department Contacted
							<div class="imgdiv">';
							if($_COOKIE['depvar'] == "Department_contacted ASC"){
									$content = $content . 
									'<img class="ua" id="uadep" src="" style="display:none;"/>
									<img class="uda" id="udadep" src="" style="display:block;"/>
									<img class="uaicondep" id="uaicondep" src="" style="display:none;"/>';
								}
								if($_COOKIE['depvar'] == "Department_contacted DESC"){
									$content = $content . 
									'<img class="ua" id="uadep" src="" style="display:block;"/>
									<img class="uda" id="udadep" src="" style="display:none;"/>
									<img class="uaicondep" id="uaicondep" src="" style="display:none;"/>';
								}
								else{
									$content = $content . 
									'<img class="ua" id="uadep" src="" style="display:none;"/>
									<img class="uda" id="udadep" src="" style="display:none;"/>
									<img class="uaicondep" id="uaicondep" src="" style="display:block;"/>';
								}
							$content = $content . '</div>
						</button>
					</div>
					<div class="ele header location">
						<button class="button-header" id="blocation" onclick="changefil(\'location\')">Action
							<div class="imgdiv">';
							if($_COOKIE['locationvar'] == "Location ASC"){
									$content = $content . 
									'<img class="ua" id="ualocation" src="" style="display:none;"/>
									<img class="uda" id="udalocation" src="" style="display:block;"/>
									<img class="uaiconlocation" id="uaiconlocation" src="" style="display:none;"/>';
								}
								else if($_COOKIE['locationvar'] == "Location DESC"){
									$content = $content . 
									'<img class="ua" id="ualocation" src="" style="display:block;"/>
									<img class="uda" id="udalocation" src="" style="display:none;"/>
									<img class="uaiconlocation" id="uaiconlocation" src="" style="display:none;"/>';
								}
								else{
									$content = $content . 
									'<img class="ua" id="ualocation" src="" style="display:none;"/>
									<img class="uda" id="udalocation" src="" style="display:none;"/>
									<img class="uaiconlocation" id="uaiconlocation" src="" style="display:block;"/>';
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
				        $Status = $row['Status'];
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
								$contentl = '<div class="elementrec data">';
							}
							else
							{
								$contentl = '<div class="elementrec data">';
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
									<div class="ele sev">
										<img class="img-icon" src="sev'.$Severity.'.svg.svg"/>
									</div>
									<div class="ele ts">
										<label>'.$Timestamp.'</label>
									</div>
									<div class="ele dep">
										<div class="img-dep">';
										if (strpos($Department_contacted, 'P') !== false) {
				   				 			echo '<img class="icon-dep police" src="police.png"/>';
										}
										else{
											echo '<img class="icon-dep alimg" src="police.png"/>';
										}
										if (strpos($Department_contacted, 'H') !== false) {
											echo '<img class="icon-dep hospital" src="hospital.png"/>';
										}
										else{
											echo '<img class="icon-dep alimg" src="hospital.png"/>';
										}
										if (strpos($Department_contacted, 'F') !== false) {
											echo '<img class="icon-dep fire station" src="fire station.png"/>';
										}
										else
										{
											echo '<img class="icon-dep fire alimg" src="fire station.png"/>';
										}
									echo'</div>
									</div>
									<form>
									<div class="ele location">
										<input type="text" name="DeviceID" value="'.$DeviceID.'"/>
										<button class="tmd" style="background:red;color:white;background:red;left:-2px" onclick="tmd(\''.$DeviceID.'\',\''.$Timestamp_date.'\',\''.$Timestamp_time.'\');">Delete</button>
									</div>
									</form>
									';
									if($Status==1){
										echo '<div class="ele updatereport">';
									}
									else if($Status==2){
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


$conn->close();

?>