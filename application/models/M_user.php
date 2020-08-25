<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_user extends CI_Model
{
	public function cek_user($data)
	{
		// $query = $this->db->get_where('user', $data);
		$this->db->select('*');
		$this->db->from('user');
		// $this->db->join('kantor','kantor.kantor_id = user.kantor_id','left');
		$this->db->where($data);
		$query = $this->db->get();
		return $query;
	}

	public function index()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('kantor','kantor.kantor_id=user.kantor_id','left');
		
		// pilihan jika user leve admin tamapilkan hanya user yang login dan sebaliknya
		if($this->session->userdata('level') =='admin'){
			$this->db->where('user.kantor_id=', $this->session->userdata('kantor_id'));
		}
		
		$this->db->order_by('kantor.ssk','desc');
		$query = $this->db->get();
        return $query->result_array();
	}

	function tampilOPD()
	{
		$this->db->select('*');
		$this->db->from('kantor');
		// $this->db->join('user','user.kantor_id=kantor.kantor_id','left');
		$this->db->order_by('kantor.ssk','asc');
		$query = $this->db->get();
		
        return $query->result_array();
	}


	public function ubah_tampil($id = '')
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('kantor','kantor.kantor_id=user.kantor_id','left');
		$this->db->where('kantor.nama_seo', $id);
		$query = $this->db->get()->row();
		return $query;
	}
	
	public function simpan()
	{
		$data = array(
			'username' 		=> stripHTMLtags(trim($this->input->post('username','true'))),
			'password' 		=> md5($this->input->post('pwd')),
			'kantor_id' 	=> stripHTMLtags($this->input->post('kantor_id'))
		);

		$this->db->set('level','admin');
		$this->db->insert('user', $data);
	}

	public function ubah($id = NULL)	
	{
        $password   = $this->input->post('pwd', 'true');

        if (!empty($password)) {
            $data = array(
				'username'    => stripHTMLtags(trim($this->input->post('username', 'true'))),
				'password'    => md5($this->input->post('pwd', 'true')),
            );
        }else {
            $data = array(
				'username'    => stripHTMLtags(trim($this->input->post('username', 'true'))),
            );
        }

		$this->db->where('userid', $id);
		$this->db->update('user', $data);
	}

}

?>
