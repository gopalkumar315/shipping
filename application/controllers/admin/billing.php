<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 12/14/2014
 * Time: 2:25 PM
 */
class Billing extends CI_Controller
{
    public function index()
    {
         if($this->session->userdata('flag')=='1'){
        $this->load->database();
        $this->load->helper('url');
        $this->load->library('grocery_CRUD');
        $this->grocery_crud->set_table('billing');
        $this->grocery_crud->set_theme('datatables');
        $this->grocery_crud->set_field_upload('logo_image', 'uploads/logo/');
        $query=$this->db->query("select name from carrier");
        if ($query->num_rows() > 0)
{
        $a=array();
        foreach($query->result() as $row){
            $a[]=$row->name;
        }
        $this->grocery_crud->field_type('carrier_name', 'dropdown',$a);
    }
        $output = $this->grocery_crud->render();
        $data = array(
            'css_files' => $output->css_files,
            'js_files' => $output->js_files,
            'output' => $output->output
        );
       
        $this->load->view('admin/billing.php', $data);
    }else{
        $this->load->view('admin/login');
    }
    }
     
   
    
}