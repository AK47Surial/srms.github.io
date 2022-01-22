<?php
	$enroll = $_POST['enroll'];
	$dob = $_POST['dob'];
	$con = mysqli_connect('localhost', 'root','','srms',3306);
	if(!$con)
	{
		$msg = "Connection Error.....";
		header("Location:student_login.php?in_msg=$msg");
	}
	if(isset($_POST['enroll']))
	{
		$q = "select * from tbl_student where enroll_id='".$enroll."' and dob='".$dob."'";
		$res = mysqli_query($con, $q);
		if($res==1)
		{
			$num = mysqli_num_rows($res);
			if($num>0)
			{
				$msg = "Login Successful..";
				header("Location:student_dashboard.php?in_msg=$msg&enroll=$enroll&dob=$dob");
			}
			else
			{
				$msg = "Enrollment No. or DOB is incorrect...";
				header("Location:student_login.php?in_msg=$msg");
			}
		}
		else
		{
			$msg = "Enrollment No. or DOB is incorrect...";
			header("Location:student_login.php?in_msg=$msg");
		}
	}
	else
	{
		$msg = "Enter Enrollment No. or DOB";
		header("Location:student_login.php?in_msg=$msg");
	}
?>