<!DOCTYPE html>
<html lang="en">
<head>
	<title>SIMKIPEMA</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="img/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ ('vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ ('fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ ('fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ ('vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ ('vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ ('vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ ('vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ ('vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ ('css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ ('css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('img/bg-01.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					Account Login
				</span>

					@csrf

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" id="user" name="email" placeholder="User name">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" id="pw" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button id="login" class="login100-form-btn">
							Login
						</button>
					</div>

			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="{{ ('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ ('vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ ('vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ ('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ ('vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ ('vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ ('vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ ('vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ ('js/main.js') }}"></script>
	<script>
		var request;

		$("#login").click(function(event){
			var user = $('#user').val();
			var password = $('#pw').val();
			var token = $("input[name=_token]").val();

			if (request) {
				request.abort();
			}

			request = $.ajax({
				url: "{{ url('authenticate') }}",
				type: "post",
				data: 	{
						"email" : user,
						"password" : password,
						"_token" : token,
						}
			});

			// Callback handler that will be called on success
			request.done(function (response, textStatus, jqXHR){
				// Log a message to the console
				if (response.role == "Admin"){
					window.location = "{{ url('/dashboardmin') }}";
				}else if(response.role == "mahasiswa"){
					window.location = "{{ url('/dashboard') }}";
				}else if(response.name == "HIMMAH"){
					window.location = "{{ url('/lembaga/himmah/dashboard') }}";
				}else if(response.name == "KOSMIK"){
					window.location = "{{ url('/lembaga/kosmik/dashboard') }}";
				}else if(response.name == "UASC"){
					window.location = "{{ url('/lembaga/uasc/dashboard') }}";
				}else if(response.name == "CENTRIS"){
					window.location = "{{ url('/lembaga/centris/dashboard') }}";
				}else if(response.name == "DPM"){
					window.location = "{{ url('/lembaga/dpm/dashboard') }}";
				}else if(response.name == "pengunjung"){

				}
				console.log(response.role);
				console.log(response.name);
			});

			// Callback handler that will be called on failure
			request.fail(function (jqXHR, textStatus, errorThrown){
				// Log the error to the console
				alert("Wrong Login !!!");
				console.error(
					"The following error occurred: "+
					textStatus, errorThrown
				);
			});

			// console.log("Hooray, it worked!"+user+" "+token+" "+password);
		});
	</script>

</body>
</html>
