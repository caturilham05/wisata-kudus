<?php
Class C_api extends CI_Controller{

    var $API ="";

    function __construct() {
        parent::__construct();
        $this->API="http://api.jatengprov.go.id/covid/updateopd";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->helper('url');
    }

    // menampilkan data C_api
    function index(){
		// $data['queri'] = json_decode($this->curl->simple_get($this->API.'/C_api'));
		$data['queri'] = $this->db->get('corona_jateng');
        $this->load->view('baca_curl',$data);
    }

    // insert data C_api
    function create(){
        if(isset($_POST['submit'])){
            $data = array(
				'username' => $this->input->post('a'),
				'password' => $this->input->post('b') ,
				'nama' => $this->input->post('c'),
				'alamat' => $this->input->post('d'),
				'jenis_kelamin' => $this->input->post('e'),
				'umur' => $this->input->post('f'),
				'no_hp' => $this->input->post('g'),
				'riwayat_perjalanan_negara' => $this->input->post('h'),
				'tgl_sampai_di_indonesia' => $this->input->post('i'),
				'pemantauan_awal' => $this->input->post('j'),
				'pemantauan_akhir' => $this->input->post('k'),
				'gejala' => $this->input->post('l'),
				'kondisi_umum_akhir' => $this->input->post('m'),
				'keterangan' => $this->input->post('n'),
				'district_id' => 37514,
				'subdistrict_id' => 37576,
				// 'village_id' => 
			);
			$insert =  $this->curl->simple_post($this->API.'/C_api', $data, array(CURLOPT_BUFFERSIZE => 10)); 
			$this->db->insert('corona_jateng', $data);
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('C_api');
        }else{
            $this->load->view('C_api/create');
        }
	}
	
	function tampil_edit($id=''){
		$data['r'] = $this->db->get_where('corona_jateng', array('village_id' => $id))->row();
		$this->load->view('edit_curl',$data);
	}

    // edit data C_api
    function edit($id=''){
        if(isset($_POST['submit'])){
            $data = array(
                'username'      =>  $this->input->post('b'),
                'password'      =>  $this->input->post('c'),
                'jenis_kelamin' =>  $this->input->post('d'));
			$update =  $this->curl->simple_put($this->API.'/C_api', $data, array(CURLOPT_BUFFERSIZE => 10)); 
			// $id = $this->input->post('a');
			$this->db->update('corona_jateng', $id);
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('C_api');
        }else{
            // $params = array('id'=>  $this->uri->segment(3));
            // $data['data'] = json_decode($this->curl->simple_get($this->API.'/C_api',$params));
            $this->load->view('curl');
        }
    }

    // delete data C_api
    function delete($id){
        if(empty($id)){
            redirect('C_api');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'/C_api', array('id'=>$id), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('C_api');
        }
    }
}
?>
