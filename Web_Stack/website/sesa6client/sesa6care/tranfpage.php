<html>
<head>
<style>
body{
	margin:0;
	padding:0;
	
}
.container{
	width:100%;
	height:100%;
	background:white;
}
.loginbar {
    width: 7rem;
    height: 7rem;
    background: red;
    box-shadow: 2px 2px 10px 3px rgba(0,0,0,0.2);
    border-radius: 25%;
    position:absolute;
    top:0;
    left:0;
}

.lobar {
    width: 7rem;
    height: 5rem;
    background: white;
}

.bbutton{
	height: 2rem;
    width: 100%;
border-bottom-right-radius: 27px;
    border: none;
    color: white;
}

.bbutton button {
    height: 100%;
    width: 100%;
    background: #d92424;
    color:white;
    border:none;
border-bottom-right-radius: 27px;
cursor:pointer;
}
.bbutton button:hover {
    background: blue;
}

.searchbar {
    width: 56rem;
    height: 8%;
    background: white;
    border-radius: 33px;
    box-shadow: 2px 3px 10px 1px rgba(0,0,0,0.3);
    position: absolute;
    top: 2rem;
    left: 21rem;
    cursor:pointer;
    display:flex;
    transition: 0.5s;
}

.searchbar:hover {
    width: 56rem;
    height: 8%;
    background: white;
    border-radius: 33px;
    box-shadow: 2px 2px 5px 0px rgba(0,0,0,0.3);
    position: absolute;
    top: 0.5rem;
    left: 21rem;
}

.imagebar {
    height: 100%;
    width: 4.5rem;
    background: #a8a7a7;
    border-radius: 50%;
    border-bottom-right-radius: 43px;
    border-top-right-radius: 43px;
}

input[type="text"] {
    height: 100%;
    width: 42rem;
    color: red;
    font-size: 19px;
    padding-left: 2rem;
    border: none;
}

input[type="text"]:focus {
    border-bottom: 2px solid red;
}

.inputbar {
    padding-left: 2rem;
}

.cbutton button{
height:100%;
width:7.5rem;
background:red;
color:white;
border:none;
border-bottom-right-radius:12px;
border-top-right-radius:12px;
cursor:pointer;
}
.cbutton button:hover{
height:100%;
background:blue;
color:white;
border:none;
font-size:12px;
}

.autocomplete-items{
	overflow:hidden;
}
.autocomplete-items div {
  padding: 10px;
  cursor: pointer;
  background-color: white; 
  border-bottom: 1px solid #d4d4d4; 
  font-size: 12px;
    font-family: sans-serif;
}

/*when hovering an item:*/
.autocomplete-items:hover {
  background-color:#d4d4d4;

}

/*when navigating through the items using the arrow keys:*/
.autocomplete-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}

.autocomplete-items{
overflow: hidden;
    height: 25.9rem;
}

img.brandlogo-img-cir {
    			width: 2.5rem;
    position: absolute;
    top: 2rem;
    left: 2rem;
    z-index:7;
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
    left: 30px;
    z-index: 5;
}
		

#map {
        width: 100%;
        height: 100%;
        background-color: grey;
      }

input#ci{
  display: none;
}

input#note-textarea {
    background: red;
    color: white;
    border: none;
    width: 17rem;
    height: 3rem;
    border-radius: 5px;
    padding-left: 15px;
    display:block;
    font-size: 13px;
}
  input#note-textarea::placeholder{
    color: white;
  }

.speech-area {
    display: flex;
    width: 19rem;
    background: white;
    border-radius: 5px;
    overflow: hidden;
    position: fixed;
    bottom: 0.5rem;
    left: 35%;
    box-shadow: 2px 2px 9px 2px rgba(0,0,0,0.3);
}

.speech-input {
    height: 3rem;
    background: red;
    width: 16rem;
}

.icon-area img {
    width: 2rem;
    cursor: pointer;
}

.icon-area {
    display: flex;
    padding-left: 0.5rem;
    padding-right: 0.5rem;
}
</style>
</head>
<body>
  <?php
    $DeviceIDinfo = $_POST['DeviceID'];
    $DeviceIDinfo = explode(" ",$DeviceIDinfo);
    $DeviceID = $DeviceIDinfo[0];
    $DepID = $DeviceIDinfo[1];
    $ts_date = $DeviceIDinfo[2];
    $ts_time = $DeviceIDinfo[3];
    ?>
	<div class="container">
	<div id="map"></div>
	<div class="loginbar">
		<div class="lobar">
			<img class="brandlogo-img-cir" src = "logo t.svg"/>
			<img class="brandlogo-img-rectan" src = "logo rectan.svg"/>
		</div>
		<div class="bbutton">
			<a href="index.html"><button name="home">Home</button></a>
		</div>
	</div>	
	<!--<div class="searchbar">
		<div class="imagebar">
			<img src="magnifying-glass.svg" style="
    width: 2rem;
    top: 0.5rem;
    left: 1rem;
    position: relative;
    justify-self: center;
    align-self: center;
