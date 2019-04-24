	<div id="modal-login" class="modal" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header text-center">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2>Sign in to your account:</h2>
					<span>Welcome to the home!</span>
				</div>
					<div class="modal-body">
						<div class="form-group">
							<input type="email" name="useremail" id="logEmail" placeholder="Email:" required>
							<span class="fa fa-at"></span>
						</div>				
						<div class="form-group">
							<input type="password" name="password" id="logPassword" placeholder="Password:" required>
							<span class="fa fa-lock"></span>
						</div>
					</div>
					<div class="modal-footer">
						<div class="form-group clearfix">
							<span>Don't have an account? <a style="cursor: pointer" onclick="signUp()">Sign Up</a></span>
							{{--<span>Forgot your password? <a href="#">Restore</a></span>--}}
							<button class="btn btn-primary" onclick="login()">Login</button>
						</div>
					</div>
			</div>
		</div>
	</div>

