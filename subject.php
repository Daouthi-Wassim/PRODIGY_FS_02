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
	?>
	<section class="slider-area ">
		<div class="slider-active">
			<div class="single-slider slider-height d-flex align-items-center">
				<div class="container">
					<div class="row">
						<div class="col-xl-6 col-lg-7 col-md-12">
							<div class="hero__caption">
								<h1 data-animation="fadeInLeft" data-delay="0.2s">Add Subject</h1>
							</div>
						</div>
					</div>
			   
			
			<form method="POST" action="#">
				<table border=0 align="center" style="color: white;">
					<tr>
						<td><label >Enter Subject Title :</label></td>
						<td><input type="text" class="form-control" name="title" placeholder="Subject Title"></td>
					</tr>
					<tr>
						<td><label>Enter Info :</label></td>
						<td><textarea rows="10" cols="50" class="form-control" 
					placeholder="Infromation" id="message" name="info" required
					data-validation-required-message="Please enter your message" minlength="5" 
					data-validation-minlength-message="Min 5 characters" 
					maxlength="153" ></textarea></td>
					</tr>
					
					<tr>
						<td><label>Enter Detailed Info :</label></td>
						<td><textarea rows="10" cols="50" class="form-control" 
					placeholder="Infromation" id="message" name="dinfo" required
					data-validation-required-message="Please enter your message" minlength="5" 
					data-validation-minlength-message="Min 5 characters" 
					maxlength="850"></textarea></td>
					</tr>
					<tr>
						<td></td>
						<td align="center"><button name="submit" class="btn btn-block">Create Subject</button></td>
					</tr>
					
					<tr>
						<td></td>
						<td align="center"><button class="btn btn-block">Reset</button></td>
					</tr>
				</table>
			</form>

	
			</div>          
			</div>
		</div>
	</section>
	<?php
		if(isset($_POST['submit']))
		{
			$title = $_POST['title'];
			$info = $_POST['info'];
			$dinfo = $_POST['dinfo'];
			//echo $title,$info,$dinfo;
			$query = "INSERT INTO subject(Title,Info,Dinfo) VALUES('$title','$info','$dinfo')";
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
	<?php
		include "footer.php";
	?>
</body>
</html>