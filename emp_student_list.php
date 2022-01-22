<?php
	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Student List</title>
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
				<a href="./employee_dashboard.php"><i class="fa fa-dashboard"></i> DashBoard</a>
				<a href="./emp_student_list.php" class="text-white"><i class="fa fa-list-ul"></i> Student List</a>
				<a href="./add_student.php"><i class="fa fa-plus-square"></i>&nbsp;  Add Student</a>
				<a href="./add_result.php"><i class="fa fa-file-pdf-o"></i>&nbsp;  Add Result</a>
				<a href="./branch_list.php"><i class="fa fa-cogs"></i>  Branch List</a>
				<a href="./subject_list.php"><i class="fa fa-list-ol"></i>  Subject List</a>
				<a href="./emp_cpw.php"><i class="fa fa-lock"></i> Change Password</a>
				<a href="./employee_logout.php"><i class="fa fa-sign-out"></i> Logout</a>
			</div>
		</div>	
		<div id="main" style="background:#88ff00;">
			<span style="font-size:30px;cursor:pointer;color:green;text-shadow:5px 5px 10px;" onclick="openNav()" class="hvr-float" ><span style="color:#ffc107;">&#9776;</span> This is Student List of Institute</span>
		</div>
		<!-- Side Nav Slide Code -->
		
		<!-- Student List Codes Here.......  -->
		
		<div class="container-fluid" style="background:#f1f9f9;">
			<div class="row" style="min-height:150px;">
				<div class="col-sm-7 mx-auto">
					<p></p>
					<p class="h1 text-center text-dark" style="font-family:sans-serif;"><b> Student List </b></p>
					
					<form class="form-inline mx-auto" action="emp_student_list.php" method="post">
						<div class="form-group text-white col-sm-5">
						<select class="form-control" for="sel1" name="branch" required>
						<?php
							$con = mysqli_connect('localhost','root','','srms',3306);
							if(!$con)
							{
								echo "Connection Error ......";
							}
							else
							{
								$sel = "select branch_name from tbl_branch";
								$res = mysqli_query($con, $sel);
								if(mysqli_num_rows($res)>0)
								{
									while($row=mysqli_fetch_assoc($res))
									{
										echo "<option>".$row['branch_name']." </option>";
									}
								}
								else
								{
									echo "<option> NA </option>";
								}
							}
						?>
						
						</select>
					</div>
					&nbsp;&nbsp;&nbsp;&nbsp;
					<div class="form-group text-white col-sm-2">
						<select class="form-control" for="sel1" name="session" required>
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
							<option> 2027-2028 </option>
						</select>
					</div>
					<div class="col-sm-3">
						<button class="btn btn-dark btn-sm"><i class="fa fa-search"></i> Search 
						</button>
					</div>
					</form>
				</div>
			</div>
			<div class="row mx-auto" style="min-height:auto;padding-bottom:30px;margin-bottom:20px;">
				<table class="table table-responsive table-bordered table-hover">
					<thead>
						<tr class="h5">
							<td> S.N. </td>
							<td> Enrollment No. </td>
							<td> Name </td>
							<td> Father Name </td>
							<td> Mother Name </td>
							<td> Date of Birth </td>
							<td> Email-id </td>
							<td> Mobile </td>
							<td> Gender </td>
							<td> Photo </td>
						</tr>
					</thead>
					<tbody>
					<?php
						if(isset($_POST['branch']))
						{
							$con = mysqli_connect('localhost','root','','srms',3306);
							if(!$con)
							{
								echo "Connetion Error.....";
							}
							else
							{
								$branch = $_POST['branch'];
								$session = $_POST['session'];
								$sel = "select * from tbl_student where branch='".$branch."' and session='".$session."'";
								$res = mysqli_query($con, $sel);
								if(mysqli_num_rows($res)>0)
								{
									$i = 1;
									while($row=mysqli_fetch_assoc($res))
									{
										echo"
										<tr style='height:100px;font-size:16px;'>
											<td> ".$i." </td>
											<td> ".$row['enroll_id']." </td>
											<td> ".$row['name']." </td>
											<td> ".$row['fname']." </td>
											<td> ".$row['mname']." </td>
											<td> ".$row['dob']." </td>
											<td> ".$row['email']." </td>
											<td> ".$row['mobile']." </td>
											<td> ".$row['gender']." </td>
											<td><img src='student_pic/".$row['photo']."' height='85'> </td>
										</tr>
										";
										$i++;
									}
								}
								else
								{
									echo"
									<tr>
										<td colspan='11' class='text-center'> No Recound Found  </td>
									</tr>
									";
								}
							}
						}
						else
						{
							
						}
					?>
					</tbody>
				</table>
			</div>
			<div class="row" style="min-height:100px;background:#88ff00;">
				<div class="col-sm-4 mx-auto">
					<p></p>
					<br/>
					<p class="h5 text-center"><i class="fa fa-laptop"></i> Developed By : Amit Kumar <i class="fa fa-laptop"></i></p>
				</div>
			</div>
		</div>
		<!-- Student List Codes Here.......  -->
		
		
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