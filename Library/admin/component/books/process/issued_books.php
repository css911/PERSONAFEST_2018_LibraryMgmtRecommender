<?php
	$issued_book_details = $db->get_results("SELECT * FROM  issued_book");
	
?>
<section class="content">
      <div class="row">
        <!-- /.col -->
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Issued Book Details</h3>
				
              <div class="box-tools" style="position:relative;top:5;right:0px;">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" id="searchInput" onkeyup="myFunction()" class="form-control" placeholder="Search"/>
                </div>
              </div>
            </div>
            
			<!-- /.box-header -->
            <?php
			if($issued_book_details)
	{
		?>
			<div class="box-body table-responsive no-padding">
              <table class="table table-hover" id="bookTable">
                <tbody>
				<tr>
				  <th>Name</th>
                  <th>Book Title</th>
                  <th>Issued On</th>
				  <th>Return Date</th>
				  <th>Fine</th>
				  <th>Option</th>
                </tr>
				<?php
				foreach($issued_book_details as $tmp_book_details)
				{
				?>
				<tr>
					<td><?php $user_det = $db->get_row("SELECT user_name FROM user WHERE user_id='$tmp_book_details->user_id'"); echo $user_det->user_name;?></td>
					<td><?php $book_det = $db->get_row("SELECT book_title FROM book WHERE book_id='$tmp_book_details->book_id'"); echo $book_det->book_title;?></td>
					<td><?php echo $tmp_book_details->issued_book_date;?></td>
					<td><?php echo $tmp_book_details->issued_book_returned;?></td>
					<td><?php echo $tmp_book_details->issued_book_fine;?></td>
					<td><button name="<?php echo $tmp_book_details->issued_book_id;?>" onclick='returnBook(this,this.name)' class="btn btn-block btn-primary <?php if($tmp_book_details->issued_book_status == 0) echo "disabled"?>">Return Book</button></td>
				</tr>
				<?php
				}
				?>
				
<script>
function returnBook(obj, id){
	if((obj.innerHTML).localeCompare("Return Book") == 0){
		
		obj.innerHTML = "Loading...";
		
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				fine = this.responseText;
				obj.innerHTML = "Fine: "+ fine +" Confirm";
			}
		}
		xmlhttp.open("POST","http://localhost:8012/library/admin/component/books/process/return_book.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("issued_book_id="+id+"&type=0");
	} else if((obj.innerHTML).localeCompare("Loading...") == 0){
		
	}else{
		
		if(window.XMLHttpRequest){
			xmlhttp = new XMLHttpRequest();
		} else {
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		xmlhttp.onreadystatechange = function(){
			if(this.readyState == 4 && this.status == 200){
				obj.innerHTML = this.responseText;
			}
		}
		xmlhttp.open("POST","http://localhost:8012/library/admin/component/books/process/return_book.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("issued_book_id="+id+"&type=1");
		obj.classList.add("disabled");
	}
}
function myFunction() {
  var input, filter, table, tr, td, i,td1,td2,td3;
  input = document.getElementById("searchInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("bookTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    td1 = tr[i].getElementsByTagName("td")[1];
	td2 = tr[i].getElementsByTagName("td")[2];
	td3 = tr[i].getElementsByTagName("td")[3];
    if (td || td1 || td2 || td3) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1 || td1.innerHTML.toUpperCase().indexOf(filter) > -1 || td2.innerHTML.toUpperCase().indexOf(filter) > -1 || td3.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
              </tbody>
			  </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
</section>
<?php
	}
	else
	{
?>
	
<?php
	}
?>
