<?php
 
	$book_isbn = filter_var($_GET['book_isbn']);
	
	$var1 = "https://www.googleapis.com/books/v1/volumes?q=";
	$var2 = urlencode($book_isbn);
	$str = str_replace(" ", "+", $var2);
	echo $str;
	$page = $var1.$str;
	
	$data = file_get_contents($page);
	$data = json_decode($page, true);
	
	echo $data;
?>