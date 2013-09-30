<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of news
 *
 * @author HANDITO
 */
class news extends CI_Controller {

    //put your code here

    public function __construct() {
        parent::__construct(); //constructor of its parent class (CI_Controller)
        $this->load->model('news_model'); //loads the model
    }

    //gets all news records from the model and assigns it to a variable
    public function index() {
        $data['news'] = $this->news_model->get_news();
        $data['title'] = 'News archive';

        $this->load->view('templates/header', $data);
        $this->load->view('news/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($slug) {
        $data['news'] = $this->news_model->get_news($slug);

        if (empty($data['new_item'])) {
            show_404();
        }

        $data['title'] = $data['news_item']['title'];

        $this->load->view('templates/header', $data);
        $this->load->view('news/index', $data);
        $this->load->view('templates/footer');
    }

}

/* End of file news.php */
/* Location: ./application/controllers/news.php */