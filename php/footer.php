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
					<div><span><?php 
						if (file_exists($fName)) {
							echo  "$page page was last modified: ". date ("F d Y H:i:s.",filemtime($fName));
						}
					?></span>
					</div>
				</div>
				<div class="col-md-6">
					<span class="footer-info">SI 539 Project<br>
						School of Information<br>University of Michigan Ann Arbor</span>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- end of footer -->

	<!-- jQuery -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="./js/bootstrap.min.js"></script>

    <!-- Bootstrap Select -->
    <script src="./js/bootstrap-select.min.js"></script>
    <!-- Bootstrap Validation -->
    <script src="./js/jqBootstrapValidation.js"></script>
    <!-- Bootstrap form helper -->
    <script src="./js/bootstrap-formhelpers.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    
    <!-- JQuery Validation -->
    <script src="./js/jquery.validate.js"></script>


    <!-- Google Map loading -->
   <?php
        // Only for Google Map on Contact page
    	if ($page == "about"){
    ?>
    	<script src="./js/mygooglemap.js"></script>
    <?php 
		}
    ?>

    <!-- Custom Theme JavaScript -->
    <script src="./js/agency.js"></script>

    <!-- Form validator JavaScript -->
    <script type="text/javascript" src="./js/myform-validator.js"></script>

 </body>

 </html>