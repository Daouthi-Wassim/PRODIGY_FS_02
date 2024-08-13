<html>
<head>
	<meta charset="utf-8">
	
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">
	
</head>
<body>
	<?php
		include "nav.php";
		$strconn=mysqli_connect("localhost","root","","projet");
		if(!$strconn)
			echo "Connection failed".mysqli_connect_error();
		else{}
		session_start();
		if(isset($_SESSION["username"]))
		{
			$username=$_SESSION["username"];
		}
		else{ echo 'session not started';}
	?>
	<section class="slider-area ">
		<div class="slider-active">
			<div class="single-slider slider-height d-flex align-items-center">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 col-md-12">
							<div class="hero__caption">
								<h1 data-animation="fadeInLeft" data-delay="0.2s">Manage User</h1>
							</div>
						</div>
					</div>
			   
						<div class="container">
							<div class="row">
								<div class="col-sm-8">
									<form method="POST" action="">
									<table class="table table-bordered" style="color: white;">
										<tr>
											<th>User ID</th>
											<th>First Name</th>
											<th>Last Name</th>
											<th>Gender</th>
											<th>Email ID</th>
											<th>User Name</th>
											<th>#</th>
											
										</tr>
										<?php
											$query = "SELECT User_id,FirstName,LastName,Gender,Email_id,UserName FROM user_info";
											$result = mysqli_query($strconn,$query);
											while($row = mysqli_fetch_array($result))
											{
												$id = $row[0];
												$fname = $row[1];
												$lname = $row[2];
												$gender = $row[3];
												$email = $row[4];
												$userName = $row[5];
												echo '<tr>';
												echo '<td>'.$id.'</td>';
												echo '<td>'.$fname.'</td>';
												echo '<td>'.$lname.'</td>';
												echo '<td>'.$gender.'</td>';
												echo '<td>'.$email.'</td>';
												echo '<td>'.$userName.'</td>';
										
												echo "<td><a class='btn' href=\"delete.php?id=".$row[0]."\">Delete</a></td>";
												echo '</tr>';
											}
										?>
									</table>
									</form>
								</div>
							</div>
						</div>

					</div>          
			</div>
		</div>
	</section>
	<?php
		include "footer.php";
	?>
</body>
</html>