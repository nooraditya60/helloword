<html>
	<head>
		<title>KPI Ku</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	</head>
	<body>
		<div class="container">
        
        <div class="container pt">
		<div class="row mt">
		<br>	
		</div>
		<div class="row mt">	
			<div class="col-lg-6 col-lg-offset-2">
				<form role="form" action="simpankpi.php" method="post">
				  <div class="form-group">
                  <label>Judul KPI</label>
				    <input type="text" class="form-control" name="kpi_ku" placeholder="KPI">
				  </div>
				  <div class="form-group">
                  <label>Tanggal Berakhir</label>
				    <input type="date" class="form-control" name="email" placeholder="Enter email">
				    <br>
				  </div>
		<?php
        	//  <input type="submit" class="btn btn-success" value="Kirim">
			//	</form>    			
		?>	
			</div>
		</div><!-- /row -->
	</div><!-- /container -->
      
        
        
			<br />
			<br />
			<div class="form-group">
				<form name="add_name" id="add_name">
					<div class="table-responsive">
						<table class="table" id="dynamic_field">
							<tr align="center"><td><b>SOP</b></td>
                            	<td><b>Selesai</b></td>
                                <td><b>Belum Selesai</b></td>
                                <td><b>Upload foto</b></td>
                            </tr>
                            <tr>
								<td><input type="text" name="sop[]" placeholder="Enter your SOP" class="form-control name_list" /></td>
                                <td align="center"><input type="checkbox" name="selesai[]"  value="1"/></td>
                                <td align="center"><input type="checkbox" name="belum_selesai[]"  value="1"/></td>
                                <td><input type="file" name="file[]" class="form-control"/></td>
								<td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
							</tr>
						</table>
						<input type="button" name="submit" id="submit" class="btn btn-info" value="Submit" />
					</div>
				</form>
			</div>
		</div>
	</body>
</html>

<script>
$(document).ready(function(){
	var i=1;
	$('#add').click(function(){
		i++;
		$('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="sop[]" placeholder="Enter your Name" class="form-control name_list" /></td><td align="center"><input type="checkbox" name="selesai[]" value="1"/></td><td align="center"><input type="checkbox" name="belum_selesai[]" value="1"/></td><td><input type="file" name="file[]" class="form-control"/></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
	});
	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
	
	$('#submit').click(function(){		
		$.ajax({
			url:"name.php",
			method:"POST",
			data:$('#add_name').serialize(),
			success:function(data)
			{
				alert(data);
				$('#add_name')[0].reset();
			}
		});
	});
	
});
</script>




