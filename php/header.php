<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php 
    if(isset($metaD) && !empty($metaD)) { 
        echo $metaD;
      }
      else { 
        echo "Some meta description"; 
      } ?>">
    <title><?php 
    if(isset($title) && !empty($title)) { 
      echo $title; 
    } 
    else { 
      echo "Default title tag"; 
    } ?></title>
    <meta name="author" content="Yang Li">
	<!-- Bootstrap Core CSS -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="./css/bootstrap-select.min.css">
 
    <!-- Google Font CSS-->
	<link href='http://fonts.googleapis.com/css?family=Armata|Shadows+Into+Light|Gloria+Hallelujah|Raleway|Rock+Salt' rel='stylesheet' type='text/css'>

 <!-- php for contact -->
    <?php
      if ($page == "about"){
    ?>
        <!-- Google Map API -->
        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>   
    <?php 
      }
    ?>
    <!-- font-awesome -->
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

       <!-- Select validation -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css" />

   	<!-- Custom CSS -->
   		<!-- Nav and footer CSS -->
   	<link rel="stylesheet" type="text/css" href="./css/nav-footer.css">

    <link rel="stylesheet" type="text/css" href="./css/my-personal.css">
   		<!-- social media css -->
   <link rel="stylesheet" type="text/css" href="./css/social-media.css">
   	<!--  -->
 <!-- php for home -->
    <?php
      if ($page == "home"){
    ?>   	
   	<link rel="stylesheet" type="text/css" href="css/index.css">
    <?php 
      }
    ?>

    <!-- php for event -->
    <?php
      if ($page == "event"){
    ?> 
   	<link rel="stylesheet" type="text/css" href="css/events.css">
    <?php 
      }
    ?>

 <!-- php for museum -->
    <?php
      if ($page == "museum"){
    ?>  
   	<link rel="stylesheet" type="text/css" href="css/museums.css">
     <?php 
      }
    ?>

<!-- php for review -->
    <?php
      if ($page == "review"){
    ?> 
   	<link rel="stylesheet" type="text/css" href="css/review.css">
      <?php 
      }
    ?>
<!-- php for signup -->
    <?php
      if ($page == "signup"){
    ?> 
   	<link rel="stylesheet" type="text/css" href="css/signup2.css">
      <?php 
      }
    ?>
 </head>

 <body id="page-top" class="index">
	<!-- Navigation -->
	<nav class="navbar navbar-inverse">
		<div class="container">
			<!-- Brand -->
			<div class="logo-div">
				<a class="navbar-brand page-scroll" href="#page-top">
					<img id="logo-img" src="img/logo.png" alt="logo"/>
				</a>
				<a class="navbar-brand page-scroll" id="logo-text" href="#page-top">A2 Musuem</a>
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
			            <a class="page-scroll <?php
			              if($page == "home"){
			                echo " current";
			              }
			             ?>"
						href="index.php">Home</a>	
					</li>
					<li>
			            <a class="page-scroll <?php
			              if($page == "museum"){
			                echo " current";
			              }
			             ?>" 
						href="museums.php">Museum</a>
					</li>
					<li>
			            <a class="page-scroll <?php
			              if($page == "event"){
			                echo " current";
			              }
			             ?>" 
						href="events.php">Event</a>
					</li>
					<li>
			            <a class="page-scroll <?php
			              if($page == "about"){
			                echo " current";
			              }
			             ?>" 
						href="about.php">About Us</a>
					</li>					
				</ul>
			</div>
			<!-- end of navbar-collapse -->
		</div>
	</nav>
	<!-- end of container -->
