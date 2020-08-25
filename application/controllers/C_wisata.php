<?php defined('BASEPATH') or exit('No direct script access allowed');

class C_wisata extends  CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_wisata', 'wisata', 'TRUE');
	}

	public function index($id = '')
	{
		$data['title'] = 'HOME';
		$data['kec']	 = $this->wisata->kecamatan();
		$kec = $data['kec'];
		$data['jml'] = $this->wisata->jml_pemudik();
		$jml = $data['jml'];
		//$data['krn'] = $this->wisata->karantina();
		$data['krn'] = $this->wisata->jml_balai();
		$krn = $data['krn'];
		//$data['grh'] = $this->wisata->karantina_balai();
		$data['grh'] = $this->wisata->jml_graha();
		$grh = $data['grh'];

		//$data['rsn'] = $this->wisata->karantina_rusun();
		$data['rsn'] = $this->wisata->jml_rusun();
		$rsn = $data['rsn'];
		$data['upd'] = $this->wisata->updated_tgl();
		$upd = $data['upd'];
		//$data['sebelum'] = $this->wisata->jum_sebelum();
		//$data['sebelum2'] = $this->wisata->jum_sebelum2();
		//$data['sebelum3'] = $this->wisata->jum_sebelum3();

		// print_r($data);exit();
		//var_dump($upd[0]['created_at']);die();
		$this->load->view('layout/wisata/beranda', $data);
	}

	// public function formA()
	// {
	// 	$data['title'] = "Form KTP KUDUS";

	// 	$data['negara'] = $this->wisata->negara();
	// 	$data['kab']	 = $this->wisata->kab();
	// 	$data['provinsi'] = $this->wisata->kecamatan();
	// 	$this->load->view('layout/wisata/form_mudik_A', $data);
	// }

	public function form()
	{
		$data['title'] = "Form";

		$data['negara'] = $this->wisata->negara();
		$data['kab']	 = $this->wisata->kab();
		$data['provinsi'] = $this->wisata->kecamatan();
		$this->load->view('layout/wisata/form-wisata', $data);
	}

	function tampil_otomatis(){
		$nik = $this->input->post('nik');
        $data = array(
            "user_id" => "KOMINFO",
            "password" => "123456",
            "nik" => $nik
        );
        $curl = curl_init();
        
        curl_setopt_array($curl, array(
            CURLOPT_PORT => "8000",
            CURLOPT_URL => "http://ws.dukcapil:8000/dukcapil/get_json/KOMINFO/NIK",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => json_encode($data),
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json'
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);
        
        header("Content-type:application/json"); 
        // $data = json_encode($response, TRUE);
        echo $response;
	}

	function ambil_data()
	{
		$modul = $this->input->post('modul');
		$id = $this->input->post('id');

		if ($modul == "kabupaten") {
			echo $this->wisata->kabupaten($id);
		} else if ($modul == "kecamatan") {
			echo $this->wisata->kecamatan($id);
		} else if ($modul == "kelurahan") {
			echo $this->wisata->kelurahan($id);
		}
	}

	function create()
	{
		// $this->form_validation->set_rules('nik', '<span class="text text-danger" style="font-size:9pt; font-weight:bold">NIK Sudah Ada, Coba Lagi</span>', 'is_unique[data_wisata.nik]');
		// $this->form_validation->set_rules('kectujuan', 'kectujuan', 'required');
		// $this->form_validation->set_message('check_default', '<span class="text text-danger" style="font-size:9pt; font-weight:bold">Kecamatan Belum Dipilih</span');
		if ($this->form_validation->run() === TRUE) {
			//  if(isset($_POST['submit'])){
			$nama = stripHTMLtags(trim($this->input->post('nama', 'true')));
			$destinasi_wisata = stripHTMLtags(trim($this->input->post('destinasi_wisata', 'true')));
			$tanggal = stripHTMLtags(trim($this->input->post('tanggal', 'true')));
			$jenis_kelamin = stripHTMLtags(trim($this->input->post('jenis_kelamin', 'true')));
			$no_hp = stripHTMLtags(trim($this->input->post('no_hp', 'true')));

			$data = array(
				'nama' => $nama,
				'destinasi_wisata' => $nama,
				'tanggal' => $tanggal,
				'jenis_kelamin' => $jenis_kelamin,
				'no_hp' => $no_hp,
			);
			// echo "<pre>";
			// print_r($data);exit();
			// echo "</pre>";
			$insert = $this->db->insert('data_wisata', $data);
			// var_dump($data);die();
			if ($insert) {
				$this->session->set_flashdata('msg', 'Insert Data Berhasil');
			} else {
				$this->session->set_flashdata('msg', 'Insert Data Gagal');
			}
		} 
		echo "<script>window.location='".site_url('c_wisata')."';</script>";
		
	}

	function tambah()
	{
		$this->form_validation->set_rules('nik', '<span class="text text-danger" style="font-size:9pt; font-weight:bold">NIK Sudah Ada, Coba Lagi</span>', 'is_unique[data_wisata.nik]');
		// $this->form_validation->set_rules('kectujuan', 'kectujuan', 'required');
		// $this->form_validation->set_message('check_default', '<span class="text text-danger" style="font-size:9pt; font-weight:bold">Kecamatan Belum Dipilih</span');
		if ($this->form_validation->run() === TRUE) {
			// if(isset($_POST['submit'])){			
			$nik =  stripHTMLtags(trim($this->input->post('nik', 'true')));
			$nama = stripHTMLtags(trim($this->input->post('nama', 'true')));
			$tgl_lahir = stripHTMLtags(trim($this->input->post('tanggal_lahir', 'true')));
			$jk = stripHTMLtags(trim($this->input->post('jenis_kelamin', 'true')));
			$hp = stripHTMLtags(trim($this->input->post('hp', 'true')));
			$neg = trim($this->input->post('negara', 'true'));
			$asalkota = stripHTMLtags(trim($this->input->post('asalkota', 'true')));
			$keper = stripHTMLtags(trim($this->input->post('keperluan', 'true')));
			$perluan = stripHTMLtags(trim($this->input->post('perlu_lainya', 'true')));
			$trasportasi = stripHTMLtags(trim($this->input->post('transportasi', 'true')));
			$estimasi = trim($this->input->post('estimasisampai', 'true'));
			$lama = stripHTMLtags(trim($this->input->post('lamamudik', 'true')));
			$hubtujuan = stripHTMLtags(trim($this->input->post('hubungan_tujuan', 'true')));
			$hubtujuanlain = stripHTMLtags(trim($this->input->post('hub_tujuanlain', 'true')));
			$kec = stripHTMLtags(trim($this->input->post('kectujuan', 'true')));
			$kel = stripHTMLtags(trim($this->input->post('desa_tujuan', 'true')));
			$no_rt	= stripHTMLtags(trim($this->input->post('tujuan_no_rt', 'true')));
			$no_rw  = stripHTMLtags(trim($this->input->post('tujuan_no_rw', 'true')));
			$kon_sehat = stripHTMLtags(trim($this->input->post('kondisikesehatan', 'true')));
			$kon_lain = stripHTMLtags(trim(implode(",", $this->input->post('kondisilain', 'true'))));
			$keluhan_lain = stripHTMLtags(trim($this->input->post('keluhanlain', 'true')));
			$tgl_buat = date('Y-m-d');

			$data = array(
				'nik' => $nik,
				'nama' => $nama,
				'tgl_lahir' => $tgl_lahir,
				// 'umur' => $umur,
				'jenis_kelamin' => $jk,
				'hp' => $hp,
				'negara_asal_mudik' => $neg,
				'kota_asal_mudik' => $asalkota,
				'keperluan' => $keper,
				'keperluan_lainya' => $perluan,
				'alat_transportasi' => $trasportasi,
				'waktu_kedatangan' => $estimasi,
				'lama_mudik' => $lama,
				'hubungantujuan' => $hubtujuan,
				'hubungan_tujuan_lainya' => $hubtujuanlain,
				'kecamatan_tujuan' => $kec,
				'desa_tujuan' => $kel,
				'rt_tujuan' => $no_rt,
				'rw_tujuan' => $no_rw,
				'data_kesehatan' => $kon_sehat,
				'kondisi_lain' => $kon_lain,
				'keluhan_lain' => $keluhan_lain,
				'created' => $tgl_buat,
				'jenis' => 'Asli'
			);
			// echo "<pre>";
			// print_r($data);exit();
			// echo "</pre>";
			$insert = $this->db->insert('data_wisata', $data);
			// var_dump($data);die();
			if ($insert) {
				$this->session->set_flashdata('msg', 'Insert Data Berhasil');
			} else {
				$this->session->set_flashdata('msg', 'Insert Data Gagal');
			}
			redirect('C_wisata');
		} else {
			echo "<script>
			alert('NIK SUDAH DIGUNAKAN, Coba Lagi')
			</script>";
			redirect('C_wisata/formA','refresh');
		}
	}

	public function post_wisata(){

	}



	public function list()
	{
		$data['title'] = 'Data Warga Terdaftar';
		$data['wisata'] = $this->wisata->wisatawan();
		$this->load->view('layout/wisata/list-wisatawan', $data);
	}
}
