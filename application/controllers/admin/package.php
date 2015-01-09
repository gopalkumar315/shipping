<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class package extends CI_Controller {

	public function index()	{

		$this->load->view('admin/package.index.php');
	}


	public function show(){

    $data=$this->db->get('ts_package')->result();
    echo json_encode($data);
	}

	public function add(){
		$data=json_decode(file_get_contents("php://input"),true);
		$this->db->insert('ts_package',$data);
		$this->show();
	}

	public function edit(){
		$data=json_decode(file_get_contents("php://input"),true);

		$this->db->where('id_package',$data['id_package']);
		$this->db->update('ts_package',$data);
		$this->show();
	}

	public function delete(){	
		$data=json_decode(file_get_contents("php://input"));		
		$this->db->where('id_package',$data->id_package);
		$this->db->delete('ts_package');
	}

}