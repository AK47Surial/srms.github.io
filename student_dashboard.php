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
		<div class="container" style="min-height:800px;">
			<br/>
			<br/>
			<div class="row" style="min-height:800px;">
					<?php
						$con = mysqli_connect('localhost','root','','srms',3306);
					if(!$con)
					{
						echo "Connetion Error...";
					}
					else
					{
						if(isset($_GET['enroll']))
						{
							$enroll= $_GET['enroll'];
							$dob= $_GET['dob'];
							$s = "select * from tbl_student where enroll_id='".$enroll."' and dob='".$dob."'";
							$res = mysqli_query($con, $s);
						if(mysqli_num_rows($res)>0)
						{
							while($row=mysqli_fetch_assoc($res))
							{
					echo"
					<div class='container'>
					<span class='h1 text-center' style='width:800px;'>Board of Technical Education Uttar Pradesh</span>
					<span style='margin-left:220px;'><img src='student_pic/".$row['photo']."' height='150px' width='150px' alt='student_pic'></span>
					<br/>
					<br/>
					<table class='table table-bordered table-hover'>
					<tr>
					<tr>
						<th style='width:250px;'> Enrollment No. </th>
						<th colspan='2'> ".$row['enroll_id']."</th>
					</tr>
					<tr>
						<th style='width:250px;'> Session </th>
						<th colspan='2'> ".$row['session']."</th>
					</tr>
					<tr>
						<th style='width:250px;'> Branch Name </th>
						<th colspan='2'> ".$row['branch']."</th>
					</tr>
					<tr>
						<th style='width:250px;'> Name </th>
						<th colspan='2'> ".$row['name']."</th>
					</tr>
					<tr>
						<th style='width:250px;'> Father Name </th>
						<th colspan='2'> ".$row['fname']."</th>
					</tr>
					<tr>
						<th style='width:250px;'> Mother Name </th>
						<th colspan='2'> ".$row['mname']."</th>
					</tr>
					<tr>
						<th style='width:250px;'> Date of Birth </th>
						<th colspan='2'> ".$row['dob']."</th>
					</tr>
					<tr>
						<th style='width:250px;'> Mobile Number </th>
						<th colspan='2'> ".$row['mobile']."</th>
					</tr>
					<tr>
						<th style='width:250px;'> Gender </th>
						<th colspan='2'> ".$row['gender']."</th>
					</tr>";
							}
						}
						}
					}
					?>
				</table>
				</div>
			</div>
			<!--	About Developer		-->
	
			<div class="row" style='margin-bottom:30px;'>
				<div class="col-sm-6 text-warning h4" style="margin-top:10px;"> Copyright <span class="fa fa-copyright"></span> : Government Polytechic Jaunpur</div>
				<div class="col-sm-6 text-warning h4" style="margin-top:10px;"><span class="fa fa-file"></span> Developed By : Amit Kumar	</div>
				
			</div>
	
		<!--	About Developer		-->
		</div>
	</body>
</html>