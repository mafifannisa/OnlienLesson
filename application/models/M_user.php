<?php

class M_user extends CI_Model {

    private $table = "tb_admin";

    function cek($username, $password) {
        $this->db->where("username", $username);
        $this->db->where("password", $password);
        return $this->db->get("tb_admin");
    }

    function semua() {
        return $this->db->get("tb_admin");
    }

    function cekKode($kode) {
        $this->db->where("username", $kode);
        return $this->db->get("tb_admin");
    }

    function cekId($kode) {
        $this->db->where("id", $kode);
        return $this->db->get("tb_admin");
    }

    function getLoginData($usr, $psw) {
        $u = $usr;
        $p = $psw;
        $q_cek_login = $this->db->get_where('tb_admin', array('username' => $u, 'password' => $p));
        if (count($q_cek_login->result()) > 0) {
            foreach ($q_cek_login->result() as $qck) {
                foreach ($q_cek_login->result() as $qad) {
                    $sess_data['logged_in'] = 'aingLoginWebYeuh';
                    $sess_data['id'] = $qad->id;
                    $sess_data['username'] = $qad->username;
                    $sess_data['nama'] = $qad->nama;
                    $sess_data['gambar'] = $qad->gambar;
                    $this->session->set_userdata($sess_data);
                }
                redirect('dashboard');
            }
        } else {
            $this->session->set_flashdata('result_login', '<br> Username atau Password yang anda masukkan salah.');
            header('location:' . base_url() . 'login');
        }
    }

    function update($id, $info) {
        $this->db->where("id", $id);
        $this->db->update("tb_admin", $info);
    }

    function simpan($info) {
        $this->db->insert("tb_admin", $info);
    }

    function hapus($kode) {
        $this->db->where("id", $kode);
        $this->db->delete("tb_admin");
    }

}
