<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">

<script type="text/javascript" src="jquery-3.4.1.min.js">
</script>
<title>Home</title>
</head>

<body>
<div class="wrapper">
<h4  style="z-index:20">E<br>N<br>Q<br>U<br>I<br>R<br>Y</h4>
</div>

<div class="container" id="myDIV">
<div class="row" style=" padding:25px; width:450px; box-shadow:0px 0px 30px black; z-index:20; background-color:white;position: fixed; top:18%; right:2% " >
 
 <div class="center-block">
 <p class="close"   id="cclose" > 
     <span aria-hidden="true">×</span>
 </p>
<h2 style="font-size: 25px; font-family: 'Book Antiqua'; color:#003399; text-shadow:0px 0px 2px black"><b>GET IN TOUCH</b></h2>
<form method="post">
<input type="text" name="fname" class="form-control" placeholder="Enter Your Name" required /><br />
<input type="text" name="bname"  class="form-control" placeholder="Enter Business Name" required/><br />
<input type="number" name="mnum"  class="form-control" placeholder="Enter Contact No" required/><br />
<input type="text" name="email"  class="form-control" placeholder="Enter Email-Id" required/><br />
<textarea rows="7" cols="40" name="msg"  class="form-control" placeholder="massage here" required />
</textarea><br />
<input type="submit" class="form-control btn-success"  name="submit" />
</form>

</div></div></div>



<script>

$(document).ready(function(){
  $("h4").click(function(){
  $("#myDIV").show();
  
 $("#cclose").click(function(){
  $("#myDIV").hide();
   });
  
  });
  
  });
</script> 

<style>
#myDIV{ padding:5px;  display:none;}
div.slide-left img1 {
  animation: slide-left 3s;
}

@keyframes slide-left {
  from {
    margin-left: 100%;
	
    width: 100%; 
  }

  to {
    margin-left: 0%;
    width: 100%;
  }
}


