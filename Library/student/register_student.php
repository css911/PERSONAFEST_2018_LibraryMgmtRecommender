<?php
	include('private/conn.php');
	if(isset($_POST['userregister']))
	{
	$user_name = filter_var($_POST['user_name']);
	$user_username = filter_var($_POST['user_username']);
	$user_email = filter_var($_POST['user_username']);
	$user_username = filter_var($_POST['user_username']);
	$user_username = filter_var($_POST['user_password']);

	$insert_data = $db->query("INSERT INTO user VALUES('','$user_name','$user_username','$user_email','$user_password','Student','1')");
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student Login | Library Management System</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
    <style>
    body
        {
            background: #eee;
        }
    </style>
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			  	<a class="brand" href="index.php">
			  		Library Management System
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">

					<ul class="nav pull-right">

						<li><a href="login.php">
							Already have account? Log in
						</a></li>



						<!-- <li><a href="#">
							Forgot your password?
						</a></li> -->
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="module module-login span4 offset4">
					<form class="form-vertical">
						<div class="module-head">
							<h3>Sign In</h3>
						</div>
						<div class="module-body">

															<div class="control-group">
																<div class="controls row-fluid">
																	<input class="span12" type="text" id="user_name" name="user_name" placeholder="Full Name">
																</div>
															</div>
															<div class="control-group">
																<div class="controls row-fluid">
																	<input class="span12" type="text" id="user_username" name="user_username" placeholder="Username">
																</div>
															</div>
															<div class="control-group">
																<div class="controls row-fluid">
																	<input class="span12" type="text" id="user_email" name="user_email" placeholder="Email Id">
																</div>
															</div>
															<div class="control-group">
																<div class="controls row-fluid">
																	<input class="span12" type="password" id="user_password" name="user_password" placeholder="Password">
																</div>
															</div>
                          <div class="form-group">
						  <br>
                      <label class="checkbox">
										<input type="checkbox"> I accept all terms and conditions.

									</label>


                            </div></div>
						<div class="module-foot">
							<div class="control-group">
								<div class="controls clearfix center">
									<div class="span1"></div><input name="userregister" type="submit" class="btn btn-primary span2 center" value="Register">
									<div class="span1"></div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div><!--/.wrapper-->

	<div class="footer" >
		<div class="container">


<b class="copyright">&copy; 2018 PICT.edu </b>All rights reserved.
		</div>
	</div>
	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
</body>
