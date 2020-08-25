<div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div> 
<div class="col-md-12">
	<div class="animated fadeIn">
		<div class="card">
			<div class="card-header">
				<?php if ($this->session->userdata('level') == 'superadmin') { ?>
				<button class="btn btn-danger btn-sm pull-right" data-toggle="modal" data-target="#tambah" style="font-size: 9pt; margin-top:-5px">
					<i class="fa fa-plus"></i><span>&nbsp;Tambah</span>
				</button>
				<?php } ?>
				<strong class="card-title"><?= $title ?></strong>
			</div>
			<div class="card-body">
				<div class="table-responsive">
				<table id="bootstrap-data-tableqfrew" class="table table-bordered">
					<thead>
						<tr>
							<th>#</th>
							<th>Username</th>
							<th>Level</th>
							<th>Password</th>
							<th>OPD</th>
							<th>#</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 0;
						foreach ($query as $row) : ?>
							<tr id="<?= $row['userid']; ?>">
								<td><?php echo ++$no; ?></td>
								<td><?php echo $row['username'] ?></td>
								<td><?php echo $row['level'] ?></td>
								<td><?php echo $row['password'] ?></td>
								<td><?php echo $row['ssk'] ?></td>
								<td style="text-align: center;">
									<a href="<?php echo base_url() . 'admin/C_user/update/' . $row['nama_seo']; ?>">
										<button class="btn btn-primary btn-sm"><span class="fa fa-edit" style="margin:-2px"></span></button>
									</a>
									<?php if ($this->session->userdata('level') == 'superadmin') { ?>

										<button type="submit" class="btn btn-danger btn-sm remove"><span class="fa fa-trash"></span></button>
									<?php } ?>
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


<!-- modal tambah user opd -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title" id="smallmodalLabel">Tambah User Pengguna</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">x</span>
				</button>
			</div>

			<form action="<?php echo base_url('admin/C_user/proses'); ?>" method="POST">
				<div class="modal-body">

					<div class="form-group">
						<label for="">UserName</label>
						<input type="text" class="form-control" name="username" required autocomplete="off">
					</div>

					<div class="form-group">
						<label for="">Password</label>
						<input type="password" class="form-control" name="pwd" required autocomplete="off">
					</div>

					<div class="form-group">
						<label>OPD</label>
						<select name="kantor_id" class="form-control itemName" data-width="100%">
							<option value="KOSONG">PILIH-- </option>
							<?php
							foreach ($opd as $dataRow) {
								if ($opd == $dataRow['kantor_id']) {
									$cek = " selected";
								} else {
									$cek = "";
								}
								echo "<option value='$dataRow[kantor_id]' $cek> $dataRow[ssk]</option>";
							}
							?>
						</select>
					</div>

				</div>

				<div class="modal-footer">
					<input type="submit" class="btn btn-primary" name="Simpan" value="Simpan" style="font-size: 8pt; padding:9px">
				</div>
			</form>
		</div>
	</div>
</div>


<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>

<link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />
<script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
	$('#notifications').slideDown('slow').delay(6000).slideUp('slow');
	$('.itemName').select2({
		dropdownParent: $('#tambah')
	});
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
						url: "<?php echo base_url(''); ?>admin/C_user/delete/" + id,
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
