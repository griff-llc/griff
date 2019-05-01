<!DOCTYPE html>

<html lang="en-US">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="{{asset('assets/fonts/font-awesome.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{asset('assets/css/jquery.slider.min.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('assets/css/selectize.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css">
	<title>Suburb | Search</title>
</head>

<body class="page-search" id="page-top">
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
		<div id="page-content-search">
			<div class="container">
				<div class="wide_container_2">
					<div class="tabs">
						<header class="col-md-8 col-xs-12 no-pad">
                            <form action="search-result" method="get">
							<div class="location-map col-sm-4 col-xs-4">
								<div class="input-group">
									<input type="text" class="form-control" id="address-map" name="address" value="@if($property->address){{$property->address}} @elseif($property->neighborhood) {{$property->neighborhood}} @elseif($property->zipcode){{$property->zipcode}} @endif" placeholder="Manhattan, New York">
									<i class="fa fa-search" onclick="search(1)"></i>
								</div>
                                <div id="submit-map"></div>

							</div>
                            <div class="select-block col-md-2 col-xs-3 last">
                                <a class="options-button" id="listing-link">Listing Type</a>
                            </div>
                            <div class="options-overlay col-md-offset-4 col-sm-offset-5 col-sm-3" id="hidden_listing" style="display: none; height: 530px;">
                                <div class="row">
                                    <div class="col-xs-12 top-mrg">
                                        <div class="internal-container features">
                                            <label><input type="checkbox" id="for_sale"><b>FOR SALE</b></label>
                                            <?php $sales = json_decode($property->for_sale); ?>
                                            <section class="block" style="margin-left: 10px">
                                                <section>
                                                    <ul class="submit-features">
                                                        <li><div class="checkbox"><label onclick="search(1)"><input type="checkbox" name="by_agent" id="by_agent" @if($sales->by_agent == 1) checked @endif>By Agent</label></div></li>
                                                        <li><div class="checkbox"><label onclick="search(1)"><input type="checkbox" name="by_owner" id="by_owner" @if($sales->by_owner == 1) checked @endif>By Owner</label></div></li>
                                                        <li><div class="checkbox"><label onclick="search(1)"><input type="checkbox" name="new_construction" id="new_construction" @if($sales->new_construction == 1) checked @endif>New Construction</label></div></li>
                                                        <li><div class="checkbox"><label onclick="search(1)"><input type="checkbox" name="foreclosures" id="foreclosures" @if($sales->foreclosures == 1) checked @endif>Foreclosures</label></div></li>
                                                        <li><div class="checkbox"><label onclick="search(1)"><input type="checkbox" name="coming_soon" id="coming_soon" @if($sales->coming_soon == 1) checked @endif>Coming Soon</label></div></li>
                                                    </ul>
                                                </section>
                                            </section>
                                            <hr>
                                            <label><input type="checkbox" id="potential_listing"><b>POTENTIAL LISTINGS</b></label>
                                            <?php
                                            $potential_listings = json_decode($property->potential_listings);
                                            ?>
                                            <section class="block" style="margin-left: 10px">
                                                <section>
                                                    <ul class="submit-features">
                                                        <li><div class="checkbox"><label onclick="search(1)"><input type="checkbox" name="foreclosed" id="foreclosed" @if($potential_listings->foreclosed == 1) checked @endif>Foreclosed</label></div></li>
                                                        <li><div class="checkbox"><label onclick="search(1)"><input type="checkbox" name="pre_foreclosure" id="pre_foreclosure" @if($potential_listings->pre_foreclosure == 1) checked @endif>Pre-Foreclosure</label></div></li>
                                                        <li><div class="checkbox"><label onclick="search(1)"><input type="checkbox" name="make_me_move" id="make_me_move" @if($potential_listings->make_me_move == 1) checked @endif>Make Me Move</label></div></li>
                                                    </ul>
                                                </section>
                                            </section>
                                            <hr>
                                            <?php
                                            $for_rent = json_decode($property->for_rent);
                                            ?>

                                            <div class="checkbox"><label onclick="search(1)"><input type="checkbox" id="for_rent" @if($for_rent->for_rent == 1) checked @endif>FOR RENT</label></div>
                                            <div class="checkbox"><label onclick="search(1)"><input type="checkbox" id="recently_sold" @if($for_rent->recently_sold == 1) checked @endif>RECENTLY SOLD</label></div>
                                            <hr>
                                            <div class="checkbox"><label onclick="search(1)"><input type="checkbox" id="open_houses" @if($for_rent->open_houses == 1) checked @endif>Open Houses only</label></div>
                                            <div class="checkbox"><label onclick="search(1)"><input type="checkbox" id="pending_under" @if($for_rent->pending_under == 1) checked @endif>Pending & Under Contract</label></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- options-overlay -->

                            <div class="select-block col-md-2 col-xs-3 last">
                                <a class="options-button" id="home-type-link">Home Type</a>
                            </div>
                            <div class="options-overlay col-md-offset-6 col-sm-offset-7 col-sm-3" id="hidden_type" style="display: none; height: 320px;">
                                <div class="row">
                                    <div class="col-xs-12 top-mrg">
                                        <div class="internal-container features">
                                            <?php
                                            $home_types = json_decode($property->home_types);
                                            ?>
											<label><input type="checkbox" id="potential_listing"><b>houses</b></label>
												<section class="block" style="margin-left: 10px">
													<section>
														<ul class="submit-features">
															<li><div class="checkbox"><label onclick="search(1)"><input type="checkbox" name="single_family" id="single_family" @if($home_types->houses == 1) checked @endif>Single Family</label></div></li>
															<li><div class="checkbox"><label onclick="search(1)"><input type="checkbox" name="multi_family" id="multi_family" @if($home_types->houses == 1) checked @endif>Multi Family</label></div></li>
														</ul>
													</section>
												</section>
												<hr>
                                            <section>
                                                <ul class="submit-features">
                                                    <li><div class="checkbox"><label onclick="search(1)"><input type="checkbox" id="apartments" @if($home_types->apartments == 1) checked @endif>Apartments</label></div></li>
                                                    <li><div class="checkbox"><label onclick="search(1)"><input type="checkbox" id="condos" @if($home_types->condos == 1) checked @endif>Condos/co-ops</label></div></li>
                                                    <li><div class="checkbox"><label onclick="search(1)"><input type="checkbox" id="townhomes" @if($home_types->townhomes == 1) checked @endif>Townhomes</label></div></li>
                                                    <li><div class="checkbox"><label onclick="search(1)"><input type="checkbox" id="manufactured" @if($home_types->manufactured == 1) checked @endif>Manufactured</label></div></li>
                                                    <li><div class="checkbox"><label onclick="search(1)"><input type="checkbox" id="lots_land" @if($home_types->lots_land == 1) checked @endif>Lots/Land</label></div></li>
                                                </ul>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- options-overlay -->



							<div class="select-block col-sm-2 col-xs-2">
								<select class="selection" name="beds" id="beds" onchange="search(1)">
									<option value="0" @if($property->beds == 0) selected @endif>0+ beds</option>
									<option value="1" @if($property->beds == 1) selected @endif>1+ beds</option>
									<option value="2" @if($property->beds == 2) selected @endif>2+ beds</option>
									<option value="3" @if($property->beds == 3) selected @endif>3+ beds</option>
                                    <option value="4" @if($property->beds == 4) selected @endif>4+ beds</option>
                                    <option value="5" @if($property->beds == 5) selected @endif>5+ beds</option>
                                    <option value="6" @if($property->beds == 6) selected @endif>6+ beds</option>
								</select>
							</div>



							<div class="select-block col-md-2 col-xs-3 last">
								<a class="options-button" id="toggle-link">More Filters</a>
							</div>
							<div class="options-overlay col-md-offset-10 col-sm-offset-5 col-sm-7" id="hidden_content" style="display: none;">
								<div class="row">
									<div class="col-xs-6 top-mrg">
										<div class="internal-container features">
											<div class="form-group">
                                                <div>
                                                    <label style="margin-top: 15%">Baths: &nbsp;&nbsp;</label>
                                                    <select style="margin-bottom:0px" name="baths" id="baths" onchange="search(1)">
                                                        <option value="0" @if($property->baths == 0) selected @endif>0+</option>
                                                        <option value="1" @if($property->baths == 1) selected @endif>1+</option>
                                                        <option value="1.5" @if($property->baths == 2) selected @endif>1.5+</option>
                                                        <option value="2" @if($property->baths == 3) selected @endif>2+</option>
                                                        <option value="3" @if($property->baths == 4) selected @endif>3+</option>
                                                        <option value="4" @if($property->baths == 5) selected @endif>4+</option>
                                                        <option value="5" @if($property->baths == 6) selected @endif>5+</option>
                                                        <option value="6" @if($property->baths == 7) selected @endif>6+</option>
                                                    </select>
                                                </div>
											</div>

                                            <div class="form-group">
                                                <label style="margin-top: 15%">Square Feet : </label>
                                                <div style="display: inline-flex">
                                                    <input type="number" class="form-control" name="square_feet_min" id="square_feet_min" value="{{$property->square_feet_min}}" style="margin-bottom:0px; height: 10px" min="0" placeholder="min" onchange="search(1)">
                                                    <label>-</label>
                                                    <input type="number" class="form-control" name="square_feet_max" id="square_feet_max" value="{{$property->square_feet_max}}" style="margin-bottom:0px; height: 10px" min="0" placeholder="max" onchange="search(1)">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <label style="margin-top: 15%">Lot Size: &nbsp;&nbsp;</label>
                                                    <select style="margin-bottom:0px" name="lot_size" id="lot_size" onchange="search(1)">
                                                        <option value="0" @if($property->lot_size == 0) selected @endif>Any</option>
                                                        <option value="2000" @if($property->lot_size == 1) selected @endif>2,000+ sqft</option>
                                                        <option value="3000" @if($property->lot_size == 2) selected @endif>3,000+ sqft</option>
                                                        <option value="4000" @if($property->lot_size == 3) selected @endif>4,000+ sqft</option>
                                                        <option value="5000" @if($property->lot_size == 4) selected @endif>5,000+ sqft</option>
                                                        <option value="7500" @if($property->lot_size == 5) selected @endif>7,500+ sqft</option>
                                                        <option value="10890" @if($property->lot_size == 6) selected @endif>.25+ acre / 10,890+ sqft</option>
                                                        <option value="21780" @if($property->lot_size == 7) selected @endif>.5+ acre / 21,780+ sqft</option>
                                                        <option value="43560" @if($property->lot_size == 8) selected @endif>1+ acre</option>
                                                        <option value="87120" @if($property->lot_size == 9) selected @endif>2+ acres</option>
                                                        <option value="217800" @if($property->lot_size == 10) selected @endif>5+ acres</option>
                                                        <option value="435600" @if($property->lot_size == 11) selected @endif>10+ acres</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label style="margin-top: 15%">Year Built : </label>
                                                <div style="display: inline-flex">
                                                    <input type="number" class="form-control" name="year_built_min" id="year_built_min" value="{{$property->year_built_min}}" style="margin-bottom:0px; height: 10px" min="0" placeholder="min" onchange="search(1)">
                                                    <label>-</label>
                                                    <input type="number" class="form-control" name="year_built_max" id="year_built_max" value="{{$property->year_built_max}}" style="margin-bottom:0px; height: 10px" min="0" placeholder="max" onchange="search(1)">
                                                </div>
                                            </div>

                                        </div>
									</div>
									<div class="col-xs-6 top-mrg">
										<div class="internal-container features">

                                            <div class="form-group">
                                                <div>
                                                    <label style="margin-top: 15%">Max HOA: &nbsp;&nbsp;</label>
                                                    <select style="margin-bottom:0px" name="max_hoa" id="max_hoa" onchange="search(1)">
                                                        <option value="0" @if($property->max_hoa == 0) selected @endif>Any</option>
                                                        <option value="100" @if($property->max_hoa == 1) selected @endif>$100/month</option>
                                                        <option value="200" @if($property->max_hoa == 2) selected @endif>$200/month</option>
                                                        <option value="300" @if($property->max_hoa == 3) selected @endif>$300/month</option>
                                                        <option value="400" @if($property->max_hoa == 4) selected @endif>$400/month</option>
                                                        <option value="500" @if($property->max_hoa == 5) selected @endif>$500/month</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div>
                                                    <label style="margin-top: 15%">Days on Zillow: &nbsp;&nbsp;</label>
                                                    <select style="margin-bottom:0px" name="days_on_zillow" id="days_on_zillow" onchange="search(1)">
                                                        <option value="any" @if($property->days_on_zillow == 0) selected @endif>Any</option>
                                                        <option value="1" @if($property->days_on_zillow == 1) selected @endif>1 day</option>
                                                        <option value="7" @if($property->days_on_zillow == 2) selected @endif>7 days</option>
                                                        <option value="14" @if($property->days_on_zillow == 3) selected @endif>14 days</option>
                                                        <option value="30" @if($property->days_on_zillow == 4) selected @endif>30 days</option>
                                                        <option value="90" @if($property->days_on_zillow == 5) selected @endif>90 days</option>
                                                        <option value="6m" @if($property->days_on_zillow == 6) selected @endif>6 months</option>
                                                        <option value="12m" @if($property->days_on_zillow == 7) selected @endif>12 months</option>
                                                        <option value="24m" @if($property->days_on_zillow == 8) selected @endif>24 months</option>
                                                        <option value="36m" @if($property->days_on_zillow == 9) selected @endif>36 months</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label style="margin-top: 15%">Keywords: &nbsp;&nbsp;</label>
                                                <textarea class="form-control" name="keywords" id="keywords" placeholder="Garage,pool,waterfront,etc.">{{$property->Keywords}}</textarea>
                                            </div>
                                            <div class="form-group">
                                                <button type="button" class="btn btn-primary" style="padding: 5px;" id="apply_bt" onclick="search(1)">Apply</button>
                                            </div>

										</div>
									</div>
								</div>
								</div><!-- options-overlay -->
                            </form>
						</header><!-- end header -->
						<!-- tab-links -->
						<div class="tab-content">
							<div id="tab1" class="tab" style="display: block;">
								<div class="sidebar col-sm-4 col-xs-12">
									<!-- Map -->
									<div id="map"></div>
									<!-- end Map -->
								</div><!-- sidebar -->
								<div class="content col-sm-8 col-xs-12">
									<!-- Range slider -->
									<div class="col-xs-12">
										<div class="row">
												<div class="col-md-10 col-sm-10">
													<div class="form-inline">
														<label class="top-indent">Price Range:&nbsp;&nbsp;&nbsp;</label>
														<input type="number" id="min_price" min="0" style="border-radius: 10px;" value="{{$property->min_price}}">
														--
														<input type="number" id="max_price" min="0" style="border-radius: 10px;" value="{{$property->max_price}}">
														&nbsp;
														<button class="btn btn-primary" onclick="search(1)" style="padding: 10px;">Apply</button>
                                                        <input type="text" class="form-control" placeholder="Latitude" id="latitude" @if($property->latitude) value="{{$property->latitude}}" @endif readonly>
                                                        <input type="text" class="form-control" placeholder="Longitude" id="longitude" @if($property->longitude) value="{{$property->longitude}}" @endif readonly>

													</div>
												</div>
											<div class="col-md-2 col-sm-2"></div>
										</div><!-- row -->
									</div>	<!-- explore_grid -->
									<!-- End Range slider -->

									<div class="wide-2">
										<div class="col-xs-12">
											<div class="row" id="result_content">
											</div><!-- end row -->
											<img id="reading_loader" style="display: none; margin-left: 25%" src="{{asset('assets/img/loader.gif')}}" ></img>
										</div><!-- end container -->
										<div class="col-xs-12 content_2 top-indent">
											<nav class="site-navigation paging-navigation navbar" id="pagination">
												<div class="nav-previous" id="prev_page"></div>
												<ul class="pagination pagination-lg" id="page_pagination">
												</ul>
												<div class="nav-next" id="next_page"></div>
											</nav>
										</div>
									</div>	<!-- end wide-2 -->
								</div>	<!-- content -->
							</div>
						</div><!-- tab-content -->
					</div><!-- tabs -->
				</div>
			</div>
		</div><!-- end Page Content -->

		<!-- Start Footer -->
		<div id="footer">@include('layouts.footer')</div>
		<!-- End Footer -->
	</div>
	
	<!-- Modal login, register, custom gallery -->

	<div class="custom-galery">
		<input class="no-icheck gal" type="checkbox" id="op">
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

	<!-- End Modal login, register, custom gallery -->
    <script src="https://maps.googleapis.com/maps/api/js?v=3&sensor=false&amp;libraries=places&key=AIzaSyBVf0m4pHn-0t4xx-x4dBK9ZzKtT-iSv_o"></script>
	<script type="text/javascript" src="{{asset('assets/js/jquery-2.1.4.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/jquery-migrate-1.2.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/bootstrap-select.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/jquery.placeholder.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/infobox.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/retina-1.1.0.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/masonry.pkgd.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/waypoints.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/selectize.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/tmpl.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/icheck.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/jquery.dependClass-0.1.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/draggable-0.1.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/markerwithlabel_packed.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/jquery.slider.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/custom-map.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/jshashtable-2.1_src.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/jquery.numberformatter-1.2.3.js')}}"></script>


