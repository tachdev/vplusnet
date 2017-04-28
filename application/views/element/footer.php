	<footer class="footer">
  		<div class="container">
            <div class="section-title text-center">
                <div class="bigtitle"><h2>VPLUSNET</h2></div>
                <br>
                <p class="lead">V PLUS NET AND COMMUNICATION CO,LTD ผู้ให้บริการ VOIP เเบบครบวงจรช่วยประหยัดค่าโทรศัพท์<br>
                    หากสนใจใช้บริการติดต่อได้ที่ Tel <?php echo $site['0']['telephone']; ?> หรือ email มาที่ 
                    info@vplus-net.com | marketing@vplus-net.com
                </p>
            </div>
        	<div class="col-lg-4">
        		<div class="widget borderright">
                	<h3><i class="fa fa-phone"></i> Telephone</h3>
					<p class="lead"><?php echo $site['0']['telephone']; ?></p>
                </div><!-- end widget -->
        	</div><!-- end col-lg-4 -->

        	<div class="col-lg-4">
        		<div class="widget">
                	<h3><i class="fa fa-map-marker"></i>  Address</h3>
					<p class="lead"><?php echo $site['0']['address']; ?><br>
					</p>
                </div><!-- end widget -->
        	</div><!-- end col-lg-4 -->
            
        	<div class="col-lg-4">
        		<div class="widget borderleft">
                	<h3><i class="fa fa-envelope-o"></i> Email</h3>
					<p class="lead"><?php echo $site['0']['email']; ?></p>
                </div><!-- end widget -->
        	</div><!-- end col-lg-4 -->
        </div><!-- end container -->
	</footer><!-- end footer -->

	<section class="copyright clearfix">
		<div class="container">
			<div class="general_row">
				<div class="col-lg-12 col-md-12 col-sm-12 text-center">
					<ul class="footer-social">
						<li><a href="<?php echo $site['0']['facebook_url']; ?>" title=""><i class="fa fa-facebook"></i></a></li>
						<li><a href="http://plus.google.com/+jollyness" title=""><i class="fa fa-google-plus"></i></a></li>
					</ul>
					<p>Copyright © 2014 - Designed by Tachdev</p>
				</div><!-- end widget -->
			</div><!-- end row -->
		</div><!-- end container -->
	</section><!-- end copyright1 -->

	<div class="dmtop">Scroll to Top</div>
    
  <!-- Main Scripts-->
  <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
  <!-- Parallax plugin -->
  <script src="assets/js/jquery.parallax.js"></script>
  <!-- Scroll plugin -->
  <script src="assets/js/smooth-scroll.js"></script>
  <!-- Retina plugin -->
  <script src="assets/js/retina-1.1.0.js"></script>
  <!-- Super Slides -->
  <script src="assets/js/jquery.superslides.js"></script>
  <!-- Circle Skills -->
  <script src="assets/js/jquery.easypiechart.min.js"></script>
  <!-- Carousel Slides -->
  <!--<script src="assets/js/owl.carousel.min.js"></script>-->
   <!-- Fitvids -->
  <script src="assets/js/jquery.fitvids.js"></script> 
   <!-- prettyPhoto -->
  <script src="assets/js/jquery.prettyPhoto.js"></script> 
  <!-- Custom Project Javascript  -->
  <script src="assets/js/application.js"></script>
  <!-- Portfolio Items -->
  <script src="assets/js/jquery.isotope.min.js"></script>
  <script src="assets/js/custom-portfolio.js"></script>
  <script src="assets/js/blog-masonry.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/modal.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/dropdown.js"></script>
  
</body>
</html>