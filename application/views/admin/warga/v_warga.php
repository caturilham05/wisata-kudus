<div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div> 
<div class="col-md-12">
	<div class="animated fadeIn">
		<div class="card">
			<div class="card-header">
				<?php if ($this->session->userdata('level') == 'admin') { ?>
				<?php } ?>
				<button class="btn btn-danger btn-sm pull-right" data-toggle="modal" data-target="#tambah" style="font-size: 9pt; margin-top:-5px">
					<i class="fa fa-plus"></i><span>&nbsp;Tambah</span>
				</button>
				<?php if ($this->session->userdata('level') == 'admin') { ?>
				<?php } ?>
				<strong class="card-title"><?= $title ?></strong>
			</div>
			<div class="card-body">
				<div class="table-responsive">
				<table id="bootstrap-data-table" class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>OPD</th>
							<th>OPD SEO</th>
							<th>ICON</th>
							<th style="text-align: center;" width="50px">#</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1;
						foreach ($query as $row) : ?>
							<tr id="<?= $row['kantor_id']; ?>">
								<td><?=$no++ ?></td>
								<td><?php echo $row['nama'] ?></td>
								<td><?php echo $row['ssk'] ?></td>
								<td>
									<img src="<?php echo base_url('assets/icon/' . $row['icon']); ?>" alt="" width="40px">
								</td>

								<td>
									<a href="<?php echo base_url() . 'admin/C_warga/update/' . $row['nama_seo']; ?>">
										<button class="btn btn-primary btn-sm"><span class="fa fa-edit"></span></button>
									</a>
									<button type="submit" class="btn btn-danger btn-sm remove"><span class="fa fa-trash"></span></button>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />
<script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
<script>   
    $('#notifications').slideDown('slow').delay(6000).slideUp('slow');
</script>
<script type="text/javascript">
	$(".remove").click(function() {
		var id = $(this).parents("tr").attr("id");

		swal({
				title: "Anda Yakin?",
				text: "Menghapus Data ini!",
				type: "warning",
				showCancelButton: true,
				confirmButtonClass: "btn-danger",
				confirmButtonText: "HAPUS!",
				cancelButtonText: "BATAL!",
				closeOnConfirm: true,
				closeOnCancel: true
			},
			function(isConfirm) {
				if (isConfirm) {
					$.ajax({
						url: "<?php echo base_url(''); ?>admin/C_warga/delete/" + id,
						type: 'GET',
						error: function() {
							alert('Something is wrong');
						},
						success: function(data) {
							$("#" + id).remove();
							swal("Deleted!", "Behasil Dihapus", "success");
						},
					});
				} else {
					swal("Cancelled", "Your imaginary file is safe :)", "error");
				}
			});
	});
</script>


<!-- modal tambah warga -->
<div class="modal fade tambah" id="tambah" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="animated fadeIn">
				<div class="modal-header">
					<h6 class="modal-title" id="smallmodalLabel"><?= $title ?></h6>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">x</span>
					</button>
				</div>

				<form action="<?php echo base_url('admin/c_warga/proses/'); ?>" method="POST" enctype="multipart/form-data">
					<div class="modal-body">

						<div class="form-group">
							<label for="">OPD</label>
							<input type="text" class="form-control" name="opd" placeholder="Input OPD...." autocomplete="off" autofocus required>
							<input type="hidden" class="form-control" name="tgl" value="<?php echo date('Y-m-d'); ?>" required>
						</div>

						<div class="form-group">
							<label for="">OPD ALIAS</label>
							<input type="text" class="form-control" name="ssk" placeholder="Input OPD Alias...." autocomplete="off" autofocus required>
						</div>

						<div class="form-group">
							<label for="">ICON</label>
							<input type="file" name="userfile" class="form-control">
						</div>

					</div>

					<div class="modal-footer">
						<input type="submit" class="btn btn-primary btn-small" name="Simpan" value="Simpan" style="font-size: 9pt;">
						<!-- <input type="button" class="btn btn-danger btn-small" data-dismiss="modal" value="Cancel" style="font-size:9pt"> -->
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
