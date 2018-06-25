<?php
	include_once("../../../private/conn.php");
	$type = filter_var($_POST['type']);
	$issued_book_id = filter_var($_POST['issued_book_id']);
	if($type == 0){
		$issued_book_details = $db->get_row("SELECT DATEDIFF(sysdate(),issued_book_date) as dayss FROM  issued_book where issued_book_id=".$issued_book_id);
		$day = $issued_book_details->dayss;
		if($day > 7){
			$fine = ($day - 7) * 5;
			echo $fine;
		}
		else {
			$fine = 0;
			echo $fine;
		}
		
	}
	else if($type == 1){
		
		$issued_book_details = $db->get_row("SELECT DATEDIFF(sysdate(),issued_book_date) as dayss FROM  issued_book where issued_book_id=".$issued_book_id);
		$day = $issued_book_details->dayss;
		if($day > 7){
			$fine = ($day - 7) * 5;
		}
		else {
			$fine = 0;
		}
		
		$db->query("update issued_book set issued_book_status = 0, issued_book_fine = ".$fine.",issued_book_returned = sysdate() where issued_book_id = ".$issued_book_id.";");
		echo "Returned";
		$db->query("update book set book_quantity = book_quantity+1 where book_id = (select book_id from issued_book where issued_book_id = ".$issued_book_id.");");
	}
	
?>