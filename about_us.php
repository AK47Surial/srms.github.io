<?php
	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Govt Polytechic Jaunpur/home</title>
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
		html
		{
			scroll-behavior : smooth;
		}
		#overlay{
			background : rgba(0,0,0,0.7);
			padding : 10px;
			text-align : center;
			position : absolute;
			margin-left : -15px;
			bottom : 0;
		}
		
		
		.photos .card img{			
			filter : grayscale(100%);
		}
		.photos .card img:hover  {
			filter : grayscale(0%);
			transition : 1s ease;
		}
		</style>
		
		
	</head>
	<body class="bg-warning">
		<div class="outer container-fluid" id="top">
			<div class="header row" style="padding-bottom:10px;background:#07ad39;" align="center"> 
				<div class="col-sm-3">
					<img src="images/logo.png" height="200px" class="w3-animate-zoom" style="margin-top:30px;"/>
				</div>
				<div class="col-sm-8">
					<p class="w3-animate-zoom display-4" style="padding-top:50px;font-family:sans-serif;color:"> Student Result Management System (SRMS) </p>
				</div>
				<div class="col-sm-1">
					
				</div>
			</div>
	<!-- Menu bar started here... -->
	<div class="row">
	<div class="w-100">
	<nav class="navbar navbar-expand-sm sticky-top" style="background:#07ad39">
		<nav class="navbar navbar-expand-lg navbar-light w3-animate-left">
			<a class="navbar-brand hvr-float text-warning" href="https://www.gpjaunpur.org/" style="font-size:22px;font-family:sans-serif;" target="_blank" ><i class="fa fa-university"></i> Government Polytechnic Jaunpur </a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
	
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="nav navbar-nav mr-auto">
			<li class="nav-item" style="font-size:20px;">
				<a class="nav-link hvr-wobble-vertical fa fa-home" href="./index.php"><span id="font_family"> Home </span><span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item" style="font-size:20px;">
				<a class="nav-link hvr-wobble-vertical fa fa-download" href="./show_result.php"><span id="font_family"> Results </span></a>
			</li>
			<li class="nav-item dropdown" style="font-size:20px;">
				<a class="nav-link dropdown-toggle hvr-wobble-vertical fa fa-sign-in" href="#" id="navbardrop" data-toggle="dropdown">
				<span id="font_family">Login</span>
				</a>
				<div class="dropdown-menu bg-dark" style="font-size:20px;">
					<a class="dropdown-item text-success" href="./student_login.php"> Student Login </a>
					<a class="dropdown-item text-success" href="./employee_login.php"> Employee Login </a>
					<a class="dropdown-item text-success" href="admin_login.php"> Admin Login </a>
				</div>
			</li>
			<li class="nav-item" style="font-size:20px;">
				<a class="nav-link hvr-wobble-vertical fa fa-phone" href="./contact_us.php"><span id="font_family"> Contact Us </span></a>
			</li>
			<li class="nav-item active" style="font-size:20px;">
				<a class="nav-link hvr-wobble-vertical fa fa-info-circle text-warning" href="./about_us.php"><span id="font_family">  About Us </span></a>
			</li>
			</ul>
		</div>
	</nav>
	</nav>
	
	</div>
	</div>
	<!-- Menu bar ends here... -->
	
	<div class="container-fluid bg-warning" style="min-height:auto;">	
		<p></p>
		<p class="h1 text-center text-danger"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-images" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M12.002 4h-10a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1zm-10-1a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2h-10z"/>
  <path d="M10.648 8.646a.5.5 0 0 1 .577-.093l1.777 1.947V14h-12v-1l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71z"/>
  <path fill-rule="evenodd" d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM4 2h10a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1v1a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2h1a1 1 0 0 1 1-1z"/>
