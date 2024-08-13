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
								<h1 data-animation="fadeInLeft" data-delay="0.2s">Add Chapter</h1>
							</div>
						</div>
					</div>
					
					<form method="POST" action="#">
						<table border=0 align="center" style="color: white;">
							<tr>
								<td><label>Select Subject :</label></td>
								<td>
								<select name="chapter" class="form-control">
								<option>dev web</option>
								<option>dev mobile</option>
								<option>sécurite</option>
								<?php
					
								$query = "SELECT Title FROM subject";
								$result = mysqli_query($strconn,$query);
								while($row=mysqli_fetch_array($result))
								{
									$title = $row["Title"];
									echo'<option>'.$title.'</option>';
								
								}

								?>
								</td>
							</tr>
							<tr>
								<td><label>Enter Chapter Title :</label></td>
								<td><input type="text" class="form-control" name="title" placeholder="Subject Title"></td>
							</tr>
							<tr>
								<td><label>Enter Info :</label></td>
								<td><textarea rows="10" cols="50" class="form-control" 
							placeholder="Infromation" id="message" name="info" required
							data-validation-required-message="Please enter your message" minlength="5" 
							data-validation-minlength-message="Min 5 characters" style="resize:none;margin-top:10px"></textarea></td>
							</tr>
							<tr> 
								<td></td>
								<td align="center"><button class="btn btn-block" name="submit">Create Chapter</button></td>
							</tr>
							
							<tr>
								<td></td>
								<td  align="center"><button class="btn btn-block">Reset</button></td>
							</tr>
						</table>
					</form>
					<?php
						if(isset($_POST['submit']))
						{
							$subject = $_POST['chapter'];
							$title = $_POST['title'];
							$info = $_POST['info'];
							echo $subject,$title,$info;
							$query = "INSERT INTO chapter(Subject,Title,Info) VALUES('$subject','$title','$info')";
							$result = mysqli_query($strconn,$query);
							if($result)
							{

								echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
								echo '<script>';
								echo 'Swal.fire({';
								echo '  title: "Chapter".$title."added successfully!",';
								echo '  icon: "success"';
								echo '})';
								echo '</script>';

							}
							else
							{	
								echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
							echo '<script>';
							echo 'Swal.fire({';
							echo '  title: "You clicked the button!",';
							echo '  icon: "error"';
							echo '});';
							echo '</script>';
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