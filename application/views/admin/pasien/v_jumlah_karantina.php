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
								<th>#</th>
								<th>NIK</th>
								<th>Nama</th>
								<th>Tempat Karantina</th>
								<th>Jenis Kelamin</th>
								<th>TGL</th>
								<th>#</th>
							</tr>
						</thead>
						<tbody>
							
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
				<?php date_default_timezone_set('Asia/Jakarta');
				$jam =  date('H:i'); // Hasil: 20-01-2017 05:32:15 
				?>

				<div class="form-group">
					<label>Pemudik</label>
					<select name="pemudik" class="form-control select2">
						<option value="KOSONG">Pilih Nama Pemudik---</option>
						<?php
						$rs = $this->db->query("SELECT * FROM data_mudik order by nama asc ");
						foreach ($rs->result_array() as $dataRow) { ?>
							<option value="<?=$dataRow['id']?>"><?=$dataRow['nama']?></option>
						<?php } ?>
					</select>
				</div>

				<div class="form-group">
					<label for="">Tempat Karantina</label>
					<select name="tempat" class="form-control">
						<option value="">Pilih Tempat Karantina --</option>
						<option value="Balaidiklat">Balai Diklat</option>
						<option value="Grahamulia">Graha Mulia Colo</option>
						<option value="Rusunawa">Rusunawa</option>
					</select>
				</div>

				<div class="form-group">
					<label for="">Keterangan</label>
					<textarea name="ket" class="form-control"  rows="3" placeholder="Input Keterangan"></textarea>
				</div>

				<!-- <div class="form-group">
					<label for="">Jumlah Perempuan</label>
					<input type="number" class="form-control" name="jump" placeholder="Input Jumlah Pasien Perempuan" required>
				</div> -->

				<!-- <div class="form-group">
					<label for="">Jenis Kelamin</label><br>
					<input type="radio" class="radio-control" name="jk" value="Laki-Laki" required>&nbsp;&nbsp;&nbsp;Laki - Laki&nbsp;&nbsp;&nbsp;
					<input type="radio" class="radio-control" name="jk" value="Perempuan" required>&nbsp; Perempuan 
				</div> -->

				<!-- <div class="form-group">
					<label for="">Tanggal</label>
					<input type="date" class="form-control" name="tgl" placeholder="Input Jumlah Pasien Meninggal" required>
				</div> -->

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
						url: "<?php echo base_url(''); ?>admin/C_pasien/delete/" + id,
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
