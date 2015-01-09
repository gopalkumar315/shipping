<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 12/14/2014
 * Time: 2:25 PM
 */
class Zone_cont extends CI_Controller
{
    public function index()
    { $this->load->database();
        $this->load->helper('url');
        $this->load->library('grocery_CRUD');
        $this->grocery_crud->set_theme('datatables');
   $this->grocery_crud->set_table('delivery_zone');
  
    $output =  $this->grocery_crud->render();
     $data = array(
            'css_files' => $output->css_files,
            'js_files' => $output->js_files,
            'output' => $output->output
        );
        $this->load->view('admin/zone.php',$data);
    }
}
?> 