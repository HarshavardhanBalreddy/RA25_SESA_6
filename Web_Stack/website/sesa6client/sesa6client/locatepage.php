<html>
<head>

	<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  	<script src="https://maps.google.com/maps/api/js?sensor=false"></script>
  	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.10.1.min.js"></script>   

	<style type="text/css">
		*
		{
			font-family: 'Lato', sans-serif;
		}
		body{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			background-color:#e8ecf0;
			overflow-y:hidden;
		}
		.container{
			width: 100%;
			height: 100%;
		}
		.left-container{
			height: 100%;
			width: 4rem;
			background-color: white;
			z-index: 3;
			position: absolute;
			left: 0;
			top: 0;
			box-shadow: 0px 3px 6px rgb(181, 180, 176);
			border-radius: 0px 12px 12px 0px;
			position:fixed;
			z-index:12;
			background-color:#e8ecf0;
  			box-shadow: 9px 9px 16px rgb(163,177,198,0.6), -9px -9px 16px rgba(255, 255, 255);
		}
		.left-container:hover{
			width: 19rem;
		}
		.left-container:hover < .element.home,.element.history,.element.info{
			display:inline-flex;
			flex-direction:column;
			width:100%;
		}
		.top-container{
			width: 100%;
			height:4rem;
			background-color: white;
			position: absolute;
			top: 0;
			left: 0;
			z-index: -1s;
			box-shadow: 0px 3px 6px rgba(193,192,188,0.3);
			position:fixed;
			z-index:5;
			background-color:#e8ecf0;
  			box-shadow: 9px 9px 16px rgb(163,177,198,0.6), -9px -9px 16px rgba(255, 255, 255);

		}
		.element.logo {
    		height: 5rem;
   		width: 100%;
    		padding: 8px;
    		padding-bottom: 0;
		}

		img.brandlogo-img {
    		width: 48px;
    		height: 68px;
		}
		hr{
			width: 12px;
			margin-bottom: 0;
			margin-top: 0;
		}
		hr{
			width: 57%;
		}		

		img.menu-img {
    		width: 2.5rem;
		}

		.element.home {
    		padding-left: 12px;
    		padding-top: 13px;
		display:inline-flex;
		width:100%;
		}

		img.settings-img {
    		width: 3.2rem;
		}

		.element.history {
    		padding-left: 4px;
   		padding-top: 19px;
		display:inline-flex;
		}

		.element-area {
   			width: 88%;
    		min-height: 81%;
    		position: absolute;
    		top: 14%;
    		left: 7%;
		}

		.elementrec-area {
   		width: 99%;
    		height: 36rem;
    		margin:22px;
    		border-radius: 12px;
    		box-shadow: 0px 2px 3px rgba(0,0,0,0.3);
    		justify-content: center;
    		align-items: center;
		background-color:#e8ecf0;
  		box-shadow: 9px 9px 16px rgb(163,177,198,0.6), -9px -9px 16px rgba(255, 255, 255);
		position:relative;
		top:-2rem;
		display:flex;
		}
		.elementrec.header {
    			height: 3rem;
		}
		.elementrec-area:hover
		    {
			box-shadow:0px 0px 12px rgba(0,0,0,0.3);
			cursor:pointer;
		    }

		.dep{
			width: 100%
			height:35px;
		}
		.ele
		    {
			align-self:center;
			justify-self:center;
		    }
		img.img-icon
		    {
			width:3rem;
		    }
		img.nav-button
		    {
    			position: absolute;
   			width: 8rem;
    			top: 21%;
    			left: 9%;
			background-color: #e8ecf0;
			border-radius:35px;
			box-shadow: 3px 3px 5px rgb(163,177,198,0.3), -3px -3px 5px rgba(255, 255, 255);
		    }
		img.nav-button:hover
		    {
			cursor:pointer;
			box-shadow: 2px 2px 5px rgb(163,177,198,0.2), -2px -2px 5px rgba(255, 255, 255);
		    }
		.menu-img
		    {
			 filter: invert(2%) sepia(93%) saturate(2364%) hue-rotate(245deg) brightness(91%) contrast(15%);
		    }
		.settings-img
		    {
		    	filter: invert(2%) sepia(93%) saturate(2364%) hue-rotate(245deg) brightness(91%) contrast(15%);
		    }
		img.menu-img:hover
		    {
			width:2.8rem;
			cursor:pointer;
		    }
		img.settings-img:hover
		    {
			width:3.5rem;
			cursor:pointer;
			filter: invert(35%) sepia(93%) saturate(6364%) hue-rotate(356deg) brightness(91%) contrast(35%);
		    }
		.icon-dep
		    {
			width:3rem;
		    }
		.location-pointer
		    {
			width:2rem;
		    }
		h2 
		    {
    			font-size: 17px;
    			color: #929191;
    			padding-left: 2rem;
			position:relative;
			top:-2rem;
		    }
		span.content-rec
		    {
    			font-size: 42%;
    			padding: 16px;
    			color: silver;
		    }
		.icon-menu-header{
			display:none;
			padding-left:5rem;
		}
		.icon-settings-header {
			display:none;
    			padding-left: 4.7rem;
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
		
.locate-area {
    height: 19%;
    width: 100%;
    background-color: none;
    margin: 12px;
    display: flex;
}

.title-display {
    width: 100%;
    height: 15%;
    margin: 12px;
    display: flex;
}

.section-area {
    height: 61%;
    width: 100%;
    margin: 12px;
    display: inline-flex;
}

.elementrec-area {
    margin-top: 0px;
    margin-bottom: 0px;
    bottom: 0px;
}
	
.div-section {
    height: 100%;
    width: 32%;
    margin: 2px;
    background-color: none;
}	
.div-sec {
    height: 100%;
    width:100%;
    background-color: none;
}

.div-iconimage {
	height : 82px;
	padding-left :6;
	padding-bottom: 1;
	padding-top: 4;

}

.div-sevimg {
	height :82px;
	padding-left :6;
	padding-bottom: 1;
	padding-top: 4;
}

.div-ts{

    padding-left: 90;
    padding-top: 20;
    height: 40px;
    font-size: 35;
}

table {
	border-spacing: 5px;
}

th ,td {
	text-align: left;
	padding: 5px;
}
.button {
  background-color: red;
  border:none;
  color: white;
  padding: 18px 25px;
  text-align: center;
  font-size: 35px;
  cursor: pointer;
}
.trackcord{
	display: grid;
	font-size: 25px;
}

.longlat{
	display: flex;
}

.div-placeimg{
	padding-left: 120;
	padding-top: 6;
}

.mapdiv{
	height:100%;
	width:70%;
	}
.infodetail{
	height:100%;
	width:30%;
	}

.infoelement{
	margin:12px;
	width:95%;
	height:3rem;
	display:flex;
	flex-direction:column;
}
.infoelement.detail{
	height:5rem;
	flex-direction:row;
	}
.infoelement.detail .icon.detail{
	width: 25%;
    margin: 12px;
	margin-left: -8px;
}

.infoelement.detail .button-map{
	width:75%;
	height:100%;
}

.button-map button {
    width: 9rem;
    height: 3rem;
    border-radius: 3rem;
    border: none;
    background-color: #e8ecf0;
    color: black;
    font-size: 16px;
    box-shadow: 3px 3px 3px rgb(163,177,198,0.3), -3px -3px 3px rgba(255, 255, 255);
margin-left: 5rem;
    margin-top: 17px;
}

.button-map button:hover{
	box-shadow: 5px 5px 5px rgb(163,177,198,0.5), -5px -5px 5px rgba(255, 255, 255);
	cursor:pointer;
}

.labelt,.detail{
	width:100%;
	height:50%;
	box-sizing:border-box;
	padding-left:12px;
}
.labelt{
	height:35%;
	color:black;
	font-weight:bolder;
	font-size:12px;
	
}
.detail{
	font-size:15px;
	color:#888686;
}

a{
	text-decoration: none;
    color: black;
}

.icon.detail img {
    width: 3.5rem;
}

#map .mapset{
	width:2rem;
	height:115px;
	position:absolute;
	top:2%;
	left:2%;
}

