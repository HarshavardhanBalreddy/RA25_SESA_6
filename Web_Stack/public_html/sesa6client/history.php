<html>
<head>

	<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">

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
  			transition: 0.5s;
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
			width: 48px;
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
   			width: 100%;
    		min-height: 100%;
		}

		.elementrec {
   			width: 99%;
    		height: 5rem;
    		margin:22px;
    		border-radius: 12px;
    		box-shadow: 0px 2px 3px rgba(0,0,0,0.3);
    		display: grid;
    		grid-template-columns: 5% 7% 9% 8% 5% 5% 3% 8% 5% 15% 8% 3% 8%;
    		grid-gap: 10px;
    		justify-content: center;
    		align-items: center;
		background-color:#e8ecf0;
  		box-shadow: 9px 9px 16px rgb(163,177,198,0.6), -9px -9px 16px rgba(255, 255, 255);
  		position: relative;
		}
		.elementrec.header {
    			height: 3rem;
		}
		.elementrec:hover
		    {
			box-shadow:0px 0px 12px rgba(0,0,0,0.3);
			cursor:pointer;
		    }

		.elementrec:first-child{
			margin-bottom: 5px;
			height:3rem;
		}

		.elementrec:nth-child(2) {
    		margin-top: 12px;
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
		    	filter: invert(37%) sepia(93%) saturate(7471%) hue-rotate(356deg) brightness(91%) contrast(135%);
		    }
		img.menu-img:hover
		    {
			width:2.8rem;
			cursor:pointer;
			filter: invert(35%) sepia(93%) saturate(6364%) hue-rotate(356deg) brightness(91%) contrast(35%);
		    }
		img.settings-img:hover
		    {
			width:3.5rem;
			cursor:pointer;
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
    			font-size: 25px;
    			color: #929191;
    			padding-left: 2rem;
		    }
		span.content-rec
		    {
    			font-size: 42%;
    			padding: 3px;
    			padding-left: 12px;
    			padding-right: 12px;
    			margin-left: 8px;
    			color: white;
    			background-color: red;
    			border-radius: 2rem;
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
		
		button.firl {
    border-radius: 25px;
    width: 3cm;
    height: 2rem;
    border: none;
    background-color: #e8ecf0;
    position: absolute;
    top: 25px;
    box-shadow: 9px 9px 16px rgb(163,177,198,0.6), -9px -9px 16px rgba(255, 255, 255);
    right: 25px;
}

button.firl:hover{
	box-shadow: 2px 2px 3px rgb(163,177,198,0.6), -2px -2px 3px rgba(255, 255, 255);
	cursor:pointer;
}

button.button-header {
    width: 100%;
    height: 100%;
    border: none;
    background-color: #e8ecf0;
    display:flex;
    font-weight: bold;
    cursor: pointer;
}

.ele.header {
    height: 100%;
}

img.ua {
    width: 0.7rem;
    height: 0.7rem;
    padding: 2px;
}

img.uda {
    width: 0.7rem;
    height: 0.7rem;
    padding: 2px;
    display:none;
}

img.uaicon {
    width: 0.7rem;
    height: 0.7rem;
    padding: 2px;
    opacity: 0;
    display:none;
}

.imgdiv {
    display: flex;
    flex-direction: column;
    padding-left: 7px;
    height: 100%;
}

.ele label{
	font-weight: bold;
}

.ele.header label{
	font-weight: bold;
}

b {
    justify-self: center;
    align-self: center;
}

.ele.location button {
    border: none;
    background-color: #e8ecf0;
    z-index: 5;
    cursor: pointer;
}

input{
	display: none;
}
form
{
	align-self: center;
	justify-self:center;
	margin: 0;
}

.load-container{
			width: 100%;
			height:5px;
			background-color: red;
			position: absolute;
			top: 4rem;
			animation: barlo;
			animation-duration: 1s;
			animation-iteration-count: infinite;
			position: fixed;
			z-index: 5;
		}

		@keyframes barlo{
			0%{
				left:-100%;
			}
			100%{
				left:100%;
			}
		}

.icon-dep.alimg{
	opacity: 0;
}

.uaicon-veh-type,.uaiconowner-name,.uaiconveh-id,.uaiconsev,.uaiconts,.uaicondep,.uaiconlocation,.uaicondeviceid{
 	width: 0.7rem;
    height: 0.7rem;
    padding: 2px;
    opacity: 0
}
.element-area-container{
	width: 88%;
    min-height: 81%;
    position: absolute;
    top: 14%;
    left: 7%;
}
.ele.updatereport {
    background-color: #00ff00;
    width: 5rem;
    height: 20%;
    border-bottom-left-radius: 13px;
    border-top-right-radius: 13px;
    position: absolute;
    right: 0;
    top: 0;
}

.ats {
    margin: 0;
    padding: 0;
    font-size: 12px;
    color: white;
    text-align: center;
}

a {
    text-decoration: none;
    color: black;
}

.cameraicon{
	width: 25px;
}

.cameraicon img{
	width: 2rem;
}

.ele.updatereport.red {
    background-color: red;
}

.ele.updatereport.org {
    background-color: orange;
}

.tansbg transb {
    width: 9rem;
    height: 3rem;
    background: #ffac13;
}

.tansbg {
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    height: 3rem;
    margin: 0;
}

.transb button {
    width: 5rem;
    height: 1.5rem;
    border-radius: 26px;
    border: none;
    background: #f4aa23;
    color: white;
    font-size: 15px;
    cursor: pointer;
    margin-bottom: 5px;
    box-shadow: 2px 2px 3px rgba(244, 170, 35, 0), -1px -2px 2px rgba(244, 170, 35,0);
}

.transb button:hover {
    font-size: 13px;
    box-shadow: 2px 2px 3px rgba(244, 170, 35, 0.22), -1px -2px 2px rgb(244, 170, 35);
}

.transbg.acceb button {
    width: 5rem;
    height: 1.5rem;
    border-radius: 26px;
    border: none;
    background: #21e821;
    color: white;
    font-size: 15px;
    cursor: pointer;
    box-shadow: 2px 2px 3px rgba(244, 170, 35, 0), -1px -2px 2px rgba(244, 170, 35,0);
    z-index: 5;
}

.transbg.acceb button:hover {
    font-size: 13px;
    box-shadow: 2px 2px 3px rgba(33, 232, 33, 0.39), -1px -2px 2px rgb(84, 238, 84);
}

.aub {
    width: 2rem;
    position: absolute;
    bottom: 5rem;
    left: 13px;
    cursor: pointer;
}

.idp {
    width: 3rem;
    position: absolute;
    bottom: 1rem;
    left: 0.5rem;
    align-self: center;
}

.depinfo {
    width: 11rem;
    position: absolute;
    right: 7rem;
    height: 3rem;
    display: flex;
    justify-content: space-around;
    background: #e8ecf0;
    box-shadow: 2px 2px 12px 2px rgb(209, 212, 214);
    border-radius: 23px;
}

.depinfo p {
    font-weight: bold;
}

.depinfo button {
    height: 2rem;
    align-self: center;
    background: red;
    border: none;
    border-radius: 23px;
    color: white;
    width: 5rem;
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
	<?php session_start();?>
	<div class="container">
			<div class="left-container">
				<a href="index.php">
					<div class="element logo" id="home">
					<div class="brandlog">
					<img class="brandlogo-img-cir" src = "logo t.svg"/>
					<img class="brandlogo-img-rectan" src = "logo rectan.svg"/>
					<span class="brandlogo-header"></span>
					</div>
				</div>
				</a>
				<hr>
				<a href="index.php">
					<div class="element home" id="home">
					<img class="icon menu-img" src="menu.svg"/>
					<span class="icon-menu-header"><H3>Home</H3></span>
					</div>
				</a>
				<div class="element history" id="history">
					<img class="icon settings-img" src="history.svg"/>
					<span class="icon-settings-header"><H3>Settings</H3></span>
				</div>
				<div class="element info">
				</div>
				<div class="aub">
					<img src="volume.svg" id="aubcimg" onclick="aubc();" />
				</div>
				<?php
					if(strpos($_SESSION['depid'], "H") !==False){
						echo '<img class="idp" src="hospital2.svg">';
					}
					else if(strpos($_SESSION['depid'], "P") !==False){
						echo '<img class="idp" src="police-station.svg">';
					}
					else{
						echo '<img class="idp" src="fire-station.svg">';
					}
				?>
			</div>
			<div class="top-container">
				<a href="index.php"><img class="nav-button" src="nav-button-home-light-svg.svg"/></a>
				<div class="depinfo">
        			<p><?php echo $_SESSION['depid'];?></p>
        			<button id="lwc"><a href=".\login">Logout</a></button>
    			</div>
			</div>
			<div class="load-container">
				<div class="load-icon">
				</div>
			</div>
			<div class = "element-area-container">
			<div class="element-area">

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
    <input type="text" id="note-textarea" placeholder="Say OK">
  </div>
</div>
	<script src="jquery-3.4.1.slim.min.js"></script>
	<script src="jquery-3.5.0.js"></script>
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
	if(data.indexOf('device ID') !== -1&&data.indexOf('sort') == -1 && data.indexOf('location') == -1 && data.indexOf('accept') == -1 && data.indexOf('transfer') == -1){
	    var deviceid = data.split("date")[0];
	    var dwtc = data.split("date")[1];
		deviceid = deviceid.match(/\d/g);
		deviceid = deviceid.join("");
		dwtc = dwtc.match(/\d/g);
		dwtc = dwtc.join("");
		dwtc = dwtc[0]+dwtc[1]+dwtc[2]+dwtc[3]+"-"+dwtc[4]+dwtc[5]+"-"+dwtc[6]+dwtc[7];
		deviceid = "DD"+deviceid+"D"+dwtc;
		if(data.indexOf('open') !== -1||data.indexOf('navigate') !== -1||data.indexOf('go to') !== -1||data.indexOf('move') !== -1||data.indexOf('expand') !== -1||data.indexOf('switch') !== -1||data.indexOf('see') !== -1){
		    audio2.play();
            document.getElementById(deviceid).click();
		}
    }
    else if(data.indexOf('device ID') !== -1 && data.indexOf('location') !== -1 && data.indexOf('accept') == -1 && data.indexOf('transfer') == -1){
	    var deviceid = data.split("date")[0];
	    var dwtc = data.split("date")[1];
		deviceid = deviceid.match(/\d/g);
		deviceid = deviceid.join("");
		dwtc = dwtc.match(/\d/g);
		dwtc = dwtc.join("");
		dwtc = dwtc[0]+dwtc[1]+dwtc[2]+dwtc[3]+"-"+dwtc[4]+dwtc[5]+"-"+dwtc[6]+dwtc[7];
		deviceid = "lDD"+deviceid+"D"+dwtc;
		if(data.indexOf('open') !== -1||data.indexOf('navigate') !== -1||data.indexOf('go to') !== -1||data.indexOf('move') !== -1||data.indexOf('expand') !== -1||data.indexOf('switch') !== -1||data.indexOf('see') !== -1){
		    audio2.play();
            document.getElementById(deviceid).click();
		}
	}
	else if(data.indexOf('device ID') !== -1 && data.indexOf('accept') !== -1){
	    ar deviceid = data.split("date")[0];
	    var dwtc = data.split("date")[1];
		deviceid = deviceid.match(/\d/g);
		deviceid = deviceid.join("");
		dwtc = dwtc.match(/\d/g);
		dwtc = dwtc.join("");
		dwtc = dwtc[0]+dwtc[1]+dwtc[2]+dwtc[3]+"-"+dwtc[4]+dwtc[5]+"-"+dwtc[6]+dwtc[7];
		deviceid = "aD"+deviceid+"D"+dwtc;
		audio2.play();
        document.getElementById(deviceid).click();
	}
	else if(data.indexOf('device ID') !== -1 && data.indexOf('transfer') !== -1){
	    var deviceid = data.split("date")[0];
	    var dwtc = data.split("date")[1];
		deviceid = deviceid.match(/\d/g);
		deviceid = deviceid.join("");
		dwtc = dwtc.match(/\d/g);
		dwtc = dwtc.join("");
		dwtc = dwtc[0]+dwtc[1]+dwtc[2]+dwtc[3]+"-"+dwtc[4]+dwtc[5]+"-"+dwtc[6]+dwtc[7];
		deviceid = "tD"+deviceid+"D"+dwtc;
		audio2.play();
        document.getElementById(deviceid).click();
	}
    else if(data.indexOf('home') !== -1){
        audio2.play();
		document.getElementById('home').click();
	}
	else if(data.indexOf('history') !== -1){
	    audio2.play();
		document.getElementById('history').click();
	}
	else if(data.indexOf('sign out') !== -1){
	    audio2.play();
		document.getElementById('lwc').click();
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
		function setCookie(cname,cvalue,exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires=" + d.toGMTString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var decodedCookie = decodeURIComponent(document.cookie);
  var ca = decodedCookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

		if(document.cookie.indexOf('iconvehtypevar=')===-1){
			var iconvehtypevar = 2;	
		var ownernamevar = 2;
		var vehidvar = 2;
		var sevvar = 2;
		var tsvar = 1;
		var depvar = 2;
		var locationvar = 2;
		var deviceidvar = 2;
		}
		else{
			var iconvehtypevar = getCookie("iconvehtypevar");	
		var ownernamevar = getCookie("ownernamevar");
		var vehidvar = getCookie("vehidvar");
		var sevvar = getCookie("sevvar");
		var tsvar = getCookie("tsvar");
		var depvar = getCookie("depvar");
		var locationvar = getCookie("locationvar");
		var deviceidvar = getCookie("deviceidvar");
		}
		
		function changefil(divid){
			if(divid == "icon-veh-type"){
				if(iconvehtypevar == 0){
					document.getElementById("uaicon-veh-type").style.display="block";
					document.getElementById("ua-veh-type").style.display="none";
					document.getElementById("uda-veh-type").style.display="none";
					iconvehtypevar = 1;
					setCookie("iconvehtypevar","order",2)
				}
				else if(iconvehtypevar == 1){
					document.getElementById("uaicon-veh-type").style.display="none";
					document.getElementById("ua-veh-type").style.display="block";
					document.getElementById("uda-veh-type").style.display="none";
					iconvehtypevar = 2;
					setCookie("iconvehtypevar","Icon_vehicle DESC",2);
				}
				else{
					document.getElementById("uaicon-veh-type").style.display="none";
					document.getElementById("ua-veh-type").style.display="none";
					document.getElementById("uda-veh-type").style.display="block";
					iconvehtypevar = 0;
					setCookie("iconvehtypevar","Icon_vehicle ASC",2);
				}
			}
			else if(divid == "owner-name"){
				if(ownernamevar == 0){
					document.getElementById("uaiconowner-name").style.display="block";
					document.getElementById("udaowner-name").style.display="none";
					document.getElementById("uaowner-name").style.display="none";
					ownernamevar  = 1;
					setCookie("ownernamevar","order",2)
				}
				else if(ownernamevar == 1){
					document.getElementById("uaiconowner-name").style.display="none";
					document.getElementById("udaowner-name").style.display="none";
					document.getElementById("uaowner-name").style.display="block";
					ownernamevar  = 2;
					setCookie("ownernamevar","Owner_name DESC",2)
				}
				else{
					document.getElementById("uaiconowner-name").style.display="none";
					document.getElementById("udaowner-name").style.display="block";
					document.getElementById("uaowner-name").style.display="none";
					ownernamevar  = 0;
					setCookie("ownernamevar","Owner_name ASC",2)
				}
			}
			else if(divid == "veh-id"){
				if(vehidvar == 0){
					document.getElementById("uaiconveh-id").style.display="block";
					document.getElementById("udaveh-id").style.display="none";
					document.getElementById("uaveh-id").style.display="none";
					vehidvar  = 1;
					setCookie("vehidvar","order",2)
				}
				else if(vehidvar == 1){
					document.getElementById("uaiconveh-id").style.display="none";
					document.getElementById("udaveh-id").style.display="none";
					document.getElementById("uaveh-id").style.display="block";
					vehidvar  = 2;
					setCookie("vehidvar","VehicleID DESC",2)
				}
				else{
					document.getElementById("uaiconveh-id").style.display="none";
					document.getElementById("udaveh-id").style.display="block";
					document.getElementById("uaveh-id").style.display="none";
					vehidvar  = 0;
					setCookie("vehidvar","VehicleID ASC",2)
				}
			}
			else if(divid == "sev"){
				if(sevvar == 0){
					document.getElementById("uaiconsev").style.display="block";
					document.getElementById("udasev").style.display="none";
					document.getElementById("uasev").style.display="none";
					sevvar  = 1;
					setCookie("sevvar","order",2)
				}
				else if(sevvar == 1){
					document.getElementById("uaiconsev").style.display="none";
					document.getElementById("udasev").style.display="none";
					document.getElementById("uasev").style.display="block";
					sevvar  = 2;
					setCookie("sevvar","Severity DESC",2)
				}
				else{
					document.getElementById("uaiconsev").style.display="none";
					document.getElementById("udasev").style.display="block";
					document.getElementById("uasev").style.display="none";
					sevvar  = 0;
					setCookie("sevvar","Severity ASC",2)
				}
			}
			else if(divid == "ts"){
				if(tsvar == 0){
					document.getElementById("uaiconts").style.display="block";
					document.getElementById("udats").style.display="none";
					document.getElementById("uats").style.display="none";
					tsvar  = 1;
					setCookie("tsvar","order",2)
				}
				else if(tsvar == 1){
					document.getElementById("uaiconts").style.display="none";
					document.getElementById("udats").style.display="none";
					document.getElementById("uats").style.display="block";
					tsvar  = 2;
					setCookie("tsvar","Timestamp_time DESC",2)
				}
				else{
					document.getElementById("uaiconts").style.display="none";
					document.getElementById("udats").style.display="block";
					document.getElementById("uats").style.display="none";
					tsvar  = 0;
					setCookie("tsvar","Timestamp_time ASC",2)
				}
			}
			else if(divid == "dep"){
				if(depvar == 0){
					document.getElementById("uaicondep").style.display="block";
					document.getElementById("udadep").style.display="none";
					document.getElementById("uadep").style.display="none";
					depvar  = 1;
					setCookie("depvar","order",2)
				}
				else if(depvar == 1){
					document.getElementById("uaicondep").style.display="none";
					document.getElementById("udadep").style.display="none";
					document.getElementById("uadep").style.display="block";
					depvar  = 2;
					setCookie("depvar","Department_contacted DESC",2)
				}
				else{
					document.getElementById("uaicondep").style.display="none";
					document.getElementById("udadep").style.display="block";
					document.getElementById("uadep").style.display="none";
					depvar  = 0;
					setCookie("depvar","Department_contacted ASC",2)
				}
			}
			else if(divid == "location"){
				if(locationvar == 0){
					document.getElementById("uaiconlocation").style.display="block";
					document.getElementById("udalocation").style.display="none";
					document.getElementById("ualocation").style.display="none";
					locationvar  = 1;
					setCookie("locationvar","order",2)
				}
				else if(locationvar == 1){
					document.getElementById("uaiconlocation").style.display="none";
					document.getElementById("udalocation").style.display="none";
					document.getElementById("ualocation").style.display="block";
					locationvar  = 2;
					setCookie("locationvar","Location DESC",2)
				}
				else{
					document.getElementById("uaiconlocation").style.display="none";
					document.getElementById("udalocation").style.display="block";
					document.getElementById("ualocation").style.display="none";
					locationvar  = 0;
					setCookie("locationvar","Location ASC",2)
				}
			}
			else if(divid == "deviceid"){
				if(deviceidvar == 0){
					document.getElementById("uaicondeviceid").style.display="block";
					document.getElementById("udadeviceid").style.display="none";
					document.getElementById("uadeviceid").style.display="none";
					deviceidvar  = 1;
					setCookie("deviceidvar","order",2)
				}
				else if(deviceidvar == 1){
					document.getElementById("uaicondeviceid").style.display="none";
					document.getElementById("udadeviceid").style.display="none";
					document.getElementById("uadeviceid").style.display="block";
					deviceidvar  = 2;
					setCookie("deviceidvar","DeviceID DESC",2)
				}
				else{
					document.getElementById("uaicondeviceid").style.display="none";
					document.getElementById("udadeviceid").style.display="block";
					document.getElementById("uadeviceid").style.display="none";
					deviceidvar  = 0;
					setCookie("deviceidvar","DeviceID ASC",2)
				}
			}
		}
		if(document.cookie.indexOf('iconvehtypevar=')===-1){
		changefil("icon-veh-type");
		changefil("owner-name");
		changefil("veh-id");
		changefil("sev");
		changefil("ts");
		changefil("dep");
		changefil("location");
		changefil("deviceid");
	}

		function recentevent(){
		iconvehtypevar = 0;	
		ownernamevar = 0;
		vehidvar = 0;
		sevvar = 0;
		tsvar = 2;
		depvar = 0;
		locationvar = 0;
		deviceidvar = 0;
		changefil("icon-veh-type");
		changefil("owner-name");
		changefil("veh-id");
		changefil("sev");
		changefil("ts");
		changefil("dep");
		changefil("location");
		changefil("deviceid");

}
	</script>
	<script>
		var aubw = 1;
		function aubc(){
			if(aubw==0){
				aubw = 1;
				document.getElementById('aubcimg').src = "volume.svg";
			}
			else{
				aubw = 0;
				document.getElementById('aubcimg').src = "volume m.svg";
			}
		}
	</script>
	<script src="responsivevoice.js"></script>	
	<script>
	function texts(message){
		if(aubw==1){
			responsiveVoice.speak(message, "UK English Male");
		}
	}
	setInterval(() => {
		texts("Total "+message+" Accident found");
	},10000);
</script>
	<script>
    $(document).ready(function(){
        function getData(){
            $.ajax({
                type: 'POST',
                url: 'hisdata.php',
                success: function(data){
                    $('.element-area-container').html(data);
                }
            });
        }
        getData();
       	setInterval(function () {
            getData(); 
        }, 1000);  // it will refresh your data every 1 sec
    });
	</script>
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
</body>
</html>