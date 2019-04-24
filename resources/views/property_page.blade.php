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
	<title>Suburb | My Property List</title>
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
					<div class="col-xs-12 content_2">
						<div class="col-lg-10 col-lg-offset-1 col-md-12">
							<!-- Range slider -->
							<div class="row">
								<div class="explore col-xs-12">
									<h2>Property Watch List</h2>
									<h5 class="team-color col-sm-offset-3 col-sm-6 col-xs-offset-1 col-xs-10">Lorem Ipsum is simply dummy text of the printing and Lorem Ipsum has been the industry's standard </h5>
								</div>
								{{--<form method="post">--}}
									{{--<div class="col-md-2 col-sm-3">--}}
										{{--<div class="form-inline">--}}
											{{--<label class="price-range">Price Range:</label>--}}
										{{--</div>--}}
									{{--</div>--}}
									{{--<div class="col-md-8 col-sm-7">--}}
										{{--<div class="form-group">--}}
											{{--<div class="price-range">--}}
												{{--<input class="price-input" type="text" name="price" value="0;5000000">--}}
											{{--</div>--}}
										{{--</div>--}}
									{{--</div>--}}
									{{--<div class="select-block no-border pull-right col-sm-2 col-xs-12">--}}
										{{--<select class="selection">--}}
											{{--<option>Sort By:</option>--}}
											{{--<option>Date</option>--}}
											{{--<option>Price</option>--}}
											{{--<option>Type</option>--}}
										{{--</select>--}}
									{{--</div>	<!-- select-block -->--}}
								{{--</form>--}}
							</div><!-- row -->
							<!-- End Range slider -->
							<div class="wide-2">
								<div class="container">
									@foreach($properties as $property)
									<div class="row white" style="width: 100%">
										<div class="col-md-3 col-sm-3 prp-img">
											@if(count($property->files) > 0)
											<div class="exp-img-2" style="background:url('storage/uploads/property/{{$property->files[0]}}') center;background-size: cover;">
												@else
											<div class="exp-img-2">
											@endif

												<span class="filter"></span>
												<span class="ffs-bs"><label for="op" class="btn btn-small btn-primary">browse photos</label></span>
												<div class="overlay">
													<div class="img-counter">{{count($property->files)}} Photo</div>
												</div>
											</div>
										</div>
										<div class="item-info col-lg-6 col-md-5 col-sm-5">
											<h4><a href="property_page.html">{{$property->property_name}}</a></h4>
											<p class="team-color">{{$property->address}}</p>
											<div class="block">
												<div class="col-md-3 col-sm-3 col-xs-3 cat-img">
													<img src="assets/img/bedroom.png" alt="">
													<p class="info-line">{{$property->beds}}+ Bedrooms</p>
												</div>
												<div class="col-md-3 col-sm-3 col-xs-3 cat-img">
													<img src="assets/img/bathroom.png" alt="">
													<p class="info-line">{{$property->baths}}+ Bathroom</p>
												</div>
											</div>
											<div class="col-md-3 col-sm-3 col-xs-3 line"></div>
											<div class="col-md-3 col-sm-3 col-xs-3 line"></div>
											<div class="col-md-3 col-sm-3 col-xs-3 line"></div>
											<div class="col-md-3 col-sm-3 col-xs-3 line"></div>
											<hr>
											<p>{{$property->description}}</p>
										</div>
										<div class="item-price col-lg-3 col-md-4 col-sm-4 col-xs-12">
											<div class="sum col-sm-12 col-xs-6">
												<p>
													@if($property->min_price)
													${{$property->min_price}}
													@else
														not sure
													@endif
													~
													@if($property->max_price)
													${{$property->max_price}}
													@else
														not sure
													@endif
												</p>
												<p class="team-color">for rent</p>
											</div>
											<span class="ffs-bs col-xs-12 btn-half-wth"><a href="/property-detail?property_id={{$property->id}}" class="btn btn-default btn-small">detail<i class="fa fa-caret-right"></i></a></span>
											<div class="sum favorite col-sm-12 col-xs-6">
												&nbsp;&nbsp;&nbsp;&nbsp;
												<a href="/search?property_id={{$property->id}}">Search</a>
												&nbsp;&nbsp;&nbsp;&nbsp;
												<a style="cursor: pointer" onclick="onEdit({{$property->id}})">Edit</a>
												&nbsp;&nbsp;&nbsp;&nbsp;
												<a style="cursor: pointer" onclick="onDelete({{$property->id}})">Delete</a>
											</div>
										</div>
									</div>
									@endforeach
											{{$properties->links()}}


								</div>
							</div>	
							<!-- end wide-2 -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end Page Content -->

	<!-- Start Footer -->
	<div id="footer">@include('layouts.footer')</div>
	<!-- End Footer -->

	<!-- Modal login, register, custom gallery -->
	<div id="login-modal-open"></div>
	<div id="register-modal-open"></div>
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
	<!-- End Modal login, register, custom gallery -->

	<script type="text/javascript" src="{{asset('assets/js/jquery-2.1.4.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/jquery-migrate-1.2.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/jquery.placeholder.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/retina-1.1.0.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/masonry.pkgd.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/selectize.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/tmpl.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/jquery.dependClass-0.1.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/draggable-0.1.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/jquery.slider.js')}}"></script>

	<script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/ie.js')}}"></script>
	<script>
		function onDelete(id) {
			if(confirm("really you want to remove this property ?")){
			    document.location.href = "/property-remove?property_id="+id;
			}
		}
		function onEdit(id) {
            document.location.href = "/property-edit?property_id="+id;
        }


	</script>
</body>
</html>

