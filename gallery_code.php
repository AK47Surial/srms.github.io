<?php
$title = $_POST['title'];
$file = $_FILES['file']['name'];
$check = $_POST['check'];
$amit = 0;

$con = mysqli_connect('localhost','root','','srms',3306);
if(!$con)
{
  echo "Connection Error...";
}
else
{
  if($check=="on")
  {
	if(isset($_POST['title']))
			{
				// file uploading 
				$target_dir = "gallery_pic/";
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
						echo "File is not an image.";
						$uploadOk = 0;
					}
				}
				// Check if file already exists
				if (file_exists($target_file)) {
					echo "Sorry, file already exists.";
					$uploadOk = 1;
				}
				// Check file size
				if ($_FILES["file"]["size"] > 500000) {
					echo "Sorry, your file is too large.";
					$uploadOk = 0;
				}
				// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
				&& $imageFileType != "gif" ) {
					echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
					$uploadOk = 0;
				}
				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
					echo "Sorry, your file was not uploaded.";
					
				// if everything is ok, try to upload file
				} else {
				if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
						echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
						$amit = 1;
					} else {
						"Sorry, there was an error uploading your file.";
					}
				}
						
			// code of file uploading	
			
			if($amit==1)
			{
				$q = "insert into tbl_gallery(name,title) values('".$file."','".$title."')";
				$res = mysqli_query($con,$q);
				if($res==true)
				{
					echo "Photo upload successfully....";
					header("Location:gallery.php");
				}
				else
				{
					echo "Uploading Error...";
				}
			}
			else
			{
				echo "Uploading Error or Image already exixts";
			}
			}
			else
			{
				echo "Please Enter Title of Photo!";
			}
			
  }
  else
  {
	echo "Please Check to Verify";
  }
}
?>