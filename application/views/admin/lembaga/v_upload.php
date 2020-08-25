<div class="col-lg-12">
	<div class="card">
		<div class="card-header">
			<strong>Upload Foto Kegiatan</strong>
		</div>
		<div class="card-body card-block">
			<?php echo form_open_multipart('admin/upload/upload_image/') ?>

			<div class="row form-group">
				<div class="col col-md-2">
					<label for="text-input" class="form-control-label pull-right">OPD:</label>
				</div>
				<div class="col-12 col-md-8">
					<input type="text" name="" class="form-control" value="<?php echo $query->nama; ?>"readonly>
					<input type="hidden" name="agendaId" value="<?php echo $query->agenda_id; ?>">
				</div>
			</div>

			<div class="row form-group">
				<div class="col col-md-2">
					<label for="text-input" class="form-control-label pull-right">Tanggal:</label>
				</div>
				<div class="col-12 col-md-4">
					<input type="text" name="tgl" class="form-control" value="<?php echo $query->tanggal; ?>" readonly>
				</div>
			</div>

			<div class="row form-group">
				<div class="col col-md-2">
					<label for="textarea-input" class=" form-control-label pull-right">Lokasi:</label></div>
				<div class="col-12 col-md-8">
					<textarea name="kegiatan" rows="2" class="form-control" readonly><?php echo $query->lokasi; ?></textarea>
				</div>
			</div>

			<div class="row form-group">
				<div class="col col-md-2">
					<label for="text-input" class="form-control-label pull-right">Foto Kegiatan:</label>
				</div>
				<div class="col-12 col-md-8">
					<input type="hidden" name="old"  value="<?=$query->foto_agenda?>">
					<input type="file" name="filefoto" class="form-control" id="preview_gambar"><br>
	
					<img src="<?php echo base_url('assets/4lbum/' . $query->foto_agenda); ?>" width="150px" alt="Preview Gambar" />&nbsp;
					<img src="#" id="gambar_nodin" width="150px" height="100px" alt="Preview Gambar" />
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Upload" value="Simpan" class="btn btn-primary btn-sm pull-right" style="margin-left: 5px">
			<button type="reset" class="btn btn-danger btn-sm pull-right" onClick="self.history.back()">Kembali</button>
		</div>
		</form>
	</div>
</div>
<script src="<?=base_url()?>assets/js/jquery-1.11.1.js"></script>

<script>
	function bacaGambar(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function(e) {
				$('#gambar_nodin').attr('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}
</script>
<script>
	$("#preview_gambar").change(function() {
		bacaGambar(this);
	});
</script>

