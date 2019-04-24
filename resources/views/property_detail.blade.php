<!DOCTYPE html>

<html lang="en-US">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="{{asset('assets/fonts/font-awesome.css')}}" rel="stylesheet" type="text/css">
	<link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css'/>
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap-select.min.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('assets/css/selectize.css')}}" type="text/css">
	<title>Suburb | Property Detail</title>
</head>

<body class="page-property" id="page-top">
	<!-- Preloader -->
	<div id="page-preloader">
		<div class="loader-ring"></div>
		<div class="loader-ring2"></div>
	</div>
	<!-- End Preloader -->
	
	<!-- Wrapper -->
	<div class="wrapper">
		<!-- Start Header -->
		<div id="header">@include('layouts.header_page')</div>
		<!-- End Header -->

		<!-- Page Content -->
		<div id="page-property-content">
			<div class="wide_container_3 carousel-full-width">
				<div class="tabs">
					<div class="tab-content">
						<div id="tab1" class="tab active">
							<!-- Owl carousel -->
							<div id="owl-demo-2" class="owl-carousel owl-theme">
								@foreach($property[0]->files as $file)
								<div class="item">
									<div class="image" style="background: url('storage/uploads/property/{{$file}}') center"></div>
								</div>
									@endforeach
							</div>
							<!-- End Owl carousel -->
						</div>
						<div id="tab22" class="tab">
							<!-- Map -->
							<div id="map4"></div>
							<!-- end Map -->
						</div>
						<div id="tab3" class="tab">
						</div>
					</div>
					<ul class="tab-links col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
						<li class="active col-xs-4"><a href="#tab1"><img src="assets/img/camera-black.png" alt=""/>Photo</a></li>
						<li class="col-xs-4"><a href="#tab22" class="map4"><img src="assets/img/map.png" alt=""/>Map</a></li>
						<li class="col-xs-4"><a href="#tab3" class="street-view"><img class="street-view-image" src="assets/img/street_view.png" alt=""/>Street View</a></li>
					</ul>
				</div>
			</div>
			<div class="wide-2">
				<div class="container">
					<ol class="breadcrumb">
						<li><a href="#">Home</a></li>
						<li><a href="#">Properties</a></li>
						<li class="active">Property Detail</li>
					</ol>
				</div>
				<div class="container">
					<div class="row">
						<aside class="pr-summary col-md-4 col-xs-12">
							<form action="agent_profile.html">
								<div class="col-lg-7 col-md-6 col-sm-3 col-xs-6 hl-bl">
									<h2>$1,000</h2>
									<h5 class="team-color">APARTMENT FOR PRICE</h5>
								</div>
								<div class="col-lg-5 col-md-6 col-sm-3 col-xs-6 hl-bl">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i><br>
									<div class="row">
										<p class="team-color col-md-6 col-xs-3">Rating:</p>
										<p class="team-color col-md-6 col-xs-3"><strong>5.0</strong>/5.0</p>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 col-sm-6 col-xs-12">
										<div class="row">
											<div class="col-lg-5 col-md-6 col-xs-6 cat-img">
												<img src="assets/img/bedroom.png" alt="">
												<p>3 Bedrooms</p>
											</div>
											<div class="col-lg-7 col-md-6 col-xs-6 cat-img cat-img">
												<img src="assets/img/bathroom.png" alt="">
												<p >1 Bathroom</p>
											</div>
										</div>
										<hr class="full-width">
									</div>
								</div>
								<div class="picker-block col-md-12 col-sm-6 col-xs-12">
									<div class="row">
										<div class=" col-xs-12">
											<div class="circle">
												<img src="http://placehold.it/65x65" alt="">
											</div>
											<div class="team-info">
												<h3>{{$username}}</h3>
												<p class="team-color">Superhero Agent</p> 
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 col-sm-6 col-xs-12">
										<span class="ffs-bs">
											<button type="submit" class="btn btn-large btn-primary">Search</button>
										</span>
										<div class="col-xs-12 fav-block">
											<div class="bookmark col-xs-6" data-bookmark-state="empty">
												<span class="title-add">Add to bookmark</span>
												<p class="col-xs-9 fav-text">Add to Favorit</p>
											</div>
											<div class="compare col-xs-6" data-compare-state="empty">
												<span class="plus-add">Add to compare</span>
												<p class="fav-text">Compare</p>
											</div>
										</div>
									</div>
								</div>
							</form>
						</aside>
						<div class="pr-info col-md-8 col-xs-12">
							<h2>{{$property[0]->property_name}}</h2>
							<div class="map-marker"></div>
							<h5 class="team-color">{{$property[0]->address}}</h5>
							<p>{{$property[0]->description}}</p>
						</div>
						<div class="pr-info col-md-8 col-xs-12">
							<h3>1. Location Information:</h3>
							<ul class="comments">
								@if($property[0]->neighborhood)
								<li class="comment">
									<div class="comment-wrapper">
										<div class="name pull-left">Neighborhood</div>
										<p>{{$property[0]->neighborhood}}
											<br>
										</p>
									</div>
								</li>
								@endif
								@if($property[0]->city)
									<li class="comment">
										<div class="comment-wrapper">
											<div class="name pull-left">City</div>
											<p>{{$property[0]->city}}
												<br>
											</p>
										</div>
									</li>
								@endif
								@if($property[0]->zipcode)
									<li class="comment">
										<div class="comment-wrapper">
											<div class="name pull-left">Zipcode</div>
											<p>{{$property[0]->zipcode}}
												<br>
											</p>
										</div>
									</li>
								@endif

							</ul>

						</div>
						<hr>
						<div class="pr-info col-md-8 col-xs-12">
							<h3>2. Listing Type:</h3>
							<br>
							<section class="block">
								<label>For Sale</label>
								<ul class="submit-features">
									<?php
									$sales = json_decode($property[0]->for_sale);
									?>
									@if($sales->by_agent == 0)
										<li class="col-md-4 col-xs-4 nonexistent"><div class="team-color">By Agent</div></li>
									@else
										<li class="col-md-4 col-xs-4"><div>By Agent</div></li>
									@endif

									@if($sales->by_owner == 0)
										<li class="col-md-4 col-xs-4 nonexistent"><div class="team-color">By Owner</div></li>
									@else
										<li class="col-md-4 col-xs-4"><div>By Owner</div></li>
									@endif
									@if($sales->new_construction == 0)
										<li class="col-md-4 col-xs-4 nonexistent"><div class="team-color">New Construction</div></li>
									@else
										<li class="col-md-4 col-xs-4"><div>New Construction</div></li>
									@endif
									@if($sales->foreclosures == 0)
										<li class="col-md-4 col-xs-4 nonexistent"><div class="team-color">Foreclosures</div></li>
									@else
										<li class="col-md-4 col-xs-4"><div>Foreclosures</div></li>
									@endif

									@if($sales->coming_soon == 0)
										<li class="col-md-4 col-xs-4 nonexistent"><div class="team-color">Coming Soon</div></li>
									@else
										<li class="col-md-4 col-xs-4"><div>Coming Soon</div></li>
									@endif
								</ul>
							</section>
							<section class="block">
								<label>Potential listings</label>
								<ul class="submit-features">
                                    <?php
                                    $potential_listings = json_decode($property[0]->potential_listings);
                                    ?>
									@if($potential_listings->foreclosed == 0)
										<li class="col-md-4 col-xs-4 nonexistent"><div class="team-color">Foreclosed</div></li>
									@else
										<li class="col-md-4 col-xs-4"><div>Foreclosed</div></li>
									@endif
									@if($potential_listings->pre_foreclosure == 0)
										<li class="col-md-4 col-xs-4 nonexistent"><div class="team-color">Pre-Foreclosure</div></li>
									@else
										<li class="col-md-4 col-xs-4"><div>Pre-Foreclosure</div></li>
									@endif
									@if($potential_listings->make_me_move == 0)
										<li class="col-md-4 col-xs-4 nonexistent"><div class="team-color">Make Me Move</div></li>
									@else
										<li class="col-md-4 col-xs-4"><div>Make Me Move</div></li>
									@endif
								</ul>

							</section>
						</div>
						<div class="pr-info col-md-8 col-xs-12">
							<h3>3. Home Type:</h3>
							<br>
							<section class="block">
								<ul class="submit-features">
                                    <?php
                                    $home_types = json_decode($property[0]->home_types);
                                    ?>
									@if($home_types->houses == 0)
										<li class="col-md-4 col-xs-4 nonexistent"><div class="team-color">Houses</div></li>
									@else
										<li class="col-md-4 col-xs-4"><div>Houses</div></li>
									@endif

									@if($home_types->apartments == 0)
										<li class="col-md-4 col-xs-4 nonexistent"><div class="team-color">Apartments</div></li>
									@else
										<li class="col-md-4 col-xs-4"><div>Apartments</div></li>
									@endif
									@if($home_types->condos == 0)
										<li class="col-md-4 col-xs-4 nonexistent"><div class="team-color">Condos/co-ops</div></li>
									@else
										<li class="col-md-4 col-xs-4"><div>Condos/co-ops</div></li>
									@endif
									@if($home_types->townhomes == 0)
										<li class="col-md-4 col-xs-4 nonexistent"><div class="team-color">Townhomes</div></li>
									@else
										<li class="col-md-4 col-xs-4"><div>Townhomes</div></li>
									@endif
									@if($home_types->manufactured == 0)
										<li class="col-md-4 col-xs-4 nonexistent"><div class="team-color">Manufactured</div></li>
									@else
										<li class="col-md-4 col-xs-4"><div>Manufactured</div></li>
									@endif
									@if($home_types->lots_land == 0)
										<li class="col-md-4 col-xs-4 nonexistent"><div class="team-color">Lots/land</div></li>
									@else
										<li class="col-md-4 col-xs-4"><div>Lots/land</div></li>
									@endif
								</ul>
							</section>
						</div>



					</div>
				</div>
			</div>
			<div class="wide_container_3">
				<div class="container">
					<div class="row">
						<div class="pr-info col-md-8 col-xs-12">
							<header><h4>4. Summary</h4></header>
							<ul class="comments">
								@if($property[0]->min_price || $property[0]->max_price)
								<li class="comment">
									<div class="comment-wrapper">
										<div class="name pull-left">Price Range</div>
										<p>${{$property[0]->min_price}} ~ ${{$property[0]->max_price}}
										</p>
									</div>
								</li>
								@endif

								@if($property[0]->square_feet_min || $property[0]->square_feet_max)
									<li class="comment">
										<div class="comment-wrapper">
											<div class="name pull-left">Square Feet Range</div>
											<p>{{$property[0]->square_feet_min}} ~ {{$property[0]->square_feet_max}}
											</p>
										</div>
									</li>
								@endif
								@if($property[0]->lot_size)
									<li class="comment">
										<div class="comment-wrapper">
											<div class="name pull-left">Lot Size</div>
											<p>{{$property[0]->lot_size}}
											</p>
										</div>
									</li>
								@endif
								@if($property[0]->year_built_min || $property[0]->year_built_max)
									<li class="comment">
										<div class="comment-wrapper">
											<div class="name pull-left">Year Built</div>
											<p>{{$property[0]->year_built_min}} ~ {{$property[0]->year_built_max}}
											</p>
										</div>
									</li>
								@endif

								@if($property[0]->max_hoa)
									<li class="comment">
										<div class="comment-wrapper">
											<div class="name pull-left">Max HOA</div>
											<p>{{$property[0]->max_hoa}}
											</p>
										</div>
									</li>
								@endif
								@if($property[0]->days_on_zillow)
									<li class="comment">
										<div class="comment-wrapper">
											<div class="name pull-left">Days on Zillow</div>
											<p>{{$property[0]->days_on_zillow}}
											</p>
										</div>
									</li>
								@endif
								@if($property[0]->Keywords)
									<li class="comment">
										<div class="comment-wrapper">
											<div class="name pull-left">Keywords</div>
											<p>{{$property[0]->Keywords}}
											</p>
										</div>
									</li>
								@endif
							</ul>
							<br>
							<br>
							<br>
							<br>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end Page Content -->
		
		<!-- Start Footer -->
    <div id="footer">@include('layouts.footer')</div>
    <!-- End Footer -->
	</div>

	<!-- Modal login, register, custom gallery, error report -->
	<div class="custom-galery">
		<input type="checkbox" class="gal" id="op">
		<div class="lower"></div>
		<div class="overlay overlay-hugeinc">
			<label for="op"></label>
			<nav>
				<!-- Owl carousel -->
				<div class="owl-carousel owl-theme carousel-full-width owl-demo-3">
					<div class="item" style="background-image: url(http://placehold.it/950X800);"></div>
					<div class="item" style="background-image: url(http://placehold.it/800X650);"></div>
				</div>
				<!-- End Owl carousel -->
			</nav>
		</div>
	</div>
	<div id="error-modal-open"></div>
	<!-- End Modal login, register, custom gallery, error report -->

	<!-- Use this code below only if you are using google street view -->
	<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initialize&libraries=places"></script> -->

	<script src="https://maps.googleapis.com/maps/api/js?v=3&libraries=places"></script>
	<script type="text/javascript" src="{{asset('assets/js/jquery-2.1.4.min.js')}}"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
	<script type="text/javascript" src="{{asset('assets/js/jquery-migrate-1.2.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/markerwithlabel_packed.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/jquery.placeholder.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/retina-1.1.0.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/masonry.pkgd.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/jquery.raty.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/waypoints.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/classie.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/selectize.min.js')}}"></script>

	<script type="text/javascript" src="{{asset('assets/js/custom-map.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>
