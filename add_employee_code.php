<?php
	$amit = 0;
	$emp_name = $_POST['emp_name'];
	$email = $_POST['emp_email'];
	$password = $_POST['password'];
	$mobile = $_POST['emp_mobile'];
	$alt_mobile = $_POST['emp_alt_mobile'];
	$designation = $_POST['designation'];
	$department = $_POST['department'];
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
		$emp_msg = "Connection Failed..";
		header("Location:add_employee.php?emp_msg=$emp_msg");
	}
	else
	{
		$s = "select * from tbl_employee where email='".$email."' or mobile='".$mobile."'";
		$result = mysqli_query($con,$s);
		$num = mysqli_num_rows($result);
		if($num>0)
		{	
			$emp_msg = "Employee Already Registered..";
			header("Location:add_employee.php?emp_msg=$emp_msg");
		}
		else
		{
			if(isset($_POST['emp_name']))
			{
				// file uploading 
				$target_dir = "employee_pic/";
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
						$emp_msg =  "File is not an image.";
						$uploadOk = 0;
						header("Location:add_employee.php?emp_msg=$emp_msg");
					}
				}
				// Check if file already exists
				if (file_exists($target_file)) {
					$emp_msg =  "Sorry, file already exists.";
					$uploadOk = 0;
					header("Location:add_employee.php?emp_msg=$emp_msg");
				}
				// Check file size
				if ($_FILES["file"]["size"] > 500000) {
					$emp_msg = "Sorry, your file is too large.";
					$uploadOk = 0;
					header("Location:add_employee.php?emp_msg=$emp_msg");
				}
				// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
					$emp_msg = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
					$uploadOk = 0;
					header("Location:add_employee.php?emp_msg=$emp_msg");
				}
				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
					echo $emp_msg = "Sorry, your file was not uploaded.";
					header("Location:add_employee.php?emp_msg=$emp_msg");
				// if everything is ok, try to upload file
				} else {
					if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
						echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
						$amit = 1;
					} else {
						$emp_msg = "Sorry, there was an error uploading your file.";
						header("Location:add_employee.php?emp_msg=$emp_msg");
					}
				}
						
			// code of file uploading	
			

				if($amit==1)
				{
					$query = "insert into tbl_employee(name,email,password,mobile,alter_mobile,designation,department,qualification,joining,gender,photo) values('".$emp_name."','".$email."','".$password."','".$mobile."','".$alt_mobile."','".$designation."','".$department."','".$d."','".$joining."','".$gender."','".$photo."')";
					$res = mysqli_query($con,$query);
					if($res==true)
					{
						$emp_msg = "Registration Successful";
						header("Location:add_employee.php?emp_msg=$emp_msg");
					}
					else
					{
						$emp_msg = "Unable to Register";
						header("Location:add_employee.php?emp_msg=$emp_msg");
					}
				}
				else
				{
					$emp_msg = "Image Already exists.....";
					header("Location:add_employee.php?emp_msg=$emp_msg");
				}
			}
			else
			{
				$emp_msg = "Enter Your Name or Other Details";
				header("Location:add_employee.php?emp_msg=$emp_msg");
			}
		}
	}	
		
?>