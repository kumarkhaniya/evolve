 
<!--<footer>
<div class="container">
	<div class="row">
		<div class="col-md-7 footer-col">
<i class="fa fa-phone-square fa-2x"></i> &nbsp;&nbsp;&nbsp; <span style="color:#000;">(+91) 971-170-4082 &nbsp;&nbsp; | &nbsp;&nbsp; (+91) 982-580-6005 </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<i class="fa fa-envelope-square fa-2x"></i> &nbsp;&nbsp; <span style="color:#000;">  akhilesh@evolvelearningsolutions.com </span>
			</div>
	</div>
</div>
</footer>-->

<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <!--<div class="col-lg-4  col-md-4 col-sm-6 col-xs-6">
                    <h3> Get in Touch </h3>
                    <ul>
                        <li> <iframe src="https://www.google.com/maps/d/embed?mid=1cxfCEPNSON7ie4vTf9QNnWwf5qE" style="width:280px; height:140px; border:none;"></iframe> </li>
						<br />
						<li> <i class="fa fa-envelope-square"></i> &nbsp; akhilesh@evolvelearningsolutions.com </li>
						<br />
                        <li> <i class="fa fa-phone-square"></i> &nbsp; (+91) 971-170-4082    |    (+91) 982-580-6005 </li>
                    </ul>
                </div>-->
                <div class="col-lg-3  col-md-3 col-sm-6 col-xs-6">
                


                    
                    <ul>
                    <?php 

                           //$link = mysqli_connect("localhost", "root", "", "evolvele_evolve");
                           $link = mysqli_connect("localhost", "evolvele_user", "evolve@2016", "evolvele_evolve"); 
                            $sql_skill="select * from expertise ";
                            $qry_skill=mysqli_query($link,$sql_skill) or die(mysqli_error());
                            while($row_skill=mysqli_fetch_array($qry_skill)){
                   ?>
							<li> <a href="<?php echo base_url() ?><?php echo $row_skill['menuUrl']; ?>">  <?php echo $row_skill['menuName']; ?> </a> </li>
                   <?php } ?>
                         
                    </ul>
                </div>
				<div class="col-lg-5  col-md-5 col-sm-6 col-xs-6">
                    
                    <div class="row">
						<ul class="col-xs-6">
							<li> <a href="<?php echo base_url()  ?>about">  About Us </a> </li>
							<li> <a href="<?php echo base_url()  ?>expertise">  The Skill </a> </li>
							<li> <a href="<?php echo base_url()  ?>Methodology">  The Approach </a> </li>
							<li> <a href="<?php echo base_url()  ?>program">  Training Programs </a> </li>
							<li> <a href="<?php echo base_url()  ?>Gallery">  Gallery </a> </li>
						</ul>
						<ul class="col-xs-6">
							<li><a href="<?php echo base_url()  ?>Blog">  Blog </a> </li>
							<li> <a href="<?php echo base_url()  ?>testimonials">  Testimonials </a> </li>
							<li> <a href="<?php echo base_url()  ?>Contact">  Contact Us </a> </li>
							<li> <a href="<?php echo base_url()  ?>sitemap">  Site Map </a> </li>
						</ul>
					</div>
                </div>
				
				<div class="col-md-4 col-sm-4 col-lg-4 footer-col">
<i class="fa fa-phone-square fa-2x"></i> &nbsp;&nbsp;&nbsp; <span style="color:#fff; font-size: 14px;">(+91) 971-170-4082 &nbsp;&nbsp; <br /><br /> <i class="fa fa-phone-square fa-2x"></i> &nbsp;&nbsp;&nbsp; (+91) 982-580-6005 </span>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br /><br />
<i class="fa fa-envelope-square fa-2x"></i> &nbsp;&nbsp; <span style="color:#fff; font-size: 14px;">  akhilesh@evolvelearningsolutions.com </span>
			
			</div>
            </div>
            <!--/.row--> 
        </div>
        <!--/.container--> 
    </div>
    <!--/.footer-->
</footer>
<!-- Footer -->
<footer class="footer-bottom">
    <div class="container">
		<div class="row">
			<div class="col-md-9">
				<p class="copyright">&copy; Copyright 2015-16 Evolve Learning Solutions All Right Reserved Website Design By <a href="http://www.wabodryms.com/" target="_blank"> Wabodryms IT Solutions &TRADE; </a>.</p>
			</div>
			<div class="col-md-3 footer-col">
				<a href="https://www.facebook.com/evolvelearningsolutions" class="fa fa-fw fa-facebook" target="_blank"></a>
				<a href="https://twitter.com/akhilesh_evolve" class="fa fa-fw fa-twitter" target="_blank"></a>
				<a href="https://www.linkedin.com/company/evolve-learning-solutions" class="fa fa-fw fa-linkedin" target="_blank"></a>
				<a href="https://www.youtube.com/channel/UClD90ct4DaxOKGHttZfKU-Q" class="fa fa-fw fa-youtube"  target="_blank"></a>
			</div>
			
		</div>
	</div>
</footer>
<!-- /Footer -->

<!-- Scroll To Top -->
<div id="scroll-to-top" class="scroll-to-top">
    <i class="icon fa fa-angle-up"></i>
</div>
<!-- /Scroll To Top -->

<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-82082900-1', 'auto');
ga('send', 'pageview');
</script>
<!-- End Google Analytics -->

<!-- SCRIPTS -->
<script src="<?php echo base_url(); ?>js/jquery-2.2.0.min.js"></script>
<script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>js/owl.carousel.min.js"></script>
<script src="<?php echo base_url(); ?>js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url(); ?>js/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>js/jquery.stellar.min.js"></script>
<script src="<?php echo base_url(); ?>js/wow.min.js"></script>
<script src="<?php echo base_url(); ?>js/masonry.pkgd.min.js"></script>
<script src="<?php echo base_url(); ?>js/jquery.appear.js"></script>
<script src="<?php echo base_url(); ?>js/jquery.animateNumber.min.js"></script>
<script src="<?php echo base_url(); ?>js/general.js"></script>
<!-- /SCRIPTS -->

<script type="text/javascript">
        $(document).ready(function(){
            $('#lightgallery').lightGallery();
        });
        </script>
        <script src="https://cdn.jsdelivr.net/picturefill/2.3.1/picturefill.min.js"></script>
        <script src="<?php echo base_url(); ?>dist/js/lightgallery.js"></script>
        <script src="<?php echo base_url(); ?>dist/js/lg-fullscreen.js"></script>
        <script src="<?php echo base_url(); ?>dist/js/lg-thumbnail.js"></script>
        <script src="<?php echo base_url(); ?>dist/js/lg-video.js"></script>
        <script src="<?php echo base_url(); ?>dist/js/lg-autoplay.js"></script>
        <script src="<?php echo base_url(); ?>dist/js/lg-zoom.js"></script>
        <script src="<?php echo base_url(); ?>dist/js/lg-hash.js"></script>
        <script src="<?php echo base_url(); ?>dist/js/lg-pager.js"></script>
		<script src="<?php echo base_url(); ?>dist/jquery.mousewheel.min.js"></script>
</body>

</html>