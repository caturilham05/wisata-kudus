<div class="col-lg-12">
	<div class="card">
		<div class="card-header">
			<strong><?= $title ?></strong>
		</div>
		<div class="card-body card-block">
			<?php echo form_open('admin/C_corona/proses/' . $query->id_pdp) ?>
			

			
			
			<div class="col-md-3">
				<div class="text-left">
					<h3 class="deep-black">Pasien</h3>
					<span>(Dirawat)</span>
					<hr>
					<div class="row form-group">
						<div class="col-12 col-md-8">
							<input type="hidden" name="id" class="form-control" value="<?php echo $query->id_pdp; ?>">
							<input type="number" name="dirawat" class="form-control" value="<?php echo $query->dirawat; ?>">
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="text-left">
					<h3 class="deep-black">Pasien</h3>
					<span>(Sembuh)</span>
					<hr>
					<div class="row form-group">
						<div class="col-12 col-md-8">
							<input type="number" name="sembuh" class="form-control" value="<?php echo $query->sembuh; ?>">
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="text-left">
					<h3 class="deep-black">Pasien</h3>
					<span>(Meninggal)</span>
					<hr>
					<div class="row form-group">
						<div class="col-12 col-md-8">
							<input type="number" name="meninggal" class="form-control" value="<?php echo $query->meninggal; ?>">
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-3">
				<div class="text-left">
					<h3 class="deep-black">Kumulatif</h3>
					<span>(PDP)</span>
					<hr>
					<?php $jum = 0; $jum = $query->dirawat + $query->sembuh + $query->meninggal ?>
					<div class="row form-group">
						<div class="col-12 col-md-8">
							<input type="number"  class="form-control" value="<?=$jum; ?>" readonly>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="PDP" value="Simpan" class="btn btn-primary btn-sm pull-right" style="margin-left: 5px">
			<button type="reset" class="btn btn-danger btn-sm pull-right" onClick="self.history.back()">
				Kembali</button>
		</div>
		</form>
	</div>
</div>
