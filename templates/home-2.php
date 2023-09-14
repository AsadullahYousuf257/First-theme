<?php
/*
Template Name: Home-2
*/
?>

<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
<?php
  
  if( have_posts()):
   while(have_posts()): the_post();

 

  endwhile;
 endif;

 ?>
<body oncontextmenu=" return false" <?php body_class(); ?>>
<div class="container-fluid background-img">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 heading">
					<h1 class="first-heading"> Create Your <span class="red-text">Business</span> Logo With Us</h1>
					<ul class="unorder-list">
						<li class="lists">Web Development Starts with $34.99</li>
						<li class="lists">UI/UX Design Starts with $449.99</li>
						<li class="lists">Long Video Starts with $499.99</li>
						<li class="lists">Customer Satisfaction</li>
						<li class="lists">100% Ownership Rights</li>
					</ul>

					<a href="tel:(281) 624-0001"><span class="number">(281) 624-0001</span></a>
					<span class="call-for-qoutation">Call for a Quotation</span>

				</div>
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
					<img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Group 249.png" alt="" srcset="" class="logo-img">
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container-fluid counter-section">
	<div class="row">
		<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 smoke">
		<div class="counter-container">
<span class="counter" data-target="300"></span>
<span class="counter-title">Employees</span><br>
<span class="counter-description">in every years</span>
</div>
		</div>
		<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 black">
		<div class="counter-container">
<span class="counter-1" data-target="98"></span>
<span class="counter-title-1">Accuracy Rate</span><br>
<span class="counter-description-1">in every field</span>
</div>
		</div>
		<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 red">
		<div class="counter-container">
<span class="counter-1" data-target="250"></span>
<span class="counter-title-1">Incoming Project</span><br>
<span class="counter-description-2">in every years</span>
</div>
		</div>
	</div>
</div>
<div class="container-fluid background-section-img" style="background-image:url('<?php bloginfo( 'template_directory' ) ?>/assets/img/Group 386.png');">
	<div class="container">
	<div class="row">
		<div class="col-lg-12 col-xl-12">
		<div class="tab">
			<h5 class="custom">
				Our Custom
			</h5>
			<h1 class="logo">DIGITAL</h1>
			<h5 class="design-service">
				Design Service
			</h5>
  <button class="tablinks" onclick="openCity(event, 'Web')" id="defaultOpen">Web Development</button>
  <button class="tablinks" onclick="openCity(event, 'App')">App Development</button>
  <button class="tablinks" onclick="openCity(event, 'Branding')">Branding</button>
  <button class="tablinks" onclick="openCity(event, 'UI/UX')">UI/UX Design</button>

</div>

<div id="Web" class="tabcontent">
 <span class="vertical-number">01. </span> <span class="vertical-tab-title">Web Development</span>
  <p class="tab-content-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
obcaecati tenetur iure eius earum ut molestias architecto.</p><br>
  <div class="container">
	<div class="row">
		<div class="col-md-4 portfolio-logo"><img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Group 361.png" class="portfolio-logo"/></div>
		<div class="col-md-4 portfolio-logo"><img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Group 362.png" class="portfolio-logo"/></div>
		<div class="col-md-4 portfolio-logo"><img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Group 363.png" class="portfolio-logo"/></div>
	</div>
  </div>
  <div class="buttons-div">
  <a href="#"><button class="btn btn-outline-success my-2 my-sm-0 Order-now" >Order Now <img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Icon - Chevron.png" class="logos"/></button></a>
  <a href="#"><button class="transparent-btn" >Live Chat <img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Icon - Chevron-black.png" class="logos"/></button></a>
  </div>

</div>

<div id="App" class="tabcontent">
<span class="vertical-number">02. </span> <span class="vertical-tab-title">App Development</span>
<p class="tab-content-title">TLorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
obcaecati tenetur iure eius earum ut molestias architecto.</p><br>
  <div class="container">
	<div class="row">
		<div class="col-md-4 portfolio-logo"><img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/app-1.png" class="portfolio-logo"/></div>
		<div class="col-md-4 portfolio-logo"><img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/app-2.jpg" class="portfolio-logo"/></div>
		<div class="col-md-4 portfolio-logo"><img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/app-3.png" class="portfolio-logo"/></div>
	</div>
  </div>
  <div class="buttons-div">
  <a href="#"><button class="btn btn-outline-success my-2 my-sm-0 Order-now" >Order Now <img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Icon - Chevron.png" class="logos"/></button></a>
  <a href="#"><button class="transparent-btn" >Live Chat <img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Icon - Chevron-black.png" class="logos"/></button></a>
  </div>
