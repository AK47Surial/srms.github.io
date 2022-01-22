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
		<div class="container-fluid">
			<div id="mySidenav" class="sidenav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<a href="./admin_dashboard.php"><i class="fa fa-dashboard"></i> DashBoard</a>
				<a href="./student_list.php"><i class="fa fa-list-ul"></i> Student List</a>
				<a href="./employee_list.php"><i class="fa fa-th-list"></i> Employee List</a>
				<a href="./add_employee.php"><i class="fa fa-plus-square"></i>  Add Employee</a>
				<a href="./gallery.php"><i class="fa fa-photo"></i>  Upload Photos</a>
				<a href="./login_detail.php"><i class="fa fa-sign-in"></i>  Login Details</a>
				<a href="./adm_cpw.php" class="text-white"><i class="fa fa-lock"></i> Change Password</a>
				<a href="./admin_logout.php"><i class="fa fa-sign-out"></i> Logout</a>
			</div>
		</div>	
		
		<div id="main" style="background-color:#88ff00;">
			<span style="font-size:30px;cursor:pointer;color:green;text-shadow:5px 5px 10px;" onclick="openNav()" class="hvr-float" ><span style="color:#ffc107;">&#9776;</span> Admin Can Change Password Here <a href="employee_dashboard.php">....</a></span></span>
		</div>
		<!-- Side Nav Slide Code -->
		
		<div class="container-fluid" style="min-height:660px;background:url('images/arts-build-close-up-273230.jpg');background-size:100% 100%;background-attachment:fixed;padding-top:10px;">
		
		
		<!-- Change password code -->
		<?php
				if(isset($_GET['msg']))
				{
					$msg = $_GET['msg'];
					if($msg=="Password Change Successfully...")
					{
						echo "<div class='alert alert-dismissible fade show col-sm-6 mx-auto' role='alert' style='background:#fff;color:green;border:2px solid green;'>
							<strong class='h5'>Congratulation!</strong> ".$msg.".
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
							</button>
						</div>";
					}
					else
					{
						echo "<div class='alert alert-dismissible fade show col-sm-6 mx-auto' role='alert' style='background:#ffb3b3;color:red;'>
							<strong class='h5'>Warning!</strong> ".$msg.".
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
							<span aria-hidden='true'>&times;</span>
							</button>
						</div>";
					}
				}
			?>
			<div class="col-sm-4 mx-auto" style="min-height:550px;border:1px solid #2db300;border-radius:10px;box-shadow:1px 1px 10px 0px #88ff00;background:rgba(0,0,0,0.6);">
				<br/>
				<p class="h1 text-center" style="color:#2db300;"> <b><u>Change Password</u></b></p>
				<br/>
				<form action="adm_cpw_code.php" method="post" class="text-white">
					<div class="form-group">
						<label for="exampleInputEmail1" class="h5">Email address</label>
							<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Address">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1" class="h5">Old Password</label>
							<input type="password" name="old_psw" class="form-control" id="exampleInputPassword1" placeholder="Old Password">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1" class="h5">New Password</label>
							<input type="password" name="new_psw" class="form-control" id="exampleInputPassword1" placeholder="New Password">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1" class="h5">Confirm Password</label>
							<input type="password" name="con_psw" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password">
					</div>
					<div class="form-group form-check">
						<input type="checkbox" name="check" class="form-check-input" id="exampleCheck1">
						<label class="form-check-label" for="exampleCheck1">Check to Verify</label>
					</div>
					
					<button type="submit" class="btn text-white border btn-sm" style="background:green;"> <i class="fa fa-send"></i> Submit</button>
				</form>
			</div>
			<div class="row" style="min-height:100px;margin-top:10px;background:#88ff00;">
				<div class="col-sm-4 mx-auto">
					<p></p>
					<p class="h4 text-dark text-center"><i class="fa fa-laptop"></i> Developed By - Amit Kumar <i class="fa fa-laptop"></i></p>
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