	<!DOCTYPE html>
<html>
<head>
	<title>Worldbex Timetracking</title>

	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/login-style.css">

</head>
<body>
	<script src="../js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../js/jquery.min.js" type="text/javascript"></script>
	<script src="../js/login.js" type="text/javascript"></script>

	<?php include '../functions/Database.php'; ?>

		<div class="container-fluid clearfix" id="loginBox">
			<div class="row">
				<div class="form-group">
					
					<div class="col-xs-12" style="text-align: center;">
						<img src="../img/logo/logo_300x300.png" id="logo">
						
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12" id="login_label" style="text-align: center;">
					<label>Worldbex</label>
					
				</div>
			</div>

			<div class="row" id="login">
				<div class="col-lg-12">
					<form>
						<div class="form-group-lg">
							<input id="userID" type="text" placeholder="User ID" class="form-control" style="background-color: whitesmoke;">
						</div>
						<div class="form-group-lg">
							<input id="password" type="password" placeholder="Password" class="form-control" style="background-color: whitesmoke;">
						</div>
					</form>
				</div>
				<div class="col-sm-12">
					<button class="btn btn-lg pull-right btn-warning btn-block" id="login_enter" style="background-color: #fb5a01">Login</button>
					
				</div>
			</div>
		</div>
</body>
</html>