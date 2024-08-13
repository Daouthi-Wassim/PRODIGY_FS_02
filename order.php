<html>
<head>
	<meta charset="utf-8">
	<script src="../assets/js/custom.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicon.ico">
</head>
<body>
<style>
        /* Custom styles for the confirmed button */
        .confirmed {
            background-color: green !important;
            color: white !important;
        }
    </style>
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
								<h1 data-animation="fadeInLeft" data-delay="0.2s">Orders</h1>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-sm-8">
								<form method="POST" action="">
								<table class="table table-bordered" style="color: white;">
									<tr>
										<th>Order No</th>
										<th>Book Name</th>
										<th>Full Name</th>
										<th>Address</th>
										<th>City</th>
										<th>Pin Code</th>
										<th>State</th>
										<th>Email ID</th>
										<th>Mobile No</th>
										<th>#</th>
									</tr>
									<?php
										$query = "SELECT * FROM purchase";
										$result = mysqli_query($strconn,$query);
										while($row = mysqli_fetch_array($result))
										{
											$bookname = $row[0];
											$orderno = $row[1];
											$name = $row[2];
											$address = $row[3];
											$city = $row[4];
											$pincode = $row[5];
											$state = $row[6];
											$email = $row[7];
											$mobile = $row[8];
											echo '<tr>';
											echo '<td>'.$orderno.'</td>';
											echo '<td>'.$bookname.'</td>';
											echo '<td>'.$name.'</td>';
											echo '<td>'.$address.'</td>';
											echo '<td>'.$city.'</td>';
											echo '<td>'.$pincode.'</td>';
											echo '<td>'.$state.'</td>';
											echo '<td>'.$email.'</td>';
											echo '<td>'.$mobile.'</td>';
									
											echo "<td><a class='btn' href=\"deleteorder.php?id=".$row[1]."\">Delete order</a></td>";
											echo "<td><a class='btn' id='confirmButton'>Confirmer</a></td>";
											echo '</tr>';
										}
									?><script>
									$(document).ready(function() {
										$('#confirmButton').on('click', function() {
											$(this).text('Confirmed');
											$(this).addClass('confirmed');
											$(this).removeClass('btn-primary');
											$(this).prop('disabled', true); // Optional: disable the button after confirming
										});
									});</script>
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