</svg> <b>Photo Gallery</b></p>
		<br/>
		<div class="row" style="min-height:auto;padding-bottom:10px;">
		<?php
			$con = mysqli_connect('localhost','root','','srms',3306);
			if(!$con)
			{
				echo "connection error...";
			}
			else
			{
				$sel = 'select * from tbl_gallery';
				$res = mysqli_query($con, $sel);
				if(mysqli_num_rows($res)>0)
				{
					while($row=mysqli_fetch_assoc($res))
					{
					echo"	
					<div class='col-sm-4 w3-animate-right hvr-float photos' style='min-height:280px;'>
						<a href='gallery_pic/".$row['name']."'>
						<div class='card' style='border:3px solid green;min-height:256px;box-shadow:1px 1px 10px 2px #fff'>
							<img src='gallery_pic/".$row['name']."' height='250px'>
						</div>
						</a>
						<div class='card-body'>
							<p class='h5 text-white'>".$row['title']."</p>
						</div>
					</div>
					";
					}
				}
			}
		?>
			
	</div>
		
	<!--	Footer started here.... 	-->
	
	<div class="row bg-dark" style="">
		<div class="col-sm-4" style="margin-top:10px;margin-bottom:10px;">
		<div class="card" style="box-shadow : 1px 1px 10px 4px;">
			<div class="card-body">
				<h5 class="card-title text-success"><span class="fa fa-university"></span> About Institute </h5>
				<p class="card-text text-justify">Govt Polytechnic, Jaunpur was established in 1984. The Institute was started with only one branch i.e. Diploma Pharmacy with admission capacity of 40 students but now it is running two other disciplines of engineering i.e. Diploma in Electronics Engineering. and Diploma in Computer Science/Engineering.</p>
			</div>
		</div>
		</div>
		<div class="col-sm-4" style="margin-top:10px;margin-bottom:10px;">
			<div class="card" style="box-shadow : 1px 1px 10px 4px;">
			<div class="card-body">
				<h5 class="card-title text-success"><span class="fa fa-users"></span> Our Mission</h5>
				<p class="card-text text-justify"> "We are evolving a new methodology of education that we call IBA, It represents Introspection, Breakthrough and Achievement. Our focus is to groom students as a complete personality that enables them to use highest technology and remain ethically strong." <br/>Official Website : <a href="https://www.gpjaunpur.org/" target="_blank" class="text-success">www.gpjaunpur.org</a></p>
			</div>
		</div>
		</div>
		<div class="col-sm-4" style="margin-top:10px;margin-bottom:10px;">
			<div class="card" style="box-shadow : 1px 1px 10px 4px;">
			<div class="card-body">
				<h5 class="card-title text-success"><span class="fa fa-phone-square"></span> Contact Us</h5>
				
				<p class="card-text"><i class="fa fa-user"></i> Principal : Raj Kumar<br/><i class="fa fa-address-card"></i> Addresss : Govt. Polytechnic, Jaunpur - Varanasi  Highway  Jagdishpur, Jaunpur 222002 <br/><i class="fa fa-mobile"></i> Phone &nbsp;&nbsp;: 05452- 261644/45  <br/><i class="fa fa-envelope"></i> Email &nbsp;: govtpolyjnp@yahoo.co.in <br/><i class="fa fa-fax"></i> Fax  &nbsp;&nbsp;&nbsp;&nbsp;  : 05452-261645</p>
			</div>
		</div>
		</div>
	</div>
	<!-- Footer Ends here... -->
	
	<!--	About Developer		-->
	
	<div class="row bg-dark" style="padding-bottom:20px;">
		<div class="col-sm-1">	</div>
		<div class="col-sm-5 text-white h5" style="margin-top:10px;"> Copyright <span class="fa fa-copyright"></span> : Government Polytechic Jaunpur	</div>
		<div class="col-sm-4 text-white h5" style="margin-top:10px;"><span class="fa fa-file"></span> Developed By : Amit Kumar	</div>
		<div class="col-sm-1"></div>
		<div class="col-sm-1 h2 text-right"><a href="#top" class="text-warning"><i class="fa fa-level-up"></i></a></div>
	</div>
	
	<!--	About Developer		-->
		</div>
	</body>
</html>