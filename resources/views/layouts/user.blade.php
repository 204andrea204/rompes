	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Rompes Si Pecut Betawi</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{asset('cbi_user/css/linearicons.css')}}">
			<link rel="stylesheet" href="{{asset('cbi_user/css/font-awesome.min.css')}}">
			<link rel="stylesheet" href="{{asset('cbi_user/css/bootstrap.css')}}">
			<link rel="stylesheet" href="{{asset('cbi_user/css/magnific-popup.css')}}">
			<link rel="stylesheet" href="{{asset('cbi_user/css/nice-select.css')}}">					
			<link rel="stylesheet" href="{{asset('cbi_user/css/animate.min.css')}}">
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">	
			<link rel="stylesheet" href="{{asset('cbi_user/css/owl.carousel.css')}}">
			<link rel="stylesheet" href="{{asset('cbi_user/css/main.css')}}">
		</head>
		<body>
			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row header-top align-items-center">
			    		<?php
							$q = \App\Profile::where('id', 1)->first();

							?>
			    		<div class="col-lg-4 col-sm-4 menu-top-left">
			    			<a href="mailto:info@horseclub.com"><span class="lnr lnr-location"></span></a>
			    			<a class="tel" href="mailto:info@horseclub.com">{{$q->email}}m</a>
			    		</div>
			    		<div class="col-lg-4 menu-top-middle justify-content-center d-flex">
							<a href="{{url('/')}}">
								<center>
								<img class="img-fluid" src="{{asset('cbi_user/img/rompes.jpg')}}" alt="" style="width: 25%;">	
								</center>
							</a>			    			
			    		</div>
			    		<div class="col-lg-4 col-sm-4 menu-top-right">
			    			<a class="tel" href="tel:+880 123 12 658 439">{{$q->telepon}}</a>
			    			<a href="tel:+880 123 12 658 439"><span class="lnr lnr-phone-handset"></span></a>
			    		</div>
			    	</div>
			    </div>	
			    	<hr>
			    <div class="container">	
			    	<div class="row align-items-center justify-content-center d-flex">
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li><a href="{{url('/')}}">Home</a></li>
				          <li><a href="{{url('about')}}">About</a></li>
				          <li><a href="{{url('service')}}">Kegiatan</a></li>
				          <li><a href="{{url('gallery')}}">Gallery</a></li>
				          {{-- <li class="menu-has-children"><a href="">Blog</a>
				            <ul>
				              <li><a href="blog-home.html">Blog Home</a></li>
				              <li><a href="blog-single.html">Blog Single</a></li>
				            </ul>
				          </li> --}}
				          <li><a href="{{url('contact')}}">Contact</a></li>
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->

			<!-- start banner Area -->
				@yield('content')
			<!-- End banner Area -->	

			<!-- Start about-video Area -->
			
			<!-- End about-video Area -->
			
			<!-- Start feature Area -->
			
			<!-- End feature Area -->
			
			<!-- Start home-about Area -->
			
			<!-- End home-about Area -->
			
			<!-- Start price Area -->
			
			<!-- End price Area -->

			<!-- Start booking Area -->
			
			<!-- End booking Area -->

			<!-- Start latest-blog Area -->
			
			<!-- End latest-blog Area -->		

			<!-- Start gallery Area -->
			
			<!-- End gallery Area -->
			
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<?php
								$data = \App\Footer::where('id',1)->first();
								?>
								<h4>About Us</h4>
								<p>
									<h3 style="color: black;">{{$data->pengantar1}}</h3>
									<br>
									<p style="color: black;">{{$data->pengantar2}}
									<br>
									{{$data->pengantar3}}</p>
								</p>
							</div>
						</div>		
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h4>Newsletter</h4>
								<p>You can trust us. we only send  offers, not a single spam.</p>
								<div class="d-flex flex-row">
									  <form class="navbar-form" action="{{url('/admin/newsletter/save')}}" method="post">
									  	@csrf
									    <div class="input-group add-on align-items-center d-flex">
									      	<input class="form-control" name="email" placeholder="Email address" required="" type="email">
									      		<div class="input-group-btn">
									        	<button class="genric-btn"><span class="lnr lnr-arrow-right"></span></button>
									      		</div>
									    	</div>									    
									  </form>
								</div>
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
								<h4>Follow Us</h4>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#" target="_blank"><i class="fa fa-facebook" style="padding: 35%; color: black;"></i></a>
									<a href="#" target="_blank"><i class="fa fa-twitter" style="padding: 35%; color: black;"></i></a>
									<a href="#" target="_blank"><i class="fa fa-chrome" style="padding: 35%; color: black;"></i></a>
									<a href="#" target="_blank"><i class="fa fa-instagram" style="padding: 35%; color: black;"></i></a>
								</div>
						</div>										
					</div>
					<div class="footer-bottom row">
						<p class="footer-text m-0 col-lg-6 col-md-12">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>
				</div>
			</footer>
			<!-- End footer Area -->

			<script src="{{asset('cbi_user/js/vendor/jquery-2.2.4.min.js')}}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="{{asset('cbi_user/js/vendor/bootstrap.min.js')}}"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="{{asset('cbi_user/js/easing.min.js')}}"></script>			
			<script src="{{asset('cbi_user/js/hoverIntent.js')}}"></script>
			<script src="{{asset('cbi_user/js/superfish.min.js')}}"></script>	
			<script src="{{asset('cbi_user/js/jquery.ajaxchimp.min.js')}}"></script>
			<script src="{{asset('cbi_user/js/jquery.magnific-popup.min.js')}}"></script>	
			<script src="{{asset('cbi_user/js/owl.carousel.min.js')}}"></script>			
			<script src="{{asset('cbi_user/js/jquery.sticky.js')}}"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>				
			<script src="{{asset('cbi_user/js/jquery.nice-select.min.js')}}"></script>			
			<script src="{{asset('cbi_user/js/parallax.min.js')}}"></script>	
			<script src="{{asset('cbi_user/js/waypoints.min.js')}}"></script>
			<script src="{{asset('cbi_user/js/jquery.counterup.min.js')}}"></script>			
			<script src="{{asset('cbi_user/js/mail-script.js')}}"></script>	
			<script src="{{asset('cbi_user/js/main.js')}}"></script>	
		</body>
	</html>



