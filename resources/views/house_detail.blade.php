<!DOCTYPE html>

<html lang="en-US">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
	<link rel='stylesheet' type='text/css' href='http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css'/>
	<link rel="stylesheet" href="assets/css/bootstrap-select.min.css" type="text/css">
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
	<link rel="stylesheet" href="assets/css/style.css" type="text/css">
	<link rel="stylesheet" href="assets/css/selectize.css" type="text/css">
	<title>Suburb | House Page</title>
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
								<?php $photos = $detail->responsivePhotos ?>
								@foreach($photos as $photo)
								<div class="item">
									<div class="image" style="background: url({{$photo->mixedSources->jpeg[5]->url}}) center"></div>
								</div>
								@endforeach
							</div>
							<!-- End Owl carousel -->
						</div>
						<div id="tab22" class="tab">
							<!-- Map -->
							{{--<div id="map4"></div>--}}
							<!-- end Map -->
							<img src="{{$detail->staticMap->sources[2]->url}}" width="100%" height="350px">
						</div>
						<div id="tab3" class="tab">
                            <?php $streetview= $detail->streetView ?>

							<img src="{{$streetview->addressSources[2]->url}}" width="100%" height="350px">

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
						<li><a href="#">Search Result</a></li>
						<li class="active">House Detail</li>
					</ol>
				</div>
				<div class="container">
					<div class="row">
						<aside class="pr-summary col-md-4 col-xs-12">
								<div class="col-lg-7 col-md-6 col-sm-3 col-xs-6 hl-bl">
									<h2>${{$detail->price}}</h2>
									<?php
									$status = $detail->homeStatus;
									$status = str_replace('_',' ',$status);
									?>
									<h5 class="team-color">{{$status}}</h5>
								</div>
								<div class="row">
									<div class="col-md-12 col-sm-6 col-xs-12">
										<div class="row">
											<div class="col-lg-5 col-md-6 col-xs-6 cat-img">
												<img src="assets/img/bedroom.png" alt="">
												<p>{{$detail->bedrooms}} Bedrooms</p>
											</div>
											<div class="col-lg-7 col-md-6 col-xs-6 cat-img cat-img">
												<img src="assets/img/bathroom.png" alt="">
												<p >{{$detail->bathrooms}} Bathroom</p>
											</div>
										</div>
										<hr>
										<div class="row">
											<div class="col-xs-12">
												<div class="row">
													<div class="col-lg-5 col-md-6 col-xs-6 cat-img">
														<img src="assets/img/square.png" alt="">
														<p class="info_line">{{$detail->livingArea}} sqft</p>
													</div>
												</div>
												<div class="row">
													<div class="col-xs-12">
														<div class="col-lg-5 col-md-6 col-xs-6 line"></div>
														<div class="col-lg-5 col-md-6 col-xs-6 line"></div>
													</div>
												</div>
											</div>
										</div>
										<hr class="full-width">
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 col-sm-6 col-xs-12">
										<span class="ffs-bs">
											<button type="submit" class="btn btn-large btn-primary">contact agent</button>
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
						</aside>
						<div class="pr-info col-md-8 col-xs-12">
							<h2>{{$detail->streetAddress}},{{$detail->city}}</h2>
							<div class="map-marker"></div>
							<h5 class="team-color">{{$detail->streetAddress}}, {{$detail->city}}, {{$detail->state}} &nbsp;&nbsp;|&nbsp;&nbsp;<i class="fa fa-eye"></i>{{$detail->zipcode}}</h5>
							<p>{{$detail->description}}</p>
						</div>
						<div class="pr-info col-md-8 col-xs-12">
							<h3>Summary:</h3>
								<div class="row">
									<div class="col-md-6">
										<label style="color: #1b4b72">Home Type : {{$detail->homeType}}</label>
									</div>
									<div class="col-md-6">
										<label style="color: #1b4b72">Country : {{$detail->country}}</label>
									</div>
									<div class="col-md-6">
										<label style="color: #1b4b72">Festimate : {{$detail->festimate}}</label>
									</div>
									<div class="col-md-6">
										<label style="color: #1b4b72">Zestimate : {{$detail->zestimate}}</label>
									</div>
									<div class="col-md-6">
										<label style="color: #1b4b72">Rent Zestimate : {{$detail->rentZestimate}}</label>
									</div>
									<div class="col-md-6">
										<label style="color: #1b4b72">Lot Size : {{$detail->lotSize}}</label>
									</div>

								</div>
						</div>
						<div class="pr-info col-md-8 col-xs-12">
                            <?php $facts = $detail->homeFacts ?>
							<h3>Facts and features:</h3>
							<div class="row">
								@foreach($facts->atAGlanceFacts as $atAGlanceFact)
								<div class="col-md-6">
									<label style="color: #2a9055">{{$atAGlanceFact->factLabel}} : {{$atAGlanceFact->factValue}}</label>
								</div>
								@endforeach
							</div>

							@foreach($facts->categoryDetails as $categoryDetail)
							<h3>-----------  {{$categoryDetail->categoryGroupName}}  -------------</h3>
								@foreach($categoryDetail->categories as $category)
									@if($category->categoryName!= '')
									<label style="color: #2a9055">{{$category->categoryName}} : </label>
										@endif
										@foreach($category->categoryFacts as $cat_fact)
											<label style="font-weight: normal">{{$cat_fact->factLabel}} : {{$cat_fact->factValue}}</label>
										@endforeach
								@endforeach
							@endforeach

						</div>
					</div>
				</div>
			</div>
			<div class="wide_container_3">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-xs-12">
							<header><h4>Schools</h4></header>
							<ul class="comments">
								@foreach($detail->schools as $school)
								<li class="comment">
									<div class="comment-wrapper">
										<div class="name pull-left">{{$school->name}}</div>
										<span class="date-block team-color">{{$school->rating}} rating</span>
										<p><b>Distance :</b> {{$school->distance}}</p>
										<p><b>Grades :</b> {{$school->grades}}</p>
										<p><b>Is Assigned :</b> {{$school->isAssigned}}</p>
										<p><b>Level :</b> {{$school->level}}</p>
										<p><b>Students Per Teacher :</b> {{$school->studentsPerTeacher}}</p>
									</div>
								</li>
								@endforeach
							</ul>
						</div>
						<div class="col-md-4 col-xs-12 some-prp">
							<h4>Here is some near by homes:</h4>
							@foreach($detail->nearbyHomes as $nearbyHome)
							<hr>
							<div class="property-block-small">
								<a>
									<div class="property-image-small" style="background: url({{$nearbyHome->miniCardPhotos[0]->url}}) center;"></div>
									<h3>{{$nearbyHome->address->streetAddress}}</h3>
									<p class="team-color"> {{$nearbyHome->address->city}}, {{$nearbyHome->address->state}}, {{$nearbyHome->address->zipcode}}</p>
									<h4>$ {{$nearbyHome->price}}</h4>
								</a>
							</div>
							@endforeach
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

	<!-- Use this code below only if you are using google street view -->
	<!-- <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initialize&libraries=places"></script> -->

	<script src="https://maps.googleapis.com/maps/api/js?v=3&libraries=places"></script>
	<script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/markerwithlabel_packed.js"></script>
	<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.placeholder.js"></script>
	<script type="text/javascript" src="assets/js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="assets/js/masonry.pkgd.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.raty.min.js"></script>
	<script type="text/javascript" src="assets/js/waypoints.min.js"></script>
	<script type="text/javascript" src="assets/js/classie.js"></script>
	<script type="text/javascript" src="assets/js/selectize.min.js"></script>

	<script type="text/javascript" src="assets/js/custom-map.js"></script>
	<script type="text/javascript" src="assets/js/custom.js"></script>
<!--[if gt IE 8]>
<script type="text/javascript" src="assets/js/ie.js"></script>
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