<?php
defined('BASEPATH') OR exit ('No direct script access allowed');


class Welcome extends CI_controller{
    public function index(){

        $this->load->view('templetes/page.php');
    }

   
}



?>