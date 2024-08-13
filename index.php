
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
	
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/logo.jpg">
	
</head>
<body>
<header><?php include "nav.php"; ?></header>
		<?php
		
		$sql = "SELECT COUNT(UserName) AS totalu FROM user_info";
		$sql1 = "SELECT COUNT(UserName) AS totale FROM expert_info";
		$result = $strconn->query($sql);
		$result1 = $strconn->query($sql1);
			$row = $result->fetch_assoc();
			$row1 = $result1->fetch_assoc();
			$totalUsers = $row["totalu"];
			

		



		?>
	<section class="slider-area ">
            <div class="slider-active">
               
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-12">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay="0.2s">Welcome <br>To Admin account </h1>
									<h1><?php echo '+'.$totalUsers.' user ';?> </h1>
								</div>
								<div id="courses">
								<section data-animation="fadeInLeft" data-delay="0.4s">
									
									<div class="row">
										<div class="col-md-4">
											<div class="featured-box">
												<a href="chapter.php">
												<i class="fa fa-cogs fa-2x"></i>
												<div class="text">
													<h3>Add Chapter</h3>	
												</div>
												</a>
											</div>
										</div>
										<div class="col-md-4">
											<div class="featured-box">
												<a href="suggestion.php">
												<i class="fa fa-cogs fa-2x"></i>
												<div class="text">
													<h3>Suggestions</h3>
													
												</div>
												</a>
											</div>
										</div>
										<div class="col-md-4">
											<div class="featured-box">
												<a href="subject.php">
												<i class="fa fa-cogs fa-2x"></i>
												<div class="text">
													<h3>Add Subject</h3>
													
												</div>
												</a>
											</div>
										</div>
								
								</div>
								<div class="col">

								</div>
								</div>
									<div class="row">
										
										<div class="col-md-4">
											<div class="featured-box">
												<a href="manageuser.php">
												<i class="fa fa-cogs fa-2x"></i>
												<div class="text">
													<h3>Manage Users</h3>
													
												</div>
												</a>
											</div>
										</div>
										<div class="col-md-4">
											<div class="featured-box">
												<a href="managechapter.php">
												<i class="fa fa-cogs fa-2x"></i>
												<div class="text">
													<h3>Manage Chapter</h3>
													
												</div>
												</a>
											</div>
										</div>
								
								</div>
								
									<div class="row">
										
										<div class="col-md-4">
											<div class="featured-box">
												<a href="addadmin.php">
												<i class="fa fa-cogs fa-2x"></i>
												<div class="text">
													<h3>Add Admin</h3>
													
												</div>
												</a>
											</div>
										</div>
										<div class="col-md-4">
											<div class="featured-box">
												<a href="feedback.php">
												<i class="fa fa-cogs fa-2x"></i>
												<div class="text">
													<h3>Feedback</h3>
													
												</div>
												</a>			
									    </div>
									</div>
								</div>
								</section>
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