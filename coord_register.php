<!DOCTYPE html>
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style type="text/css">
    BODY{
  font-family: Trebuchet MS;
}

@borderColor: #e0e0e0;

.tabrow {
  text-align: center;
  list-style: none;
  margin: 100px 0 20px;
  padding: 0;
  line-height: 24px;
  overflow: hidden;
  font-size: 13px;
  position: relative;
}
.tabrow li {
  border: 1px solid @borderColor;
  border-left: none;
  background: #f7f7f7;
  display: inline-block;
  position: relative;
  z-index: 0;
  border-top-left-radius: 6px;
  border-top-right-radius: 6px;
  margin: 0 -5px;
  padding: 3px 20px;
  cursor: pointer;
  color: #85b2d4;

}
.tabrow li span:before{
  content: " ";
  position: absolute;
  left: -3px;
  top: 3px;
  bottom: 2px;
  width: 10px;
  transform: rotate(14deg);
  border-left: 1px solid @borderColor;
  background: #f7f7f7;
}
.tabrow li span:after{
  content: " ";
  position: absolute;
  right: -5px;
  top: 3px;
  bottom: 2px;
  width: 10px;
  transform: rotate(-14deg);
  border-right: 1px solid @borderColor;
  background: #f7f7f7;
}
.tabrow li.selected {
  background: #FFF;
  color: #333;
  z-index: 2;
  border-bottom-color: #FFF;
  vertical-align: bottom;
  padding-top: 7px;
  font-weight: bold;
  cursor: default;
}
.tabrow:before {
  position: absolute;
  content: " ";
  width: 100%;
  bottom: 0;
  left: 0;
  border-bottom: 1px solid @borderColor;
  z-index: 1;
}
.tabrow li:before,
.tabrow li:after {
  border: 1px solid @borderColor;
  position: absolute;
  bottom: -1px;
  width: 5px;
  height: 5px;
  content: " ";
}
.tabrow li:before {
  left: -21px;
  border-bottom-right-radius: 6px;
  border-width: 0 1px 1px 0;
  box-shadow: 10px 0px 0 #f7f7f7;
  padding-right: 10px;
}
.tabrow li:after {
  right: -23px;
  border-bottom-left-radius: 6px;
  border-width: 0 0 1px 1px;
  box-shadow: -10px 2px 0 #f7f7f7;
  padding-left: 10px;
}
.tabrow li.selected:before {
  box-shadow: 10px 2px 0 #FFF;
}
.tabrow li.selected:after {
  box-shadow: -10px 2px 0 #FFF;
}
.tabrow li.selected SPAN:before,
.tabrow li.selected SPAN:after{
  background: white;
}
.data div{
    height: 0; 
    transition: height 0.5s linear;
    overflow: hidden;
}
.active{
    height: auto !important;
}



        


