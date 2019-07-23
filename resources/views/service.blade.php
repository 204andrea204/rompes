@extends('layouts.user')
@section('content')
			
<?php
	$q = \App\Profile::where('id', 1)->first();

?>
			
			<!-- Start service-page Area -->
			<br><br><br>

			<section class="banner-area relative" id="home" style="background: url(images/{{$q->gambar_depan}}) center;
  background-size: cover;">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row fullscreen d-flex align-items-center justify-content-start">
						<div class="banner-content col-lg-12">
							<h6>Sejarah Mengenai Persilatan Rompes Si Pecut Betawai</h6>
							<span class="bar"></span>
							<h1 class="text-white">
								
								
							</h1>
						</div>
					</div>
				</div>
			</section>

			<section class="service-page-area section-gap">
				<h1 class="mb-10 header-text text-center">Pelatihan Yang diBerikan</h1>
				<div class="container" style="padding-top: 40px;">							
					<div class="row">
	

	              <?php
              $pelatihan = \App\Pelatihan2::all(); 
               ?>
               @foreach($pelatihan as $q)
						<div class="col-lg-4 col-md-6">
							<div class="single-service-page">
								<div class="thumbs relative">
									<div class="overlay-bg"></div>
									<img class="img-fluid-center" src="{{ url('images/'.$q->gambar)}}" style="height: 200px; width: 350px;">
								</div>
								<div class="details">
									<a href="#"><h4>{{$q->judul}}</h4></a>
									<p>
										{{$q->keterangan}}
								</div>
							</div>
						</div>					
			    @endforeach
					</div>
				</div>	
			</section>

			<!-- End service-page Area -->
			
			
			
@endsection