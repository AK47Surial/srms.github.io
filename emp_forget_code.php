<?php
	$email = $_POST['email'];
	$new = $_POST['new'];
	$confirm = $_POST['confirm'];
	$con = mysqli_connect('localhost','root','','srms',3306);
	if(!$con)
	{
		$msg = "Connection Error...";
		header("Location:emp_forget.php?msg=$msg");
	}
	else
	{
		$sel = "select * from tbl_employee where email='".$email."'";
		$res = mysqli_query($con, $sel);
		if(mysqli_num_rows($res)>0)
		{
			if($new==$confirm)
			{
				$up = "update tbl_employee set password='".$confirm."' where email='".$email."'";
				$r = mysqli_query($con, $up);
				if($r==true)
				{
					$msg = "Password Successfully Updated...";
					header("Location:employee_login.php?msg=$msg");
				}
				else
				{
					$msg = "Password doesn't updated...";
					header("Location:emp_forget.php?msg=$msg");
				}
			}
			else
			{
				$msg = "New & Confirm Password is not match..";
				header("Location:emp_forget.php?msg=$msg");
			}
		}
		else
		{
			$msg = "Email id not found...";
			header("Location:emp_forget.php?msg=$msg");
		}
			
	}
?>