<?php
							if(isset($_POST['branch']))
							{
							$branch = $_POST['branch'];
							$year = $_POST['year'];
							$con = mysqli_connect('localhost','root','','srms',3306);
							if(!$con)
							{
								echo "Connetion Error...";
							}
							else
							{
								$sel = "select * from tbl_subject where branch='".$branch."' and year='".$year."'";
								$res = mysqli_query($con, $sel);
								$i = 1;
								if(mysqli_num_rows($res)>0)
								{
									while($row=mysqli_fetch_assoc($res))
									{
										echo "<tr><td>".$i."</td>";
										echo "<td>".$row['name']."</td>";
										echo "<td>".$row['name']."</td></tr>";
										$i++;
									}
								}
								else
								{
									echo "<tr class='text-center text-white'><td colspan='3'>No record found</td></tr>";
								}
							}
							}
						?>