</div>

<div id="Branding" class="tabcontent">
<span class="vertical-number">03. </span> <span class="vertical-tab-title">Branding</span>
<p class="tab-content-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
obcaecati tenetur iure eius earum ut molestias architecto.</p><br>
  <div class="container">
	<div class="row">
		<div class="col-md-4 portfolio-logo"><img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Group 349.png" class="portfolio-logo"/></div>
		<div class="col-md-4 portfolio-logo"><img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Group 350.png" class="portfolio-logo"/></div>
		<div class="col-md-4 portfolio-logo"><img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Group 368.png" class="portfolio-logo"/></div>
	</div>
  </div>
  <div class="buttons-div">
  <a href="#"><button class="btn btn-outline-success my-2 my-sm-0 Order-now" >Order Now <img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Icon - Chevron.png" class="logos"/></button></a>
  <a href="#"><button class="transparent-btn" >Live Chat <img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Icon - Chevron-black.png" class="logos"/></button></a>
  </div>
</div>
<div id="UI/UX" class="tabcontent">
<span class="vertical-number">04. </span> <span class="vertical-tab-title">UI/UX Design</span>
<p class="tab-content-title">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
obcaecati tenetur iure eius earum ut molestias architecto.</p><br>
  <div class="container">
	<div class="row">
		<div class="col-md-4 portfolio-logo"><img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Group 354.png" class="portfolio-logo"/></div>
		<div class="col-md-4 portfolio-logo"><img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Group 356.png" class="portfolio-logo"/></div>
		<div class="col-md-4 portfolio-logo"><img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Group 357.png" class="portfolio-logo"/></div>
	</div>
  </div>
  <div class="buttons-div">
  <a href="#"><button class="btn btn-outline-success my-2 my-sm-0 Order-now" >Order Now <img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Icon - Chevron.png" class="logos"/></button></a>
  <a href="#"><button class="transparent-btn" >Live Chat <img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Icon - Chevron-black.png" class="logos"/></button></a>
  </div>
</div>
		</div>
	</div>
	</div>
</div>

<div class="container laucnh-your-business-online">
	<div class="row">
		<div class="col-md-6">
		<img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/6736637-ai 1.png" alt="" class="launch-your-business">
		</div>
		<div class="col-md-6">
		<h2 class="service-offer">
		Internet Business <span class="redtext-service-offer">Launching Simple</span>.
		</h2>
		<p class="service-offer-para">
		Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos 
sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
recusandae alias error harum maxime adipisci amet laborum.
		</p>
		<a href="#"><button class="btn btn-outline-success my-2 my-sm-0 Order-now" >Get Started <img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Icon - Chevron.png" class="logos"/></button></a>

		</div>
	</div>
</div>
<!-- Offer Include Section -->
<div class="container-fluid offer-include" style="background-color:#26272A">
	<div class="container">
	<div class="row">
		
		<div class="col-md-12">
			<div class="container">
				<div class="row">
				<h1 class="offer-heading" style="color:#8F8F8F;font-size:70px"> Business And Trade Business <span class="red-text">Logo Design</span></h1>
					<div class="col-md-4">
					<img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Group 364.png" alt="" srcset="" class="offer-img">
						<h4 class="offer-title-service">Lorem ipsum dolor</h4>
						<p class="offer-para">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
molestiae quas vel sint commodi quas vel sint commodi
						</p>

					<!-- <br> -->
					<img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Group 365.png" alt="" srcset="" class="offer-img">
						<h4 class="offer-title-service">Lorem ipsum dolor</h4>
						<p class="offer-para">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
molestiae quas vel sint commodi quas vel sint commodi
						</p>
						<!-- <br> -->
						
					</div>
					<div class="col-md-4">
					<img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Group 365.png" alt="" srcset="" class="offer-img">
						<h4 class="offer-title-service">Lorem ipsum dolor</h4>
						<p class="offer-para">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
