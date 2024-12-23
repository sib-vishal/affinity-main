<header class="header stricky ">
	<div class="containerFull">
		<div class="inlineHeader">
			<div class="leftLogo">
				<a href="index.php">
					<img src="images/logo.png.webp" alt="">
				</a>
			</div>
			<div class="menu-links d-none d-lg-block ">
				<ul>
					<li><a class="<?= ($page == 'home') ? 'active' : ''; ?>" href="index.php">Home</a></li>
					<li><a class="<?= ($page == 'about') ? 'active' : ''; ?>" href="about-us.php">About Us</a></li>
					<li><a class="<?= ($page == 'services') ? 'active' : ''; ?>" href="services.php">Services</a></li>
					<li><a class="<?= ($page == 'portfolio') ? 'active' : ''; ?>" href="portfolio.php">Portfolio</a>
					</li>
					<li><a class="<?= ($page == 'contact') ? 'active' : ''; ?>" href="contact-us.php">Contact</a></li>
				</ul>



			</div>

			<div class="header_bottons">

				<a class="btn fontWeight600 header-btn" href="tel:267-645-9005 "><i class="fa-solid fa-phone me-1"></i>
					267-645-9005</a>

				<button class="btnMenu ms-3  d-lg-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
					aria-controls="offcanvasRight"><i class="fa fa-bars"></i></button>
			</div>



		</div>
	</div>
</header>

<div class="offcanvas offcanvas-end " tabindex="-1" id="offcanvasRight" aria-labelledby="mobileMenuLabel"
	aria-modal="true" role="dialog">
	<div class="offcanvas-header border-bottom">
		<a href="index.php">

			<img src="images/logo.png.webp" alt="">
		</a>
		<button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
	</div>
	<div class="offcanvas-body pt-3">
		<ul class="list-unstyled innerMenu menu_item">

			
				<li><a class="<?= ($page == 'home') ? 'active' : ''; ?>" href="index.php">Home</a></li>
				<li><a class="<?= ($page == 'about') ? 'active' : ''; ?>" href="about-us.php">About Us</a></li>
				<li><a class="<?= ($page == 'services') ? 'active' : ''; ?>" href="services.php">Services</a></li>
				<li><a class="<?= ($page == 'portfolio') ? 'active' : ''; ?>" href="portfolio.php">Portfolio</a></li>
				<li><a class="<?= ($page == 'contact') ? 'active' : ''; ?>" href="contact-us.php">Contact</a></li>
		

	</div>
	<div class="mobileOther">
		<p>Should you have inquiries, contact us:</p>
		<p><a href="tel:267-645-9005"><i class="fa fa-phone"></i> 267-645-9005</a></p>

		<div class="socialLink">
			<ul>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
				<li><a href="#"><i class="fab fa-youtube"></i></a></li>
				<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
			</ul>
		</div>
	</div>
</div>



<!-- popup  -->
<div class="modal fade show" id="formEnquire" tabindex="-1" aria-labelledby="exampleModalLabel" aria-modal="true"
	role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header ">
				<h3 class="modal-title fontHeading fontWeight700 
					small_heading" id="exampleModalLabel"><span>We're Here to Help</span></h3>
				<button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form method="post" action="email.php">
					<div class="row">
						<div class="col-lg-12">
							<div class="formItem mb-3">
								<div class="form-floating">
									<input type="hidden" name="hidden">
									<input type="text" required="" class="form-control" id="name" name="name"
										placeholder="name">
									<label for="name">Name</label>
								</div>
							</div>
							<div class="formItem mb-3">
								<div class="form-floating">
									<input type="tel" required="" class="form-control" id="phone" name="phone"
										placeholder="phone">
									<label for="phone">Phone</label>
								</div>
							</div>
							<div class="formItem">
								<div class="form-floating mb-3">
									<input type="email" required="" class="form-control" id="email" name="email"
										placeholder="email">
									<label for="email">Email</label>
								</div>
							</div>
						</div>
					</div>
					<div class="formItem">
						<button id="cpatchaSubmitBtn2" type="submit" name="submit"
							class="btnTheme btnmodel border-0 w-100">Send
							Request</button>
					</div>
				</form>
			</div>
			<div class="formfooter d-flex justify-content-between">
				<div class="item_contact">
					<a href="https://api.whatsapp.com/send?phone=amp;text=Hi"><i class="fab fa-whatsapp"></i>
						&nbsp; WhatsApp</a>
				</div>
				<div class="item_contact">
					<a href="tel:"><i class="fa fa-phone"></i> &nbsp; +91 929424344</a>
				</div>
			</div>
		</div>
	</div>
</div>



<!-- <div class="downloadbtn">
	<a href="#" data-bs-toggle="modal" data-bs-target="#formEnquire">Download Catalogue</a>
</div> -->

<div class="whatChat">
	<a target="_blank" href="https://api.whatsapp.com/send?phone=&amp;text=Hi">
		<picture>
			<source srcset="images/whatsapp.png" type="image/webp">
			<img src="images/whatsapp.png">
		</picture>
	</a>
</div>


<div class="cursor"></div>
<div class="cursor2"></div>