<!doctype html>
<html>
<head>
    <meta charset="utf-8">

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/animated-headline.css">
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
	<link rel="stylesheet" href="assets/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/slick.css">
	<link rel="stylesheet" href="assets/css/nice-select.css">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php
		$strconn=mysqli_connect("localhost","root","","projet");
		if(!$strconn)
			echo "Connection failed".mysqli_connect_error();
		else{}
	?>
   


    <main class="login-body" data-vide-bg="video1.mp4">
        <!-- Login Admin -->
        <form class="form-default" action="" method="POST">
            
            <div class="login-form">
                
                <div class="logo-login">
                    <a href="index.html"><img src="assets/img/logo.jpg" alt=""></a>
                </div>
                <h2>Login Here</h2>
                <div class="form-input">
                    <label for="name">User name</label>
                    <input class="form-control" type="text" name="id" placeholder="user name">
                </div>
                <div class="form-input">
                    <label for="name">Password</label>
                    <input class="form-control" type="password" name="pass" placeholder="Password" >
                </div>
                <div class="form-input pt-30">
                    <input type="submit" name="btnsubmit" value="login">
                </div>
                
                <a href="#" class="forget">Forget Password</a>
              
                <a href="register.php" class="registration">Registration</a>
            </div>
        </form>
       
    </main>

    <?php
	if(!empty($_POST['id'])&&!empty($_POST['pass']))
	{
		if(isset($_POST['btnsubmit']))
		{
			$name = $_POST["id"];
            $password =  $_POST["pass"];
			$query1 = "SELECT * FROM user_info WHERE UserName='$name' and password='$password'";
			$result1 = mysqli_query($strconn,$query1);
			$count1 = mysqli_num_rows($result1);
            $query2 = "SELECT * FROM expert_info WHERE UserName='$name' and Password='$password'";
            $result2 = mysqli_query($strconn,$query2);
            $count2 = mysqli_num_rows($result2);
            $query3= "SELECT * FROM admin_info WHERE UserName='$name' and Password='$password'";
			$result3 = mysqli_query($strconn,$query3);
			$count3 = mysqli_num_rows($result3);
			if($count1==1)
			{
				session_start();
				$_SESSION["username"]=$_POST['id'];
               
				echo("<script>location.href = 'user/index.php';</script>");
			}else if($count2==1){
                
                    session_start();
                    $_SESSION["username"]=$_POST['id'];
                    echo("<script>location.href = 'expert/index.php';</script>");
                
            }
            else if($count3==1){
                
			  
				session_start();
				$_SESSION["username"]=$_POST['id'];
				echo("<script>location.href = 'admin/index.php';</script>");
				
			   
            }
			else
			{
                echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
				echo '<script>';
				echo 'Swal.fire({';
				echo '  title: "Username or password is incorrect..Try again!",';
				echo '  icon: "error"';
				echo '});';
				echo '</script>';

                
			}
		}
	}
    ?>



    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/jquery.slicknav.min.js"></script>
    <script src="./assets/js/jquery.vide.js"></script>
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>
    <script src="./assets/js/gijgo.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>
    <script src="./assets/js/jquery.barfiller.js"></script>
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
    
    </body>
</html>