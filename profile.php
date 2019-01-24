<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Chemclave</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <script type="text/javascript">
    $(document).ready(function(){
      if(typeof(Storage)!=="undefined"){
        if(localStorage.getItem("response")!==null){
          var stored_response = JSON.parse(localStorage.getItem("response"));
          if(stored_response.id === undefined || stored_response.access_token === undefined){
            localStorage.clear();
            alert('Invalid credentials. Login to facebook again to continue')
            window.location.replace('index.php');
          }
          else{
            if(stored_response.pf_filled==="1"){
              $('.frm').addClass("buffer");
              $('.pf').removeClass("buffer");
              console.log(stored_response);
              len = stored_response.ccid.toString().length;
              var st="";
              for($i=len;$i<4;$i++){
                st = st+'0';
              }
              console.log(stored_response.clg);
              document.getElementById('ccid').innerHTML = "CC18C".concat(st).concat(stored_response.ccid.toString());
              document.getElementById('nam').innerHTML = stored_response.name;
              document.getElementById('mail').innerHTML = stored_response.email;
              document.getElementById('gend').innerHTML = stored_response.gender;
              document.getElementById('colleg').innerHTML = stored_response.clg;
              document.getElementById('phonenum').innerHTML = stored_response.phnum;
              document.getElementById('fbpropic').innerHTML = '<img src="'+stored_response.picture.url+'" width="100%" height = "100%" style = "border-radius:50%;"/>';  
            }            
          }
        }
        else{
          //the user is not logged in redirect him to chemclave.org
          window.location.replace('index.php');
        }
      }
      else{
        console.log("What kind of PC is this Update karo yaar");
        //the PC doesnot support local storage
      }
    });

    function sbtd(){
      if($('#clg').val() && $('#phnum').val()){
        stored_response = JSON.parse(localStorage.getItem("response"));
        var clg = $('#clg').val();
        var phnum = $('#phnum').val();
        $.post("ccid.php",{clg:clg,phnum:phnum,access_token:stored_response.access_token,uid:stored_response.id},function(data,status){
          if(status==="success"){
            if(data!=="-1"){
              stored_response.clg = clg;
              stored_response.phnum = phnum;
              stored_response.pf_filled = "1";
              stored_response.acm_status = null;
              stored_response.acm_refnum = null;
              stored_response.evreg_status = null;
              stored_response.ev_refnum = null;
              stored_response.ev_reg = null; 
              stored_response.ccid = data;
              localStorage["response"] = JSON.stringify(stored_response);
              window.location.replace('index.php');
            }
            else{
              console.log(data);
              //localStorage.clear();
              //window.location.replace('index.php');  
            }
          }
        });
      }
    }
    $(window).on('load',function(){
      if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        console.log("lapi");
        $('.lapi').remove();
      }
      else{
        console.log("mobile");
        $('.mobile').remove();
      }
    });
  </script>
    <style type="text/css">
  @import url(https://fonts.googleapis.com/css?family=Open+Sans:400,700);
body {
  font-family: 'Open Sans', sans-serif;
}

.login {
  background: #ebebeb;
  width: 80%;
  margin: 2% auto;
  font-size: 16px;
}

/* Reset top and bottom margins from certain elements */
.login-header,
.login p {
  margin-top: 0;
  margin-bottom: 0;
}

/* The triangle form is achieved by a CSS hack */
.login-triangle {
  width: 0;
  margin-right: auto;
  margin-left: auto;
  border: 12px solid transparent;
  border-bottom-color: #5f686f;
}

.login-header {
  background: #5f686f;
  padding: 20px;
  font-size: 1.4em;
  font-weight: normal;
  text-align: center;
  text-transform: uppercase;
  color: #fff;
}

.login-container {
  padding: 12px;
}

/* Every row inside .login-container is defined with p tags */
.login p {
  padding: 12px;
}

.login input {
  box-sizing: border-box;
  display: block;
  width: 100%;
  border-width: 1px;
  border-style: solid;
  padding: 16px;
  outline: 0;
  font-family: inherit;
  font-size: 0.95em;
}

.login input[type="clg"],
.login input[type="phnum"] {
  background: #fff;
  border-color: #bbb;
  color: #555;
}

/* Text fields' focus effect */
.login input[type="clg"]:focus,
.login input[type="phnum"]:focus {
  border-color: #888;
}

.login input[type="submit"] {
  background: #5f686f;
  border-color: transparent;
  color: #fff;
  cursor: pointer;
}

.login input[type="submit"]:hover {
  background: #43515c;
}

/* Buttons' focus effect */
.login input[type="submit"]:focus {
  border-color: #3e4144;
}
.buffer{
  display: none !important;
}
.row{
  margin: 2% 0 2% 0; 
}

</style>
</head>
<body>  
  <div class="login container" style="height: auto !important;margin-top: 4%;">
    <button type="button" class="btn btn-default btn-sm" onclick="window.location.replace('index.php')">
      <span class="glyphicon glyphicon-chevron-left"></span> Back
    </button>
    <div class="login-triangle"></div>
    <h2 class="login-header">Profile</h2>
    <div class="login-container visible-md visible-lg frm lapi">
      <h4 style="text-align: center;">Please complete the following details to complete your signup and to claim your Chemclave Id</h4>
      <input type="text" placeholder="College Name" id = "clg" style="width: 40%;margin: 2% 30% 1% 30%;border-radius:2%;" required>
      <input type="text" placeholder="Phone Number" id = "phnum" style="width: 40%;margin: 2% 30% 1% 30%;" required>
      <input type="submit" name="sbt" onclick="sbtd()" style="width: 40%;margin: 2% 30% 1% 30%;">
    </div>
    <div class="login-container visible-xs visible-sm frm mobile">
      <h4 style="text-align: center;">Please complete the following details to complete your signup and to claim your Chemclave Id</h4>
      <input type="text" placeholder="College Name" id = "clg" style="width: 90%;margin: 2% 5% 1% 5%;border-radius:2%;" required>
      <input type="text" placeholder="Phone Number" id = "phnum" style="width: 90%;margin: 2% 5% 1% 5%;" required>
      <input type="submit" name="sbt" onclick="sbtd()" style="width: 90%;margin: 2% 5% 1% 5%;">
    </div>
    <div class="pf buffer">
      <div id="fbpropic" style="width: 18%;height: auto;margin:2% 40% 2% 20%;"></div>
      <div class="row">
        <b><span>ChemClave Id : </span><span id="ccid"></span></b>
      </div>
      <div class="row">
        <b><span>Name : </span><span id="nam"></span></b>
      </div>
      <div class="row">
        <b><span>Email Id : </span><span id="mail"></span></b>
      </div>
      <div class="row">
        <b><span>Gender : </span><span id="gend"></span></b>
      </div>
      <div class="row">
        <b><span>College : </span><span id="colleg"></span></b>
      </div>
      <div class="row">
        <b><span>Phone Number : </span><span id="phonenum"></span></b>
      </div>
    </div>
  </div>

</body>
</html>