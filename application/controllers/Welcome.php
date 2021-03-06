<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
    }
	public function index()
	{
        $loginUser=$this->session->userdata('loginUser');
        if($loginUser){
            $cart_info=$this->product_model->get_cart_by_user_id($loginUser->user_id);
            $this->session->set_userdata('cartInfo',$cart_info);
        }
        $this->load->view('index');
	}
	public function check_login()
    {
        $loginUser=$this->session->userdata('loginUser');
        if($loginUser){
            echo 'logined';
        }else{
            echo 'unlogined';
        }
    }
    public function login()
    {
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $this->load->model('user_model');
        $user=$this->user_model->get_by_name_and_pwd($username,$password);
        if($user){
            $this->session->set_userdata('loginUser',$user);
            echo 'success';
        }else{
            echo 'fail';
        }
    }
}
