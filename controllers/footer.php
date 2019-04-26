    
    <!-- Modal1 -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header_w3layouts_agile">
					<button type="button" class="close" data-dismiss="modal">&times;</button>

					<div class="signin-form profile">

						<div class="login-m_page">
							<h3 class="sign">Sign In</h3>
							<div class="login-form">
								<form action="#" method="post">
									<input type="email" name="l_email" placeholder="E-mail" required="">
									<input type="password" name="l_password" placeholder="Password" required="">
									<div class="tp">
										<input type="submit" id="login" value="Sign In">
									</div>
								</form>
								<div class="alert alert-danger hidden login_error">
								</div>
							</div>
							<div class="login-social-grids">
								<ul>
									<li>
										<a href="#">
											<i class="fa fa-facebook"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-twitter"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fa fa-rss"></i>
										</a>
									</li>
								</ul>
							</div>
							<p>
								<a href="#" data-toggle="modal" data-target="#myModal3"> Don't have an account?</a>
							</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal1 -->
	<!-- Modal2 -->
	<div class="modal fade" id="myModal3"  role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header_w3layouts_agile">
					<button type="button" class="close" data-dismiss="modal">&times;</button>

					<div class="signin-form profile">

						<div class="login-m_page">
							<h3 class="sign">Sign Up</h3>
							<div class="login-form">
								<form action="#" method="post">
									<input type="text" name="r_fname" placeholder="First Name" required="">
									<input type="text" name="r_lname" placeholder="Last Name" required="">
									
									<input type="email" name="r_email" placeholder="Email" required="">
									<input type="text" name="r_country" placeholder="Country" required="">
									
									<input type="password" name="r_password" placeholder="Password" id="password1" required="">
									<input type="password" name="password" placeholder="Confirm Password" id="password2" required="">
									<input type="submit" id="signup" value="Sign Up">
								</form>
							</div>
							<div class="alert alert-danger hidden signup_error">
							</div>
							<p>
								<a href="#"> By clicking Sign up, I agree to your terms</a>
							</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal2 -->

	<!-- //myBuy -->
	<div class="modal fade" id="myBuy" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header_w3layouts_agile">
					<button type="button" class="close" data-dismiss="modal">&times;</button>

					<div class="signin-form profile">

						<div class="login-m_page">
							<h3 class="sign">Buy Coins</h3>
							<div class="login-form">
								<form action="#" method="post">
									<input type="text" name="b_address" placeholder="Bitcoin Wallet Address" required="">
									<input type="number" name="b_amount" placeholder="Amount" required="">
									
									<input type="password" name="b_password" placeholder="Confirm Your Account Password"  required="">
									<input type="submit" id="b_buy" value="Buy">
								</form>
							</div>
							<div class="alert alert-danger hidden b_error">
							</div>
							<p>
								<a href="#">kindly verify your bitcoin address, as successful transactions cannot be revoked</a>
							</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal2 -->


	<!-- //mySell -->
	<div class="modal fade" id="mySell" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header_w3layouts_agile">
					<button type="button" class="close" data-dismiss="modal">&times;</button>

					<div class="signin-form profile">

						<div class="login-m_page">
							<h3 class="sign">Sell Coins</h3>
							<div class="login-form">
								<form action="#" method="post">
									<input type="text" name="s_address" placeholder="Bitcoin Wallet Address" required="">
									<input type="number" name="s_amount" placeholder="Amount" required="">
									
									<input type="password" name="s_password" placeholder="Confirm Your Account Password"  required="">
									<input type="submit" id="s_sell" value="Sell">
								</form>
							</div>
							<div class="alert alert-danger hidden s_error">
							</div>
							<p>
								<a href="#">kindly verify your bitcoin address, as successful transactions cannot be revoked</a>
							</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal2 -->

    
    <!--footer-->
	<footer class="contact-footer">
		<div class="copy">

			<div class="col-md-4 social-icons text-center" >
				<h6>Connect with us</h6>
				<a class="facebook" href="#">
					<span class="fa fa-facebook"></span>
				</a>
				<a class="twitter" href="#">
					<span class="fa fa-twitter"></span>
				</a>
				<a class="pinterest" href="#">
					<span class="fa fa-pinterest-p"></span>
				</a>
				<a class="linkedin" href="#">
					<span class="fa fa-linkedin"></span>
				</a>
			</div>
			<div class="col-md-4 text-center">
				<h2 class="footer-logo">
					<a href="index.html">CoinExchangePro
						<span>investing in the future</span>
					</a>
				</h2>
			</div>
			<div class="col-md-4">
				<p>© 2018 CoinExchangePro. All rights reserved
				</p>
			</div>
			
			<div class="clearfix"></div>
		</div>
	</footer>
	<!--/footer -->

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="js/myscripts.js"></script>
	<!-- //js -->
	
	<!-- /js files -->
	<link href='css/aos.css' rel='stylesheet prefetch' type="text/css" media="all" />
	<link href='css/aos-animation.css' rel='stylesheet prefetch' type="text/css" media="all" />
	<script src='js/aos.js'></script>
	<script src="js/aosindex.js"></script>
	<!-- //js files -->
	<!--search-bar-->
	<script src="js/main.js"></script>
	<script src="js/responsiveslides.min.js"></script>
	
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<script type="text/javascript">
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<a href="#home" class="scroll" id="toTop" style="display: block;">
		<span id="toTopHover" style="opacity: 1;"> </span>
	</a>
	<script type="text/javascript" src="js/bootstrap.js"></script>


</body>

</html>