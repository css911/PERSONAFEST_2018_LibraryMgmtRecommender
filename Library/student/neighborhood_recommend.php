
<?php
    session_start();
    require_once "private/conn.php";

    $sql = "select b.book_thumbnail,b.book_id,book_isbn,book_title,book_author,book_quantity from book b
    where b.book_id in (select b1.book_id from rating b1 inner join (select user_id from rating where user_id!=".$_SESSION['user_id'].") b9 on b1.user_id = b9.user_id
    inner join ((select r1.book_id from rating r1 left join (select x.book_id from rating x where x.user_id =".$_SESSION['user_id']." )
    r2 on r1.book_id = r2.book_id )) b2 on b1.book_id = b2.book_id)
    group by b.book_id limit 5;";

    $result = $db->get_results($sql);

    foreach($result as $row){
?>
        <tr>
        <td width="30%"><img style="max-width: 85%;  max-height: 90%;" src="<?php echo $row['book_thumbnail'];?>"></td>
          <td width="70%">
          <table class="table table2" >
              <tr  style="border-top:0px;"><td>Book Name:</td></tr>
              <tr><td>ISBN: <?php echo $row->book_isbn;?></td></tr>
              <tr><td>Book Title: <?php echo $row->book_title;?></td></tr>
              <tr><td>Author Name: <?php echo $row->book_author;?> </td></tr>
              <tr><td>Available: <?php echo $row->book_quantity;?></tdtr>
          </table>
        </td>
        </tr>
    <?php
    }
?>