">
		</div>-->
		<!--<div class="inputbar" id="inputbar">
			<input type="text" name="searchinput" id="searchinput" placeholder="Enter the DepartmentID"/>
		</div>
		<div class="cbutton">-->
			<form method="POST" action="updated.php">
        <div class="searchbar">
    <div class="imagebar">
      <img src="magnifying-glass.svg" style="
    width: 2rem;
    top: 0.5rem;
    left: 1rem;
    position: relative;
    justify-self: center;
    align-self: center;
">
    </div>
        <div class="inputbar" id="inputbar">
      <input type="text" name="searchinput" id="searchinput" placeholder="Enter the DepartmentID" autocomplete="off"/>
      <input type="text" name="ci" id="ci" value=<?php echo "'".$DeviceID." ".$ts_date." ".$ts_time." ".$DepID."'";?>/>
    </div>
    <div class="cbutton">
        <button name="cbutton" id="update">Update</button>
		</div>
    </form>
	</div>	
	</div>
	</div>
<button id="start-record-btn" title="Start Recording" style="display:none;">Start Recognition</button>
<button id="pause-record-btn" title="Pause Recording" style="display:none;">Pause Recognition</button>
<div class="speech-area">
  <div class="icon-area">
    <img src="load-area.svg" id="icon-area-id" onclick="speecht();" />
  </div>
  <div class="speech-input">
    <input type="text" id="note-textarea" placeholder="Say OK"/>
  </div>
</div>
    <script src="jquery-3.4.1.slim.min.js"></script>
	<script src="jquery-3.5.0.js"></script>
<?php
    if($DepID == "H"){
        echo "<script>var depidl = 'H';</script>";
    }
    else if($DepID == "P"){
        echo "<script>var depidl = 'P';</script>";
    }
    else if($DepID == "F"){
        echo "<script>var depidl = 'F';</script>";
    }
?>
<script>
try {
  var SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
  var recognition = new SpeechRecognition();
}
catch(e) {
  console.error(e);
  $('.no-browser-support').show();
  $('.app').hide();
}

var audio1 = new Audio('listening.mp3');
var audio2 = new Audio('sot.mp3');

var audio3 = new Audio('ecw.mp3');

var noteTextarea = $('#note-textarea');
var instructions = $('#recording-instructions');
var notesList = $('ul#notes');

var noteContent = '';
var conf = 0;

// Get all notes from previous sessions and display them.
var notes = getAllNotes();
renderNotes(notes);



/*-----------------------------
      Voice Recognition 
------------------------------*/

// If false, the recording will stop after a few seconds of silence.
// When true, the silence period is longer (about 15 seconds),
// allowing us to keep recording even when the user pauses. 
recognition.continuous = true;

// This block is called every time the Speech APi captures a line. 
recognition.onresult = function(event) {

  // event is a SpeechRecognitionEvent object.
  // It holds all the lines we have captured so far. 
  // We only need the current one.
  var current = event.resultIndex;

  // Get a transcript of what was said.
  var transcript = event.results[current][0].transcript;

  // Add the current transcript to the contents of our Note.
  // There is a weird bug on mobile, where everything is repeated twice.
  // There is no official solution so far so we have to handle an edge case.
  var mobileRepeatBug = (current == 1 && transcript == event.results[0][0].transcript);

  if(!mobileRepeatBug) {
    noteContent += transcript;
    noteContent = transcript;
    if(noteContent.indexOf('OK') !== -1 || noteContent.indexOf('ok') !== -1 || conf == 1){
	if(noteContent == "OK" || noteContent == "ok"){
		document.getElementById('note-textarea').value = "Listening...";
		audio1.play();
		conf = 1;
	}
	else{
		conf = 1;
    		noteTextarea.val(noteContent);
    		readparsing();
	}
    }
  }
};

recognition.onstart = function() { 
  instructions.text('Voice recognition activated. Try speaking into the microphone.');
}

