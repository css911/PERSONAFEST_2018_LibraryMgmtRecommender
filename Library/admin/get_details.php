<?php
	include"private/conn.php";
	$book_isbn = filter_var($_GET['book_isbn']);
	
	$var1 = "https://www.googleapis.com/books/v1/volumes?q=";
	$var2 = urlencode($book_isbn);
	$str = str_replace(" ", "+", $var2);
	$str = str_replace("-", "+", $str);

	$page = $var1.$str;
	$data = file_get_contents($page);
	$data = json_decode($data, true);
	
	$category = $db->get_results("SELECT * FROM category WHERE category_status='1'");
	
	?>
	<form action="" method="POST" id="confirmBook">
	<input name="book_isbn" class="form-control" type="hidden" value="<?php echo $book_isbn;?>" >
	 <p><img src="<?php if(isset($data['items'][0]['volumeInfo']['imageLinks']['thumbnail'])) echo $data['items'][0]['volumeInfo']['imageLinks']['thumbnail'];?>"><p>
	 <input name="book_thumbnail" type="hidden" value="<?php echo $data['items'][0]['volumeInfo']['imageLinks']['thumbnail'];?>"/>
	 Title:     <input name="book_title" class="form-control" type="text" value="<?php if(isset($data['items'][0]['volumeInfo']['title'])) echo $data['items'][0]['volumeInfo']['title'];?>" />
	 Author:    <input name="book_author" class="form-control" type="text" value="<?php if(isset($data['items'][0]['volumeInfo']['authors'])) echo @implode(",", $data['items'][0]['volumeInfo']['authors']); ?>"/>	 
	 Publisher: <input name="book_publisher" class="form-control" type="text" value="<?php if(isset($data['items'][0]['volumeInfo']['publisher'])) echo $data['items'][0]['volumeInfo']['publisher'];?>"/>
	
	 Category:  <select name="book_category" class="form-control">
					<?php
						foreach($category as $row){
							echo "<option value=".$row->category_id.">".$row->category_name."</option>";
						}
						?>
				</select>
	Quantity:   <input name="book_quantity" class="form-control" type="number" min="0" required/>
	</form>
	<script>
		$("#confirmBook").submit(function(e) {
			var url = "";
			alert("hello");
			$.ajax({
				type: "POST",
				url: url,
				data: $("#confirmBook").serialize(),
				success: function(data)
				{
					alert(data);
				}
			});
		}
	</script>