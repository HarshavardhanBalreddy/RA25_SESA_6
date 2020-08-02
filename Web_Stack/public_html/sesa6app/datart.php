<?php

$servername = "localhost";
$username = "id13306652_sesa6services";
$password = "Vpb~BqA)N59q~q_[";
$dbname = "id13306652_sesaclient";

$Timestamp_date1 = $_POST['Timestamp_date1'];
$Timestamp_date2 = $_POST['Timestamp_date2'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT Icon_vehicle,Location,Timestamp_date,Timestamp_time,Severity,Department_contacted,Location_word,Age,Sex,Blood_group,Brand,Model,Dimension,Air_Bags,Capacity FROM accidentrecord,owner_info,vehicle_info WHERE owner_info.DeviceID=accidentrecord.DeviceID AND vehicle_info.DeviceID=accidentrecord.DeviceID AND Timestamp_date BETWEEN '".$Timestamp_date1."' AND '".$Timestamp_date2."';";	

$result = $conn->query($sql);
if(isset($result->num_rows) && $result->num_rows >0){
	$nr = $result->num_rows;
}
else{
	$nr = 0;
}

$cw=0;

echo '<button class="fi-barb" id="fi-barb" onclick="infoarea(1,1);">'.$nr.' Result Found SHOW</button>
		<div class="listmenu" id="listmenu">
			<div class="section-list rd-bar">
				<div class="img-t-bar">
					<img src="magnifying-glass.svg"/>
					<p class="ht">'.$nr.' Result Found</p> 
					<button class="clb" onclick="infoarea(0, 0);"><img src="close.svg"/></button>
				</div>	
			</div>
			<div class="fi-bar">';

echo '<table>
		<tr class="rowf">
						<td class="vehicle-type"><p>Vehicle Type</p></td>
						<td class="location"><p>Location</p></td>
						<td class="lo"><p>Date</p></td>
					</tr>';

$contentl = '<div  class="tcontc" id="tcontc">
	<table>
		<tr>
			<td>vehicle Type</td>
			<td>Age</td>
			<td>Sex</td>
			<td>Blood_group</td>
			<td>Severity</td>
			<td>Brand</td>
			<td>Model</td>
			<td>Dimension</td>
			<td>Air_Bags</td>
			<td>Capacity</td>
			<td>Timestamp date</td>
			<td>Timestamp time</td>
			<td>Department contacted</td>
			<td>Location</td>
			<td>Location word</td>
		</tr>';

if (isset($result->num_rows) && $result->num_rows >0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $Icon_vehicle =$row["Icon_vehicle"];
        $Location= $row["Location"];
        $Timestamp_date =$row["Timestamp_date"];
        $Timestamp_time= $row["Timestamp_time"];
        $Severity =$row["Severity"];
        $Department_contacted= $row["Department_contacted"];
        $Location=$row['Location'];
        $Location_word=$row['Location_word'];
        $Age= $row["Age"];
        $Sex = $row["Sex"];
        $Blood_group = $row['Blood_group'];
        $Brand = $row['Brand'];
        $Model = $row['Model'];
        $Dimension = $row['Dimension'];
        $Air_Bags = $row['Air_Bags'];
        $Capacity = $row['Capacity'];

        echo '
					<tr class="rowfs'.$cw.'" id="rowfs'.$cw.'">
						<td class="vehcile-typec"><img src="svg\\'.$Icon_vehicle.'-svg.svg"/></td>
						<td class="locationc">'.$Location.'</td>
						<td class="lt">'.$Timestamp_date.'</td>
					</tr>';
		$contentl = $contentl.'<tr>
									<td>'.$Icon_vehicle.'</td>
									<td>'.$Age.'</td>
									<td>'.$Sex.'</td>
									<td>'.$Blood_group.'</td>
									<td>'.$Severity.'</td>
									<td>'.$Brand.'</td>
									<td>'.$Model.'</td>
									<td>'.$Dimension.'</td>
									<td>'.$Air_Bags.'</td>
									<td>'.$Capacity.'</td>
									<td>'.$Timestamp_date.'</td>
									<td>'.$Timestamp_time.'</td>
									<td>'.$Department_contacted.'</td>
									<td>'.$Location.'</td>
									<td>'.$Location_word.'</td>
								</tr>';
		$cw = $cw + 1;
	}
}
    echo '</table>';
    $contentl = $contentl.'</table></div>';
    echo $contentl;
    echo '</div>
			<div class="section-list ex-bar">
				<button id="bcarea" onclick="bctcp();"> Export</button>
			</div>
		</div>';
	$contentl2 = '<script>
		var loc=[];
		function loct(){';
	$result = $conn->query($sql);
	if (isset($result->num_rows) && $result->num_rows >0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $Location= $row["Location"];
        $contentl2 = $contentl2.'loc.push(\''.$Location.'\');';
    }
    $contentl2 = $contentl2.'}
    			loct();
    </script>';
    echo $contentl2;
}



$conn->close();


?>