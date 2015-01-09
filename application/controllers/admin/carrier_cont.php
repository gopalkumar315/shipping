<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 12/14/2014
 * Time: 2:25 PM
 */
class Carrier_cont extends CI_Controller
{
    public function index()
    { $this->load->database();
        $this->load->helper('url');
        $this->load->library('grocery_CRUD');
        $this->grocery_crud->set_theme('datatables');
   $this->grocery_crud->set_table('carrier');
     $this->grocery_crud->unset_add();
   $this->grocery_crud->callback_insert(array($this,'insert_callback'));
  $this->grocery_crud->set_field_upload('logo_image', 'uploads/logo/');
    $this->grocery_crud->change_field_type('choice_shipping', 'dropdown', array('By Actual weight','By Dimensional Weight'));
       $this->grocery_crud->change_field_type('works_with', 'dropdown', array('Zone','Country'));
    $output =  $this->grocery_crud->render();
     $data = array(
            'css_files' => $output->css_files,
            'js_files' => $output->js_files,
            'output' => $output->output
        );
        $this->load->view('admin/carriers.php',$data);
    }
   public function add(){
    
    $this->load->view('admin/add_carrier');
   }
}
?>