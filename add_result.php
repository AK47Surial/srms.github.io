<?php
	
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Add Student Result ...</title>
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
			<span style="font-size:30px;cursor:pointer;color:green;text-shadow:5px 5px 10px;" onclick="openNav()" class="hvr-float" ><span style="color:#ffc107;">&#9776;</span>  Add Student Results ...</span>
		</div>
		<div class="container-fluid" style="background: #f2f2f2;">
			<div class="row" style="min-height:auto;">
			<?php
					if(isset($_GET['msg']))
					{
						$msg = $_GET['msg'];
						if($msg="Add Result Successfully....")
						{
							echo "
							<div class='alert alert-dismissible bg-white col-sm-6 mx-auto' role='alert' style='border:2px solid green;color:green;margin-top:10px;'>
								<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
								<span class='h5'><strong> Congratulation !</strong> $msg.</span>
							</div>
						";
						}
						else
						{
							echo "
							<div class='alert alert-dismissible bg-white col-sm-6 mx-auto' role='alert' style='border:2px solid red;color:red;margin-top:10px;'>
								<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
								<span class='h5'><strong> Congratulation !</strong> $msg.</span>
							</div>
						";
						}
					}
				?>
			
				<div class="col-sm-12" style="min-height:465px;">
					<div class="col-sm-6 mx-auto">
						<p></p> 
						<p class="h2 text-center"> 	MARKSHEET </p> 
						<form class="form-inline" action="">
							<input type="text" class="form-control col-sm-10" name="enroll" placeholder="Enrollment Number" required autofocus> 
							<input type="button" class="btn btn-dark" value="Search">
						</form>
					</div>
          <?php
          if(isset($_GET['enroll']))
          {
            $enroll = $_GET['enroll'];
            $con = mysqli_connect('localhost','root','','srms',3306);
            if(!$con)
            {
              echo "Connection Error...";
            }
            else
            {
              $sel = "select * from tbl_student where enroll_id='".$enroll."'";
              $res = mysqli_query($con , $sel);
              if(mysqli_num_rows($res)>0)
              {
                while($row=mysqli_fetch_assoc($res))
                {
          echo "					
          <div class='container' style='min-height:1000px;'>
						<form class='form' action='add_result_code.php' method='post'>
							<fieldset>
								<legend style='border:1px solid;background:#f00f60;text-align:center;color:#fff;'>Personal Information</legend>
								<p></p>
  								<div class='row'>
    								<div class='col-sm-6'>
    									<label>INSTITUTE NAME</label>
	      								<input type='text' class='form-control' name='clg_name' placeholder='INSTITUTE NAME' value='GOVT. POLYTECHNIC, JAUNPUR CODE 4412'>
    								</div>
    								<div class='col-sm-6'>
    									<label>BRANCH NAME</label>
      									<input class='form-control' name='branch' value='".$row['branch']."' readonly >
    								</div>
  								</div>
  								<p></p>
  								<div class='row'>
  									<div class='col-sm-4'>
    									<label>STUDENT NAME</label>
      									<input class='form-control' name='std_name' value='".$row['name']."' readonly >
    								</div>
    								<div class='col-sm-4'>
    									<label>ROLL NUMBER</label>
	      								<input type='text' class='form-control' name='roll_no' placeholder='ROLL NUMBER'>
    								</div>
    								<div class='col-sm-4'>
    									<label>ENROLLMENT NO.</label>
      									<input type='text' class='form-control' name='enroll_no' placeholder='ENROLLMENT NO.' value=".$row['enroll_id']." readonly>
    								</div>
  								</div>
                  <p></p>
                  <legend style='border:1px solid;background:#f00f60;text-align:center;color:#fff;'>THEORY</legend>
                  ";
                  $branch = $row['branch'];
                  $sem = $row['semester'];
                }
              }
            } 
          echo"
                  <p></p>
                  <div class='row'>
                    <div class='col-sm-2'>
                      <label>PAPER CODE</label>
                    </div>
                    <div class='col-sm-4'>
                      <label>PAPER NAME</label>
                    </div>
                    <div class='col-sm-2'>
                      <label>MAX MARKS</label>
                    </div>
                    <div class='col-sm-2'>
                      <label>MIN MARKS</label>
                    </div>
                    <div class='col-sm-2'>
                      <label>OBT. MARKS</label>
                    </div>
                  </div>
                  <p></p>";


          $select = "select * from tbl_subject where branch_name='".$branch."' and semester='".$sem."'";
           $result = mysqli_query($con, $select); 
		   $c = mysqli_num_rows($result);
		   echo "<input type='hidden' name='count1' value='$c'>";
           if(mysqli_num_rows($result)>0)
           {
            while($rows=mysqli_fetch_assoc($result))
            {
              echo"
                  <p></p>
                  <div class='row'>
                    <div class='col-sm-2'>
                        <input type='text' minlength='1' maxlength='8' class='form-control' name='p_code[]' placeholder='PAPER CODE' required>
                    </div>
                    <div class='col-sm-4'>
                        <input class='form-control' name='sub_name[]' value='".$rows["sub_name"]."' readonly>
                    </div>
                    <div class='col-sm-2'>
                        <input type='text'  name='e_max[]' class='form-control text-center' placeholder='MAXIMUM MARKS' value=".$rows['e_max']." readonly>
                    </div>
                    <div class='col-sm-2'>
                        <input type='text' name='e_min[]' class='form-control text-center' placeholder='MANIMUM MARKS' value=".$rows['e_min']." readonly>
                    </div>
                    <div class='col-sm-2'>
                        <input type='text' name='obt_mark[]' minlength='1' maxlength='3' class='form-control' placeholder='OBTAINED MARKS' required>
                    </div>
                  </div>
                  <p></p>";
            }
           }
           else
           {
              echo "
                <div class='col-sm-4 mx-auto'>
                  <h1> No Record Found ! </h1>
                </div>
              ";
           }
           echo"
            <!-- PRACTICAL MARKS  -->
            <legend style='border:1px solid;background:#f00f60;text-align:center;color:#fff;'>PRACTICAL</legend>
           ";
           $practical = "Yes";
           $s = "select * from tbl_subject where branch_name='".$branch."' and semester='".$sem."' and practical='".$practical."'";
           $r = mysqli_query($con, $s);
		   $cn = mysqli_num_rows($r);
		   echo "<input type='hidden' name='count2' value='$cn'>";
           if(mysqli_num_rows($r)>0)
           {
              while($rw=mysqli_fetch_assoc($r))
              {
                echo"
                <p></p>
                  <div class='row'>
                    <div class='col-sm-2'>
                        <input type='text' minlength='1' maxlength='8' name='pp_code[]' class='form-control' placeholder='PAPER CODE' required>
                    </div>
                    <div class='col-sm-4'>
                         <input class='form-control' name='s_name[]' value='".$rw['sub_name']."' readonly >
                    </div>
                    <div class='col-sm-2'>
                        <input type='text' name='pp_max[]' class='form-control text-center' placeholder='MAXIMUM MARKS' value=".$rw['p_max']." readonly>
                    </div>
                    <div class='col-sm-2'>
                        <input type='text' name='pp_min[]' class='form-control text-center' placeholder='MINIMUM MARKS' value=".$rw['p_min']." readonly>
                    </div>
                    <div class='col-sm-2'>
                        <input type='number' name='pp_obt_mark[]' min='1' max='50'class='form-control' placeholder='OBTAINED MARKS' required>
                    </div>
                  </div>
                  <p></p>";
              }
           }
           else
           {
              echo "
                <div class='col-sm-4 mx-auto'>
                  <h1> No Record Found ! </h1>
                </div>
              ";
           }
		 echo"
  			<!-- PRACTICAL MARKS  -->			
  				
							</fieldset>
              <button class='btn text-white'style='background: #f00f60;'><i class='fa fa-send'></i> Register</button>
						</form>
					</div>
				</div>
			</div>
			";
		  }
		  ?>
        <div class="row" style="min-height: 100px;background: #88ff00;">
            <div class="col-sm-4 mx-auto">
                <p></p>
                <br/>
                <p class="h5 text-center"><i class="fa fa-laptop"></i>  Developed By : Amit Kumar <i class="fa fa-laptop"></i></p>
            </div>
        </div>
		</div>
		<!-- Side Nav Slide Code -->
		
			
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