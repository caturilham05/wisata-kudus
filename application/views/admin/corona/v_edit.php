<div class="col-lg-12">
	<div class="card">
		<div class="card-header">
			<strong><?= $title ?></strong>
		</div>
		<div class="card-body card-block">
			<?php echo form_open('admin/C_corona/proses/' . $query->wilayah) ?>
			<div class="col-md-4">
				<div class="text-left">
					<h3 class="deep-black">ODP</h3>
					<span>(Orang Dalam Pemantauan)</span>
					<hr>
					<div class="row form-group">
						<div class="col-12 col-md-8">
							<input type="hidden" name="id" class="form-control" value="<?php echo $query->id_corona; ?>">
							<input type="number" name="odp" class="form-control" value="<?php echo $query->odp; ?>">
						</div>
					</div>
				</div>
			</div>

			<?php date_default_timezone_set('Asia/Jakarta'); $jam =  date('H:i:s'); // Hasil: 20-01-2017 05:32:15 ?>
			<input type="hidden" name="jam" value="<?=$jam?>">

			<div class="col-md-4">
				<div class="text-left">
					<h3 class="deep-black">PDP</h3>
					<span>(Orang Dalam Pemantauan)</span>
					<hr>
					<div class="row form-group">
						<div class="col-12 col-md-8">
							<input type="number" name="pdp" class="form-control" value="<?php echo $query->pdp; ?>">
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
							<input type="text" name="" class="form-control" value="<?php echo $query->wilayah; ?>" readonly>
						</div>
					</div>

				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-primary btn-sm pull-right" style="margin-left: 5px">
			<button type="reset" class="btn btn-danger btn-sm pull-right" onClick="self.history.back()">
				Kembali</button>
		</div>
		</form>
	</div>
</div>
