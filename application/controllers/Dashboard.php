<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function index() {
      $a=$this->session->userdata('nama');
  		if($a<>null){
  		    $this->template->display('dashboard');
  		}else{
  			  $this->load->view('login');
  		}
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }

}
