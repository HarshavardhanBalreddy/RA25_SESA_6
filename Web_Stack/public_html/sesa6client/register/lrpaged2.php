<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="html2pdf.bundle.min.js"></script>
<style>

* {
   box-sizing: border-box;
}

body {
   font-family: Arial, Helvetica, sans-serif;
   margin:0;
   padding:0;
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
    width: 203px;
    border-radius: 23px;
    margin-top: 2rem;
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
   padding-bottom: 2rem;
}

p {
    font-size: 2rem;
    text-align: center;
    color: red;
    margin: 0;
    margin-bottom: 2rem;
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
              width: 9.5rem;
    position: absolute;
    top: 18px;
    left: 4px;
    }

    img.brandlogo-img-rectan {
              width: 9.5rem;
    position: absolute;
    top: -102px;
    z-index: -2;
    }

    .bdiv {
    height: 7rem;
    align-self: center;
}

.carea {
    display: inline-flex;
    position: relative;
    left: -5rem;
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

.cb {
    display: flex;
    justify-content: space-evenly;
    margin-left: -5rem;
    margin-bottom: 2rem;
}

.cont-div {
    width: 44rem;
    height: 34rem;
    border-radius: 23px;
    margin-top: 2rem;
    display: flex;
    box-shadow: 3px 3px 13px 1px rgba(0,0,0,0.3);
    padding: 2rem;
    align-self: center;
    background: #ffffffc9;
}

.container {
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
}

.ldarea {
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
}

.ldarea2 {
    width: 100%;
    height: 100%;
}

.dre-area p {
    font-size: 13px;
    text-align: left;
    margin-left: 2rem;
    margin-bottom: 2px;
    color: green;
}

.dre-area p:nth-child(1) {
    font-weight: bold;
    color: black;
}

</style>
</head>
<body>
    <?php

$depid = $_GET['depid'];

?> 
<div class="container" id="container">
    <center>
        <div class="cont-div" id="cont-div">
            <div class="ldarea">
                <div class="bdiv">
                    <div class="carea">
                        <div class="brandlog">
                            <img class="brandlogo-img-cir" src = "logo t.svg"/>
                            <img class="brandlogo-img-rectan" src = "logo rectan.svg"/>
                            <span class="brandlogo-header"></span>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="ldarea2">
                <h2 id="dlin">Department ID</h2>
                <p> <?php echo $depid; ?></p>
                <div class="dre-area">
                    <p> Date of registration</p>
                    <p><?php echo date("Y-m-d") ?></p> 
                </div>
                <a href="../login/"><button type="submit" class="btn" id="btn" value="Register"><i class="fa fa-paper-plane" aria-hidden="true"></i>Login</button></a>
            </div>
        </div>
    </center>
</div>
<script src="jquery-3.4.1.slim.min.js"></script>
  <script src="jquery-3.5.0.js"></script>
<script>
    function pdpage() {
        // Choose the element that our invoice is rendered in.
        const element = document.getElementById("container");
        // Choose the element and save the PDF for our user.
        html2pdf()
          .from(element)
          .save();
    }
    pdpage();
</script>
</body>
</html>