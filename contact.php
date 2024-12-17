
<?php 
include('includes/header.php');
include('includes/navbar.php');


?>


<!-- Page Title -->
<section class="page-title" style="background-image: url(images/background/contact-banner.jpg)">
		
    	<div class="auto-container">
			<h2>Contact</h2>
			<ul class="page-breadcrumb">
				<li><a href="index.php">home</a></li>
				<li>Contact</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->


	
	<!-- Contact Page Section -->
	<section class="contact-page-section">
		<div class="auto-container">
			<!-- Sec Title -->
			<div class="sec-title centered">
				<div class="title" style="color:tomato;">Get in touch</div>
				<h2>Say <span style="color:tomato;">Hello</span></h2>
				
				<div class="text">Discover a culinary journey like no other at our restaurant, where passion for food meets the art of dining. Immerse yourself in a world of exquisite flavors and impeccable service, ensuring every visit is a delightful experience for your senses</div>
			</div>
			<div class="row clearfix">
			
				<!-- Form Column -->
				<div class="form-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="title-box">
							<h4>Drop us a line</h4>
							<div class="text">Your email address will not be published. Required fields are marked *</div>
						</div>
						
						<!-- Contact Form -->
						
						<div class="contact-form">
							<form method="post" action="sendemail.php" id="contact-form">
								<div class="row clearfix">
								
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<textarea name="message" placeholder="Your Comment"></textarea>
									</div>
								
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="text" name="username" placeholder="Your Name" required>
									</div>
									
									<div class="form-group col-lg-6 col-md-6 col-sm-12">
										<input type="email" name="email" placeholder="Your Email" required>
									</div>


									
								

									<div class="form-group col-lg-6 col-md-6 col-sm-12" >
										<input type="text" name="contact-number" placeholder="Contact Number" required>
									</div>
									
									<div class="form-group col-lg-12 col-md-12 col-sm-12">
										<button type="submit" class="theme-btn btn-style-four clearfix" style="background-color:tomato;"><span class="icon flaticon-arrow-pointing-to-right"></span>Send</button>
									</div>
									
								</div>
							</form>
							<!-- Contact Form -->
						</div>
						
						
					</div>
				</div>
				
				<!-- Info Column -->
				<div class="info-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<ul class="info-list">
						<li>
								<strong>The Tiffin Truck - City Center </strong>
								#22 Regent Street, <br>Cambridge CB2 1DB.  <br>0122 3481203 <br><a href="mailto:hello@thetiffintruck.co.uk" style="color:tomato;">hello@thetiffintruck.co.uk</a>
							</li>
							<li>
								<strong>Opening Hours</strong>
								Monday – Friday 11:00 AM - 11:00 PM <br> Saturday - Sunday 10:00 AM - 11:00 PM
							</li>
							<li>
								<strong>The Tiffin Truck - Orchard Park</strong>
								Unit2&3 Orchard house, Unwin Square <br>Cambridge CB4 2AD.<br>01 223 366 111 <br><a href="mailto:hello@thetiffintruck.co.uk" style="color:tomato;">hello@thetiffintruck.co.uk</a>
							</li>
							<li>
								<strong>Opening Hours</strong>
								Monday – Sunday 12:00 PM - 10:30 PM
							</li>
						</ul>
					</div>
				</div>
			
			</div>
		</div>
		<!-- <div class="pattern-layer" style="background-image: url(images/gif/cycle-gif.gif)"></div> -->
	</section>
	
	<!-- End Contact Page Section -->
	
	<!-- Map Section -->
	<section class="contact-map-section">
		<div class="auto-container">
			<!-- Map Boxed -->
			<div class="map-boxed">
				<!--Map Outer-->
				<div class="map-outer">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2445.294479287818!2d0.12238767652554848!3d52.201695859747254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d87099e06c8cc3%3A0x3ad9aefe6748d30c!2sThe%20Tiffin%20Truck!5e0!3m2!1sen!2sin!4v1700575203676!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				</div>
			</div>
		</div>
	</section>
	<!-- End Map Section -->
	
	<!-- Gallery Section -->
    <section class="gallery-section">
		<div class="outer-container">
			<div class="gallery-carousel owl-carousel owl-theme">
				
				<!-- Gallery Block -->
				<div class="gallery-block">
					<div class="inner-box">
						<figure class="image-box">
							<img src="images/gallery/1.jpg" alt="">
							<!-- Overlay Box -->
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<a href="images/gallery/1.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-plus"></a>
									</div>
								</div>
							</div>
						</figure>
					</div>
				</div>
				
				<!-- Gallery Block -->
				<div class="gallery-block">
					<div class="inner-box">
						<figure class="image-box">
							<img src="images/gallery/2.jpg" alt="">
							<!-- Overlay Box -->
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<a href="images/gallery/2.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-plus"></a>
									</div>
								</div>
							</div>
						</figure>
					</div>
				</div>
				
				<!-- Gallery Block -->
				<div class="gallery-block">
					<div class="inner-box">
						<figure class="image-box">
							<img src="images/gallery/3.jpg" alt="">
							<!-- Overlay Box -->
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<a href="images/gallery/3.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-plus"></a>
									</div>
								</div>
							</div>
						</figure>
					</div>
				</div>
				
				<!-- Gallery Block -->
				<div class="gallery-block">
					<div class="inner-box">
						<figure class="image-box">
							<img src="images/gallery/4.jpg" alt="">
							<!-- Overlay Box -->
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<a href="images/gallery/4.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-plus"></a>
									</div>
								</div>
							</div>
						</figure>
					</div>
				</div>
				
				<!-- Gallery Block -->
				<div class="gallery-block">
					<div class="inner-box">
						<figure class="image-box">
							<img src="images/gallery/5.jpg" alt="">
							<!-- Overlay Box -->
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<a href="images/gallery/5.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-plus"></a>
									</div>
								</div>
							</div>
						</figure>
					</div>
				</div>
				
				<!-- Gallery Block -->
				<div class="gallery-block">
					<div class="inner-box">
						<figure class="image-box">
							<img src="images/gallery/1.jpg" alt="">
							<!-- Overlay Box -->
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<a href="images/gallery/1.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-plus"></a>
									</div>
								</div>
							</div>
						</figure>
					</div>
				</div>
				
				<!-- Gallery Block -->
				<div class="gallery-block">
					<div class="inner-box">
						<figure class="image-box">
							<img src="images/gallery/2.jpg" alt="">
							<!-- Overlay Box -->
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<a href="images/gallery/2.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-plus"></a>
									</div>
								</div>
							</div>
						</figure>
					</div>
				</div>
				
				<!-- Gallery Block -->
				<div class="gallery-block">
					<div class="inner-box">
						<figure class="image-box">
							<img src="images/gallery/3.jpg" alt="">
							<!-- Overlay Box -->
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<a href="images/gallery/3.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-plus"></a>
									</div>
								</div>
							</div>
						</figure>
					</div>
				</div>
				
				<!-- Gallery Block -->
				<div class="gallery-block">
					<div class="inner-box">
						<figure class="image-box">
							<img src="images/gallery/4.jpg" alt="">
							<!-- Overlay Box -->
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<a href="images/gallery/4.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-plus"></a>
									</div>
								</div>
							</div>
						</figure>
					</div>
				</div>
				
				<!-- Gallery Block -->
				<div class="gallery-block">
					<div class="inner-box">
						<figure class="image-box">
							<img src="images/gallery/5.jpg" alt="">
							<!-- Overlay Box -->
							<div class="overlay-box">
								<div class="overlay-inner">
									<div class="content">
										<a href="images/gallery/5.jpg" data-fancybox="gallery" data-caption="" class="icon flaticon-plus"></a>
									</div>
								</div>
							</div>
						</figure>
					</div>
				</div>
				
			</div>
		</div>
	</section>
	<!-- End Gallery Section -->

    <?php 
include('includes/footer.php');

?>