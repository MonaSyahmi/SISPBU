<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class spbu_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->CI = get_instance();
	}
	
	function insert($data){
		$this->db->insert('spbu',$data);
	}

	function delete($id){
		$this->db->where('id_spbu', $id);
		$this->db->delete('spbu');
	}
	
	function selectone($id){
		$this->db->select("*");
		$this->db->from('spbu');
		$this->db->where('id_spbu',$id);
		$query = $this->db->get();
		return $query;
	}
	
	function update($data,$id ){
		$this->db->where('id_spbu',$id);
		$this->db->update('spbu',$data);
	}
        
	function get_spbu(){
		$this->db->select("*");
		$this->db->from('spbu');
		
		$query = $this->db->get();
		return $query;
	}
	
	function suggestion($nama){
	
	    $this->db->select('lokasi_spbu');
	    $this->db->like('lokasi_spbu', $lokasi);
   		$query = $this->db->get('spbu');
		return $query->result();
    
	}
	
}

?>