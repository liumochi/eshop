<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/4/29
 * Time: 15:24
 */
    class User_model extends CI_Model {
        public function get_by_name_and_pwd($username,$password){
            return $this->db->get_where('t_user',array('username'=>$username,'password'=>$password))->row();
        }
    }
?>