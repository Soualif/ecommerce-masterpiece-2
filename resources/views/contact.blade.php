@extends('layouts.master')

@section('content')


{{ Breadcrumbs::render('contact') }}

	<!--================Contact Area =================-->
	<section class="contact_area section_gap_bottom">
		<div class="container">
			
			<div class="row">
				<div class="col-lg-3">
					<div class="contact_info">
						<div class="info_item">
							<i class="lnr lnr-home"></i>
							<h6>Zürich, Schweiz</h6>
							<p>Röschibachstrasse 58,<br>8037</p>
						</div>
						<div class="info_item">
							<i class="lnr lnr-phone-handset"></i>
							<h6><a href="#">+41 (076) 744 99 92</a></h6>
							<p>Mon to Fri 9am to 6 pm</p>
						</div>
						<div class="info_item">
							<i class="lnr lnr-envelope"></i>
							<h6><a href="#">oerlikon64@gmail.com</a></h6>
							<p>Send us your query anytime!</p>
						</div>
					</div>
				</div>
				<div class="col-lg-9">
					<form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"></textarea>
							</div>
						</div>
						<div class="col-md-12 text-right">
							<button type="submit" value="submit" class="primary-btn">Send Message</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!--================Contact Area =================-->

	

	<!--================Contact Success and Error message Area =================-->
	<div id="success" class="modal modal-message fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="fa fa-close"></i>
					</button>
					<h2>Thank you</h2>
					<p>Your message is successfully sent...</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Modals error -->

	<div id="error" class="modal modal-message fade" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<i class="fa fa-close"></i>
					</button>
					<h2>Sorry !</h2>
					<p> Something went wrong </p>
				</div>
			</div>
		</div>
	</div>
	<!--================End Contact Success and Error message Area =================-->

@stop
<section class="footer-shop">
    <!-- start footer Area -->
<footer class="footer-area section_gap">
    <div class="container">
        <div class="row" id="div-about">
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>About Us</h6>
                    <p>
                        Mobile devices are more than everyday objects. They are our daily companions who know our most
                        important information and secrets. The security of your data is our top priority and that is why
                        we wipe every device immediately upon receipt so that nobody can read your personal data.
					</p>
                </div>
            </div>
            
            <div class="col-lg-4  col-md-6 col-sm-6" id="div-follow">
					<div class="single-footer-widget">
						<h6>Contact Us</h6>
						
						<div class="" id="mc_embed_signup">

							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="form-inline">

								<div class="d-flex flex-row">
                                handyshop@4handyshop.com<br>
								Röschibachstrasse 58, 8037 Zurich <br>
                                +41 (076) 744 99 92<br>
                                Mon to Fri 9 am to 6 pm	


									

									<!-- <div class="col-lg-4 col-md-4">
												<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
											</div>  -->
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-3  col-md-6 col-sm-6" id="div-follow">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20"><a href="https://www.instagram.com/">Instragram Feed</a></h6>
						<ul class="instafeed d-flex flex-wrap">
							<li><img src="img/img-test/images1.jpeg" alt=""></li>
							<li><img src="img/img-test/images2.jpeg" alt=""></li>
							<li><img src="img/img-test/images3.jpg" alt=""></li>
							<li><img src="img/img-test/images4.jpg" alt=""></li>
							<li><img src="img/img-test/images5.jpg" alt=""></li>
							<li><img src="img/img-test/images6.jpg" alt=""></li>
							<li><img src="img/img-test/images7.jpg" alt=""></li>
							<li><img src="img/img-test/images8.jpg" alt=""></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6" id="div-follow">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p>Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="https://facebook.com/"><i class="fa fa-facebook"></i></a>
							<a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
							<a href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a>
							<a href="https://www.behance.net/"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is created by <a href="https://laravel.com" target="_blank">Laravel</a> and  the template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>
			</div>
		</div>
</footer>

</section>