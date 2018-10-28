<?php
/**
 * Created by PhpStorm.
 * User: lenovo
 * Date: 2018/10/20
 * Time: 15:17
 */
class Blog_model extends CI_Model{
    public function get_blogdata(){
        //$query = $this->db->get('t_blog');

//        $this->db->select('*');
//        $this->db->from('t_blog b');
//        $this->db->join('t_blog_catalog c', 'c.catalog_id = b.catalog_id');
//        $this->db->order_by("b.post_time",'DESC');
//        $query = $this->db->get();
        $sql = "select *,
(SELECT count(*) from t_comment t WHERE t.blog_id = b.blog_id) num
from t_blog b,t_blog_catalog c WHERE b.catalog_id = c.catalog_id
order by b.post_time DESC";
        $query = $this->db->query($sql);
        return $query->result();
        //获得数组形式
    } public function get_blog_by_id($id){
        $sql = "select *,
(SELECT count(*) from t_comment t WHERE t.blog_id = b.blog_id) num
from t_blog b,t_blog_catalog c WHERE b.catalog_id = c.catalog_id
and b.user_id = $id
order by b.post_time DESC";
        $query = $this->db->query($sql);
        return $query->result();
    }
    public function get_catalogdata(){
        $query = $this->db->get('t_blog_catalog');

        return $query->result();
        //获得数组形式
    }
}
