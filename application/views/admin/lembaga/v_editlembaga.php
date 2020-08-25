 <div class="col-lg-12">
      <div class="card">
        <div class="card-header">
          <strong>Edit Data</strong>
        </div>
        <div class="card-body card-block">
					<?php echo form_open_multipart('admin/C_penyemprotan/proses/'.$query->agenda_id) ?>
					
						<div class="row form-group">
              <div class="col col-md-2">
                <label for="text-input" class="form-control-label pull-right">OPD:</label>
              </div>
              <div class="col-12 col-md-8">
                <input type="text" name="" class="form-control" value="<?php echo $query->nama;?> " readonly>
              </div>
						</div>

            <!-- <div class="row form-group">
              <div class="col col-md-2">
                <label for="text-input" class="form-control-label pull-right">Jam:</label>
              </div>
              <div class="col-12 col-md-4 clockpicker" data-autoclose="true">
                <input type="text" name="jam" class="form-control" value="<?php echo substr($query->jam,0,5);?>">
              </div>
              <div class="col-12 col-md-4 clockpicker" data-autoclose="true">
                <input type="text" name="sampai" class="form-control" value="<?php echo substr($query->sampai,0,5);?>">
              </div>
						</div> -->
						

						<div class="row form-group">
              <div class="col col-md-2">
                <label for="text-input" class="form-control-label pull-right">Tanggal:</label>
              </div>
              <div class="col-12 col-md-4">
                <input type="date" name="tgl" class="form-control" value="<?php echo $query->tanggal;?>">
              </div>
						</div>

						
						<div class="row form-group">
              <div class="col col-md-2">
                <label for="textarea-input" class=" form-control-label pull-right">Lokasi:</label></div>
              <div class="col-12 col-md-8">
                <textarea name="lokasi"  rows="4"  class="form-control"><?php echo $query->lokasi;?></textarea>
              </div>
						</div>
						
						<div class="row form-group">
              <div class="col col-md-2">
                <label for="textarea-input" class=" form-control-label pull-right">Status:</label></div>
              <div class="col-12 col-md-8">
								<select name="status" class="form-control">
                    <option value="">Pilih Status</option>
                    <option value="Belum-Dilaksanakan" <?=$query->status == "Belum-Dilaksanakan" ? "selected" : ""?>>Belum Dilaksanakan</option>
                    <option value="Sudah-Dilaksanakan" <?=$query->status == "Sudah-Dilaksanakan" ? "selected" : ""?>>Sudah Dilaksanakan</option>
                </select>
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

						