<?php
	$amit = 0;
	$enroll = $_POST['enroll'];
	$name = $_POST['std_name'];
	$fname = $_POST['f_name'];
	$mname = $_POST['m_name'];
	$dob = $_POST['dob'];
	$email = $_POST['std_email'];
	$mobile = $_POST['std_mobile'];
	$branch = $_POST['branch'];
	$sem = $_POST['semester'];
	$session = $_POST['session'];
	$gender = $_POST['gender'];
	$photo = $_FILES['file']['name'];
	$con = mysqli_connect('localhost','root','','srms',3306);
	if(!$con)
	{
		$std_msg = "Connection Failed..";
		header("Location:add_student.php?std_msg=$std_msg");
	}
	else
	{
		$s = "select * from tbl_student where email='".$email."' or mobile='".$mobile."'";
		$result = mysqli_query($con,$s);
		$num = mysqli_num_rows($result);
		if($num>0)
		{	
			$std_msg = "Student Already Registered..";
			header("Location:add_student.php?std_msg=$std_msg");
		}
		else
		{
			if(isset($_POST['std_name']))
			{
				// file uploading 
				$target_dir = "student_pic/";
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
						$std_msg =  "File is not an image.";
						$uploadOk = 0;
						header("Location:add_stdloyee.php?std_msg=$std_msg");
					}
				}
				// Check if file already exists
				if (file_exists($target_file)) {
					$std_msg =  "Sorry, file already exists.";
					$uploadOk = 0;
					header("Location:add_student.php?std_msg=$std_msg");
				}
				// Check file size
				if ($_FILES["file"]["size"] > 500000) {
					$std_msg = "Sorry, your file is too large.";
					$uploadOk = 0;
					header("Location:add_stdloyee.php?std_msg=$std_msg");
				}
				// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
					$std_msg = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
					$uploadOk = 0;
					header("Location:add_student.php?std_msg=$std_msg");
				}
				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
					echo $std_msg = "Sorry, your file was not uploaded.";
					header("Location:add_student.php?std_msg=$std_msg");
				// if everything is ok, try to upload file
				} else {
					if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
						echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
						$amit = 1;
					} else {
						$std_msg = "Sorry, there was an error uploading your file.";
						header("Location:add_student.php?std_msg=$std_msg");
					}
				}
						
			// code of file uploading	
			

				if($amit==1)
				{
					$query = "insert into tbl_student(enroll_id,name,fname,mname,dob,email,mobile,branch,semester,session,gender,photo) values('".$enroll."','".$name."','".$fname."','".$mname."','".$dob."','".$email."','".$mobile."','".$branch."','".$sem."','".$session."','".$gender."','".$photo."')";
					$res = mysqli_query($con,$query);
					if($res==true)
					{
						$std_msg = "Registration Successful...";
						header("Location:add_student.php?std_msg=$std_msg");
					}
					else
					{
						$std_msg = "Unable to Register";
						header("Location:add_student.php?std_msg=$std_msg");
					}
				}
				else
				{
					$std_msg = "Image Already exists.....";
					header("Location:add_student.php?std_msg=$std_msg");
				}
			}
			else
			{
				$std_msg = "Enter Your Name or Other Details";
				header("Location:add_student.php?std_msg=$std_msg");
			}
		}
	}	
		
?>