












<!-- User Registration Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" ng-app="video">
  <div class="modal-dialog" role="document">
    <div class="container"  >
    	<div class="row">
			<div class="col-md-6 ">
				<div class="panel panel-login">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="login-form-link">Login</a>
							</div>
							<div class="col-xs-3">
								<a href="#" id="register-form-link">Register</a>
							</div>
							<div class="col-xs-3">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">x</button>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="login-form"  method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="username" id="txtEmailLogin" tabindex="1" class="form-control" placeholder="Username" >
										
									</div>
									<div class="form-group">
										<input type="password" name="password" id="txtPasswordLogin" tabindex="2" class="form-control" placeholder="Password">
									</div>
									
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<button name="login-submit" id="btnLogin"  class="form-control btn btn-primary" >Log In</button>
												<button id="btnLogout" class="btn btn-action hide">Log Out</button>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-lg-12">
												<div class="text-center">
													<a  tabindex="5" class="forgot-password">Forgot Password?</a>
												</div>
											</div>
										</div>
									</div>
								</form>
								<form id="register-form" name="registerUser"  style="display: none;" novalidate="">
									
									<span class="register-form-alert"></span>
									<div class="form-group">
										<input type="email" name="email" id="txtEmail"  class="form-control" placeholder="Email Address"  ng-model="userEmail" required novalidate>
										<span class="register-form-alert-success"></span>
									</div>

										<span class="register-form-alert">{{userPassword.length >=4 ?"Email Ok" : "Password not long enough"}}</span>
									<div class="form-group">
										<input type="password" name="password" id="txtPassword" tabindex="2" class="form-control " placeholder="Password" ng-model="userPassword" required ng-class="{ 'has-error': form.password.$invalid && !form.username.$pristine }">
									</div>

									<div class="form-group">
										<input type="password" name="confirm-password" id="confirmPassword" tabindex="2" class="form-control" placeholder="Confirm Password" ng-class="{ 'has-error': form.confirm-password.$invalid && !form.confirm-password.$pristine }">
									</div>
									<span ng-show="form.confirmPassword.$error.equal" class="help-block">Password does not match above</span>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">

												<button  name="register-submit" id="btnSignUp"  class="form-control btn btn-register" >Sign Up</button>
												
											</div>
											<div class="col-sm-6 col-sm-offset-3">
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
     
    </div>
</div>













<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/db/connectDb.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>