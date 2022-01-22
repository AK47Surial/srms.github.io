<?php
	$email = $_POST['email'];
	$password = $_POST['password'];
	$con = mysqli_connect('localhost', 'root','','srms',3306);
	if(!$con)
	{
		$msg = "Connection Error.....";
		header("Location:index.php?in_msg=$msg");
	}
	if(isset($_POST['email']))
	{
		$q = "select * from tbl_employee where email='".$email."' and password='".$password."'";
		$res = mysqli_query($con, $q);
		if($res==1)
		{
			$num = mysqli_num_rows($res);
			if($num>0)
			{
				$msg = "Login Successful..";
				header("Location:employee_dashboard.php?in_msg=$msg");
			}
			else
			{
				$msg = "Email or Password is incorrect...";
				header("Location:employee_login.php?in_msg=$msg");
			}
		}
		else
		{
			$msg = "Email or Password is incorrect...";
			header("Location:employee_login.php?in_msg=$msg");
		}
	}
	else
	{
		$msg = "Enter Email or Password";
		header("Location:employee_login.php?in_msg=$msg");
	}
?>