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
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.html">Edmin </a>
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
                                    <li><a href="#">Logout</a></li>
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
                                <li class="active"><a href="index.html"><i class="menu-icon icon-dashboard"></i>Dashboard
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
                                  <li><a href="#"><i class="menu-icon icon-signout"></i>Logout </a></li>

                            </ul>
                        </div>
                        <!--/.sidebar-->
                    </div>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a href="#" class="btn-box big span4"><i class=" icon-random"></i><b>Suggestions</b>
                                        <p class="text-muted">
                                            Recommendations</p>
                                    </a><a href="#" class="btn-box big span4"><i class="icon-user"></i><b>3</b>
                                        <p class="text-muted">
                                            Books Issued</p>
                                    </a><a href="#" class="btn-box big span4"><i class="icon-money"></i><b>15,152</b>
                                        <p class="text-muted">
                                            Available Books</p>
                                    </a>
                                </div>
                            </div>
                            <!--/#btn-controls-->

                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        Search Books</h3>
                                </div>
                                <div class="module-body">
                                  <div class="stream-composer media">
                                    <div class="pull-left">
                                      Enter Book Name <br> or Author Name
                                    </div>
                                    <div class="media-body">
                                      <div class="row-fluid">

                                        <textarea class="span12" style="height: 70px; resize: none;"></textarea>
                                      </div>
                                      <div class="clearfix">
                                        <a href="#" class="btn btn-primary pull-right">
                                          Search Books
                                        </a>

                                      </div>
                                    </div>
                                  </div>



                                </div>
                            </div>
                            <!--/.module-->
                            <!-- Result START -->
                            <div class="module">
                                <div class="module-head">
                                    <h3>
                                        Search Result</h3>
                                </div>
                                <div class="module-body table">
                                    <table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display"
                                        width="100%">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Book Id
                                                </th>
                                                <th>
                                                    Title
                                                </th>
                                                <th>
                                                    Author
                                                </th>
                                                <th>
                                                    Description
                                                </th>
                                                <th>
                                                    Category
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Java: Complete Reference</td>
                                                <td>Hilbert</td>
                                                <td>Java complete Reference Edition 8</td>
                                                <td class="center">21-2-2018</td>
                                            </tr
                                            <tr>
                                                <td>2</td>
                                                <td>abc</td>
                                                <td>Hilbert</td>
                                                <td>Java complete Reference Edition 8</td>
                                                <td class="center">21-2-2018</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Java: Complete Reference</td>
                                                <td>Hilbert</td>
                                                <td>Java complete Reference Edition 8</td>
                                                <td class="center">21-2-2018</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Jse</td>
                                                <td>Hilbert</td>
                                                <td>Java complete Reference Edition 8</td>
                                                <td class="center">21-2-2018</td>
                                            </tr>
                                          </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>
                                                    Book Id
                                                </th>
                                                <th>
                                                    Title
                                                </th>
                                                <th>
                                                    Author
                                                </th>
                                                <th>
                                                    Description
                                                </th>
                                                <th>
                                                    Category
                                                </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <!-- result end -->
                        </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer fixed-bottom">
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
