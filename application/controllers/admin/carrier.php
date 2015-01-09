<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 12/14/2014
 * Time: 2:25 PM
 */
class Carrier extends CI_Controller
{
	public function index()
	{
		$this->load->view('admin/carrier.index.php');
	}

	public function add(){
		$this->load->view('admin/add_carrier');	
	}

	public function add_career(){
	 $data = json_decode(file_get_contents("php://input"));
	 $query = $this->db->query('SELECT max(id_carrier) as maxid FROM ts_carrier')->row();			
	 $data->id_carrier= ($query->maxid)+1;  
	 $this->db->insert('ts_carrier', $data);
	}

	public function show(){
		$data=$this->db->get('ts_carrier')->result();
		echo json_encode($data);
	}

	 //edit carrier page
	public function edit($id){
		$data=array('id'=>$id);
		$this->load->view('admin/edit_carrier',$data);	
	}


	//send data to edit_carrier page forn modifcation

	public function edit_carrier($id) {
		$data=$this->db->where('id_carrier',$id)->get('ts_carrier')->row();
		echo json_encode($data);
	}


	//edit done

	public function edit_done(){
		$data = json_decode(file_get_contents("php://input"));
		$this->db->where('id_carrier',$data->id_carrier);
    	$this->db->update('ts_carrier', $data);
	}



	//deletion of record
	public function del(){
	$data = json_decode(file_get_contents("php://input"));
    $this->db->where('id_carrier',$data->id_carrier);
    $this->db->delete('ts_carrier');
	}

}