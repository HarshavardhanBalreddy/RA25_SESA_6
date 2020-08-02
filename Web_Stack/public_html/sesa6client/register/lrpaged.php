 <?php
$servername = "localhost";
$username = "id13306652_sesa6services";
$password = "Vpb~BqA)N59q~q_[";
$dbname = "id13306652_sesaclient";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$depname = $_POST['depname'];
$depname2 = $_POST['depname2'];
$depaddress = $_POST['depaddress'];
$depaddress2 = $_POST['depaddress2'];
$phoneno = $_POST['phoneno'];
$loc = $_POST['loc'];
$lon = explode(",", $loc)[0];
$lat = explode(",", $loc)[1];
$Category = $_POST['Category'];
$webpage = $_POST['webpage'];
$services = $_POST['services'];
$dch = $_POST['dch'];
$li = $_POST['lzip'];
if ($dch == "hospitalrecord") {
    $sql2 = "SELECT COUNT(*) AS cdep FROM `hospitalrecord`";
    $depid = "H".$li;
}
else if ($dch == "policerecord") {
    $sql2 = "SELECT COUNT(*) AS cdep FROM `policerecord`";
    $depid = "P".$li;
}
else if ($dch == "fstation") {
    $sql2 = "SELECT COUNT(*) AS cdep FROM `fstation`";
    $depid = "F".$li;
} 

$result2 = $conn->query($sql2);

if (isset($result2->num_rows) && $result2->num_rows >0) {
    // output data of each row
    while($row2 = $result2->fetch_assoc()) {
        $depc = $row2['cdep'];
    }
}

$depid = $depid.$depc;

if ($dch == "hospitalrecord") {
    $sql = "INSERT INTO `hospitalrecord`(`H_DepartmentID`, `H_Name`, `H_ShortName`, `H_Address`, `H_ShortAddress`, `H_Phoneno`, `H_Lon`, `H_Lat`, `H_Location`, `H_Website`, `H_Category`, `H_Service`) VALUES ('".$depid."','".$depname."','".$depname2."','".$depaddress."','".$depaddress2."','".$phoneno."','".$lon."','".$lat."','".$loc."','".$webpage."','".$Category."','".$services."');";
}
else if ($dch == "policerecord") {
    $sql = "INSERT INTO `policerecord`(`P_DepartmentID`, `P_Name`, `P_ShortName`, `P_Address`, `P_ShortAddress`, `P_Phoneno`, `P_Lon`, `P_Lat`, `P_Location`, `P_Website`, `P_Category`, `P_Service`) VALUES ('".$depid."','".$depname."','".$depname2."','".$depaddress."','".$depaddress2."','".$phoneno."','".$lon."','".$lat."','".$loc."','".$webpage."','".$Category."','".$services."');";
}
else if ($dch == "fstation") {
    $sql = "INSERT INTO `fstation`(`F_DepartmentID`, `F_Name`, `F_ShortName`, `F_Address`, `F_ShortAddress`, `F_Phoneno`, `F_Lon`, `F_Lat`, `F_Location`, `F_Website`, `F_Category`, `F_Service`) VALUES ('".$depid."','".$depname."','".$depname2."','".$depaddress."','".$depaddress2."','".$phoneno."','".$lon."','".$lat."','".$loc."','".$webpage."','".$Category."','".$services."');";
} 

$result = $conn->query($sql);

if ($result) {
    // output data of each row
    echo "<script>
			function btcp(){
				window.location.href='lrpaged2.php?depid=".$depid."';
			}
			btcp();
		</script>";
}
else{
	echo "<script>
			function btcp(){
				alert('The record not inserted Try again');
			}
			btcp();
		</script>";
}

mysqli_close($conn);
?> 


