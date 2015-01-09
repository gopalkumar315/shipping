<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('admin/login');
	}

	public function login(){

		 $username=$this->input->post('username');
		 $password=$this->input->post('password');

		 $this->form_validation->set_rules('username', 'Username', 'required');
		 $this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');

			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('admin/login');
			}
			else
			{
				if($username=='admin' && $password=='admin'){
					$this->session->set_userdata('flag','1');
					redirect('admin/billing');
				}else{
					$this->session->set_flashdata('fail','Invalid user');
					redirect('admin/welcome/index');
				}
			}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
