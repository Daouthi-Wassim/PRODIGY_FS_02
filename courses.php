<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
	
</head>

<body>
  
   
	<?php
		include "nav.php";
	?>
	<?php
		$query = "SELECT * FROM subject LIMIT 1";
		$result = mysqli_query($strconn,$query);
		/*if($result)
		{
			echo "Sucess";
		}
		else{
			echo "failed";
		}*/

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
								<h1 data-animation="fadeInLeft" data-delay="0.2s">Courses</h1>
                                <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                            <li class="breadcrumb-item"><a href="courses.php">Our Courses</a></li> 
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
	
	<div class="services-area">
            <div class="container">
			<h1>Available Courses :</h1><br>
                <div class="row justify-content-sm-center">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
							<i class="fa fa-cogs fa-2x"></i>
                            </div>
                            <div class="featured-box">
                            <a href="#">
							<h3>HTML</h3>
						   </a>
                                <p>This FREE Tutorial will teach you how to design a webpage using HTML.Complete a series of hands-on practice and examination while writing real HTML code.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                                <div class="features-icon">
                                <i class="fa fa-leaf fa-2x"></i>
                                </div>
                                <div class="featured-box">					
                                <a href="#">
                                <h3>CSS</h3>
                                    <p>Our CSS Tutorial will teach you how to control the style & layout of websites.Complete a series of practice and examination while filling out actual CSS code.</p>
                                    </a>
                                </div>
                        </div>
				   </div>

<?php 

$query = "SELECT Title,Info FROM chapter ";
$result = mysqli_query($strconn,$query);
if($result)
{
while($row=mysqli_fetch_array($result))
{
    $title = $row["Title"];
    $info = $row["Info"];

   echo' <div class="col-lg-4 col-md-6 col-sm-8">';
   echo " <div class='single-services mb-30'>
            <div class='features-icon'>
            <i class='fa fa-leaf fa-2x'></i>
            </div>
            <div class='featured-box'>					
            <a href='CSS.php'>
             <h3>".$title."</h3>
            
                <p>".$info."'</p>'
                <br><h4>New</h4>
                
            </a>
            </div>
    </div>
</div>";
}
}else {}
?>

                  
                    


                </div>
            </div>
        </div>
        <div class="courses-area section-padding40 fix">
            <div class="container" >

            <div id="courses">
		<section class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Our featured courses</h2>
                        </div>
                    </div>
                </div>
                <div class="courses-actives">
                    <!-- Single -->
                    <div class="properties pb-20">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="#"><img src="assets/img/gallery/featured1.png" alt=""></a>
                            </div>
                            <div class="properties__caption">
                                <p>User Experience</p>
                                <h3><a href="#">Fundamental of UX for Application design</a></h3>
                                <p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.

                                </p>
                                <div class="properties__footer d-flex justify-content-between align-items-center">
                                    <div class="restaurant-name">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half"></i>
                                        </div>
                                        <p><span>(4.5)</span> based on 120</p>
                                    </div>
                                    <div class="price">
                                        <span>$135</span>
                                    </div>
                                </div>
                                <a href="#" class="border-btn border-btn2">Find out more</a>
                            </div>

                        </div>
                    </div>
                    <div class="properties pb-20">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="#"><img src="assets/img/gallery/featured2.png" alt=""></a>
                            </div>
                            <div class="properties__caption">
                                <p>User Experience</p>
                                <h3><a href="#">Fundamental of UX for Application design</a></h3>
                                <p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.
                                </p>
                                <div class="properties__footer d-flex justify-content-between align-items-center">
                                    <div class="restaurant-name">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half"></i>
                                        </div>
                                        <p><span>(4.5)</span> based on 120</p>
                                    </div>
                                    <div class="price">
                                        <span>$135</span>
                                    </div>
                                </div>
                                <a href="#" class="border-btn border-btn2">Find out more</a>
                            </div>
                        </div>
                    </div>
                    <div class="properties pb-20">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="#"><img src="assets/img/gallery/featured3.png" alt=""></a>
                            </div>
                            <div class="properties__caption">
                                <p>User Experience</p>
                                <h3><a href="#">Fundamental of UX for Application design</a></h3>
                                <p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.

                                </p>
                                <div class="properties__footer d-flex justify-content-between align-items-center">
                                    <div class="restaurant-name">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half"></i>
                                        </div>
                                        <p><span>(4.5)</span> based on 120</p>
                                    </div>
                                    <div class="price">
                                        <span>$135</span>
                                    </div>
                                </div>
                                <a href="#" class="border-btn border-btn2">Find out more</a>
                            </div>

                        </div>
                    </div>
                    <!-- Single -->
                    <!-- Single -->
                    <div class="properties pb-20">
                        <div class="properties__card">
                            <div class="properties__img overlay1">
                                <a href="#"><img src="assets/img/gallery/featured2.png" alt=""></a>
                            </div>
                            <div class="properties__caption">
                                <p>User Experience</p>
                                <h3><a href="#">Fundamental of UX for Application design</a></h3>
                                <p>The automated process all your website tasks. Discover tools and techniques to engage effectively with vulnerable children and young people.

                                </p>
                                <div class="properties__footer d-flex justify-content-between align-items-center">
                                    <div class="restaurant-name">
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half"></i>
                                        </div>
                                        <p><span>(4.5)</span> based on 120</p>
                                    </div>
                                    <div class="price">
                                        <span>$135</span>
                                    </div>
                                </div>
                                <a href="#" class="border-btn border-btn2">Find out more</a>
                            </div>

                        </div>
                    </div>
                    <!-- Single -->
                </div>
            </div>
        </div>
        <!-- Courses area End -->

	
				<?php
				while($row = mysqli_fetch_array($result))
				{
					echo '<div class="col-md-4">';
					echo '<div class="featured-box">';
					echo '<a href="new.php">';
					echo '<i class="fa fa-leaf fa-2x"></i>';
					echo '<div class="text">';
					echo '<h3>'.$row[0].'</h3>';
					echo $row[1];
					echo '</div>';
					echo '</a>';
					echo '</div>';
					echo '</div>';
				}
				?>
			</div>
		</section>
	</div>
	</main>
	<footer>
  <?php
  include "footer.php";
  ?>
  </footer>

</body>
</html>
