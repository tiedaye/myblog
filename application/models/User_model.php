<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/10/27
 * Time: 21:50
 */

class User_model extends CI_Model{
    public function get_data_by_email($email){
        $query = $this->db->get_where("t_user",array(
            "email" =>$email
        ));
        return $query->result();
    }
    public function save($email,$name,$pwd,$sex){
        $query = $this->db->insert("t_user",array(
            "email" =>$email,
            "name" =>$name,
            "password" =>$pwd,
            "sex" =>$sex
        ));
        return $query;
    }
    public function check_login($email,$pwd){
       $user = $this->db->get_where("t_user",array(
            "email"=>$email,
            "password"=>$pwd
         ));
       return $user->row();
    }
}