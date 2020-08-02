<?php
$servername = "localhost";
$username = "id13306652_sesa6services";
$password = "Vpb~BqA)N59q~q_[";
$dbname = "id13306652_sesaclient";

$DeviceIDw = $_POST['DeviceID'];
$DeviceID = explode(" ", $DeviceIDw)[0];
$T_d = explode(" ", $DeviceIDw)[1];
$T_t = explode(" ", $DeviceIDw)[2];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT `Timestamp_date`,Timestamp_time,Severity,Location,Location_word,H_ShortName,H_Location,H_ShortAddress,P_ShortName,P_Location,P_ShortAddress,F_ShortName,F_Location,F_ShortAddress,Name,Age,Sex,Address,Phoneno,Family_contacted1,Family_contacted2,Blood_group,accidentrecord.VehicleID,Type,Brand,Model,Dimension,Air_bags,Capacity,Licence_no FROM accidentrecord,owner_info,vehicle_info,hospitalrecord,policerecord,fstation WHERE owner_info.DeviceID = accidentrecord.DeviceID and vehicle_info.DeviceID = accidentrecord.DeviceID and H_DepartmentID = accidentrecord.H_ID and P_DepartmentID = accidentrecord.P_ID and F_DepartmentID = accidentrecord.F_ID and accidentrecord.DeviceID = '".$DeviceID."' AND accidentrecord.Timestamp_date = '".$T_d."' AND accidentrecord.Timestamp_time = '".$T_t."';";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
    	$Timestamp_date = $row['Timestamp_date'];
    	$Timestamp_time = $row['Timestamp_time'];
    	$Timestamp = $Timestamp_date." ".$Timestamp_time;
        $Location = $row['Location'];
		$Location_word = $row['Location_word'];
		$Severity = $row['Severity'];
		$H_name = $row['H_ShortName'];
		$H_location = $row['H_Location'];
		$H_location_word = $row['H_ShortAddress'];
		$P_name = $row['P_ShortName'];
		$P_location = $row['P_Location'];
		$P_location_word = $row['P_ShortAddress'];
		$F_name = $row['F_ShortName'];
		$F_location = $row['F_Location'];
		$F_location_word = $row['F_ShortAddress'];
		$Name = $row['Name'];
		$Age = $row['Age'];
		$Sex = $row['Sex'];
		$Address = $row['Address'];
		$Phoneno = $row['Phoneno'];
		$Family_contacted1 = $row['Family_contacted1'];
		$Family_contacted2 = $row['Family_contacted2'];
		$Blood_group = $row['Blood_group'];
		$VehicleID = $row['VehicleID'];
		$Type = $row['Type'];
		$Brand = $row['Brand'];
		$Model = $row['Model'];
		$Dimension = $row['Dimension'];
		$Air_bags = $row['Air_bags'];
		$Capacity = $row['Capacity'];
		$Licence_no = $row['Licence_no'];

		$loca = explode(",",$Location);
		$lat = $loca[0];
		$lon = $loca[1];

		$dateformat = explode(" ",$Timestamp);

		if(date("d/m/Y")== $dateformat[0])
		{
			$Timestamp = "Today ".$dateformat[1];
		}

