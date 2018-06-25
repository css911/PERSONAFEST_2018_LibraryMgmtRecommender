<?php
include('phpcodes/check_session.php');
?>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Student Dashboard</title>
        <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="css/theme.css" rel="stylesheet">
        <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>
<style>
        .table1 td ,th
    {
        border-top:1px;
    }
     .table2 td ,th
    {
        border-top:1px;

    }
        </style>
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">Student Dashboard </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
                        <ul class="nav nav-icons">
                            <li class="active"><a href="#"><i class="icon-envelope"></i></a></li>
                            <li><a href="#"><i class="icon-eye-open"></i></a></li>
                            <li><a href="#"><i class="icon-bar-chart"></i></a></li>
                        </ul>
                        <form class="navbar-search pull-left input-append" action="#">
                        <input type="text" class="span3">
                        <button class="btn" type="button">
                            <i class="icon-search"></i>
                        </button>
                        </form>
                        <ul class="nav pull-right">


                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Your Profile</a></li>
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#">Account Settings</a></li>
                                    <li class="divider"></li>
                                    <li><a href="logout.php">Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.nav-collapse -->
                </div>
            </div>
            <!-- /navbar-inner -->
        </div>
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <div class="sidebar">
                            <ul class="widget widget-menu unstyled">
                                <li class="active"><a href="index.php"><i class="menu-icon icon-dashboard"></i>Dashboard
                                </a></li>
                                <li><a href="search_book.php"><i class="menu-icon icon-bullhorn"></i>Search Books </a>
                                </li>
                                <li><a href="issued_books.php"><i class="menu-icon icon-inbox"></i>Issued Books <b class="label green pull-right">
                                    11</b> </a></li>

                                <li><a href="recommendation.php"><i class="menu-icon icon-tasks"></i>Books Recommendations <b class="label orange pull-right">
                                    19</b> </a></li>
                            </ul>
                            <!--/.widget-nav-->


                            <ul class="widget widget-menu unstyled">
                                <li><a href="user_profile.php"><i class="menu-icon icon-cog"></i> User Profile </a></li>
                                  <li><a href="logout.php"><i class="menu-icon icon-signout"></i>Logout </a></li>

                            </ul>
                            <!--/.widget-nav-->

                        </div>
                        <!--/.sidebar-->
                    </div>

                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">


                            <div class="module">
                                <div class="module-head">
                                    <h3 class="center">User Profile</h3>
                                </div>
                                <div class="module-body">
                                  <div class="profile-head media">
                                    <a href="#" class="media-avatar pull-left">
                                        <img src="images/user.png">
                                    </a>
                                    <div class="media-body">
                                        <h4>
                                            Vaibhav Kumbhar <small>Online</small>
                                        </h4>
                                        <p class="profile-brief">
                                            Student at Pune InCOmputer Engineering Student
                                        </p>

                                    </div>
                                </div>
                                    <br>
                                    <form class="form-horizontal row-fluid">
										<div class="control-group">
											<label class="control-label" for="user_name">User Name</label>
											<div class="controls">
												<input type="text" id="user_name" placeholder="X Y Z" class="span8">
												<span class="help-inline">Enter Full Name</span>
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="user_name">User Name</label>
											<div class="controls">
												<input type="text" id="user_name" placeholder="X Y Z" class="span8">
												<span class="help-inline">Enter Full Name</span>
											</div>
										</div>
                                        <br>
                                        <div class="control-group">
											<label class="control-label" for="email_id">Email Id</label>
											<div class="controls">
												<input type="text" id="email_id" placeholder=" " class="span8" disabled>
											</div>
										</div>
                                        <br>
                                        <div class="control-group">
											<div class="controls">
												<button type="submit" class="btn btn-primary">Update Profile</button>
											</div>
										</div>
                                        <br>
                                        <hr>
                                        <h4>Change Password</h4>
                                        <hr>
                                        <form class="form-horizontal row-fluid">
                                        <div class="control-group">
											<label class="control-label" for="cur_pass">Current Password</label>
											<div class="controls">
												<input type="text" id="cur_pass" placeholder="X Y Z" class="span8">
												<span class="help-inline"></span>
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="pass">New Password</label>
											<div class="controls">
												<input type="text" id="pass" placeholder="X Y Z" class="span8">
												<span class="help-inline">Enter new password</span>
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="confirm_pass">Confirm Password</label>
											<div class="controls">
												<input type="text" id="confirn_pass" placeholder="X Y Z" class="span8">
												<span class="help-inline">Enter password again</span>
											</div>
										</div>
                                        <div class="control-group">
											<div class="controls">
												<button type="submit" class="btn btn-primary">Change Password</button>
											</div>
										</div>
                                    </form>
                                </div>
                            </div>
                        </div>
                             <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; 2018 PICT.edu </b>All rights reserved.
            </div>
        </div>
        <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>

    </body>
