<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>CodePen - Random Login Form</title>
  <?php 
//session_start(); 
//$p=$_POST["username"];
//$q=$_POST['rollno'];


include("connect.php");
while(1){

$f=rand($_SESSION['b'],$_SESSION['b']+10);
//$f=5;
$check="SELECT * from participant_info WHERE `question_no` = '$f'";
		$check2=mysqli_query($g,$check);
		$check3=mysqli_fetch_array($check2);
		if($check3['question_no']!=$f)
		{
		break;
		}
}
echo "\n";
echo $f;
$_SESSION['l']=$f;
$_SESSION['a']+=1;
//$i=mysqli_connect($_SESSION['hostname'],$_SESSION['user_name']);
//$sql="insert into login values('$p','$q')";
//mysqli_query($g,$sql);
?>

    <style>
@import url(http://fonts.googleapis.com/css?family=Exo:100,200,400);
@import url(http://fonts.googleapis.com/css?family=Source+Sans+Pro:700,400,300);

body{
	margin: 0;
	padding: 0;
	background: #fff;

	color: #fff;
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
	background-image: url("./images/abc.jpg");
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
	left: calc(50% - 300px);
	z-index: 2;
}

.header div{
	float: left;
	color: #000000;
	font-family: 'Exo', sans-serif;
	font-size: 100px;
	font-weight: 250;
}

.header div span{
	color: #5379fa !important;
}

.login{
	position: absolute;
	top: calc(50% - 150px);
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

.login input[type=button]{
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
.sr
{
 position:absolute;
 left:100px;
 top:100px;
}


::-webkit-input-placeholder { 
    color: red; text-overflow: ellipsis; 
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
		<div class="sr"><?php echo $_SESSION['score']; ?></div>

<center><h1><img src="images/10375491_308382106006582_1434053033138774738_n.jpg" /></h1>
<!--<h1><marquee behavior="alternate">OPENGEEST PRESENTS ALGORITHM</marquee></h1> -->
</center><br><br>
<form name="f1" action="handle.php" method="post">
<center>
<p><?php echo "Question no :".$_SESSION['qn']; ?></p><br>
<br>
<img src='<?php echo "./images/".$f.".jpg" ?>' >
<br>
<input type="radio" name="sol" value="A">A<br>
<input type="radio" name="sol" value="B">B<br>
<input type="radio" name="sol" value="C">C<br>
<input type="radio" name="sol" value="D">D<br>
<br><br>
<input type="submit" name="next" value="Next">&nbsp;&nbsp;
<input type="submit" name="Submit" value="Submits"><br>
</center>
</form>
				
		</div>
		</center>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

</body>

</html>
