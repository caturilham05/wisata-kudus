<div class="col-md-12">
    <div class="card">
        <div class="card-header">
	        <strong class="card-title"><i class="mr-2 fa fa-align-justify"></i> <?=$title;?> </strong>
        </div>
        <div class="card-body">
        	<h3>Desa 	: <?php echo $mdk[0]['desa'];?></h3>
        	<hr>
        	<div class="table-responsive">
        		<table id="" class="table table-bordered">
        			<thead>
	            		<th><center>NO</center></th>
	            		<th><center>NIK</center></th>
	            		<th><center>NAMA</center></th>
	            		<th><center>ASAL KOTA MUDIK</center></th>
	            		<th><center>KONDISI KESEHATAN</center></th>
	            		<th><center>KELUHAN</center></th>
	            	</thead>
	            	<tbody>
	            		<?php
	            			$no=1;
	            			foreach ($mdk as $k) {
	            			?>
	            			<tr>
	            				<td><center><?php echo $no;?></center></td>
	            				<td><center><?php echo $k['nik'];?></center></td>
	            				<td><center><?php echo $k['nama'];?></center></td>
	            				<td><center><?php echo $k['kota'];?></center></td>
	            				<td><center><?php echo $k['data_kesehatan'] ?> </center></td>
	            				<td><center><?php echo $k['kondisi_lain'];?></center> </td>
	            			</tr>
	            			<?php
	            			$no++;
	            			}
	            		?>
	            	</tbody>
        		</table>
        	</div>
        </div>
    </div>
</div>
