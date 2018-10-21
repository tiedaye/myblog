<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
	    $this->load->model("Blog_model");
	    $blog_result = $this->Blog_model->get_blogdata();
	    $catalog_result = $this->Blog_model->get_catalogdata();
		$this->load->view('index',array(
		    "blog_result"=>$blog_result,
            "catalog_result"=>$catalog_result
        ));
	}
    }
