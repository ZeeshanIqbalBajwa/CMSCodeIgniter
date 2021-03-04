<?php
defined('BASEPATH') OR exit ('No direct script access allowed');


class Home extends CI_controller{
    public function index(){

        $this->load->view('admin/dashboard.php');
    }
    public function my(){

        $this->load->view('templetes/page.php');
    }
    public function cat(){

        $this->load->view('templetes/categories.php');
    }


   
}



?>