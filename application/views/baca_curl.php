<table>
	<tr>
		<th>ID</th>
		<th>username</th>
		<th>pasword</th>
		<th>nama</th>
		<th>jenis kel</th>
		<th>Aksi</th>
	</tr>
	<?php foreach($queri->result() as $r):?>
	<tbody>
		<tr>
			<td><?=$r->village_id?></td>
			<td><?=$r->username?></td>
			<td><?=$r->password?></td>
			<td><?=$r->nama?></td>
			<td><?=$r->jenis_kelamin?></td>
			<td>
				<a href="<?php echo base_url() . 'C_api/tampil_edit/' . $r->village_id; ?>">
					<button class="btn btn-success btn-sm"><span class="fa fa-edit" style="margin:-2px">Edit</span></button>
				</a>
			</td>
		</tr>
	</tbody>
	<?php endforeach; ?>
</table>