@import url(https://fonts.googleapis.com/css?family=Open+Sans);
.btn { display: inline-block; *display: inline; *zoom: 1; padding: 4px 10px 4px; margin-bottom: 0; font-size: 13px; line-height: 18px; color: #333333; text-align: center;text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75); vertical-align: middle; background-color: #f5f5f5; background-image: -moz-linear-gradient(top, #ffffff, #e6e6e6); background-image: -ms-linear-gradient(top, #ffffff, #e6e6e6); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#ffffff), to(#e6e6e6)); background-image: -webkit-linear-gradient(top, #ffffff, #e6e6e6); background-image: -o-linear-gradient(top, #ffffff, #e6e6e6); background-image: linear-gradient(top, #ffffff, #e6e6e6); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#ffffff, endColorstr=#e6e6e6, GradientType=0); border-color: #e6e6e6 #e6e6e6 #e6e6e6; border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25); border: 1px solid #e6e6e6; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); -moz-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05); cursor: pointer; *margin-left: .3em; }
.btn:hover, .btn:active, .btn.active, .btn.disabled, .btn[disabled] { background-color: #e6e6e6; }
.btn-large { padding: 9px 14px; font-size: 15px; line-height: normal; -webkit-border-radius: 5px; -moz-border-radius: 5px; border-radius: 5px; }
.btn:hover { color: #333333; text-decoration: none; background-color: #e6e6e6; background-position: 0 -15px; -webkit-transition: background-position 0.1s linear; -moz-transition: background-position 0.1s linear; -ms-transition: background-position 0.1s linear; -o-transition: background-position 0.1s linear; transition: background-position 0.1s linear; }
.btn-primary, .btn-primary:hover { text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25); color: #ffffff; }
.btn-primary.active { color: rgba(255, 255, 255, 0.75); }
.btn-primary { background-color: #4a77d4; background-image: -moz-linear-gradient(top, #6eb6de, #4a77d4); background-image: -ms-linear-gradient(top, #6eb6de, #4a77d4); background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#6eb6de), to(#4a77d4)); background-image: -webkit-linear-gradient(top, #6eb6de, #4a77d4); background-image: -o-linear-gradient(top, #6eb6de, #4a77d4); background-image: linear-gradient(top, #6eb6de, #4a77d4); background-repeat: repeat-x; filter: progid:dximagetransform.microsoft.gradient(startColorstr=#6eb6de, endColorstr=#4a77d4, GradientType=0);  border: 1px solid #3762bc; text-shadow: 1px 1px 1px rgba(0,0,0,0.4); box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.5); }
.btn-primary:hover, .btn-primary:active, .btn-primary.active, .btn-primary.disabled, .btn-primary[disabled] { filter: none; background-color: #4a77d4; }
.btn-block { width: 100%; display:block; }

* { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; -ms-box-sizing:border-box; -o-box-sizing:border-box; box-sizing:border-box; }

html { width: 100%; height:100%;}

body { 
    width: 100%;
    height:100%;
    font-family: 'Open Sans', sans-serif;
    background: #092756;
    background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);
    background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
    background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
    background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
    background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
}
.login { 
    position: absolute;
    top: 25%;
    left: 50%;
    margin: -150px 0 0 -150px;
    width:300px;
    height:300px;
}
.login h1 { color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center; }

input { 
    width: 100%; 
    margin-bottom: 10px; 
    background: rgba(0,0,0,0.3);
    border: none;
    outline: none;
    padding: 10px;
    font-size: 13px;
    color: #fff;
    text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
    border: 1px solid rgba(0,0,0,0.3);
    border-radius: 4px;
    box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
    -webkit-transition: box-shadow .5s ease;
    -moz-transition: box-shadow .5s ease;
    -o-transition: box-shadow .5s ease;
    -ms-transition: box-shadow .5s ease;
    transition: box-shadow .5s ease;
}
input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }

    </style>
    <title>Login</title>
    <script type="text/javascript">
        $(document).ready(function(){
            console.log(1);
            $(".tabrow li").on("click", function(){
                $("LI").removeClass("selected");
                $(this).toggleClass("selected", true);
            });
        });
        function showdata(event){
            $('.active').removeClass("active");
            $(event).addClass("active");
        }
    </script>
</head>
<body>
    <div class="login">
    <h1>Login</h1>
    <form method="post">
        <input type="text" name="user" placeholder="Username" required="required" />
        <input type="password" name="pwd" placeholder="Password" required="required" />
        <input type="password" name="cpwd" placeholder="Confirm Password" required="required" />
            <ul class="tabrow">
                <li style="display: none;" class="selected"></li>
                <li onclick="showdata('.accom')"><span>Accomdations</span></li>
                <li onclick="showdata('.events')"><span>Events</span></li>
                <li onclick="showdata('.workshops')"><span>Workshops</span></li>
                
            </ul>
            <div class="data">
                <div class="active">click here to add events to your access list</div>
                <div class="accom">
                        <input type="radio" name="accomp" value="Access">Accomdation Portal<br>
                </div>
                <div class="events">
                    <input type="checkbox" name="Event1" value="Event1">Event 1<br>
                    <input type="checkbox" name="Event2" value="Event2">Event 2<br>
                    <input type="checkbox" name="Event3" value="Event3">Event 3<br>
                    <input type="checkbox" name="Event4" value="Event4">Event 4<br>
                    <input type="checkbox" name="Event5" value="Event5">Event 5<br>        
                </div>
                <div class="workshops">
                    <input type="checkbox" name="Workshop1" value="Workshop1">Workshop1<br>
                    <input type="checkbox" name="Workshop2" value="Workshop2">Workshop2<br>
                    <input type="checkbox" name="Workshop3" value="Workshop3">Workshop3<br>
                </div>
            </div>
        <button type="submit" class="btn btn-primary btn-block btn-large">Register</button>
    </form>
    
</div>
</body>
</html>