<!--[if gt IE 8]>
<script type="text/javascript" src="{{asset('assets/js/ie.js')}}"></script>
<![endif]-->
<script>

    search(1);
    function sleep(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }

    async function search(page) {
        document.getElementById("reading_loader").style.display = "block";
        await sleep(100);
        document.getElementById("pagination").style.display = "none";
        document.getElementById("result_content").innerHTML = "";

        var lat = document.getElementById("latitude").value;
        var log = document.getElementById("longitude").value;

        var rect = "";

        if (lat != "" && log != ""){
            var rect1 = parseFloat(log) - 0.0415215;
            var rect2 = parseFloat(lat) - 0.0415215;
            var rect3 = parseFloat(log) + 0.0415215;
            var rect4 = parseFloat(lat) + 0.0415215;
            rect1 = Number((rect1).toFixed(6));
            var str_rect1 = rect1.toString().replace(".","");
            rect2 = Number((rect2).toFixed(6));
            var str_rect2 = rect2.toString().replace(".","");
            rect3 = Number((rect3).toFixed(6));
            var str_rect3 = rect3.toString().replace(".","");
            rect4 = Number((rect4).toFixed(6));
            var str_rect4 = rect4.toString().replace(".","");
            rect = str_rect1 +"," + str_rect2 + "," + str_rect3 + "," + str_rect4;
        }

        var address = document.getElementById("address-map").value;
        var min_price = document.getElementById("min_price").value;
        var max_price = document.getElementById("max_price").value;
        var by_agent = document.getElementById("by_agent").checked;
        var by_owner = document.getElementById("by_owner").checked;
        var new_construction = document.getElementById("new_construction").checked;
        var foreclosures = document.getElementById("foreclosures").checked;
        var coming_soon = document.getElementById("coming_soon").checked;

        var foreclosed = document.getElementById("foreclosed").checked;
        var pre_foreclosure = document.getElementById("pre_foreclosure").checked;
        var make_me_move = document.getElementById("make_me_move").checked;

        var for_rent = document.getElementById("for_rent").checked;
        var recently_sold = document.getElementById("recently_sold").checked;
        var open_houses = document.getElementById("open_houses").checked;
        var pending_under = document.getElementById("pending_under").checked;

        // var single_family= document.getElementById("single_family").checked;
        // var multi_family = document.getElementById("multi_family").checked;
        var houses = false;
        var apartments = document.getElementById("apartments").checked;
        var condos = document.getElementById("condos").checked;
        var townhomes = document.getElementById("townhomes").checked;
        var manufactured = document.getElementById("manufactured").checked;
        var lots_land = document.getElementById("lots_land").checked;

        var beds = document.getElementById("beds").value;
        var baths = document.getElementById("baths").value;

        var square_feet_min = document.getElementById("square_feet_min").value;
        var square_feet_max = document.getElementById("square_feet_max").value;

        var lot_size = document.getElementById("lot_size").value;
        var year_built_min = document.getElementById("year_built_min").value;
        var year_built_max = document.getElementById("year_built_max").value;

        var max_hoa = document.getElementById("max_hoa").value;
        var days_on_zillow = document.getElementById("days_on_zillow").value;

        var keywords = document.getElementById("keywords").value;


        price_range = ',';
        if(min_price !=0 && max_price == 0 ){
            price_range = min_price+",";
		}else if(min_price ==0 && max_price != 0 ){
            price_range = ","+max_price;
		}
        $.post("/search-result",{
            _token:'{{csrf_token()}}',
            async:false,
            rect:rect,
            page:page,
            address:address,
            price_range:price_range,
            by_agent:by_agent,
            by_owner:by_owner,
            new_construction:new_construction,
            foreclosures:foreclosures,
            coming_soon:coming_soon,
            foreclosed:foreclosed,
            pre_foreclosure:pre_foreclosure,
            make_me_move:make_me_move,
            for_rent:for_rent,
            recently_sold:recently_sold,
            open_houses:open_houses,
            pending_under:pending_under,
            houses:houses,
            apartments:apartments,
            condos:condos,
            townhomes:townhomes,
            manufactured:manufactured,
            lots_land:lots_land,
            beds:beds,
            baths:baths,
            square_feet_min:square_feet_min,
            square_feet_max:square_feet_max,
            lot_size:lot_size,
            year_built_min:year_built_min,
            year_built_max:year_built_max,
            max_hoa:max_hoa,
            days_on_zillow:days_on_zillow,
            keywords:keywords,
        }).success(
            function (data) {
                console.log(data);
                document.getElementById("reading_loader").style.display = "none";

                var longitude = 0.0;
                var latitude = 0.0;
                var locations = [];

                var single_family= document.getElementById("single_family").checked;
                var multi_family = document.getElementById("multi_family").checked;

                var jsondata = JSON.parse(data);
                var result_content = document.getElementById("result_content");
                var curPage = jsondata['curPage'];
                var numPage = jsondata['numPages'];
                var data = jsondata['data'];
                if(data == "" || data== null){
                    return;
                }
                if(data.length == 0){
                    createHomepageGoogleMap(latitude,longitude,[]);
                }

                var htm = "";
                for(var i = 0; i < data.length; i ++){
                    var row = data[i];
                    var status = row.homeStatus;
                    if(status.valueOf('_') != -1){
                        status = status.replace("_"," ");
					}
					var homeType = row.homeType;
                    if(single_family && multi_family){
                        console.log("two");
                    }else {
                        if (single_family || multi_family){
                            if(single_family){
                                if(homeType != "SINGLE_FAMILY"){
                                    continue;
                                }
                            }

                            if(multi_family){
                                if (homeType != "MULTI_FAMILY") {
                                    continue;
                                }
                            }
                        }
                    }

                    if(homeType.valueOf('_') != -1){
                        homeType = homeType.replace("_"," ");
					}

                    var location = [];
                    location.push(row.streetAddress);
                    location.push(row.city+","+row.state+","+row.zipcode);
                    location.push(row.price + "<br>" + homeType);
                    location.push(row.latitude);
                    location.push(row.longitude);
                    location.push("/house-detail?zpid="+row.zpid);
                    location.push(row.desktopWebHdpImageLink);
                    location.push("assets/img/f.svg");
                    locations.push(location);
                    latitude += row.latitude;
                    longitude += row.longitude;

					var bedroom = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
					if(typeof row.bedrooms != "undefined"){
					    bedroom = row.bedrooms+" beds";
					}
                    var bathroom = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    if(typeof row.bathrooms != "undefined"){
                        bathroom = row.bathrooms+" baths";
                    }
                    var livingArea = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    if(typeof row.livingArea != "undefined"){
                        livingArea = row.livingArea + " sqft";
					}
                    htm += "<div class=\"col-md-4 col-sm-6 col-xs-6 prop\">\n" +
                        "<div class=\"wht-cont\">\n" +
                        "<div class=\"exp-img-2\" style=\"background:url("+row.desktopWebHdpImageLink+") center;background-size: cover;\">\n" +
                        "<span class=\"\"></span>\n" +
                        "<a onclick='onDetail("+row.zpid+")'><span class='btn btn-small btn-primary'>browse photos</span></a>\n" +
                        "<div class=\"overlay\">\n" +
                        "</div>\n" +
                        "</div>\n" +
                        "<div class=\"item-title\">\n" +
                        "<h4><a>"+homeType+"</a></h4>\n" +
                        "<p class=\"team-color\">"+row.streetAddress+"</p>\n" +
                        "<p class=\"team-color\">"+row.city+","+row.state+","+row.zipcode+","+row.country+"</p>\n" +
                        "<div class=\"col-md-7 col-sm-7 col-xs-7\">\n" +
                        "<p>"+bedroom+"</p>\n" +
                        "<p>"+bathroom+"</p>\n" +
                        "</div>\n" +
                        "<div class=\"col-md-5 col-sm-5 col-xs-5\">\n" +
                        "<p>"+livingArea+"</p>\n" +
                        "</div>\n" +
                        "<div class=\"col-md-7 col-sm-7 col-xs-7 lft-brd\"></div>\n" +
                        "<div class=\"col-md-5 col-sm-5 col-xs-5 lft-brd\"></div>\n" +
                        "</div>\n" +
                        "<hr>\n" +
                        "<div class=\"item-title btm-part\">\n" +
                        "<div class=\"row\">\n" +
                        "<div class=\"col-md-8 col-sm-8 col-xs-8\">\n" +
                        "<p>$"+row.price+"</p>\n" +
                        "<p class=\"team-color\">"+status+"</p>\n" +
                        "</div>\n" +
                        "<div class=\"col-md-4 col-sm-4 col-xs-4 favorite\">\n" +
                        "<div class=\"bookmark\" data-bookmark-state=\"empty\">\n" +
                        "<span class=\"title-add\">Add to bookmark</span>\n" +
                        "</div>\n" +
						"<div class=\"compare col-xs-3\" data-compare-state=\"empty\">\n" +
                        "<span class=\"plus-add\">Add to compare</span>\n" +
                        "</div>\n"+
                        "</div>\n" +
                        "</div>\n" +
                        "</div>\n" +
                        "</div>\n" +
                        "</div>\n";
				}

				latitude = latitude/data.length;
                longitude = longitude/data.length;
                createHomepageGoogleMap(latitude,longitude,locations);

                result_content.innerHTML = htm;

                // var page_html = "";
                // for (var i = 1; i <= numPage; i ++){
                //     if(i == curPage){
                //         page_html += "<li><span class=\"active\">"+i+"</span></li>";
					// }else{
                //         page_html += "<li><a onclick='paginate("+i+")' style='cursor: pointer'>"+i+"</a></li>";
					// }
                // }
                // if(parseInt(curPage) == 1){
                //     document.getElementById("prev_page").innerHTML = "<a style='cursor: pointer'>PREV PAGE</a>";
                // }else{
                //     var temp = parseInt(curPage) - 1;
                //     document.getElementById("prev_page").innerHTML = "<a onclick='paginate("+temp+")' style='cursor: pointer'>PREV PAGE</a>";
                // }
                // if(parseInt(curPage) == numPage){
                //     document.getElementById("next_page").innerHTML = "<a style='cursor: pointer'>NEXT PAGE</a>";
                // }else{
                //     var temp = parseInt(curPage) + 1;
                //     document.getElementById("next_page").innerHTML = "<a onclick='paginate("+temp+")' style='cursor: pointer'>NEXT PAGE</a>";
                // }
                //
                // document.getElementById("page_pagination").innerHTML = page_html;
                // document.getElementById("pagination").style.display = "block";
			}
        );

    }

    function paginate(page) {
        search(page);

    }

    function onDetail(zpid) {
        window.open("/house-detail?zpid="+zpid);
    }

</script>

    <script>
        var _latitude = {{$property->latitude}};
        var _longitude = {{$property->longitude}};
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
                search(1);
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

