 <div class="col-lg-8">
 	<div class="card">
 		<div class="animated fadeIn">
 			<div class="card-header">
 				<!-- <strong>Form Edit Data User</strong -->
 				<div class="card-body card-block">
					 <?php echo form_open('admin/C_user/proses/' . $query->userid) ?>
					 
					 <div class="row form-group">
 						<div class="col col-md-2">
 							<label for="text-input" class="form-control-label pull-right">Level:</label>
 						</div>
 						<div class="col-12 col-md-6">
 							<input type="text" name="" class="form-control" value="<?php echo $query->level; ?>" readonly>
 						</div>
 					</div>

 					<div class="row form-group">
 						<div class="col col-md-2">
 							<label for="text-input" class="form-control-label pull-right">OPD:</label>
 						</div>
 						<div class="col-12 col-md-8">
 							<input type="text" name="" class="form-control" value="<?php echo $query->nama; ?>" readonly>
 						</div>
 					</div>

 					<div class="row form-group">
 						<div class="col col-md-2">
 							<label for="text-input" class="form-control-label pull-right">Username:</label>
 						</div>
 						<div class="col-12 col-md-8">
 							<input type="text" name="username" class="form-control" value="<?php echo $query->username; ?>">
 						</div>
 					</div>

 					<div class="row form-group">
 						<div class="col col-md-2">
 							<label for="text-input" class="form-control-label pull-right">Password:</label>
 						</div>
 						<div class="col-12 col-md-8">
 							<input type="text" name="pwd" class="form-control">
							 <span class="text-danger">Jika password tidak di update, biarkan kosong</span>
 						</div>
					 </div>

 				</div>
 			</div>
 			<div class="card-footer">
				 <button type="reset" class="btn btn-danger btn-sm" onClick="self.history.back()">
					 Kembali</button>
					 <input type="submit" name="Ubah" value="Edit" class="btn btn-primary btn-sm">
			</div>
 			</form>
 		</div>
 	</div>
 </div>
