<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ALGORITHM</title>

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
</head>

<style type="text/css">
body
{
background-image:url("./images/hk.jpg");
background-size:1024 768;
}
.sr
{
 position:absolute;
 left:100px;
 top:100px;
}

</style>

<body >
<div class="sr"><?php echo $_SESSION['score']; ?></div>

<center><h1><img src="images/10375491_308382106006582_1434053033138774738_n.jpg" /></h1>
<h1><marquee behavior="alternate">OPENGEEST PRESENTS ALGORITHM</marquee></h1></center><br><br>
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

</body>
</html>

