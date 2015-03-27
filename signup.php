<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Ann Arbor Museums</title>
	<!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
 
    <!-- Google Font CSS-->
	<link href='http://fonts.googleapis.com/css?family=Armata|Shadows+Into+Light|Gloria+Hallelujah|Raleway|Rock+Salt' rel='stylesheet' type='text/css'>

    <!-- Google Map API -->
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>   
   <!-- font-awesome -->
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

       <!-- Select validation -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css" />

   	<!-- Custom CSS -->
   		<!-- Nav and footer CSS -->
   	<link rel="stylesheet" type="text/css" href="css/nav-footer.css">

    <link rel="stylesheet" type="text/css" href="css/my-personal.css">
   		<!-- social media css -->
   <link rel="stylesheet" type="text/css" href="css/social-media.css">
   	<!--  -->
   	<link rel="stylesheet" type="text/css" href="css/signup.css">
   	

 </head>

 <body id="page-top" class="index">
	<!-- Navigation -->
	<nav class="navbar navbar-default">
		<div class="container">
			<!-- Brand -->
			<div class="logo-div">
				<a class="navbar-brand page-scroll" href="#page-top">
					<img id="logo-img" src="" alt="logo"/>
				</a>
				<a class="navbar-brand page-scroll" id="logo-text" href="#page-top">A2 Museum</a>
			</div>
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header page-scoll">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navHeaderCollapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- Get the nav links for taggling -->
			<div class="collapse navbar-collapse" id="navHeaderCollapse">
				<ul class="nav navbar-nav navbar-right">
					<li class="hidden">
						<a href="#page-top"></a>
					</li>
					<li>
						<a class="page-scroll" href="#home">Home</a>
					</li>
					<li>
						<a class="page-scroll" href="#museum">Museum</a>
					</li>
					<li>
						<a class="page-scroll" href="#event">Event</a>
					</li>
					<li>
						<a class="page-scroll" href="#about">About Us</a>
					</li>					
				</ul>
			</div>
			<!-- end of navbar-collapse -->
		</div>
	</nav>
	<!-- end of container -->

	<!-- Header -->
	<header>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 intro-text">
					<div class="intro-lead-in">
						<h2>Sign Up Sheet</h2>
					</div>

				</div>
			</div>
		</div>    
	</header>
<!-- end of header -->

<!--javascript
<script type="text/javascript">
	
	function showSignUp(){
		var x = document.getElementById("myCheck");
		var y = document.getElementById("myNewsletter");

		if (x.checked=true){
			y.style.display="block";	
		}
	}
</script>-->

<!-- Sign Up PHP - Lauren Day -->
		<?php
			if(isset($_POST['name'])){
			    $filename = "SignupInfo.csv";
			    $Exists = (file_exists($filename));

			 	$handle = fopen($filename, 'a');

				$msg = "Thank you ". $_POST['name'] . " for submitting your information.\n You are ready to start leaving reviews! \n";	
				$stringToAdd="";										

				if (!$Exists){
					foreach($_POST as $name => $value) {
						$stringToAdd.="$name,";							
					}

					$stringToAdd.="\n";									
					fwrite($handle, $stringToAdd);						 
				}
				
				$stringToAdd="";										
				foreach($_POST as $name => $value) {
									
					$msg .="$name : $value\n";							
					$stringToAdd.="$value,";							
				}
				$stringToAdd.="\n";

				echo '<style type="text/css">
        			#form {
           				display: none;
        			}
       				 </style>';

				print "</br><center><h4>Thank you, ". $_POST["name"] . " for signing up for an account.</h4>\n";


				fwrite($handle, $stringToAdd);


				fclose($handle); 

				$sendTo = "lday@umich.edu";								
				$headers = "From:A2 Museum\r\n";
				
				mail($sendTo, 'Form Data', $msg, $headers);

				echo "<center>An email has been sent you to confirming your information.</br></br>";


			}
			else if(isset($_POST['news-name'])){
				print 'work?';
				$filename = "NewsletterInfo.csv";
			    $Exists = (file_exists($filename));

			 	$handle = fopen($filename, 'a');

				$msg = "Thank you ". $_POST['news-name'] . " for submitting your information.\n You should start receiving newsletters in the next week.\n";	
				$stringToAdd="";										

				if (!$Exists){
					foreach($_POST as $name => $value) {
						$stringToAdd.="$name,";							
					}

					$stringToAdd.="\n";									
					fwrite($handle, $stringToAdd);						 
				}
				
				$stringToAdd="";										
				foreach($_POST as $name => $value) {
									
					$msg .="$name : $value\n";							
					$stringToAdd.="$value,";							
				}

				$stringToAdd.="\n";

				echo '<style type="text/css">
        			#form {
           				display: none;
        			}
       				 </style>';

				print "</br><center><h4>Thank you, ". $_POST["news-name"] . " for signing up for our newsletter.</h4>\n";


				fwrite($handle, $stringToAdd);


				fclose($handle); 

				$sendTo = "lday@umich.edu";								
				$headers = "From: A2 Museum\r\n";
				
				mail($sendTo, 'Form Data', $msg, $headers);

				echo "<center>An email has been sent you to confirm you will be receiving the newsletter.</br></br>";	
			}

			?>

			<!--End of Sign Up PHP -->

