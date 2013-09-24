<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of pages
 *
 * @author HANDITO
 */
class pages extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
    }

    public function view($page = 'home') {
        if (!file_exists('application/views/pages/' . $page . '.php')) {
            //Whooppss, we don't have a page for that
            show_404();
        } else {
            $data['title'] = ucfirst($page); //Auto Capitalize the first letter

            $this->load->view('templates/header', $data);
            $this->load->view('pages/' . $page, $data);
            $this->load->view('templates/footer', $data);
        }
    }

}

/* End of file pages.php */
/* Location: ./application/controllers/pages.php */
