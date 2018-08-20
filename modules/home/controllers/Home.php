<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HomeIndex
 *
 * @author yusda08
 */
defined('BASEPATH') OR exit('No direct script access allowed');

//require_once(APPPATH.'controllers/page/Home.php');    
class Home extends MY_Controller {

    var $a;

    public function __construct() {
        parent::__construct();
        $this->a = aksesLog();
    }

    public function index() {
        if ($this->a) {
            redirect('backend/Home');
        } else {
            redirect('frontend/Home');
        }
    }

}
