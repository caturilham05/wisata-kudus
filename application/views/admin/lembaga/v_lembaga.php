<div class="col-md-12">
	<div class="card">
		<div class="animated fadeIn">
			<div class="card-header">
				<?php if ($this->session->userdata('level') == 'admin') { ?>
					<?php } ?>
					<button class="btn btn-danger btn-sm pull-right" data-toggle="modal" data-target="#tambah" style="font-size: 9pt; margin-top:-5px">
						<i class="fa fa-plus"></i><span>&nbsp;Tambah</span>
					</button>
				<h6><strong class="card-title"><?= $title ?></strong></h6>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="bootstrap-data-table" class="table table-bordered">
						<thead>
							<tr>
								<th></th>
								<th>Wilayah</th>
								<th>ODP</th>
								<th>PDP</th>
								<th>Sembuh</th>
								<th>Meninggal</th>
								<th>Jenis</th>
								<th style="text-align: center;" width="45px">#</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1;
							foreach ($kegiatan as $r):
								$pecah1 = explode("-", $r['tgl']);
								$date1 = $pecah1[0];
								$month1 = $pecah1[1];
								$year1 = $pecah1[2];
							?>
								<tr id="<?=$r['id_dw']?>">
									<td><?=$no++ ?></td>
									<td><?=$r['nama_wilayah'] ?></td>
									<td><?=$r['odp']; ?></td>
									<td><?=$r['pdp']; ?></td>
									<td><?=$r['sembuh'] ?></td>
									<td><?=$r['meninggal'] ?></td>
									<td><?=$r['jenis'] ?></td>
									<td style="text-align: center;width:100px">
										<a href="<?php echo base_url() . 'admin/C_penyemprotan/update/' . $r['id_dw']; ?>">
											<button class="btn btn-success btn-sm"><span class="fa fa-edit" style="margin:-2px"></span></button>
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


<!-- modal tambah Data Kegiatans -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title" id="smallmodalLabel">Tambah Data</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">X</span>
				</button>
			</div>

			<?php echo form_open(base_url('admin/C_pasien/proses/')) ?>

			<div class="modal-body">
				<?php date_default_timezone_set('Asia/Jakarta'); $jam =  date('H:i'); // Hasil: 20-01-2017 05:32:15 ?>

				<div class="form-group">
					<label for="">Wilayah</label>
					<input type="text" class="form-control" name="wilayah" placeholder="Input Wilayah" required>
				</div>

				<div class="form-group">
					<label for="">Jum ODP</label>
					<input type="number" class="form-control" name="odp" placeholder="Input Jumlah Pasien ODP" required>
				</div>

				<div class="form-group">
					<label for="">Jum PDP</label>
					<input type="number" class="form-control" name="pdp" placeholder="Input Jumlah Pasien PDP" required>
				</div>

				<div class="form-group">
					<label for="">Jum Sembuh</label>
					<input type="number" class="form-control" name="sembuh" placeholder="Input Jumlah Pasien Sembuh" required>
				</div>

				<div class="form-group">
					<label for="">Jum Meninggal</label>
					<input type="number" class="form-control" name="meninggal" placeholder="Input Jumlah Pasien Meninggal" required>
				</div>

				<div class="form-group">
					<label for="">Jenis</label>
					<select name="jenis" class="form-control">
						<option value="">-- Pilih --</option>
						<option value="dalam-wilayah">Dalam Wilayah</option>
						<option value="luar-wilayah">Luar Wilayah</option>
					</select>
				</div>


			</div>

			<div class="modal-footer">
				<input type="submit" class="btn btn-primary btn-small" name="Simpan" value="Simpan" style="font-size: 9pt;">
			</div>

			</form>
		</div>
	</div>
</div>


<link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />
<script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
<script src="<?php echo base_url() ?>template/assets/js/vendor/jquery-2.1.4.min.js"></script>
<?php if($this->session->flashdata('msg')):?>
	<script>
		swal("Berhasil","Data Berhasil Tersimpan", "success");
	</script>
<?php endif?>
<script>   
    $('#notifications').slideDown('slow').delay(4000).slideUp('slow');
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
						url: "<?php echo base_url(''); ?>admin/C_penyemprotan/delete/" + id,
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
   
   

