<?php
	$emailid=$_POST['emailid'];
	$server="localhost:3306";
	$dbname="web-dev";
	$username="root";
	$password="";
	$sFlag=0;
	$conn=mysqli_connect($server,$username,$password,$dbname);
	if(!$conn)
	{
		echo 'server connection failure';
		$sFlag=0;
	}
	else
	{
		echo 'Server connection authorized';
		$sFlag=1;
	}
	echo '<br/>';
	if($sFlag==1)
	{
		$sql="INSERT INTO subscription_form (email_id) VALUES ('".$emailid."')";
		$a=mysqli_query($conn,$sql);
		if($a)
		{
			echo "Data inserted successfully";
		}
		else
		{
			echo $conn->error;
		}
	}
?
