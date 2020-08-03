<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
<style>

* {
   box-sizing: border-box;
}

body {
   font-family: Arial, Helvetica, sans-serif;
   margin:0;
   padding:0;
}

.container {
    width: 100%;
    height: 100%;
}

.input-container {
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
    background: red;
    color: white;
    min-width: 50px;
    text-align: center;
    border-bottom-left-radius: 23px;
    border-top-left-radius: 23px;
}

.input-field {
    width: 100%;
    padding: 10px;
    outline: none;
    border-bottom-right-radius: 23px;
    border-top-right-radius: 23px;
    border: 0.5px solid #e8a2a2;
    font-family: 'Lato', sans-serif;
}

.input-field:focus {
  border: 2px solid red;
}

/* Set a style for the submit button */
.btn {
  background-color: red;
    color: white;
    padding: 7px 4px;
    border: none;
    cursor: pointer;
    width: 30%;
    border-radius: 23px;
    font-family: 'Lato', sans-serif;
}

.btn:hover {
  opacity: 1;
  background:blue;
}

i.fa.fa-paper-plane {
    padding: 10px;
    padding-left: 3px;
}

.depart-contact {
    margin-bottom: 27px;
    box-sizing: border-box;
}

.elcotn {
    padding: 1.5rem;
    border: 2px solid #ebebeb;
    border-radius: 17px;
}

h2{
   color:red;
   padding: 4rem;
   font-family: 'Lato', sans-serif;
}

.cont-div {
        width: 36rem;
    border-radius: 23px;
    margin-top: 2rem;
    margin-bottom: 5rem;
    box-shadow: 3px 3px 13px 1px rgba(0,0,0,0.3);
    padding: 2rem;
}

p {
    text-align: left;
    font-family: 'Lato', sans-serif;
}

label {
    position: absolute;
    left: 24px;
    font-family: 'Lato', sans-serif;
}

.lvegc {
    display: inline-flex;
    justify-self: left;
    position: absolute;
    left: 0;
}

.depart-contacted {
    position: relative;
    
}

.brandlog {
          display: block;
          position: absolute;
    }

    img.brandlogo-img-cir {
          width: 2.5rem;
    position: absolute;
    top: 18px;
    left: 4px;
animation: bralog;
          animation-duration: 0.2s;
          animation-timing-function: linear;
          animation-iteration-count: infinite;
    }

  img.brandlogo-img-cir:hover {
          animation: bralog;
          animation-duration: 2s;
          animation-timing-function: linear;
          animation-iteration-count: infinite;
    }

    @keyframes bralog{
      0%{
        transform: rotate(0deg);
      }
      100%{
        transform: rotate(360deg);
      }
    }

    img.brandlogo-img-rectan {
              width: 2.5rem;
    position: absolute;
    top: -8px;
    z-index: -2;
    }

    .bdiv {
    height: 7rem;
}

.carea {
    display: inline-flex;
    position: relative;
    left: -2rem;
}

.mpd {
    width: 17rem;
    height: 17rem;
    background: red;
    align-self: center;
    border-radius: 23px;
    position: relative;
    box-shadow: 2px 2px 7px 2px rgba(0,0,0,0.3);
    z-index: 7;
}

.mpdc {
    width: 100%;
    height: 100%;
    position: absolute;
    justify-content: center;
    display: none;
}

p.mpdp {
    color: white;
    font-size: 15px;
    font-weight: bold;
    position: absolute;
    top: 2rem;
    left: 4rem;
    font-family: 'Lato', sans-serif;
}

.mpd button {
    padding: 8px;
    background: white;
    border: none;
    border-radius: 23px;
    color: red;
    margin-top: 7rem;
    cursor: pointer;
    box-shadow: 2px 2px 7px 2px rgba(0,0,0,0.3);
    font-family: 'Lato', sans-serif;
 }

