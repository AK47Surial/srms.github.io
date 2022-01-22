<?php
	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Add New Admin First Time  </title>
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
	
	<div class="row w-100" style="min-height:1050px;" id="font_family">	
		<div class="container">	
		
			<?php
				if(isset($_GET['adm_msg']))
				{
					$msg = $_GET['adm_msg'];
					if($msg=="Registration Successful")
					{
						echo "
						<div class='alert alert-dismissible bg-white' role='alert' style='border:2px solid green;color:green;margin-top:5px;'>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
						<span class='h5'><strong> Message !</strong> $msg.</span>
						</div>";
					}
					else
					{
						echo "
						<div class='alert alert-dismissible bg-white' role='alert' style='border:2px solid red;color:red;margin-top:5px;'>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
						<span class='h5'><strong> Message !</strong> $msg.</span>
						</div>";
					}
				}
				?>
	
		
		<div class="col-sm-5 bg-dark" style="margin:0px auto;">
			<br/>
						<p class="h1 text-warning text-center">
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						<path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
						</svg>
						<u><b>Admin Registration</b></u></p>
			<br/>
			<form action="add_admin_code.php" method="post" enctype="multipart/form-data">
					<div class="form-row text-warning">
					<div class="form-group col-sm-12 h5">
						<label for="inputName4">Admin Name</label>
						<br/>
						<input type="text" class="form-control" name="adm_name" id="inputName4" placeholder="Admin Name" required autofocus>
					<br/>
					<label for="inputName4">Email Address</label>
						<br/>
						<input type="email" class="form-control" name="adm_email" id="inputName4" placeholder="Email Address" required>
					<br/>
						<label for="inputDate4">Password</label>
						<br/>
						<input type="password" class="form-control" name="password" id="myInput" placeholder="Password" required>
						<input type="checkbox" onclick="myFunction()"><span class="h6"> Show Password</span>
					<br/>
					<br/>
					<label for="inputName4"> Mobile No.</label>
						<br/>
						<input type="number" class="form-control" name="adm_mobile" id="inputName4" placeholder="Mobile No." required >
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
					<button type="submit" name="submit" class="btn btn-warning"><span class="fa fa-sign-in"> <b id="font_family">Register</span></b></button>
				</form>
		</div>
	</div>
	</div>
	
	<!-- Result Code Ends here... -->
	
	
	
	</body>
</html>