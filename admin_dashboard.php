<?php
	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin Dashboard</title>
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
		<div class="container-fluid" style="background:#88ff00;padding-top:10px;">
			<div id="mySidenav" class="sidenav">
				<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
				<a href="./admin_dashboard.php" class="text-white"><i class="fa fa-dashboard"></i> DashBoard</a>
				<a href="./student_list.php"><i class="fa fa-list-ul"></i> Student List</a>
				<a href="./employee_list.php"><i class="fa fa-th-list"></i> Employee List</a>
				<a href="./add_employee.php"><i class="fa fa-plus-square"></i>  Add Employee</a>
				<a href="./gallery.php"><i class="fa fa-photo"></i>  Upload Photos</a>
				<a href="./login_detail.php"><i class="fa fa-sign-in"></i>  Login Details</a>
				<a href="./adm_cpw.php"><i class="fa fa-lock"></i> Change Password</a>
				<a href="./admin_logout.php"><i class="fa fa-sign-out"></i> Logout</a>
			</div>
			
			<?php
					if(isset($_GET['in_msg']))
					{
						$msg = $_GET['in_msg'];
						echo "
						<div class='alert alert-dismissible bg-white' role='alert' style='border:2px solid green;color:green;'>
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
							<span class='h5'><strong> Message !</strong> $msg.</span>
						</div>
						";
					}
				?>
			
			<div id="main" style="background:#88ff00;">
				<span style="font-size:30px;cursor:pointer;color:green;text-shadow:5px 5px 10px;" onclick="openNav()" class="hvr-float" ><span style="color:#ffc107;">&#9776;</span> Welcome to Admin Dashboard <a href="employee_dashboard.php">....</a></span>
			</div>
			<div class="row" style="min-height:220px;">
				<div class="col-sm-3" style="margin-top:10px;margin-bottom:10px;" id="r_under">
					<a href="./admin_dashboard.php"><div class="card hvr-wobble-vertical" style="box-shadow:1px 1px 15px 8px #fff ;min-height:200px;background:url('images/dashboard.jpg');background-size:100% 100%;border:2px solid #90ed39;">
					<div class="col-sm-12" style="min-height:200px;background:rgba(127,255,0,0.7);">
						<br/>
						<br/>
						<br/>
						<p class="h3 text-white text-center"><i class="fa fa-dashboard"></i> DashBoard</p>
					</div>
					</div></a>
				</div>
				
				<div class="col-sm-3" style="margin-top:10px;margin-bottom:10px;" id="r_under">
					<a href="./student_list.php"><div class="card hvr-wobble-vertical" style="box-shadow:1px 1px 15px 8px #fff ;min-height:200px;background:url('images/banner6.jpg');background-size:100% 100%;border:2px solid #ed469d;">
					<div class="col-sm-12" style="min-height:200px;background:rgba(255,20,147,0.7);">
					<br/>
					<br/>
					<br/>
					<p class="h3 text-white text-center"><i class="fa fa-list-ul"></i> Student List</p>
						<?php
						$con = mysqli_connect('localhost','root','','srms',3306);
						$sel = "select COUNT(id) from tbl_student";
						$res = mysqli_query($con,$sel);
						$num = mysqli_fetch_row($res);
						echo "<div class='count1 h1 text-center text-white' data-from='0' data-to=".$num[0]." data-time='1500'>
							0					
						</div>";
					?>
					</div>
					</div></a>
				</div>
				<div class="col-sm-3" style="margin-top:10px;margin-bottom:10px;" id="r_under">
					<a href="./employee_list.php"><div class="card hvr-wobble-vertical" style="box-shadow:1px 1px 15px 8px #fff ;min-height:200px;background:url('images/962a77f1-5f41-410d-a10c-de57dbebafc8.jpg');background-size:100% 100%;border:2px solid #a329c7;">
					<div class="col-sm-12" style="min-height:200px;background:rgba(148,0,211,0.8);">
					<br/>
					<br/>
					<br/>
					<p class="h3 text-white text-center"><i class="fa fa-list-ol"></i> Employee List</p>
						<?php
						$con = mysqli_connect('localhost','root','','srms',3306);
						$sel = "select COUNT(emp_id) from tbl_employee";
						$res = mysqli_query($con,$sel);
						$num = mysqli_fetch_row($res);
						echo "<div class='count2 h1 text-center text-white' data-from='0' data-to=".$num[0]." data-time='1500'>
							0					
						</div>";
					?>
					
					</div>
					</div></a>
				</div>
				<div class="col-sm-3" style="margin-top:10px;margin-bottom:10px;" id="r_under">
					<a href="./add_employee.php"><div class="card hvr-wobble-vertical" style="box-shadow:1px 1px 15px 8px #fff ;min-height:200px;background:url('images/employees.jpg');background-size:100% 100%;border:2px solid #3264de;">
					<div class="col-sm-12" style="min-height:200px;background:rgba(51,102,255,0.7);">
					<br/>
					<br/>
					<br/>
					<p class="h3 text-white text-center"><i class="fa fa-plus-square"></i> Register Employee</p>
					<?php
						$con = mysqli_connect('localhost','root','','srms',3306);
						$sel = "select COUNT(emp_id) from tbl_employee";
						$res = mysqli_query($con,$sel);
						$num = mysqli_fetch_row($res);
						echo "<div class='count2 h1 text-center text-white' data-from='0' data-to=".$num[0]." data-time='1500'>
							0					
						</div>";
					?>
					</div>
					</div></a>
				</div>
			</div>
			
			<div class="row" style="min-height:220px;margin-bottom:20px;">
				<div class="col-sm-3" style="margin-top:10px;margin-bottom:10px;" id="r_under">
					<a href="./gallery.php"><div class="card hvr-wobble-vertical" style="box-shadow:1px 1px 15px 8px #fff; min-height:200px;background:url('images/google-photos.svg');background-size:100% 100%;border:2px solid #dc5310">
					<div class="col-sm-12" style="min-height:200px;background:rgba(255,10,20,0.7);">
						<br/>
						<br/>
						<br/>
						<p class="h3 text-white text-center"><i class="fa fa-photo"></i> Upload Photos</p>
						<?php
						$con = mysqli_connect('localhost','root','','srms',3306);
						$sel = "select COUNT(id) from tbl_gallery";
						$res = mysqli_query($con,$sel);
						$num = mysqli_fetch_row($res);
						echo "<div class='count3 h1 text-center text-white' data-from='0' data-to=".$num[0]." data-time='1500'>
							0					
						</div>";
					?>
					</div>
					</div></a>
				</div>
				
				<div class="col-sm-3" style="margin-top:10px;margin-bottom:10px;" id="r_under">
					<a href="./login_detail.php"><div class="card hvr-wobble-vertical" style="box-shadow:1px 1px 15px 8px #fff; min-height:200px;background:url('images/details.jpg');background-size:100% 100%;border:2px solid #d6562e;">
					<div class="col-sm-12" style="min-height:200px;background:rgba(255,25,0,0.8);">
					<br/>
					<br/>
					<br/>
					<p class="h3 text-white text-center"><i class="fa fa-sign-in"></i> Login Details</p>
					<?php
						$con = mysqli_connect('localhost','root','','srms',3306);
						$sel = "select COUNT(id) from tbl_admin_login";
						$res = mysqli_query($con,$sel);
						$num = mysqli_fetch_row($res);
						echo "<div class='count4 h1 text-center text-white' data-from='0' data-to=".$num[0]." data-time='1500'>
							0					
						</div>";
					?>
					</div>
					</div></a>
				</div>
				<div class="col-sm-3" style="margin-top:10px;margin-bottom:10px;" id="r_under">
					<a href="./adm_cpw.php"><div class="card hvr-wobble-vertical" style="box-shadow:1px 1px 15px 8px #fff; min-height:200px;background:url('images/fingerprint-2904774.jpg');background-size:100% 100%;border:2px solid #2f5578;">
					<div class="col-sm-12" style="min-height:200px;background:rgba(51,102,153,0.8);">
					<br/>
					<br/>
					<br/>
					<p class="h3 text-white text-center"><i class="fa fa-lock"></i> Change Password</p>
					</div>
					</div></a>
				</div>
				<div class="col-sm-3" style="margin-top:10px;margin-bottom:10px;" id="r_under">
					<a href="./admin_logout.php"><div class="card hvr-wobble-vertical" style="box-shadow:1px 1px 15px 8px #fff; min-height:200px;background:url('images/logout.png');background-size:100% 100%;border:2px solid #813300;">
					<div class="col-sm-12" style="min-height:200px;background:rgba(128,0,0,0.8);">
					<br/>
					<br/>
					<br/>
					<p class="h3 text-white text-center"><i class="fa fa-sign-out"></i> Logout</p>	
					
					</div>
					</div></a>
				</div>
				
			</div>
			<div class="row" style="min-height:100px;margin-top:10px;background:#88ff00;">
				<div class="col-sm-4 mx-auto">
					<p></p>
					<br/>
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
				
				(function ($){
					$.fn.counter = function() {
					const $this = $(this),
					numberFrom = parseInt($this.attr('data-from')),
					numberTo = parseInt($this.attr('data-to')),
					delta = numberTo - numberFrom,
					deltaPositive = delta > 0 ? 1 : 0,
					time = parseInt($this.attr('data-time')),
					changeTime = 10;
    
					let currentNumber = numberFrom,
					value = delta*changeTime/time;
					var interval1;
					const changeNumber = () => {
					currentNumber += value;
					//checks if currentNumber reached numberTo
					(deltaPositive && currentNumber >= numberTo) || (!deltaPositive &&currentNumber<= numberTo) ? currentNumber=numberTo : currentNumber;
					this.text(parseInt(currentNumber));
					currentNumber == numberTo ? clearInterval(interval1) : currentNumber;  
					}

					interval1 = setInterval(changeNumber,changeTime);
					}
				}(jQuery));

					$(document).ready(function(){
		
					$('.count-up').counter();
					$('.count1').counter();
					$('.count2').counter();
					$('.count3').counter();
					$('.count4').counter();
			
					new WOW().init();
				
					setTimeout(function () {
						$('.count5').counter();
					}, 3000);
			});
				
			</script>
   
			
		</div>
	</body>
</html>