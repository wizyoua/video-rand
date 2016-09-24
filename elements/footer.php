












<!-- User Registration Modal -->
<div class="modal fade" id="registerForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" ng-app="video">
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
					<!--End Panel Heading-->
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<!--Sign In Form-->
								<form id="login-form"  method="post" role="form" style="display: block;">
									<!--The email sign-in input-->
									<div class="form-group">
										<input type="text" name="username" id="txtEmailLogin" tabindex="1" class="form-control" placeholder="Username" >
										
									</div>
									<!--The password sign-in input-->
									<div class="form-group">
										<input type="password" name="password" id="txtPasswordLogin" tabindex="2" class="form-control" placeholder="Password">
									</div>
									<!--Sign In Button-->
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<button name="login-submit" id="btnLogin"  class="form-control btn btn-primary" >Log In</button>
											</div>
										</div>
									</div>
									<!--Forgot Password Button-->
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
								<!--End Sign In Form-->
								<!--Register Form-->
								<form id="register-form" name="registerUser"  style="display: none;" >
									<!--The email input-->
									<div class="form-group">
										<input type="email" name="email" id="txtEmail"  class="form-control" placeholder="Email Address"  required>
									</div>
									<!--The first password input-->
									<div class="form-group">
										<input type="password"  id="pw1" name="pw1" ng-model="pw1" tabindex="2" class="form-control " placeholder="Password"  required ng-required="">
									</div>
									<!--The second password input-->
									<div class="form-group">
										<input type="password" id="pw2" name="pw2" ng-model="pw2" tabindex="2" class="form-control" placeholder="Confirm Password"  pw-check="pw1" ng-required="">
										<!--Will pop up if passwords don't match-->
										<div class="msg-block" ng-show="registerUser.$error"> 
											<span class="msg-error" ng-show="registerUser.pw2.$error.pwmatch" style="color:white; font-weight:bold;">Passwords don't match.</span> 
						            	</div>
									<br>
									<!--Sign Up Button-->
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<button  name="register-submit" id="btnSignUp"  class="form-control btn btn-register">Sign Up</button>			
											</div>
											<div class="col-sm-6 col-sm-offset-3">
											</div>
										</div>
									</div>
								</form> 
								<!--End Register Form-->
							</div>
						</div>
					</div>
					<!--Ends Panel of Sign In Actions-->
				</div>
			</div>
		</div>
	</div>
	<!--End Container for Sign In form-->
  </div>
</div>
<!-- End User Registration Modal -->













<script type="text/javascript" src="js/app.js"></script>
<script type="text/javascript" src="js/db/connectDb.js"></script>
<script type="text/javascript" src="js/modules/video-module.js"></script>
<script type="text/javascript" src="js/controllers/registerformController.js"></script>
<script type="text/javascript" src="js/directives/registerFormDirective.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>