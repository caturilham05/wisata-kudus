<div class="col-md-12">
    <div class="card">
        <div class="card-header">
	       
	        <strong class="card-title"><i class="mr-2 fa fa-align-justify"></i> <?=$title;?> </strong>
        </div>

         <div class="card-body">
		 <h3 style="text-align: center; margin-bottom:20px">Jumlah Pemudik Di kecamatan</h3>
        	<div class="table-responsive">
        		<table id="datatable2" class="table table-striped table-bordered"> 
	            	<thead>
	            		<th><center>NO</center></th>
	            		<th><center>KECAMATAN</center></th>
	            		<th><center>JUMLAH PEMUDIK</center></th>
	            		<!-- <th><center>AKSI</center></th> -->
	            	</thead>
	            	<tbody>
	            		<?php
	            			$i=1; $tot=0;
	            			foreach ($jml as $p) {

							$tot = $tot + $p['jml'];

	            		?>

	            		<tr>
	            			<td><center><?php echo $i;?></center></td>
	            			<td><center><?php echo $p['kecamatan'];?></center></td>
	            			<td><center><?php echo $p['jml'];?></center></td>
	            			<!-- <td><center>
								<a href="<?php echo base_url().'admin/C_pemudik/detail/'.$p['kecamatan_tujuan']; ?>" class='btn btn-success btn-xs' data-toggle="tooltip" title="Detail"><i class="fa fa-search-plus" ></i></a></center></td> -->
	            		</tr>
	            		<?php
	            			$i++;
	            			}
	            		?>
					</tbody>
					<tr>
						<th colspan="2" style="text-align: right">Total : </th>
						<!-- <th></th> -->
						<th><center><?=$tot?></center></th>
					</tr>
	            </table>
        	</div>
        </div>

    </div>
</div>