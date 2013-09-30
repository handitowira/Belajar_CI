<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of products
 *
 * @author HANDITO
 */
class Products extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
    }

    //If your URI contains more then two segments they will be passed to your function as parameters. like :
    //http://localhost/Belajar_CI/Products/shoes/sandal/123
    //Your function will be passed URI segments 3 and 4
    public function shoes($sandal, $id) {
        echo $sandal;
        echo $id;
    }

}
