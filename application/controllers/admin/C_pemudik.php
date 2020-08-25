<?php defined('BASEPATH') OR exit('No direct script access allowed');
		
class C_pemudik extends MY_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_mudik','mmudik', TRUE);
	}

	public function index($id=''){
		$data['title'] = 'Data Pemudik Kabupaten Kudus';
		$data['jenis'] = 'pemudik';
		$data['jml'] = $this->mmudik->jml_pemudik();
        $jml = $data['jml']; 
       
        //var_dump($jml1);die();
		$this->load->view('admin/index', $data);
	}

	public function detail($id){
		$data['title'] = 'Detail Pemudik Per Kecamatan';
		$data['jenis'] = 'Data_pemudik';

        $data['desa'] = $this->mmudik->mudik_desa($id);
        $desa = $data['desa']; 


        //var_dump($desa);die();
		$this->load->view('admin/index', $data);
	}

	public function detail_desa($id){
		$data['title'] = 'Detail Pemudik';
		$data['jenis'] = 'Detail Pemudik';

        $data['mdk'] = $this->mmudik->detail_mudik($id);
        $mdk = $data['mdk']; 
        //var_dump($mdk);die();
		$this->load->view('admin/index', $data);
	}

	public function perdesa($id){
		$data['title'] = 'Detail Pemudik';
		$data['jenis'] = 'Per-Desa';

        // $data['mdk'] = $this->mmudik->detail_mudik($id);
		// $mdk = $data['mdk']; 
		$data['desa'] = $this->mmudik->mudik_desa($id);
        //var_dump($mdk);die();
		$this->load->view('admin/index', $data);
	}
	

}
?>