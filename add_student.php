<?php
	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Registration of student</title>
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
			//background-color : #daded9;
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
	<body style="background:#88ff00;">
		<div class="container-fluid">
			<div id="mySidenav" class="sidenav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<a href="./employee_dashboard.php"><i class="fa fa-dashboard"></i> DashBoard</a>
				<a href="./emp_student_list.php"><i class="fa fa-list-ul"></i> Student List</a>
				<a href="./add_student.php" class="text-white"><i class="fa fa-plus-square"></i>&nbsp;  Add Student</a>
				<a href="./add_result.php"><i class="fa fa-file-pdf-o"></i>&nbsp;  Add Result</a>
				<a href="./branch_list.php"><i class="fa fa-cogs"></i>  Branch List</a>
				<a href="./subject_list.php"><i class="fa fa-list-ol"></i>  Subject List</a>
				<a href="./emp_cpw.php"><i class="fa fa-lock"></i> Change Password</a>
				<a href="./employee_logout.php"><i class="fa fa-sign-out"></i> Logout</a>
			</div>
				
		<div id="main" style="background:#88ff00;">
			<span style="font-size:30px;cursor:pointer;color:green;text-shadow:5px 5px 10px;" onclick="openNav()" class="hvr-float" ><span style="color:#ffc107;">&#9776;</span> Student Registration here.....</span>
		</div>
		
		<!-- Register Employee Code Started Here.... -->
		
		<div class="row" style="padding-bottom:20px;padding-top:5px;background:#f1f2f9;">
			<?php
				if(isset($_GET['std_msg']))
				{
					$msg = $_GET['std_msg'];
					if($msg=="Registration Successful...")
					{
						echo "
						<div class='alert alert-dismissible fade show col-sm-6 mx-auto' role='alert' style='background:#fff;color:green;border:2px solid green;'>
							<strong class='h5'>Congratulation!</strong> ".$msg.".
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
							</button>
						</div>";
					}
					else
					{
						echo
						 "<div class='alert alert-dismissible fade show col-sm-6 mx-auto' role='alert' style='background:#fff;color:red;border:2px solid red;'>
							<strong class='h5'>Warning!</strong> ".$msg.".
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
							</button>
						</div>";
					}
				}
			?>
			<div class="container mx-auto">
				<br/>
						<p class="h1 text-success text-center">
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
						</svg>
						<u><b>Student Registration</b></u></p>
			<br/>
			<form action="add_student_code.php" method="post" enctype="multipart/form-data">
					<div class="form-row text-dark">
					<div class="row container-fluid">
					<div class="col-sm-6">
						<label for="inputName4">Enrollment No.</label>
						
						<input type="text" class="form-control" name="enroll" id="inputName4" placeholder=" Enrollment Number " required autofocus>
					</div>
					<div class="col-sm-6">
						<label for="inputName4">Student Name</label>
						
						<input type="text" class="form-control" name="std_name" id="inputName4" placeholder=" Student Name" required>
					</div>
					</div>
					<br/><br/><br/><br/>
					<div class="row container-fluid">
						<div class="col-sm-6">
							<label for="inputDate4">Father Name</label>					
							<input type="text" class="form-control" name="f_name" id="myInput" placeholder=" Father Name" required>
						</div>
						<div class="col-sm-6">
							<label for="inputDate4">Mother Name</label>
							<input type="text" class="form-control" name="m_name" id="myInput" placeholder=" Mother Name" required>
						</div>
					</div>
					<br/><br/><br/><br/>
					<div class="row container-fluid">
						<div class="col-sm-4">
							<label for="inputDate4">Date of Birth</label>
							<input type="text" name="dob" class="form-control" placeholder="dd/mm/yyyy" id="myInput" required>
						</div>
						<div class="col-sm-4">
							<label for="inputName4"> Email Address</label>
							<input type="email" class="form-control" name="std_email" id="inputName4" placeholder=" Email Address" required >
						</div>
						<div class="col-sm-4">
							<label for="inputName4"> Mobile No.</label>
							<input type="number" class="form-control" name="std_mobile" id="inputName4" placeholder=" Mobile Number" required >
						</div>
					</div>
					<br/><br/><br/><br/>
					<div class="row container-fluid">	
						<div class="col-sm-6">
						<label for="sel1"> Branch </label>
						<select class="form-control" id="sel1" name="branch">
							<option>  </option>
							<?php
								$con = mysqli_connect('localhost','root','','srms',3306);
								if(!$con)
								{
									echo "Connection Error.......";
								}
								else
								{
									$sel = "select * from tbl_branch";
									$res = mysqli_query($con, $sel);
									if(mysqli_num_rows($res)>0)
									{
										while($row=mysqli_fetch_assoc($res))
										{
											echo "<option> ".$row['branch_name']." </option>";
										}
									}
								}
							?>
						</select>
						</div>
						<div class="col-sm-3">
							<label for="sel1"> Semester </label>
							<select class="form-control" id="sel1" name="semester">
								<option> 01 SEMESTER </option>
								<option> 02 SEMESTER </option>
								<option> 03 SEMESTER </option>
								<option> 04 SEMESTER </option>
								<option> 05 SEMESTER </option>
								<option> 06 SEMESTER </option>
							</select>
						</div>
						<div class="col-sm-3">	
							<label for="sel1"> Session </label>
							<select class="form-control" id="sel1" name="session">
								<option>  </option>
								<option> 2017-2018 </option>
								<option> 2018-2019 </option>
								<option> 2019-2020 </option>
								<option> 2020-2021 </option>
								<option> 2021-2022 </option>
								<option> 2022-2023 </option>
								<option> 2023-2024 </option>
								<option> 2024-2025 </option>
								<option> 2025-2026 </option>
								<option> 2026-2027 </option>
							</select>
						</div>
					</div>
					<br/><br/><br/><br/>
					<div class="row container-fluid">
						<div class="col-sm-3">
							<br/>
							<label for="inputName4"> Gender </label>
							&nbsp;
							<label class="radio-inline">
								<input type="radio" name="gender" value="Male"> Male
							</label>
							<label class="radio-inline">
								<input type="radio" name="gender" value="Female"> Female
							</label>
						</div>
						<div class="col-sm-9">	
							<label for="inputName4"> Photo</label>
								<input type="file" class="form-control" name="file" id="file" required>
								<span class="h6 text-danger">Choose photo less than 500KB</span>
						</div>
					</div>
					
					<br/>
					<button type="submit" name="submit" class="btn btn-success"><span class="fa fa-send"> <b id="font_family">Register</span></b></button>
					</div>
					</div>
				</form>
			</div>
			<div class="row" style="min-height:100px;">
				<div class="col-sm-4 mx-auto text-center">	
					<p></p>
					<br/>
					<p class="h5"><i class="fa fa-laptop"></i>  Developed By : Amit Kumar <i class="fa fa-laptop"></i></p>
				</div>
			</div>
			
		</div>
		

		<!-- Register Employee Code Ends Here.... -->
			
	<!-- Side Nav Slide Code -->
		
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