</style>
</head>
<body>
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
?>
<div class="container">
<center>
  <div class="mpdc" id="mpdc">
  <div class="mpd">
        <p class="mpdp">Accident Reported</p>
        <button onclick="bcf();"> Add another</button>
  </div>
</div>
<div class="cont-div">
<div style="max-width:500px;margin:auto">
   <center><div class="bdiv">
	<div class="carea">
          <div class="brandlog">
          <img class="brandlogo-img-cir" src = "logo t.svg"/>
          <img class="brandlogo-img-rectan" src = "logo rectan.svg"/>
          <span class="brandlogo-header"></span>
          </div>
        </div>
	<h2>Manual Testing</h2>
   </div></center>  
  <div class="input-container">
    <i class="fa fa-podcast icon"></i>
    <?php
        $result = mysqli_query($conn, "SELECT DeviceID FROM owner_info");
      ?>
    <select name="device_ID" class="input-field" id="device_ID">
      <option>Device ID</option>
      <?php
        while($row = mysqli_fetch_array($result)) {
          echo '<option value="'.$row["DeviceID"].'">'.$row["DeviceID"].'</option>';
        }
      ?>
    </select>
  </div>
 
  <div class="input-container">
    <i class="fa fa-heartbeat icon"></i>
    <select name="severity" id="severity" class="input-field">
	<option>Severity</option>
	<option value="1">1 Mild</option>
	<option value="2">2 Moderate</option>
	<option value="3">3 Severe</option>
    </select>
  </div>

  <div class="depart-contact">
	<p>Department Contacted</p>
	<div class="elcotn">
	<div class="depart-contacted hosp">
		<input type="checkbox" id="Hc" name="Hc" value="Bike" onclick="icda();" class="lvegc">
  		<label for="vehicle1">Want Hospital Service</label><br>
		<div name="H_ID" class="input-container">
    			<i class="fa fa-ambulance icon" id="hicon"></i>
          <?php
            $result = mysqli_query($conn, "SELECT H_DepartmentID FROM hospitalrecord");
          ?>
          <select name="H_ID2" class="input-field" id="H_ID2">
            <option>Hospital ID</option>
            <?php
        while($row = mysqli_fetch_array($result)) {
          echo '<option value="'.$row["H_DepartmentID"].'">'.$row["H_DepartmentID"].'</option>';
        }
        ?>
          </select>
  	</div>
	</div>
	<div class="depart-contacted poli">
		<input type="checkbox" id="Pc" name="Pc" value="Bike" onclick="icda();" class="lvegc">
  		<label for="vehicle1"> Want Police Service</label><br>
		  <div name="P_ID" class="input-container">
    		<i class="fa fa-gavel icon" id="picon"></i>
        <?php
            $result = mysqli_query($conn, "SELECT P_DepartmentID FROM policerecord");
          ?>
        <select name="P_ID2" class="input-field" id="P_ID2">
          <option>Police ID</option>
          <?php
        while($row = mysqli_fetch_array($result)) {
          echo '<option value="'.$row["P_DepartmentID"].'">'.$row["P_DepartmentID"].'</option>';
        }
        ?>
        </select>
  		</div>
	</div>
	<div class="depart-contacted fista">
		<input type="checkbox" id="fc" name="fc" value="Bike" onclick="icda();" class="lvegc">
  		<label for="vehicle1"> Want Fire station Service</label><br>
		<div name="f_ID" class="input-container">
    			<i class="fa fa-fire-extinguisher icon" id="ficon"></i>
    			<?php
            $result = mysqli_query($conn, "SELECT F_DepartmentID FROM fstation");
          ?>
          <select name="f_ID2" class="input-field" id="f_ID2">
            <option>Firestation ID</option>
            <?php
            while($row = mysqli_fetch_array($result)) {
              echo '<option value="'.$row["F_DepartmentID"].'">'.$row["F_DepartmentID"].'</option>';
            }
          ?>
          </select>
          <?php
            mysqli_close($conn);
          ?>  
  	</div>
	</div>
	</div>
  </div>

  <div class="input-container">
    <i class="fa fa-map-marker icon"></i>
    <input class="input-field" type="text" placeholder="Location (Lon,Lat)" name="location" id="location">
  </div>
  
  <div class="input-container">
    <i class="fa fa-map-signs icon"></i>
    <input class="input-field" type="text" placeholder="Address" name="address" id="address">
  </div>
  
  <div class="input-container">
    <i class="fa fa-camera icon"></i>
    <select name="picture" class="input-field" id="picture">
	<option>Picture</option>
	<option>Yes</option>
	<option>No</option>
    </select>
  </div>

  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <select name="SOS" class="input-field" id="SOS">
	<option>SOS</option>
	<option>Yes</option>
	<option>No</option>
    </select>
  </div>
  	
  <p>Accident time</p>
  <div class="input-container">
    <i class="fa fa-calendar icon"></i>
    <input class="input-field" type="datetime-local" name="adct_t" id="adct_t">
  </div>

  <p>Update time</p>
  <div class="input-container">
    <i class="fa fa-share-square icon"></i>
    <input class="input-field" type="datetime-local" name="upd_t" id="upd_t">
  </div>

  <button type="submit" class="btn" id="btn" value="Register" onclick="transb();"><i class="fa fa-paper-plane" aria-hidden="true"></i>Register</button>
