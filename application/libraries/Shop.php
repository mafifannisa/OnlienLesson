<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Shop {

    protected $_CI;

    function __construct() {
        $this->_CI = &get_instance();
    }

    function nampil($template, $data = null) {
        $data['_content'] = $this->_CI->load->view($template, $data, true);
        $data['_header'] = $this->_CI->load->view('shop/header', $data, true);
        $this->_CI->load->view('shop/shop', $data);
    }

}
