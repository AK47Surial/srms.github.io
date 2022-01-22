<?php
	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Employee List</title>
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
				<a href="./employee_list.php" class="text-white"><i class="fa fa-th-list"></i> Employee List</a>
				<a href="./add_employee.php"><i class="fa fa-plus-square"></i>  Add Employee</a>
				<a href="./gallery.php"><i class="fa fa-photo"></i>  Upload Photos</a>
				<a href="./login_detail.php"><i class="fa fa-sign-in"></i>  Login Details</a>
				<a href="./adm_cpw.php"><i class="fa fa-lock"></i> Change Password</a>
				<a href="./admin_logout.php"><i class="fa fa-sign-out"></i> Logout</a>
			</div>
		</div>	
		<div id="main" style="background:#88ff00;">
			<span style="font-size:30px;cursor:pointer;color:green;text-shadow:5px 5px 10px;" onclick="openNav()" class="hvr-float" ><span style="color:#ffc107;">&#9776;</span>    This is Employee List of Institute <a href="employee_dashboard.php">....</a></span></span>
		</div>
		<!-- Side Nav Slide Code -->
		
		<div class="container-fluid">
		<div class="row" style="background:#d1e0e0;">
		<!-- Computer Science Employees Started  -->
			<div class="col-sm-12">
			<p></p>
			<p class="h1" style="background:green;color:white;">&nbsp;&nbsp;Faculty of Computer Science & Engineering </p>
			<p></p>
			<br/>
				<table class="table table-responsive table-hover">
					<thead>
						<tr>
							<th role="col" class="h5"> S.N. </th>
							<th role="col" class="h5"> Name </th>
							<th role="col" class="h5"> Email-id </th>
							<th role="col" class="h5"> Mobile No. </th>
							<th role="col" class="h5"> Alter No. </th>
							<th role="col" class="h5"> Designation </th>
							<th role="col" class="h5"> Qualification </th>
							<th role="col" class="h5"> Join Date </th>
							<th role="col" class="h5"> Gender </th>
							<th role="col" class="h5"> Photo </th>
							<th role="col" class="h5"> Edit </th>
							<th role="col" class="h5"> Delete </th>
						</tr>
					</thead>
					<tbody>
					<?php
						$con = mysqli_connect('localhost','root','','srms',3306);
						if(!$con)
						{
							echo "Connection Error......";
						}
						else
						{
							/*
							$s = "select COUNT(emp_id) from tbl_employee";
							$r = mysqli_query($con,$sel);
							$n = mysqli_fetch_row($r);
							*/
							$department = "Computer Science & Engineering";
							$sel = "select * from tbl_employee where department='".$department."'";
							$res = mysqli_query($con, $sel);
							if(mysqli_num_rows($res)>0)
							{
								while($row=mysqli_fetch_assoc($res))
								{
									echo"
									<tr style='border:1px solid #dee2e6;font-size:16px;'>	
										<td role='row'> ".$row['emp_id']." </td>
										<td role='row'> ".$row['name']." </td>
										<td role='row'> ".$row['email']." </td>
										<td role='row'> ".$row['mobile']." </td>
										<td role='row'> ".$row['alter_mobile']." </td>
										<td role='row'> ".$row['designation']." </td>
										<td role='row'> ".$row['qualification']." </td>
										<td role='row'> ".$row['joining']." </td>
										<td role='row'> ".$row['gender']." </td>
										<td role='row'> <a href='employee_pic/".$row['photo']."'><img src='employee_pic/".$row['photo']."' height='50px'> </a></td>
										<td role='row'> <a href='employee_edit.php'><img src='images/edit_icon.png' height='25' > </a></td>
										<td role='row'> <a href='employee_delete.php'> <img src='images/Delete.ico' height='25' > </a></td>
									</tr>";
								}
							}
							else
							{
								echo "<tr><td colspan='12'><p class='h3 text-center'>No Record Found....</p></td></tr>";
							}
						}
					?>
					</tbody>
				</table>
				
			<!-- Computer Science Employees Ends  -->
				</div>
			</div>
			<!-- Electronics Employees Started  -->	
			
			<div class="row" style="background:#d1e0e0;">			
			<div class="col-sm-12">
			<p></p>
			<p class="h1" style="background:green;color:#fff">&nbsp;&nbsp;Faculty of
			Electronics Engineering </p>
			<p></p>
			<br/>
				<table class="table table-responsive table-hover">
					<thead>
						<tr>
							<th role="col" class="h5"> S.N. </th>
							<th role="col" class="h5"> Name </th>
							<th role="col" class="h5"> Email-id </th>
							<th role="col" class="h5"> Mobile No. </th>
							<th role="col" class="h5"> Alter No. </th>
							<th role="col" class="h5"> Designation </th>
							<th role="col" class="h5"> Qualification </th>
							<th role="col" class="h5"> Join Date </th>
							<th role="col" class="h5"> Gender </th>
							<th role="col" class="h5"> Photo </th>
							<th role="col" class="h5"> Edit </th>
							<th role="col" class="h5"> Delete </th>
						</tr>
					</thead>
					<tbody>
					<?php
						$con = mysqli_connect('localhost','root','','srms',3306);
						if(!$con)
						{
							echo "Connection Error......";
						}
						else
						{
							/*
							$s = "select COUNT(emp_id) from tbl_employee";
							$r = mysqli_query($con,$sel);
							$n = mysqli_fetch_row($r);
							*/
							$department = "Electronics Engineering";
							$sel = "select * from tbl_employee where department='".$department."'";
							$res = mysqli_query($con, $sel);
							if(mysqli_num_rows($res)>0)
							{
								while($row=mysqli_fetch_assoc($res))
								{
									echo"
									<tr style='border:1px solid #dee2e6;font-size:16px;'>	
										<td role='row'> ".$row['emp_id']." </td>
										<td role='row'> ".$row['name']." </td>
										<td role='row'> ".$row['email']." </td>
										<td role='row'> ".$row['mobile']." </td>
										<td role='row'> ".$row['alter_mobile']." </td>
										<td role='row'> ".$row['designation']." </td>
										<td role='row'> ".$row['qualification']." </td>
										<td role='row'> ".$row['joining']." </td>
										<td role='row'> ".$row['gender']." </td>
										<td role='row'> <a href='employee_pic/".$row['photo']."'><img src='employee_pic/".$row['photo']."' height='50px'> </a></td>
										<td role='row'> <a href='employee_edit.php'><img src='images/edit_icon.png' height='25' > </a></td>
										<td role='row'> <a href='employee_delete.php'> <img src='images/Delete.ico' height='25' > </a></td>
									</tr>";
								}
							}
							else
							{
								echo "<tr><td colspan='12'><p class='h3 text-center'>No Record Found....</p></td></tr>";
							}
						}
					?>
					</tbody>
				</table>
				
			<!-- Electronics Employees Ends  -->
			</div>
			
			<!-- Pharmacy Employees Started-->	
			<div class="container-fluid">
			<div class="row" style="background:#d1e0e0;">
			<div class="col-sm-12">
			<p></p>
			<p class="h1" style="background:green;color:#fff">&nbsp;&nbsp;Faculty of Pharmacy </p>
			<br/>
				<table class="table table-responsive table-hover">
					<thead>
						<tr>
							<th role="col" class="h5"> S.N. </th>
							<th role="col" class="h5"> Name </th>
							<th role="col" class="h5"> Email-id </th>
							<th role="col" class="h5"> Mobile No. </th>
							<th role="col" class="h5"> Alter No. </th>
							<th role="col" class="h5"> Designation </th>
							<th role="col" class="h5"> Qualification </th>
							<th role="col" class="h5"> Join Date </th>
							<th role="col" class="h5"> Gender </th>
							<th role="col" class="h5"> Photo </th>
							<th role="col" class="h5"> Edit </th>
							<th role="col" class="h5"> Delete </th>
						</tr>
					</thead>
					<tbody>
					<?php
						$con = mysqli_connect('localhost','root','','srms',3306);
						if(!$con)
						{
							echo "Connection Error......";
						}
						else
						{
							/*
							$s = "select COUNT(emp_id) from tbl_employee";
							$r = mysqli_query($con,$sel);
							$n = mysqli_fetch_row($r);
							*/
							$department = "Pharmacy";
							$sel = "select * from tbl_employee where department='".$department."'";
							$res = mysqli_query($con, $sel);
							if(mysqli_num_rows($res)>0)
							{
								while($row=mysqli_fetch_assoc($res))
								{
									echo"
									<tr style='border:1px solid #dee2e6;font-size:16px;'>	
										<td role='row'> ".$row['emp_id']." </td>
										<td role='row'> ".$row['name']." </td>
										<td role='row'> ".$row['email']." </td>
										<td role='row'> ".$row['mobile']." </td>
										<td role='row'> ".$row['alter_mobile']." </td>
										<td role='row'> ".$row['designation']." </td>
										<td role='row'> ".$row['qualification']." </td>
										<td role='row'> ".$row['joining']." </td>
										<td role='row'> ".$row['gender']." </td>
										<td role='row'> <a href='employee_pic/".$row['photo']."'><img src='employee_pic/".$row['photo']."' height='50px'> </a></td>
										<td role='row'> <a href='employee_edit.php'><img src='images/edit_icon.png' height='25' > </a></td>
										<td role='row'> <a href='employee_delete.php'> <img src='images/Delete.ico' height='25' > </a></td>
									</tr>";
								}
							}
							else
							{
								echo "<tr><td colspan='12'><p class='h3 text-center'>No Record Found....</p></td></tr>";
							}
						}
					?>
					</tbody>
				</table>
			<!-- Pharmacy Employees Ends  -->
				</div>
				
			<!-- Pure Science & Humanities Employees Started-->	
			<div class="container-fluid">	
			<div class="row" style="background:#d1e0e0;">
			<div class="col-sm-12">
			<p></p>
			<p class="h1" style="background:green;color:#fff"> &nbsp;&nbsp;Faculty of Pure Science & Humanities </p>
			<br/>
				<table class="table table-responsive table-hover">
					<thead>
						<tr>
							<th role="col" class="h5"> S.N. </th>
							<th role="col" class="h5"> Name </th>
							<th role="col" class="h5"> Email-id </th>
							<th role="col" class="h5"> Mobile No. </th>
							<th role="col" class="h5"> Alter No. </th>
							<th role="col" class="h5"> Designation </th>
							<th role="col" class="h5"> Qualification </th>
							<th role="col" class="h5"> Join Date </th>
							<th role="col" class="h5"> Gender </th>
							<th role="col" class="h5"> Photo </th>
							<th role="col" class="h5"> Edit </th>
							<th role="col" class="h5"> Delete </th>
						</tr>
					</thead>
					<tbody>
					<?php
						$con = mysqli_connect('localhost','root','','srms',3306);
						if(!$con)
						{
							echo "Connection Error......";
						}
						else
						{
							/*
							$s = "select COUNT(emp_id) from tbl_employee";
							$r = mysqli_query($con,$sel);
							$n = mysqli_fetch_row($r);
							*/
							$department = "Pure Science & Humanities";
							$sel = "select * from tbl_employee where department='".$department."'";
							$res = mysqli_query($con, $sel);
							if(mysqli_num_rows($res)>0)
							{
								while($row=mysqli_fetch_assoc($res))
								{
									echo"
									<tr style='border:1px solid #dee2e6;font-size:16px;'>	
										<td role='row'> ".$row['emp_id']." </td>
										<td role='row'> ".$row['name']." </td>
										<td role='row'> ".$row['email']." </td>
										<td role='row'> ".$row['mobile']." </td>
										<td role='row'> ".$row['alter_mobile']." </td>
										<td role='row'> ".$row['designation']." </td>
										<td role='row'> ".$row['qualification']." </td>
										<td role='row'> ".$row['joining']." </td>
										<td role='row'> ".$row['gender']." </td>
										<td role='row'> <a href='employee_pic/".$row['photo']."'><img src='employee_pic/".$row['photo']."' height='50px'> </a></td>
										<td role='row'> <a href='employee_edit.php'><img src='images/edit_icon.png' height='25' > </a></td>
										<td role='row'> <a href='employee_delete.php'> <img src='images/Delete.ico' height='25' > </a></td>
									</tr>";
								}
							}
							else
							{
								echo "<tr><td colspan='12'><p class='h3 text-center'>No Record Found....</p></td></tr>";
							}
						}
					?>
					</tbody>
				</table>
				<!-- Pure Science & Humanities Employees Ends  -->
				</div>
				
			</div>
			</div>
		</div>
		
		<div class="row" style="min-height:100px;margin-top:10px;background:#88ff00;">
			<div class="col-sm-4 mx-auto">
				<p></p>
				<br/>
				<p class="h5 text-center"><i class="fa fa-laptop"></i> Developed By : Amit Kumar <i class="fa fa-laptop"></i></p>
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