button{height:70px; width:150px; border: solid #0099FF;
color:white;background-color: #0099FF; margin-left:5px;margin-top:-80px; font-family: "Comic Sans MS"}
button:hover{background-color: #003366; border: solid white; border-radius:10px;color:white; font-weight:bold}
.logo{margin-right:550px; }
 .img1
        {
            float: left;
            margin: 0px;
            padding: 0px;
            position: relative;
        }
		
		
		h4{ border: solid #0099FF;background-color: #0099FF; color:white; position:fixed; top:50%; right:0%;padding:5px; text-align:center; font-family:'Book Antiqua';cursor:pointer; font-weight:bold; width:40px}
h4:hover{background-color: #003366; border: solid #003366;}
.logo{top:1px; position:fixed; left:70px; z-index:5;}

textarea{width:400px; box-shadow:0px 0px 5px gray; text-indent:10px; border:none;border-radius:10px}
#myDIV{display:none}
</style>
<center>
<img src="img/logo (2).png"  height="230" width="500"/>
</center>
<div style="background-color:; padding:5px; width:50px; position: fixed; left:0px; top:50%; z-index:20">
<img src="img/facebook5.png" height="40" width="40" /><br />
<img src="img/twitter4.png" height="40" width="40" /><br />
<img src="img/insta.png" height="40" width="40" /><br />
</div>

<div  style="position:sticky;top:30px; background-color: #0099FF; height:80px; color:white; padding:4px;  z-index:2">
<center>

<nav class="navbar navbar-expand-md "  >
 <img src="img/logo 1.png" class="logo" height="150" width="300" style="margin-top:-44px; position:sticky; left:100px"/>
  <ul class=" col-xs-6 navbar-nav mx-auto" style="margin-top:20px">
    <li class="nav-item"><a href="homepage.php">
  <button >HOME <span class="glyphicon glyphicon-home"></span></button></a></li>
    <li class="nav-item"><a href="aboutus.php"><button>ABOUT US <span class="glyphicon glyphicon-user"></span></button></a></li>
    <li class="nav-item"><a href="ourservices.php"><button>OUR SERVICES <span class="glyphicon glyphicon-globe"></span></button></a></li>
    <li class="nav-item"><a href="contsctus.php"><button>CONTACT US <span class="glyphicon glyphicon-phone"></span></button></a></li>
	

  </ul>
  
</center>
</div>


<div  class="slide-left">
<img class="img1" src="img/164674.jpg" height="700px"  style=" width:100%; ">
<img class="img1" src="img/Banner-1.jpg"  style="height:700px; width:100%;">
<img  class="img1" src="img/mobile-app-development.jpg"  style="height:700px; width:100%; ">
</div>
</center>

</div>
<style>	
.img1{ display: block}
</style>


<script>
var myindex=0;
slide();
function slide(){
var i;
var x=document.getElementsByClassName("img1");
for(i=0;i< x.length;i++)
{
x[i].style.display="none";
}
myindex++;
if(myindex >x.length)
{
myindex=1;
}


x[myindex-1].style.display="block";
setTimeout(slide,3000);

 
}

</script>



<style>

.img2{border-radius:130px;box-shadow:0px 0px 10px 0px gray; height:250px; width:250px }
.img2:hover{ cursor:pointer; border:none;box-shadow:0px 0px 10px 0px white}
.col-md-6:hover{box-shadow:0px 0px 10px gray ; padding:15px; border-radius:10px}
</style>

<h1 style=" color:#003399;  font-weight:bold" align="center"><br> &nbsp;<br />------------- OUR SERVICES -------------</h1>
<br /><br />



<div class="container">
	<div class="row"  >
		<div class="col-md-6" style="  padding:15px">
<center>
<img class="img2" src="img/copy.jpg"/>

<h1 style="color:#003399; text-shadow:0px 0px 2px black;font-family: 'Book Antiqua'">Web Development</h1></center>
<p align="justify" style=" font-family: 'Calibri Light'; font-size:16px">Web development is the work involved in developing a web site for the Internet (World Wide Web) or an intranet (a private network).[1] Web development can range from developing a simple single static page of plain text to complex web-based internet applications (web apps), electronic businesses, and social network services.</p>

</div>

<div class="col-md-6" style=" padding:15px" >
		
<center><img class="img2" src="img/app.jpg" />
<h1 style="color:#003399; text-shadow:0px 0px 2px black;font-family: 'Book Antiqua'">App Development</h1></center>
<p align="justify" style=" font-family: 'Calibri Light'; font-size:16px">
Mobile app development is the act or process by which a mobile app is developed for mobile devices, such as personal digital assistants, enterprise digital assistants or mobile phones. These applications can be pre-installed on phones during manufacturing platforms, or delivered as web applications using server-side or client-side processing.
</div></div></div>
<br /><br />			
<div class="container" >
	<div class="row"  >		
			
			<div class="col-md-6"  style=" padding:15px" >
			<center>		
<img class="img2" src="img/csd.png"/>
<h1 style="color:#003399; text-shadow:0px 0px 2px black;font-family: 'Book Antiqua'">Custom software development</h1></center>
<p align="justify" style=" font-family: 'Calibri Light'; font-size:16px">
Custom software development is the process of designing, creating, deploying and maintaining software for a specific set of users, functions or organizations. In contrast to commercial off-the-shelf software (COTS), custom software development aims at a narrowly defined set of requirements. COTS targets a broad set of requirements. 

</p>
</div>
	
		<div class="col-md-6" style="  padding:15px">
<center><img class="img2" src="img/e-commerse.jpg"/><h1 style="color:#003399; text-shadow:0px 0px 2px black;font-family: 'Book Antiqua'">E-Commerce Website</h1>
</center>


<p align="justify" style=" font-family: 'Calibri Light'; font-size:16px">Back-end development is responsible for controlling the server data and requests. Also, back-end takes care of storing the data which front-end need it to work correctly. Back end and front end’s works are dependent in a way the back-end implements the front-end action. The used languages in the back-end are Ruby, Python, and PHP.</p>
</div></div></div><br /><br />


<div class="container" >


	<div class="row"  >
		<div class="col-md-6" style="  padding:15px">
<center>		
<img class="img2" src="img/DIGITAL-MARKETING.jpg" />
<h1 style="color:#003399; text-shadow:0px 0px 2px black;font-family: 'Book Antiqua'">Digital Marketing</h1></center>
<p align="justify" style=" font-family: 'Calibri Light'; font-size:16px">
Digital marketing is the marketing of products or services using digital technologies, mainly on the Internet, but also including mobile phones, display advertising,and any other digital medium.[1] Digital marketing channels are systems based on the internet that can create, accelerate, and transmit product value from producer to the terminal consumer by digital networks.
</p></div>

		<div class="col-md-6" style="  padding:15px">
<center>		
<img class="img2" src="img/logodesign-virtuooza.png">

<h1 style="color:#003399; text-shadow:0px 0px 2px black;font-family: 'Book Antiqua'">Logo Design</h1></center>
<p align="justify" style=" font-family: 'Calibri Light'; font-size:16px">
What is logo design? It sounds like the most basic of questions.
Everyone knows what logo design is. We see logos every day. They surround us.
I bet if you looked around you right now, you would see at least 5 logos. I can see the logo designs for; HMRC, EDF, Homepride, Disney, and Apple. And that’s just by raising my head from the computer.
</p></div></div></div><br /><br />

</p></p></p>
<!--footer-start--->
<div style="background-color: #333333;  font-family: 'Calibri Light'; color:white;  width:100%;  font-size:16px; padding:5px">
<br />
<div class="container" >


	<div class="row"  >
		<div class="col-md-3">
			<h1><b>About us</b></h1>
<p align="justify"><b>E-commerce website designing services as per the need of the client. Our dedicated and expert team of professionals with insurmountable knowledge will surely help you to live your dream and serve your purpose.</b>	</p>
		</div>
		<div class="col-md-1">
		</div>
		<div class="col-md-4" >
		
	 		<h1><b>Our Services</b></h1>
<b><li>Responsive Web-Design</li>
<li>Web Development</li>
<li>App Development</li>
<li>E-Commerse Solution</li>
<li>Logo-Desing</li>
<li>Digital Marketing</li>
<li>Custom Software Development</li></b>
			</div>
			
		
			
			<div class="col-md-4">
			<h1><b>Contact Us</b></h1>
<h4><b>Address :</b></h4>
<p>
Opp. Life line hospital,
<br />
2nd floor, N9, Plot. 13 M2 Road,Hudco,TV.Center
<br /> <b>Aurangabad</b>
<br />
<b>Email-Id :</b> info.itcircle@gmail.com
<br />

<b>Mobile No :</b><br />  
+91 9975059259
</p></div></div></div></div>

<div style="background-color: #0099FF;  font-family: ; color:white;  width:100%;  font-size:16px; ">
<br />
<div class="container" >


	<div class="row"  >
		<div class="col-md-4">
		<p>Email-Id: info.itcircle@gmail.com</p>
		</div>
		
		<div class="col-md-4" >
		
	 		<p><img src="img/logo 1.png" height="35" width="90"/><b> ©-2019</b></p>
			</div>
			
		
			
			<div class="col-md-4"  >
			
<p>
Contact-No: 9575-059-259
</p></div></div></div></div>

	
<!--footer-end-->
</body>
</html>
<?php
$connect=mysqli_connect('localhost','root','','it-circle');
if(isset($_POST['submit']))
{
$name=$_POST['fname'];
$bname=$_POST['bname'];
$contact=$_POST['mnum'];
$email=$_POST['email'];
$msg=$_POST['msg'];

$query=mysqli_query($connect," insert into enquiry values('$name','$bname','$contact','$email','$msg')");

if($query==true)
{
echo '<script>alert("msg send")</script>';
}
else{
echo '<script>alert("msg not send")</script>';
}

}
?>