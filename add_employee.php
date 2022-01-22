<?php
	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Employee Registration</title>
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
	<body>
		<div class="container-fluid">
			<div id="mySidenav" class="sidenav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<a href="./admin_dashboard.php"><i class="fa fa-dashboard"></i> DashBoard</a>
				<a href="./student_list.php"><i class="fa fa-list-ul"></i> Student List</a>
				<a href="./employee_list.php"><i class="fa fa-th-list"></i> Employee List</a>
				<a href="./add_employee.php" class="text-white"><i class="fa fa-plus-square"></i>  Add Employee</a>
				<a href="./gallery.php"><i class="fa fa-photo"></i>  Upload Photos</a>
				<a href="./login_detail.php"><i class="fa fa-sign-in"></i>  Login Details</a>
				<a href="./adm_cpw.php"><i class="fa fa-lock"></i> Change Password</a>
				<a href="./admin_logout.php"><i class="fa fa-sign-out"></i> Logout</a>
			</div>
		</div>	
		<div id="main" style="background:#88ff00;">
			<span style="font-size:30px;cursor:pointer;color:green;text-shadow:5px 5px 10px;" onclick="openNav()" class="hvr-float" ><span style="color:#ffc107;">&#9776;</span> Employee Registration here <a href="employee_dashboard.php">....</a></span></span>
		</div>
		
		<!-- Register Employee Code Started Here.... -->
		
		<div class="container-fluid bg-dark">
			<div class="col-sm-5 mx-auto">
				<br/>
						<p class="h1 text-warning text-center">
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
						</svg>
						<u><b>Employee Registration</b></u></p>
			<br/>
			<form action="add_employee_code.php" method="post" enctype="multipart/form-data" class="text-warning">
					<div class="form-row">
					<div class="form-group col-sm-12 h5">
						<label for="inputName4">Employee Name</label>
						<br/>
						<input type="text" class="form-control" name="emp_name" id="inputName4" placeholder="Employee Name" required autofocus>
					<br/>
					<label for="inputName4">Email Address</label>
						<br/>
						<input type="email" class="form-control" name="emp_email" id="inputName4" placeholder="Email Address" required>
					<br/>
						<label for="inputDate4">Password</label>
						<br/>
						<input type="password" class="form-control" name="password" id="myInput" placeholder="Password" required>
						<input type="checkbox" onclick="myFunction()"><span class="h6"> Show Password</span>
					<br/>
					<br/>
					<label for="inputName4"> Mobile No.</label>
						<br/>
						<input type="number" class="form-control" name="emp_mobile" id="inputName4" placeholder="Mobile No." required >
					<br/>
					<label for="inputName4"> Alternate Mobile No.</label>
						<br/>
						<input type="number" class="form-control" name="emp_alt_mobile" id="inputName4" placeholder="Alternate Mobile No." required >
					<br/>
						<label for="sel1"> Designation </label>
						<select class="form-control" id="sel1" name="designation">
							<option>  </option>
							<option> Principal </option>
							<option> H.O.D. (CSE) </option>
							<option> H.O.D. (EC) </option>
							<option> H.O.D. (PH) </option>
							<option> Computer Instructor </option>
							<option> Lecturer </option>
							<option> Lecturer(Physics)</option>
							<option> Lecturer(Chemistry)</option>
							<option> Lecturer(Mathematics)</option>
							<option> Lecturer(English)</option>
						</select>
					<br>
						<label for="sel1"> Departents </label>
						<select class="form-control" id="sel1" name="department">
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
							<option> PURE SCIENCE & HUMANITIES </option>
							<option> WORKER </option>
						</select>
					<br/>
					 <label for="sel2">Qualification  </label>
					 <br/>
						<p class="text-justify">B.Sc &nbsp;<input type="checkbox" name="degree[]" value="B.Sc">
						M.Sc &nbsp;<input type="checkbox" name="degree[]" value="M.Sc">
						B.E &nbsp;<input type="checkbox" name="degree[]" value="B.E">
						M.E &nbsp;<input type="checkbox" name="degree[]" value="M.E">
						B.Tech &nbsp;<input type="checkbox" name="degree[]" value="B.Tech">
						M.Tech &nbsp;<input type="checkbox" name="degree[]" value="M.Tech">
						B.A &nbsp; <input type="checkbox" name="degree[]" value="B.A">
						M.A &nbsp; <input type="checkbox" name="degree[]" value="M.A">
						B.Pharma &nbsp;<input type="checkbox" name="degree[]" value="B.Pharma"> 
						D.Pharma &nbsp;<input type="checkbox" name="degree[]" value="D.Pharma">
						M.Pharma &nbsp;<input type="checkbox" name="degree[]" value="M.Pharma">
						Ph.D &nbsp;<input type="checkbox" name="degree[]" value="Ph.D">
						</p>
					<br/>
					<label for="inputName4"> Date of Joining</label>
						<br/>
						<input type="date" class="form-control" name="joining" id="inputName4" placeholder="Mobile No." required>
					<br/>
					<label for="inputName4"> Gender </label>
					<br/>
					<label class="radio-inline">
						<input type="radio" name="gender" value="Male"> Male
					</label>
					<label class="radio-inline">
						<input type="radio" name="gender" value="Female"> Female
					</label>
					<br/>
					<label for="inputName4"> Photo</label>
					<input type="file" class="form-control" name="file" placeholder="Mobile No." id="file" required>
					</div>
					</div>
					<br/>
					<button type="submit" name="submit" class="btn btn-warning"><span class="fa fa-send"> <b id="font_family">Register</span></b></button>
				</form>
			</div>
			<div class="row" style="min-height:100px;background:#88ff00;">
				<div class="col-sm-4 mx-auto">
					<p></p>
					<br/>
					<p class="h4 text-dark text-center"><i class="fa fa-laptop"></i> Developed By - Amit Kumar <i class="fa fa-laptop"></i></p>
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