<!--[if gt IE 8]>
<script type="text/javascript" src="{{asset('assets/js/ie.js')}}"></script>
<![endif]-->
<script>
 	//Date picker
 	$(document).ready(function() {
 		$("#date-from").datepicker({
 			showOtherMonths: true,
 			selectOtherMonths: true
 		});
 		$("#date-to").datepicker({
 			showOtherMonths: true,
 			selectOtherMonths: true
 		});
 	});

	//Google map for property page
	function initialize() {
		$.getScript("assets/js/locations.js", function() {
			var latlng = {lat: 51.512707, lng:  -0.130447};
			var mapOptions = {
				center: latlng,
				zoom: 15
			};
			var map = new google.maps.Map(document.getElementById('map4'),
				mapOptions);
			var marker = new MarkerWithLabel({
				position: latlng,
				map: map,
				labelContent: '<div class="marker-loaded"><div class="map-marker"><img src="assets/img/f.svg" alt="" /></div></div>',
				labelClass: "marker-style"
			});
			var contentString =   '<div id="mapinfo">'+
			'<h4 class="firstHeading">St Floor Wingate House</h4>'+
			'<h6>London, 93-107 Shaftesbury Ave, W1D 5DY</h6>';
			var infowindow = new google.maps.InfoWindow({
				content: contentString
			});
			marker.addListener('click', function() {
				infowindow.open(map, marker);
			});
			//resize for opeening and to get center of map
			$('.map4').bind('click', function(){
				google.maps.event.trigger(map4, 'resize');
				map.panTo(marker.getPosition());
			});

			// Use this code below only if you are using google street view
			/*	var fenway = {lat: 42.345573, lng: -71.098326};
			var panorama = new google.maps.StreetViewPanorama(document.getElementById('tab3'), {
					position: fenway,
					pov: {
						heading: 34,
						pitch: 10
					}
				});
			map.setStreetView(panorama);
			$('.street-view').bind('click', function(e){
				setTimeout(function() {
					google.maps.event.trigger(panorama, 'resize');
				}, 400 ); 
			});*/

		});
	}
	google.maps.event.addDomListener(window, 'load', initialize);  
</script>
  
</body>
</html>