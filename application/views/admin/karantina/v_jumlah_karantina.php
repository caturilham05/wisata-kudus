<style>
	 input[type='radio']:after {
        width: 20px;
        height: 20px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: black;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }

    input[type='radio']:checked:after {
        width: 20px;
        height: 20px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: red;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }
</style>
<div class="col-md-12">
	<div class="card">
		<div class="animated fadeIn">
			<div class="card-header">
				<?php if ($this->session->userdata('level') == 'admin') { ?>
				<?php } ?>
				
				<h6><strong class="card-title"><?= $title ?></strong></h6>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="bootstrap-data-table" class="table table-bordered">
						<thead>
							<tr>
								<th>#</th>
								<th>Nama Tempat</th>
								<th>Jumlah Sebelum</th>
								<th>Jumlah Laki - Laki</th>
								<th>Jumlah Perempuan</th>
								<th>Tambahan </th>
								<th>Jumlah Sekarang</th>
								<th>TGL</th>
								<th>Aksi</th>
							</tr>
						</thead>
						<tbody>
							<?php
								$i = 1;
								foreach ($karantina as $k) {
							?>
							<tr>
								<td><?php echo $i;?></td>
								<td><?php echo $k['nama_tempat'];?></td>
								<td><?php echo $k['jml_before'];?></td>
								<td><?php echo $k['jml_laki'];?></td>
								<td><?php echo $k['jml_pr'];?></td>
								<td><?php echo $k['jml_tambah'];?></td>
								<td><?php echo $k['jml_now'];?></td>
								<td><?php echo $k['tgl'];?></td>
								<td style="text-align: center;width:100px">
										<a href="<?php echo base_url() . 'admin/C_karantina/update/' . $k['id_karantina']; ?>">
											<button class="btn btn-warning btn-sm" data-toogle="Ubah"><span class="fa fa-edit" style="margin:-2px"></span> &nbsp;Edit</button>
										</a>
										
									</td>
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
</div>


