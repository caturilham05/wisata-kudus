<div class="col-md-12">
    <div class="card">
        <div class="card-header">
	       
	        <strong class="card-title"><i class="mr-2 fa fa-align-justify"></i> <?=$title;?> </strong>
        </div>
        <div class="card-body">
        	<h3>Kecamatan 	: <?php echo $desa[0]['kecamatan'];?></h3>
        	
        	<hr>
        	<div class="table-responsive">
        		
        		<table id="analisis2" class="table table-bordered"> 
	            	<thead>
	            		<th><center>NO</center></th>
	            		<th><center>DESA</center></th>
	            		<th><center>JUMLAH PEMUDIK</center></th>
	            		<th><center>AKSI</center></th>
	            	</thead>
	            	<tbody>
	            		<?php
	            		$i=1;
							foreach($desa as $row){
								
								$desa = $row['desa'];
								$jml = $row['jml'];

							?>
							<tr>
							
								<td><center><?php echo $i; ?></center></td>
								<td><center><?php echo $desa; ?></center></td>
								<td><center><?php echo$jml; ?></center></td>
								
								<td><center>
								<a href="<?php echo base_url().'admin/C_pemudik/detail_desa/'.$row['desa_tujuan']; ?>" class='btn btn-success btn-xs' data-toggle="tooltip" title="Detail"><i class="fa fa-search-plus" ></i></a></center></td>
								
							</tr>

							<?php
							$i++;
							
							}
							?>
	            	</tbody>
	            </table>
	        </div>
	    </div>

	    
    </div>
</div>

 