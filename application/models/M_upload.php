<?php
class M_upload extends CI_Model
{
	function simpan_upload($id,$gambar)
	{
		$data = array(
			'foto_agenda' => $gambar,
		);
		$this->db->where('agenda_id', $id);
		$this->db->update('agenda', $data);
	}
}
