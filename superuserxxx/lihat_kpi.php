
		<div class="row">
            <div class="col-xs-12">
              <div class="box box-danger">
                <div class="box-header">
                  <h3 class="box-title">Data KPI</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Judul KPI</th>
                        <th>Tanggal Berakhir</th>
                        <th>SOP</th>
                        <th>Selesai</th>
                        <th>Belum Selesai</th>
                        <th>File</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php
					 
                    // $con1 = mysqli_connect("localhost", "root", "", "diamplopinaja");
					 //include "koneksi.php";
					 //$dbe=$_SESSION['email'];
					 $connect = mysqli_connect("localhost", "root", "", "kpi_ku");
					 $dbe="tbl_sop";
					// $db="namapengirim_amplop_$dbe";
                     $qu=mysqli_query($connect,"select * from $dbe order by sop");
					 $no = 0;
					
                     while($has=mysqli_fetch_assoc($qu))
                     {
					 	  
                         $no++;
                        echo "
                        <tr>
						<td>$no</td>
	                     <td>$has[sop]</td>
                        <td>$has[selesai]</td>
                        <td>$has[belum_selesai]</td>
                        <td>$has[file]</td>
					
                        <td style='text-align:center'>
                        <a href='#'><span data-placement='top' data-toggle='tooltip' title='Detil'><button class='btn btn-success btn-xs' data-title='Edit' data-toggle='modal' data-target='#edit' ><span class='glyphicon glyphicon-list'></span></button><span></a>

                        <a href='#'><span data-placement='top' data-toggle='tooltip' title='Edit'><button class='btn btn-primary btn-xs' data-title='Edit' data-toggle='modal' data-target='#edit' ><span class='glyphicon glyphicon-pencil'></span></button><span></a>
                        
                        <span data-placement='top' data-toggle='tooltip' title='Delete'><button onclick='#' class='btn btn-danger btn-xs' data-title='Delete' data-toggle='modal' data-target='#myModal' ><span class='glyphicon glyphicon-trash'></span></button><span>
                        </td>
                      </tr>
                        
						";
						 
                     }
                     ?>
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            
<script>
    function datadel(value,jenis){
       document.getElementById('mylink').href="hapus.php?del="+value+"&data="+jenis;
    }
</script>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Data akan terhapus !</h4>
            </div>
            <div class="modal-body">
                Anda yakin ingin menghapus data ini ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a id="mylink" href=""><button type="button" class="btn btn-primary">Delete Data</button></a>
            </div>
        </div>
    </div>
</div>
</div>








	