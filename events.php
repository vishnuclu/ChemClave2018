<!DOCTYPE html>
<html>
<head>

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="css/events_style.css">
  	<script src="thirdparty/jquery.pagenav.js"></script>
	<title>Chemclave</title>
<script>
  $(document).ready(function (){
     $('nav a').pageNav({'scroll_shift': $('nav').outerHeight()+20});
  });
  $(document).ready(function(){
  	$('.bmenu li').click(function(event){
      	var text = ".".concat($(this).text());
      	$('.active_nav').removeClass("active_nav");
      	$(this).addClass("active_nav");
      	$('.active').css("display","none");
      	$(text).css("display","block");
      	$('.active').removeClass("active");
      	$(text).addClass("active");
      });
  });

</script>

<style>
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}
</style>


</head>
<body>
	<nav class="navbar navbar-default navbar-inverse" id="navbar" role="navigation" style="margin-bottom: 0 !important;">
    <div>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">ChemClave</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <!--<li class="active"><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#home">Home</a> </li>
            <li><a href="#about">About</a></li>
            <li><a href="#sponsors">Sponsors</a></li>
            <li><a href="#teaminfo">TeamInfo</a></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>-->
        <li><a href="index.php?clicked=.home">Home</a> </li>
        <li><a href="index.php?clicked=.about">About</a></li>
        <li><a href="index.php?clicked=.sponsors">Sponsors</a></li>
        <li><a href="index.php?clicked=.teaminfo">TeamInfo</a></li>
        <li><a href="events.php">Events</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="propic"><b>Login</b> <span class="caret"></span></a>
      <ul id="login-dp" class="dropdown-menu">
        <li>
           <div class="row">
              <div class="col-md-12">
                Login via
                <div class="social-buttons">
                  <a href="javascript:void(0);" onclick="fbLogin()" id="fbLink" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                </div>
                or
                <form class="form" role="form" method="post" action="login.php" accept-charset="UTF-8" id="login-nav">
                    <div class="form-group">
                       <label class="sr-only">Email address</label>
                       <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" name="email" required>
                    </div>
                    <div class="form-group">
                       <label class="sr-only">Password</label>
                       <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" name="pwd" required>
                        <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                    </div>
                    <div class="form-group">
                       <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                    </div>
                    <div class="checkbox">
                       <label>
                       <input type="checkbox"> keep me logged-in
                       </label>
                    </div>
                 </form>
              </div>
              <div class="bottom text-center">
                New here ? <a href="#"><b>Join Us</b></a>
              </div>
           </div>
        </li>
      </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <div class="body" style="width: 100%;height: 93vh;background: url('https://cdn.pixabay.com/photo/2016/11/09/15/27/dna-1811955_960_720.jpg');background-size: cover;background-repeat: no-repeat;background-position: center;">
  	<div class="content container" style="position: relative;">
  		<div class="heading">
			<h1>Accomdation Portal for the Hospitality Team</h1>
		</div>
  		<ul class="bmenu nav3" style="position: fixed;margin-left: 15%;">
  			<li class="active_nav" style="display: none;"></li>
			  <li class="tabs" style="margin-right: 10%;"><span>applicant</span></li>
			  <li class="tabs" style="float: right;margin-right: 15%;"><span>accept</span></li>
			  <li class="tabs" style="float: right;margin-right: 10%;"><span>reject</span></li>
		</ul>
  		<div class="content_init" style="width: 80%;">
  			<div class="active">
       <p style="text-align: center;margin-top: 15%">Please accept the applicants if the DU number is correct!</p>   
        </div>
	  		<div class="applicant" style="display: none;margin-top: 20%;">
	  			      <div style="overflow-x:auto;">
                  <table>
                    <tr>
                      <th>Name</th>
                      <th>Gender</th>
                      <th>Phone Number</th>
                      <th>Email</th>
                      <th>College</th>
                      <th>DU Reference number</th>
                      <th>Accepted</th>     
                    </tr>
                    <tr>
                      <td>Jill</td> 
                      <td>Smith</td>
                      <td>50</td>
                      <td>50</td>
                      <td>50</td>
                      <td>50</td>
                      <td>50</td>
                      </tr>
                    
                  </table>
                </div>

	  			</div>
	  		</div>
  			<div class="accept" style="display: none;margin-top: 20%;">
              <p>These are the accpted applicants</p>
              <div style="overflow-x:auto;">
                  <table>
                    <tr>
                      <th>Name</th>
                      <th>Gender</th>
                      <th>Phone Number</th>
                      <th>Email</th>
                      <th>College</th>
                      <th>DU Reference number</th>
                      <th>Accepted</th>     
                    </tr>
                    <tr>
                      <td>Jill</td> 
                      <td>Smith</td>
                      <td>50</td>
                      <td>50</td>
                      <td>50</td>
                      <td>50</td>
                      <td>50</td>
                      </tr>
                    
                  </table>
                </div>   
        </div>
  			<div class="reject" style="display: none;margin-top: 20%;">
              <p>These are the rejected applicants</p>
              <div style="overflow-x:auto;">
                  <table>
                    <tr>
                      <th>Name</th>
                      <th>Gender</th>
                      <th>Phone Number</th>
                      <th>Email</th>
                      <th>College</th>
                      <th>DU Reference number</th>
                      <th>Accepted</th>     
                    </tr>
                    <tr>
                      <td>Jill</td> 
                      <td>Smith</td>
                      <td>50</td>
                      <td>50</td>
                      <td>50</td>
                      <td>50</td>
                      <td>50</td>
                      </tr>
                    
                  </table>
                </div>
        </div>
  		</div>
  	</div>
  </div>
	<script type="text/javascript">
  $(window).on('load',function(){
    var clicked = getUrlParameter('clicked');
    $(clicked).trigger('click');
  });
</script>
	
</body>
</html>
















