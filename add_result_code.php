<?php
	$in = $_POST['clg_name'];
	$branch = $_POST['branch'];
	$std_name = $_POST['std_name'];
	$roll_no = $_POST['roll_no'];
	$enroll_no = $_POST['enroll_no'];
	$con = mysqli_connect('localhost','root','','srms',3306);
	if(!$con)
	{
		$msg = "Connetion Error ....";
		header("Location:add_result.php?msg=$msg");
	}
	else
	{
		$s = "select * from tbl_marksheet where enroll_no='".$enroll_no."'";
		$sr = mysqli_query($con, $s);
		$num = mysqli_num_rows($sr);
		if($num>0)
		{
			echo "<script> alert('Already Exists....'); </script>";
			header("Location:add_result.php");
		}
		else
		{
			$q = "insert into tbl_marksheet(enroll_no,clg_name,branch,name,roll_no) values('".$enroll_no."','".$in."','".$branch."','".$std_name."','".$roll_no."')";
			$r = mysqli_query($con, $q);
			for($i=0;$i<$_POST['count1'];$i++)
			{
				$p_code = $_POST['p_code'][$i];
				$sub_name = $_POST['sub_name'][$i];
				$e_max = $_POST['e_max'][$i];
				$e_min = $_POST['e_min'][$i];
				$obt_mark = $_POST['obt_mark'][$i];
				$p = "No";
				$query = "insert into tbl_marks(enroll_no,roll_no,practical,paper_code,paper_name,max_marks,min_marks,obt_marks) values('".$enroll_no."','".$roll_no."','".$p."','".$p_code."','".$sub_name."','".$e_max."','".$e_min."','".$obt_mark."')";
				mysqli_query($con, $query);
			}
			for($i=0;$i<$_POST['count2'];$i++)
			{
				$p_code = $_POST['pp_code'][$i];
				$sub_name = $_POST['s_name'][$i];
				$e_max = $_POST['pp_max'][$i];
				$e_min = $_POST['pp_min'][$i];
				$obt_mark = $_POST['pp_obt_mark'][$i];
				$pp = "Yes";
				$query = "insert into tbl_marks(enroll_no,roll_no,practical,paper_code,paper_name,max_marks,min_marks,obt_marks) values('".$enroll_no."','".$roll_no."','".$pp."','".$p_code."','".$sub_name."','".$e_max."','".$e_min."','".$obt_mark."')";
				mysqli_query($con, $query);
			}
			$msg = "Add Result Successfully....";
			header("Location:add_result.php?msg=$msg");
		}
	}
?>