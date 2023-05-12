
<div class="move-top">
	<div class="big-triangle-second-color"></div>
	<div class="big-icon-second-color"><i class="jfont fa-lg">&#xe803;</i></div>
</div>

<!-- Login modal -->
	<div class="modal fade apartment-modal" id="login-modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="modal-title">
						<h1>Login<span class="special-color">.</span></h1>
						<div class="short-title-separator"></div>
					</div>
					<input name="login" type="email" class="input-full main-input" placeholder="Email" />
					<input name="password" type="password" class="input-full main-input" placeholder="Your Password" />
					<a href="my-profile.html" class="button-primary button-shadow button-full">
						<span>Sing In</span>
						<div class="button-triangle"></div>
						<div class="button-triangle2"></div>
						<div class="button-icon"><i class="fa fa-user"></i></div>
					</a>
					<a href="#" class="forgot-link pull-right">Forgot your password?</a>
					<div class="clearfix"></div>
					<p class="login-or">OR</p>
					<a href="#" class="facebook-button">
						<i class="fa fa-facebook"></i>
						<span>Login with Facebook</span>
					</a>
					<a href="#" class="google-button margin-top-15">
						<i class="fa fa-google-plus"></i>
						<span>Login with Google</span>
					</a>
					<p class="modal-bottom">Don't have an account? <a href="#" class="register-link">REGISTER</a></p>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

<!-- Register modal -->
	<div class="modal fade apartment-modal" id="register-modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="modal-title">
						<h1>Register<span class="special-color">.</span></h1>
						<div class="short-title-separator"></div>
					</div>
					<input name="first-name" type="text" class="input-full main-input" placeholder="Frist name" />
					<input name="last-name" type="text" class="input-full main-input" placeholder="Last name" />
					<input name="email" type="email" class="input-full main-input" placeholder="Email" />
					<input name="password" type="password" class="input-full main-input" placeholder="Password" />
					<input name="repeat-password" type="password" class="input-full main-input" placeholder="Repeat Password" />
					<a href="my-profile.html" class="button-primary button-shadow button-full">
						<span>Sing up</span>
						<div class="button-triangle"></div>
						<div class="button-triangle2"></div>
						<div class="button-icon"><i class="fa fa-user"></i></div>
					</a>
					<div class="clearfix"></div>
					<p class="login-or">OR</p>
					<a href="#" class="facebook-button">
						<i class="fa fa-facebook"></i>
						<span>Sing Up with Facebook</span>
					</a>
					<a href="#" class="google-button margin-top-15">
						<i class="fa fa-google-plus"></i>
						<span>Sing Up with Google</span>
					</a>
					<p class="modal-bottom">Already registered? <a href="#" class="login-link">SING IN</a></p>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

<!-- Forgotten password modal -->
	<div class="modal fade apartment-modal" id="forgot-modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="modal-title">
						<h1>Forgot your password<span class="special-color">?</span></h1>
						<div class="short-title-separator"></div>
					</div>
					<p class="negative-margin forgot-info">Instert your account email address.<br/>We will send you a link to reset your password.</p>
					<input name="login" type="email" class="input-full main-input" placeholder="Your email" />
					<a href="my-profile.html" class="button-primary button-shadow button-full">
						<span>Reset password</span>
						<div class="button-triangle"></div>
						<div class="button-triangle2"></div>
						<div class="button-icon"><i class="fa fa-user"></i></div>
					</a>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

<!-- jQuery  -->
    <script type="text/javascript" src="{{ asset('js/jQuery/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jQuery/jquery-ui.min.js') }}"></script>

<!-- Bootstrap-->
    <script type="text/javascript" src="{{ asset('bootstrap/bootstrap.min.js') }}"></script>

<!-- Google Maps -->
	<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDfDCV5hXiPamCIT8_vwGXuzimLQ9MF76g&amp;sensor=false&amp;libraries=places"></script>

<!-- plugins script -->
	<script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>

<!-- template scripts -->
	<script type="text/javascript" src="{{ asset('mail/validate.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/apartment.js') }}"></script>

<!-- google maps initialization -->
	<script type="text/javascript">
            google.maps.event.addDomListener(window, 'load', init);
			function init() {
				mapInit(40.6128,-73.7903,"featured-map1","{{ asset('images/pin-house.png') }}", false);
				mapInit(40.7222,-73.7903,"featured-map2","{{ asset('images/pin-apartment.png') }}", false);
				mapInit(41.0306,-73.7669,"featured-map3","{{ asset('images/pin-land.png') }}", false);
				mapInit(41.3006,-72.9440,"featured-map4","{{ asset('images/pin-commercial.png') }}", false);
				mapInit(42.2418,-74.3626,"featured-map5","{{ asset('images/pin-house.png') }}", false);
				mapInit(38.8974,-77.0365,"featured-map6","{{ asset('images/pin-apartment.png') }}", false);
				mapInit(38.7860,-77.0129,"featured-map7","{{ asset('images/pin-house.png') }}", false);

				mapInit(41.2693,-70.0874,"grid-map1","{{ asset('images/pin-house.png') }}", false);
				mapInit(33.7544,-84.3857,"grid-map2","{{ asset('images/pin-apartment.png') }}", false);
				mapInit(33.7337,-84.4443,"grid-map3","{{ asset('images/pin-land.png') }}", false);
				mapInit(33.8588,-84.4858,"grid-map4","{{ asset('images/pin-commercial.png') }}", false);
				mapInit(34.0254,-84.3560,"grid-map5","{{ asset('images/pin-apartment.png') }}", false);
				mapInit(40.6128,-73.9976,"grid-map6","{{ asset('images/pin-house.png') }}", false);
			}
	</script>