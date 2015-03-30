<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class artikel_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->CI = get_instance();
	}
	
	function insert($data){
		$this->db->insert('artikel',$data);
	}
		
	
	function delete($id){
		$this->db->where('id_artikel', $id);
		$this->db->delete('artikel');
	}
	
	function selectone($id){
		$this->db->select("*");
		$this->db->from('artikel');
		$this->db->where('id_artikel',$id);
		$query = $this->db->get();
		return $query;
	}
	
	function update($data,$id ){
		$this->db->where('id_artikel',$id);
		$this->db->update('artikel',$data);
	}
    
	}
	

?>