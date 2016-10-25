<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products_model extends CI_Model {

    public function getAllProducts(){
        $this->db->select('product.id AS identifier, title, description, price, category, brand_name, country');
        $this->db->from('product');
        $this->db->join('category', 'product.category_id = category.id');
        $this->db->join('manufacturer', 'product.manufacturer_id = manufacturer.id');
        $this->db->join('brand', 'product.brand_id = brand.id');
        $this->db->order_by('product.id', "desc");
        $result =  $this->db->get()->result();
        return $result;
    }

    public function fetchTables(){
        $result['brands'] = $this->db->get('brand')->result();
        $result['categories'] = $this->db->get('category')->result();
        $result['manufacturers'] = $this->db->get('manufacturer')->result();

        return $result;
    }

    public function addProduct($data){
        $this->db->insert('product',$data);
    }

    function deleteProduct($id){
        $this->db->where('id', $id);
        $this->db->delete('product');
    }

    function updateProduct($data, $id){
        $this->db->where("id", $id);
        $this->db->update('product',$data);
    }

    public function getParticularProduct($id){
        $this->db->where("id", $id);
        $result =  $this->db->get('product')->row();
        return $result;
    }
}