$content = '<div class="title-display">
						<div class="div-section-title icon">
							<img src="svg\\'.$Type.'-svg.svg" style="width: 4rem;">	
						</div>
						<div class="div-section-title sevarity">
							<img src="sev'.$Severity.'.svg.svg" style="width: 4rem;">
						</div>
						<div class="div-section-title ts">
							<h2 class="ts" style="color: black;position: static;padding: 0;">'.$Timestamp.'</h2>
						</div>
					</div>

					<div class="section-area">
						<div class="div-section owner-info">
    						<h4> Owner info </h4>
							<table>
								
								<tbody><tr>
									<th> Name </th>
									<td> '.$Name.' </td>
								</tr>
								<tr>
									<th> Age </th>
									<td> '.$Age.' </td>
								</tr>
								<tr>
									<th> Sex </th>
									<td> '.$Sex.' </td>
								</tr>
								<tr>
									<th> Address</th>
									<td> '.$Address. '</td>
								</tr>
								<tr>
									<th> Phone No</th>
									<td> '.$Phoneno.' </td>
								</tr>
								<tr>
									<th> Family Contact 1</th>
									<td> '.$Family_contacted1.' </td>
								</tr>
								<tr>
									<th> Family Contact 2</th>
									<td> '.$Family_contacted2.' </td>
								</tr>
								<tr>
									<th><span style="color:red;"> Blood Group</span></th>
									<td><span style="color:red;"> '.$Blood_group.' </span></td>
								</tr>
							</tbody></table>
						</div>
						<div class="div-section vehicle-info">
    <h4> Vehicle info</h4>
							<table>
								<tbody><tr>
									<th> Vehical ID </th>
									<td> '.$VehicleID.' </td>
								</tr>
								<tr>
									<th> Type </th>
									<td> '.$Type.' </td>
								</tr>
								<tr>
									<th> Brand </th>
									<td> '.$Brand.' </td>
								</tr>
								<tr>
									<th> Model</th>
									<td> '.$Model.' </td>
								</tr>
								<tr>
									<th> Dimension</th>
									<td> '.$Dimension.' </td>
								</tr>
								<tr>
									<th> Air Bags</th>
									<td> '.$Air_bags.' </td>
								</tr>
								<tr>
									<th> Capacity</th>
									<td> '.$Capacity.' </td>
								</tr>
								<tr>
									<th> <span style="color:red;">Licence No</span></th>
									<td> <span style="color:red;">'.$Licence_no.'</span></td>
								</tr>
							</tbody></table>
						</div>
						<div class="div-section dept-contacted">
    							<h4>Department Contacted </h4>
							<table>
								<tbody><tr>
									<th> </th>
									<th> </th>
									<th style="padding-left: 0;text-align: center;">Location </th>
								</tr>';
								if($H_name!='-')
								{
									$content = $content.'<tr>
									<th> <img src="hospital.png">  </th>
									<th> 
										<div class="dep-detail">
											<p class="dep-detail-header">Hospital</p>
											<p class="dep-detail-name">'.$H_name.'</p>
										</div>
									</th>
									<td class="ll"> 
										<div class="loc">
											<p class="loc-name">'.$H_location_word.'</p>
											<p class="loc-ll">'.$H_location.'</p>
										</div>
									</td>
								</tr>';
								}
								if($P_name!='-'){
									$content = $content.'<tr>
									<th> <img src="police.png"> </th>
									<th> 
										<div class="dep-detail">
											<p class="dep-detail-header">Police station</p>
											<p class="dep-detail-name">'.$P_name.'</p>
										</div>
									</th>
									<td class="ll"> 
										<div class="loc">
											<p class="loc-name">'.$P_location_word.'</p>
											<p class="loc-ll">'.$P_location.'</p>
										</div>
									</td>
								</tr>';
								}
								if($F_name!='-'){
									$content = $content.'<tr>
									<th> <img src="fire station.png"> </th>
									<th> 
										<div class="dep-detail">
											<p class="dep-detail-header">Fire station</p>
											<p class="dep-detail-name">'.$F_name.'</p>
										</div>
									</th>
									<td class="ll"> 
										<div class="loc">
											<p class="loc-name">'.$F_location_word.'</p>
											<p class="loc-ll">'.$F_location.'</p>
										</div>
									</td>
								</tr>';
								}
								$content = $content.'
							</tbody></table>
						</div>
					</div>

					<div class="locate-area">
						<div class="div-section-loc place">
							<img class="location-icon" src="place.png">
						</div>
						<div class="div-section-loc-content">
							<div class="location-header-title">
								<h4 class="location-header-name">Track Location</h4>
								<h4 class="location-name">'.$Location_word.'</h4>
								<div class="loc-number">
									<h4 class="location-number-lon">'.$lat.'</h4>
									<h4 class="location-number-lat">'.$lon.'</h4>	
								</div>
							</div>
						</div>
						<div class="div-section-loc but">
							<form method="POST" action="locatepage.php">
							<input type="text" name="DeviceID" value="'.$DeviceID.' '.$Timestamp_date.' '.$Timestamp_time.'"/>
							<button class="loc-button" id="location">Locate</button>
							</form>
						</div>
					</div>';
	echo $content;
    }
} else {
    
}

mysqli_close($conn);
?>
