<?php
session_start();
$hostname='localhost';
$user_name='root';
$password='';
$db='algorythm';
$g=mysqli_connect($hostname,$user_name);
//$_SESSION['i']=$g;
if($g)
{
echo("connected");
}
else
{
die(mysql_error());
}
$h=mysqli_select_db($g,$db);
echo $h;
//header("Location: index.php"); 
//die(mysql_error());
?>
