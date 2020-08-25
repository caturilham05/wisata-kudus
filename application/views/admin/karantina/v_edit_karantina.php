
<div class="col-lg-12">
	<div class="card">
		<div class="card-header">
			<strong><?= $title ?></strong>
		</div>
		<div class="card-body card-block">
			<?php echo form_open_multipart('admin/C_karantina/proses/') ?>
			 <input name="id_karantina" type="hidden" class="form-control" value=" <?php echo $up[0]['id_karantina']; ?>">  
			<div class="row form-group">
				<div class="col col-md-2">
					<label for="textarea-input" class=" form-control-label pull-right"><b>Nama Tempat</b></label>
				</div>
				<div class="col-12 col-md-4">
					<select name="nama_tempat" class="form-control">
						<option value="">-- Pilih Tempat --</option>
						<option value="balaidiklat" <?= $up[0]['nama_tempat'] == "balaidiklat" ? "selected" : "" ?>>Balai Diklat Sonyawarih</option>
						<option value="grahacolo" <?= $up[0]['nama_tempat'] == "grahacolo" ? "selected" : "" ?>>Graha Muria Colo</option>
						<option value="rusunawa" <?= $up[0]['nama_tempat'] == "rusunawa" ? "selected" : "" ?>>Rusunawa Bakalankrapyak</option>
					</select>	
				</div>
			</div>
			<div class="row form-group">
				<div class="col col-md-2">
					<label for="textarea-input" class=" form-control-label pull-right"><b>Jumlah Sebelumnya</b></label>
				</div>
				<div class="col-12 col-md-4">
					<input name="jml_before" id="jml_before" type="input" class="form-control" value="<?php echo $up[0]['jml_before'];?>">
				</div>
			</div>
			<div class="row form-group">
				<div class="col col-md-2">
					<label for="textarea-input" class=" form-control-label pull-right"><b>Jumlah Laki-laki</b></label>
				</div>
				<div class="col-12 col-md-4">
					<input name="jml_laki" id="jml_laki" type="input" class="form-control" value="<?php echo $up[0]['jml_laki'];?>">
				</div>
			</div>

			<div class="row form-group">
				<div class="col col-md-2">
					<label for="textarea-input" class=" form-control-label pull-right"><b>Jumlah Perempuan</b></label>
				</div>
				<div class="col-12 col-md-4">
					<input name="jml_pr" id="jml_pr" type="input" class="form-control" value="<?php echo $up[0]['jml_pr'];?>">
				</div>
			</div>

			<div class="row form-group">
				<div class="col col-md-2">
					<label for="textarea-input" class=" form-control-label pull-right"><b>Jumlah Tambahan</b></label>
				</div>
				<div class="col-12 col-md-4">
					<input name="jml_tambah" id="jml_tambah" type="input" class="form-control" value="<?php echo $up[0]['jml_tambah'];?>">
				</div>
			</div>

			<div class="row form-group">
				<div class="col col-md-2">
					<label for="textarea-input" class=" form-control-label pull-right"><b>Jumlah Saat Ini</b></label>
				</div>
				<div class="col-12 col-md-4">
					<input name="jml_now" id="jml_now" type="input" class="form-control" value="<?php echo $up[0]['jml_now'];?>">
				</div>
			</div>

			<div class="row form-group">
				<div class="col col-md-2">
					<label for="text-input" class="form-control-label pull-right"><b>Tanggal Update</b></label>
				</div>
				<div class="col-12 col-md-4">
					<input type="date" name="tgl" class="form-control" value="<?php echo substr($up[0]['tgl'], 0, 10); ?>">
				</div>
			</div>

			<div class="card-footer">
				<button type="reset" class="btn btn-danger btn-sm pull-right" onClick="self.history.back()" style="margin-left: 5px">
					&times;Kembali</button>
				<input type="submit" name="Ubah" value="Simpan" class="btn btn-primary btn-sm pull-right" style="margin-left: 5px">
				
			</div>
		</form>


		</div>
	</div>
</div>