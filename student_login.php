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
	</head>
	<body>
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
			<a class="navbar-brand hvr-float text-warning" href="https://www.gpjaunpur.org/" style="font-size:22px;font-family:sans-serif;" target="_blank"><i class="fa fa-university"></i> Government Polytechnic Jaunpur </a>
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
			<li class="nav-item dropdown active" style="font-size:20px;">
				<a class="nav-link dropdown-toggle hvr-wobble-vertical fa fa-sign-in text-warning" href="#" id="navbardrop" data-toggle="dropdown">
				<span id="font_family">Login</span>
				</a>
				<div class="dropdown-menu bg-dark active" style="font-size:20px;">
					<a class="dropdown-item text-warning" href="./student_login.php"> Student Login </a>
					<a class="dropdown-item text-success" href="./employee_login.php"> Employee Login </a>
					<a class="dropdown-item text-success" href="admin_login.php"> Admin Login </a>
				</div>
			</li>
			<li class="nav-item" style="font-size:20px;">
				<a class="nav-link hvr-wobble-vertical fa fa-phone" href="./contact_us.php"><span id="font_family"> Contact Us </span></a>
			</li>
			<li class="nav-item" style="font-size:20px;">
				<a class="nav-link hvr-wobble-vertical fa fa-info-circle" href="./about_us.php"><span id="font_family">  About Us </span></a>
			</li>
			</ul>
		</div>
	</nav>
	</nav>
	
	</div>
	</div>
	<!-- Menu bar ends here... -->
	
	<!-- Result Code Started here... -->
	
	<div class="row bg-dark" style="min-height:500px;" id="font_family">	
		<div class="col-sm-5 bg-dark" style="margin:0px auto;min-height:450px;">
			<br/>
			<?php
			if(isset($_GET['in_msg']))
			{
				$msg = $_GET['in_msg'];
				if($msg=="Password Successfully Updated...")
				{
					echo "
					<div class='alert alert-dismissible fade show col-sm-10 mx-auto' role='alert' style='background:#fff;color:green;border:2px solid green;'>
						<strong class='h5'>Congratulation!</strong> ".$msg.".
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
						</button>
					</div>";
				}
				else
				{
					echo "
					<div class='alert alert-dismissible fade show col-sm-10' role='alert' style='background:#fff;color:red;border:2px solid red;'>
						<strong class='h5'>Warning!</strong> ".$msg.".
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
						<span aria-hidden='true'>&times;</span>
						</button>
					</div>";
				}
				
			}
		?>
			
			<p class="h1 text-warning text-center">
			<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-book-half" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M12.786 1.072C11.188.752 9.084.71 7.646 2.146A.5.5 0 0 0 7.5 2.5v11a.5.5 0 0 0 .854.354c.843-.844 2.115-1.059 3.47-.92 1.344.14 2.66.617 3.452 1.013A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.276-.447L15.5 2.5l.224-.447-.002-.001-.004-.002-.013-.006-.047-.023a12.582 12.582 0 0 0-.799-.34 12.96 12.96 0 0 0-2.073-.609zM15 2.82v9.908c-.846-.343-1.944-.672-3.074-.788-1.143-.118-2.387-.023-3.426.56V2.718c1.063-.929 2.631-.956 4.09-.664A11.956 11.956 0 0 1 15 2.82z"/>
  <path fill-rule="evenodd" d="M3.214 1.072C4.813.752 6.916.71 8.354 2.146A.5.5 0 0 1 8.5 2.5v11a.5.5 0 0 1-.854.354c-.843-.844-2.115-1.059-3.47-.92-1.344.14-2.66.617-3.452 1.013A.5.5 0 0 1 0 13.5v-11a.5.5 0 0 1 .276-.447L.5 2.5l-.224-.447.002-.001.004-.002.013-.006a5.017 5.017 0 0 1 .22-.103 12.958 12.958 0 0 1 2.7-.869z"/>
</svg>
			
			<u><b>Student Login</b></u></p>
			<br/>
			<form action="student_login_code.php" method="post">
					<div class="form-row text-white">
					<div class="form-group col-sm-10 h4">
						<label for="inputName4">Enrollment No.</label>
						<br/>
						<br/>
						<input type="text" class="form-control" name="enroll" id="inputName4" placeholder="Enrollment No." required autofocus>
					<br/>
						<labe1l for="inputDate4">Date of Birth</label>
						<br/>
						<br/>
						<input type="text" class="form-control" name="dob" id="inputDate4" required placeholder="Date of Birth">
					</div>
					</div>
					<br/>
					<button type="submit" class="btn btn-warning"><span class="fa fa-sign-in"> <b id="font_family">Login</span></b></button>
				</form>
		</div>
	</div>
	
	<!-- Result Code Ends here... -->
	
	<!--	Footer started here.... 	-->
	
	<div class="row bg-success" style="padding-bottom:20px;">
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
	
	<div class="row bg-dark">
		<div class="col-sm-1">	</div>
		<div class="col-sm-5 text-white" style="margin-top:10px;"> Copyright <span class="fa fa-copyright"></span> : Government Polytechic Jaunpur	</div>
		<div class="col-sm-4 text-white" style="margin-top:10px;"><span class="fa fa-file"></span> Developed By : Amit Kumar	</div>
		<div class="col-sm-1"></div>
		<div class="col-sm-1 h2 text-right"><a href="#top" class="text-warning"><i class="fa fa-level-up"></i></a></div>
	</div>
	
	<!--	About Developer		-->
		</div>
	</body>
</html>