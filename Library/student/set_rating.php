<?php
	include_once("private/conn.php");
	session_start();
	$user_id = $_SESSION['user_id'];
	$book_id = $_GET['book_id'];
	$cr = $_GET['cr'];
	echo $book_id . "  " .$cr;
	$update_issue = $db->query("UPDATE issued_book SET cr=$cr WHERE user_id=$user_id AND book_id=$book_id");
	
	$check_present = $db->get_row("SELECT * FROM rating user_id=$user_id AND book_id=$book_id");
	if(!$check_present)
		$insert_issue = $db->query("INSERT INTO rating VALUES($user_id,$book_id,$cr)");
	else
		$update_issue = $db->query("UPDATE rating SET cr=$cr WHERE user_id=$user_id AND book_id=$book_id");
	
?>