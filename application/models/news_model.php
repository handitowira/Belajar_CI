<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of news_model
 *
 * @author HANDITO
 */
class news_model extends CI_Model {

    //put your code here
    public function __construct() {
        parent::__construct(); //construct from parent class(CI_Controller)
        $this->load->database(); //load database setting from config/database
    }

    public function get_news($slug = FALSE) {
        if ($slug === FALSE) {
            $query = $this->db->get('news');
            return $query->result_array();
        } else {
            $query = $this->db->get_where('news', array('slug' => $slug));
            return $query->row_array();
        }
    }

    public function set_news() {
        $this->load->helper('url');

        $slug = url_title($this->input->post('title'), 'underscore', TRUE);

        $data = array(
            'title' => $this->input->post('title'),
            'slug' => $slug,
            'text' => $this->input->post('text')
        );

        return $this->db->insert('news', $data);
    }

}

/* End of file news_model.php */
/* Location: ./application/models/news_model.php */