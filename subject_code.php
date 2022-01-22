<?php
	$branch = $_POST['branch'];
	$sem = $_POST['semester'];
	$name = $_POST['sub_name'];
	$e_max = $_POST['e_max'];
	$e_min = $_POST['e_min'];
	$practical = $_POST['practical'];
	$p_max = $_POST['p_max'];
	$p_min = $_POST['p_min'];
	$con = mysqli_connect('localhost','root','','srms',3306);
	if(!$con)
	{
		echo "Connection Error....";
	}
	else
	{
		$sel = "select * from tbl_subject where branch_name='".$branch."' and sub_name='".$name."' and semester='".$sem."'";
		$res = mysqli_query($con, $sel);
		if(mysqli_num_rows($res)>0)
		{
			$msg = "Subject Already Registered..";
			header("Location:subject_list.php?msg=$msg");
		}
		else
		{
			if($practical=="No")
			{
				$p_max = 0;
				$p_min = 0;
				$q = "insert into tbl_subject(branch_name,semester,sub_name,e_max,e_min,practical,p_max,p_min) values('".$branch."','".$sem."','".$name."','".$e_max."','".$e_min."','".$practical."','".$p_max."','".$p_min."')";
				$res = mysqli_query($con , $q);
				if($res==true)
				{
					$msg = "Subject Registered Successfully..";
					header("Location:subject_list.php?msg=$msg");
				}
				else
				{
					$msg = "Unable to Register.. Try Again!";
					header("Location:subject_list.php?msg=$msg");
				}
			}
			else
			{
				$q = "insert into tbl_subject(branch_name,semester,sub_name,e_max,e_min,practical,p_max,p_min) values('".$branch."','".$sem."','".$name."','".$e_max."','".$e_min."','".$practical."','".$p_max."','".$p_min."')";
				$res = mysqli_query($con , $q);
				if($res==true)
				{
					$msg =  "Subject Registered Successfully..";
					header("Location:subject_list.php?msg=$msg");
				}
				else
				{
					$msg = "Unable to Register.. Try Again!";
					header("Location:subject_list.php?msg=$msg");
				}	
			}
			
		}
	}
?>