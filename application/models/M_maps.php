<?php

if (!defined('BASEPATH'))
exit('No direct script access allowed');


class M_maps extends CI_Model {

	private $user = 'data_mudik';

	function get_username($username) {
		$this->db->where('nama', $username);
		$this->db->limit(1);
		$query = $this->db->get($this->user);

		if ($query->num_rows() == 1) {
			return TRUE;
		}
		
		return FALSE;
	}

}
