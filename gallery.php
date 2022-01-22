<?php
	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Upload photos for gallery</title>
		<link href="images/college_logo.png" rel="icon"/>
		<link href="css/home.css" rel="stylesheet" />
		<link href="css/w3.css" rel="stylesheet" />
		<link href="css/hover.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://use.fontawesome.com/1e5c3fb66c.js"></script>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		
		<style>
		body {
			font-family: "Lato", sans-serif;
			transition: background-color .5s;
			//background-color : #80ff80;
		}

		.sidenav {
			height: 100%;
			width: 0;
			position: fixed;
			z-index: 1;
			top: 0;
			left: 0;
			background:rgba(0,0,0,0.8) ;
			overflow-x: hidden;
			transition: 0.5s;
			padding-top: 60px;
		}
		
		.sidenav a {
			padding: 8px 8px 8px 32px;
			text-decoration: none;
			font-size: 20px;
			color: #ffc107;
			display: block;
			transition: 0.3s;
		}
			
		.sidenav a:hover {
			color: #f1f1f1;
		}		

		.sidenav .closebtn {
			position: absolute;
			top: 0;
			right: 25px;
			font-size: 36px;
			margin-left: 50px;
		}

		#main {
			transition: margin-left .5s;
			padding: 16px;
		}

		@media screen and (max-height: 450px) {
			.sidenav {padding-top: 15px;}
			.sidenav a {font-size: 18px;}
		}
		
		
		.style{
			font-size: 20px;
			font-weight: 500;
		}
		.block{
			height: 30vh;
		}
		.wow{
			visibility: hidden;
		}
		.btn{
			display:block;
			margin: 30px auto;
			font-size: 20px;
		}
		.btn .fas{
  
			font-size: 18px;
		}
		#r_under a:hover{
			text-decoration : none;
		}
	</style>
		
	</head>
	<body>
		<div class="container-fluid">
			<div id="mySidenav" class="sidenav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<a href="./admin_dashboard.php"><i class="fa fa-dashboard"></i> DashBoard</a>
				<a href="./student_list.php"><i class="fa fa-list-ul"></i> Student List</a>
				<a href="./employee_list.php"><i class="fa fa-th-list"></i> Employee List</a>
				<a href="./add_employee.php"><i class="fa fa-plus-square"></i>  Add Employee</a>
				<a href="./gallery.php" class="text-white"><i class="fa fa-photo"></i>  Upload Photos</a>
				<a href="./login_detail.php"><i class="fa fa-sign-in"></i>  Login Details</a>
				<a href="./adm_cpw.php"><i class="fa fa-lock"></i> Change Password</a>
				<a href="./admin_logout.php"><i class="fa fa-sign-out"></i> Logout</a>
			</div>
		</div>	
		<div id="main" style="background-color:#89ff00;">
			<span style="font-size:30px;cursor:pointer;color:green;text-shadow:5px 5px 10px;" onclick="openNav()" class="hvr-float" ><span style="color:#ffc107;">&#9776;</span>   Here! You can upload photos <a href="employee_dashboard.php">....</a></span> </span>
		</div>
		<!-- Side Nav Slide Code -->
		
		<div class="container-fluid" style="min-height:630px;background:url('images/arts-build-close-up-273230.jpg');background-size:100% 100%;background-attachment:fixed;padding-top:30px;">
		<div class="row">	
			 <div class="col-sm-6" style="min-height:570px;">
				<div class="col-sm-9 mx-auto" style="min-height:570px;border:1px solid #2db300;border-radius:10px;box-shadow:1px 1px 10px 0px #88ff00;background:rgba(0,0,0,0.6);">
				<br/>
				
				<form action="gallery_code.php" method="post" enctype="multipart/form-data" class="text-white">
					<p></p>
					<br/>
					<p class="h1 text-center">Upload Photos</p>
					<br/>
					<br/>
					<div class="form-group">
						<label for="exampleInputEmail1" class="h5">Title of Photo</label>
						<br/>
						<br/>
						<input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Title of Photo">
					</div>
					<br/>
					<div class="form-group">
						<label for="exampleInputFile" class="h5">File input</label>
						<br/>
						<br/>
						<input type="file" name="file" id="exampleInputFile">
					</div>
					<br/>
					<div class="checkbox">
						<label>
							<input type="checkbox" name="check"> Check to verify
						</label>
					</div>
					<button type="submit" class="btn btn-light btn-sm"><i class="fa fa-send"> </i> Submit</button>
				</form>
			</div>
			 </div>
			 <div class="col-sm-6" style="min-height:570px;">
				<div class="col-sm-12 mx-auto" style="min-height:560px;border:1px solid #2db300;border-radius:10px;box-shadow:1px 1px 10px 0px #88ff00;background:rgba(0,0,0,0.6);margin-top:10px;margin-bottom:10px;">
				<br/>
					<p class="h1 text-center text-white"> Delete Photos</p>	
				<form class="from">
					<div class="form-group text-white">
						<label class="h5">Click on image to delete <i class="fa fa-hand-o-down"></i></label>
						<div class="row">
						<?php
							$con = mysqli_connect('localhost','root','','srms',3306);
							if(!$con)
							{
								echo "Connection Error...";
							}
							else
							{
								$sel = "select * from tbl_gallery";
								$res = mysqli_query($con, $sel);
								if(mysqli_num_rows($res)>0)
								{
									while($row=mysqli_fetch_assoc($res))
									{
										echo "
											<div class='col-sm-2' style='margin-top:10px;'>
												<a href='delete_gallery.php?delete=".$row['id']."'>
												<img src='gallery_pic/".$row['name']."' height='80px' width='80px' alt='No Images'class='rounded'></a>
											</div>
										";
									}
								}
								else
								{
									echo "
									<div class='col-sm-2 mx-auto' style='margin-top:10px;'>
										<img src='gallery_pic/' height='80px' width='80px' alt='No Images'class='rounded'>
									</div>
									";
								}
							}
						?>
						</div>
					</div>
				</form>
			 </div>
		</div>
		</div>
		<div class="container-fluid" style="min-height:100px;background:#88ff00;padding-top:10px;">
				<div class="col-sm-4 mx-auto">
					<p></p>
					<p class="h4 text-dark text-center"><i class="fa fa-laptop"></i> Developed By - Amit Kumar <i class="fa fa-laptop"></i></p>
				</div>
		</div>
		<script>
			function openNav() {
				document.getElementById("mySidenav").style.width = "250px";
				document.getElementById("main").style.marginLeft = "250px";
				document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
			}
			function closeNav() {
				document.getElementById("mySidenav").style.width = "0";
				document.getElementById("main").style.marginLeft= "0";
				document.body.style.backgroundColor = "white";
			}
		</script>
		
	<!-- Side Nav Slide Code -->
	</body>
</html>