.locationmap{
	width:12rem;
	display: flex;
	position: relative;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
}

	</style>

	
</head>
<body>

	<div class="container">
			<div class="left-container">
				<a href="index.php">
					<div class="element logo">
					<div class="brandlog">
					<img class="brandlogo-img-cir" src = "logo t.svg"/>
					<img class="brandlogo-img-rectan" src = "logo rectan.svg"/>
					<span class="brandlogo-header"></span>
					</div>
				</div>
				</a>
				<hr>
				<a href="index.php"><div class="element home">
					<img class="icon menu-img" src="menu.svg"/>
					<span class="icon-menu-header"><H3>Home</H3></span>
				</div>
				</a>
				<a href="history.php"><div class="element history">
					<img class="icon settings-img" src="history.svg"/>
					<span class="icon-settings-header"><H3>Settings</H3></span>
				</div></a>
				<div class="element info">
				</div>
			</div>
			<div class="top-container">
				<a href="index.php"><img class="nav-button" src="nav-button-home-light-svg.svg"/></a>
			</div>
			<div class="element-area">
				<H2>Location</H2>	
				<div class="elementrec-area">
					<div class="mapdiv">
						<div id="map" style="width: 100%; height: 100%">
							<button class="mapset">Reset Map</button>
						</div>
					</div>
					<div class="infodetail" id="infodetail">
						<img class="locationmap" src="locationmap.svg"/>
					</div>
				</div>

			</div>
			
		</div>

	
	</div>

	<?php

		$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sesaclient";

		$DeviceIDw = $_POST['DeviceID'];
		$DeviceID = explode(" ", $DeviceIDw)[0];
		$T_d = explode(" ", $DeviceIDw)[1];
		$T_t = explode(" ", $DeviceIDw)[2];
		echo $DeviceIDw;

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
    	}

    	$sql = "SELECT Location_word,Location,Icon_vehicle,Owner_name,Age,Sex,Address,Phoneno,Blood_group,H_DepartmentID,H_Name,H_Address,H_Phoneno,H_Website,H_Category,H_Service,H_Location,P_DepartmentID,P_Name,P_Address,P_Phoneno,P_Website,P_Category,P_Service,P_Location,F_DepartmentID,F_Name,F_Address,F_Phoneno,F_Website,F_Category,F_Service,F_Location FROM accidentrecord,hospitalrecord,policerecord,fstation,owner_info WHERE H_DepartmentID = accidentrecord.H_ID and P_DepartmentID = accidentrecord.P_ID and F_DepartmentID = accidentrecord.F_ID and owner_info.DeviceID = accidentrecord.DeviceID and accidentrecord.DeviceID = '".$DeviceID."' AND accidentrecord.Timestamp_date = '".$T_d."' AND accidentrecord.Timestamp_time = '".$T_t."';";
		$result = $conn->query($sql);


		if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();


