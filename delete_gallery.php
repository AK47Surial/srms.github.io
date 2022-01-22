<?php
	$id = $_GET['delete'];
	$con = mysqli_connect('localhost','root','','srms',3306);
	if(!$con)
	{
		echo "Connection Error...";
	}
	else
	{
		$sel = "delete from tbl_gallery where id='".$id."'";
		$res = mysqli_query($con, $sel);
		if($res==true)
		{
			$row = mysqli_fetch_assoc($res);
			unlink("gallery_pic\'".$row['name']."'");
			$msg = "Successfully Deleted...";
			header("Location:gallery.php");
		}
		else
		{
			echo "Invalid file ";
		}
	}
?>