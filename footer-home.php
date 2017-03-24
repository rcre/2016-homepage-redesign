<?php
///////////
//VAR SETUP
///////////

$logo = get_theme_mod('themolitor_customizer_logo');
$autoLoad = get_theme_mod('themolitor_customizer_autoload',TRUE);
$parallax = get_theme_mod('themolitor_customizer_parallax',TRUE);
$footerText = get_theme_mod('themolitor_customizer_footer','Handcrafted by <a target="_blank" href="http://themolitor.com">THE MOLITOR</a>');
$headerImages = get_uploaded_header_images();
$slideshowOn = get_theme_mod('themolitor_customizer_slideshow_on',TRUE);
$slideshowTime = get_theme_mod('themolitor_customizer_slideshow_time','8') * 1000;
if(is_single() || is_page()){
	$post = $wp_query->post;
	$displayStyle = get_post_meta( $post->ID, 'header-style', TRUE );
	if( $displayStyle == '' ) {
		$displayStyle = get_theme_mod('themolitor_customizer_display','standard-display');
	}
} else {
	$displayStyle = get_theme_mod('themolitor_customizer_display','standard-display');
}
?>
<!-- ////////////// MAIN HTML ////////////////// -->

<div class="footer clearfix">  		
	<div class="footerContent row">
		<div class="column col-2 col-m-6"><!-- Address and company Info -->

			<a id="logo" href="<?php echo home_url(); ?>"><img src="<?php echo $logo;?>" alt="<?php bloginfo('name'); ?>" /></a>
		
			<p>THE RESOURCES TO GET THINGS DONE, WITH PEOPLE WHO CARE.</p>
			<br>
			<div class="address">9339 Priority Way West Drive, Suite 120<br>Indianapolis, IN 46240</div>
		</div><!-- END Address and company Info -->

		<div class="column col-2 col-m-6"><!--Core Services Menu-->
			<ul>
				<li class="topLink">Core Services</li>
				<li><?php echo '<a href="'.home_url().'/category/office-services/">' ;?>Office</a></li>
				<li><?php echo '<a href="'.home_url().'/category/industrial/">' ;?>Industrial</a></li>
				<li><?php echo '<a href="'.home_url().'/category/retail/">' ;?>Retail</a></li>
				<li><?php echo '<a href="'.home_url().'/category/investments/">' ;?>Investments</a></li>
				<li><?php echo '<a href="'.home_url().'/category/land/">' ;?>Land</a></li>
				<li><?php echo '<a href="'.home_url().'/category/property-management/">' ;?>Property Management</a></li>
			</ul>
		</div><!--END Cores Services Menu-->

		<div class="column col-2 col-m-6"><!--Specialty Services Menu-->
			<ul>
				<li class="topLink">Specialty Services</li>
				<li><?php echo '<a href="'.home_url().'/category/project-management/">' ;?>Project Management</a></li>
				<li><?php echo '<a href="'.home_url().'/category/corporate-services/">' ;?>Corporate Services</a>
				<li><?php echo '<a href="'.home_url().'/occupiers/">' ;?>Occupier</a></li>
				<li><?php echo '<a href="'.home_url().'/owners-investors/">' ;?>Investor</a></li>
				<li><?php echo '<a href="'.home_url().'/category/capital-advisor/">' ;?>Capital Markets</a></li>
			</ul>
		</div><!--END Specialty Services Menu-->

		<div class="column col-2 col-m-6"><!-- Our Experts Menu -->
			<ul>
				<li class="topLink">Our Expertise</li>
				<li><?php echo '<a href="'.home_url().'/category/leadership/">' ;?>Leadership</a></li>
				<li><?php echo '<a href="'.home_url().'/team/">' ;?>The Team</a></li>
				<li><?php echo '<a href="'.home_url().'/category/wernke-team/">' ;?>Wernke Team</a></li>
				<li><?php echo '<a href="'.home_url().'/category/the-paul-dick-team/">' ;?>Paul Dick Team</a></li>
			</ul>
		</div><!-- END Our Experts Menu -->

		<div class="column col-2 col-m-6"><!-- Research -->
			<ul>
			<li class="topLink">Research</li>
			<li><?php echo '<a href="'.home_url().'/research/">' ;?>Reports</a></li>
			</ul>
		</div><!-- END Research -->

		<div class="column col-2 col-m-6"><!-- Begin About Us -->
			<ul>
				<li class="topLink">About Us</li>
				<li><?php echo '<a href="'.home_url().'/about/">' ;?>Who We Are</a></li>
				<li><?php echo '<a href="'.home_url().'/media/">' ;?>Media</a></li>
				<li><?php echo '<a href="'.home_url().'/contact/">' ;?>Contact</a></li>
				<li><?php echo '<a href="'.home_url().'/careers-2/">' ;?>Careers</a></li>
			</ul>
		</div><!-- END About Us -->
	</div><!-- END OF "footerContent" -->

	<div class="footerStrip row">
			<div class="copyright col-4 col-m-12">&copy; <?php echo date('Y '); bloginfo('name'); ?><?php echo $footerText;?></div>

			<div class="phone col-4 col-m-12"><a href="tel:317.663.6000">317.663.6000</a></div>

			<div class="social-icons col-4 col-m-12">
				<!-- <li><a href="#" class="social-icon"> <i class="fa fa-facebook"></i></a></li> --> <!-- Not set up Yet -->
				<li><a href="https://twitter.com/ResourceCRE"> <i class="fa fa-twitter social-icon"></i></a></li>
				<!-- <li><a href="#" class="social-icon"> <i class="fa fa-rss"></i></a></li> --><!--  NOT SET UP YET -->
				<li><a href="https://www.youtube.com/channel/UCpdLW5RfmfNOKV4JYr2-0-w"> <i class="fa fa-youtube social-icon"></i></a></li>
				<li><a href="https://www.linkedin.com/company/resource-commercial-real-estate"><i class="fa fa-linkedin social-icon"></i></a></li>
				<li><a href="https://plus.google.com/104233585404626040656/about"><i class="fa fa-google-plus social-icon"></i></a></li>
			</div>
	</div><!-- End "footerStrip" -->
</div><!-- END OF "footer" -->

<!-- ////////////// END OF MAIN HTML ////////////////// -->

<?php 
//GET STICKY OR NEXT/PREV POST ITEMS
get_template_part('sticky-posts'); 

wp_footer();

//IF MAP PAGE, GET MAP SCRIPT
if ( is_page_template('location-map.php') || is_page_template('location-map-widgets.php') ){ 
	get_template_part('location-script'); 
} 
?>

<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
</script>

<script>
jQuery(document).ready(function(){	
	
	//RUN FUNCTIONs
	<?php 
	if ($autoLoad == 1) { echo 'autoLoadPosts();'; }
	if ($parallax == 1) { echo 'parallaxin();'; }
	?>	
	
	//WINDOW LOAD
	jQuery(window).load(function(){
	
		<?php if($slideshowOn == 1){ ?>
		//HEADER SLIDESHOW
		if(headerImage.length > 1){
			setInterval(function(){ headerSlideshow(); }, <?php echo $slideshowTime; ?>);
		}
		<?php } ?>
	
	//WINDOW SCROLL	
	}).scroll(function(){
	
		//RUN FUNCTIONs
		<?php 
		if ($autoLoad == 1) { echo 'autoLoadPosts();'; }
		if ($parallax == 1) { echo 'parallaxin();'; }
		?>
	});	
});
</script>

</body>

</html>