<!-- Sign Up and Newsletter Form -->
<section id="form">
	<div class="row">
		<div class="col-lg-12 signup-item text-center">
					
			<!-- Sign Up div -->
			<div class="col-md-6">
				<form name="creatAccount" action="signup.php" method="POST" class="form-horizontal" onsubmit="return matchPassword();">
					<legend>Create an Account</legend>
					<div class="col-md-12" id="mySignUp">
						<div class="form-group">
							<label for="name" class="col-sm-3 control-label">Name</label>
							<div class="col-sm-9">
								<input type="text" id="name" name="name" class="form-control" placeholder="Jane Doe" pattern="[a-zA-Z]+\s[a-zA-Z]+" required autofocus />
							</div>
						</div>
						<div class="form-group">
							<label for="address1" class="col-sm-3 control-label">Address</label>
							<div class="col-sm-9">
								<input type="text" id="address1" name="address1" class="form-control" placeholder="Your Address" required />
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-9 col-sm-offset-3">
								<input type="text" id="address2" class="form-control" name="address2" placeholder="Address Line 2"/>
							</div>
						</div>	
						<div class="form-group">
							<label for="zipcode" class="col-sm-3 control-label">Zipcode</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="48105 *" pattern="[0-9]{5}" required/>
							</div>
						</div>				
						<div class="form-group">
							<label for="email1" class="col-sm-3 control-label">Email</label>
							<div class="col-sm-9">
								<input type="email" class="form-control" id="email1" name="email1" onblur="validateEmail(this)" placeholder="jane@me.com *" required/>
							</div>
						</div>					
						<div class="form-group">
							<label for="username" class="col-sm-3 control-label">Username</label>
							<div class="col-sm-9">
								<input type="text" class="form-control" id="username" name="username" placeholder="Create Your Username *" required/>
							</div>
						</div>
						<div class="form-group">
							<label for="password1" class="col-sm-3 control-label">Password</label>
							<div class="col-sm-9">
								<input type="password" class="form-control" id="password1" name="password1" placeholder="Enter Your Password *" required/>
							</div>
						</div>
						<div class="form-group">
							<label for="password2" class="col-sm-3 control-label">Confirm Password</label>
							<div class="col-sm-9">
								<input type="password" class="form-control" id="password2" name="password2" placeholder="Confirm Your Password *" required/>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-primary">Submit</button>
								<button type="button" class="btn btn-primary">Cancel</button>
							</div>
						</div>						
					</div>
					
				</form>	

			</div>
			<!-- End of Sign Up div -->

			

			<!-- Newsletter div - Lauren Day-->
			<div class="col-md-6">

				<form name= "receiveNewsletter" action="signup.php" method="POST" class="form-horizontal">
					
					<legend>Newsletter Sign Up</legend>

					<!--<input type="checkbox" id="myCheck" autofocus onclick="showSignUp()">--><p> Please fill out the following form if you would like to receive a newsletter. </p>
	
					<div class="col-md-12" id="myNewsletter">
						<div class="form-group">
							<label for="news-name" class="col-sm-2 control-label sr-only">Name</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" id="news-name" name="news-name" placeholder="First and Last Name"/>
							</div>
						</div>
						<div class="form-group">
							<label for="news-email" class="col-sm-2 control-label sr-only">Email</label>
							<div class="col-sm-10">
								<input type="email" class="form-control" id="news-email" name="news-email" placeholder="Email"/>
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>						
					</div>
					

					
				</form>
			</div>
			<!-- end of Sign up div -->
			
		</div>
	</div>
</section>
<!-- Sign Up and Log In Form -->

	<!-- footer  -->
<footer class="text-center">
	<div class="footer-above">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div id="social-media-item">
						<a target="_blank" href=""><i class="fa fa-facebook-square fa-4x social social-fb"></i></a>
						<a target="_blank" href=""><i class="fa fa-twitter-square fa-4x social social-tw"></i></a>
						<a target="_blank" href=""><i class="fa fa-google-plus-square fa-4x social social-gp"></i></a>
						<a target="_blank" href=""><i class="fa fa-instagram fa-4x social social-ins"></i></a>
						<a target="_blank" href=""><i class="fa fa-weibo fa-4x social social-wb"></i></a>
						<a target="_blank" href="mailto:"><i class="fa fa-envelope-square fa-4x social social-em"></i></a>

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-below">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<span class="copyright"><br>Copyright &copy; 2015 Team name.<br> All rights reserved.</span>
				</div>
				<div class="col-md-6">
					<span class="footer-info">SI 539 Project<br>
						School of Information and School of Public Health<br>University of Michigan Ann Arbor<br>(612)-940-7902 </span>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- end of footer -->

	<!-- jQuery -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Bootstrap Select -->
    <script src="js/bootstrap-select.min.js"></script>
    <!-- Bootstrap Validation -->
    <script src="js/jqBootstrapValidation.js"></script>
    <!-- Bootstrap form helper -->
    <script src="js/bootstrap-formhelpers.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    
    <!-- JQuery Validation -->
    <script src="js/jquery.validate.js"></script>


    <!-- Google Map loading -->
    <script src="js/mygooglemap.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>

    <!-- Form validator JavaScript -->
    <script type="text/javascript" src="js/myform-validator.js"></script>
    <script src="js/signup.js"></script>

 </body>

 </html>
