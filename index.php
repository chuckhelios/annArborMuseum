<?php

$page = "home";

$fName = basename(__FILE__);

$title = "Home Page";

$metaD = "Welcome to home page";

include 'php/header.php';

?>
 </head>

    
    

	<!--photo gallery  -->
	<section id="photo-gallary-sec">
			<div class="row">
    			    <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Carousel items -->
  						<div class="carousel-inner">
   			 				<div class="active item">
   			 					<img src="image/1.png" alt="Flower" >
   			 						<div class="carousel-caption">
                  						<h3 class="titles">Ann Arbor Hands-On Museum</h3>
                  						<p class="contents">The Mission of the Ann Arbor Hands-On Museum is to inspire people to discover the wonder of science, technology, engineering, art, and math. </p>
                					</div>
   			 				
   			 				</div>
    						<div class="item">
    							<img src="image/2.jpg" alt="Flower">
    							<div class="container">
    								<div class="carousel-caption">
                  						<h3 class="titles">University of Michigan Museum of Art</h3>
                  						<p class="contents">The University of Michigan Museum of Art seeks to transform individual and civic life by promoting the discovery, contemplation, and enjoyment of the art of our world. </p>
                					</div>

   			 					</div>
    						</div>
    						<div class="item">
    							<img src="image/5.jpg" alt="Flower">
    							<div class="container">
    								<div class="carousel-caption">
                  						<h3 class="titles">The Michigan Firehouse Museum and Education Center</h3>
                  						<p class="contents">The Michigan Firehouse Museum and Education Center's mission is to enhance the appreciation of firefighting history through engaging and informative exhibits, as well as teaching and promoting fire safety and prevention.</p>
                					</div>
   			 					</div>
    						</div>
  						</div>               
  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
		</div>
	
		</div>
	</section>
	<!--end of photo gallery  -->

	<section id="mycontent">
		<div class="container">
			<div class="row">
				<div class="col-md-8"></div>
				<div class="col-md-4" id="signup-div">
					<a href="signup.php" id="signup-link">SIGN UP</a>
					<p id="signup-p">To make an account or receive our newsletter.</p>

				</div>
			</div>

			<div class="row">
				<div class="col-md-4"><h1>Welcome</h1><p>This website displays a collection of Ann Arbor local museums. For now, we have the Ann Arbor Hands-On Museum, Univeristy of Michigan Museum of Art, and The Michigan Firehouse Museum and Education Center. This website is for newcomers to the area to see what kind of museum experience they could get in Ann Arbor.</p></div>
				<div class="col-md-4">
					<h1>Events</h1>
					<div class="aEvent">
						<div class="aEventDate">
							<p>FEB</p>
							<p>19</p>
						</div>
						<div class="aEventContent">
							<p>Participants will adhere to realistic districts and zoning regulations as they make decisions ......</p>
							
						</div>
					</div>
					<div class="aEvent">
						<div class="aEventDate">
							<p>FEB</p>
							<p>19</p>
						</div>
						<div class="aEventContent">
							<p>we will explore the medical, technological and architectural benefits to 3D printing......</p>
							
						</div>
					</div>
					<div class="aEvent">
						<div class="aEventDate">
							<p>MAR</p>
							<p>15</p>
						</div>
						<div class="aEventContent" id="SpecialEvent">
							<p>Compelling stories from "Historic Ann Arbor: An Architectural Guide."...... </p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<h1>Donate</h1><p>A2 museum actively supports other non-profit groups through donations of tickets to qualified organizations for fundraising. Because of the number of requests for donations, we are not able to honor every request. Please look at our guidelines to determine if your organization is eligible, and note the instructions on how to request donations.</p>
				</div>
			</div>
		</div>
	</section>

	<section>
<?php  include 'php/footer.php'; 
?>
