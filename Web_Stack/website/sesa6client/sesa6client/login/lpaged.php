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

$uname = $_POST['uname'];
$depname = "";
$Depl = "";
if (strpos($uname, 'H') !== false) {
    $depname = "hospitalrecord";
    $Depl = "H_DepartmentID";
}
else if (strpos($uname, 'P') !== false) {
    $depname = "policerecord";
    $Depl = "P_DepartmentID";
}
else if (strpos($uname, 'F') !== false) {
    $depname = "fstation";
    $Depl = "F_DepartmentID";
} 

$sql = "SELECT * FROM ".$depname." WHERE ".$Depl."='".$uname."';";

$result = $conn->query($sql);
if (isset($result->num_rows) && $result->num_rows >0) {
    // output data of each row
    session_start();
    $_SESSION["depid"] = $uname;
    echo "<script>
			function btcp(){
				window.location.href='../';
			}
			btcp();
		</script>";
}
else{
	echo "<script>
			function btcp(){
				alert('Dep ID not found Try again');
				window.location.reload();
			}
			btcp();
		</script>";
}

mysqli_close($conn);
?> 


