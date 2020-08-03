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
			overflow-x:hidden;
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

		.elementrec-area-pg2 {
   		width: 99%;
    		margin:22px;
    		border-radius: 12px;
    		box-shadow: 0px 2px 3px rgba(0,0,0,0.3);
    		justify-content: center;
    		align-items: center;
		background-color:#e8ecf0;
  		box-shadow: 9px 9px 16px rgb(163,177,198,0.6), -9px -9px 16px rgba(255, 255, 255);
		position:relative;
		top:-2rem;
		box-sizing: border-box;
		}
		.elementrec.header {
    			height: 3rem;
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
			 filter: invert(37%) sepia(93%) saturate(7471%) hue-rotate(356deg) brightness(91%) contrast(135%);
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
		


.title-display {
    width: 100%;
    height: 15%;
    margin: 12px;
    padding-top: 17px;
    display: flex;
}

.div-section-title {
    height: 100%;
    width:100%;
    background-color: none;
}

.section-area {
    height: 61%;
    width: 100%;
    margin: 12px;
    margin-top:25px;
    display: inline-flex;
}

	
.div-section {
    height: 100%;
    width: 32%;
    margin: 2px;
    box-shadow: 2px 2px 5px rgb(163,177,198,0.3), -2px -2px 20px rgba(255, 255, 255);
}

.locate-area {
    height: 14%;
    width: 100%;
    margin: 12px;
    display: flex;
    margin-top:25px;
}

.elementrec-area {
    margin-top: 0px;
    margin-bottom: 0px;
    bottom: 0px;
}

table {
	border-spacing: 5px;
}

th ,td {
	text-align: left;
	padding: 5px;
	padding-top:3px;
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

.div-section-title.icon {
    width: 7rem;
    /* background-color: red; */
    justify-content: center;
    align-items: center;
    display: flex;
}

.div-section-title.sevarity {
    width: 45rem;
    /* background-color: blue; */
    justify-content: center;
    align-items: center;
    align-content: center;
    display: flex;
    /* position: relative; */
    /* left: 50rem; */
    /* flex: 27%; */
    justify-content: flex-end;
    margin-left: 47%;
}

.div-section-title.ts {
    width: 19rem;
    /* background-color: #e1d8d8; */
    margin-right: 5%;
    justify-content: center;
    align-items: center;
    display: flex;
}

h4 {
    /* height: 12px; */
    width: 100%;
	text-align:center;
}

table{
	width:100%;
}

tbody {
    width: 100%;
    height: 100%;
}

tr {
    width: 90%;
    margin-left: 23px;
}

td.ll {
    padding-left: 0;
    text-align: center;
}

th{
padding-left:2rem;
}

.dep-detail {
    height: 100%;
}

p.dep-detail-header,p.loc-ll{
    font-size: 13px;
    color: #b5b0b0;
    margin: 0;
}


p.dep-detail-name,p.loc-name {
    font-size: 15px;
    width: 100%;
    margin: 0;
}

.div-section-loc.place {
    width: 16%;
    /* position: relative; */
    display: flex;
    justify-content: center;
    align-items: center;
}

img.location-icon {
    width: 3rem;
}

.div-section-loc.content {
    width: 35%;
    padding: 0;
    margin: 0;
}

.location-header-title {
    padding: 0;
    margin: 0;
    height: 100%;
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

h4.location-header-name {
        padding: 0;
    padding-bottom: 0.3rem;
    margin: 0;
    margin-top: -2px;
    font-size: 17px;
}

.loc-number {
    display: flex;
color: #a7a7a7;
}

h4.location-number-lon,h4.location-number-lat {
        margin: 0;
    margin-right: 2px;
    font-size: 15px;

}

.div-section-loc-content {
    
}

h4.location-name {
    margin: 0;
	color:red;
}

button.loc-button {
    width: 12rem;
    height: 3rem;
    border-radius: 45px;
    border: none;
    background-color: red;
    color: white;
    font-size: 17;
	box-shadow: 2px 2px 5px rgb(163,177,198,0.3), -2px -2px 20px rgba(255, 255, 255);
}

button.loc-button:hover {
	box-shadow: 2px 2px 5px rgb(163,177,198,0), -2px -2px 20px rgba(255, 255, 255,0);
cursor:pointer;
}

.div-section-loc.but {
    display: flex;
    justify-content: center;
    align-items: center;
	margin-left: 3.5rem;
}

.div-section-loc-content {
    width: 17rem;
}

.pic-area {
    width: 100%;
    height: 102vh;
    box-sizing: border-box;
}

.pic-area img{
    box-sizing: border-box;
    padding: 25px;
    width: 100%;
    height: 100%;
    padding-top:5%;
}

.bap-area {
    width: 93%;
    height: 5rem;
    position: absolute;
    z-index: 7;
    bottom: 25px;
    position: fixed;
    left: 12vh;
    display:flex;
    border-radius:15px;
    background-color: #e8ecf0;
    box-shadow: 2px 2px 5px rgb(163,177,198,0.3), -2px -2px 20px rgba(255, 255, 255);
    display:none;
}

bap-area img {
    align-items: center;
}
.bap-area img {padding: 0.7rem;}

.bap-area h3 {
    box-sizing: border-box;
    margin: 0;
    padding: 0.7rem;
}

.dept-name-add {
    box-sizing: border-box;
    width: 45%;
    height: 100%;
}

.bap-area h4 {
    width: 100%;
    margin: 0;
    padding-left: 0.7rem;
    text-align: left;
    font-weight: normal;
}

.dept-m-we {
    width: 25%;
    height: 100%;
    position: relative;
    left: 25rem;
}

img.bap {
	margin-left: 25rem;
	width: 2rem;
	height: 2rem;
}

input{
	display: none;
}

a{
	color: black;
	text-decoration: none;
}

@media only screen and (max-width: 1400px){
	.title-display{
		height: 13%;
		margin-bottom: 0;
		padding-bottom: 5px;
	}
	.section-area{
		margin-top: 0;
	}
	.img.location-icon{
		width: 2rem;
	}
	#transb{
		width: 5rem;
	}
	body{
		font-size: 13px;
	}
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
    bottom: 6%;
    right: 7%;
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
		$DeviceID = $_GET['DeviceID'];
		?>
		<script>
  		var DeviceID = <?php echo json_encode($DeviceID); ?>;
	</script>
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
				<a href="history.php">
				<div class="element history" id="history">
					<img class="icon settings-img" src="history.svg"/>
					<span class="icon-settings-header"><H3>Settings</H3></span>
				</div>
				</a>
				<div class="element info">
				</div>
			</div>
			<div class="top-container">
				<a href="index.php"><img class="nav-button" src="nav-button-home-light-svg.svg"/></a>
			</div>
			<div class="element-area">
				<H2>More Detail</H2>		
				<div class="elementrec-area-pg2">
					
	
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
	if(data.indexOf('open') !== -1||data.indexOf('navigate') !== -1||data.indexOf('go to') !== -1||data.indexOf('move') !== -1||data.indexOf('expand') !== -1||data.indexOf('switch') !== -1||data.indexOf('see') !== -1 || data.indexOf('services') !== -1 || data.indexOf('service') !== -1){
		if(data.indexOf('home') !== -1){
		    audio2.play();
		    document.getElementById('home').click();
		}
		else if(data.indexOf('history') !== -1){
		    audio2.play();
		    document.getElementById('history').click();
		}
		else if(data.indexOf('location') !== -1){
		    audio2.play();
		    document.getElementById('location').click();
		}
		else if(data.indexOf('hospital') !== -1){
		    audio2.play();
		    document.getElementById('hospital').click();
		}
		else if(data.indexOf('police') !== -1){
		    audio2.play();
		    document.getElementById('police').click();
		}
		else if(data.indexOf('fire station') !== -1){
		    audio2.play();
		    document.getElementById('fire station').click();
		}
		else{
            speecherrorc();
        }
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
    $(document).ready(function(){
        function getData(){
            $.ajax({
                type: 'POST',
                url: 'datapage22.php',
                data: { 'DeviceID': DeviceID},
                success: function(data){
                    $('.elementrec-area-pg2').html(data);
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