<?php

$page = "review";

$fName = basename(__FILE__);

$title = "review Page";

$metaD = "Welcome to review page";

include 'php/header.php';
?>


	<!-- Header -->
	<header>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 intro-text">
					<div class="intro-lead-in">
						<h1  class="header_text">Ann Arbor Museums</h1>
					</div>
					<div class="intro-heading">
						<h2  class="header_text">UMMA Reviews</h2>
					</div>
					<br>

				</div>
			</div>
		</div>    
	</header>

	<!--review section  -->
	
		<!-- Lauren Day -->
		<div class="container review_row">
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-2">
					<img class="userphoto img-responsive" src="img/profile1.jpg" alt= "Alex's userpic">
					<div class="userid-div">
						<strong><a class="userid" href="">Alex</a></strong>
					</div>
				</div>

				<!--<div class="col-sm-1"></div>-->

				<div class="col-sm-9">
					<h3>Visiting the UMMA</h3>
					<p class="review">I really love that this museum is so close to campus that you can pop in between classes. The set up is a little confusing, but it has a solid collection of art.</p>
				</div>
			</div>
		</div>

		<div class="container review_row">
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-2">
					<img class="userphoto img-responsive" src="img/profile2.jpg" alt= "Fred's userpic">
					<div class="userid-div">
						<strong><a class="userid" href="">Fred</a></strong>
					</div>
				</div>

				<!--<div class="col-sm-1"></div>-->

				<div class="col-sm-9">
					<h3>University of Michigan's Museum of Art</h3>
					<p class="review">The museum is pretty small, which is standard for one on a college campus. The architecture is very open with a fair amount of natural light which makes for a good art viewing experience. I appreciate that they provide a lot of seats throughout the exhibits because I have a bad knee and the seats allow me to take my time. As for the art itself I like that they mix historic and modern displays throught the museum, so that you don't get bogged down in any one style of art for too long. My only complaint is that it was a little too warm and I started to overheat.</p>
				</div>
			</div>
		</div>

		<div class="container review_row">
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-2">
					<img class="userphoto img-responsive" src="img/profile3.jpg" alt= "Peter Quill's userpic">
					<div class="userid-div">
					<strong><a class="userid" href="">Starlord</a></strong>
					</div>
				</div>

				<!--<div class="col-sm-1"></div>-->

				<div class="col-sm-9">
					<h3>UMMA</h3>
					<p class="review">This place was weird. They had weird photo rooms. One was just pictures of dudes doing man stuff. The other was over old newspapers. I did not get it. And there was a room of just chairs. How are chairs art? I guess I liked the statue built out of guns, that was pretty sweet, but I just don't get the art thing.</p>
				</div>
			</div>
		</div>
<!--
			<div id="others-review-div" class="row">
				<div class="col-lg-12">
					<div class="row review-col">
						<div class="col-md-3">
							<div class="rev-name">reviewer's name</div>
							<div class="rev-photo">reviewer's photo</div>
						</div>
						<div class="review-content col-md-9">this is a review</div>
					</div>
					<div class="row review-col">this is a review</div>
					<div class="row review-col">this is a review</div>
					<div class="row review-col">this is a review</div>
					<div class="row review-col">this is a review</div>
				</div>
			</div>
		</div>-->
	</section> 
	<!--end of review section  -->



<?php  include 'php/footer.php'; 
?>
