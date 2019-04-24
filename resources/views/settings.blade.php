<!DOCTYPE html>

<html lang="en-US">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="{{asset('assets/fonts/font-awesome.css')}}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css">
	<link rel="stylesheet" href="{{asset('assets/css/selectize.css')}}" type="text/css">
	<title>Suburb | User Settings</title>
</head>

<body class="page user-profile" id="page-top">
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
			<div class="container">
				<ol class="breadcrumb">
					<li><a href="index_v_1.html">Home</a></li>
					<li class="active">User Settings</li>
				</ol>
			</div>
			<div class="container">
				<header class="header"><h2>Profile Settings</h2>
					<p>Setup your Account</p>
				</header>
				<div class="container">
					<div class="information-block">
						<section id="personal" class="clearfix">
							<header class="header"><h3>Personal Information</h3>
								<p>Lorem Ipsum is simply dummy text of the</p>
							</header>
							<hr />
							<div class="form-inline">
								<div class="row">
									<label class="col-md-2 col-sm-3">User Name:</label>
									<div class="col-md-10 col-sm-9">
										<input type="text" class="form-control" style="width: 50%" id="userName" placeholder="Enter your First Name" value="{{$username}}">
									</div>
								</div>
							</div>
							<div class="form-inline">
								<div class="row">
									<label class="col-md-2 col-sm-3">Email Adress:</label>
									<div class="col-md-10 col-sm-9">
										<input type="email" class="form-control" style="width: 50%" id="userEmail" placeholder="Enter your Email Adress" value="{{$useremail}}">
									</div>
								</div>
							</div>
							<div class="form-inline">
								<button class="btn pull-left btn-small btn-primary" onclick="changePersonal()">Change</button>
							</div><!-- /.form-group -->
						</section>
						<br>
						<br>
						<section id="change-password">
							<header class="header"><h3>Change Your Password</h3>
								<p>Lorem Ipsum is simply dummy text of the</p>
							</header>
							<hr>
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="form-account-password-current">Current Password</label>
										<input type="password" class="form-control" id="currentPassword" name="form-account-password-current">
									</div><!-- /.form-group -->
									<div class="form-group">
										<label for="form-account-password-new">New Password</label>
										<input type="password" class="form-control" id="newPassword" name="form-account-password-new">
									</div><!-- /.form-group -->
									<div class="form-group">
										<label for="form-account-password-confirm-new">Confirm New Password</label>
										<input type="password" class="form-control" id="confirmPassword" name="form-account-password-confirm-new">
									</div><!-- /.form-group -->
									<div class="form-group clearfix">
										<button class="btn pull-left btn-small btn-primary" onclick="changePassword()">Change</button>
									</div><!-- /.form-group -->
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="pas-block">
										<strong>Hint:</strong>
										<p>Be careful. After you change the password, the password is automatically applied. <br><br>If you don't have a current password you can sign out and reset your password at sign in page.
										</p>
									</div>
								</div>
							</div>
						</section>
					</div>
				</div>
			</div>

		</div>
		<!-- end Page Content -->

		<!-- Start Footer -->
    <div id="footer">@include('layouts.footer')</div>
    <!-- End Footer -->
	</div>

	<script type="text/javascript" src="{{asset('assets/js/jquery-2.1.4.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/jquery-migrate-1.2.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/jquery.placeholder.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/retina-1.1.0.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/fileinput.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/masonry.pkgd.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/selectize.min.js')}}"></script>

	<script type="text/javascript" src="{{asset('assets/js/custom.js')}}"></script>
<!--[if gt IE 8]>
<script type="text/javascript" src="{{asset('assets/js/ie.js')}}"></script>
<![endif]-->

<script>
	function changePersonal() {

	    var userName = $("#userName").val();
        var userEmail = $("#userEmail").val();
        if(userEmail.indexOf("@") == -1 || userEmail.indexOf(".") == -1){
            alert("Put Correct Email address !");
            return;

		}
        if (userName == "" || userEmail == ""){
            alert("Put User Name and Email !");
            return;
		}

        $.post("/change-personal",{
            _token:'{{csrf_token()}}',
            username:userName,
            email:userEmail,
        }).success(
            function (data) {
                if(data == "success"){
                    alert("Successfully Changed!");
                }else if(data == "error"){
                    alert("database error !");
                }
            }
        );
    }

    function changePassword() {

	    var currentPassword = $("#currentPassword").val();
	    var newPassword = $("#newPassword").val();
	    var confirmPassword = $("#confirmPassword").val();
	    if(newPassword != confirmPassword){
	        alert("Password doesn't match !");
            $("#newPassword").val("");
            $("#confirmPassword").val("");
	        return;
		}
        $.post("/change-password",{
            _token:'{{csrf_token()}}',
            currentPass:currentPassword,
            newPass:newPassword,
        }).success(
            function (data) {
                if(data == "success"){
                    alert("Successfully Changed!");
                }else if(data == "failed"){
                    alert("Password is incorrect !");
                }else if(data == "error"){
                    alert("database error !");
                }
            }
        );


    }
</script>
</body>
</html>