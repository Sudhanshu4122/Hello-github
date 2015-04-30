<?php
include("connect.php");
$p=$_POST['username'];
$q=$_POST['rollno'];
$r=$_POST['clgname'];
$s=$_POST['phoneno'];
$t=$_POST['txtemail'];

$sql1="select * from login where `rollno`='$q'";
$res=mysqli_query($g,$sql1);
if(mysqli_num_rows($res)>0)
{
header('Location: algorithmevent.php');
}
else
{
$_SESSION['rollno']=$q;
$sql="insert into login(`username`,`rollno`,`CollegeName`,`phoneno`,`Email`) values('$p','$q','$r','$s','$t')";
mysqli_query($g,$sql);
header('Location: algorithmevent.php');
}
?>
