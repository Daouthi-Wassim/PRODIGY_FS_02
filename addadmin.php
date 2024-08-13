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
		else
		{}
	?>
	<section class="slider-area ">
		<div class="slider-active">
			<div class="single-slider slider-height d-flex align-items-center">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 col-md-12">
							<div class="hero__caption">
								<h1 data-animation="fadeInLeft" data-delay="0.2s">Add Admin</h1>
							</div>
						</div>
					</div>
						<form method="POST" action="#">
							<table border=0 align="center" style="color: white;">
								<tr>
									<td><label>Enter Your User Name :</label></td>
									<td><input type="text" class="form-control" name="username" placeholder="User Name"></td>
								</tr>
								<tr>
									<td><label>Enter Your Password :</label></td>
									<td><input type="password" class="form-control" name="pass" placeholder="Password"></td>
								</tr>
								<tr>
									<td></td>
									<td align="center"><button class="btn btn-block" name="btn">Register</button></td>
								</tr>
								<tr>
									<td></td>
									<td align="center"><button class="btn btn-block">Reset</button></td>
								</tr>
							</table>
						</form>
						<?php
							if(isset($_POST['btn']))
							{
							$username = $_POST['username'];
							$password = $_POST['pass'];
							$query = "INSERT INTO admin_info(UserName,Password) VALUES('$username','$password')";
							$result = mysqli_query($strconn,$query);
							if($result)
							{
								echo "<div class='alert alert-success' role='alert'>Successfull</div>";
							}
							else
							{
								echo "<div class='alert alert-danger' role='alert'>Something went wrong.Please try again later !</div>";
							}
							}
						?>
	</div>          
			</div>
		</div>
	</section>
	<?php
		include "footer.php";
	?>
</body>
</html>