<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class fasilitas_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->CI = get_instance();
	}
	
	function insert($data){
		$this->db->insert('fasilitas',$data);
	}

	function delete($id){
		$this->db->where('id_fasilitas', $id);
		$this->db->delete('fasilitas');
	}
	
	function selectone($id){
		$this->db->select("*");
		$this->db->from('fasilitas');
		$this->db->where('id_fasilitas',$id);
		$query = $this->db->get();
		return $query;
	}
	
	function update($data,$id ){
		$this->db->where('id_fasilitas',$id);
		$this->db->update('fasilitas',$data);
	}
        
	function get_fasilitas(){
		$this->db->select("*");
		$this->db->from('fasilitas');
		
		$query = $this->db->get();
		return $query;
	}
	
	function suggestion($nama){
	
	    $this->db->select('nama_fasilitas');
	    $this->db->like('nama_fasilitas', $lokasi);
   		$query = $this->db->get('fasilitas');
		return $query->result();
    
	}
	
}

?>