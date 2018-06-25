<?php
include('phpcodes/check_session.php');
include_once('private/conn.php');

if(isset($_POST['search_option']))
{
$criteria=filter_var($_POST['search_criteria']);

if($_POST['search_criteria']=='')
		{
      $result = $db->get_results("select * from book where book_status=1");

    }
    else
    {
      $result = $db->get_results("select distinct * from book where book_title like '%$criteria%' or book_author like '%$criteria%' and book_status=1");

    }

}
if(isset($_POST['submit_issue']))
{
  $user_id = $_SESSION['user_id'];
  //echo $user_id;
  $book_id = filter_var($_POST['issue']);
  
  $update_quantity = $db->query("UPDATE book SET book_quantity=book_quantity-1 WHERE book_id='$book_id'");
  $insert = $db->query("INSERT INTO issued_book VALUES('','$user_id','$book_id',sysdate(),date_add(sysdate(),INTERVAL 7 DAY),'0','1',0)");
}
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
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">Student Panel </a>
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
                                    <form action="" method="post">
                                    <div class="pull-left">
                                      Enter Book Name <br> or Author Name
                                    </div>
                                    <div class="media-body">
                                      <div class="row-fluid">

                                        <textarea name="search_criteria" id="serach_criteria" class="span12" style="height: 70px; resize: none;"></textarea>
                                      </div>
                                      <div class="clearfix">
                                        <input type="submit" name="search_option" value="Search Books" class="btn btn-primary pull-right">

                                      </div>
                                    </div>
                                  </form>
                                  </div>
                                </div>
                            </div>
                            <!--/.module-->
                            <?php
                            if(isset($_POST['search_option']))
                            {
                              if($result)
                              {
                             ?>
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
                                                    Publication
                                                </th>
                                                <th>
                                                    Issue/Return
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          $counter=0;
                                          foreach($result as $book_row)
                                          {
                                            $counter=$counter+1;
                                            ?>
                                            <tr>
                                                <td><?php echo $counter; ?></td>
                                                <td><?php echo $book_row->book_title;?></td>
                                                <td><?php echo $book_row->book_author;?></td>
                                                <td><?php echo $book_row->book_publisher;?></td>
                                                <td><?php
                                                if($book_row->book_status==1)
                                                {
                                                  ?>
                                                   <form action="" method="post">
                                                   <input type="hidden" name="issue" value="<?php echo $book_row->book_id;?>" >
                                                   <input type="submit" name="submit_issue" value="Issue" class="btn btn-primary"></input>
                                                   </form>
                                                    <?php
                                                 }
                                                 else {
                                                   echo 'Unavailable';
                                                 }
                                                 ?></td>
                                            </tr>
                                            <?php
                                          }
                                           ?>

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
                                                    Publication
                                                </th>
                                                <th>
                                                    Issue/Return
                                                </th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            <?php
                          }
                          } /* end search criteria */
                             ?>
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
