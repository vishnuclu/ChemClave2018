function loginstatus(){
  if(typeof(Storage)!=="undefined"){
    if(localStorage.getItem("response")!==null){
      var stored_response = JSON.parse(localStorage.getItem("response"));
      if(stored_response.id === undefined || stored_response.access_token === undefined || stored_response.pf_filled===undefined){
        console.log(stored_response);
        localStorage.clear();
      }
      else{
        console.log(stored_response);
        showlogoutlink();   
      }
    }
    else{
      console.log("The user is not logged in");
    }
  }
  else{
    console.log("cant get status because cant access localstorage");
  }
  $('.fa-spinner').css("display","none");
  $('.fa-facebook').css("display","inline");
}

function logout(){
  if(typeof(Storage)!=="undefined"){
    if(localStorage.getItem("response")!==null){
      var stored_response = JSON.parse(localStorage.getItem("response"));
      if(stored_response.id === undefined || stored_response.access_token=== undefined){
        console.log("localStorage deleted");
      }
      else{
        $.post("logout.php",{auth_uid:stored_response.id,token:stored_response.access_token},function(data,status){
          if(status==="success"){
              localStorage.clear();
              location.reload(); 
              if(data!==true){
                console.log("Incorrect token Yet logged out only from this PC");
              }     
          }
          else{
            console.log("Error logging out Please check your Internet connection");
          }
        });
      }
    }
    else{
      localStorage.clear();
      location.reload();
      console.log("Already logged out");
    }
  }
  else{
    console.log("cant logout because cant access localstorage");
  }
}

function fbLogin(){
  $('.fa-spinner').css("display","inline");
  $('.fa-facebook').css("display","none");
  FB.login(function(response){
    if(response.authResponse){
      $.post("fblogin.php",function(data,status){
        if(status==="success"){
          localStorage["response"] = data;
          console.log(data);
          res = JSON.parse(data);
          if(res.pf_filled==="0"){
            $('.fa-spinner').css("display","none");
            $('.fa-facebook').css("display","block");
            window.location.replace('profile.php');
          }
          else{
            showlogoutlink();
          }
          //showlogoutlink(JSON.parse(data));
        }
        $('.fa-spinner').css("display","none");
        $('.fa-facebook').css("display","inline");
      });
    }
    else{
      document.getElementById('status').innerHTML = 'User cancelled login or did not fully authorize.';
      $('.fa-spinner').css("display","none");
      $('.fa-facebook').css("display","inline");
    }
  }, {scope: 'email'});
}

