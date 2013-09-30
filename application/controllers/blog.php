<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of blog
 *
 * @author HANDITO
 */
class Blog extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['todo_list'] = array(
            'Clean house',
            'Call mom',
            'study hard',
            'Run'
        );
        $data['title'] = 'blog';
        $data['message'] = 'hi broo!!';
        $this->load->view('templates/header', $data);
        $this->load->view('blog/index', $data);
        $this->load->view('templates/footer');
    }

    public function comments() {
        echo 'Look at this!';
    }

}

/* End of file blog.php */
/* Location: ./application/controllesr/blog.php */