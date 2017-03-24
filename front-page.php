<?php 

/*
Template Name:Home
*/
get_header('home'); ?>
<!-- ////////// BODY ///////////// BODY ///////////// BODY /////////////// -->

<div class="homeContainer">


	<div class="topContent clearfix">
        <h1>Everything You Need. In One Place.</h1>
		<div class="intro row row-centered">
				<div class="tagline col-8 col-centered">
					<h2>From landlords and tenants to buyers and sellers, we provide consultative commercial real estate solutions focused on building <strong>long-term relationships</strong> with you and <strong>long-term success</strong> for your business.</h2>
				</div>
		</div> <!-- End of Intro Section -->
		
		<div class="quality row row-centered">

		<ul>
			<li class="col-3 col-m-4 col-centered">
			<?php echo '<img src="'. get_template_directory_uri().'/images/home_icons/Book-1.svg" alt="A Wealth of Knowledge!" />'; ?>
			<h2>+ A Wealth of Knowledge.</h2><h3>With over 600 years of combined experience, our team of experts provides you with the latest relevant data, marketing strategies and superior support you deserve.</h3></li>
			
			<li class="col-3 col-m-4 col-centered">
			<?php echo '<img src="'. get_template_directory_uri().'/images/home_icons/US With Heart-1.svg" alt="We Love Indy!" />'; ?>
			<h2>+ Locally-Owned.</h2><h3>As the largest, locally-owned firm in Indianapolis, our brokers are deeply-connected experts who care about the community and success of the city we live in. We are proud of our roots!</h3></li>

			<li class="col-3 col-m-4 col-centered">
			<?php echo '<img src="'. get_template_directory_uri().'/images/home_icons/You-1.svg" alt="Free to focus on you!" />'; ?>
			<h2>+ Free to Focus on You.</h2><h3>We don’t answer to stockholders. We aren’t an oversized corporation that only cares about boosting their numbers. We care about <underline>your</underline> numbers. </h3></li>
		</ul>
		
		</div><!-- END of "Qualities"-->
	</div><!-- END OF "topContent" -->

	<div class="coreservicesContainer clearfix">
			<h2 class="white">Core Services</h2>
			<div class="coreservicesContent row row-centered">

				<?php echo '<a href="'.home_url().'/category/office-services/">' ;?>
				<div class="icon col-4 col-m-8 col-centered">
					<?php echo '<img src="'. get_template_directory_uri().'/images/industry_icons/office_icon-01.svg" alt="Office Services" />'; ?>
					<div class="caption center"><p>Office</p></div>
				</div>
				</a>

				<?php echo '<a href="'.home_url().'/category/industrial/">' ;?> 
				<div class="icon col-4 col-m-8 col-centered">
					<?php echo '<img src="'. get_template_directory_uri().'/images/industry_icons/industrial_icon-01.svg" alt="Industrial Services"/>'; ?>
					<div class="caption center"><p>Industrial</p></div>
				</div></a>
				</a>		

				<?php echo '<a href="'.home_url().'/category/retail/">' ;?>
				<div class="icon col-4 col-m-8 col-centered">
					<?php echo '<img src="'. get_template_directory_uri().'/images/industry_icons/retail_icon-01.svg" alt="Retail Services" />'; ?>
					<div class="caption center"><p>Retail</p></div>
				</div>
				</a>

				<?php echo '<a href="'.home_url().'/category/land/">' ;?>
				<div class="icon col-4 col-m-8 col-centered land">
					<?php echo '<img src="'. get_template_directory_uri().'/images/industry_icons/land_icon-01.svg" alt="Land Services" class="land"/>'; ?>
					<div class="caption center"><p>Land</p></div>
				</div>
				</a>

				<?php echo '<a href="'.home_url().'/category/investments/">' ;?>
				<div class="icon col-4 col-m-8 col-centered">
					<?php echo '<img src="'. get_template_directory_uri().'/images/industry_icons/multifamily_icon-01.svg" alt="Multi-family and Investment Services" />'; ?>
					<div class="caption center"><p>Investments</p></div>
				</div>
				</a>
				
				<?php echo '<a href="'.home_url().'/category/property-management/">' ;?>
				<div class="icon col-4 col-m-8 col-centered">
					<?php echo '<img src="'. get_template_directory_uri().'/images/industry_icons/property_management_icon-01.svg" alt="Property Management Services" />'; ?>
					<div class="caption center"><p>Property Management</p></div>
				</div>
				</a>
		</div><!-- End of bottom row of icons -->
	</div> <!-- End of "coreservicesContainer" -->

	<div class="notsure clearfix">

		<h4>Not sure where to start? No problem!</h4>
		<a href="#popup1">Contact a professional > > </a>
	</div> <!-- End of "notsure" -->

	<div class="indyMain row">
			
			<h2>A Proven Process</h2>
			<p class="col-8">Anyone can “do a deal”— but can they help your business flourish?</p>
			
			<div class="indyIcon col-3 col-m-8 col-centered">
				<?php echo '<img src="'. get_template_directory_uri().'/images/home_icons/Speech Bubbles-1.svg" alt="Industrial Services" />';?>
				<h3>One-on-one Consultation</h3>
				<p>Understanding who you are, where you’re going and what your plans are for the future is important to us. It’s more than just real estate, it’s about helping you to grow your business.</p>
			</div>

			<div class="indyIcon col-3 col-m-8 col-centered">
				<?php echo '<img src="'. get_template_directory_uri().'/images/home_icons/Lightbult-1.svg" alt="Industrial Services" />';?>
				<h3>Creative Strategies</h3>
				<p>Utilizing our technical expertise, creative thinking and aggressive marketing, we are always looking for better ways of fulfilling your goals. We provide customized solutions that take into account exactly what you need. </p>
			</div>

			<div class="indyIcon col-3 col-m-8 col-centered">
				<?php echo '<img src="'. get_template_directory_uri().'/images/home_icons/Handshake-1.svg" alt="Industrial Services" />';?>
				<h3>Relationship Focused </h3>
				<p>Communicating with you at every step, we are your partner through this whole process. We aren’t a corporate giant. Our main goal is to establish a long and mutually rewarding relationship.</p>
			</div>

	</div><!-- END OF "indyMain" -->

	<div class="proof-bg row">
		<div class="proofContent">
			<h2>Stories of Success</h2>
			<br>
			<div class="proof-intro col-4 col-m-8 col-centered">When you do good work, it speaks for itself. Here are just a few of those <strong>Real Stories</strong>
			that we want to share with you.</div>
		</div> 

	<div class="testimonials row">

