<?php
	$book_details = $db->get_results("SELECT * FROM book WHERE book_status='1'");
	
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
              <h3 class="box-title">Book Details</h3>
				<button style="float:right;"><a href="?folder=books&file=add_book"><div ><i class="fa fa-fw fa-plus" data-toggle="tooltip" title="Add Book"></div></a></button></i>
                
              <div class="box-tools" style="position:relative;top:5;right:0px;">
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="table_search" id="searchInput" onkeyup="myFunction()" class="form-control" placeholder="Search"/>
                </div>
              </div>
            </div>
            
			<!-- /.box-header -->
            <?php
			if($book_details)
	{
		?>
			<div class="box-body table-responsive no-padding">
              <table class="table table-hover" id="bookTable">
                <tbody>
				<tr>
				  <th>ISBN</th>
                  <th>Book Title</th>
                  <th>Book Author</th>
				  <th>Book Quantity</th>
                </tr>
				<?php
				foreach($book_details as $tmp_book_details)
				{
				?>
				<tr>
					<td><?php echo $tmp_book_details->book_isbn;?></td>
					<td><?php echo $tmp_book_details->book_title;?></td>
					<td><?php echo $tmp_book_details->book_author;?></td>
					<td><?php echo $tmp_book_details->book_quantity;?></td>
				</tr>
				<?php
				}
				?>
				
<script>
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
