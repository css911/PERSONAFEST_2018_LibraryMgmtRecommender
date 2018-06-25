<?php
    session_start();
    require_once "private/conn.php";

$sql="select b.book_id,book_isbn,book_title,book_author,book_publisher from book b
where b.book_id in (select b1.book_id from rating b1 inner join (select user_id from rating where user_id!=".$_SESSION['user_id'].") b9 on b1.user_id = b9.user_id
inner join ((select r1.book_id from rating r1 left join (select x.book_id from rating x where x.user_id =".$_SESSION['user_id']." )
r2 on r1.book_id = r2.book_id )) b2 on b1.book_id = b2.book_id)
group by b.book_id limit 5;
";

    $result = $db->query($sql);


        foreach($result as $row){
    ?>
            <tr>
            <td width="30%"><img style="max-width: 85%;  max-height: 90%;" src="http://books.google.com/books/content?id=8U2oAAAAQBAJ&printsec=frontcover&img=1&zoom=1&edge=curl&source=gbs_api"></td>
              <td width="70%">
              <table class="table table2" >
                  <tr  style="border-top:0px;"><td>Book Name:</td><td>Value</td></tr>
                  <tr><td>ISBN: <?php echo $row['book_isbn'];?></td><td>Value</td></tr>
                  <tr><td>Book Title: <?php echo $row['book_title'];?></td><td>Value</td></tr>
                  <tr><td>Author Name: <?php echo $row['book_author'];?> </td><td>Value</td></tr>
                  <tr><td>Available: <?php echo $row['book_quantity'];?></td><td>Value</td></tr>
              </table>
            </td>
            </tr>
        <?php
        }
    ?>
