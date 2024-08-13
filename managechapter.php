<html>
<head>
	<meta charset="utf-8">

    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo.jpg">
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
		else{ echo "<div class='alert alert-danger' role='alert'>Something went wrong try login again.</div>";

		}
	
	?>
	<section class="slider-area ">
		<div class="slider-active">
			<div class="single-slider slider-height d-flex align-items-center">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 col-md-12">
							<div class="hero__caption">
								<h1 data-animation="fadeInLeft" data-delay="0.2s">Manage chapters</h1>
							</div>
						</div>
					</div>	
						<div class="container">
							<div class="row">
								<div class="col-sm-8">
									<form method="POST" action="">
									<table class="table table-bordered" style="color: white;">
										<tr>
											<th>Subject</th>
											<th>Title</th>
											<th>Informations</th>
										</tr>
										<?php
											$query = "SELECT subject,title,info FROM chapter";
											$result = mysqli_query($strconn,$query);
											while($row = mysqli_fetch_array($result))
											{
												$subject = $row[0];
												$title= $row[1];
												$info = $row[2];
												
												echo '<tr>';
												echo '<td>'.$subject.'</td>';
												echo '<td>'.$title.'</td>';
												echo '<td>'.$info.'</td>';
												
										
												echo "<td><a class='btn' href=\"deletechapter.php?title=".$row[1]."\">Delete</a></td>";
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