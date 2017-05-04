<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/19
 * Time: 18:14
 */
class Product extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
    }

    public function index(){

    }
    public function get_products()
    {
        $page=$this->input->get('page');
        $cateId=$this->input->get('cateId');
        $tagId=$this->input->get('tagId');

        $per_page=3;
        $this->load->model('product_model');
        $search=array();
        if($cateId && $cateId!=0){
                $search['cate_id']=$cateId;

        }else if($tagId){
            $search['tag_id']=$tagId;
        }

        $total_records=$this->product_model->get_all_count($search);
        $total_page = ceil($total_records / $per_page);
        $products=$this->product_model->get_products($per_page, ($page-1)*$per_page,$search);
        if($page==$total_page){
            $data=array(
                'products'=>$products,
                'isEnd'=>true
            );

        }else{
                $data = array(
                    'products' => $products,
                    'isEnd' => false
                );

            }
        echo json_encode($data);
        }
        public function detail($prod_id){
            $product=$this->product_model->get_by_id($prod_id);
            if($product){
                $this->load->view('single',array('product'=>$product));
            }

        }
        public function add_cart(){
            $quantity=$this->input->get('quantity');
            $id=$this->input->get('id');
            $product=$this->product_model->get_cart_by_prod_id($id);
            if($product){
                $rows=$this->product_model->update_cart($id,$product->quantity,$quantity,$this->session->userdata('loginUser')->user_id);
                //var_dump($product);
            }else{
                $rows=$this->product_model->add_cart($quantity,$id);

            }
            echo $rows;
        }

}

?>