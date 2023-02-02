<!--Header-->
<?php
session_start()
?>
<header>
		<div class="top-bar_sub_w3layouts_agile">
			<h6>
				<i class="fa fa-phone" aria-hidden="true"></i> Call Us : 00950804988436
				<a href="contact.php">Contact Us </a>
			</h6>
			<div class="log">
				<h5>Free delivery order over $100</h5>
				<h5>
					<?php
                           
                           
						   if(@$_SESSION['user_login'] != null)
						   {
							   echo '<li class="nav-item">
							   <span class=""> Hi '.$_SESSION ['user_login'].' </span>
							   </li>';
							   
							   echo '<li class="nav-item">
							   <a class="" href="logout.php">Logout</a>
						   </li>';
						   }
						   else
						   {
							   echo '<li class="nav-item">
							   <a class="" href="login.php">Login</a>
						   </li>';
						   }
					   ?>
				</h5>
			</div>
			<div class="clearfix"> </div>
		</div>

		<div class="header_top" id="home">
			<nav class="navbar navbar-toggleable-md navbar-light bg-faded">
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
				    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a class="navbar-brand" href="index.php">
					<i class="far fa-gem"></i>Jewel</a>
				<div class="collapse navbar-collapse" id="navbarNavDropdown">
					<ul class="navbar-nav">
							<a class="nav-link cool" href="index.php">Home
								
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link cool" href="about.php">About</a>
						</li>
						<li class="nav-item">
							<a class="nav-link cool" href="price.php">Pricing</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle cool" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Dropdown
								<i class="fas fa-angle-down"></i>
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
								<a class="dropdown-item" href="soon.php">Comingsoon</a>

							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link cool" href="contact.php">Contact</a>
						</li>
					</ul>

				</div>
				<div class="header-search-agileits-w3ls">
					<form action="#" method="post">
						<div class="search">
							<input class="form-control" type="search" placeholder="Search here..." name="Search" required="">
						</div>
						<div class="section_room">
							<select id="country" onchange="change_country(this.value)" class="frm-field required">
								<option value="null">All Items</option>
								<option value="null">Gold </option>
								<option value="AX">Rings </option>
								<option value="AX">Watches</option>
								<option value="AX">Necklace</option>
								<option value="AX">Bracelets</option>
							</select>
						</div>
						<div class="sear-sub">
							<button class="btn btn1">
								<i class="fas fa-search"></i>
							</button>

						</div>
						<div class="clearfix"></div>
					</form>
				</div>
			</nav>

		</div>
	</header>
	<!--//header-->
