<?php
include "header.php"
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Jewel a Jewellery & Cosmetics</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="#" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/soon.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Prata" rel="stylesheet">
</head>

<body>
	<section class="banner-bottom-w3ls-agileinfo coming-soon">
			<div class="content-timer"> 
					<h3 class="tittle cen soon">Stay tuned 
we're launching soon. </h3>
					<div class="clock">
						<div class="column days">
							<div class="timer" id="days"></div>
							<div class="text">DAYS</div>
						</div>
						<div class="timer days"></div>
						<div class="column">
							<div class="timer" id="hours"></div>
							<div class="text">HOURS</div>
						</div>
						<div class="timer"></div>
						<div class="column">
							<div class="timer" id="minutes"></div>
							<div class="text">MINUTES</div>
						</div>
						<div class="timer"></div>
						<div class="column">
							<div class="timer" id="seconds"></div>
							<div class="text">SECONDS</div>
						</div>
						<div class="clear"> </div>
					</div>	 
				</div>
	
				<!--newsletter-->
			<div class="newsletter">
				<h4>Subscribe Now</h4>
				<form action="#" method="post" class="newsletter">
					<input class="form-control" class="email" type="email" placeholder="Your Email and Get Notified..." required="">
					<input class="form-control" type="submit" class="submit" value="subscribe">
				</form>
				<ul class="social_list1">
						<li>
							<a href="#" class="facebook1">
								<i class="fab fa-facebook-f"></i>

							</a>
						</li>
						<li>
							<a href="#" class="twitter2">
								<i class="fab fa-twitter"></i>

							</a>
						</li>
						<li>
							<a href="#" class="dribble3">
								<i class="fab fa-dribbble"></i>
							</a>
						</li>
					</ul>

            </div>
			<!--//newsletter-->

	</section>

	<!--/model-->
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body video">
							<div class="signin-form profile">
									<div class="login-m_page">
										<h3 class="sign">Sign In</h3>
										<div class="login-form">
											<form action="#" method="post">
												<input class="form-control" type="email" name="email" placeholder="E-mail" required="">
												<input class="form-control" type="password" name="password" placeholder="Password" required="">
												<div class="tp">
													<input class="form-control" type="submit" value="Sign In">
												</div>
											</form>
										</div>
										<div class="login-social-grids">
											<ul class="social_list1">
												<li>
													<a href="#" class="facebook1">
														<i class="fab fa-facebook-f"></i>

													</a>
												</li>
												<li>
													<a href="#" class="twitter2">
														<i class="fab fa-twitter"></i>

													</a>
												</li>
												<li>
													<a href="#" class="dribble3">
														<i class="fab fa-dribbble"></i>
													</a>
												</li>
											</ul>

										</div>
										<p><a href="#" data-toggle="modal" data-target="#exampleModal2"> Don't have an account?</a></p>
									</div>
									
								</div>
			
	
					</div>
				</div>
			</div>
		</div>
		<!--//model-->
	<!-- Modal -->
	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body video">
						<div class="signin-form profile">
								<div class="login-m_page">
									<h3 class="sign">Sign Up</h3>
									<div class="login-form">
										<form action="#" method="post">
											<input class="form-control" type="text" name="name" placeholder="Name" required="">
											<input class="form-control" type="email" name="email" placeholder="Email" required="">
											<input class="form-control" type="password" name="password" id="password1" placeholder="Password" required="">
											<input class="form-control" type="password" name="password" id="password2" placeholder="Confirm Password" required="">
											<input class="form-control" type="submit" value="Sign Up">
										</form>
									</div>
									<p><a href="#"> By clicking Sign up, I agree to your terms</a></p>
								</div>
		
								
							</div>
		

				</div>
				
			</div>
		</div>
	</div>
	<!--//model-->
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<!-- //js -->
	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->
	<!-- js -->
	<!--scripts--> 
	<script src=" js/moment.js"></script>
	<script src=" js/moment-timezone-with-data.js"></script>
	<link rel="stylesheet" href="css/jquery.countdown.css" />
	<script src="js/timer.js"></script>
<!--//scripts--> 
	<!--js-->
	<!-- start-smoth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
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
	<script>
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
<?php
	include "footer.php";
?>
</body>
</html>