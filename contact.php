<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
</head>

<body>
	<?php
		include "nav.php";$strconn=mysqli_connect("localhost","root","","projet");
	if(!$strconn)
		echo "Connection failed".mysqli_connect_error();
	else
	{
	
	}
	?>


	
	<section class="slider-area ">
		<div class="slider-active">
			<div class="single-slider slider-height d-flex align-items-center">
				<div class="container">	   
					<div class="row">
						<div class="col-xl-6 col-lg-7 col-md-12">
							<div class="hero__caption">
								<h1 data-animation="fadeInLeft" data-delay="0.2s">Contact Use<br></h1>
								<nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">contact</a></li> 
                                        </ol>
                                    </nav>
							</div>
						</div>
					</div>
			   
				</div>          
			</div>
		</div>
		<br>
	</section>
	<!-- container -->
	<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h3 class="section-title">Your Message</h3>
			<form name="sentMessage" id="contactForm"  novalidate method="post" action=""> 
			<div class="control-group">
			<div class="controls">
			<input type="text" class="form-control" 
			 name="name" value="<?php echo $username;?>" disabled />
			<p class="help-block"></p>
			</div>
			</div> 	
			<div class="control-group">
			<div class="controls">
			<input type="email" class="form-control" placeholder="Email" 
			name="email" required
			data-validation-required-message="Please enter your email" />
			</div>
			</div> 	
			<div class="control-group">
			<div class="controls">
			<textarea rows="10" cols="100" class="form-control" 
			placeholder="Message" name="message" required
			data-validation-required-message="Please enter your message" minlength="5" 
			data-validation-minlength-message="Min 5 characters" 
			maxlength="999" style="resize:none;margin-top:10px"></textarea>
			</div>
			</div> 	
			<br>
			<div id="success"> 
		<?php
		if(isset($_POST['btnsubmit']))
		{
			$name=$_POST['name'];
			$email=$_POST['email'];
			$message=$_POST['message'];
			$strInsert="INSERT INTO feedback(Description,name,email) VALUES('$message','$name','$email')";
			if(mysqli_query($strconn,$strInsert))
				echo "<div class='alert alert-success' role='alert'>Thanks for feedback.</div>";
			else
					echo "<div class='alert alert-danger' role='alert'>something wrong.</div>";

		}
		?>
		</div> <!-- For success/fail messages -->
			<button type="submit" class="btn btn-primary pull-right" name="btnsubmit" >Send</button><br /><br /><br /><br />
			</form>
			</div>
			</div>
	</div>

	<?php
		include "footer.php";
	?>


</body>
</html>
