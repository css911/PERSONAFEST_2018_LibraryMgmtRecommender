<?php
include('phpcodes/check_session.php');
include_once('private/conn.php');
$user_id = $_SESSION['user_id'];
$get_history = $db->get_results("SELECT * FROM issued_book WHERE user_id='$user_id' AND issued_book_status='0'");
?>
<!DOCTYPE html>
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
    </head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">Student Dashboard </a>
                    <div class="nav-collapse collapse navbar-inverse-collapse">
<!--
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
-->
                        <ul class="nav pull-right">


                            <li class="nav-user dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="images/user.png" class="nav-avatar" />
                                <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="user_profile.php">Your Profile</a></li>
                                    <li><a href="user_profile.php">Edit Profile</a></li>
<!--                                    <li><a href="#">Account Settings</a></li>-->
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
                                <li><a href="issued_books.php"><i class="menu-icon icon-inbox"></i>Issued Books History<b class="label green pull-right">
                                    3</b> </a></li>
                                <li><a href="recommendation.php"><i class="menu-icon icon-tasks"></i>Books Recommendations <b class="label orange pull-right">
                                    2+</b> </a></li>
                            </ul>
                            <!--/.widget-nav-->

                            <ul class="widget widget-menu unstyled">
                                <li><a href="user_profile.php"><i class="menu-icon icon-cog"></i> User Profile </a></li>
                                  <li><a href="logout.php"><i class="menu-icon icon-signout"></i>Logout </a></li>

                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">



                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        Book Issue History</h3>
                                </div>
                                <?php
                                  if($get_history)
                                  {
                                 ?>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Book Issue Id
                                                </th>
                                                <th>
                                                    Book Name
                                                </th>
                                                <th>
                                                    Auther Name
                                                </th>
                                                <th>
                                                    Issued On
                                                </th>
                                                <th>
                                                    Return Date
                                                </th>
                                                <th>
                                                   Ratings
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
											$count=0;
                                              foreach($get_history as $tmp_get_history)
                                              {
												  $count=$count+1;
                                                $book_det = $db->get_row("SELECT * FROM book WHERE book_id='$tmp_get_history->book_id' AND book_status='1'");
                                             ?>
                                             <tr>
                                              <td><?php echo $tmp_get_history->issued_book_id;?></td>
                                              <td><?php echo $book_det->book_title;?></td>
                                              <td><?php echo $book_det->book_author;?></td>
                                              <td><?php echo $tmp_get_history->issued_book_date; ?></td>
                                              <td><?php echo $tmp_get_history->issued_book_returned; ?></td>
											  <td><input placeholde="Ratings out of 5" type="number" min="0" max="5" step="any" value="<?php echo $tmp_get_history->cr;?>" name="rating" onkeypress="handle(event,this.value,<?php echo $tmp_get_history->book_id; ?>)" /></td>
                                              <td></td>
                                            </tr>
                                             <?php
                                              }
                                              ?>
                                          </tbody>
										  <script>
										  
											function handle(e, num,bid){
												var key=e.keyCode || e.which;
												if(key === 13){
													if (window.XMLHttpRequest) {
														xmlhttp = new XMLHttpRequest();
													} else {
														xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
													}
													xmlhttp.onreadystatechange = function() {
														if (this.readyState == 4 && this.status == 200) {
															
														}
													};
													xmlhttp.open("GET","set_rating.php?book_id="+bid+"&cr="+num,true);
													xmlhttp.send();
												}
											}
										  </script>
                                        <tfoot>
                                            <tr>
                                              <tr>
                                                  <th>
                                                      Book Issue Id
                                                  </th>
                                                  <th>
                                                      Book Name
                                                  </th>
                                                  <th>
                                                      Auther Name
                                                  </th>
                                                  <th>
                                                      Issued On
                                                  </th>
                                                  <th>
                                                      Return Date
                                                  </th>
                                                  <th>
                                                     Ratings
                                                  </th>
                                              </tr>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <?php
                              }
                                 ?>
                            </div>
                            <!--/.module-->
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
