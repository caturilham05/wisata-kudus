<?php defined('BASEPATH') or exit('No direct script access allowed');

class C_public extends  CI_Controller
{
    function __construct(){
        parent::__construct();
        $this->load->model('M_curl','mcurl');
    }

    public function index(){
        $nik = $this->input->post('nik');
        $data = array(
            "user_id" => "KOMINFO",
            "password" => "123456",
            "nik" => "3319035806910001"
            // "nik" => "3319035806910003"
            // "nik" => $nik
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
        $data['data'] = json_decode($response, TRUE);

        // $this->load->view('cari', $data);

        echo "<pre>";
        print_r($data);
        echo "</pre>";
        
       
    }

    function hasil(){

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
        $data['data'] = json_decode($response, TRUE);

        // print_r($data);
        $this->load->view('cari', $data);
        // $this->load->view('welcome_message');
    }

    function get(){
        $this->load->view('welcome_message');
    }

    function cari(){

        $nik = $this->input->post('NIK');
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

    public function simpan(){
        if(isset($_POST['submit'])){
            $data = array(
				'NIK' => $this->input->post('NIK'),
				'nama' => $this->input->post('nama')
            );
            print_r($data);exit();
			$insert =  $this->db->insert('data_mudik', $data); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('C_public/get');
        }else{
            $this->load->view('C_public/get');
        }
    }

}
