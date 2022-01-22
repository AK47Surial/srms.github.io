<?php
	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Admin Login </title>
		<link href="../images/college_logo.png" rel="icon"/>
		<link href="../css/home.css" rel="stylesheet" />
		<link href="../css/w3.css" rel="stylesheet" />
		<link href="../css/hover.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<script src="https://use.fontawesome.com/1e5c3fb66c.js"></script>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
		
		<!-- Password toggle -->
		
		<script>
			function myFunction() 
			{
				var x = document.getElementById("myInput");
				if (x.type === "password") {
					x.type = "text";
				} else {
					x.type = "password";
				}
			}
		</script>
		
	</head>
	<body class="bg-dark">	
	<!-- Admin Login Code Started here.. -->
	
		<div class="row w-100" style="min-height:620px;" id="font_family">		
			<div class="container">
			<?php
					if(isset($_GET['in_msg']))
					{
						$msg = $_GET['in_msg'];
						echo "
						<div class='alert alert-dismissible bg-white' role='alert' style='border:2px solid red;color:red;margin-top:10px;'>
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
							<span class='h5'><strong> Message !</strong> $msg.</span>
						</div>
						";
					}
			?>
			
			<div class="col-sm-5 bg-dark" style="margin:0px auto;min-height:400px;">
			<br/>
			<br/>
			<p class="h1 text-warning text-center"><b><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
			<path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
			</svg> <u>Admin Login</b></u></p>
			<br/>
			<form action="admin_login_code.php" method="post">
					<div class="form-row text-white">
					<div class="form-group col-sm-12 h4">
						<label for="inputName4">Email Address</label>
						<br/>
						<br/>
						<input type="text" class="form-control" name="email" id="inputName4" placeholder="Email Address" required autofocus>
					<br/>
						<label for="inputDate4">Password</label>
						<br/>
						<br/>
						<input type="password" class="form-control" name="password" id="myInput" placeholder="Password" required>
						<input type="checkbox" onclick="myFunction()"><span class="h6"> Show Password</span>

					</div>
					</div>
					<br/>
					<button type="submit" class="btn btn-warning"><span class="fa fa-sign-in"> <b id="font_family">Login</span></b></button>
				</form>
		</div>
	</div>
	</div>
	
	<!-- Admin Login Code Ends here... -->
	</body>
</html>