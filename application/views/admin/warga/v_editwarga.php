 <div class="col-lg-12">
     <div class="card">
         <div class="animated fadeIn">
			 
             <div class="card-header">
                 <strong>Edit OPD</strong><?php if ($this->session->userdata('level') == 'admin') { ?><?php } ?>
			 </div>
			 
				<?php echo form_open_multipart('admin/C_warga/proses/' . $query->kantor_id) ?>
					<div class="card-body card-block">

						<div class="row form-group">
							<div class="col col-md-2">
								<label for="text-input" class="form-control-label pull-right">OPD:</label>
							</div>
							<div class="col-12 col-md-8">
								<input type="text" name="opd" class="form-control" value="<?php echo $query->nama; ?>">
							</div>
						</div>

						<div class="row form-group">
							<div class="col col-md-2">
								<label for="text-input" class="form-control-label pull-right">OPD ALIAS:</label>
							</div>
							<div class="col-12 col-md-8">
								<input type="text" name="ssk" class="form-control" value="<?php echo $query->ssk; ?>">
							</div>
						</div>

						<div class="row form-group">
							<div class="col col-md-2">
								<label for="text-input" class="form-control-label pull-right">ICON:</label>
							</div>
							<div class="col-12 col-md-8">
								<img src=<?php echo base_url('assets/icon/'.$query->icon);?> width="150px"><br><br>
								<input type="file" name="userfile" value="<?php echo $query->icon;?>" class="form-control">
							</div>
						</div>
						
					</div>
					<div class="card-footer">
						<button type="reset" class="btn btn-danger btn-sm" onClick="self.history.back()">Kembali</button>
						<input type="submit" name="Ubah" value="Edit" class="btn btn-primary btn-sm">
					</div>
				</form>
		 </div>
		 
     </div>
</div>