?>

		 <script>
		 	var locations = [];
		 	locations.push([<?php echo json_encode($row["Location_word"]); ?>,<?php echo json_encode($row["Owner_name"]); ?>,<?php echo json_encode($row["Age"]); ?>,<?php echo json_encode($row["Sex"]); ?>,<?php echo json_encode($row["Address"]); ?>,<?php echo json_encode($row["Phoneno"]); ?>,<?php echo json_encode($row["Blood_group"]); ?>,<?php echo json_encode(explode(",", $row["Location"])[0]); ?>, <?php echo json_encode(explode(",", $row["Location"])[1]); ?>,<?php echo json_encode($row["Icon_vehicle"]); ?>,'Location']);
		 	if(<?php echo json_encode($row["H_Name"]); ?>!='-'){
		 		locations.push([<?php echo json_encode($row["H_DepartmentID"]); ?>,<?php echo json_encode($row["H_Name"]); ?>,<?php echo json_encode($row["H_Address"]); ?>,<?php echo json_encode($row["H_Phoneno"]); ?>,<?php echo json_encode($row["H_Website"]); ?>,<?php echo json_encode($row["H_Category"]); ?>,<?php echo json_encode($row["H_Service"]); ?>, <?php echo json_encode(explode(",", $row["H_Location"])[0]); ?>, <?php echo json_encode(explode(",", $row["H_Location"])[1]); ?>,'hospital.png','Hospital']);
		 	}
		 	if(<?php echo json_encode($row["P_Name"]); ?>!='-')
		 	{
		 		locations.push([<?php echo json_encode($row["P_DepartmentID"]); ?>,<?php echo json_encode($row["P_Name"]); ?>,<?php echo json_encode($row["P_Address"]); ?>,<?php echo json_encode($row["P_Phoneno"]); ?>,<?php echo json_encode($row["P_Website"]); ?>,<?php echo json_encode($row["P_Category"]); ?>,<?php echo json_encode($row["P_Category"]); ?>,<?php echo json_encode(explode(",", $row["P_Location"])[0]); ?>, <?php echo json_encode(explode(",", $row["P_Location"])[1]); ?>,'police.png','Police']);
		 	}
		 	if(<?php echo json_encode($row["F_Name"]); ?>!='-'){
		 		locations.push([<?php echo json_encode($row["F_DepartmentID"]); ?>,<?php echo json_encode($row["F_Name"]); ?>,<?php echo json_encode($row["F_Address"]); ?>,<?php echo json_encode($row["F_Phoneno"]); ?>,<?php echo json_encode($row["F_Website"]); ?>,<?php echo json_encode($row["F_Category"]); ?>,<?php echo json_encode($row["F_Category"]); ?>,<?php echo json_encode(explode(",", $row["F_Location"])[0]); ?>, <?php echo json_encode(explode(",", $row["F_Location"])[1]); ?>,'fire station.png','FStation']);
		 	}
    </script>


    	<?php

	}else {
    
}
$conn->close();

	?>

	<script src="jquery-3.4.1.slim.min.js"></script>
	
	<script>
		$(document).ready(function(){
  			$(".left-container").mouseenter(function(){
    				$(".brandlogo-header").show();
				$(".icon-menu-header").show();
				$(".icon-settings-header").show();
  			});
			$(".left-container").mouseleave(function(){
    				$(".brandlogo-header").hide();
				$(".icon-menu-header").hide();
				$(".icon-settings-header").hide();
  			});
		});

	</script>

	<script type="text/javascript">
	
	

	function detaildiv(index){
		if(index!=0)
		var content = '<div class="infoelement detail">\
							<div class="icon detail">\
								<img src="'+locations[index][9]+'">\
							</div>\
							<div class="button-map">\
								<button> <a href="https://maps.google.com/?q='+locations[index][7]+','+locations[index][8]+'" target="_blank">View in Map</a></button>\
							</div>\
						</div>\
						<div class="infoelement ID">\
							<label class="labelt">Department ID</label>\
							<label class="detail">'+locations[index][0]+'</label>\
						</div>\
						<div class="infoelement name">\
							<label class="labelt">Name</label>\
							<label class="detail">'+locations[index][1]+'</label>\
						</div>\
						<div class="infoelement address">\
							<label class="labelt">Address</label>\
							<label class="detail">'+locations[index][2]+'</label>\
						</div>\
						<div class="infoelement phoneno">\
							<label class="labelt">Phone number</label>\
							<label class="detail">'+locations[index][3]+'</label>\
						</div>\
						<div class="infoelement website">\
							<label class="labelt">Website</label>\
							<label class="detail">'+locations[index][4]+'</label>\
						</div>\
						<div class="infoelement category">\
							<label class="labelt">Category</label>\
							<label class="detail">'+locations[index][5]+'</label>\
						</div>\
						<div class="infoelement Services">\
							<label class="labelt">Services</label>\
							<label class="detail">'+locations[index][6]+'</label>\
						</div>';
		else
			var content = '<div class="infoelement detail">\
							<div class="icon detail">\
								<img src="svg\\'+locations[index][9]+'-svg.svg'+'">\
							</div>\
							<div class="button-map">\
								<button> <a href="https://maps.google.com/?q='+locations[index][7]+','+locations[index][8]+'" target="_blank">View in Map</a></button>\
							</div>\
						</div>\
						<div class="infoelement ID">\
							<label class="labelt">Location</label>\
							<label class="detail">'+locations[index][0]+'</label>\
						</div>\
						<div class="infoelement name">\
							<label class="labelt">Name</label>\
							<label class="detail">'+locations[index][1]+'</label>\
						</div>\
						<div class="infoelement age">\
							<label class="labelt">Age</label>\
							<label class="detail">'+locations[index][2]+'</label>\
						</div>\
						<div class="infoelement sex">\
							<label class="labelt">Sex</label>\
							<label class="detail">'+locations[index][3]+'</label>\
						</div>\
						<div class="infoelement address">\
							<label class="labelt">Address</label>\
							<label class="detail">'+locations[index][4]+'</label>\
						</div>\
						<div class="infoelement phoneno">\
							<label class="labelt">Phone number</label>\
							<label class="detail">'+locations[index][5]+'</label>\
						</div>\
						<div class="infoelement BloodGroup">\
							<label class="labelt">Blood Group</label>\
							<label class="detail">'+locations[index][6]+'</label>\
						</div>';
		document.getElementById('infodetail').innerHTML = content;
	}

	function distance(lat1,lon1,lat2,lon2) {
	var R = 6371; // km (change this constant to get miles)
	var dLat = (lat2-lat1) * Math.PI / 180;
	var dLon = (lon2-lon1) * Math.PI / 180;
	var a = Math.sin(dLat/2) * Math.sin(dLat/2) +
		Math.cos(lat1 * Math.PI / 180 ) * Math.cos(lat2 * Math.PI / 180 ) *
		Math.sin(dLon/2) * Math.sin(dLon/2);
	var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a));
	var d = R * c;
	if (d>1) return Math.round(d)+"km/"+(Math.round(d)/40)+"m";
	else if (d<=1) return Math.round(d*1000)+"meter/"+(Math.round(d*1000)/40)+"m";
	return d;
	}

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(locations[0][7], locations[0][8]),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });
	
    var infowindow = new google.maps.InfoWindow();

    var marker, i;
    var markers = new Array();
    for (i = 0; i < locations.length; i++) {  
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][7], locations[i][8]),
        map: map,
	title: distance(locations[0][7],locations[0][8],locations[i][7],locations[i][8])
      });
	
	if(locations[i][10]=="Hospital"){
		var icon = 'http://maps.google.com/mapfiles/ms/icons/yellow-dot.png';
		var color = "#FFFFFF";
	}
	else if(locations[i][10]=="Police"){
		var icon = 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png';
		var color = "#FBB000";
	}
	else if(locations[i][10]=="FStation"){
		var icon = 'http://maps.google.com/mapfiles/ms/icons/red-dot.png';
		var color = "#FF0000";
	}
 	var myTrip = [
          {lat: parseFloat(locations[0][7]), lng: parseFloat(locations[0][8])},
          {lat: parseFloat(locations[i][7]), lng: parseFloat(locations[i][8])}
        ];
	
	var flightPath = new google.maps.Polygon({
  		path:myTrip,
  		strokeColor:color,
  		strokeOpacity:0.8,
  		strokeWeight:5,
  fillColor:color,
  fillOpacity:0.4
});
flightPath.setMap(map);

	marker.setIcon(icon);
		
      markers.push(marker);

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          detaildiv(i);
	  animateMapZoomTo(map,25);
      	  map.setCenter(new google.maps.LatLng(locations[i][7], locations[i][8]));
        }
      })(marker, i));

	function animateMapZoomTo(map, targetZoom) {
    		var currentZoom = arguments[2] || map.getZoom();
    		if (currentZoom != targetZoom) {
        		google.maps.event.addListenerOnce(map, 'zoom_changed', function (event) {
            		animateMapZoomTo(map, targetZoom, currentZoom + (targetZoom > currentZoom ? 1 : -1));
        	});
        	setTimeout(function(){ map.setZoom(currentZoom) }, 102);
    		}
	}

 	
	 map.addListener('rightclick', function() {  
   		animateMapZoomTo(map,15);
      	   	map.setCenter(new google.maps.LatLng(locations[0][7], locations[0][8]));
  });     
       

    }

    function AutoCenter() {
      
      var bounds = new google.maps.LatLngBounds();

      $.each(markers, function (index, marker) {
      bounds.extend(marker.position);
      });

      map.fitBounds(bounds);
    }
    AutoCenter();

  </script>
</body>
</html>