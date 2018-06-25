<?php
    session_start();
    require_once "conn.php";


    $sql = "select book_id,book_isbn,book_title,book_author,book_publisher from books where match (book_title, book_author) 
against ( select concat(' ',book_title,' ',book_author,' ') from books where book_id = ".$_GET['book_id'].")";


    $result = $conn->query();
    ech "<tr>";
    
    foreach($result as $row){
        echo "<td>".$row['book_isbn']."</td>;
        echo "<td>".$row['book_titile']."</td>;
        echo "<td>".$row['book_author']."</td>;
        echo "<td>".$row['book_publisher]."</td>;
    }

    echo "</tr>;
?>