<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>ALGO-RTHYM</title>
 
  <?php
include("connect.php");
//session_start();
$_SESSION['qn']=1;
$_SESSION['score']=0;
$_SESSION['a']=1;
$_SESSION['b']=1;
?>

    <style>
@import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

body{
	margin: 0;
	padding: 0;
	background: #fff;

	color: #FF0000;
	font-family: Arial;
	font-size: 12px;
}

.body{
	position: absolute;
	top: -120px;
	left: 60px;
	
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background-image: url("./images/24.png");
	background-size: cover;
	-webkit-filter: blur(-40px);
	z-index: 0;
}

.grad{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0,0,0,0)), color-stop(100%,rgba(0,0,0,0.65))); /* Chrome,Safari4+ */
	z-index: 1;
	opacity: 0.7;
}

.header{
	position: absolute;
	top: calc(50% - 275px);
	left: calc(50% - 500px);
	z-index: 2;
}

.header div{
	float: left;
	color: #FF0000;
	font-family: 'Exo', sans-serif;
	font-size: 80px;
	font-weight: 250;
}

.header div span{
	color: #5379fa !important;
}

.login{
	position: absolute;
	top: calc(50% - 50px);
	left: calc(50% - 150px);
	color: #FF0000
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 2px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #FF0000
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=number]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 2px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #FF0000
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 4px;
	margin-top: 10px;
}

.login input[type=submit]{
	width: 260px;
	height: 35px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

.login input[type=submit]:hover{
	opacity: 0.8;
}

.login input[type=submit]:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=number]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}

.login input[type=submit]:focus{
	outline: none;
}
.login input-placeholder{
color:#FF0000;
}

::-webkit-input-placeholder { 
    color: #FF0000 ; text-overflow: ellipsis; 
}
:-moz-placeholder { 
    color: #acacac !important; text-overflow: ellipsis; 
}
::-moz-placeholder { 
    color: #acacac !important; text-overflow: ellipsis; 
} /* for the future */
:-ms-input-placeholder { 
    color: #acacac !important; text-overflow: ellipsis; 
}

</style>

    <script src="js/prefixfree.min.js"></script>

</head>

<body>


  <div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>ALGO-RYTHM<span></span></div>
		</div>
		<br>
		<center>
		<div class="login">
				<div><form name="f1" action="login.php" method="post">
<input type="text" name="username" placeholder="Enter username" required="required"><br><br>
<input type="number" name="rollno" placeholder="Enter rollno" required="required"><br><br>
<input type="text" name="clgname" placeholder="Enter College Name" required="required"><br><br>
<input type="number" name="phoneno" placeholder="Enter mobile number" required="required"><br><br>
<input type="text" name="txtemail" placeholder="Enter email id" required="required"><br><br>
<input type="submit" name="enter" value="Enter">
</form></div>
		</div>
		</center>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

</body>

</html>
