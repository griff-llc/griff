<div class="navigation">
	<header class="navbar" id="top">
		<div class="container">
			<div class="navbar-brand nav">
				<a class="navbar-brand nav logo" href="/dashboard" title="" rel="home">
					<object class="master-logo" type="image/svg+xml"></object>
				</a>
				<a class="navbar-brand nav logo retina" href="/dashboard" title="" rel="home">
					<object class="master-logo" type="image/svg+xml"></object>
				</a>
			</div>
			<nav class="secondary main-menu">
				<a href="#" data-toggle="dropdown" class="pull-right drop-left">More
					<div class="gamb-button">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</div>
				</a>
				<ul class="nav navbar-nav dropdown-menu pull-right slide-left">
					<li><a href="{{route('signout')}}">Sign Out</a>
					</li>
					<li>
						<a href="#" data-toggle="dropdown" class="pull-right drop-close">Close
							<span class="cross"></span>
						</a>
					</li>
				</ul>
			</nav><!-- /.navbar collapse-->
			<nav class="primary start main-menu">
				<ul class="nav navbar-nav pull-right">
					<li class="active has-child"><a href="add_property.html">Properties</a>
						<ul class="child-navigation">
							<li><a href="{{route('add-property')}}">Add Property</a></li>
							<li><a href="{{route('properties')}}">Property Page</a></li>
						</ul>
					</li>
					<li><a href="{{route('settings')}}">Settings</a></li>
					<li><a href="{{route('about-us')}}">About Us</a></li>
					<li><a href="{{route('contact-us')}}">Contact us</a></li>
				</ul>
			</nav>
		</div>
		<div class="site-header">
			<a href="#" data-toggle="dropdown" class="pull-right drop-left">Menu
				<div class="gamb-button">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</div>
			</a>
			<div class="navbar-brand nav">
				<a class="navbar-brand nav logo" href="index_v_1.html" title="" rel="home">
					<object class="master-logo" type="image/svg+xml"></object>
				</a>
				<a class="navbar-brand nav logo retina" href="index_v_1.html" title="" rel="home">
					<object class="master-logo" type="image/svg+xml"></object>
				</a>
			</div>
			<div class="mob-menu drop-close hidden">
				<a href="#" data-toggle="dropdown" class="pull-right drop-close hidden black-cross">Close
					<span class="cross"></span>
				</a>
				<nav class="secondary">
					<ul class="nav navbar-nav">
						<li class="active has-child"><a href="#">Properties</a>
							<ul class="child-navigation">
								<li><a href="{{route('add-property')}}">Add Property</a></li>
								<li><a href="{{route('properties')}}">Property Page</a></li>
							</ul>
						</li>
						<li><a href="{{route('settings')}}">Settings</a></li>
						<li><a href="{{route('about-us')}}" >About Us</a></li>
						<li><a href="{{route('contact-us')}}" >Contact us</a></li>
						<li><a href="{{route('signout')}}">Sign Out<i class="fa fa-arrow-right"></i></a></li>
					</ul>
				</nav><!-- /.navbar collapse-->
			</div>
		</div>
	</header><!-- /.navbar -->

</div>