recognition.onspeechend = function() {
  instructions.text('You were quiet for a while so voice recognition turned itself off.');
  setTimeout(() => {
    document.getElementById('note-textarea').value="Dont know what to Say?";
  },500);
  setTimeout(() => {
    document.getElementById('note-textarea').value="Say Help";
    document.getElementById('icon-area-id').src="qc.svg";
  },1000);
}

recognition.onerror = function(event) {
  if(event.error == 'no-speech') {
    instructions.text('No speech was detected. Try again.');  
    setTimeout(() => {
    document.getElementById('note-textarea').value="Dont know what to Say?";
  },1500);
  setTimeout(() => {
    document.getElementById('note-textarea').value="Say Help";
    document.getElementById('icon-area-id').src="qc.svg";
  },3000);
  }
}



/*-----------------------------
      App buttons and input 
------------------------------*/

$('#start-record-btn').on('click', function(e) {
  if (noteContent.length) {
    noteContent += ' ';
  }
  recognition.start();
  document.getElementById('note-textarea').value = "Listening...";
  audio1.play();
});


$('#pause-record-btn').on('click', function(e) {
  recognition.stop();
  instructions.text('Voice recognition paused.');
  document.getElementById('note-textarea').value = "Say OK";

});

// Sync the text inside the text area with the noteContent variable.
noteTextarea.on('input', function() {
  noteContent = $(this).val();
})

$('#save-note-btn').on('click', function(e) {
  recognition.stop();

  if(!noteContent.length) {
    instructions.text('Could not save empty note. Please add a message to your note.');
  }
  else {
    // Save note to localStorage.
    // The key is the dateTime with seconds, the value is the content of the note.
    saveNote(new Date().toLocaleString(), noteContent);

    // Reset variables and update UI.
    noteContent = '';
    renderNotes(getAllNotes());
    noteTextarea.val('');
    instructions.text('Note saved successfully.');
  }
      
})


notesList.on('click', function(e) {
  e.preventDefault();
  var target = $(e.target);

  // Listen to the selected note.
  if(target.hasClass('listen-note')) {
    var content = target.closest('.note').find('.content').text();
    readOutLoud(content);
  }

  // Delete note.
  if(target.hasClass('delete-note')) {
    var dateTime = target.siblings('.date').text();  
    deleteNote(dateTime);
    target.closest('.note').remove();
  }
});



/*-----------------------------
      Speech Synthesis 
------------------------------*/

function readOutLoud(message) {
	var speech = new SpeechSynthesisUtterance();

  // Set the text and voice attributes.
	speech.text = message;
	speech.volume = 1;
	speech.rate = 0.5;
	speech.pitch = 1;
  
	window.speechSynthesis.speak(speech);
}



/*-----------------------------
      Helper Functions 
------------------------------*/

function renderNotes(notes) {
  var html = '';
  if(notes.length) {
    notes.forEach(function(note) {
      html+= `<li class="note">
        <p class="header">
          <span class="date">${note.date}</span>
          <a href="#" class="listen-note" title="Listen to Note">Listen to Note</a>
          <a href="#" class="delete-note" title="Delete">Delete</a>
        </p>
        <p class="content">${note.content}</p>
      </li>`;    
    });
  }
  else {
    html = '<li><p class="content">You don\'t have any notes yet.</p></li>';
  }
  notesList.html(html);
}


function saveNote(dateTime, content) {
  localStorage.setItem('note-' + dateTime, content);
}


function getAllNotes() {
  var notes = [];
  var key;
  for (var i = 0; i < localStorage.length; i++) {
    key = localStorage.key(i);

    if(key.substring(0,5) == 'note-') {
      notes.push({
        date: key.replace('note-',''),
        content: localStorage.getItem(localStorage.key(i))
      });
    } 
  }
  return notes;
}


function deleteNote(dateTime) {
  localStorage.removeItem('note-' + dateTime); 
}



</script>
<script>
  function speecht(){
	if(conf == 1){
		conf = 0;
		document.getElementById('note-textarea').value = "Say OK";
	}
	else{
    		recognition.start();
    		document.getElementById('note-textarea').value = "Listening...";
		document.getElementById('icon-area-id').src = "load-area.svg";
	}
  }
  var speecherror = 0;
  function speecherrorc(){
	audio3.play();
    if(speecherror==3){
      speecherror = 1;
      window.location.href="command list.doc";
    }
    else{
      speecherror = speecherror+1;
    }
  }
function readparsing(){
	var data = document.getElementById('note-textarea').value;
	if(data.indexOf('department ID') !== -1){
	    var deviceid = data.match(/\d/g);
		deviceid = deviceid.join("");
		deviceid = depidl + deviceid;
	    audio2.play();
	    document.getElementById("searchinput").value = deviceid;
	}
	else if(data.indexOf('update') !== -1){
	    audio2.play();
        document.getElementById("update").click();
	}
    else{
      speecherrorc();
    }
}

