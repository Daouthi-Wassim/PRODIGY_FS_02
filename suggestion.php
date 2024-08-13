
<?php
		
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

<html>
<head>
	<meta charset="utf-8">
	
</head>
<body>
<header><?php include "nav.php"; ?></header>
	
	<br>
	<section class="slider-area ">
		<div class="slider-active">
			<div class="single-slider slider-height d-flex align-items-center">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 col-md-12">
							<div class="hero__caption">
								<h1 data-animation="fadeInLeft" data-delay="0.2s">Suggestion From Expert</h1>
							</div>
						</div>
					</div>
			<div class="row">
				<div class="col-sm-8">
	<?php
		$query = "SELECT ExpertID,Name,Email_id,Subject,Description FROM expertsugg";
		$result = mysqli_query($strconn,$query);
		echo "<table style='color: white;'>"; 
		while($row = mysqli_fetch_array($result))
		{
			$id=$row["ExpertID"];
			echo "<tr><td><b>Name : </b></td><td>".$row["Name"]."</td></tr>";
			echo "<tr><td><b>Email ID : </b></td><td>".$row["Email_id"]."</td></tr>";
			echo "<tr><td><b>Subject : </b></td><td>".$row["Subject"]."</td></tr>";
			echo "<tr><td><b>Suggestion : </b></td><td>".$row["Description"]."</td></tr>";
			
		}
		
		echo "</table>";
	?>
	</div>
	</div>
	</div>          
			</div>
		</div>
	</section>
	<br>
	<?php
		include "footer.php";
	?>
</body>
</html>