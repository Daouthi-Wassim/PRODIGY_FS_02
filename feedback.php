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
								<h1 data-animation="fadeInLeft" data-delay="0.2s">Feedback</h1>
							</div>
						</div>
					</div>
						<div class="container">
								<div class="row">
									<div class="col-sm-8">
						<?php
							$query = "SELECT * FROM feedback";
							$result = mysqli_query($strconn,$query);
							echo "<table style='color: white;'>"; 
							while($row = mysqli_fetch_array($result))
							{
								//$id=$row["ExpertID"];
								echo "<tr><td><b>Name : </b></td><td>".$row["name"]."</td></tr>";
								echo "<tr><td><b>Email ID : </b></td><td>".$row["email"]."</td></tr>";
								//echo "<tr><td><b>Subject : </b></td><td>".$row["Subject"]."</td></tr>";
								echo "<tr><td><b>Suggestion : </b></td><td>".$row["Description"]."</td></tr>";
							}
							echo "</table>";
						?>
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
