<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
	    parent::__construct();

	    $this->load->model('blog_model');

	  }

		public function index()
		{
			//die(print_r($this->session));
			$data['blogs'] = $this->blog_model->blogs();
			$this->load->template('isi', $data);
		}
}
