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

		.elementrec-area-pg2 {
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
    font-size: 12px;
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

input{
	display: none;
}

a{
	color: black;
	text-decoration: none;
}

@media only screen and (max-width: 1400px){
	.elementrec-area-pg2{
		height: 31rem;
	}
	.title-display{
		height: 13%;
		margin-bottom: 0;
	}
	.img.location-icon{
		width: 2rem;
	}
	.icon-menu-header h3{
		font-size: 16px;
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
				<a href="index.php"><img class="nav-button" src="nav-button-d-svg.svg"/></a>
			</div>
			<div class="element-area">
				<H2>More Detail</H2>
				<div class="tansbg"></div>		
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
                url: 'datapage2.php',
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