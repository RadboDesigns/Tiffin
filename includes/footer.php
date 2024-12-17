
<!-- Main Footer -->
<footer class="main-footer" style="background:url('images/background/pattern-6.png'); background-position:  center center; background-repeat:no-repeat; background-size:cover">
<!-- 
<div class="pattern-layer-one">
			
		</div> -->
		
		
		<div class="auto-container">
		
        	<!-- Widgets Section -->
            <div class="widgets-section">
            	<div class="row clearfix">
                	
                    <!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget contact-widget">
									<h6>Contact Us</h6>
									<div class="text"><strong>Cambridge</strong><br>
								#22 Regent Street, <br>Cambridge CB2 1DB. </div>
									<ul class="contact-list">
										<li><span class="icon fa fa-send"></span><a href="maito:hello@thetiffintruck.co.uk">hello@thetiffintruck.co.uk</a></li>
										<li><span class="icon fa fa-phone"></span><a href="tel:01 223 366 111">01 223 366 111</a></li>
									</ul>
								</div>
							</div>
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
									<h6>Useful Links</h6>
									<ul class="footer-list">
										<li><a href="index.php">Home</a></li>
										<li><a href="about.php">About us</a></li>
										<li><a href="menu.php">Menu</a></li>
										<li><a href="https://online.thetiffintruck.co.uk/index.php?route=checkout/voucher">Gifts</a></li>
										<li><a href="takeaway.php">Takeaway</a></li>
										<li><a href="contact.php">Contact</a></li>

										
										
									</ul>
								</div>
							</div>
							
						</div>
					</div>
					
					<!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">
							
							<!--Footer Column-->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget social-widget">
									<h6>Follow Us Now</h6>
									<ul class="social-list">
										<li><a href="https://www.facebook.com/Thetiffintruck"><i class="fa-brands fa-facebook-f"></i>  Facebook</a></li>
										<li><a href="#"><i class="fa-brands fa-x-twitter"></i>   Twitter</a></li>
										<li><a href="https://instagram.com/thetiffintruck"><i class="fa-brands fa-instagram"></i>   Instagram</a></li>
										<button type="button" class="btn btn-primary book-now-btn "><a href='https://online.thetiffintruck.co.uk/menu/#'  class="reservation-btn">Order online</a></button>
										
									</ul>
								</div>
							</div>
							
							<!-- Footer Column -->
							<div class="footer-column col-lg-6 col-md-6 col-sm-12">
								<div class="footer-widget newsletter-widget">
									<h6>Subscribe</h6>
									<div class="newsletter-form">
										<form method="post" action="sendemail.php">
											<div class="form-group">
												<input type="email" name="email" value="" placeholder="Your Email" required="">
												<button type="submit" class="theme-btn submit-btn" style="background-color:tomato;">Subscribe Now</button >
											</div>

											
										</form>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
			<div class="footer-bottom">
				<div class="copyright">&copy; 2023 <a href="http://k3k.co.uk/" class="aurthor">K3k Networks ltd.</a> All Rights Reserved.</div>
			</div>
		</div>
	</footer>
	
</div>
<!--End pagewrapper-->

<!-- Search Popup -->
<div class="search-popup">
	<button class="close-search style-two"><span class="flaticon-multiply"></span></button>
	<button class="close-search"><span class="flaticon-up-arrow-1"></span></button>
	<form method="post" action="#">
		<div class="form-group">
			<input type="search" name="search-field" value="" placeholder="Search Here" required="">
			<button type="submit"><i class="fa fa-search"></i></button>
		</div>
	</form>
</div>
<!-- End Header Search -->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>



<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script>
// Update all "Order Online" buttons to trigger the modal
document.addEventListener('DOMContentLoaded', function() {
  const orderButtons = document.querySelectorAll('a[href="https://online.thetiffintruck.co.uk/menu/#"]');
  orderButtons.forEach(button => {
    button.href = '#';
    button.onclick = function(e) {
      e.preventDefault();
      $('#hotelModal').modal('show');
    };
  });
});
</script>

<script src="js/jquery.fancybox.js"></script>
<script src="js/appear.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/tilt.jquery.min.js"></script>
<script src="js/jquery.paroller.min.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/validate.js"></script>
<script src="js/isotope.js"></script>
<script src="js/nav-tool.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/script.js"></script>
<script type="text/javascript" language="javascript" src="https://booking.favouritetable.com/widget/ft_bookingwidgetv1.js"></script>




</div>
</body>


</html>