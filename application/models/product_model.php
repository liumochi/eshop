<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/19
 * Time: 18:22
 */
class Product_model extends CI_Model{
    public function get_all_count(){
        $this->db->select('product.*, img.img_src as prod_img');
        $this->db->from('t_product product');
        $this->db->join('t_product_img img', 'product.prod_id=img.prod_id');
        $this->db->where('img.is_main', 1);
        return $this->db->count_all_results();
    }
    public function get_products($limit, $offset){
        $this->db->select('product.*,img.img_src as prod_img');
        $this->db->from('t_product product');
        $this->db->join('t_product_img img','product.prod_id=img.prod_id');
        $this->db->where('img.is_main',1);
        $this->db->limit($limit,$offset);
        return $this->db->get()->result();
    }
}
?>