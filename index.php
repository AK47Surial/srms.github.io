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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" integrity="sha512-TyUaMbYrKFZfQfp+9nQGOEt+vGu4nKzLk0KaV3nFifL3K8n7lzb8DayTzLOK0pNyzxGJzGRSw78e8xqJhURJ3Q==" crossorigin="anonymous" />
		<script src="https://use.fontawesome.com/1e5c3fb66c.js"></script>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		<style>
		html
		{
			scroll-behavior : smooth;
		}
		#loading
		{
			position : fixed;
			width  : 100%;
			height : 100vh;
			background : #fff url('images/Ripple-1s-200px.gif') no-repeat center;
			z-index : 99999;
		}
		</style>
	</head>
	<body onload="loader()">
	
	<!--  Preloader Code -->
		<div id="loading">
			
		</div>
	<!--  Preloader Code -->
	
		<div class="outer container-fluid" id="top">
			<div class="header row" style="padding-bottom:10px;background:#07ad39;" align="center"> 
				<div class="col-sm-4">
					<img src="images/logo.png" height="200px" class="w3-animate-zoom" style="margin-top:30px;"/>
				</div>
				<div class="col-sm-6">
					<p class="display-4 w3-animate-zoom h5" style="padding-top:50px;font-family:sans-serif;"> Government Polytechnic Jaunpur</p>
				</div>
				<div class="col-sm-2">
					
				</div>
			</div>
	<!-- Menu bar started here... -->
	<div class="row">
	<div class="w-100">
	<nav class="navbar navbar-expand-sm sticky-top" style="background:#07ad39">
		<nav class="navbar navbar-expand-lg navbar-light w3-animate-left">
			<a class="navbar-brand hvr-float text-warning" href="https://www.gpjaunpur.org/" style="font-family:sans-serif;" target="_blank" ><i class="fa fa-university"></i> Government Polytechnic Jaunpur </a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>
	
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="nav navbar-nav mr-auto">
			<li class="nav-item active" style="font-size:20px;">
				<a class="nav-link hvr-wobble-vertical fa fa-home text-warning" href="./index.php"><span id="font_family"> Home </span><span class="sr-only">(current)</span></a>
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
	
	<!-- Slider Started here... -->
	<div class="row">
		<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/first.jpg" class="d-block w-100" alt="first">
      <div class="carousel-caption d-none d-md-block" style="background:rgba(0,0,0,0.6);">
        <div class="spinner-grow text-muted"></div>
		<div class="spinner-grow text-success"></div>
		<div class="spinner-grow text-success"></div>
		<div class="spinner-grow text-info"></div>
		<div class="spinner-grow text-warning"></div>
		<div class="spinner-grow text-danger"></div>
		<div class="spinner-grow text-secondary"></div>
		<div class="spinner-grow text-light"></div>
		<h1>Students Result Management System</h1>
        <p>This web application is used for maintain the Records & Result of students.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/second.jpg" class="d-block w-100" alt="second">
      <div class="carousel-caption d-none d-md-block" style="background:rgba(0,0,0,0.6);">
	    <div class="spinner-grow text-muted"></div>
		<div class="spinner-grow text-success"></div>
		<div class="spinner-grow text-success"></div>
		<div class="spinner-grow text-info"></div>
		<div class="spinner-grow text-warning"></div>
		<div class="spinner-grow text-danger"></div>
		<div class="spinner-grow text-secondary"></div>
		<div class="spinner-grow text-light"></div>
        <h1>Students Result Management System</h1>
        <p>This web application is used for maintain the Records & Result of students.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/third.jpg" class="d-block w-100" alt="third">
      <div class="carousel-caption d-none d-md-block" style="background:rgba(0,0,0,0.6);">
	    <div class="spinner-grow text-muted"></div>
		<div class="spinner-grow text-success"></div>
		<div class="spinner-grow text-success"></div>
		<div class="spinner-grow text-info"></div>
		<div class="spinner-grow text-warning"></div>
		<div class="spinner-grow text-danger"></div>
		<div class="spinner-grow text-secondary"></div>
		<div class="spinner-grow text-light"></div>
        <h1>Students Result Management System</h1>
        <p>This web application is used for maintain the Records & Result of students.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
	<!-- Slider Ends here... -->
	
	<!--What I Want... -->
	<div class="row bg-success">
		<div class="col-sm-12"  style="margin-bottom:30px;">
		<br/>
		<h1 class="text-warning" style="padding-left:20px;"id="font_family"><span class="fa fa-graduation-cap"></span>Available Courses</h1>
		
		<div class="col-sm-4 bg-success" id="dept">
			<div class="card" style="margin-top:15px;margin-bottom:5px;box-shadow : 1px 1px 10px 4px;"  id="ani_one">
			<img src="images/our-mission.jpg" class="card-img-top hvr-float" alt="...">
		<div class="card-body">
			<p class="text-success h4"><span class="fa fa-laptop"> </span> Computer Science & Engineering<p>
			<p class="card-text text-justify">Computer Science Engineering (CSE) encompasses a variety of topics that relates to computation, like analysis of algorithms, programming languages, program design, software, and computer hardware. Computer Science engineering has roots in electrical engineering, mathematics, and linguistics.</p>
		</div>
		<ul class="list-group list-group-flush">
			<li class="list-group-item"> 3 Year's Diploma Course (Semester System)</li>
			<li class="list-group-item"> 75 seats are available </li>
			<li class="list-group-item"> Academic Qualification - High School <p></p></li>
		</ul>
		<div class="card-body">
			<a href="#" class="card-link btn bg-success text-white" role="button"> Lecturer's </a>
		</div>
		</div>
		</div>
		<div class="col-sm-4 bg-success" id="dept">
			<div class="card" style="margin-top:15px;margin-bottom:5px;box-shadow : 1px 1px 10px 4px;" id="ani_two">
				<img src="images/electronics.jpg" class="card-img-top hvr-float" alt="...">
			<div class="card-body">
				<p class="text-success h4"><span class="fa fa-cogs"> </span> Electronics Engineering<p>
				<p class="card-text text-justify"> Electronic engineering (electronics and communications engineering) is an electrical engineering discipline which utilizes nonlinear and active electrical components (such as semiconductor devices, especially transistors, diodes and integrated circuits) to design electronic circuits, devices, VLSI devices ..</p>
			</div>
			<ul class="list-group list-group-flush">
				<li class="list-group-item"> 3 Year's Diploma Course (Semester System)</li>
				<li class="list-group-item"> 75 seats are available </li>
				<li class="list-group-item"> Academic Qualification - High School </li>
			</ul>
			<div class="card-body">
				<a href="#" class="card-link btn bg-success text-white" role="button"> Lecturer's </a>
			</div>
			</div>
		</div>
		<div class="col-sm-4 bg-success" id="dept">
			<div class="card" style="margin-top:15px;margin-bottom:5px;box-shadow : 1px 1px 10px 4px;" id="ani_three">
				<img src="images/thermomete.jpg" class="card-img-top hvr-float" alt="...">
				<div class="card-body">
					<p class="text-success h4"><span class="fa fa-plus-square"> </span> Pharmacy<p>
					<p class="card-text text-justify">Pharmacy is the science and practice of discovering, producing, preparing, dispensing, and reviewing drugs, aiming to ensure the safe, effective, and affordable use of drugs. It is a miscellaneous science as it links health sciences with pharmaceutical sciences and natural sciences.</p>
				</div>
				<ul class="list-group list-group-flush">
					<li class="list-group-item"> 2 Year's Diploma Course (Annual System)</li>
					<li class="list-group-item"> 50 seats are available </li>
					<li class="list-group-item"> Academic Qualification - Intermediate with Biology or Mathematics </li>
				</ul>
				<div class="card-body">
					<a href="#" class="card-link btn bg-success text-white" role="button"> Lecturer's </a>
				</div>
			</div>
		</div>
		</div>
	</div>
	<!--What I Want... -->
	
	<!-- Admission.... -->
	<div class="row bg-success">
		<div class="col-sm-12">
		<div class="jumbotron bg-white" style="box-shadow : 1px 1px 10px 5px;" id="ani_four">
			<h1 class="text-success"><span class="fa fa-thumbs-up"></span> Admission</h1>
			<p class="lead text-justify"> Admission to annual system are offered by Joint Entrance Examination ( Polytechnic) conducted by joint Entrance Examination Council Lucknow. Online Admission forms are available at <a href="http://jeecup.org" class="text-success"> http://jeecup.org</a> from December to January every year. The Joint Entrance Examination (Polytechnic) is conducted on last Sunday of April every, declaration of result in the last week of May. The process of admission takes place in the month of June. </p>
			<a class="btn btn-lg bg-success text-white" href="#" role="button" >Learn more</a>
		</div>
		</div>
	</div>
	
	<!--  Admission ... -->
	
	<!--	Footer started here.... 	-->
	
	<div class="row bg-success" style="padding-bottom:20px;">
		<div class="col-sm-4" style="margin-top:10px;margin-bottom:10px;">
		<div class="card" style="box-shadow : 1px 1px 10px 4px;"  id="ani_five">
			<div class="card-body">
				<h5 class="card-title text-success"><span class="fa fa-university"></span> About Institute </h5>
				<p class="card-text text-justify">Govt Polytechnic, Jaunpur was established in 1984. The Institute was started with only one branch i.e. Diploma Pharmacy with admission capacity of 40 students but now it is running two other disciplines of engineering i.e. Diploma in Electronics Engineering. and Diploma in Computer Science/Engineering.</p>
			</div>
		</div>
		</div>
		<div class="col-sm-4" style="margin-top:10px;margin-bottom:10px;">
			<div class="card" style="box-shadow : 1px 1px 10px 4px;"  id="ani_six">
			<div class="card-body">
				<h5 class="card-title text-success"><span class="fa fa-users"></span> Our Mission</h5>
				<p class="card-text text-justify"> "We are evolving a new methodology of education that we call IBA, It represents Introspection, Breakthrough and Achievement. Our focus is to groom students as a complete personality that enables them to use highest technology and remain ethically strong." <br/>Official Website : <a href="https://www.gpjaunpur.org/" target="_blank" class="text-success">www.gpjaunpur.org</a></p>
			</div>
		</div>
		</div>
		<div class="col-sm-4" style="margin-top:10px;margin-bottom:10px;">
			<div class="card" style="box-shadow : 1px 1px 10px 4px;"  id="ani_seven">
			<div class="card-body">
				<h5 class="card-title text-success"><span class="fa fa-phone-square"></span> Contact Us</h5>
				
				<p class="card-text"><i class="fa fa-user"></i> Principal : Raj Kumar<br/><i class="fa fa-address-card"></i> Addresss : Govt. Polytechnic, Jaunpur - Varanasi  Highway  Jagdishpur, Jaunpur 222002 <br/><i class="fa fa-mobile"></i> Phone &nbsp;&nbsp;: 05452- 261644/45  <br/><i class="fa fa-envelope"></i> Email &nbsp;: govtpolyjnp@yahoo.co.in <br/><i class="fa fa-fax"></i> Fax  &nbsp;&nbsp;&nbsp;&nbsp;  : 05452-261645 <p></p></p>
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
	
	<!-- Animate on scroll -->
	
		<script type="text/javascript">
			
			$(document).ready(function(){
				$(window).scroll(function(){
					var positiontop = $(document).scrollTop()
					console.log(positiontop); 
					
					if((positiontop>200) && (positiontop<500))
					{
						$('#carouselExampleCaptions').addClass('animated slideInUp');
					}
					else if((positiontop>580) && (positiontop<1210))
					{
						$('#ani_one').addClass('animated bounceInLeft');
						$('#ani_three').addClass('animated bounceInRight');
						$('#ani_two').addClass('animated bounceIn');
					}
					else if((positiontop>1220) && (positiontop<1500))
					{
						$('#ani_four').addClass('animated bounceIn');
					}
					else if((positiontop>1510) && (positiontop<1700))
					{
						$('#ani_five').addClass('animated zoomInLeft');
						$('#ani_six').addClass('animated zoomIn');
						$('#ani_seven').addClass('animated zoomInRight');
					}
			});
			});
			
			var preloader = document.getElementById('loading');
			function loader()
			{
				preloader.style.display = "none";
			}
			
		</script>
	
	<!-- Animate on scroll -->
	
	</body>
</html>