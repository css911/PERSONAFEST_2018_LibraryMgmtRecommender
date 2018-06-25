<?php
	$category_id = filter_var($_POST['book_category']);
	$book_isbn = filter_var($_POST['book_isbn']);
	$book_title = filter_var($_POST['book_title']);
	$book_author = filter_var($_POST['book_author']);
	$book_publisher = filter_var($_POST['book_publisher']);
	$book_quantity = filter_var($_POST['book_quantity']);
	$book_thumbnail = filter_var($_POST['book_thumbnail']);
	$insert_book_details = $db->query("INSERT INTO book VALUES('','$category_id','$book_isbn','$book_title','$book_author','$book_publisher','$book_thumbnail','$book_quantity','1')");
	
	if($insert_book_details)
	{
		echo "Book Details Inserted";
	}
	
	
?>