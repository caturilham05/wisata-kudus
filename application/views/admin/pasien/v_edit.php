<div class="col-lg-12">
	<div class="card">
		<div class="card-header">
			<strong>Edit Data</strong>
		</div>
		<div class="card-body card-block">
			<?php echo form_open_multipart('admin/C_pasien/proses/') ?>

		
			<div class="row form-group">
				<div class="col col-md-2">
					<label for="textarea-input" class=" form-control-label pull-right">Nama Pemudik:</label></div>
				<div class="col-12 col-md-4">
					<input type="hidden" name="id" value="<?=$query->id?>">
					<select name="pemudik" class="form-control">
						<?php
						$rs = $this->db->query("SELECT * FROM data_mudik order by nama asc");
						foreach ($rs->result_array() as $dataRow) {
							if ($query->id == $dataRow['id']) {
								$cek = " selected";
							} else {
								$cek = "";
							}
							echo "<option value='$dataRow[id]' $cek> $dataRow[nama]</option>";
						} ?>
					</select>
				</div>
			</div>

			<div class="row form-group">
				<div class="col col-md-2">
					<label for="textarea-input" class=" form-control-label pull-right">Tempat:</label></div>
				<div class="col-12 col-md-4">
					<select name="tempat" class="form-control">
						<option value="">-- Pilih Tempat --</option>
						<option value="balaidiklat" <?= $query->nama_tempat == "Balaidiklat" ? "selected" : "" ?>>Balai Diklat</option>
						<option value="grahamulia" <?= $query->nama_tempat == "Grahamulia" ? "selected" : "" ?>>Graha Mulia</option>
						<option value="rusunama" <?= $query->nama_tempat == "Rusunawa" ? "selected" : "" ?>>Rusunawa</option>
					</select>
				</div>
			</div>

			<!-- <div class="row form-group">
				<div class="col col-md-2">
					<label for="text-input" class="form-control-label pull-right">Jumlah Laki-Laki:</label>
				</div>
				<div class="col-12 col-md-4">
					<input type="number" name="juml" class="form-control" value="<?= $query->jum_laki ?>">
				</div>
			</div>

			<div class="row form-group">
				<div class="col col-md-2">
					<label for="text-input" class="form-control-label pull-right">Jumlah Perempuan:</label>
				</div>
				<div class="col-12 col-md-4">
					<input type="number" name="jump" class="form-control" value="<?= $query->jum_perempuan ?>">
				</div>
			</div> -->


			<!-- 
			<div class="row form-group">
				<div class="col col-md-2">
					<label for="text-input" class="form-control-label pull-right">Sembuh:</label>
				</div>
				<div class="col-12 col-md-4">
					<input type="number" name="sembuh" class="form-control" value="<?= $query->sembuh ?>">
				</div>
			</div>

			<div class="row form-group">
				<div class="col col-md-2">
					<label for="text-input" class="form-control-label pull-right">Meninggal:</label>
				</div>
				<div class="col-12 col-md-4">
					<input type="number" name="meninggal" class="form-control" value="<?= $query->meninggal ?>"  >
				</div>
			</div> -->



			<div class="row form-group">
				<div class="col col-md-2">
					<label for="text-input" class="form-control-label pull-right">Tanggal:</label>
				</div>
				<div class="col-12 col-md-4">
					<input type="date" name="tgl" class="form-control" value="<?php echo substr($query->created_at, 0, 10); ?>">
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="simpan" value="Simpan" class="btn btn-primary btn-sm pull-right" style="margin-left: 5px">
			<button type="reset" class="btn btn-danger btn-sm pull-right" onClick="self.history.back()">
				Kembali</button>
		</div>
		</form>
	</div>
</div>