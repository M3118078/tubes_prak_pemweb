


<body>


<div class="super_container">
	
	<!-- Header -->
	
	<header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="images/phone.png" alt=""></div>+62 812 1708 1945</div>
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="images/mail.png" alt=""></div><a href="https://colorlib.com/cdn-cgi/l/email-protection#234542505750424f465063444e424a4f0d404c4e"><span class="__cf_email__" data-cfemail="34525547404755585147745359555d581a575b59">[email&#160;protected]</span></a></div>
						<div class="top_bar_content ml-auto">
							<div class="top_bar_menu">
								<ul class="standard_dropdown top_bar_dropdown">
									<li>
										<a href="#">English<i class="fas fa-chevron-down"></i></a>
										<ul>
											<li><a href="#">Italian</a></li>
											<li><a href="#">Spanish</a></li>
											<li><a href="#">Japanese</a></li>
										</ul>
									</li>
									
								</ul>
							</div>
							<div class="top_bar_user">
								
									<?php
										if(isset($_SESSION['username_user'])){
											echo "<a href='index.php?target=dashboard_user'>".$_SESSION['username_user']."</a>";
										} else {echo"
											<div class='user_icon'><img src='images/user.svg'></div>
											<div><a href='index.php?target=register'>Register</a></div>
											<div>
											<a href='index.php?target=login'>Sign in</a>";}
											//<div><a href='#'>Register</a></div>
									?>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- Header Main -->

		<div class="header_main" >
			<div class="container">
				<div class="row" style="margin-bottom: -30px; margin-top: -40px;">

					<!-- Logo -->
					<div class="col-lg-2 col-sm-3 col-3 order-1">
						<div class="logo_container">
							<div class="logo"><a href="#">tutuplapak</a></div>
						</div>
					</div>

					<!-- Search -->
					<div class="col-lg-8 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form action="getSearch.php" method="post" class="header_search_form clearfix">
										<input type="search" required="required" name="cari" class="header_search_input" placeholder="Search for products...">
										<div class="custom_dropdown">
											<div class="custom_dropdown_list">
												<span class="custom_dropdown_placeholder clc">All Categories</span>
												<i class="fas fa-chevron-down"></i>
												<ul class="custom_list clc">
													<li><a class="clc" href="#">All Categories</a></li>											
												</ul>
											</div>
										</div>
										<button type="submit" class="header_search_button trans_300" value="Submit" name='submit'><img src="images/search.png" alt=""></button>
									</form>
								</div>
							</div>
						</div>
					</div>

					<!-- Cart -->
					<div class="col-lg-2 col-9 order-lg-3 order-2 text-lg-left text-right">
						<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
							<div class="cart">
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<div class="cart_icon">
										<img src="images/cart.png" alt="">
										<div class="cart_count"><span>10</span></div>
									</div>
									<div class="cart_content">
										<div class="cart_text"><a href="index.php?target=kuitansi">Cart</a></div>
										<div class="cart_price">$85</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	
	</header>
</div>
</body>