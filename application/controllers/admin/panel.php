<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class panel extends CI_Controller {

     public function __construct()
     {
          parent::__construct();
          if(!$this->session->userdata('flag')){
              redirect('admin/welcome/');
          }

     }

     public function index(){
       $this->load->view('admin/index.php');
     }

     public function logout(){
        $this->session->unset_userdata('flag');
        redirect('admin/welcome/');
     }
}
