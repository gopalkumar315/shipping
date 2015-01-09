<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class shipping extends CI_Controller {

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
    $this->load->view('admin/shipping.index.php');
  }

  public function product(){
    $data=$this->db->get('ts_products')->result();
    $final = array();
    foreach($data as $row)
    {
      $product_id =  $row->id_product;
      $p_info = $this->db->where('id_lang', '1')->where('id_product', $product_id)->get('ts_products_lang')->row();
      $row->product_name = $p_info->name;
      $final[] = $row;
    }
    echo json_encode($final);
  }

  public function edit_product(){
    $data = json_decode(file_get_contents("php://input"));
    $this->db->where('id_product',$data->id_product);
    $this->db->update('ts_products', $data);
    $this->product();
  }

  public function delete_product(){
    $data = json_decode(file_get_contents("php://input"));
    $this->db->where('id_product',$data->id_product);
    $this->db->delete('ts_products');
  }

  public function add_product(){
    $data = json_decode(file_get_contents("php://input"));
    print_r($data);
    $this->db->insert('ts_products', $data);
  }
}
