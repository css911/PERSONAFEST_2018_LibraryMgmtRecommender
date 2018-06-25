
<div class="col-md-6">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Add Book</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputISBN">ISBN</label>
					  
                      <input type="text" class="form-control" name="book_isbn" id="exampleInputISBN" placeholder="Enter ISBN"  required />
					 
					  </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer">
                    <button onclick="getBookDetails()" class="btn btn-primary">Submit</button>
                  </div>
                
              </div><!-- /.box -->
</div>
<div class="col-md-12">

		<div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title"></h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                
                  <div class="box-body">
                    <div class="form-group" id="bookDetails">
                      
                    </div>
                  </div><!-- /.box-body -->

                  
				<div class="box-footer" style="display:none;" id="hidden">
                    <button onclick="addBook()" class="btn btn-primary">Add</button>
                  </div>
                
              </div><!-- /.box -->
			  
</div>
<script type="text/javascript">
	function getBookDetails(){
		var isbn = document.getElementById('exampleInputISBN').value;
			if(isbn=="")
			{
				alert("ISBN Number required!!");
				return false;
			}
		{
			if(window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();
			}	else	{
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			
			xmlhttp.onreadystatechange = function(){
				if(this.readyState == 4 && this.status == 200){
					document.getElementById("bookDetails").innerHTML = this.responseText;
					document.getElementById("hidden").style.display = "";
					}
			}
			
			xmlhttp.open("GET","http://localhost:8012/library/admin/get_details.php?book_isbn="+isbn,true);
			xmlhttp.send();
		}
	}
	
	function addBook(){
			var url = "index.php?folder=books&file=insert_bookdet"; // url of php file
			
			$.ajax({
				type: "POST",
				url: url,
				data: $("#confirmBook").serialize(),
				success: function(data)
				{
					document.getElementById("bookDetails").innerHTML = "Book Added";
					document.getElementById("hidden").style.display = "none";
				}
			});
		}
</script>