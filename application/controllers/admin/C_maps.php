<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_maps extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('M_maps', 'um');
	}

	public function index() {
		$this->load->view('welcome_message');
	}

	function get() {
		if (isset($_POST['nama'])) {
			$nama = $_POST['nama'];
			$results = $this->um->get_username($nama);
			if ($results === TRUE) {
				echo '<span style="color:red;">Username unavailable</span>';
			} else {
				echo '<span style="color:green;">Username available</span>';
			}
		} else {
			echo '<span style="color:red;">Username is required field.</span>';
		}
	}
}
