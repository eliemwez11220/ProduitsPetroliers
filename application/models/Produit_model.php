<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Produit_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get produit by pro_id
     */
    function get_produit($pro_id)
    {
        return $this->db->get_where('produits',array('pro_id'=>$pro_id))->row_array();
    }
    
    /*
     * Get all produits count
     */
    function get_all_produits_count()
    {
        $this->db->from('produits');
        return $this->db->count_all_results();
    }
        
    /*
     * Get all produits
     */
    function get_all_produits($params = array())
    {
        $this->db->order_by('pro_id', 'desc');
        if(isset($params) && !empty($params))
        {
            $this->db->limit($params['limit'], $params['offset']);
        }
        return $this->db->get('produits')->result_array();
    }
        
    /*
     * function to add new produit
     */
    function add_produit($params)
    {
        $this->db->insert('produits',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update produit
     */
    function update_produit($pro_id,$params)
    {
        $this->db->where('pro_id',$pro_id);
        return $this->db->update('produits',$params);
    }
    
    /*
     * function to delete produit
     */
    function delete_produit($pro_id)
    {
        return $this->db->delete('produits',array('pro_id'=>$pro_id));
    }
}
