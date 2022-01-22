<?php
	$email = $_POST['email'];
	$old_psw = $_POST['old_psw'];
	$new_psw = $_POST['new_psw'];
	$con_psw = $_POST['con_psw'];
	$check = $_POST['check'];
	$con = mysqli_connect('localhost','root','','srms',3306);
	if(!$con)
	{
		$msg = "Connection Error.....";
		header("Location:emp_cpw.php?msg=$msg");
	}
	else
	{
		if($check=="on")
		{
			if(isset($_POST['email']))
			{
				$sel = "select * from tbl_employee where email='".$email."' and password='".$old_psw."'";
				$res = mysqli_query($con,$sel);
				$num = mysqli_num_rows($res);
				if($num>0)
				{
					if($old_psw==$new_psw || $old_psw==$con_psw)
					{
						$msg = "Old and New Password is matching, Please Change the password ";
						header("Location:emp_cpw.php?msg=$msg");
					}
					else
					{
						if($new_psw==$con_psw)
						{
							$change = "update tbl_employee set password='".$con_psw."'";
							$up = mysqli_query($con,$change);
							if($up==true)
							{
								$msg = "Password Change Successfully...";
								header("Location:emp_cpw.php?msg=$msg");
							}
						}
						else
						{
							$msg = "New and Confirm Password doesn't match...";
							header("Location:emp_cpw.php?msg=$msg");
						}
					}
				}
				else
				{
					$msg = "You are not registered, Contact to admin ....";
					header("Location:emp_cpw.php?msg=$msg");
				}
			}
			else
			{
				$msg = "Please Enter Correct Email Address... ";
				header("Location:emp_cpw.php?msg=$msg");
			}
		}
		else
		{
			$msg = "Please! click on checkbox...";
			header("Location:emp_cpw.php?msg=$msg");
		}
	}
?>