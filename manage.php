<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
</head>
<body>
	<?php
		include "nav.php";
		
	?>

	<main>
        <!--? slider Area Start-->
		<section class="slider-area ">
		<div class="slider-active">

			<div class="single-slider slider-height d-flex align-items-center">
				<div class="container">
				   
					<div class="row">
						<div class="col-xl-6 col-lg-7 col-md-12">
							<div class="hero__caption">
								<h1 data-animation="fadeInLeft" data-delay="0.2s">Profile<br></h1>
								<nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                            <li class="breadcrumb-item"><a href="#">Profile</a></li> 
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
	<?php
		$query = "SELECT FirstName,LastName,Gender,Email_id,UserName,Password FROM user_info WHERE UserName='$username'";
		$result = mysqli_query($strconn,$query);
		while($row = mysqli_fetch_array($result))
		{
			$fname = $row["FirstName"];
			$lname = $row["LastName"];
			$gender = $row["Gender"];
			$email = $row["Email_id"];
			$password = $row["Password"];
		}
	?>
	<form method="POST" action="" id="regform">
		<table border=0 align="center">
			<tr>
				<td><label>Change Your First Name :</label></td>
				<td><input type="text" class="form-control" name="fname" value="<?php echo $fname;?>"></td>
			</tr>
			<tr>
				<td><label>Change Your Last Name :</label></td>
				<td><input type="text" class="form-control" name="lname" value="<?php echo $lname;?>"></td>
			</tr>
			<div class="checkbox">
				<tr>
					<td><label>Gender :</label></td>
					<td><input type="radio" name="gender" value="male" <?php if($gender=="male"){ echo "checked";}?>>Male &nbsp; <input type="radio" name="gender" value="female" <?php if($gender=="female"){ echo "checked";}?>>Female</td>
				</tr>
			</div>
			<tr>
				<td><label>Email address :</label></td>
				<td><input type="email" class="form-control" name="email" value="<?php echo $email;?>"></td>
			</tr>
			<tr>
				<td><label>Enter Your User Name :</label></td>
				<td><input type="text" class="form-control" name="username" value="<?php echo $username;?>"></td>
			</tr>
			<tr>
				<td><label>Change Password :</label></td>
				<td><input type="password" class="form-control" name="pass" value="<?php echo $password;?>"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><button class="btn btn-block" name="btn">Update</button></td>
			</tr>
		</table>
	</form>
	<br>
	<?php
	if(!empty($_POST['fname'])&&!empty($_POST['lname']))
	{
		if(isset($_POST['btn']))
		{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['pass'];
		$query = "UPDATE user_info SET FirstName='$fname',LastName='$lname',Gender='$gender',Email_id='$email',UserName='$username',Password='$password' WHERE UserName='$username'";
		$result = mysqli_query($strconn,$query);
		if($result)
		{
			echo "<div class='alert alert-success' role='alert'>Profile updated successfully</div>";

	}
		else
		{
			echo "<div class='alert alert-danger' role='alert'>Profile coudnt be updated</div>";

	}
		}
	}
	?>
	<?php
		include "footer.php";
	?>
</body>
</html>