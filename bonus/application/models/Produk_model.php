<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Produk_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get produk dari nama_produk
     */
    function get_produk($nama_produk)
    {
        return $this->db->get_where('produk',array('nama_produk'=>$nama_produk))->row_array();
    }
        
    /*
     * Get semua produk
     */
    function get_all_produk()
    {
        $this->db->order_by('nama_produk', 'desc');
        return $this->db->get('produk')->result_array();
    }
        
    /*
     * Tambah produk baru
     */
    function add_produk($params)
    {
        $this->db->insert('produk',$params);
        return $this->db->insert_id();
    }
    
    /*
     * Update produk
     */
    function update_produk($nama_produk,$params)
    {
        $this->db->where('nama_produk',$nama_produk);
        return $this->db->update('produk',$params);
    }
    
    /*
     * Delete produk
     */
    function delete_produk($nama_produk)
    {
        return $this->db->delete('produk',array('nama_produk'=>$nama_produk));
    }
}