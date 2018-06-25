<?php
include('private/conn.php');
include('phpcodes/check_session.php');
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
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
                            <!--/.widget-nav-->

                        </div>
                        <!--/.sidebar-->
                    </div>

                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">


                            <div class="module">
                                <div class="module-head">
                                    <h3>Books you must read</h3>
                                </div>
                                <div class="module-body">
                                  <table class="table ">
                                    <tbody id="algo1">
                                      <?php
									  
									  $sql = "select b.book_thumbnail,b.book_id,book_isbn,book_title,book_author,book_quantity from book b
    where b.book_id in (select b1.book_id from rating b1 inner join (select user_id from rating where user_id!=".$_SESSION['user_id'].") b9 on b1.user_id = b9.user_id
    inner join ((select r1.book_id from rating r1 left join (select x.book_id from rating x where x.user_id =".$_SESSION['user_id']." )
    r2 on r1.book_id = r2.book_id )) b2 on b1.book_id = b2.book_id)
    group by b.book_id limit 5";
	//echo $_SESSION['user_id'];
    $result = $db->get_results($sql);

    foreach($result as $row){
		
        echo "<tr>";
        echo "<td width='30%'><img style='max-width: 85%;  max-height: 90%;' src=".$row->book_thumbnail."></td>";
         echo " <td width='70%'>";
          echo "<table class='table table2' >";
              
              echo "<tr><td><b>ISBN:</b>". $row->book_isbn."</td></tr>";
              echo "<tr><td><b>Book Title:</b> ".$row->book_title."</td></tr>";
              echo "<tr><td><b>Author Name:</b> ".$row->book_author."</td></tr>";
              echo "<tr><td><b>Available:</b> ".$row->book_quantity."</td></tr>";
              echo "<tr><td><b>Available:</b> ";?> <form action="" method="post">
                                                   <input type="hidden" name="issue" value="<?php echo $book_row->book_id;?>" >
                                                   <input type="submit" name="submit_issue" value="Issue" class="btn btn-primary"></input>
                                                   </form> <?php echo "</td></tr>";
			  
         echo " </table>";
        echo "</td>";
        echo "</tr>";
    
    }
?>                                    
                                      <div id="algo2">
                                        <script>
                                          function algo2(){
                                            $("#algo2").load("neighborhood_recommend.php");

                                          }

                                        </script>
                                      </div>
                                      </tbody>
                                    </table>
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