function load(){
	recognition.start();
	document.getElementById('note-textarea').value = "Say OK";
}
load();

</script>
<script>
    var depid= [];
    var depob={};
    var currentdepid=[];
  function initst(){
  <?php

    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "sesaclient";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      if($DepID=="H"){
        $sql = "SELECT * FROM `hospitalrecord`";
        $ldep = "H_DepartmentID";
        $lshortname = "H_ShortName";
        $lshortaddress = "H_ShortAddress";
        $lPhoneno = "H_Phoneno";
        $llocation = "H_Location";
      }
      else if($DepID=="P"){
        $sql = "SELECT * FROM `policerecord`";
        $ldep = "P_DepartmentID";
        $lshortname = "P_ShortName";
        $lshortaddress = "P_ShortAddress";
        $lPhoneno = "P_Phoneno";
        $llocation = "P_Location";
      }
      else if($DepID=="F"){
        $sql = "SELECT * FROM `fstation`";
        $ldep = "F_DepartmentID";
        $lshortname = "F_ShortName";
        $lshortaddress = "F_ShortAddress";
        $lPhoneno = "F_Phoneno";
        $llocation = "F_Location";
      }
      $result = $conn->query($sql);

      if (isset($result->num_rows) && $result->num_rows >0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
            if(($row[$ldep]!="H")&&($row[$ldep]!="P")&&($row[$ldep]!="F")){
              echo "depid.push('".$row[$ldep]."');";
              echo "depob['".$row[$ldep]."']={
                    'DepartmentID':'".$row[$ldep]."',
                    'ShortName':'".$row[$lshortname]."',
                    'Phoneno':'".$row[$lPhoneno]."',
                    'Address':'".$row[$lshortaddress]."',
                    'lat':'".explode(",",$row[$llocation])[0]."',
                    'lng':'".explode(",",$row[$llocation])[1]."',
                    'Location':'".$row[$llocation]."'};";
            }
        }
      }

      ?>
}
initst();
</script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script>
// Initialize and add the map
function initMap() {

  if(currentdepid.length==0){

  var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(depob[depid[0]].lat, depob[depid[0]].lng),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });
  var infowindow = new Array();
     new google.maps.InfoWindow();

    var marker, i;
    var markers = new Array();
    for(var i=0;i<depid.length;i++){ 
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(depob[depid[i]].lat, depob[depid[i]].lng),
        map: map
      });

      infowindow[i] = new google.maps.InfoWindow({
      content: depob[depid[i]].DepartmentID+'<br>\
       '+depob[depid[i]].ShortName+'<br>\
       '+depob[depid[i]].Phoneno+'<br>\
       '+depob[depid[i]].Address+'<br>\
       '+depob[depid[i]].lat+', '+depob[depid[i]].lng+'<br>'
  });

      markers.push(marker);

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow[i].open(map,marker);
          //map.setCenter(new google.maps.LatLng(locations[i][7], locations[i][8]));
        }
      })(marker, i));   
}
}


else{
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 10,
      center: new google.maps.LatLng(depob[currentdepid[0]].lat, depob[currentdepid[0]].lng),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });
  
    var infowindow = new google.maps.InfoWindow();

    var marker, i;
    var markers = new Array();
    for(var i=0;i<currentdepid.length;i++){
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(depob[depid[i]].lat, depob[depid[i]].lng),
        map: map
      });

      infowindow[i] = new google.maps.InfoWindow({
      content: depob[currentdepid[i]].DepartmentID+'<br>\
       '+depob[currentdepid[i]].ShortName+'<br>\
       '+depob[currentdepid[i]].Phoneno+'<br>\
       '+depob[currentdepid[i]].Address+'<br>\
       '+depob[currentdepid[i]].lat+', '+depob[currentdepid[i]].lng+'<br>'
  });

      markers.push(marker);

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow[i].open(map,marker);
          //map.setCenter(new google.maps.LatLng(locations[i][7], locations[i][8]));
        }
      })(marker, i)) 
}
}

}
initMap();
    </script>
<script>
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      while (currentdepid.length) {
    currentdepid.pop();
  }
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          currentdepid.push(arr[i].substr(0, val.length)+arr[i].substr(val.length));
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
      initMap();
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}



/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
autocomplete(document.getElementById("searchinput"), depid);
</script>
</body>
</html>