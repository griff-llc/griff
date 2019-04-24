	<div id="modal-register" class="modal" tabindex="-1">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header text-center">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h2>Create an Account</h2>
					<span>It takes few minutes</span>
				</div>
					<div class="modal-body">
						<div class="user-type-select">
							<div>
								<input type="radio" id="regular-user-radio" name="user-type" checked="checked"/>
								<label for="regular-user-radio"><span><span></span></span>Regular User</label>
							</div>
							<div>
								<input type="radio" id="agent-radio" name="user-type" />
								<label for="agent-radio"><span><span></span></span>Agent</label>
							</div>
						</div>
						<div class="form-group">
							<input type="text" name="username" id="joinName" placeholder="User Name:" required>
						</div>
						<div class="form-group">
							<input type="email" name="email" id="joinEmail" placeholder="User Email:" required>
						</div>
						<div class="form-group">
							<input type="password" name="password" id="joinPass" placeholder="Password:" required>
						</div>
						<div class="form-group">
							<input type="password" name="confirm" id="joinConfirm" placeholder="Confirm Password:" required>
						</div>
					</div>
					<div class="modal-footer">
						<div class="form-group clearfix">
							<span>Do u have an account? <a style="cursor: pointer" onclick="signIn()">Sign In</a></span>
							<button class="btn btn-primary" onclick="join()">Join</button>
						</div>
						<div>
							<span class="terms">By clicking JOIN button you agree with our <br> <a href="terms_and_conditions.html" target="blank">Terms and conditions</a></span>
						</div>
					</div>
			</div>
		</div>
	</div>


