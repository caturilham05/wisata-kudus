<?php echo $this->session->flashdata('hasil'); ?>
<?php echo form_open_multipart('c_api/create');?>
<table>
    <tr><td>usernam</td><td><?php echo form_input('a');?></td></tr>
    <tr><td>pass</td><td><?php echo form_input('b');?></td></tr>        
    <tr><td>nama</td><td><?php echo form_input('c');?></td></tr>        
    <tr><td>alamt</td><td><?php echo form_input('d');?></td></tr>        
    <tr><td>jk</td><td><?php echo form_input('e');?></td></tr>        
    <tr><td>umur</td><td><?php echo form_input('f');?></td></tr>        
    <tr><td>hp</td><td><?php echo form_input('g');?></td></tr>        
	<tr><td>riwayat perjalanan</td><td><?php echo form_input('h');?></td></tr>        
    <tr><td>tgl sampai</td><td><input type="date" name="i"></td></tr>        
    <tr><td>pantau awal</td><td><input type="date" name="j"></td></tr>        
    <tr><td>pantau akhir</td><td><input type="date" name="k"></td></tr>        
    <tr><td>gejala</td><td><?php echo form_input('l');?></td></tr>        
    <tr><td>kondisi Umum</td><td><?php echo form_input('m');?></td></tr>        
    <tr><td>keterangan</td><td><?php echo form_input('n');?></td></tr>            
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('kontak','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>
