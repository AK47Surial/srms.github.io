<?php
	$code = $_POST['code'];
	$name = $_POST['name'];
	$about = $_POST['about'];
	$con = mysqli_connect('localhost','root','','srms',3306);
	if(!$con)
	{
		echo "Connection Error .......";
	}
	else
	{
		$sel = "select * from tbl_branch where branch_code='".$code."' or branch_name='".$name."'";
		$res = mysqli_query($con, $sel);
		if(mysqli_num_rows($res)>0)
		{
			echo "Branch already registered ";
		}
		else
		{
			$q = "insert into tbl_branch(branch_code, branch_name, about) values('".$code."','".$name."','".$about."')";
			$res = mysqli_query($con, $q);
			if($res==true)
			{
				echo "Branch Registered Seccessfully ..... ";
			}
			else
			{
				echo "Unable to register branch.......";
			}
		}
	}
?>