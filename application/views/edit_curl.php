<?php echo $this->session->flashdata('hasil'); ?>
<?php echo form_open_multipart('c_api/edit/'. $r->username);?>
<table>
    <tr><td>Vilaage_id</td><td><input type="text" name="a" value="<?=$r->village_id?>"></td></tr>            
    <tr><td>Vilaage_id</td><td><input type="text" name="b" value="<?=$r->username?>"></td></tr>            
    <tr><td>Vilaage_id</td><td><input type="text" name="c" value="<?=$r->password?>"></td></tr>            
    <tr><td>Vilaage_id</td><td><input type="text" name="d" value="<?=$r->nama?>"></td></tr>            
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('kontak','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>
