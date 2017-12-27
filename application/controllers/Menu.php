<?php
class Menu extends CI_Controller{

    function __construct() {
        parent::__construct();
    }

    function index() {
		//$a=$this->session->userdata('nama');
		//if($a<>null){
		$data['record']=  $this->db->get('tb_menu')->result();
    $this->template->display('menu/view',$data);
		//}else{
			// $this->load->view('login');
		//}

    }

    function add() {
        if(isset($_POST['submit'])) {
            $data   =   array(  'nama_menu' =>  $_POST['nama'],
                                'link'      =>  $_POST['link'],
                                'icon'      =>  $_POST['icon'],
                                'kat_menu'  =>  $_POST['kat_menu']);
            $this->db->insert('tb_menu',$data);
            redirect('menu');
        }
        else {
            $data['record']=$this->db->get_where('tb_menu', array('kat_menu' =>0))->result();
            $this->template->display('menu/tambah',$data);
        }
    }

    function edit()
    {
        if(isset($_POST['submit']))
        {
            $data   =   array(  'nama_menu' =>  $_POST['nama'],
                                'link'      =>  $_POST['link'],
                                'icon'      =>  $_POST['icon'],
                                'kat_menu'  =>  $_POST['kat_menu']);

            $this->db->where('id_menu',$_POST['id']);
            $this->db->update('tb_menu',$data);
            redirect('menu');
        }
        else {
            $id= $this->uri->segment(3);
            $data['record']=  $this->db->get_where('tb_menu',array('id_menu'=> $id))->row_array();
            $data['katmenu']=$this->db->get_where('tb_menu', array('kat_menu' =>0))->result();
            $this->template->display('menu/edit',$data);
        }
    }


    function delete($id){
		$this->db->where('id_menu',$id);
		$this->db->delete('tb_menu');
       	redirect('menu');
    }
}
