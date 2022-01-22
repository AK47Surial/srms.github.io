<?php
		$roll_no = $_POST['roll_no'];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Marksheet </title>
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
			table,tr,th,td
			{
				border : 2px solid;
			}
			p
			{
				padding-left:5px;
			}
		</style>
	</head>
	<body>
		<div class="container-fluid" style="min-height:700px;">
			<br/>
			<br/>
			<div class="container" id="markp">
				<table>
					<tr>
					<th>
						<img src="images/logo.png" height="120px;">
						</th>
						<th colspan='3'><p class="h1 text-center"> BOARD OF TECHNICAL EDUCATION UTTAR PRADESH LUCKNOW</p></th>
					</tr>
					<tr>
						<th colspan='4'><p class="h3 text-center">MARK SHEET</p></th>
					</tr>
					<?php
					$con = mysqli_connect('localhost','root','','srms',3306);
					if(!$con)
					{
						echo "Connetion Error...";
					}
					else
					{
						$s = "select * from tbl_marksheet where roll_no='".$roll_no."'";
						$res = mysqli_query($con, $s);
						if(mysqli_num_rows($res)>0)
						{
							while($row=mysqli_fetch_assoc($res))
							{
							echo"
						<tr>
							<th width='180px'><p> INSTITUTE NAME </p></th>
							<th colspan='3'><p> ".$row['clg_name']."</p></th>
						</tr>
						<tr>
							<th width='180px'><p> BRANCH NAME </p></th>
							<th colspan='3'><p> ".$row['branch']."</p></th>
						</tr>
						<tr>
							<th width='180px'><p> STUDENT NAME </p></th>
							<th colspan='3'><p> ".$row['name']."</p></th>
						</tr>
						<tr>
							<th width='180px'><p> ROLL NUMBER </p></th>
							<th colspan='1'><p> ".$row['roll_no']."</p></th>
							<th width='180px'><p> ENROLLMENT NO.</p></th>
							<th colspan='1'><p> ".$row['enroll_no']."</p></th>
						</tr>";	
							}
						}
						else
						{
							echo "Not Registered";
						}
					}
					?>
				</table>
				<table style="border-top:none;">
					<tr style="border-top:none;">
						<th style="border-top:none;" width='180px' rowspan='2'><p> PAPER CODE </p></th>
						<th style='border-top:none;' width='500px;' rowspan='2'><p> PAPER NAME </p></th>
						<th style='border-top:none;text-align:center;'colspan='3'><p> MARKS </p></th>
					</tr>
					<tr style='text-align:center;'>
						<th><p>MAXIMUM MARKS</p></th>
						<th><p>MINIMUM MARKS</p></th>
						<th><p>OBTAINED MARKS</p></th>
					</tr>
					<tr><th colspan='5'> <p class='text-center'> THEORY</p></th></tr>
					<?php
					$con = mysqli_connect('localhost','root','','srms',3306);
					if(!$con)
					{
						echo "Connetion Error...";
					}
					else
					{
						$p = "No";
						$s = "select * from tbl_marks where roll_no='".$roll_no."' and practical='".$p."'";
						$res = mysqli_query($con, $s);
						if(mysqli_num_rows($res)>0)
						{
							while($row=mysqli_fetch_assoc($res))
							{
							echo"
								<tr>
									<th><p class='text-center'> ".$row['paper_code']." </p></th>
									<th><p> ".$row['paper_name']." </p></th>
									<th><p class='text-center'> ".$row['max_marks']." </p></th>
									<th><p class='text-center'> ".$row['min_marks']." </p></th>
									<th><p class='text-center'> ".$row['obt_marks']." </p></th>
								</tr>
							";
							}
						}
					}
					?>
					
					<tr><th colspan='5'> <p class='text-center'> PRACTICAL</p></th></tr>
					<?php
					$con = mysqli_connect('localhost','root','','srms',3306);
					if(!$con)
					{
						echo "Connetion Error...";
					}
					else
					{
						$p = "Yes";
						$s = "select * from tbl_marks where roll_no='".$roll_no."' and practical='".$p."'";
						$res = mysqli_query($con, $s);
						if(mysqli_num_rows($res)>0)
						{
							while($row=mysqli_fetch_assoc($res))
							{
							echo"
								<tr>
									<th><p class='text-center'> ".$row['paper_code']." </p></th>
									<th><p> ".$row['paper_name']." </p></th>
									<th><p class='text-center'> ".$row['max_marks']." </p></th>
									<th><p class='text-center'> ".$row['min_marks']." </p></th>
									<th><p class='text-center'> ".$row['obt_marks']." </p></th>
								</tr>
							";
							}
						}
					}
					?>
					<tr><th colspan='5'> <p class='text-center'> RESULT - ELIGIBLE FOR NEXT SEMESTER </p></th></tr>
				</table>
				<br/>
				<br/>
			</div>
			<div class="container" style="margin-bottom:50px;">
			<p class="h3 text-right"><a href="show_result.php" style="color:#ff0060;"> View Another Result </a>
			&nbsp;
			<button id="printbtn" onclick="myfun()" style='color:#fff;background:#ff0060;width:120px;height:40px;font-size:22px;border:none;'>Print</button>
			</p>
			</div>
		</div>
		<script src="js/jquery.min.js"></script>
		<script>
		
			function myfun(btn){
				var backup = document.body.innerHTML;
				var divcontent = document.getElementById('markp').innerHTML;
				document.body.innerHTML = divcontent;
				window.print();
				document.body.innerHTML = backup;
			}
		</script>
	</body>
</html>