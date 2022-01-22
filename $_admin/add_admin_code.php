<?php
	$amit = 0;
	$name = $_POST['adm_name'];
	$email = $_POST['adm_email'];
	$password = $_POST['password'];
	$mobile = $_POST['adm_mobile'];
	$designation = $_POST['designation'];
	$name = $_POST['degree'];
	$d = "";
	foreach ($name as $degree){ 
		$d .= $degree." ";
	}
	$joining = $_POST['joining'];
	$gender = $_POST['gender'];
	$photo = $_FILES['file']['name'];
	$con = mysqli_connect('localhost','root','','srms',3306);
	if(!$con)
	{
		$adm_msg = "Connection Failed..";
		header("Location:add_admin.php?adm_msg=$adm_msg");
	}
	else
	{
		$s = "select * from tbl_admin where email='".$email."' or mobile='".$mobile."'";
		$result = mysqli_query($con,$s);
		$num = mysqli_num_rows($result);
		if($num>0)
		{	
			$adm_msg = "Admin Already Registered..";
			header("Location:add_admin.php?adm_msg=$adm_msg");
		}
		else
		{
			if(isset($_POST['adm_name']))
			{
				// file uploading 
				$target_dir = "admin_pic/";
				$target_file = $target_dir . basename($_FILES["file"]["name"]);
				$uploadOk = 1;
				$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
				// Check if image file is a actual image or fake image
				if(isset($_POST["submit"])) {
					$check = getimagesize($_FILES["file"]["tmp_name"]);
					if($check !== false) {
						echo "File is an image - " . $check["mime"] . ".";
						$uploadOk = 1;
					} else {
						$adm_msg =  "File is not an image.";
						$uploadOk = 0;
						header("Location:add_admin.php?adm_msg=$adm_msg");
					}
				}
				// Check if file already exists
				if (file_exists($target_file)) {
					$adm_msg =  "Sorry, file already exists.";
					$uploadOk = 0;
					header("Location:add_admin.php?adm_msg=$adm_msg");
				}
				// Check file size
				if ($_FILES["file"]["size"] > 500000) {
					$adm_msg = "Sorry, your file is too large.";
					$uploadOk = 0;
					header("Location:add_admin.php?adm_msg=$adm_msg");
				}
				// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
					$adm_msg = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
					$uploadOk = 0;
					header("Location:add_admin.php?adm_msg=$adm_msg");
				}
				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
					echo $adm_msg = "Sorry, your file was not uploaded.";
					header("Location:add_admin.php?adm_msg=$adm_msg");
				// if everything is ok, try to upload file
				} else {
					if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
						echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
						$amit = 1;
					} else {
						$adm_msg = "Sorry, there was an error uploading your file.";
						header("Location:add_admin.php?adm_msg=$adm_msg");
					}
				}
						
			// code of file uploading	
				
				

				if($amit==1)
				{
					$query = "insert into tbl_admin(name,email,password,mobile,designation,qualification,joining,gender,photo) values('".$name."','".$email."','".$password."','".$mobile."','".$designation."','".$d."','".$joining."','".$gender."','".$photo."')";
					$res = mysqli_query($con,$query);
					if($res==true)
					{
						$adm_msg = "Registration Successful";
						header("Location:add_admin.php?adm_msg=$adm_msg");
					}
					else
					{
						$adm_msg = "Unable to Register";
						header("Location:add_admin.php?adm_msg=$adm_msg");
					}
				}
				else
				{
					$adm_msg = "Image Already exists.....";
					header("Location:add_admin.php?adm_msg=$adm_msg");
				}
			}
			else
			{
				$adm_msg = "Enter Your Name or Other Details";
				header("Location:add_admin.php?adm_msg=$adm_msg");
			}
		}
	}	
		
?>