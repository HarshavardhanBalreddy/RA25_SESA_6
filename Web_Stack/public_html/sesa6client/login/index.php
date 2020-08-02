<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>

* {
   box-sizing: border-box;
}

body {
   font-family: Arial, Helvetica, sans-serif;
   margin:0;
   padding:0;
   overflow: hidden;
}

.container {
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
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
    font-family: sans-serif;
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
}

.cont-div {
        width: 36rem;
    border-radius: 23px;
    margin-top: 2rem;
    margin-bottom: 3rem;
    box-shadow: 3px 3px 13px 1px rgba(0,0,0,0.3);
    padding: 2rem;
    align-self: center;
    background: #ffffffc9;
}

p {
    text-align: left;
}

label {
    position: absolute;
    left: 24px;
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
          z-index: 5;
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
 }

.ldw {
    display: inline-block;
}

.ldw button {
    background: grey;
    color: white;
    border: none;
    padding: 0.5rem;
    border-radius: 23px;
    width: 7rem;
    cursor: pointer;
    box-shadow: 2px 2px 5px 2px rgba(0,0,0,0.3);
}

.ldw button:hover {
    box-shadow: none;
}

</style>
</head>
<body>
  <?php 
    session_start();
    session_destroy();
  ?>
<div class="container" id="container">
  <div class="mpdp" id="mpdp">
  </div>
<center>
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
	<h2 id="dlin">Department Login</h2>
   </div></center>
  <div class="depart-contact">
  </div>
  <p id="unamel">Department ID</p>
  <div class="input-container">
    <i class="fa fa-user icon" id="unamew"></i>
    <input class="input-field" type="text" placeholder="Department ID" name="uname" id="uname" onkeydown="lch();" autocomplete="off">
  </div>
  
  <p id="pwdl">Security Key</p>
  <div class="input-container">
    <i class="fa fa-gavel icon" id="seckey"></i>
    <input class="input-field" type="password" placeholder="Security Key" name="seckey" id="seckey" autocomplete="off">
  </div>

  <button type="submit" class="btn" id="btn" value="Register" onclick="transb();"><i class="fa fa-paper-plane" aria-hidden="true"></i>Login</button>
</div>
</div>
<div class="ldw">
    <p> Want to register?</p>
    <a href="../register/"><button>Register</button></a>
</div>
</center>
</div>
<script src="jquery-3.4.1.slim.min.js"></script>
  <script src="jquery-3.5.0.js"></script>
<script>
  function lch(){
    var uname = document.getElementById('uname').value;
    if(uname.indexOf('h') > -1||uname.indexOf('H') > -1){
      document.getElementById('unamew').classList.remove('fa-user');
      document.getElementById('unamew').classList.add('fa-ambulance');
      document.getElementById('unamel').innerHTML = "Hospital ID";
      document.getElementById('dlin').innerHTML = "Hospital ID";
      document.getElementById('container').style.background = "url('hospitalw.jpg')";
    }
    else if(uname.indexOf('p') > -1||uname.indexOf('P') > -1){
      document.getElementById('unamew').classList.remove('fa-user');
      document.getElementById('unamew').classList.add('fa-taxi');
      document.getElementById('unamel').innerHTML = "Police ID";
      document.getElementById('dlin').innerHTML = "Police ID"
      document.getElementById('container').style.background = "url('policew.jpg')";
    }
    else if(uname.indexOf('f') > -1||uname.indexOf('F') > -1){
      document.getElementById('unamew').classList.remove('fa-user');
      document.getElementById('unamew').classList.add('fa-fire-extinguisher');
      document.getElementById('unamel').innerHTML = "Firestation ID";
      document.getElementById('dlin').innerHTML = "Firestation ID";
      document.getElementById('container').style.background = "url('fw.jpg')";
    }
    else{
      document.getElementById('unamew').classList.remove('fa-ambulance');
      document.getElementById('unamew').classList.remove('fa-fire-extinguisher');
      document.getElementById('unamew').classList.remove('fa-taxi');
      document.getElementById('unamew').classList.add('fa-user');
      document.getElementById('unamel').innerHTML = "Department ID";
      document.getElementById('dlin').innerHTML = "Department ID";
      document.getElementById('container').style.background = "none";
    }
  }
</script>
<script>
  //fa-ambulance fa-fire-extinguisher fa-taxi
        function transb(){
            var uname = document.getElementById('uname').value;        
            $.ajax({
                type: 'POST',
                url: 'lpaged.php',
                data: { 'uname' : uname},
                success: function(data){
                    $('.mpdp').html(data);
                }
            });
        } 
  </script>
</body>
</html>
