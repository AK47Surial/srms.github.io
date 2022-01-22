<?php
	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Change Password here...</title>
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
		<div class="container-fluid" style="background:#88ff00;">
			<div id="mySidenav" class="sidenav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<a href="./employee_dashboard.php"><i class="fa fa-dashboard"></i> DashBoard</a>
				<a href="./emp_student_list.php"><i class="fa fa-list-ul"></i> Student List</a>
				<a href="./add_student.php"><i class="fa fa-plus-square"></i>&nbsp;  Add Student</a>
				<a href="./add_result.php"><i class="fa fa-file-pdf-o"></i>&nbsp;  Add Result</a>
				<a href="./branch_list.php" class="text-white"><i class="fa fa-cogs"></i>  Branch List</a>
				<a href="./subject_list.php"><i class="fa fa-list-ol"></i>  Subject List</a>
				<a href="./emp_cpw.php"><i class="fa fa-lock"></i> Change Password</a>
				<a href="./employee_logout.php"><i class="fa fa-sign-out"></i> Logout</a>
			</div>
		</div>	
		
		<div id="main" style="background-color:#88ff00;">
			<span style="font-size:30px;cursor:pointer;color:green;text-shadow:5px 5px 10px;" onclick="openNav()" class="hvr-float" ><span style="color:#ffc107;">&#9776;</span> Display Branch List & Add Branch ...</span>
		</div>
		<!-- Side Nav Slide Code -->
		<div class="container-fluid">
		<div class="row" style="min-height:600px;background:url('images/books.jpg');background-size:100% 100%;">
			<div class="col-sm-6">
				<div class="card mx-auto" style="margin-top:15px;background:rgba(0,0,0,0.6);">
				<p></p>
				<br/>
				<p class="h2 text-center text-white"><i class="fa fa-plus-square"></i> Add Branch</p>
				<br/>
		<!-- Add subject form -->			
			<form action="branch_code.php" method="post">
				<div class="form-group col-sm-10 text-white mx-auto">
					<label for="exampleInputEmail1" class="h5"> Branch Code</label>
					<input type="text" name="code" class="form-control"  aria-describedby="emailHelp" placeholder="Branch Code" required>
				</div>
				<div class="form-group col-sm-10 text-white mx-auto">
					<label for="exampleInputPassword1" class="h5"> Branch Name</label>
					<input type="text" name="name" class="form-control" placeholder="Branch Name" required>
				</div>
				<div class="form-group col-sm-10 text-white mx-auto">
					<label for="exampleInputPassword1" class="h5"> About Branch</label>
					<textarea rows="3" class="form-control" name="about">
						
					</textarea>
				</div>
				<br/>
				<button type="submit" class="btn btn-light btn-sm"><i class="fa fa-send"></i> Submit</button>
				<br/>
			</form>
			
		<!-- Add subject form -->			
				</div>
			</div>
			<div class="col-sm-6">
				<div class="card mx-auto" style="margin-top:15px;background:rgba(0,0,0,0.6);padding-bottom:50px;margin-bottom:10px;">
				<p></p>
				<p class="h1 text-center text-success"><i class="fa fa-book"></i> Branch List</p>
				<div class="col-sm-12 mx-auto">
					<table class="table-hover table-sm">
						<thead> 	
							<tr class="h3 text-success" style="border:2px solid;">
								<th role="col"> S.N.</th>
								<th role="col"> Branch Code</th>
								<th role="col"> Branch Name</th>
							</tr>
						</thead>
						<tbody class="h4"  style="border:2px solid #fff;">
							<?php
								$con = mysqli_connect('localhost','root','','srms',3306);
								if(!$con)
								{
									echo "Connection Error ..";
								}
								else
								{
									$sel = "select * from tbl_branch";
									$res = mysqli_query($con, $sel);
									if(mysqli_num_rows($res)>0)
									{
										$i = 1; 
										while($row=mysqli_fetch_assoc($res))
										{
											echo "
											<tr class='text-white' style='border:2px solid;'>
												<td> ".$i." </td>
												<td> ".$row['branch_code']." </td>
												<td> ".$row['branch_name']." </td>
											</tr>
											";
											$i++;
										}
									}
									else
									{
										
									}
								}
							?>
						</tbody>
					</table>
				</div>
				</div>
			</div>
		</div>
		<div class="row" style="min-height:80px;background:#88ff00;">
			<div class="col-sm-4 mx-auto">
				<br/>
				<p class="h5 text-center"><i class="fa fa-laptop"></i> Developed By : Amit Kumar <i class="fa fa-laptop"></i> </p>
			</div>
		</div>
		</div>
		
		<!-- Change password code -->
		
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