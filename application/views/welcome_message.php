<!DOCTYPE html>
<html>
<head>
    <title>NIK</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css';?>">
</head>
<body>
    <div class="container">
        <div class="col-md-12 col-md-offset-1">
        <hr/>
            <form class="form-horizontal" action="<?php echo base_url('C_public/simpan');?>" method="POST">
                <div class="form-group">
                    <label class="control-label col-xs-3" >NIK</label>
                    <div class="col-xs-9">
                        <input name="NIK" id="NIK" class="form-control" type="text" placeholder="NIK..." style="width:335px;" required>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-xs-3" >Nama Anda</label>
                    <div class="col-xs-9">
                        <input name="nama" class="form-control" type="text" placeholder="Nama Anda..." style="width:335px;" readonly required>
                    </div>
                </div>

                <div class="form-group">
                <label class="control-label col-xs-3" ></label>
                    <div class="col-xs-3">
                        <input name="submit" class="form-control btn-danger" type="submit" value="Simpan">
                    </div>
                </div>
              
            </form>
        </div>
    </div>
 
    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
    <script type="text/javascript">
        $(document).ready(function(){
             $('#NIK').on('input',function(){
                var NIK=$(this).val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('C_public/cari')?>",
                    dataType : "JSON",
                    data : {NIK: NIK},
                    cache:false,
						success: function(data){
							$('[name="nama"]').val(data.content[0].NAMA_LGKP);
						}
                });
                return false;
           });
 
        });
    </script>
</body>
</html>