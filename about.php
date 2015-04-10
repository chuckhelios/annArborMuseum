<?php

$page = "about";

$fName = basename(__FILE__);

$title = "About Us";

$metaD = "Welcome to about page";

include 'php/header.php';

?>

	<!-- About me Section -->
	<section id="about-us">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2 class="section-heading">About Us</h2>
				</div>
			</div>
			<hr class="soften hr-rule"/>			
			<div class="row">
				<div class="col-md-3 col-sm-6 text-center">
					<div class="aboutme-item">
						<ul class="intro-myself">
							<li><img class="about-photo img-responsive img-circle" src="img/li_yang.png" alt="yang's photo"/></li>
							<li class="name">Yang Li</li>
							<li>Master Student</li>
							<li>Health Informatics</li>
							<li>School of Information and School of Public Health</li>
							<li>University of Michigan, Ann Arbor</li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center">
					<div class="aboutme-item">
						<ul class="intro-myself">
							<li><img class="about-photo img-responsive img-circle" src="img/lauren.jpg" alt="lauren's photo"/></li>
							<li class="name">Lauren Day</li>
							<li>Master Student</li>
							<li>Library and Information Science</li>
							<li>School of Information</li>
							<li>University of Michigan, Ann Arbor</li>
						</ul>
					</div>	
				</div>
				<div class="col-md-3 col-sm-6 text-center">
					<div class="aboutme-item">
						<ul class="intro-myself">
							<li><img class="about-photo img-responsive img-circle" src="img/adam.jpg" alt="adam's photo"/></li>
							<li class="name">Adam Hall</li>
							<li>PhD Student</li>
							<li>Department of Statistics</li>
							<li>University of Michigan, Ann Arbor</li>
						</ul>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 text-center">
					<div class="aboutme-item">
						<ul class="intro-myself">
							<li><img class="about-photo img-responsive img-circle" src="img/XinZhang.jpg" alt="Xin's photo"/></li>
							<li class="name">Xin Zhang</li>
							<li>Master Student</li>
							<li>Human Computer Interaction</li>
							<li>School of Information</li>
							<li>University of Michigan, Ann Arbor</li>
						</ul>
					</div>
				</div>	
			</div>
			<hr class="soften hr-rule"/>
			<div class="row content-text">
				<div class="col-sm-6">
					<div class="about-item-head">
						<h3>Why we are interested in A2 Museums?</h3>
					</div>
					<div class="about-item-text">
						<p>The museums in Ann Arbor are awesome! We want to inspire people to discover the wonders of science, technology, engineering, art, and math. We aim to provide you helpful information about these anwsome museums</p>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="about-item-head">
						<h3>Want to support us?</h3>
					</div>
					<div class="about-item-text">
						<p>Find us in social network below. If you like our website, please contact us and tell us what you like and any ways we can improve the site.</p>
					</div>
				</div>				
			</div>
			<hr class="soften hr-rule"/>			
		</div>
	</section>
	<!-- end of about me section -->

<!-- Contact section -->
<section id="contact">
	<div class="container contact-container">
	<div class="row">
		<div class="col-lg-12 text-center ">
			<h2 class="section-heading">More Infomation</h2>
		</div>
		<br>
	</div>
	<div class="row">
		<div class="col-lg-12 contact-item">
			<form id="contact_form" name="sentMessage" method="get" class="form-horizontal">
				<fieldset>
				<div class="col-md-6">
					<div class="form-group">
						<label class="col-xs-2 control-label">Name</label>
						<div class="col-xs-10">
							<input id="name" type="text" class="form-control" name="name" placeholder="Joe Doe" pattern="[a-zA-Z]+\s[a-zA-Z]+" data-validation-required-message="Please enter your name." required/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-2 control-label">Email</label>
						<div class="col-xs-10">
							<input id="email" type="email" class="form-control" name="email" placeholder="Joed@me.com" data-validation-required-message="Please enter your email." onblur="validateEmail(this)" required/>
						</div>
					</div>
					<div class="form-group">
						<label class="col-xs-2 control-label">Message</label>
						<div class="col-xs-10">
							<textarea id="message" class="form-control" name="message" placeholder="Your message here" data-validation-reuqired-message="Please enter your message." required></textarea>	
						</div>
					</div>
					<div class="form-group">
						<div class="col-xs-6 col-xs-offset-2">
							<button type="submit" name="submit" class="btn btn-lg btn-primary">Send</button>
						</div>
					</div>
				</div>
			</fieldset>
			</form>
			<!-- Google map container -->
			<div class="col-md-6">
				<div class="form-group">
					<div id="map-container"></div>
				</div>
			</div>
			<!-- Google map container -->
		</div>	
	</div>
</div>
</section>


<?php  include 'php/footer.php'; 
?>