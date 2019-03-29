<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Request Medicine</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
	<center>
		<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178" action="request_medicine_backend.php" method="POST">
					<span class="login100-form-title">
						Request Medicine
					</span>
					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
							<input class="input100" type="text" name="medicine_name" placeholder="Medicine Name">
							<span class="focus-input100"></span>
					</div>
					<div class="container-login100-form-btn">
							<button class="login100-form-btn">
								Submit
							</button>
					</div>
			</form>
		</div>
	</div>
	</center>
</body>
</html>