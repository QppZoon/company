<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['meno'] = "Karol";
		$data['dnes'] = date("j.n.Y");
        $data['teploty']['pondelok'] = 25.0;
        $data['teploty']['utorok'] = 21.0;
        $data['teploty']['streda'] = 35.0;
        $data['teploty']['stvrtok'] = 2.0;
        $data['teploty']['piatok'] = -15.0;
        $data['teploty']['sobota'] = 20.0;
        $data['teploty']['nedela'] = 10.0;

		$this->load->view('template/header');
        $this->load->view('template/navigation');
        $this->load->view('home',$data);
        $this->load->view('template/footer');
	}
}
