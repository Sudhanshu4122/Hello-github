
<?php
include("connect.php");
	//session_start();
	//$c=array("A","B","C","D","A","B","C","D","A","B");
	//$e=array();
	//for($d=0;$d<10;$d++){
	//	array_push($e,0);
	//}
	$ff=$_SESSION['l'];
	//if($e[$ff-1]=1)
	//{
	//header('Location: algorithmevent.php');
	//}
	$q=$_SESSION['rollno'];
	//$_SESSION['a']+=1;
	if($_SESSION['a']==10)
	{
		$_SESSION['b']+=10;
	}
	if(isset($_POST['next']))
	{
		//$_SESSION['qn']=$_SESSION['f'];
		$sql4="insert into participant_info(`rollno`,`question_no`) values('$q','$ff')";
		mysqli_query($g,$sql4);
		header("Location: algorithmevent.php");  
	}
	
echo "1635";
	if(isset($_POST['Submit']))
	{
	
	
  		echo "yo";
//		$ff = time()%10;
		$b=$_POST['sol'];
		//$p=$_POST['username'];
		
		//$ff=$_SESSION['l'];
		
		$sql="insert into participant_info(`rollno`,`question_no`,`answer`) values('$q','$ff','$b')";
		mysqli_query($g,$sql);
		//$ff=5;
		echo "ff=".$ff;
		echo "quest".$ff;
		$match="SELECT * from solution WHERE `question_no` = '$ff'";
		$match2=mysqli_query($g,$match);
		if((mysqli_num_rows($match2))==0)
{
echo "sushjhsfdjhdafhgdadgmjdhvhsdj";
//header('Location: algt.php');
}
		echo "yar";
		$match3=mysqli_fetch_array($match2);
		echo "mm".$match3['answer']."ccc";
		//$b='C';
				echo $b;
				//$match3['answer']='C';
		if($match3['answer']==$b)
		{
		echo "nags";
		echo $b."abc";
			$xt=$_SESSION['score'];
			$xt+=10;
			$_SESSION['score']=$xt;
			//$_SESSION['qn']=$_SESSION['f'];
			$update="UPDATE login SET `score`='$xt' WHERE `rollno`='$q'";
			mysqli_query($g,$update);
			echo "1113";
			$_SESSION['qn']+=1;
			header("Location: algorithmevent.php");
		}
		else
		{
		$xt1=$_SESSION['score'];
			$xt1-=3;
			$_SESSION['score']=$xt1;
			$update1="UPDATE login SET `score`='$xt1' WHERE `rollno`='$q'";
			mysqli_query($g,$update1);
		echo "jzxgcjzx".$b;
			$_SESSION['qn']+=1;
			header("Location: algorithmevent.php");
		}
		}
?>
