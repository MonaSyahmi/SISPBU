<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class produk_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
		$this->CI = get_instance();
	}
	
	function insert($data){
		$this->db->insert('produk',$data);
	}

	function delete($id){
		$this->db->where('id_produk', $id);
		$this->db->delete('produk');
	}
	
	function selectone($id){
		$this->db->select("*");
		$this->db->from('produk');
		$this->db->where('id_produk',$id);
		$query = $this->db->get();
		return $query;
	}
	
	function update($data,$id ){
		$this->db->where('id_produk',$id);
		$this->db->update('produk',$data);
	}
        
	function get_produk(){
		$this->db->select("*");
		$this->db->from('produk');
		
		$query = $this->db->get();
		return $query;
	}
	
	function suggestion($nama){
	
	    $this->db->select('lokasi_produk');
	    $this->db->like('lokasi_produk', $lokasi);
   		$query = $this->db->get('produk');
		return $query->result();
    
	}
	
}

?>