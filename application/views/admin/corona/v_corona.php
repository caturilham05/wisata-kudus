<?php if ($this->session->userdata('level') == 'admin') { ?><?php } ?>
<!-- <div class="btn btn-info">
	<?php echo $this->session->flashdata('success'); ?>
</div> -->

<!-- <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>  -->
<div class="col-md-12">
	<div class="card">
		<div class="animated fadeIn">
			<div class="card-header">

				<button class="btn btn-danger btn-sm pull-right" data-toggle="modal" data-target="#tambah" style="font-size: 9pt; margin-top:-5px">
					<i class="fa fa-plus"></i><span>&nbsp;Tambah</span>
				</button>

				<h6><strong class="card-title"><?= $title ?></strong></h6>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="bootstrap-data-tableq" class="table table-bordered">
						<thead>
							<tr>
								<th></th>
								<th>Wilayah</th>
								<th>ODP</th>
								<th>PDP</th>
								<th>Hari&Tgl</th>
								<th style="text-align: center;" width="45px">#</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; $j=0; $d=0;
							foreach ($kegiatan as $r) :
								$seminggu = array("kosong", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu", "Minggu");
								$hari = date("$r[hari]");
								$hari_ini = $seminggu[$hari];
								$pecah1 = explode("-", $r['date']);
								$date1 = $pecah1[0];
								$month1 = $pecah1[1];
								$year1 = $pecah1[2];

								$j = $j + $r['odp'];
								$d = $d + $r['pdp'];
							?>
								<tr id="<?= $r['id_corona'] ?>">
									<td><?= $no++ ?></td>
									<td><?= $r['wilayah']; ?></td>
									<td><?= $r['odp'] ?></td>
									<td><?= $r['pdp'] ?></td>
									<td><?= $hari_ini . ',' . $year1 . '-' . $month1 . '-' . $date1 . ' ' . substr($r['time'], 0, 5) ?></td>
									<td style="text-align: center;width:100px">
										<a href="<?php echo base_url() . 'admin/C_corona/update/' . $r['wilayah']; ?>">
											<button class="btn btn-success btn-sm"><span class="fa fa-edit" style="margin:-2px"></span></button>
										</a>
										<button type="submit" class="btn btn-danger btn-sm remove"><span class="fa fa-trash"></span></button>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
						<tr>
							<td colspan="2">Jumlah</td>
							<td><?=$j?></td>
							<td><?=$d?></td>
							<td colspan="2"></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>



<div class="col-md-12">
	<div class="card">
		<div class="animated fadeIn">
			<div class="card-header">
				
				<h6><strong class="card-title">Kasus Terkonfirmasi Covid</strong></h6>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="bootstrap-data-tableq" class="table table-bordered">
						<thead>
							<tr>
								<th>Positif</th>
								<th>Dirawat</th>
								<th>Sembuah</th>
								<th>Meninggal</th>
								<th style="text-align: center;" width="45px">#</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1;
								foreach ($positif as $r) :
							?>
								<tr>
									<td><?= $r['positif']; ?></td>
									<td><?= $r['dirawat'] ?></td>
									<td><?= $r['sembuh'] ?></td>
									<td><?= $r['meninggal'] ?></td>
									<td style="text-align: center;width:100px">
										<a href="<?php echo base_url() . 'admin/C_corona/editpositif/' . $r['id_pasienpositif']; ?>">
											<button class="btn btn-success btn-sm"><span class="fa fa-edit" style="margin:-2px"></span></button>
										</a>
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


<div class="col-md-12">
	<div class="card">
		<div class="animated fadeIn">
			<div class="card-header">
				<h6><strong class="card-title">Rincian Pasien PDP</strong></h6>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="bootstrap-data-tableq" class="table table-bordered">
						<thead>
							<tr>
								<th>PDP Dirawat</th>
								<th>PDP Sembuah</th>
								<th>PDP Meninggal</th>
								<th>PDP Kumulatif</th>
								<th style="text-align: center;" width="45px">#</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; $jum =0;
								foreach ($pasienpdp as $r) : $jum = $r['dirawat'] + $r['sembuh'] + $r['meninggal']
							?>
								<tr>
									<td><?= $r['dirawat'] ?></td>
									<td><?= $r['sembuh'] ?></td>
									<td><?= $r['meninggal'] ?></td>
									<td><?= $jum?></td>
									<td style="text-align: center;width:100px">
										<a href="<?php echo base_url() . 'admin/C_corona/editpdp/' . $r['id_pdp']; ?>">
											<button class="btn btn-success btn-sm"><span class="fa fa-edit" style="margin:-2px"></span></button>
										</a>
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



<div class="col-md-12">
	<div class="card">
		<div class="animated fadeIn">
			<div class="card-header">

				<button class="btn btn-danger btn-sm pull-right" data-toggle="modal" data-target="#pasien" style="font-size: 9pt; margin-top:-5px">
					<i class="fa fa-plus"></i><span>&nbsp;Tambah</span>
				</button>

				<h6><strong class="card-title">Pasien DiRawat</strong></h6>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="bootstrap-data-tableq" class="table table-bordered">
						<thead>
							<tr>
								<th></th>
								<th>Rumah Sakit</th>
								<th>Jumlah</th>
								<th>Keterangan</th>
								<th>Jenis</th>
								<th style="text-align: center;" width="45px">#</th>
							</tr>
						</thead>
						<tbody>
							<?php $jum = 0; $no = 1;
							foreach ($pasien as $r) :
								$jum = $jum + $r['jum'];
							?>
								<tr id="<?= $r['id_pasien'] ?>">
									<td><?= $no++ ?></td>
									<td><?= $r['nama_rs']; ?></td>
									<td><?= $r['jum'] ?></td>
									<td><?=$r['jenis']?></td>
									<td><?= $r['wilayah'] ?></td>
									<td style="text-align: center;width:100px">
										<a href="<?php echo base_url() . 'admin/C_corona/edit/' . $r['id_pasien']; ?>">
											<button class="btn btn-success btn-sm"><span class="fa fa-edit" style="margin:-2px"></span></button>
										</a>
										<button type="submit" class="btn btn-danger btn-sm hapus"><span class="fa fa-trash"></span></button>
									</td>
								</tr>
							<?php endforeach; ?>
						</tbody>
						<tr>
							<td colspan="2">Jumlah</td>
							<td><?=$jum?></td>
							<td colspan="3"></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>



<!-- modal tambah Data  -->
<div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title" id="smallmodalLabel">Tambah Data</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">X</span>
				</button>
			</div>

			<?php echo form_open(base_url('admin/C_corona/proses/')) ?>

			<div class="modal-body">

				<div class="form-group">
					<label for="">ODP</label>
					<input type="number" class="form-control" name="odp" placeholder="Input Jumlah" required>
				</div>

				<div class="form-group">
					<label for="">PDP</label>
					<input type="number" class="form-control" name="pdp" placeholder="Input Jumlah" required>
				</div>
				<?php date_default_timezone_set('Asia/Jakarta');
				$jam =  date('H:i:s'); // Hasil: 20-01-2017 05:32:15 
				?>
				<input type="hidden" name="jam" value="<?= $jam ?>">

				<div class="form-group">
					<label for="">WILAYAH</label>
					<select name="wilayah" class="form-control">
						<option value="">Pilih Wilayah</option>
						<option value="Dalam-Wilayah">Dalam Wilayah</option>
						<option value="Luar-Wilayah">Luar Wilayah</option>
					</select>
				</div>

				<!-- <div class="form-group">
					<label>RUMAH SAKIT</label>
					<select name="rs" class="form-control">
						<option value="KOSONG">Pilih Rumah Sakit </option>
						<?php
						$rs = $this->db->query("SELECT * FROM rumahsakit ");
						foreach ($rs->result_array() as $dataRow) {
							echo "<option value='$dataRow[id_rs]' $cek> $dataRow[nama_rs]</option>";
						}
						?>
					</select>
				</div> -->
			</div>

			<div class="modal-footer">
				<input type="submit" class="btn btn-primary btn-small" name="Simpan" value="Simpan" style="font-size: 9pt;">
				<!-- <input type="button" class="btn btn-danger btn-small" data-dismiss="modal" value="Cancel" style="font-size:9pt"> -->
			</div>

			</form>
		</div>
	</div>
</div>


<!-- modal tambah Data Pasien-->
<div class="modal fade" id="pasien" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title" id="smallmodalLabel">Tambah Data</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">X</span>
				</button>
			</div>

			<?php echo form_open(base_url('admin/C_corona/proses/')) ?>

			<div class="modal-body">

				<div class="form-group">
					<label>RUMAH SAKIT</label>
					<select name="rs" class="form-control">
						<option value="KOSONG">Pilih Rumah Sakit </option>
						<?php
						$rs = $this->db->query("SELECT * FROM rumahsakit ");
						foreach ($rs->result_array() as $dataRow) { ?>
							<option value="<?=$dataRow['id_rs']?>"><?=$dataRow['nama_rs']?></option>
						<?php } ?>
					</select>
				</div>

				<div class="form-group">
					<label for="">WILAYAH</label>
					<select name="wilayah" class="form-control">
						<option value="KOSONG">Pilih Wilayah </option>
						<?php
						$rs = $this->db->query("SELECT * FROM corona ");
						foreach ($rs->result_array() as $dataRow) {
							echo "<option value='$dataRow[id_corona]' $cek> $dataRow[wilayah]</option>";
						}
						?>
					</select>
				</div>

				<div class="form-group">
					<label for="">Jumlah</label>
					<input type="number" class="form-control" name="jumlah" placeholder="Input Jumlah" autocomplete="off" required>
				</div>

				
				<div class="form-group">
					<label for="">Jenis Pasien</label>
					<select name="jenis" id="" class="form-control">
						<option value="">Pilih</option>
						<option value="Positif">Positif</option>
						<option value="PDP Dirawat">PDP Dirawat</option>
					</select>
					
				</div>

				<!-- <div class="form-group">
					<label for="">PDP Dalam Wilayah &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PDP Luar Wilayah</label>
					<div class="row">
						<?php
						$rs = $this->db->query("SELECT * FROM corona left join pasien ON pasien.id_pasien=corona.id_corona");
						foreach ($rs->result_array() as $row) { 
							$pdp = $row['pdp'];
							$jum = $row['jum'];

							$d = $pdp - $jum;
							?>
							<div class="col-md-4">
								<input type="number" class="form-control" name="odp" value="<?= $d ?>" readonly>
							</div>
						<?php } ?>
					</div>
				</div> -->
			</div>

			<div class="modal-footer">
				<input type="submit" class="btn btn-primary btn-small" name="Tambah" value="Simpan" style="font-size: 9pt;">
				<!-- <input type="button" class="btn btn-danger btn-small" data-dismiss="modal" value="Cancel" style="font-size:9pt"> -->
			</div>

			</form>
		</div>
	</div>
</div>


<link rel="stylesheet" href="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.css" />
<script src="https://lipis.github.io/bootstrap-sweetalert/dist/sweetalert.js"></script>
<script src="<?php echo base_url() ?>template/assets/js/vendor/jquery-2.1.4.min.js"></script>
<?php if ($this->session->flashdata('msg')) : ?>
	<script>
		swal("Berhasil", "Data Berhasil Tersimpan", "success");
	</script>
<?php endif ?>
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
						url: "<?php echo base_url(''); ?>admin/C_corona/delete/" + id,
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
<script type="text/javascript">
	$(".hapus").click(function() {
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
						url: "<?php echo base_url(''); ?>admin/C_corona/hapus/" + id,
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
<!-- 
<div class="form-group">
	<label for="">POSITIF</label>
	<input type="number" class="form-control" name="positif" required>
</div>

<div class="form-group">
	<label for="">DIRAWAT</label>
	<input type="number" class="form-control" name="rawat" required>
</div>

<div class="form-group">
	<label for="">SEMBUAH</label>
	<input type="number" class="form-control" name="sembuh" required>
</div>

<div class="form-group">
	<label for="">MENINGGAL</label>
	<input type="number" class="form-control" name="meninggal" required>
</div> -->