molestiae quas vel sint commodi quas vel sint commodi
						</p>

					<!-- <br> -->
					<img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Group 364.png" alt="" srcset="" class="offer-img">
						<h4 class="offer-title-service">Lorem ipsum dolor</h4>
						<p class="offer-para">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
molestiae quas vel sint commodi quas vel sint commodi
						</p>
						
					</div>
					<div class="col-md-4">
					
						<img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Group 364.png" alt="" srcset="" class="offer-img">
						<h4 class="offer-title-service">Lorem ipsum dolor</h4>
						<p class="offer-para">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
molestiae quas vel sint commodi quas vel sint commodi
						</p>
						<!-- <br> -->
						<img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Group 365.png" alt="" srcset="" class="offer-img">
						<h4 class="offer-title-service">Lorem ipsum dolor</h4>
						<p class="offer-para">
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
molestiae quas vel sint commodi quas vel sint commodi
						</p>

						
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
</div>

<div class="container service-offer-div">
	<div class="row">
		
		<h2 class="service-offer" style="color:#798196">
		Our Service to Provide Your <span class="redtext-service-offer">Career Grows</span>
		</h2>
		<p class="service-offer-para" style="margin-bottom: 50px;font-size: 19px;color: #798196;">
		Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et eaque ipsa quae ab illo inventore veritatis et 
		</p>
		
				<div class="col-md-3 service-column ml-1">
					<img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Icon Placeholder.png" class="palceholder">
					<h5 class="service-offer-title">
					Career conseling
					</h5>
					<p class="service-offer-description">
					Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium
					</p>
				</div>
				<div class="col-md-3 service-column ml-1">
					<img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Icon Placeholder (1).png" class="palceholder">
					<h5 class="service-offer-title">
					Recruiter Connection
					</h5>
					<p class="service-offer-description">
					Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium
					</p>
				</div>
				<div class="col-md-3 service-column ml-1">
					<img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Icon Placeholder.png" class="palceholder">
					<h5 class="service-offer-title">
					Skill Training
					</h5>
					<p class="service-offer-description">
					Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium					</p>
				</div>
				<div class="col-md-3 service-column ml-1">
					<img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Icon Placeholder (1).png" class="palceholder">
					<h5 class="service-offer-title">
					Test and Interview
					</h5>
					<p class="service-offer-description">
					Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium					</p>
				</div>
			
			
			<!-- <div class="row">
				<div class="col-md-6 service-column">
					<img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Icon Placeholder (1).png" class="palceholder">
					<h5 class="service-offer-title">
					Skill Training
					</h5>
					<p class="service-offer-description">
					Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium					</p>
				</div>
				<div class="col-md-6 service-column ml-1">
					<img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Icon Placeholder.png" class="palceholder">
					<h5 class="service-offer-title">
					Test and Interview
					</h5>
					<p class="service-offer-description">
					Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium					</p>
				</div>
			</div> -->
		
		
		<!-- <div class="col-md-4">
			<img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Image Placeholder.png" class="service-offer-img"/>
			<img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/Image Placeholder (1).png" class="service-offer-img"/>

		</div> -->
	</div>
</div>

<!-- <div class="container-fluid what-say">
	<div class="container">
	<div class="row">

	<div class="col-md-4">
		<img src="<?php bloginfo( 'template_directory' ) ?>/assets/img/what-say.png" class="what-say-img"/>
		</div>
		<div class="col-md-8">
		<h2 class="service-offer" style="color:#fff">
		What They <span class="blacktext-service-offer">Say</span>
		</h2>
		<p class="offer-para">
		Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.<br><br>

Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.<br><br>

Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.					</p>

<i class="fa-solid fa-star" style="color:#FFAC4A;margin:1px"></i><i class="fa-solid fa-star" style="color:#FFAC4A;margin:1px"></i><i class="fa-solid fa-star" style="color:#FFAC4A;margin:1px"></i><i class="fa-solid fa-star" style="color:#FFAC4A;margin:1px"></i><i class="fa-solid fa-star" style="color:#FFAC4A;margin:1px"></i>
		</div>
		
	</div>
	</div>
</div> -->


</body>

<?php get_footer();  ?>
<script>

	</script>