<!DOCTYPE html>

<html lang="en-US">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="{{asset('assets/fonts/font-awesome.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap-select.min.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('assets/css/selectize.css')}}" type="text/css">
	<title>Suburb | Add Property</title>
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
		<div id="page-content">
			<div class="wide-4">
				<div class="container">
					<ol class="breadcrumb">
						<li><a href="index_v_1.html">Home</a></li>
						<li class="active">Add Property</li>
					</ol>
				</div>
				<div class="container">
					<div class="explore">
						<h2>Update Property</h2>
						<h5 class="team-color">It is easy and takes 15 min maximum</h5>
					</div>
					<form id="form-submit" class="form-submit" action="/update-property" method="post" enctype="multipart/form-data">
						@csrf
						<input type="hidden" name="property_id" value="{{$property->id}}">
						<div class="wide-3">
							<div class="explore">
								<div class="property-map-marker"><img src="{{asset('assets/img/marker-full.png')}}" alt="" /><span class="marker-number">1</span></div>
								<div class="prt-cont">
									<div class="property-title">
										<h3>Main Information</h3>
										<h5 class="team-color">Lorem Ipsum is simply dummy text of the printing and  typesetting industry. </h5>
									</div>
								</div>
							</div>
							<div class="prt-cont">
								<hr>
								<div class="form-group">
									<label>Property Title:</label>
									<input type="text" class="form-control" name="property_name" value="{{$property->property_name}}" placeholder="Enter your title (maximum 250 characters)" required>
								</div>
								<div class="row">
									<div class="col-md-8 col-sm-8 col-xs-12">
										<div class="form-group">
											<label for="text-area-2">Description:</label>
											<textarea id="text-area-2" name="description" rows="6" cols="45" class="form-control">{{$property->description}}</textarea>
										</div>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-12">
										<div class="form-group">
											<label>Featured Photo</label>
											<div class="featured-image-block">
												<img src="{{asset('assets/img/camera.png')}}" alt="" class="property-icon camera">
												<h3> Add Featured Photo</h3>
												<h5 class="team-color">Lorem Ipsum is simply dummy text of the printing and</h5>
												<input id="file-upload" type="file" name="photo[]" class="file" multiple data-show-upload="false" data-show-caption="false" data-show-remove="false" accept="image/jpeg,image/png" data-browse-class="btn btn-default" data-browse-label="Add Files">
												<label for="file-upload">
													<img src="{{asset('assets/img/upload.png')}}" alt="" class="image-upload-icon">Add File
												</label>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="explore">
								<div class="property-map-marker"><img src="{{asset('assets/img/marker-full.png')}}" alt="" /><span class="marker-number">2</span></div>
								<div class="prt-cont">
									<div class="property-title">
										<h3>Location Information</h3>
										<h5 class="team-color">Lorem Ipsum is simply dummy text of the printing and  typesetting industry. </h5>
									</div>
								</div>
							</div>
							<div class="prt-cont">
								<hr>
								<div class="row">
									<div class="location-info col-md-6 col-sm-6 col-xs-12">
										<div class="form-group">
											<label>neighborhood</label>
											<input type="text" class="form-control" name="neighborhood" value="{{$property->neighborhood}}" placeholder="Enter property neighborhood">
										</div>
										<div class="form-group grey-color">
											<label class="team-color">city</label>
											<input type="text" class="form-control" name="city" value="{{$property->city}}" placeholder="Enter property city">
										</div>
										<div class="form-group">
											<label>Post/ZIP Code:</label>
											<input type="text" name="zipcode" value="{{$property->zipcode}}" class="form-control" placeholder="_ _ - _ _ _">
										</div>
									</div>
									<div class="location-map col-md-6 col-sm-6 col-xs-12">
										<div class="input-group">
											<label for="address-map">Address</label>
											<input type="text" class="form-control" id="address-map" name="address" value="{{$property->address}}">
											<i class="fa fa-search"></i>
										</div>
										<div id="submit-map"></div>
										<div class="row">
											<div class="col-md-6 col-sm-6 col-xs-12">
												<div class="form-group">
													<label for="latitude">Coordinates</label>
													<input type="text" class="form-control" placeholder="Latitude" id="latitude" readonly>
												</div>
											</div>
											<div class="col-md-6 col-sm-6 col-xs-12">
												<div class="form-group">
													<label for="longitude">&nbsp;</label>
													<input type="text" class="form-control" placeholder="Longitude" id="longitude" readonly>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="explore">
								<div class="property-map-marker"><img src="{{asset('assets/img/marker-full.png')}}" alt="" /><span class="marker-number">5</span></div>
								<div class="prt-cont">
									<div class="property-title">
										<h3>Listing Type</h3>
										<h5 class="team-color">Lorem Ipsum is simply dummy text of the printing and  typesetting industry. </h5>
									</div>
								</div>
							</div>
							<div class="prt-cont features">
								<hr>
								<div class="row">
									<div id="property-features" class="block">
										<div class="row">
											<label>For Sale</label>
											<?php $sales = json_decode($property->for_sale); ?>
											<ul class="submit-features">
												<li class="col-md-4 col-sm-4 col-xs-6"><div class="checkbox"><label><input type="checkbox" name="by_agent" @if($sales->by_agent == 1) checked @endif>By Agent</label></div></li>
												<li class="col-md-4 col-sm-4 col-xs-6"><div class="checkbox"><label><input type="checkbox" name="by_owner" @if($sales->by_owner == 1) checked @endif>By Owner</label></div></li>
												<li class="col-md-4 col-sm-4 col-xs-6"><div class="checkbox"><label><input type="checkbox" name="new_construction" @if($sales->new_construction == 1) checked @endif>New Construction</label></div></li>
												<li class="col-md-4 col-sm-4 col-xs-6"><div class="checkbox"><label><input type="checkbox" name="foreclosures" @if($sales->foreclosures == 1) checked @endif>Foreclosures</label></div></li>
												<li class="col-md-4 col-sm-4 col-xs-6"><div class="checkbox"><label><input type="checkbox" name="coming_soon" @if($sales->coming_soon == 1) checked @endif>Coming Soon</label></div></li>
											</ul>
										</div>
										<hr>
									</div>
								</div>
								<div class="row">
									<div id="property-features" class="block">
										<div class="row">
											<label>Potential listings</label>
                                            <?php
                                            $potential_listings = json_decode($property->potential_listings);
                                            ?>
											<ul class="submit-features">
												<li class="col-md-4 col-sm-4 col-xs-6"><div class="checkbox"><label><input type="checkbox" name="foreclosed" @if($potential_listings->foreclosed == 1) checked @endif>Foreclosed</label></div></li>
												<li class="col-md-4 col-sm-4 col-xs-6"><div class="checkbox"><label><input type="checkbox" name="pre_foreclosure" @if($potential_listings->pre_foreclosure == 1) checked @endif>Pre-Foreclosure</label></div></li>
												<li class="col-md-4 col-sm-4 col-xs-6"><div class="checkbox"><label><input type="checkbox" name="make_me_move" @if($potential_listings->make_me_move == 1) checked @endif>Make Me Move</label></div></li>
											</ul>
										</div>
										<hr>
									</div>
								</div>
								<div class="row">
									<div id="property-features" class="block">
										<div class="row">
                                            <?php
                                            $for_rent = json_decode($property->for_rent);
                                            ?>

											<div class="col-md-3">
												<label>For Rent</label>
												<div class="checkbox"><label><input type="checkbox" name="for_rent" @if($for_rent->for_rent == 1) checked @endif>For Rent</label></div>
											</div>
											<div class="col-md-3">
												<label>Recently Sold</label>
												<div class="checkbox"><label><input type="checkbox" name="recently_sold" @if($for_rent->recently_sold == 1) checked @endif>Recently Sold</label></div>
											</div>
											<div class="col-md-3">
												<label>Open Houses Only</label>
												<div class="checkbox"><label><input type="checkbox" name="open_houses" @if($for_rent->open_houses == 1) checked @endif>Open Houses</label></div>
											</div>
											<div class="col-md-3">
												<label>Pending & Under Contract</label>
												<div class="checkbox"><label><input type="checkbox" name="pending_under" @if($for_rent->pending_under == 1) checked @endif>Pending & Under</label></div>
											</div>
										</div>
										<hr>
									</div>
								</div>

							</div>


							<div class="explore">
								<div class="property-map-marker"><img src="{{asset('assets/img/marker-full.png')}}" alt="" /><span class="marker-number">3</span></div>
								<div class="prt-cont">
									<div class="property-title">
										<h3>Summary</h3>
										<h5 class="team-color">Lorem Ipsum is simply dummy text of the printing and  typesetting industry. </h5>
									</div>
								</div>
							</div>
							<div class="prt-cont">
								<hr>
								<div class="row">
									<div class="col-md-4 col-sm-4 col-xs-12">
										<div class="form-group">
											<label>Min Price</label>
											<input type="number" class="form-control" name="min_price" min="0" value="{{$property->min_price}}" placeholder="Enter your Min Price">
										</div>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-12">
										<div class="form-group">
											<label>Max Price</label>
											<input type="number" class="form-control" min="0" name="max_price" value="{{$property->max_price}}" placeholder="Enter your Max Price">
										</div>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-12">
										<div class="form-group">
											<label>Beds</label>
											<select class="selection" name="beds">
												<option value="0" @if($property->beds == 0) selected @endif>0+</option>
												<option value="1" @if($property->beds == 1) selected @endif>1+</option>
												<option value="2" @if($property->beds == 2) selected @endif>2+</option>
												<option value="3" @if($property->beds == 3) selected @endif>3+</option>
												<option value="4" @if($property->beds == 4) selected @endif>4+</option>
												<option value="5" @if($property->beds == 5) selected @endif>5+</option>
												<option value="6" @if($property->beds == 6) selected @endif>6+</option>
											</select>
										</div>
									</div>
									<div class="col-md-12 col-sm-12 col-xs-12">
										<div id="property-features" class="block">
											<div class="row">
												<label>Home Types</label>
                                                <?php
                                                $home_types = json_decode($property->home_types);
                                                ?>

												<ul class="submit-features">
													<li class="col-md-4 col-sm-4 col-xs-6"><div class="checkbox"><label><input type="checkbox" name="houses" @if($home_types->houses == 1) checked @endif>Houses</label></div></li>
													<li class="col-md-4 col-sm-4 col-xs-6"><div class="checkbox"><label><input type="checkbox" name="apartments" @if($home_types->apartments == 1) checked @endif>Apartments</label></div></li>
													<li class="col-md-4 col-sm-4 col-xs-6"><div class="checkbox"><label><input type="checkbox" name="condos" @if($home_types->condos == 1) checked @endif>Condos/co-ops</label></div></li>
													<li class="col-md-4 col-sm-4 col-xs-6"><div class="checkbox"><label><input type="checkbox" name="townhomes" @if($home_types->townhomes == 1) checked @endif>Townhomes</label></div></li>
													<li class="col-md-4 col-sm-4 col-xs-6"><div class="checkbox"><label><input type="checkbox" name="manufactured" @if($home_types->manufactured == 1) checked @endif>Manufactured</label></div></li>
													<li class="col-md-4 col-sm-4 col-xs-6"><div class="checkbox"><label><input type="checkbox" name="lots_land" @if($home_types->lots_land == 1) checked @endif>Lots/land</label></div></li>
												</ul>
											</div>
											<hr>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 col-sm-4 col-xs-12">
										<div class="form-group">
											<label>Baths</label>
											<select class="selection" name="baths">
												<option value="0" @if($property->baths == 0) selected @endif>0+</option>
												<option value="1" @if($property->baths == 1) selected @endif>1+</option>
												<option value="2" @if($property->baths == 2) selected @endif>1.5+</option>
												<option value="3" @if($property->baths == 3) selected @endif>2+</option>
												<option value="4" @if($property->baths == 4) selected @endif>3+</option>
												<option value="5" @if($property->baths == 5) selected @endif>4+</option>
												<option value="6" @if($property->baths == 6) selected @endif>5+</option>
												<option value="7" @if($property->baths == 7) selected @endif>6+</option>
											</select>
										</div>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-12">
										<div class="form-group">
											<label>Square Feet Min</label>
											<input type="number" class="form-control" name="square_feet_min" min="0" value="{{$property->square_feet_min}}" placeholder="Enter your Max">
										</div>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-12">
										<div class="form-group">
											<label>Square Feet Max</label>
											<input type="number" class="form-control" name="square_feet_max" min="0" value="{{$property->square_feet_max}}" placeholder="Enter your Max">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 col-sm-4 col-xs-12">
										<div class="form-group">
											<label>Lot Size</label>
											<select class="selection" name="lot_size">
												<option value="0" @if($property->lot_size == 0) selected @endif>Any</option>
												<option value="1" @if($property->lot_size == 1) selected @endif>2,000+sqft</option>
												<option value="2" @if($property->lot_size == 2) selected @endif>3,000+sqft</option>
												<option value="3" @if($property->lot_size == 3) selected @endif>4,000+sqft</option>
												<option value="4" @if($property->lot_size == 4) selected @endif>5,000+sqft</option>
												<option value="5" @if($property->lot_size == 5) selected @endif>7,500+sqft</option>
												<option value="6" @if($property->lot_size == 6) selected @endif>.25+acre/10,890+sqft</option>
												<option value="7" @if($property->lot_size == 7) selected @endif>.5+acre/21,780+sqft</option>
												<option value="8" @if($property->lot_size == 8) selected @endif>1+acre</option>
												<option value="9" @if($property->lot_size == 9) selected @endif>2+acres</option>
												<option value="10" @if($property->lot_size == 10) selected @endif>5+acres</option>
												<option value="11" @if($property->lot_size == 11) selected @endif>10+acres</option>
											</select>
										</div>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-12">
										<div class="form-group">
											<label>Year Built Min</label>
											<input type="number" class="form-control" name="year_built_min" min="0" value="{{$property->year_built_min}}" placeholder="Enter your Max">
										</div>
									</div>
									<div class="col-md-4 col-sm-4 col-xs-12">
										<div class="form-group">
											<label>Year Built Max</label>
											<input type="number" class="form-control" name="year_built_max" min="0" value="{{$property->year_built_max}}" placeholder="Enter your Max">
										</div>
									</div>
								</div>
								<hr>
								<div class="row">
									<div class="col-md-3 col-sm-3 col-xs-12">
										<div class="form-group">
											<label>Max HOA</label>
											<select class="selection" name="max_hoa">
												<option value="0" @if($property->max_hoa == 0) selected @endif>Any</option>
												<option value="1" @if($property->max_hoa == 1) selected @endif>$100/month</option>
												<option value="2" @if($property->max_hoa == 2) selected @endif>$200/month</option>
												<option value="3" @if($property->max_hoa == 3) selected @endif>$300/month</option>
												<option value="4" @if($property->max_hoa == 4) selected @endif>$400/month</option>
												<option value="5" @if($property->max_hoa == 5) selected @endif>$500/month</option>
											</select>
										</div>
									</div>
									<div class="col-md-3 col-sm-3 col-xs-12">
										<div class="form-group">
											<label>Days on Zillow</label>
											<select class="selection" name="days_on_zillow">
												<option value="0" @if($property->days_on_zillow == 0) selected @endif>Any</option>
												<option value="1" @if($property->days_on_zillow == 1) selected @endif>1 day</option>
												<option value="2" @if($property->days_on_zillow == 2) selected @endif>7 days</option>
												<option value="3" @if($property->days_on_zillow == 3) selected @endif>14 days</option>
												<option value="4" @if($property->days_on_zillow == 4) selected @endif>30 days</option>
												<option value="5" @if($property->days_on_zillow == 5) selected @endif>90 days</option>
												<option value="6" @if($property->days_on_zillow == 6) selected @endif>6 months</option>
												<option value="7" @if($property->days_on_zillow == 7) selected @endif>12 months</option>
												<option value="8" @if($property->days_on_zillow == 8) selected @endif>24 months</option>
												<option value="9" @if($property->days_on_zillow == 9) selected @endif>136 months</option>
											</select>
										</div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="form-group">
											<label>Keywords</label>
											<input type="text" class="form-control" name="keywords" min="0" value="{{$property->Keywords}}" placeholder="Enter your Max">
										</div>
									</div>
								</div>
								<span class="ffs-bs"><button type="submit" class="btn btn-large btn-primary">update property</button></span>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
			<!-- end Page Content -->
			
		<!-- Start Footer -->
		<div id="footer">@include('layouts.footer')</div>
		<!-- End Footer -->
	</div>


	<script src="https://maps.googleapis.com/maps/api/js?v=3&libraries=places"></script>
	<script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="assets/js/icheck.min.js"></script>
	<script type="text/javascript" src="assets/js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="assets/js/fileinput.min.js"></script>
	<script type="text/javascript" src="assets/js/markerwithlabel_packed.js"></script>
	<script type="text/javascript" src="assets/js/masonry.pkgd.min.js"></script>
	<script type="text/javascript" src="assets/js/selectize.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.placeholder.js"></script>

	<script type="text/javascript" src="assets/js/custom-map.js"></script>
	<script type="text/javascript" src="assets/js/custom.js"></script>
	<!--[if gt IE 8]>
	<script type="text/javascript" src="assets/js/ie.js"></script>
	<![endif]-->
	<script>
		var _latitude = 40.719457;
		var _longitude = -73.989642;
		google.maps.event.addDomListener(window, 'load', initSubmitMap(_latitude,_longitude));
		function initSubmitMap(_latitude,_longitude){
			var mapCenter = new google.maps.LatLng(_latitude,_longitude);
			var mapOptions = {
				zoom: 14,
				center: mapCenter,
				disableDefaultUI: false
			};
			var mapElement = document.getElementById('submit-map');
			var map = new google.maps.Map(mapElement, mapOptions);
			var marker = new MarkerWithLabel({
				position: mapCenter,
				map: map,
				icon: 'assets/img/marker-h.png',
				labelAnchor: new google.maps.Point(50, 0),
				draggable: true
			});
			$('#submit-map').removeClass('fade-map');
			google.maps.event.addListener(marker, "mouseup", function (event) {
				var latitude = this.position.lat();
				var longitude = this.position.lng();
				$('#latitude').val( this.position.lat() );
				$('#longitude').val( this.position.lng() );
			});

			//Autocomplete
			var input = /** @type {HTMLInputElement} */( document.getElementById('address-map') );
			var autocomplete = new google.maps.places.Autocomplete(input);
			autocomplete.bindTo('bounds', map);
			google.maps.event.addListener(autocomplete, 'place_changed', function() {
				var place = autocomplete.getPlace();
				if (!place.geometry) {
					return;
				}
				if (place.geometry.viewport) {
					map.fitBounds(place.geometry.viewport);
				} else {
					map.setCenter(place.geometry.location);
					map.setZoom(15);
				}
				marker.setPosition(place.geometry.location);
				marker.setVisible(true);
				$('#latitude').val( marker.getPosition().lat() );
				$('#longitude').val( marker.getPosition().lng() );
				var address = '';
				if (place.address_components) {
					address = [
					(place.address_components[0] && place.address_components[0].short_name || ''),
					(place.address_components[1] && place.address_components[1].short_name || ''),
					(place.address_components[2] && place.address_components[2].short_name || '')
					].join(' ');
				}
			});
	}
	function success(position) {
		initSubmitMap(position.coords.latitude, position.coords.longitude);
		$('#latitude').val( position.coords.latitude );
		$('#longitude').val( position.coords.longitude );
	}
	</script>
</body>
</html>