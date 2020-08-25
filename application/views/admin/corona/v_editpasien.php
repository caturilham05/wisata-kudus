<div class="col-lg-12">
	<div class="card">
		<div class="card-header">
			<strong><?= $title ?></strong>
		</div>
		<div class="card-body card-block">
			<?php echo form_open('admin/C_corona/proses/' . $query->wilayah) ?>
			<div class="col-md-4">
				<div class="text-left">
					<h3 class="deep-black">Rumah Sakit</h3>
					<span>(Pasien Dirawat)</span>
					<hr>
					<div class="row form-group">
						<div class="col-12 col-md-10">
							<input type="hidden" name="id" class="form-control" value="<?php echo $query->id_pasien; ?>">
							<select name="rs" class="form-control">
								<option value="KOSONG">Pilih Rumah Sakit </option>
								<?php
								$rs = $this->db->query("SELECT * FROM rumahsakit ");
								foreach ($rs->result_array() as $dataRow) {
									if ($query->id_rs == $dataRow['id_rs']) {
									  $cek = " selected";
									} else { $cek=""; }
									echo "<option value='$dataRow[id_rs]' $cek> $dataRow[nama_rs]</option>";
								  } ?>
							</select>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<div class="text-left">
					<h3 class="deep-black">Jumlah</h3>
					<span>(PDP Dirawat)</span>
					<hr>
					<div class="row form-group">
						<div class="col-12 col-md-8">
							<input type="number" name="jum" class="form-control" value="<?php echo $query->jum; ?>">
						</div>
					</div>

				</div>
			</div>

			<div class="col-md-4">
				<div class="text-left">
					<h3 class="deep-black">Wilayah</h3>
					<span>Jenis</span>
					<hr>
					<div class="row form-group">
						<div class="col-12 col-md-8">
							<select name="wilayah" class="form-control">
								<?php
								$rs = $this->db->query("SELECT * FROM corona");
								foreach ($rs->result_array() as $dataRow) {
									if ($query->id_corona == $dataRow['id_corona']) {
									  $cek = " selected";
									} else { $cek=""; }
									echo "<option value='$dataRow[id_corona]' $cek> $dataRow[wilayah]</option>";
								  } ?>
							</select>
						</div>
					</div>

				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Edit" value="Simpan" class="btn btn-primary btn-sm pull-right" style="margin-left: 5px">
			<button type="reset" class="btn btn-danger btn-sm pull-right" onClick="self.history.back()">
				Kembali</button>
		</div>
		</form>
	</div>
</div>