</div>
</div>
</center>
</div>
<script src="jquery-3.4.1.slim.min.js"></script>
  <script src="jquery-3.5.0.js"></script>
<script>
	function icda(){
		if (document.getElementById('Hc').checked) 
  		{
      			document.getElementById("H_ID2").disabled = false;
			document.getElementById("hicon").style.opacity = 1;
  		} else {
			document.getElementById("H_ID2").disabled = true;
			document.getElementById("hicon").style.opacity = 0.3;
      document.getElementById("H_ID2").value = "Hospital ID";
		}
		if (document.getElementById('Pc').checked) 
  		{
      			document.getElementById("P_ID2").disabled = false;
			document.getElementById("picon").style.opacity = 1;
  		} else {
			document.getElementById("P_ID2").disabled = true;
			document.getElementById("picon").style.opacity = 0.3;
      document.getElementById('P_ID2').value = "Police ID";
		}
		if (document.getElementById('fc').checked) 
  		{
      			document.getElementById("f_ID2").disabled = false;
			document.getElementById("ficon").style.opacity = 1;
  		} else {
			document.getElementById("f_ID2").disabled = true;
			document.getElementById("ficon").style.opacity = 0.3;
      document.getElementById("f_ID2").value = "Firestation ID";
		}
	}
	icda();
</script>
<script>
        function transb(){
            var device_ID = document.getElementById('device_ID').value;
            var severity = document.getElementById('severity').value;
            var H_ID = document.getElementById('H_ID2').value;
            var P_ID = document.getElementById('P_ID2').value;
            var f_ID = document.getElementById('f_ID2').value;
            var Loc = document.getElementById('location').value;
            var address = document.getElementById('address').value;
            var picture = document.getElementById('picture').value;
            var SOS = document.getElementById('SOS').value;
            var acc_t = document.getElementById('adct_t').value;
            var upd_t = document.getElementById('upd_t').value;
            $.ajax({
                type: 'POST',
                url: 'tmpaged.php',
                data: { 'device_ID': device_ID, 'severity' : severity, 'H_ID' : H_ID, 'P_ID' : P_ID , 'f_ID' :f_ID, 'Loc' : Loc, 'address' : address, 'picture' : picture, 'SOS' : SOS, 'adct_t' : acc_t, 'upd_t' : upd_t},
                success: function(data){
                    $('.mpdp').html(data);
                    document.getElementById('mpdc').style.display = "block";
                }
            });
        } 
  </script>
  <script>
    function bcf(){
      document.getElementById('mpdc').style.display = "none";
      window.location.reload();
    }
  </script>
</body>
</html>