<div id="kite" class="quote col-3 col-m-6">
			<p>“The RESOURCE Land Services Team probably saved us significant time and money by listening to our goals and objectives from the beginning, and not focusing solely on our desire to find a piece of land to build a branch.”</p>
			<div class="client">
				-John Newett, Senior Vice President, Indiana Members Credit Union  
			</div>
		</div>

		<div id="roche" class="quote col-3 col-m-6">
			<p>“During my career at Roche Diagnostics, your team showed me what partnership and innovation can accomplish with your outstanding ability to negotiate very attractive real estate terms on behalf of me/Roche.” </p> 
			<div class="client">
				-Ray Jabick, Retired Purchasing Manager, Roche Diagnostics Corporation
			</div>
		</div>

		<div id="apple" class="quote col-3 col-m-6">
			<p>“Sam, you and RESOURCE put on a clinic in terms of demonstrating how the brokerage and representation function is supposed to work. I appreciate it a lot! Thanks for doing us a 1st rate job.”</p>
			<div class="client">
				-Doug Rose, President at Irwin R. Rose & Co., LLC
			</div>
		</div>

		<div class="get-started col-3 col-m-6">
			<p>Let’s work together. <br>We can’t wait to meet you. </p>
			<a href="#popup1">Get Started!</a>
		</div><!-- END OF GET STARTED -->
		
		</div>
	</div><!-- END OF "proof-bg" -->
</div> <!-- END OF "homeContainer" -->

<!-- ////////// FOOTER ///////////// FOOTER ///////////// FOOTER /////////////// -->

<? get_footer('home'); ?>